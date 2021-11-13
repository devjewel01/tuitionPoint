// -----------------------------
(function($) {
    "use strict";



    // Click To open Slide Nav
    $('#navSlideBox').on('click', function() {
        $('#mySidenav').css('width', '480px');
    });
    $('#sideNavClose').on('click', function() {
        $('#mySidenav').css('width', '0px');
    });





    // Hero Area Carousel
    function hero_carousel() {
        var owl = jQuery(".hero-carousel");
        owl.owlCarousel({
            loop: true,
            margin: 30,
            responsiveClass: true,
            navigation: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            nav: false,
            items: 5,
            smartSpeed: 2000,
            dots: false,
            autoplay: false,
            autoplayTimeout: 4000,
            center: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                768: {
                    items: 1
                }
            }
        });
    }
    hero_carousel();


    // Owl Carousel Js
    // Hero Area Carousel
    function opinion_carousel() {
        var owl = jQuery(".opinion-carousel");
        owl.owlCarousel({
            loop: true,
            margin: 30,
            responsiveClass: true,
            navigation: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            nav: false,
            items: 5,
            smartSpeed: 2000,
            dots: true,
            autoplay: false,
            autoplayTimeout: 4000,
            center: false,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                768: {
                    items: 2
                }
            }
        });
    }
    opinion_carousel();



}(jQuery));