/*jslint browser: true*/
/*global $, jQuery, alert*/

$(document).ready(function () {
    'use strict';
    var offset = 200;
    if (window.innerWidth >= 992) {
        offset = 100;
        var max = 0;
        $('.card').each(function () {
            if ($(this).height() > max) {
                max = $(this).height();
            }
        });

        $('.card').each(function () {
            $(this).css("height", max);
        });
    }


    // From LupoWebDesign
    //  jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - offset)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    /*  Closes the Responsive Menu on Menu Item Click
        But first check if its a dropdown list -- if it is dont close menu */
    $('.navbar-collapse ul li a').click(function () {
        var caller = $(event.target);
        if (!caller.hasClass('dropdown-toggle')) {
            $('.navbar-toggle:visible').click();
        }
    });
});
