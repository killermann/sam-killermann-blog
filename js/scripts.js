//@prepros-prepend skip-link-focus-fix.js
//@prepros-prepend intersection-observer.js
//@prepros-prepend lozad.min.js


/*
    Dark Mode Color Scheme Toggle
*/
// const root = document.documentElement
// const themeBtns = document.querySelectorAll('.color-scheme > button')
//
// themeBtns.forEach((btn) => {
//   btn.addEventListener('click', handleThemeUpdate)
// })
//
// function handleThemeUpdate(e) {
//     switch(e.target.value) {
//         case 'night':
//             root.style.setProperty('--bg-color', 'black')
//             root.style.setProperty('--text-color', '#ddd')
//         break
//         case 'day':
//             root.style.setProperty('--bg-color', 'white')
//             root.style.setProperty('--text-color', 'black')
//         break
//     }
// }

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
});
