$(".kart").animateSprite({
    fps: 12,
    animations: {
        stop: [0],
        spinout: [0, 2, 3, 4, 5, 6, 7, 8]
    },
    loop: true,
    complete: function(){
        // use complete only when you set animations with 'loop: false'
        alert("animation End");
    }
});

$('.kart').click(function(){
	var kart = $(this);
	$(".kart").animateSprite('play', 'spinout');
	setTimeout(function(){
		kart.animationSprite('play', 'stop');
	}, 2000);
});






