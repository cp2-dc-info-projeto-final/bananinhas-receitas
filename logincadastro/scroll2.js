var height = $('#header').height();

$(window).scroll(function () {
	if($(this).scrollTop() > height){
		$('.menubar').addClass('fixed');
	}else{
		$('.menubar').removeClass('fixed');
	}
});