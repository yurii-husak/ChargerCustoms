import $ from 'jquery';

import whatInput from 'what-input';

window.$ = $;

// import Foundation from 'foundation-sites';

// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
import './lib/foundation-explicit-pieces';

$(document).foundation();

$('.ba-header-slide').slick({
    arrows: true,
    responsive: [
        {
            breakpoint: 769,
            settings: {
                arrows: false,
            }
        }
    ]
});

$('.ba-projects-slider-one').slick({
    infinite: true,
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 2,
    variableWidth: true,
    responsive: [
        {
            breakpoint: 769,
            settings: {
                slidesToScroll: 1
            }
        }
    ]
});

$('.ba-projects-slider-two').slick({
    infinite: true,
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 2,
    variableWidth: true,
    responsive: [
        {
            breakpoint: 769,
            settings: {
                slidesToScroll: 1
            }
        }
    ]
});

$('.ba-testimonials-slider').slick({
    infinite: true,
    arrows: true,
    slidesToShow: 1,
    slidesToScroll: 1,
});

$(function(){
    $("a[href^='#']").click(function(){
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
        return false;
    });
});