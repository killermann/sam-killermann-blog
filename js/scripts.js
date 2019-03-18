//@prepros-prepend skip-link-focus-fix.js
//@prepros-prepend intersection-observer.js
//@prepros-prepend lozad.min.js

$( document ).ready(function() {

    // Initialize lozad

    lozad(".lazy-load", {
    	rootMargin: "300px 0px",
        loaded: function (el) {
			el.classList.add("is-loaded");
		}
    }).observe();


    /*
        SHIFTING COLORS ~ Chameleon
        Written by King'ori
        Documented here: http://kingori.co/minutae/2013/04/shifting-colors/
    */

    // Initialize object
    var Chameleon = {};

    Chameleon.noOfColors = 12; // should be in CSS, with the transitions
    Chameleon.duration = 6; // should match the transition duration in css

    Chameleon.init = function() {

        // Grab the body, we will be using it a lot
        Chameleon.bodyElement = jQuery("body");

        // ~~ faster than Math.floor() -> http://rocha.la/JavaScript-bitwise-operators-in-practice
        Chameleon.colorT = 0;
        Chameleon.changeColor();

      // Defaults to @orange and @skyblue on hover if we aren't doing this.
    };

    // Switch colors
    Chameleon.changeColor = function() {
        Chameleon.bodyElement.removeClass( 'color' + Chameleon.colorT % Chameleon.noOfColors );
        Chameleon.colorT++;
        Chameleon.bodyElement.addClass( 'color' + Chameleon.colorT % Chameleon.noOfColors );
        setTimeout( Chameleon.changeColor, Chameleon.duration * 1000 );
    };

    // Get ready, set ... GO!
    Chameleon.init();

    /* end Chameleon */

    /*
        Dark Mode Color Scheme Toggle
    */

    $("#night-mode").on('click', function() {
        localStorage.setItem('colorScheme', 'night');
        $("html").get(0).style.setProperty('--bg-color', 'black');
        $("html").get(0).style.setProperty('--text-color', '#ddd');
        $("html").get(0).style.setProperty('--bg-faint', '#222222')
        $("html").get(0).style.setProperty('--bg-mask', 'rgba(0,0,0,.7)')
        document.getElementById("night-mode").classList.add('is-active');
		document.getElementById("day-mode").classList.remove('is-active');
    });

    $("#day-mode").on('click', function() {
        localStorage.setItem('colorScheme', 'day');
        $("html").get(0).style.setProperty('--bg-color', 'white');
        $("html").get(0).style.setProperty('--text-color', 'black')
        $("html").get(0).style.setProperty('--bg-faint', '#f3f3f3')
        $("html").get(0).style.setProperty('--bg-mask', 'rgba(255,255,255,.7)')
        document.getElementById("day-mode").classList.add('is-active');
        document.getElementById("night-mode").classList.remove('is-active');
    });

    if(localStorage.getItem("colorScheme")==="night") {
        document.getElementById("night-mode").classList.add('is-active');
		document.getElementById("day-mode").classList.remove('is-active');
    } else {
        document.getElementById("day-mode").classList.add('is-active');
        document.getElementById("night-mode").classList.remove('is-active');
    }

    // Animate SVG Icons

    $.fn.isInViewport = function() {
        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();
        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();
        return elementBottom > viewportTop && elementTop < viewportBottom;
    };

    var path = document.querySelector('.animated-svg path');
    var length = path.getTotalLength();
    // Clear any previous transition
    path.style.transition = path.style.WebkitTransition =
      'none';
    // Set up the starting positions
    path.style.strokeDasharray = length + ' ' + length;
    path.style.strokeDashoffset = length;
    // Trigger a layout so styles are calculated & the browser
    // picks up the starting position before animating
    path.getBoundingClientRect();
    // Define our transition
    path.style.transition = path.style.WebkitTransition =
      'stroke-dashoffset 1.2s ease-in-out, color 6s linear';

    $(window).on('resize scroll', function() {

        if($('#heart-sK').isInViewport()){
            // Go!
            path.style.strokeDashoffset = '0';
        }
    });

});
