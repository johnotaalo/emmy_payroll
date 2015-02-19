$(document).ready(function(){

});

function process_ajax(data_url)
{
	$.ajax({
		url: base_url + data_url,
		beforeSend: function( xhr ) {
			$('#loader-wrapper').show();
		}
	})
	.done(function( data ) {
		obj = jQuery.parseJSON(data);
		$('#loader-wrapper').hide();
	});
}