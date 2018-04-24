<?php
/* Smarty version 3.1.30, created on 2018-04-24 16:19:56
  from "/home/uirl/public_html/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adf592cb52bb3_77842172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9762398caee342263e0d7ee89139b045f3343635' => 
    array (
      0 => '/home/uirl/public_html/templates/login.tpl',
      1 => 1524586794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5adf592cb52bb3_77842172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action='login.php' method='post'>
	<div class='input-group mb-3'>
		<div class='input-group-prepend'>
			<span class='input-group-text'>Username</span>
		</div>
		<input type='text' id='username' name='username' class='form-control' />
	</div>
	<div class='input-group mb-3'>
		<div class='input-group-prepend'>
			<span class='input-group-text'>Password</span>
		</div>
		<input type='password' id='password' name='password' class='form-control' />
	</div>
	<div class='btn-group mb-3'>
		<button type='submit' class='btn btn-primary'>Login</button>
	</div>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
