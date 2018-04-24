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
