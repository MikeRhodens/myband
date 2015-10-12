<?php /* Smarty version Smarty-3.1.18, created on 2015-10-07 10:15:25
         compiled from "views\newsNav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:501355fa75fa3b8a83-06513530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dff23cad6de000d73d838b87fa86a6c57b54ca13' => 
    array (
      0 => 'views\\newsNav.tpl',
      1 => 1444205506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '501355fa75fa3b8a83-06513530',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa75fa4083b6_12201210',
  'variables' => 
  array (
    'page' => 0,
    'pagecount' => 0,
    'x' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa75fa4083b6_12201210')) {function content_55fa75fa4083b6_12201210($_smarty_tpl) {?><table border='0'>
	<tr id="newsNav">
		<td width='56px' id="navPrevious">
			<?php if ($_smarty_tpl->tpl_vars['page']->value!=1) {?>
			<a href="?action=news&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">previous</a>
			<?php }?>
		</td>
		<div id="navNumbers">
		<?php $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? $_smarty_tpl->tpl_vars['pagecount']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pagecount']->value)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 1, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?>
			<td><a href="?action=news&page=<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['x']->value==$_smarty_tpl->tpl_vars['page']->value) {?> class="currentpage"<?php }?>><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</a></td>
		<?php }} ?>
		</div>
		<td width='56px' id="navNext">
			<?php if ($_smarty_tpl->tpl_vars['page']->value!=$_smarty_tpl->tpl_vars['pagecount']->value) {?>
			<a href="?action=news&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">next</a>
			<?php }?>
		</td>
	</tr>
</table><?php }} ?>
