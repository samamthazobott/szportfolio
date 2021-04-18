$(document).ready(function(){
	$('.thumbnail').click(function(){
		console.log($(this).attr('src'));
		$('#container img').attr('src', $(this).attr('src'));
		$('#container').fadeIn();
	});
	$('#container').click(function(){
		$('#container').fadeOut();
	});








	$('.thumbnail img').click(function(){
				var image = $(this).attr('src');
				console.log(image);
				$('.largeImg img').attr('src', image)
				$('.largeImg').fadeIn(300);
		});

		$('.largeImg').click(function(){
			$('.largeImg').fadeOut(300);
		});



		console.log(success);
		if(success == 'yes')
		alert("your message has been sent, somone will be in contact with you soon.")




});



