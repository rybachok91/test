<?php

// smarty
require 'smarty.php';

// функции
require_once 'scripts/functions.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// вывод даты в подвале
$date = getToday();
$smarty->assign("date", $date);

// вывод данных для редактирования
if (isset($_GET["id"])) {

    $db = getConnection();
    $id = (int)$_GET["id"];
    $check = $_GET["link"];

    switch ($check) {
        case "developer":
            // вывод данных о разработчике
            $developer = (int)$_GET["id"];
            $currentDeveloper = getDeveloper($db, ['ID' => $id]);
            $smarty->assign("currentDeveloper", $currentDeveloper);
            $skills = getCurrentSkills($db, "DEVELOPERS_SKILLS", "DEVELOPERS", "DEVELOPER_ID", $developer);
            $allSkills = $skills[0];
            $selectedSkills = $skills[1];
            $smarty->assign("skills", $allSkills);
            $smarty->assign("selectedSkill", $selectedSkills);
            break;
        case "project":
            // вывод данных о проекте
            $project = (int)$_GET["id"];
            $currentProject = getProject($db, ['ID' => $id]);
            $smarty->assign("currentProject", $currentProject);
            $skills = getCurrentSkills($db, "SKILLS_PROJECTS", "PROJECTS", "PROJECT_ID", $project);
            $allSkills = $skills[0];
            $selectedSkills = $skills[1];
            $smarty->assign("skills", $allSkills);
            $smarty->assign("selectedSkill", $selectedSkills);
            break;
        case "skill":
            // вывод данных о навыке
            $skill = (int)$_GET["id"];
            $currentSkill = getSkill($db, ['ID' => $id]);
            $smarty->assign("currentSkill", $currentSkill);
            break;
    }
    $backLink = $_SERVER['HTTP_REFERER'];
    $smarty->assign("backLink", $backLink);
}

// обновление данных
if (isset($_POST["edit"])) {

    $db = getConnection();
    $id = (int)$_GET["id"];
    $check = $_POST["action"];

    switch ($check) {
        case "developer":
            $editDeveloper = $db->prepare("UPDATE DEVELOPERS SET NAME=:NAME, EMAIL=:EMAIL, PASSWORD=:PASSWORD WHERE ID=:ID");
            $queryComplete = $editDeveloper->execute(array('ID' => $id, 'NAME' => $_POST["name"], 'EMAIL' => $_POST["email"], 'PASSWORD' => $_POST["password"]));
            updateSkills($db, "DEVELOPERS_SKILLS", "DEVELOPER_ID", $id);
            header('Location: developers.php?id='.$id);
            break;
        case "project":
            $editProject = $db->prepare("UPDATE PROJECTS SET NAME=:NAME WHERE ID=:ID");
            $queryComplete = $editProject->execute(array('ID' => $id, 'NAME' => $_POST["name"]));
            updateSkills($db, "SKILLS_PROJECTS", "PROJECT_ID", $id);
            header('Location: projects.php?id='.$id);
            break;
        case "skill":
            $editSkill = $db->prepare("UPDATE SKILLS SET NAME=:NAME WHERE ID=:ID");
            $queryComplete = $editSkill->execute(array('ID' => $id, 'NAME' => $_POST["name"]));
            header('Location: skills.php?id='.$id);
            break;
    }
}

// удаление данных
if (isset($_POST["remove"])) {

    $db = getConnection();
    $check = $_POST["action"];

    if ($_POST["id"]) {
        $id = (int)$_POST["id"];
    } else {
        $id = (int)$_GET["id"];
    }

    switch ($check) {
        case "developer":
            deleteRow($db, "DEVELOPERS_SKILLS", "DEVELOPER_ID", "DEVELOPERS", $id);
            header('Location: index.php');
            break;
        case "project":
            deleteRow($db, "SKILLS_PROJECTS", "PROJECT_ID", "PROJECTS", $id);
            header('Location: index.php');
            break;
        case "skill":
            deleteRow($db, $relation = null, $relationID = null, "SKILLS", $id);
            header('Location: index.php');
            break;
    }
}

$smarty->display("templates/edit.tpl");