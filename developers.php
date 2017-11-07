<?php

// smarty
require 'smarty.php';

// функции
require_once 'scripts/functions.php';

// вывод ошибок
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// вывод даты в подвале
$date = getToday();
$smarty->assign("date", $date);

// вывод информации о разработчике
if (isset($_GET["id"])) {
    $db = getConnection();
    $id = (int)$_GET["id"];
    $developer = getDeveloper($db, ['ID' => $id]);
    $smarty->assign("developer", $developer);
    $smarty->assign("id", $id);

    $devSkills = [];

    // навыки разработчика
        $skillsOfDeveloper = getAllowableDevelopers($db, $developer['ID']);
        foreach ($skillsOfDeveloper as $skill) {
            $devSkills[] = $skill['NAME'];
        }
    $smarty->assign("skills", $skillsOfDeveloper);

    // допустимые проекты для разработчика
    $allProjects = getProjects($db);
    $skillsForProject = [];
    foreach ($allProjects as $proj) {
        $skills = getAllowableProjects($db, $proj['ID']);
        foreach ($skills as $skill) {
            $skillsForProject[] = $skill['NAME'];
        }
        $result_array = array_diff($skillsForProject, $devSkills);
        if (empty($result_array)) {
            $currentProjects[] = $proj;
        }
    }
    if (isset($currentProjects)) {
        $smarty->assign("projects", $currentProjects);
    }
}

$smarty->display("templates/developers.tpl");