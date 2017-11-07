{include file='templates/header.tpl'}

<div class="index">
    <span class="outLine item title">Название</span>
    <span class="outLine item title">Навыки</span>
    <span class="outLine item title">Разработчики</span>
</div>
<div class="index">
    <span class="outLine item">{$project.NAME}</span>
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
                {if (isset($developers))}
                    {foreach from=$developers item=developer}
                        <li class="list">
                            <a href="http://localhost/SMARTY/developers.php?id={$developer.ID}">{$developer.NAME}</a>
                        </li>
                    {/foreach}
                {/if}
            </ul>
    </span>
</div>
<br>

<a href="edit.php?id={$id}&link=project" class="back">Редактировать</a><br>

{include file='templates/footer.tpl'}