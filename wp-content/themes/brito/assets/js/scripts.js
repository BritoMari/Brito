(function(){
  "use strict";

/*Adicionando class no  para ficar borrado ao abrir o menu mobile */
  jQuery('input#menu').on('change', function () {
    var isChecked = jQuery(this).is(':checked');
    console.log('isChecked: ', isChecked);
    if (isChecked) {
        jQuery('body').addClass('menu-aberto');
    } else {
        jQuery('body').removeClass('menu-aberto');
    }
  });

/*Fazendo topo ficar visível ao rolar a página*/
  var $ = jQuery;
  jQuery(window).bind('scroll', function () {
    if (jQuery(window).scrollTop() < 200) {
      jQuery('.topo').addClass('transparent');
    } else {
      jQuery('.topo').removeClass('transparent');
    }
  }).trigger('scroll');

/*Digitando texto automatico banner topo*/
  var textoTitulo = jQuery('.texto-banner .titulo').data('texto');
  var typed = new Typed('.texto-banner .titulo', {
    strings: [textoTitulo],
    typeSpeed: 50
  });

  var textoTitulo = jQuery('.texto-banner .subtitulo').data('texto');
  var typed = new Typed('.texto-banner .subtitulo', {
    strings: [textoTitulo],
    typeSpeed: 50,
    startDelay: 1500,
  });

  /*Contador seção skills */
 jQuery(window).scroll(function () {
   if (jQuery('.grafico .contador.inativo').length > 0) {
     var PosicaoGraficoSkills = jQuery('.grafico').offset().top;
     PosicaoGraficoSkills = PosicaoGraficoSkills - (jQuery(window).height() / 2);
     if (jQuery(window).scrollTop() > PosicaoGraficoSkills) {
       jQuery('.grafico .contador.inativo').removeClass('inativo');
       jQuery('.counter').counterUp({ delay: 10, time: 1000 });
     }
   }
 });
  /* menu - rolar ao clicar */
  function onScroll(event){
    var scrollPos = jQuery(document).scrollTop();
}

  jQuery(document).on("scroll", onScroll);
  jQuery('.menu-item a[href^="#"]').on('click', function (e) {
      e.preventDefault();
      jQuery(document).off("scroll");
      
      var target = jQuery(this).attr('href');
      var $target = jQuery(target);
      var position = $target.offset().top - 60
      
      jQuery('html, body').stop().animate({
          'scrollTop': position
      }, 500, 'swing', function () {
          // window.location.hash = target;
          // jQuery(document).on("scroll", onScroll);
      });

      return false;
  }); 

})(); 