<?php
/* Smarty version 3.1.30, created on 2018-04-24 17:09:41
  from "/home/uirl/public_html/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adf64d582c211_81017357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9762398caee342263e0d7ee89139b045f3343635' => 
    array (
      0 => '/home/uirl/public_html/templates/login.tpl',
      1 => 1524589779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5adf64d582c211_81017357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action='login.php' method='post' class='w-50 mt-2 mx-auto'>
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
