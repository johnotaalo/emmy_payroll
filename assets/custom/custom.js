$(document).ready(function(){
	$('#myfile').on("change", function(evt) {
		console.log('changed');
		var files = !!this.files ? this.files : [];
				if (!files.length || !window.FileReader)  return; // no file selected, or no FileReader support

				if (/^image/.test( files[0].type)){ // only image file
					var reader = new FileReader(); // instance of the FileReader
					reader.readAsDataURL(files[0]); // read the local file

					reader.onloadstart = function(){
						$("#imagePreview").text('Please Wait...');
						$("#imagePreview").css("background-color", "rgba(0,0,0,0.8)");
					}
					reader.onloadend = function(){ // set image data as background of div
						$("#imagePreview").css("background-image", "url("+this.result+")");
						$("#imagePreview").text('');
					}
				}
	});
});

function process_ajax(data_url, handledata)
{
	$.ajax({
		url: base_url + data_url,
		beforeSend: function( xhr ) {
			$('#loader-wrapper').show();
		}
	})
	.done(function( data ) {
		handledata(data);
		$('#loader-wrapper').hide();
	});
}