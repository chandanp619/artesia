/*global lightGallery*/

export default {
  init() {
    // JavaScript to be fired on all pages
    $('.mobile-nav-toggle').click(function () {
      $(this).toggleClass('is-active');
      $('.nav-primary').toggleClass('is-open');
      $('.site-header').toggleClass('menu-open');
    });

    $("section.featured-panel .carousel").slick();
    $(".owl-carousel-home").slick({"arrows":true});
    $(".home-floor-plans-slider").slick({"arrows":true,slidesToShow: 3,slidesToScroll: 1});

    //Menu Working
    $('ul#menu-main-menu li.menu-item-has-children a').mouseover(function(){
      var this_item = $(this).parents('li').find("ul.sub-menu");
      this_item.addClass('submenu-visible');
    });

    $('ul#menu-main-menu li.menu-item-has-children a').mouseout(function(){
      $(this).parents('li').find("ul.sub-menu").removeClass('submenu-visible');
    });


    $(document).on('resize, ready', function() {
      // Add class if screen size equals
      var $window = $(window),
          $html = $('html');

      function resize() {
        if ($window.width() <= 768) {
          return $html.attr( "class","xs" );
        }
        else if ($window.width() > 768 && $window.width() <= 992) {
          return $html.attr( "class", "sm" );
        }
        else if ($window.width() > 992 && $window.width() <= 1200) {
          return $html.attr( "class", "md" );
        }
        else if ($window.width() > 1200) {
          return $html.attr( "class", "lg" );
        }

      }
      $window.resize(resize).trigger('resize');

    });

    $('.xs-logo').html($('#menu-main-menu .artesia-logo').html());

    // Add svg lot-path class
    $('#lotMapSvg g:first-child [points]').attr('class','lot-path');
    $('#lotMapSvg #active_lots g g:first-child path').attr('class','lot-path');
    $('#lotMapSvg #phase_4a g path:first-child').attr('class','lot-path');
    $('#lotMapSvg #phase_4b g path:first-child').attr('class','lot-path');
    $('#lotMapSvg #phase_4c g path:first-child').attr('class','lot-path');


  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $('.gallery-open').each(function () {
      $(this).click(function() {
        lightGallery($(this)[0], {
          counter: false,
          download: false,
          dynamic: true,
          dynamicEl: $(this).data('dynamic-el'),
        });
      });
    });
  },
};
