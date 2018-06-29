(function(){
  "use strict";
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
    startDelay: 1000,
  });

  /*Contador seção skills */
 jQuery(window).scroll(function () {
   if (jQuery('.grafico .contador.inativo').length > 0) {
     var PosicaoGraficoSkills = jQuery('.grafico').offset().top;
     PosicaoGraficoSkills = PosicaoGraficoSkills - (jQuery(window).height() / 2);
     if (jQuery(window).scrollTop() > PosicaoGraficoSkills) {
       jQuery('.grafico .contador.inativo').removeClass('inativo');
     }
   }
 });
})();