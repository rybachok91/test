<?php
/* Smarty version 3.1.28, created on 2017-11-03 11:35:17
  from "/srv/http/SMARTY/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_59fc2a452104a2_89246374',
  'file_dependency' => 
  array (
    '5ceb5aebb8440469734063b9e3538e92b8e303e0' => 
    array (
      0 => '/srv/http/SMARTY/templates/index.tpl',
      1 => 1509611976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_59fc2a452104a2_89246374 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mainPage'=>$_smarty_tpl->tpl_vars['mainPage']->value), 0, false);
?>

<table border="1" class="projects_table">
    <tr>
        <th>Название проекта</th>
        <th>Навыки</th>
        <th>Разработчики</th>
    </tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['projects']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_project_0_saved_item = isset($_smarty_tpl->tpl_vars['project']) ? $_smarty_tpl->tpl_vars['project'] : false;
$_smarty_tpl->tpl_vars['project'] = new Smarty_Variable();
$__foreach_project_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_project_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
$__foreach_project_0_saved_local_item = $_smarty_tpl->tpl_vars['project'];
?>
        <tr>
            <td>
                <a href="http://localhost/SMARTY/projects.php?id=<?php echo $_smarty_tpl->tpl_vars['project']->value[0]['ID'];?>
" class="list"
                   style="margin-bottom: 0;">
                    <?php echo $_smarty_tpl->tpl_vars['project']->value[0]['NAME'];?>

                </a>
            </td>
            <td>
                <?php
$_from = $_smarty_tpl->tpl_vars['project']->value[1];
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
                    <a href="http://localhost/SMARTY/skills.php?id=<?php echo $_smarty_tpl->tpl_vars['skill']->value['ID'];?>
" class="list">
                        <?php echo $_smarty_tpl->tpl_vars['skill']->value['NAME'];?>

                    </a>
                <?php
$_smarty_tpl->tpl_vars['skill'] = $__foreach_skill_1_saved_local_item;
}
}
if ($__foreach_skill_1_saved_item) {
$_smarty_tpl->tpl_vars['skill'] = $__foreach_skill_1_saved_item;
}
?>
            </td>
            <td>
                <?php if ((isset($_smarty_tpl->tpl_vars['project']->value[2]))) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['project']->value[2];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_developer_2_saved_item = isset($_smarty_tpl->tpl_vars['developer']) ? $_smarty_tpl->tpl_vars['developer'] : false;
$_smarty_tpl->tpl_vars['developer'] = new Smarty_Variable();
$__foreach_developer_2_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_developer_2_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['developer']->value) {
$__foreach_developer_2_saved_local_item = $_smarty_tpl->tpl_vars['developer'];
?>
                        <a href="http://localhost/SMARTY/developers.php?id=<?php echo $_smarty_tpl->tpl_vars['developer']->value['ID'];?>
" class="list">
                            <?php echo $_smarty_tpl->tpl_vars['developer']->value['NAME'];?>

                        </a>
                    <?php
$_smarty_tpl->tpl_vars['developer'] = $__foreach_developer_2_saved_local_item;
}
}
if ($__foreach_developer_2_saved_item) {
$_smarty_tpl->tpl_vars['developer'] = $__foreach_developer_2_saved_item;
}
?>
                <?php }?>
            </td>
        </tr>
    <?php
$_smarty_tpl->tpl_vars['project'] = $__foreach_project_0_saved_local_item;
}
}
if ($__foreach_project_0_saved_item) {
$_smarty_tpl->tpl_vars['project'] = $__foreach_project_0_saved_item;
}
?>
</table>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
