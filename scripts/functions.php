<?php

function getToday()
{
    date_default_timezone_set('Europe/Moscow');
    return date("d.m.y");
}

function getConnection()
{
//$db_username = "hr";
//$db_password = "12345";
//$db_name = "oci:dbname=orcl";
//$db = new PDO($db_name,$db_username,$db_password);
    $db_username = "RUBACHOK";
    $db_password = "12345";
    $db_name = "oci:dbname=NEWCONTACTBASE_DEV;charset=AL32UTF8";
    return new PDO($db_name, $db_username, $db_password);
}

function getRowId(PDO $db, $table, $column, $value)
{
    $query = $db->prepare("SELECT ID FROM $table WHERE $column = :VALUE");
    $query->execute(array('VALUE' => $value));
    $id = $query->fetch(PDO::FETCH_COLUMN);
    return (int)$id;
}

function getAll(PDO $db, $table)
{
    $getAll = $db->prepare("SELECT ID, NAME FROM $table ORDER BY NAME");
    $getAll->execute();
    $allData = $getAll->fetchAll(PDO::FETCH_ASSOC);
    return $allData;
}

function getDevelopers(PDO $db)
{
    return getAll($db, 'DEVELOPERS');
}

function getProjects(PDO $db)
{
    return getAll($db, 'PROJECTS');
}

function getDeveloper(PDO $db, $arguments)
{
    return getRow($db, 'DEVELOPERS', $arguments);
}

function getSkill(PDO $db, $arguments)
{
    return getRow($db, 'SKILLS', $arguments);
}

function getProject(PDO $db, $arguments)
{
    return getRow($db, 'PROJECTS', $arguments);
}

