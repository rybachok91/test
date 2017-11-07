{include file='templates/header.tpl' mainPage=$mainPage}
<table border="1" class="projects_table">
    <tr>
        <th>Название проекта</th>
        <th>Навыки</th>
        <th>Разработчики</th>
    </tr>
    {foreach from=$projects item=project}
        <tr>
            <td>
                <a href="http://localhost/SMARTY/projects.php?id={$project[0]['ID']}" class="list"
                   style="margin-bottom: 0;">
                    {$project[0]['NAME']}
                </a>
            </td>
            <td>
                {foreach from=$project[1] item=skill}
                    <a href="http://localhost/SMARTY/skills.php?id={$skill.ID}" class="list">
                        {$skill.NAME}
                    </a>
                {/foreach}
            </td>
            <td>
                {if (isset($project[2]))}
                    {foreach from=$project[2] item=developer}
                        <a href="http://localhost/SMARTY/developers.php?id={$developer.ID}" class="list">
                            {$developer.NAME}
                        </a>
                    {/foreach}
                {/if}
            </td>
        </tr>
    {/foreach}
</table>

{include file='templates/footer.tpl'}
