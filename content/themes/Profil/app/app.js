var scrollex = require('jquery.scrollex');

var app = {
  $menuElement : $('.menu'),
  $wrapperElement : $('.wrapper'),
  init:function(){
    console.log('ça marche ou quoi?');
    app.Banner();
    app.Menu();
    app.eventScroll();

  },
  Banner : function(){
    var $header = $('.header');
    var $banner = $('.banner');

    $banner.scrollex({
      bottom:$header.height(),

      enter:function(){
        $header.removeClass('header--fixed');
      },
      leave:function(){
        $header.addClass('header--fixed');
      }
    });
},
  Menu:function(){

$('.Menu').on(
  'click',
  app.OpenMenu
);

$('.CloseMenu').on(
  'click',
  app.CloseMenu
);
},

eventScroll : function(){
  $('a[href*="#"]:not([href="#"])').on('click', app.smoothScroll);
    
  $('main > section').each(function() {
    // Pour chaque section...

      // J'isole l'id de ma section
      var id = $(this).attr('id');

      // J'applique scrollex sur mon element (ma section)
      $(this).scrollex({

          // Je dit à scrollex de se base sur le milieu de l'element
          // pour déclancher les évènements
          mode: 'middle',

          // Lors que mon élement entre sur la page
          enter: function() {
            // J'applique la class "active" sur l'element <a>
            // dont le href vaux l'id de mon element (ma section)
            $('nav a[href="#'+id+'"]').addClass('active');
          },
          leave: function() {

            // J'enleve la class "active" sur l'element <a>
            // dont le href vaux l'id de mon element (ma section)
            $('nav a[href="#'+id+'"]').addClass('active');
              $('nav a[href="#'+id+'"]').removeClass('active');
              app.$menuElement.removeClass('menu--visible');
              app.$wrapperElement.removeClass('blur');

          }

      });
  });
},

OpenMenu:function(event){
  app.$menuElement.addClass('menu--visible');
  app.$wrapperElement.addClass('blur');
},

CloseMenu:function(event){
  app.$menuElement.removeClass('menu--visible');
  app.$wrapperElement.removeClass('blur');
},
smoothScroll: function(evt) {

  // Je supprime l'evenement par défaut de l'ancre
  evt.preventDefault();

  // Je transforme la cible en objet jquery
  var target = $(this.hash);

  // Je récupere la distance entre mon élément et le haut de la page.
  var targetPosition = target.offset().top;

  if (target.length) {

    $('html, body').animate({
      scrollTop: targetPosition
    }, 1500);
  }
  
} 



};
$(app.init);