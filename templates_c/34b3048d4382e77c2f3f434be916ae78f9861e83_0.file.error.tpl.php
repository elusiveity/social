<?php
/* Smarty version 3.1.30, created on 2018-04-24 14:00:07
  from "/home/uirl/public_html/templates/error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adf38679c2700_11217591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34b3048d4382e77c2f3f434be916ae78f9861e83' => 
    array (
      0 => '/home/uirl/public_html/templates/error.tpl',
      1 => 1524578406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5adf38679c2700_11217591 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class='card'>
	<div class='card-header'>
		<?php echo $_smarty_tpl->tpl_vars['errorHeader']->value;?>

	</div>
	<div class='card-body'>
		<?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>

	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
