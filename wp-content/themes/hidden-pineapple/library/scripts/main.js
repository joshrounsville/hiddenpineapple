'use strict';

$(function() {

  //////// set booleans for window size

  var body = $('body');
  var isPhone = body.css('padding-bottom') === '1px';
  var isDesktop = body.css('margin-bottom') !== '1px';
  var notDesktop = body.css('margin-bottom') === '1px';

  $(window).resize(function() {
    isPhone = body.css('padding-bottom') === '1px';
    isDesktop = body.css('margin-bottom') !== '1px';
    notDesktop = body.css('margin-bottom') === '1px';
  });



  //////// svg fallback

  Modernizr.addTest('svgasimg', document.implementation.hasFeature('http://www.w3.org/TR/SVG11/feature#Image', '1.1'));

  if ( !Modernizr.svgasimg ) {
    $('img[src*="svg"]').attr('src', function() {
      return $(this).attr('src').replace('.svg', '.png');
    });
  }



  //////// setup request animation frame shim

  (function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for( var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x ) {
      window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
      window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] || window[vendors[x]+'CancelRequestAnimationFrame'];
    }

    if (!window.requestAnimationFrame) {
      window.requestAnimationFrame = function(callback, element) {
        var currTime = new Date().getTime();
        var timeToCall = Math.max(0, 16 - (currTime - lastTime));
        var id = window.setTimeout(function() { callback(currTime + timeToCall); }, timeToCall);
        lastTime = currTime + timeToCall;
        return id;
      };
    }

    if (!window.cancelAnimationFrame) {
      window.cancelAnimationFrame = function(id) {
        clearTimeout(id);
      };
    }
  }());



  //////// twitter styled

  if ( body.hasClass('home') ) {

    twitterFetcher.fetch('521391349707194368', 'twitter-feed', 1, true, false, true, dateFormatter, false);

    function dateFormatter(date) {
      return date.toLocaleDateString();
    }

  }




  //////// check if element is visible on scroll

  var checkVisible = function() {

    var el = $('.check-visible');

    el.each(function() {

      if ( $(this).visible(true) ) {
        $(this).addClass('visible');
      }

    });

  };

  checkVisible();

  $(window).on('scroll', function() {
    window.requestAnimationFrame(checkVisible);
  });




  //////// hide show elements on target hover

  var showElementsHover = function() {
    var target = $('.hover-target');
    var targetWrap = $('.hover-wrap');

    $(target).mouseenter(function() {
      $(this).parents('.hover-wrap').addClass('show');
    });

    $(targetWrap).mouseleave(function() {
      $(this).removeClass('show');
    });
  };

  showElementsHover();



});