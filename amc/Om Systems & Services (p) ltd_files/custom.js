    $(document).ready(function() {

      $('.scroll-top').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        return false;
      });

      $('#client-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        items: 8,
        autoplay: true,
        autoplayTimeout: 10000,
		responsive:{
				0:{
					items:2,
					nav:true
				},
				600:{
					items:4,
					nav:false
				},
				1000:{
					items:8,
					nav:true
				}
			}		
      });

  $('#burger').click(function () {
    $('.header').toggleClass('menu-opened');
  });
  
	  $(window).scroll(function () {
		var aTop = $('#main-header').height();
		if ($(this).scrollTop() >= aTop) {
		  $('#main-header').addClass('menu-fixed');
		  $('body').addClass('body-fixed');
		}
		else{
		  $('#main-header').removeClass('menu-fixed');      
		  $('body').removeClass('body-fixed');
		  }
	  });
	  
      if ($(window).width() < 767) {
        $('.sub-menu-nav').hide();

        $('.menu-arrow').click(function(event) {
          event.preventDefault();
          $(this).toggleClass('menu-arrow-active');
          $(this)
            .next('.sub-menu-nav')
            .slideToggle();
        });
      }	  

$(".sub-menu-nav li a").click(function(e) {
    var aid = $(this).attr("href");
    $('html,body').animate({scrollTop: $(aid).offset().top - 100},'slow');
});

$(document).bind("contextmenu",function(e){
      return false;
   });

  
	  });