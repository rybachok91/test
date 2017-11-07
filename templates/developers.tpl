{include file='templates/header.tpl'}

<div class="index">
    <span class="outLine item title">Имя</span>
    <span class="outLine item title">Почта</span>
    <span class="outLine item title">Пароль</span>
    <span class="outLine item title">Навыки</span>
    <span class="outLine item title">Проекты</span>
</div>
<div class="index">
        <span class="outLine item">{$developer.NAME}</span>
        <span class="outLine item">{$developer.EMAIL}</span>
        <span class="outLine item">{$developer.PASSWORD}</span>
        <span class="outLine item transparent">
            <ul>
                {foreach from=$skills item=skill}
                    <li class="list">
                        <a href="http://localhost/SMARTY/skills.php?id={$skill.ID}">{$skill.NAME}</a>
                    </li>
                {/foreach}
            </ul>
        </span>
        <span class="outLine item transparent">
            <ul>
                {if (isset($projects))}
                    {foreach from=$projects item=project}
                        <li class="list">
                            <a href="http://localhost/SMARTY/projects.php?id={$project.ID}">{$project.NAME}</a>
                        </li>
                    {/foreach}
                {/if}
            </ul>
        </span>
</div>
<br>

<a href="edit.php?id={$id}&link=developer" class="back">Редактировать</a><br>

{include file='templates/footer.tpl'}