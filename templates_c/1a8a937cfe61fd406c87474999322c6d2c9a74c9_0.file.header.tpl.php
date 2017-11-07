<?php
/* Smarty version 3.1.28, created on 2017-11-03 11:35:17
  from "/srv/http/SMARTY/templates/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_59fc2a45218641_66446413',
  'file_dependency' => 
  array (
    '1a8a937cfe61fd406c87474999322c6d2c9a74c9' => 
    array (
      0 => '/srv/http/SMARTY/templates/header.tpl',
      1 => 1509371303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fc2a45218641_66446413 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>CRUD</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    <link rel="stylesheet" href="css/main_styles.css">
</head>
<body>
<div class="wrapper">
    <header>
        <img src="images/5_White_logo_on_black_138x70.png" alt="Logo">
        <h1>CRUD</h1>
    </header>
    <div class="wrapper_content">
        <aside>
            <ul>
                <?php if (!isset($_smarty_tpl->tpl_vars['mainPage']->value)) {?>
                    <li><a href="index.php">На главную</a></li>
                <?php }?>
                <li><a href="addNew.php?type=developer">Добавить разработчика</a></li>
                <li><a href="addNew.php?type=skill">Добавить навык</a></li>
                <li><a href="addNew.php?type=project">Добавить проект</a></li>
                <li><a href="all.php?type=developer">Разработчики</a></li>
                <li><a href="all.php?type=skill">Навыки</a></li>
            </ul>
        </aside>
        <div class="main"><?php }
}
