
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

  // Check if we support CSS transitions on the browser
  if ( Modernizr.csstransitions ) {

    // Grab the body, we will be using it a lot
    Chameleon.bodyElement = jQuery("body");

    // ~~ faster than Math.floor() -> http://rocha.la/JavaScript-bitwise-operators-in-practice
    Chameleon.colorT = 0;
    Chameleon.changeColor();
  }
  // Defaults to @orange and @skyblue on hover if we aren't doing this.
};

// Switch colors
Chameleon.changeColor = function() {
  Chameleon.bodyElement.removeClass( 'color' + Chameleon.colorT % Chameleon.noOfColors );
  Chameleon.colorT++;
  Chameleon.bodyElement.addClass( 'color' + Chameleon.colorT % Chameleon.noOfColors );
  setTimeout( Chameleon.changeColor, Chameleon.duration * 1000 );
};


$( document ).ready(function() {

	// Get ready, set ... GO!
	Chameleon.init();
});

/* end Chameleon */
