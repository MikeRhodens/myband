<?php /* Smarty version Smarty-3.1.18, created on 2015-10-02 16:04:10
         compiled from "views\searchResult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1181256025311dbdea4-92485050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49bca3a41145248d245ccb17f77d8df158474ab5' => 
    array (
      0 => 'views\\searchResult.tpl',
      1 => 1443794513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1181256025311dbdea4-92485050',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56025311df0363_93301000',
  'variables' => 
  array (
    'resultTitle' => 0,
    'searchResult' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56025311df0363_93301000')) {function content_56025311df0363_93301000($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['searchResult'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['searchResult']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resultTitle']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['searchResult']->key => $_smarty_tpl->tpl_vars['searchResult']->value) {
$_smarty_tpl->tpl_vars['searchResult']->_loop = true;
?>
<article>
		<h1><?php echo $_smarty_tpl->tpl_vars['searchResult']->value['title'];?>
</h1>
		<p><?php echo $_smarty_tpl->tpl_vars['searchResult']->value['content'];?>
</p>
</article>
<?php } ?>
<?php }} ?>
