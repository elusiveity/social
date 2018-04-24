<?php
/* Smarty version 3.1.30, created on 2018-04-24 14:19:21
  from "/home/uirl/public_html/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adf3ce9832d41_34333402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c71ac4f8838a7b95053e89fa5494f895e4b633e' => 
    array (
      0 => '/home/uirl/public_html/templates/index.tpl',
      1 => 1524579560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:postblock.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5adf3ce9832d41_34333402 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class='row'>
	<div class='col'>
		<ul class="nav flex-column">
			<li class="nav-item">
				<a class="nav-link active" href="#">Active</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="#">Disabled</a>
			</li>
		</ul>
	</div>
	<div class='col-7'>
	<?php $_smarty_tpl->_subTemplateRender("file:postblock.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>
	<div class='col'></div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
