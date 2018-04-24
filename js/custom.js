// Autosize the textarea

var observe;
if (window.attachEvent) {
	observe = function (element, event, handler) {
		element.attachEvent('on'+event, handler);
	};
}
else {
	observe = function (element, event, handler) {
		element.addEventListener(event, handler, false);
	};
}
function init () {
	var text = document.getElementById('message');
	function resize () {
		text.style.height = 'auto';
		text.style.height = text.scrollHeight+'px';
	}
	/* 0-timeout to get the already changed text */
	function delayedResize () {
		window.setTimeout(resize, 0);
	}
	observe(text, 'change',  resize);
	observe(text, 'cut',	 delayedResize);
	observe(text, 'paste',   delayedResize);
	observe(text, 'drop',	delayedResize);
	observe(text, 'keydown', delayedResize);

	text.focus();
	text.select();
	resize();
}


// Update the card top header when you select an image
 function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				//$('#uploadedImage')
				//	.attr('background-image', e.target.result)
				//	.width(150)
				//	.height(200)
				//	.slideDown(400);
				$('#uploadedImage')
					.attr('src', e.target.result)
					.slideDown(400);
			};

			reader.readAsDataURL(input.files[0]);
		}
}


// Remote custom button for file upload take two this time with jquery
// .... goddamnit.

function thisFileUpload()
{
	document.getElementById('file').click();
}
