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

    // Draw SVG on Hover
    $('.draw-me').children('path').each(function() {
    	var path = this;
    	// Get the length of each path
    	var pathLength = path.getTotalLength();
    	$(this).css('stroke-dasharray', pathLength);
    	$(this).css('stroke-dashoffset', 0);
    });

    $(function() {
    	$('.svg-containment-system').hover(
    		function() {
    			$(this).children('.draw-me').children('path').each(function() {
    				var path = this;
    				var pathLength = path.getTotalLength();
    				$(this).css('stroke-dasharray', pathLength);
    				$(this).css('stroke-dashoffset', pathLength);
    				$(path).css('stroke', '#ffffff');

    				function whiteOut() {

    					$(path).css('stroke-dashoffset', 0);
    				}
    				setTimeout(function() {
    					whiteOut();
    				}, 500);
    			});
    		},
    		function() {
    			$(this).children('.draw-me').children('path').each(function() {
    				var path = this;
    				var pathLength = path.getTotalLength();
    				$(this).css('stroke-dasharray', pathLength);
    				$(this).css('stroke-dashoffset', pathLength);

    				function whiteIn() {
    					$(path).css('stroke', '#000000');
    					$(path).css('stroke-dashoffset', 0);
    				}
    				setTimeout(function() {
    					whiteIn();
    				}, 500);
    			});
    		}
    	);
    });

    /*
        Dark Mode Color Scheme Toggle
    */

    $("#night-mode").on('click', function() {
        localStorage.setItem('colorScheme', 'night');
        $("html").get(0).style.setProperty('--bg-color', 'black');
        $("html").get(0).style.setProperty('--text-color', '#ddd');
        $("html").get(0).style.setProperty('--bg-faint', '#343434')
        document.getElementById("night-mode").classList.add('is-active');
		document.getElementById("day-mode").classList.remove('is-active');
    });

    $("#day-mode").on('click', function() {
        localStorage.setItem('colorScheme', 'day');
        $("html").get(0).style.setProperty('--bg-color', 'white');
        $("html").get(0).style.setProperty('--text-color', 'black')
        $("html").get(0).style.setProperty('--bg-faint', '#eaeaea')
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
});
