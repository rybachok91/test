{include file='templates/header.tpl'}

{*форма для добавления разработчика*}
{if (isset($developerForm))}
    <form method="post">

        <label for="name">Имя разработчика:</label>
        <input type="text" name="name" value="{if isset($name)}{$name}{/if}" size="30"><br>

        <label for="email">Адрес электронной почты:</label>
        <input type="text" name="email" value="{if isset($email)}{$email}{/if}" size="30"><br>

        <label for="password">Пароль:</label>
        <input type="password" name="password" value="" size="30"><br>

        <label for="skills">Навыки:</label>
        <select multiple name=selected[]>
            {assign var="attr" value=" selected"}
            {foreach from=$skills item=item}
                <option value="{$item.NAME}" {if isset($selectedSkill)}
                    {foreach from=$selectedSkill item=skill}
                        {if $skill == $item.NAME}{$attr}{/if}
                    {/foreach}
                {/if}>{$item.NAME}</option>
            {/foreach}
        </select><br>
        <input type="hidden" name="type" value="developer">
        <input type="submit" name="add" value="Добавить"><br>
    </form>
{/if}

{*форма для добавления проекта*}
{if (isset($projectForm))}
    <form method="post">

        <label for="name">Название проекта:</label>
        <input type="text" name="name" value="{if isset($name)}{$name}{/if}" size="30"><br>

        <label for="skills">Навыки:</label>
        <select multiple name=selected[]>
            {assign var="attr" value=" selected"}
            {foreach from=$skills item=item}
                <option value="{$item.NAME}" {if isset($selectedSkill)}
                    {foreach from=$selectedSkill item=skill}
                        {if $skill == $item.NAME}{$attr}{/if}
                    {/foreach}
                {/if}>{$item.NAME}</option>
            {/foreach}
        </select><br>
        <input type="hidden" name="type" value="project">
        <input type="submit" name="add" value="Добавить"><br>
    </form>
{/if}

{*форма для добавления навыка*}
{if (isset($skillForm))}
    <form method="post">
        <label for="name">Название навыка:</label>
        <input type="text" name="name" value="{if isset($name)}{$name}{/if}" size="30">
        <br>
        <input type="hidden" name="type" value="skill">
        <input type="submit" name="add" value="Добавить"><br>
    </form>
{/if}

{*сообщение о незаполненных полях*}
{if isset($error)}
    <br>{$error}
{/if}

{include file='templates/footer.tpl'}