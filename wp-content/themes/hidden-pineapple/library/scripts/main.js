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




  //////// word changer

  var wordChanger = function() {

    var words1 = [
      'useful',
      'fresh',
      'unique',
      'sleek',
      'refined',
      'practical'
    ];

    var words2 = [
      'beautiful',
      'innovative',
      'helpful',
      'compelling',
      'essential',
      'fun'
    ];

    var target1 = $('span.word-1');
    var target2 = $('span.word-2');
    var counter = 1;

    var timer = setInterval(function() {

      var item1 = '<span>' + words1[counter] + '</span>';
      var width1;

      var item2 = '<span>' + words2[counter] + '</span>';
      var width2;


      target1.removeClass('rotate');
      target2.removeClass('rotate');

      setTimeout(function() {
        target1.html( item1 );
        width1 = $(target1).find('span').width();
        target1.addClass('rotate').css('width', width1);

        target2.html( item2 );
        width2 = $(target2).find('span').width();
        target2.addClass('rotate').css('width', width2);

      }, 500);

      counter++;

      if ( counter === words1.length ) {
        counter = 0;
      }


    }, 3000);

  };

  if ( !isPhone && body.hasClass('home') ) {
    wordChanger();
  }


  //////// hide show elements on target hover

  var showElementsHover = function() {
    var target = $('.hover-target');
    var inputSearch = $('.input-search');

    $(target).mouseenter(function() {
      $(this).addClass('show');
    });

    $(target).mouseleave(function() {

      if ( !inputSearch.is(':focus') ) {
        $(this).removeClass('show');
      }

    });
  };

  showElementsHover();



});