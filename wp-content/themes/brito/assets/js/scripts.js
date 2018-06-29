(function(){
  "use strict";

  var $ = jQuery;
  jQuery(window).bind('scroll', function () {
    if (jQuery(window).scrollTop() < 200) {
      jQuery('.topo').addClass('transparent');
    } else {
      jQuery('.topo').removeClass('transparent');
    }
  }).trigger('scroll');

  	/*Banner Home*/
	if (jQuery('#swiper-banner').length > 0) {
    var swiperBanner = new Swiper ('#swiper-banner', {
		 pagination: {
        el: '#swiper-banner .swiper-pagination',
        clickable: true,
        type: 'bullets',
      },
		  navigation: {
        nextEl: '#swiper-banner .swiper-button-next',
        prevEl: '#swiper-banner .swiper-button-prev',
      },
		breakpoints: {
    		768: {
    		  slidesPerView: 1,
    		  slidesPerColumn: 1,
    		  spaceBetween: 0
    		}
  	  },
      slidesPerView: 1,
      autoplay: {
        delay: 3000,
      },
      loop: true,
    });
  }


})();