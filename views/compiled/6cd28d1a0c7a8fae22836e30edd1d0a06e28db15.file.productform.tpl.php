<?php /* Smarty version Smarty-3.1.18, created on 2015-09-22 09:36:58
         compiled from "views\productform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1182955ffefe528f4e9-24649296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cd28d1a0c7a8fae22836e30edd1d0a06e28db15' => 
    array (
      0 => 'views\\productform.tpl',
      1 => 1442907235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1182955ffefe528f4e9-24649296',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55ffefe52c4655_56373535',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffefe52c4655_56373535')) {function content_55ffefe52c4655_56373535($_smarty_tpl) {?><h3>Upload your story here.</h3>
<form method="post" action="?action=doUpload">

<label for="title">Title</label>
<input type="text" name="title" id="title"><br>

<label for="content">Story</label>
<textarea name="content" id="content"></textarea><br>

<input type="submit" name="submit_product">

</form>
<?php }} ?>
