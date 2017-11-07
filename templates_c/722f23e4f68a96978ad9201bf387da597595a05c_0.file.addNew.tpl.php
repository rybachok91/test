<?php
/* Smarty version 3.1.28, created on 2017-11-03 14:30:01
  from "/srv/http/SMARTY/templates/addNew.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_59fc53391b1d04_15432267',
  'file_dependency' => 
  array (
    '722f23e4f68a96978ad9201bf387da597595a05c' => 
    array (
      0 => '/srv/http/SMARTY/templates/addNew.tpl',
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
function content_59fc53391b1d04_15432267 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php if ((isset($_smarty_tpl->tpl_vars['developerForm']->value))) {?>
    <form method="post">

        <label for="name">Имя разработчика:</label>
        <input type="text" name="name" value="<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {
echo $_smarty_tpl->tpl_vars['name']->value;
}?>" size="30"><br>

        <label for="email">Адрес электронной почты:</label>
        <input type="text" name="email" value="<?php if (isset($_smarty_tpl->tpl_vars['email']->value)) {
echo $_smarty_tpl->tpl_vars['email']->value;
}?>" size="30"><br>

        <label for="password">Пароль:</label>
        <input type="password" name="password" value="" size="30"><br>

        <label for="skills">Навыки:</label>
        <select multiple name=selected[]>
            <?php $_smarty_tpl->tpl_vars["attr"] = new Smarty_Variable(" selected", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "attr", 0);?>
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
" <?php if (isset($_smarty_tpl->tpl_vars['selectedSkill']->value)) {?>
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
                        <?php if ($_smarty_tpl->tpl_vars['skill']->value == $_smarty_tpl->tpl_vars['item']->value['NAME']) {
echo $_smarty_tpl->tpl_vars['attr']->value;
}?>
                    <?php
$_smarty_tpl->tpl_vars['skill'] = $__foreach_skill_1_saved_local_item;
}
}
if ($__foreach_skill_1_saved_item) {
$_smarty_tpl->tpl_vars['skill'] = $__foreach_skill_1_saved_item;
}
?>
                <?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['NAME'];?>
</option>
            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
        </select><br>
        <input type="hidden" name="type" value="developer">
        <input type="submit" name="add" value="Добавить"><br>
    </form>
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars['projectForm']->value))) {?>
    <form method="post">

        <label for="name">Название проекта:</label>
        <input type="text" name="name" value="<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {
echo $_smarty_tpl->tpl_vars['name']->value;
}?>" size="30"><br>

        <label for="skills">Навыки:</label>
        <select multiple name=selected[]>
            <?php $_smarty_tpl->tpl_vars["attr"] = new Smarty_Variable(" selected", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "attr", 0);?>
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
" <?php if (isset($_smarty_tpl->tpl_vars['selectedSkill']->value)) {?>
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
                        <?php if ($_smarty_tpl->tpl_vars['skill']->value == $_smarty_tpl->tpl_vars['item']->value['NAME']) {
echo $_smarty_tpl->tpl_vars['attr']->value;
}?>
                    <?php
$_smarty_tpl->tpl_vars['skill'] = $__foreach_skill_3_saved_local_item;
}
}
if ($__foreach_skill_3_saved_item) {
$_smarty_tpl->tpl_vars['skill'] = $__foreach_skill_3_saved_item;
}
?>
                <?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['NAME'];?>
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
        <input type="hidden" name="type" value="project">
        <input type="submit" name="add" value="Добавить"><br>
    </form>
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars['skillForm']->value))) {?>
    <form method="post">
        <label for="name">Название навыка:</label>
        <input type="text" name="name" value="<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {
echo $_smarty_tpl->tpl_vars['name']->value;
}?>" size="30">
        <br>
        <input type="hidden" name="type" value="skill">
        <input type="submit" name="add" value="Добавить"><br>
    </form>
<?php }?>


<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
    <br><?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
