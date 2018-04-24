<?php
/* Smarty version 3.1.30, created on 2018-04-24 16:04:05
  from "/home/uirl/public_html/templates/postblock.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adf55757eb540_26093843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0128f58725881288aefed67c677b7d61a4456eb1' => 
    array (
      0 => '/home/uirl/public_html/templates/postblock.tpl',
      1 => 1524585843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adf55757eb540_26093843 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class='card' action='post-thread.php' method='post'>
	<img src='' id='uploadedImage' class='card-img-top' style='display:none' />
	<div class='card-header'>
		Post Something
	</div>
		<div class='container'>
			<div class="input-group">
				<textarea placeholder="Say something..." class='form-control' id='message' name='message'></textarea>
			</div>
			<div class="input-group">
				<input type='text' placeholder="Tags" class='form-control' id='tags' name='tags' style='border: none'/>
			</div>
			<input type="file" id='file' name='file' onchange="readURL(this);" hidden='true'>
		</div>
	<div class='card-footer text-right' style='padding: 7px'>
		<button class='btn btn-primary btn-sm' id='fauxfubutton' onclick='thisFileUpload()'><i class="far fa-image"></i></button>
		<button type='submit' class='btn btn-primary btn-sm'><i class="far fa-share-square"></i></button>
	</div>
</form>
<?php }
}
