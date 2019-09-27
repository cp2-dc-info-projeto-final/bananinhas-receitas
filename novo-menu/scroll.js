
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