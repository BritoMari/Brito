(function(){
  "use strict";

  var $ = jQuery;

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

	
  /*empreendimento*/
    var temOutroSwiperAtivo = false;
    var swiperEmpreendimento;



    /*Empreendimentos slide*/
    if (jQuery('#swiper-empreendimentos-slide').length > 0) {
      var swiperEmpreendimentosSlide = new Swiper ('#swiper-empreendimentos-slide', {
        slidesPerView: 4,
        spaceBetween: 0,
        direction: 'horizontal',
        loop: true,
        autoplay: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          768: {
            slidesPerView: 2,
            spaceBetween: 0
          }
        },
      });
    }

  /*Fazer topo ficar visível ao rolar na home */
  jQuery(window).bind('scroll', function () {
    if (jQuery(window).scrollTop() < 200) {
        jQuery('.topo').addClass('transparent');
    } else {
        jQuery('.topo').removeClass('transparent');
    }
});

/*Contador seção estágio da obra */
jQuery(window).scroll(function () {
  if (jQuery('.estagio-obra .contador.inativo').length > 0) {
    var PosicaoEstagioObra = jQuery('.estagio-obra').offset().top;
    PosicaoEstagioObra = PosicaoEstagioObra - (jQuery(window).height() / 2);
    if (jQuery(window).scrollTop() > PosicaoEstagioObra) {
      jQuery('.estagio-obra .contador.inativo').removeClass('inativo');
    }
  }
});

})();