{include file='templates/header.tpl'}

<table border="1" class="projects_table">
    <tr>
        <th>{$titleName}</th>
        <th>{$titleRelation}</th>
        <th>Разработчики</th>
    </tr>
    {foreach from=$type item=item}
        <tr>
            <td>
                <a href="http://localhost/SMARTY/{$linkForType1}.php?id={$item[0]['ID']}" class="list"
                   style="margin-bottom: 0;">
                    {$item[0]['NAME']}
                </a>
            </td>
            <td>
                {foreach from=$item[1] item=secondType}
                    <a href="http://localhost/SMARTY/{$linkForType2}.php?id={$secondType.ID}" class="list">
                        {$secondType.NAME}
                    </a>
                {/foreach}
            </td>
            <td>
                {if (isset($item[2]))}
                    {foreach from=$item[2] item=project}
                        <a href="http://localhost/SMARTY/projects.php?id={$project.ID}" class="list">
                            {$project.NAME}
                        </a>
                    {/foreach}
                {/if}
            </td>
        </tr>
    {/foreach}
</table>

{include file='templates/footer.tpl'}