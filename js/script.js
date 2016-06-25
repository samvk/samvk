/* jshint esversion: 6 */
/* global $, document, Image, window, setTimeout, setInterval, clearInterval */

$(document).ready(function () {
    "use strict";
    
    /************** Nav autoscroller **************/

    $.fn.scrollTo = function () {
        return this.each(function () {
            //Both "html" and "body" required for browser compatibility
            $("html, body").stop().animate({
                scrollTop: $(this).offset().top
            }, 1000);
        });
    };

    $(".autoscroll").click(function (e) {
        e.preventDefault();
        let anchor = $(this).attr("href");
        $(anchor).scrollTo();
    });
    
    /****** nav--list Hamburger slideToggle() ******/

    $(".nav__hamburger").click(function () {
        $(".nav-list").stop().slideToggle(350);
    });

    $(".nav__logo, .nav-list__item").click(function () {
        if (window.matchMedia("(max-width: 767px)").matches) {
            $(".nav-list").stop().delay(800).slideUp(500);
        }
    });
    
    /*********** Nav section highlighting ************/
    
    $(window).scroll(function () {
        let windowTopLine = $(window).scrollTop();

        $("header, body>section").each(function () {
            let sectionTopLine = $(this).offset().top - 55;
            let sectionBottomLine = $(this).offset().top + $(this).innerHeight() - 55;
            let thisSectionID = "#" + $(this).attr("id");

            let $myNavAnchor = $(`[href="${thisSectionID}"]`);

            //If the object is  visible        
            if (sectionTopLine < windowTopLine && windowTopLine < sectionBottomLine) {
                $myNavAnchor.addClass("is-highlighted");
            } else {
                $myNavAnchor.removeClass("is-highlighted");
            }
        });

    });
    
    /*********** Contact form placeholder text ***********/

    $(":input").focus(function () {
        $(".input__placeholder").removeClass("loud")
        $(this).siblings(".input__placeholder").addClass("is-displayed").addClass("loud");
    }).blur(function () {
        $(this).siblings(".input__placeholder").removeClass("loud");
    });

});