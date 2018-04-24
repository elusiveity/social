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
