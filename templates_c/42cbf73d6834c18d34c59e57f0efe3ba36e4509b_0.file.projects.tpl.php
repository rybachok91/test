<?php
/* Smarty version 3.1.28, created on 2017-11-03 11:39:55
  from "/srv/http/SMARTY/templates/projects.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_59fc2b5b3f2fc0_14241277',
  'file_dependency' => 
  array (
    '42cbf73d6834c18d34c59e57f0efe3ba36e4509b' => 
    array (
      0 => '/srv/http/SMARTY/templates/projects.tpl',
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
function content_59fc2b5b3f2fc0_14241277 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="index">
    <span class="outLine item title">Название</span>
    <span class="outLine item title">Навыки</span>
    <span class="outLine item title">Разработчики</span>
</div>
<div class="index">
    <span class="outLine item"><?php echo $_smarty_tpl->tpl_vars['project']->value['NAME'];?>
</span>
    <span class="outLine item transparent">
            <ul>
                <?php
$_from = $_smarty_tpl->tpl_vars['skills']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_skill_0_saved_item = isset($_smarty_tpl->tpl_vars['skill']) ? $_smarty_tpl->tpl_vars['skill'] : false;
$_smarty_tpl->tpl_vars['skill'] = new Smarty_Variable();
$__foreach_skill_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_skill_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['skill']->value) {
$__foreach_skill_0_saved_local_item = $_smarty_tpl->tpl_vars['skill'];
?>
                    <li class="list">
                        <a href="http://localhost/SMARTY/skills.php?id=<?php echo $_smarty_tpl->tpl_vars['skill']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['skill']->value['NAME'];?>
</a>
                    </li>
                <?php
$_smarty_tpl->tpl_vars['skill'] = $__foreach_skill_0_saved_local_item;
}
}
if ($__foreach_skill_0_saved_item) {
$_smarty_tpl->tpl_vars['skill'] = $__foreach_skill_0_saved_item;
}
?>
            </ul>
        </span>
    <span class="outLine item transparent">
            <ul>
                <?php if ((isset($_smarty_tpl->tpl_vars['developers']->value))) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['developers']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_developer_1_saved_item = isset($_smarty_tpl->tpl_vars['developer']) ? $_smarty_tpl->tpl_vars['developer'] : false;
$_smarty_tpl->tpl_vars['developer'] = new Smarty_Variable();
$__foreach_developer_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_developer_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['developer']->value) {
$__foreach_developer_1_saved_local_item = $_smarty_tpl->tpl_vars['developer'];
?>
                        <li class="list">
                            <a href="http://localhost/SMARTY/developers.php?id=<?php echo $_smarty_tpl->tpl_vars['developer']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['developer']->value['NAME'];?>
</a>
                        </li>
                    <?php
$_smarty_tpl->tpl_vars['developer'] = $__foreach_developer_1_saved_local_item;
}
}
if ($__foreach_developer_1_saved_item) {
$_smarty_tpl->tpl_vars['developer'] = $__foreach_developer_1_saved_item;
}
?>
                <?php }?>
            </ul>
    </span>
</div>
<br>

<a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&link=project" class="back">Редактировать</a><br>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
