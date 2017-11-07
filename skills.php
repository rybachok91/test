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

// вывод информации о навыке
if (isset($_GET["id"])) {
    $db = getConnection();
    $id = $_GET["id"];
    $skill = getSkill($db, ['ID' => $id]);
    $smarty->assign("skill", $skill);
    $smarty->assign("id", $id);

// разработчики с выбранным навыком
    $developers = getSkillsOfDeveloper($db, $id);
    $smarty->assign("developers", $developers);

// проекты с выбранным навыком
    $projects = getSkillsOfProject($db, $id);
    $smarty->assign("projects", $projects);

    $smarty->display("templates/skills.tpl");
}