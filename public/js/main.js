/**
 * Template Name: Flexor - v2.2.0
 * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
!(function($) {
    "use strict";


    // Desplazamiento suave para el menú de navegación y enlaces con clases .scrollto
    var scrolltoOffset = $('#header').outerHeight() - 1;

    // $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
    //     console.log("esta aqiooo")
    //     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    //         var target = $(this.hash);
    //
    //         if (target.length) {
    //             e.preventDefault();
    //
    //             var scrollto = target.offset().top - scrolltoOffset;
    //
    //             if ($(this).attr("href") == '#header') {
    //                 scrollto = 0;
    //             }
    //
    //             $('html, body').animate({
    //                 scrollTop: scrollto
    //             }, 1500, 'easeInOutExpo');
    //
    //             if ($(this).parents('.nav-menu, .mobile-nav').length) {
    //                 $('.nav-menu .active, .mobile-nav .active').removeClass('active');
    //                 $(this).closest('li').addClass('active');
    //             }
    //
    //             if ($('body').hasClass('mobile-nav-active')) {
    //                 $('body').removeClass('mobile-nav-active');
    //                 $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
    //                 $('.mobile-nav-overly').fadeOut();
    //             }
    //             return false;
    //         }
    //     }
    // });

    //Activar el desplazamiento suave en la carga de la página con enlaces hash en la URL
    // $(document).ready(function() {
    //     if (window.location.hash) {
    //         var initial_nav = window.location.hash;
    //         if ($(initial_nav).length) {
    //             var scrollto = $(initial_nav).offset().top - scrolltoOffset;
    //             $('html, body').animate({
    //                 scrollTop: scrollto
    //             }, 1500, 'easeInOutExpo');
    //         }
    //     }
    // });


    // Mobile Navigation
    if ($('.nav-menu').length) {
        var $mobile_nav = $('.nav-menu').clone().prop({
            class: 'mobile-nav d-lg-none'
        });
        $('#header').append($mobile_nav);
        $('#header').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');
        $('#header').append('<div class="mobile-nav-overly"></div>');

        $(document).on('click', '.mobile-nav-toggle', function(e) {
            $('body').toggleClass('mobile-nav-active');
            $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
            $('.mobile-nav-overly').toggle();
        });

        $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
            e.preventDefault();
            $(this).next().slideToggle(300);
            $(this).parent().toggleClass('active');
        });

        $(document).click(function(e) {
            var container = $(".mobile-nav, .mobile-nav-toggle");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
                    $('.mobile-nav-overly').fadeOut();
                }
            }
        });
    } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
        $(".mobile-nav, .mobile-nav-toggle").hide();
    }


    // Cambia la clase .header-scrolled a #header cuando la página se desplaza
    $(window).scroll(function() {

        if ($(this).scrollTop() > 100) {
            $('#header').addClass('header-scrolled');
        } else {
            $('#header').removeClass('header-scrolled');
        }
    });

    if ($(window).scrollTop() > 100) {
        $('#header').addClass('header-scrolled');
        $('.wrapper').addClass('header-scrolled');
    }


    // $("#parrafo").css("color", "#000000");
    // Pegue el encabezado en la parte superior del desplazamiento
    $("#header").sticky({
        topSpacing: 0,
        zIndex: '50'
    });


    // Back to top button
    $(window).scroll(function() {
        if (($('#header').position().top-$(this).scrollTop()+60)>60)
            $("#sidebar").css("top",$('#header').position().top-$(this).scrollTop()+60 );
        else
            $("#sidebar").css("top",60 );

        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });

    $('.back-to-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 1500, 'easeInOutExpo');
        return false;
    });





})(jQuery);
