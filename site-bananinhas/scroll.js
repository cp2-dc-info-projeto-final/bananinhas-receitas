
var navpos = $('section.nav-alto').offset();
    console.log(navpos.top);
    $(window).bind('scroll', function() {
      if ($(window).scrollTop() > navpos.top) {
        $('section.nav-alto').addClass('fixed');
       }
       else {
         $('section.nav-alto').removeClass('fixed');
       }
    });