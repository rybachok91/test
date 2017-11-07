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

$db = getConnection();

// вывод списка записей по типу (разработчики или навыки)
if (isset($_GET["type"])) {
    $type = $_GET["type"];
    switch ($type) {

        case "developer":

            $eachDeveloper = [];
            $allDevelopers = getDevelopers($db);
            $allProjects = getProjects($db);

            foreach ($allDevelopers as $developer) {
                $eachDeveloper[] = getDataOfDevelopers($db, $developer, $allProjects);
            }

            $smarty->assign("titleName", "Имя");
            $smarty->assign("titleRelation", "Навыки");
            $smarty->assign("linkForType1", "developers");
            $smarty->assign("linkForType2", "skills");
            $smarty->assign("type", $eachDeveloper);
            break;

        case "skill":

            $eachSkill = [];
            $allSkills = getSkills($db);
            $allDevelopers = getDevelopers($db);
            $allProjects = getProjects($db);

            foreach ($allSkills as $skill) {
                $currentSkill = [];
                $currentSkill[] = $skill;

                // разработчики с выбранным навыком
                $developers = getSkillsOfDeveloper($db, $skill['ID']);

                $currentSkill[] = $developers;

                // проекты с выбранным навыком
                $projects = getSkillsOfProject($db, $skill['ID']);

                $currentSkill[] = $projects;

                $eachSkill[] = $currentSkill;
            }
            $smarty->assign("titleName", "Название");
            $smarty->assign("titleRelation", "Разработчики");
            $smarty->assign("linkForType1", "skills");
            $smarty->assign("linkForType2", "developers");
            $smarty->assign("type", $eachSkill);
            break;
    }
}

$smarty->display("templates/all.tpl");