<?php

// smarty
require 'smarty.php';

// функции
//require_once 'scripts/functions.php';

// вывод ошибок
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

// вывод даты в подвале
$date = getToday();
$smarty->assign("date", $date);

// вывод информации о проекте
if (isset($_GET["id"])) {
    $db = getConnection();

    if (!$project = getProject($db, ['ID' => $_GET['id']])) {
        print_r($db->errorInfo());
    }

    $smarty->assign("project", $project);
    $smarty->assign("id", $_GET['id']);

    // требуемые навыки для проекта
    $skills = getAllowableProjects($db, $project['ID']);
    foreach ($skills as $skill) {
        $projSkills[] = $skill['NAME'];
    }

    $smarty->assign("skills", $skills);

    // разработчики, подходящие к проекту
    $allDevelopers = getDevelopers($db);
    foreach ($allDevelopers as $dev) {
        $skills = getAllowableDevelopers($db, $dev['ID']);
        foreach ($skills as $skill) {
            $devSkills[] = $skill['NAME'];
        }
        $result_array = array_diff($projSkills, $devSkills);
        if (empty($result_array)) {
            $currentDevelopers[] = $dev;
        }
    }
    if (isset($currentDevelopers)) {
        $smarty->assign("developers", $currentDevelopers);
    }
}

$smarty->display("templates/projects.tpl");
