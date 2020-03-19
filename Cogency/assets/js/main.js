

(function ($) {
"use strict";


    // Loading Box (Preloader)
    function handlePreloader() {
        if ($('.preloader').length) {
            $('.preloader').delay(200).fadeOut(500);
        }
    }


    // Header Style and Scroll to Top
    function headerStyle() {
        if ($('.main-header').length) {
            var windowpos = $(window).scrollTop();
            var siteHeader = $('.main-header');
            var scrollLink = $('.scroll-top');
            if (windowpos >= 150) {
                siteHeader.addClass('fixed-header');
                scrollLink.fadeIn(300);
            } else {
                siteHeader.removeClass('fixed-header');
                scrollLink.fadeOut(300);
            }
        }
    }

    headerStyle();


/*=====================  Hide Navbar on Scroll Down js =================================*/

/*===================== start Hide Navbar on Scroll Down js =================================*/

    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("main-header").style.top = "0";
      } else {
        document.getElementById("main-header").style.top = "-200px";
      }
      prevScrollpos = currentScrollPos;
    }


/*===================== end Hide Navbar on Scroll Down js =================================*/

/*=====================  start service menu js =================================*/


       $(window).bind('scroll', function() {
       var navHeight = $( window ).height() -110;
             if ($(window).scrollTop() > navHeight) {
                 $('#single-page-menu').addClass('sticky');
             }
             else {
                 $('#single-page-menu').removeClass('sticky');
             }

       if($(window).width() <= 1500){

            var navHeight = $( window ).height() +50;
             if ($(window).scrollTop() > navHeight) {
                 $('#single-page-menu').addClass('sticky');
             }
             else {
                 $('#single-page-menu').removeClass('sticky');
             }
        }

        });

/*=====================  End service menu js =================================*/

/*================= start click smoothScroll Specific section================*/

       $(window).bind('scroll', function() {
       var serviceMenuTopHeight = $( window ).height() - 150;
             if ($(window).scrollTop() > serviceMenuTopHeight) {

      //      start section active
              var topMenu = jQuery("#single-page-menu"),
                  offset = 40,
                  topMenuHeight = topMenu.outerHeight()+offset,
                  // All list items
                  menuItems =  topMenu.find('a[href*="#"]'),
                  // Anchors corresponding to menu items
                  scrollItems = menuItems.map(function(){
                    var href = jQuery(this).attr("href"),
                    id = href.substring(href.indexOf('#')),
                    item = jQuery(id);
                    //console.log(item)
                    if (item.length) { return item; }
                  });

              // Bind to scroll
              jQuery(window).scroll(function(){
                 // Get container scroll position
                 var fromTop = jQuery(this).scrollTop()+topMenuHeight;

                 // Get id of current scroll item
                 var cur = scrollItems.map(function(){
                   if (jQuery(this).offset().top < fromTop)
                     return this;
                 });

                 // Get the id of the current element
                 cur = cur[cur.length-1];
                 var id = cur && cur.length ? cur[0].id : "";

                 menuItems.parent().removeClass("active");
                 if(id){
                      menuItems.parent().end().filter("[href*='#"+id+"']").parent().addClass("active");
                 }

              });
      //      end section active

            }

        });

/*================= end click smoothScroll Specific section ================*/



    /*========== Start dg Counter To Js funfact   ==========*/

    if ($('.funfact').length) {
        $(window).on('scroll.funfact', function () {
            var stat = $('.funfact');
            if ($(this).scrollTop() >= stat.offset().top - $(window).height() + 50) {
                $('.count').countTo();
                $(window).off('scroll.funfact');
            }
        });
    }

    if ($('.funfact-two').length) {
        $(window).on('scroll.funfact-two', function () {
            var stat = $('.funfact-two');
            if ($(this).scrollTop() >= stat.offset().top - $(window).height() + 50) {
                $('.count-two').countTo();
                $(window).off('scroll.funfact-two');
            }
        });
    }

    /*========== end dg Counter To Js funfact   ==========*/



    // Elements Animation
    if($('.wow').length){
      var wow = new WOW({
      mobile:       false
      });
      wow.init();
    }

    // magnificPopup
    $('.vedio-play').magnificPopup({
        type: 'video',
    });









    /*==========   start case-study-slider     ==========*/
    if ($('.case-study-slider').length) {

        $('.case-study-slider').slick({
          dots: false,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 1,
          prevArrow: '<button class="case-study-prev"><i class="flaticon-left-arrow"></i></button>',
          nextArrow: '<button class="case-study-next"><i class="flaticon-right-arrow"></i></button>',
          responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
                infinite: true,
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
              }
            }

          ]
        });

    }

    /*==========   end case-study-slider     ==========*/

/*=======================================================================================
                        start testimonial slider
=======================================================================================*/

        //  testi slider part two
        if ($('.client-img-slider').length) {
            $('.client-img-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 3000,
                arrows: false,
                prevArrow: '<button class="testi-prev"><i class="flaticon-left-arrow"></i></button>',
                nextArrow: '<button class="testi-next"><i class="flaticon-right-arrow"></i></button>',
                vertical: true,
                verticalSwiping: true,
                centerMode: true,
                centerPadding: '100px',
                dots: false,
                asNavFor: '.testi-content-slider',
                focusOnSelect: true,

                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 1,
                            arrows: true,
                            vertical: false,
                            verticalSwiping: false,

                        }
                },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            arrows: true,
                            vertical: false,
                            verticalSwiping: false,
                        }
                }

                ]


            });
        }

        //  testi slider part two
        if ($('.testi-content-slider').length) {
            $('.testi-content-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 3000,
                arrows: true,
                prevArrow: '<button class="testi-prev"><i class="flaticon-left-arrow"></i></button>',
                nextArrow: '<button class="testi-next"><i class="flaticon-right-arrow"></i></button>',
                dots: false,
                asNavFor: '.client-img-slider',

                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            arrows: false,

                        }
                }


                ]

            });
        }


/*=======================================================================================
                        end testimonial slider
=======================================================================================*/


    $('#single-page-menu').smoothScroll(500);

    // Scroll to a Specific Div
    if ($('.scroll-to-target').length) {
        $(".scroll-to-target").on('click', function () {
            var target = $(this).attr('data-target');
            // animate
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 1000);

        });
    }
    /* ==========================================================================
       When document is scroll
       ========================================================================== */

    $(window).on('scroll', function () {
        headerStyle();
    });

    /* ==========================================================================
       When document is loaded
       ========================================================================== */

    $(window).on('load', function () {
        handlePreloader();
    });


})(jQuery);