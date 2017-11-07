<?php
/* Smarty version 3.1.28, created on 2017-11-03 12:50:16
  from "/srv/http/SMARTY/templates/all.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_59fc3bd829a850_31822155',
  'file_dependency' => 
  array (
    'aa27b46220f779c4cac1eb7f8cd709090ec9c6f9' => 
    array (
      0 => '/srv/http/SMARTY/templates/all.tpl',
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
function content_59fc3bd829a850_31822155 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<table border="1" class="projects_table">
    <tr>
        <th><?php echo $_smarty_tpl->tpl_vars['titleName']->value;?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['titleRelation']->value;?>
</th>
        <th>Разработчики</th>
    </tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['type']->value;
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
        <tr>
            <td>
                <a href="http://localhost/SMARTY/<?php echo $_smarty_tpl->tpl_vars['linkForType1']->value;?>
.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value[0]['ID'];?>
" class="list"
                   style="margin-bottom: 0;">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value[0]['NAME'];?>

                </a>
            </td>
            <td>
                <?php
$_from = $_smarty_tpl->tpl_vars['item']->value[1];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_secondType_1_saved_item = isset($_smarty_tpl->tpl_vars['secondType']) ? $_smarty_tpl->tpl_vars['secondType'] : false;
$_smarty_tpl->tpl_vars['secondType'] = new Smarty_Variable();
$__foreach_secondType_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_secondType_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['secondType']->value) {
$__foreach_secondType_1_saved_local_item = $_smarty_tpl->tpl_vars['secondType'];
?>
                    <a href="http://localhost/SMARTY/<?php echo $_smarty_tpl->tpl_vars['linkForType2']->value;?>
.php?id=<?php echo $_smarty_tpl->tpl_vars['secondType']->value['ID'];?>
" class="list">
                        <?php echo $_smarty_tpl->tpl_vars['secondType']->value['NAME'];?>

                    </a>
                <?php
$_smarty_tpl->tpl_vars['secondType'] = $__foreach_secondType_1_saved_local_item;
}
}
if ($__foreach_secondType_1_saved_item) {
$_smarty_tpl->tpl_vars['secondType'] = $__foreach_secondType_1_saved_item;
}
?>
            </td>
            <td>
                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value[2]))) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['item']->value[2];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_project_2_saved_item = isset($_smarty_tpl->tpl_vars['project']) ? $_smarty_tpl->tpl_vars['project'] : false;
$_smarty_tpl->tpl_vars['project'] = new Smarty_Variable();
$__foreach_project_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_project_2_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
$__foreach_project_2_saved_local_item = $_smarty_tpl->tpl_vars['project'];
?>
                        <a href="http://localhost/SMARTY/projects.php?id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
" class="list">
                            <?php echo $_smarty_tpl->tpl_vars['project']->value['NAME'];?>

                        </a>
                    <?php
$_smarty_tpl->tpl_vars['project'] = $__foreach_project_2_saved_local_item;
}
}
if ($__foreach_project_2_saved_item) {
$_smarty_tpl->tpl_vars['project'] = $__foreach_project_2_saved_item;
}
?>
                <?php }?>
            </td>
        </tr>
    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
</table>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
