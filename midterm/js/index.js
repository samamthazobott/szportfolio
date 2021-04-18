$(document).ready(function(){
	$('.thumbnail').click(function(){
		console.log($(this).attr('src'));
		$('#container img').attr('src', $(this).attr('src'));
		$('#container').fadeIn();
	});
	$('#container').click(function(){
		$('#container').fadeOut();
	});
});