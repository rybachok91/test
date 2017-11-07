<?php
/* Smarty version 3.1.28, created on 2017-11-03 14:30:19
  from "/srv/http/SMARTY/templates/skills.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_59fc534ba89274_60404429',
  'file_dependency' => 
  array (
    'b3d362416a8059e5e71fc33bb79d8e5a98699dab' => 
    array (
      0 => '/srv/http/SMARTY/templates/skills.tpl',
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
function content_59fc534ba89274_60404429 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="index">
    <span class="outLine item title">Название</span>
    <span class="outLine item title">Разработчики</span>
    <span class="outLine item title">Проекты</span>
</div>
<div class="index">
        <span class="outLine item"><?php echo $_smarty_tpl->tpl_vars['skill']->value['NAME'];?>
</span>
        <span class="outLine item transparent">
            <ul>
                <?php
$_from = $_smarty_tpl->tpl_vars['developers']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_developer_0_saved_item = isset($_smarty_tpl->tpl_vars['developer']) ? $_smarty_tpl->tpl_vars['developer'] : false;
$_smarty_tpl->tpl_vars['developer'] = new Smarty_Variable();
$__foreach_developer_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_developer_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['developer']->value) {
$__foreach_developer_0_saved_local_item = $_smarty_tpl->tpl_vars['developer'];
?>
                    <li class="list"><a href="http://localhost/SMARTY/developers.php?id=<?php echo $_smarty_tpl->tpl_vars['developer']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['developer']->value['NAME'];?>
</a></li>
                <?php
$_smarty_tpl->tpl_vars['developer'] = $__foreach_developer_0_saved_local_item;
}
}
if ($__foreach_developer_0_saved_item) {
$_smarty_tpl->tpl_vars['developer'] = $__foreach_developer_0_saved_item;
}
?>
            </ul>
        </span>
        <span class="outLine item transparent">
            <ul>
                <?php
$_from = $_smarty_tpl->tpl_vars['projects']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_project_1_saved_item = isset($_smarty_tpl->tpl_vars['project']) ? $_smarty_tpl->tpl_vars['project'] : false;
$_smarty_tpl->tpl_vars['project'] = new Smarty_Variable();
$__foreach_project_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_project_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
$__foreach_project_1_saved_local_item = $_smarty_tpl->tpl_vars['project'];
?>
                    <li class="list"><a href="http://localhost/SMARTY/projects.php?id=<?php echo $_smarty_tpl->tpl_vars['project']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['project']->value['NAME'];?>
</a></li>
                <?php
$_smarty_tpl->tpl_vars['project'] = $__foreach_project_1_saved_local_item;
}
}
if ($__foreach_project_1_saved_item) {
$_smarty_tpl->tpl_vars['project'] = $__foreach_project_1_saved_item;
}
?>
            </ul>
        </span>
</div>
<br>

<a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&link=skill" class="back">Редактировать</a><br>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
