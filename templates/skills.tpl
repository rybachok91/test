{include file='templates/header.tpl'}

<div class="index">
    <span class="outLine item title">Название</span>
    <span class="outLine item title">Разработчики</span>
    <span class="outLine item title">Проекты</span>
</div>
<div class="index">
        <span class="outLine item">{$skill.NAME}</span>
        <span class="outLine item transparent">
            <ul>
                {foreach from=$developers item=developer}
                    <li class="list"><a href="http://localhost/SMARTY/developers.php?id={$developer.ID}">{$developer.NAME}</a></li>
                {/foreach}
            </ul>
        </span>
        <span class="outLine item transparent">
            <ul>
                {foreach from=$projects item=project}
                    <li class="list"><a href="http://localhost/SMARTY/projects.php?id={$project.ID}">{$project.NAME}</a></li>
                {/foreach}
            </ul>
        </span>
</div>
<br>

<a href="edit.php?id={$id}&link=skill" class="back">Редактировать</a><br>

{include file='templates/footer.tpl'}

