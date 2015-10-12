<?php /* Smarty version Smarty-3.1.18, created on 2015-09-30 09:10:48
         compiled from "views\searchNav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304895603aed58715a4-47430421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85735aaabccdcdb1efd4c16f23880b5b52cdcdd5' => 
    array (
      0 => 'views\\searchNav.tpl',
      1 => 1443597024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304895603aed58715a4-47430421',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5603aed58e6bd6_55736248',
  'variables' => 
  array (
    'page' => 0,
    'search' => 0,
    'pagecount' => 0,
    'x' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5603aed58e6bd6_55736248')) {function content_5603aed58e6bd6_55736248($_smarty_tpl) {?><table border='0'>
	<tr>
		<td width='56px'>
			<?php if ($_smarty_tpl->tpl_vars['page']->value!=1) {?>
			<a href="?action=search&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">previous</a>
			<?php }?>
		</td>
		
		<?php $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? $_smarty_tpl->tpl_vars['pagecount']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pagecount']->value)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 1, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?>
		<td><a href="?action=search&page=<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['x']->value==$_smarty_tpl->tpl_vars['page']->value) {?> class="currentpage"<?php }?>><?php echo $_smarty_tpl->tpl_vars['x']->value;?>
</a></td>
		<?php }} ?>
		<td width='56px'>
			<?php if ($_smarty_tpl->tpl_vars['page']->value!=$_smarty_tpl->tpl_vars['pagecount']->value) {?>
			<a href="?action=search&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">next</a>
			<?php }?>
		</td>
	</tr>
</table><?php }} ?>
