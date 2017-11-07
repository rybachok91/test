<?php
require "vendor/autoload.php";

$smarty = new Smarty();
$smarty->assign("date", getToday());

$db = getConnection();
$allDevelopers = getDevelopers($db);
$eachProject = [];

foreach (getProjects($db) as $project) {
    $eachProject[] = getDataOfProjects($db, $project, $allDevelopers);
}

$smarty->assign("projects", $eachProject);
$smarty->assign("mainPage", true);
$smarty->display("templates/index.tpl");
