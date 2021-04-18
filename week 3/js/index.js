$(document).ready(function(){

        function randomNumber(min, max){
            return Math.random() * (max-min) + min;
        }

    
    setInterval(function(){
        var x = randomNumber(1, 9);
        var y = randomNumber(1, 3);
        $('.icons').first().css('left', x * 10 + "%");
        $('.icons').first().css('top', y * 10 + "%");

        $('.icons').last().fadeOut();
        $('.icons').first().fadeIn();
        $('.icons').first().appendTo('#icon-container');

    }, 4000);
});





