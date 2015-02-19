$(document).ready(function(){

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