function getRow(PDO $db, $table, $arguments)
{
    $query = $db->prepare("SELECT * FROM ${table} WHERE ID=:ID");
    foreach ($arguments as $key => $value) {
        $query->bindValue($key, $value);
    }
    if ($query->execute()) {
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    return false;
}

function getSkills(PDO $db)
{
    $getSkill = $db->prepare("SELECT * FROM SKILLS ORDER BY NAME");
    $getSkill->execute();
    $skills = $getSkill->fetchAll(PDO::FETCH_ASSOC);
    return $skills;
}

function getInsertedDeveloperId(PDO $db, $password)
{
    return getRowId($db, 'DEVELOPERS', 'PASSWORD', $password);
}

function getInsertedProjectId(PDO $db, $name)
{
    return getRowId($db, 'PROJECTS', 'NAME', $name);
}

function getInsertedSkillId(PDO $db, $name)
{
    return getRowId($db, 'SKILLS', 'NAME', $name);
}

function getAllowableDevelopers(PDO $db, $id)
{
    return getRelations(
        $db,
        'SKILLS',
        'DEVELOPERS',
        'DEVELOPERS_SKILLS',
        'SKILL_ID',
        'DEVELOPER_ID',
        $id
    );
}

function getAllowableProjects(PDO $db, $id)
{
    return getRelations(
        $db,
        'SKILLS',
        'PROJECTS',
        'SKILLS_PROJECTS',
        'SKILL_ID',
        'PROJECT_ID',
        $id
    );
}

function getSkillsOfDeveloper(PDO $db, $skillId)
{
    return getRelations(
        $db,
        'DEVELOPERS',
        'SKILLS',
        'DEVELOPERS_SKILLS',
        'DEVELOPER_ID',
        'SKILL_ID',
        $skillId
    );
}

function getSkillsOfProject(PDO $db, $skillId)
{
    return getRelations(
        $db,
        'PROJECTS',
        'SKILLS',
        'SKILLS_PROJECTS',
        'PROJECT_ID',
        'SKILL_ID',
        $skillId
    );
}

function getDataOfDevelopers(PDO $db, $project, $allProjects)
{
    return getDataOfType(
        $db,
        $project,
        $allProjects,
        'DEVELOPERS',
        'PROJECTS',
        'DEVELOPERS_SKILLS',
        'SKILLS_PROJECTS',
        'DEVELOPER_ID',
        'DEVELOPERS_SKILLS'
    );
}

function getDataOfProjects(PDO $db, $project, $allDevelopers)
{
    return getDataOfType(
        $db,
        $project,
        $allDevelopers,
        'PROJECTS',
        'DEVELOPERS',
        'SKILLS_PROJECTS',
        'DEVELOPERS_SKILLS',
        'PROJECT_ID',
        'DEVELOPER_ID'
    );
}

function getRelations(PDO $db, $table1, $table2, $relation, $relationID1, $relationID2, $id)
{
    $get = $db->prepare("SELECT $table1.ID, $table1.NAME FROM $table1
JOIN $relation ON $relation.$relationID1=$table1.ID
JOIN $table2 ON $relation.$relationID2 = $table2.ID WHERE $table2.ID=:ID");
    $get->execute(array('ID' => $id));
    $res = $get->fetchAll(PDO::FETCH_ASSOC);
    return $res;
}

function getCurrentSkills(PDO $db, $relation, $table, $relationID, $id)
{
    $getSkills = $db->prepare("SELECT SKILLS.NAME FROM SKILLS
JOIN $relation ON SKILLS.ID = $relation.SKILL_ID
JOIN $table ON $relation.$relationID = :ID WHERE $table.ID=:ID");
    $getSkills->execute(array('ID' => $id));
    $skills = $getSkills->fetchAll(PDO::FETCH_ASSOC);
    $allSkills = getSkills($db);
    return array($allSkills, $skills);
}

function updateSkills(PDO $db, $relation, $relationID, $id)
{
    $newSkills = $_POST["selected"];
    deleteRow($db, $relation, $relationID, $table = null, $id);
    foreach ($newSkills as $skill) {
        $editSkills = $db->prepare("INSERT INTO $relation
VALUES (:ID, (SELECT SKILLS.ID FROM SKILLS 
WHERE SKILLS.NAME=:NAME))");
        $editSkills->execute(array('ID' => $id, 'NAME' => $skill));
    }
}

function deleteRow(PDO $db, $relation = null, $relationID = null, $table, $id)
{
    $removeRelation = $db->prepare("DELETE FROM $relation WHERE $relationID=:ID");
    $removeRelation->execute(array('ID' => $id));
    $removeDeveloper = $db->prepare("DELETE FROM $table WHERE ID=:ID");
    $removeDeveloper->execute(array('ID' => $id));
}

function getDataOfType($db, $firstType, $secondType, $firstTable, $secondTable, $firstRelation, $secondRelation,
                       $firstRelationId, $secondRelationId)
{
    $currentType = [];
    $currentType[] = $firstType;

    // навыки для первого типа
    $skillsOfFirstType = getRelations($db, 'SKILLS', $firstTable, $firstRelation,
        'SKILL_ID', $firstRelationId, $firstType['ID']);

    $firstSkillsResult = [];
    foreach ($skillsOfFirstType as $firstSkill) {
        $firstSkillsResult[] = $firstSkill['NAME'];
    }
    $currentType[] = $skillsOfFirstType;

    // навыки каждого второго типа
    $secondSkillsResult = [];
    foreach ($secondType as $second) {
        $skillsOfSecondType = getRelations($db, 'SKILLS', $secondTable, $secondRelation,
            'SKILL_ID', $secondRelationId, $second['ID']);

        foreach ($skillsOfSecondType as $secondSkill) {
            $secondSkillsResult[] = $secondSkill['NAME'];
        }

        // сравнение навыков выбранных типов
        switch ($firstTable) {
            case 'DEVELOPERS':
                $result = array_diff($secondSkillsResult, $firstSkillsResult);
                break;
            case 'PROJECTS':
                $result = array_diff($firstSkillsResult, $secondSkillsResult);
                break;
        }

        // выбираем второй тип, если его навыки есть в массиве навыков первого типа
        if (empty($result)) {
            $currentSecondType[] = $second;
        }
    }
    if (isset($currentSecondType)) {
        $currentType[] = $currentSecondType;
    }

    return $currentType;
}