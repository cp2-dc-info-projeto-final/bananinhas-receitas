
var height = $('#header').height();

$(window).scroll(function () {
	if($(this).scrollTop() > height){
		$('.nav-alto').addClass('fixed');
	}else{
		$('.nav-alto').removeClass('fixed');
	}
});



    $('.pequeno').waypoint(function(direction) {
    	$('.conteudocinza').addClass('animated fadeIn');
    })

    $('.nav-alto').waypoint(function(direction) {
    	$('.conteudocinza1').addClass('animated fadeIn');
    })

    $('.conteudocinza1').waypoint(function(direction) {
    	$('.conteudocinza2').addClass('animated fadeIn');
    })

     $('.conteudocinza2').waypoint(function(direction) {
        $('.conteudocinza3').addClass('animated fadeIn');
    })