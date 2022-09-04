//-----------------
( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

window.classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

})( window );
//-----------------
function disableOther( button ) {
	if( button !== 'showLeftPush' ) {
    //classie.toggle( showLeftPush, 'disabled' );
    //classie.toggle( showLeftPush_fsearch, 'disabled' );
	}
}

$(document).ready(function(e) {

    /**/
    var menuLeft = document.getElementById( 'menu_mobile' ),
      menuClose = document.getElementById( 'btn_menu_close' ),
      showLeftPush = document.getElementById( 'show_menu_mobile' ),
      showLeftPush_fsearch = document.getElementById( 'show_menu_mobile_fsearch' ),
      body = document.body;
      showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'menu-open' );
        classie.toggle( menuLeft, 'open' );
        disableOther( 'showLeftPush' );
      };
      showLeftPush_fsearch.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'menu-open' );
        classie.toggle( menuLeft, 'open' );
        disableOther( 'showLeftPush' );
      };
      //-------
      menuClose.onclick = function() {
        classie.toggle( body, 'menu-open' );
        classie.toggle( menuLeft, 'open' );
        classie.toggle( this, 'active' );
        disableOther( 'showLeftPush' );
      };

    $('#btn_menu_close').bind( 'click', function(){
      disableOther( 'showLeftPush' );
      disableOther( 'showLeftPush_fsearch' );

    });
    //--------

});
