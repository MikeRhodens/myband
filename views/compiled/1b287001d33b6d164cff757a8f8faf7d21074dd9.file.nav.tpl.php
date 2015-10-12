<?php /* Smarty version Smarty-3.1.18, created on 2015-10-06 09:51:59
         compiled from "views\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3249155f7c519dc5e86-70113669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b287001d33b6d164cff757a8f8faf7d21074dd9' => 
    array (
      0 => 'views\\nav.tpl',
      1 => 1444117914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3249155f7c519dc5e86-70113669',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f7c519de8999_31646829',
  'variables' => 
  array (
    'action' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f7c519de8999_31646829')) {function content_55f7c519de8999_31646829($_smarty_tpl) {?><nav id="nav">
	<ul>
		<li><a href="?action=news&page=1"<?php if ($_smarty_tpl->tpl_vars['action']->value=='news') {?> class='currentnav' <?php }?>>nieuws</a></li>
		<li><a href="?action=upload"<?php if ($_smarty_tpl->tpl_vars['action']->value=='upload') {?> class='currentnav'<?php }?>>upload story</a></li>
		<li><a href="?action=aboutUs"<?php if ($_smarty_tpl->tpl_vars['action']->value=='aboutUs') {?> class='currentnav' <?php }?>>aboutUs</a></li>
		<li><a href="?action=contact"<?php if ($_smarty_tpl->tpl_vars['action']->value=='contact') {?> class='currentnav' <?php }?>>contact</a></li>
		<li><a href="?action=search&page=1"<?php if ($_smarty_tpl->tpl_vars['action']->value=='search') {?> class='currentnav' <?php }?>>search</a></li>
	</ul>
</nav><?php }} ?>
