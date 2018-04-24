<?php
/* Smarty version 3.1.30, created on 2018-04-24 15:35:28
  from "/home/uirl/public_html/templates/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adf4ec0e75a45_96432036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce69a9074c35130288fd0ade70773fd6c1cb2087' => 
    array (
      0 => '/home/uirl/public_html/templates/header.tpl',
      1 => 1524584051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adf4ec0e75a45_96432036 (Smarty_Internal_Template $_smarty_tpl) {
?>
<HTML>
<HEAD>
<TITLE><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</TITLE>
<link href='css/bootstrap.min.css' type='text/css' rel='stylesheet' />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<link href='css/style.css' type='text/css' rel='stylesheet' />
<?php echo '<script'; ?>
 class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='js/custom.js'><?php echo '</script'; ?>
>
</HEAD>
<BODY bgcolor="#ffffff" onload='init();'>
<nav class="navbar fixed-top navbar-light bg-light">
	<div class='container'>
	<a class="navbar-brand" href="/"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
	</div>
</nav>
<div style='height: 70px'></div>
<div class='container' onload='setup()'>
<?php }
}
