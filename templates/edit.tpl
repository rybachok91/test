{include file='templates/header.tpl'}

{*форма для редактирования данных разработчика*}
{if (isset($currentDeveloper))}
    <form method="post">
            <label for="name">Имя:</label>
            <input type="text" name="name" value="{$currentDeveloper.NAME}" size="30">
            <br>
            <label for="email">Адрес электронной почты:</label>
            <input type="text" name="email" value="{$currentDeveloper.EMAIL}" size="30">
            <br>
            <label for="password">Пароль:</label>
            <input type="text" name="password" value="{$currentDeveloper.PASSWORD}" size="30">
        <br>
        <br>
        {assign var="attr" value=" selected"}
        <select multiple name="selected[]">
            {foreach from=$skills item=item}
                <option value="{$item.NAME}"
                        {foreach from=$selectedSkill item=skill}
                            {if ($skill.NAME == $item.NAME)}
                                {$attr}
                            {/if}
                        {/foreach}>
                    {$item.NAME}
                </option>
            {/foreach}
        </select>
        <br>
        <input type="hidden" name="action" value="developer">
        <input type="submit" name="edit" value="Обновить">
        <input type="submit" name="remove" value="Удалить"><br>
    </form>
{/if}

{*форма для редактирования данных проекта*}
{if (isset($currentProject))}
    <form method="post">
            <label for="name">Название проекта:</label>
            <input type="text" name="name" value="{$currentProject.NAME}" size="30">
        <br>
        <br>
        {assign var="attr" value=" selected"}
        <select multiple name="selected[]">
            {foreach from=$skills item=item}
                <option value="{$item.NAME}"
                        {foreach from=$selectedSkill item=skill}
                            {if ($skill.NAME == $item.NAME)}
                                {$attr}
                            {/if}
                        {/foreach}>
                    {$item.NAME}
                </option>
            {/foreach}
        </select><br>
        <input type="hidden" name="action" value="project">
        <input type="submit" name="edit" value="Обновить">
        <input type="submit" name="remove" value="Удалить"><br>
    </form>
{/if}

{*форма для редактирования навыка*}
{if (isset($currentSkill))}
    <form method="post">
            <label for="name">Название навыка:</label>
            <input type="text" name="name" value="{$currentSkill.NAME}" size="30">
        <br>
        <input type="hidden" name="action" value="skill">
        <input type="submit" name="edit" value="Обновить">
        <input type="submit" name="remove" value="Удалить"><br>
    </form>
{/if}

<a href="{$backLink}" class="back">Назад</a><br>

{include file='templates/footer.tpl'}