<?php
/* Smarty version 3.1.28, created on 2017-11-03 14:31:11
  from "/srv/http/SMARTY/templates/edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_59fc537f49f453_40043694',
  'file_dependency' => 
  array (
    'e4d588760827baeda3c405cfbace8203c38c0e16' => 
    array (
      0 => '/srv/http/SMARTY/templates/edit.tpl',
      1 => 1509612140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_59fc537f49f453_40043694 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php if ((isset($_smarty_tpl->tpl_vars['currentDeveloper']->value))) {?>
    <form method="post">
            <label for="name">Имя:</label>
            <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['currentDeveloper']->value['NAME'];?>
" size="30">
            <br>
            <label for="email">Адрес электронной почты:</label>
            <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['currentDeveloper']->value['EMAIL'];?>
" size="30">
            <br>
            <label for="password">Пароль:</label>
            <input type="text" name="password" value="<?php echo $_smarty_tpl->tpl_vars['currentDeveloper']->value['PASSWORD'];?>
" size="30">
        <br>
        <br>
        <?php $_smarty_tpl->tpl_vars["attr"] = new Smarty_Variable(" selected", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "attr", 0);?>
        <select multiple name="selected[]">
            <?php
$_from = $_smarty_tpl->tpl_vars['skills']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_item_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_item_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['NAME'];?>
"
                        <?php
$_from = $_smarty_tpl->tpl_vars['selectedSkill']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_skill_1_saved_item = isset($_smarty_tpl->tpl_vars['skill']) ? $_smarty_tpl->tpl_vars['skill'] : false;
$_smarty_tpl->tpl_vars['skill'] = new Smarty_Variable();
$__foreach_skill_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_skill_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['skill']->value) {
$__foreach_skill_1_saved_local_item = $_smarty_tpl->tpl_vars['skill'];
?>
                            <?php if (($_smarty_tpl->tpl_vars['skill']->value['NAME'] == $_smarty_tpl->tpl_vars['item']->value['NAME'])) {?>
                                <?php echo $_smarty_tpl->tpl_vars['attr']->value;?>

                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['skill'] = $__foreach_skill_1_saved_local_item;
}
}
if ($__foreach_skill_1_saved_item) {
$_smarty_tpl->tpl_vars['skill'] = $__foreach_skill_1_saved_item;
}
?>>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['NAME'];?>

                </option>
            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
        </select>
        <br>
        <input type="hidden" name="action" value="developer">
        <input type="submit" name="edit" value="Обновить">
        <input type="submit" name="remove" value="Удалить"><br>
    </form>
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars['currentProject']->value))) {?>
    <form method="post">
            <label for="name">Название проекта:</label>
            <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['currentProject']->value['NAME'];?>
" size="30">
        <br>
        <br>
        <?php $_smarty_tpl->tpl_vars["attr"] = new Smarty_Variable(" selected", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "attr", 0);?>
        <select multiple name="selected[]">
            <?php
$_from = $_smarty_tpl->tpl_vars['skills']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_2_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$__foreach_item_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_item_2_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$__foreach_item_2_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['NAME'];?>
"
                        <?php
$_from = $_smarty_tpl->tpl_vars['selectedSkill']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_skill_3_saved_item = isset($_smarty_tpl->tpl_vars['skill']) ? $_smarty_tpl->tpl_vars['skill'] : false;
$_smarty_tpl->tpl_vars['skill'] = new Smarty_Variable();
$__foreach_skill_3_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_skill_3_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['skill']->value) {
$__foreach_skill_3_saved_local_item = $_smarty_tpl->tpl_vars['skill'];
?>
                            <?php if (($_smarty_tpl->tpl_vars['skill']->value['NAME'] == $_smarty_tpl->tpl_vars['item']->value['NAME'])) {?>
                                <?php echo $_smarty_tpl->tpl_vars['attr']->value;?>

                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['skill'] = $__foreach_skill_3_saved_local_item;
}
}
if ($__foreach_skill_3_saved_item) {
$_smarty_tpl->tpl_vars['skill'] = $__foreach_skill_3_saved_item;
}
?>>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['NAME'];?>

                </option>
            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_2_saved_local_item;
}
}
if ($__foreach_item_2_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_2_saved_item;
}
?>
        </select><br>
        <input type="hidden" name="action" value="project">
        <input type="submit" name="edit" value="Обновить">
        <input type="submit" name="remove" value="Удалить"><br>
    </form>
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars['currentSkill']->value))) {?>
    <form method="post">
            <label for="name">Название навыка:</label>
            <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['currentSkill']->value['NAME'];?>
" size="30">
        <br>
        <input type="hidden" name="action" value="skill">
        <input type="submit" name="edit" value="Обновить">
        <input type="submit" name="remove" value="Удалить"><br>
    </form>
<?php }?>

<a href="<?php echo $_smarty_tpl->tpl_vars['backLink']->value;?>
" class="back">Назад</a><br>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
