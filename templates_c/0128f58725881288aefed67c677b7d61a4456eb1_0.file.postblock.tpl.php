<?php
/* Smarty version 3.1.30, created on 2018-04-24 15:46:53
  from "/home/uirl/public_html/templates/postblock.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adf516d826c98_98806992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0128f58725881288aefed67c677b7d61a4456eb1' => 
    array (
      0 => '/home/uirl/public_html/templates/postblock.tpl',
      1 => 1524584810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adf516d826c98_98806992 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class='card'>
	<img class='card-img-top img-fluid' id='uploadedImage' src='' style='display:none'/>
	<div class='card-header'>
		Post Something
	</div>
	<form action='post' method='post-thread.php' id='postblock'>
		<div class='container'>
			<div class="input-group">
				<textarea placeholder="Say something..." class='form-control' id='message' name='message'></textarea>
			</div>
			<input type="file" id='file' name='file' onchange="readURL(this);" hidden='true'>
		</div>
	</form>
	<div class='card-footer text-right' style='padding: 7px'>
		<button class='btn btn-primary btn-sm' id='fauxfubutton' onclick='thisFileUpload()'><i class="far fa-image"></i></button>
		<button type='submit' class='btn btn-primary btn-sm'><i class="far fa-share-square"></i></button>
	</div>
</div>
<?php }
}
