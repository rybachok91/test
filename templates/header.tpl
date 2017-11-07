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
                {if !isset($mainPage)}
                    <li><a href="index.php">На главную</a></li>
                {/if}
                <li><a href="addNew.php?type=developer">Добавить разработчика</a></li>
                <li><a href="addNew.php?type=skill">Добавить навык</a></li>
                <li><a href="addNew.php?type=project">Добавить проект</a></li>
                <li><a href="all.php?type=developer">Разработчики</a></li>
                <li><a href="all.php?type=skill">Навыки</a></li>
            </ul>
        </aside>
        <div class="main">