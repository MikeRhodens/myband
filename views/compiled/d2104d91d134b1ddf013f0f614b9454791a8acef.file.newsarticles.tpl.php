<?php /* Smarty version Smarty-3.1.18, created on 2015-10-02 12:01:37
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2157655f7c8b5aa4811-15841309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1443780092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2157655f7c8b5aa4811-15841309',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f7c8b5b02599_71783611',
  'variables' => 
  array (
    'result' => 0,
    'newsarticles' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f7c8b5b02599_71783611')) {function content_55f7c8b5b02599_71783611($_smarty_tpl) {?><section>

	<?php  $_smarty_tpl->tpl_vars['newsarticles'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsarticles']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsarticles']->key => $_smarty_tpl->tpl_vars['newsarticles']->value) {
$_smarty_tpl->tpl_vars['newsarticles']->_loop = true;
?>
	<article>
		<h1><?php echo $_smarty_tpl->tpl_vars['newsarticles']->value['title'];?>
</h1>
		<p><?php echo $_smarty_tpl->tpl_vars['newsarticles']->value['content'];?>
<p>
	</article>
<?php } ?>
</section><?php }} ?>
