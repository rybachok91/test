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

// вывод требуемой формы
if (isset($_GET["type"])) {
    $formForType = $_GET["type"];
    switch ($formForType) {
        case "developer":
            $smarty->assign("developerForm", $formForType);
            break;
        case "skill":
            $smarty->assign("skillForm", $formForType);
            break;
        case "project":
            $smarty->assign("projectForm", $formForType);
            break;
    }
}
// вывод навыков в список
$db = getConnection();
$skills = getSkills($db);
$smarty->assign("skills", $skills);

// сохранение введенного имени
if (isset($_POST["name"])) {
    $name = $_POST["name"];
    $smarty->assign("name", $name);
}

// сохранение введенного адреса почты
if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $smarty->assign("email", $email);
}

// сохранение выбранных навыков
if (isset($_POST["selected"])) {
    $selectedSkill = $_POST["selected"];
    $smarty->assign("selectedSkill", $selectedSkill);
}

// добавление новой записи в базу
if (isset($_POST["add"])) {

    $check = $_POST["type"];
    $db = getConnection();

    switch ($check) {
        // добавление разработчика
        case "developer":
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            if ($name === '' || $email === '' || $password === '' || !isset($_POST["selected"])) {
                $error = "Заполните все поля!";
                $smarty->assign("error", $error);
            } else {
                $developerSkills = $_POST["selected"];

                $addDeveloper = $db->prepare("INSERT INTO DEVELOPERS (NAME, EMAIL, PASSWORD) VALUES (:NAME, :EMAIL, :PASSWORD)");
                $addDeveloper->bindValue('NAME', $_POST['name']);
                $addDeveloper->bindValue('EMAIL', $_POST['email']);
                $addDeveloper->bindValue('PASSWORD', $_POST['password']);
                $result = $addDeveloper->execute();

                $devSkill = null;


                $insertedId = getInsertedDeveloperId($db, $password);

                $addRelation = $db->prepare("INSERT INTO DEVELOPERS_SKILLS
                VALUES (:ID,(SELECT ID FROM SKILLS WHERE SKILLS.NAME = :SKILL))");

                $addRelation->bindParam('SKILL', $devSkill);
                $addRelation->bindParam('ID', $insertedId);

                foreach ($developerSkills as $skill) {
                    $devSkill = $skill;
                    $result = $addRelation->execute();
                }

                header('Location: developers.php?id='.$insertedId);
            }
            break;
        case "project":
            // добавление проекта
            $name = $_POST["name"];
            if ($name === '' || !isset($_POST["selected"])) {
                $error = "Заполните все поля!";
                $smarty->assign("error", $error);
            } else {

                $projectSkills = $_POST["selected"];
                $addProject = $db->prepare("INSERT INTO PROJECTS (NAME)
VALUES (:NAME)");
                $addProject->execute(array('NAME' => $name));

                $insertedId = getInsertedProjectId($db, $name);

                foreach ($projectSkills as $projSkill) {
                    $addRelation = $db->prepare("INSERT INTO SKILLS_PROJECTS
VALUES ((SELECT ID FROM PROJECTS WHERE PROJECTS.NAME=:PROJECT),
(SELECT ID FROM SKILLS WHERE SKILLS.NAME=:SKILL))");
                    $addRelation->execute(array('SKILL' => $projSkill, 'PROJECT' => $name));
                }
                header('Location: projects.php?id='.$insertedId);
            }
            break;
        case "skill":
            // добавление навыка
            $name = $_POST["name"];
            if ($name === '') {
                $error = "Заполните все поля!";
                $smarty->assign("error", $error);
            } else {

                $addSkill = $db->prepare("INSERT INTO SKILLS (NAME) VALUES (:SKILL)");
                $addSkill->execute(array('SKILL' => $name));

                $insertedId = getInsertedSkillId($db, $name);

                header('Location: skills.php?id='.$insertedId);
            }
            break;
    }
}

$smarty->display("templates/addNew.tpl");