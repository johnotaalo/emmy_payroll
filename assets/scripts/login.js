$(document).ready(function(){
	$('.overlay').hide();
	$('#sign-in').click(function(){
	});

	$('.overlay').click(function(){
		$(this).hide();
	});

setTimeout(function(){$('.footer').removeClass('pulse');$('.footer').addClass('pulse');}, 2000);
});