'use strict';

// global.jQuery = require('jquery');
let svg4everybody = require('svg4everybody'),
  popup = require('jquery-popup-overlay'),
  iMask = require('imask'),
  parallax = require('jquery-parallax.js'),
  Snackbar = require('node-snackbar'),
  fancybox = require('@fancyapps/fancybox'),
  jQueryBridget = require('jquery-bridget'),
  Masonry = require('masonry-layout'),
  imagesLoaded = require('imagesloaded');

jQuery(document).ready(function($) {
  jQueryBridget( 'masonry', Masonry, $ );
  // jQueryBridget( 'imagesLoaded', imagesLoaded, $ );

  // Toggle nav menu
  let toggleNav = function () {
    let toggle = $('.nav-toggle');
    let nav = $('.nav');
    let body = $('body');

    toggle.on('click', function (e) {
      e.preventDefault();
      toggle.toggleClass('is-active');
      nav.toggleClass('open');
      body.toggleClass('nav-open');
    });
  };

  let toggleGIT = function () {
    let toggle = $('.get-in-touch_open');
    let git = $('.get-in-touch');
    let close = $('.get-in-touch__close');
    // let body = $('body');

    toggle.on('click', function (e) {
      e.preventDefault();
      toggle.toggleClass('is-active');
      git.toggleClass('open');
      // body.toggleClass('nav-open');
    });

    close.on('click', function (e) {
      e.preventDefault();
      toggle.removeClass('is-active');
      git.removeClass('open');
      // body.toggleClass('nav-open');
    });
  };

  // Modal
  let initModal = function() {
    $('.modal').popup({
      transition: 'all 0.3s',
      scrolllock: true,
      onclose: function() {
        $(this).find('label.error').remove();
        $(this).find('.wpcf7-response-output').hide();
      }
    });
  };

  // Input mask
  let inputMask = function() {
    let phoneInputs = $('input[type="tel"]');
    let maskOptions = {
      mask: '+{7} (000) 000-0000'
    };

    if (phoneInputs) {
      phoneInputs.each(function(i, el) {
        IMask(el, maskOptions);
      });
    }
  };

  $('.parallax-bg').parallax();

  // Contact form
  let contactForm = function() {
    $('.wpcf7').each(function(i, el) {
      let submit = $(this).find('[type="submit"]');

      if (submit.length) {
        let button = '<button type="submit" class="btn"><span class="btn-load"></span><span class="text">' + submit.val() + '</span></button>';
        submit.replaceWith(button);
        $(this).find('.ajax-loader').remove();
      }

      toggleSubmit( $(this) );

      $(this).on( 'click', '.wpcf7-acceptance', function() {
        toggleSubmit( $(el) );
      } );

    });

    function toggleSubmit(form) {
      let button = form.find('button[type="submit"]');

      if(form.find('.wpcf7-acceptance input:checkbox').is(':checked')) {
        button.prop('disabled', false);
      }
      else {
        button.prop('disabled', true);
      }
    }

    // Loader
    $('.wpcf7 form').on('submit', function () {
      let btn = $(this).find('.btn');

      if (btn.hasClass('btn-link')) {
        btn.addClass("btn-loading");
        btn.find('.text').css('display', 'none');
      } else {
        btn.addClass("btn-loading");
      }
    });

    let snackbarNotification = function(msg) {
      Snackbar.show({
        text: msg,
        duration: 5000
      });
    };

    $('.wpcf7').on('wpcf7spam wpcf7invalid wpcf7mailsent wpcf7mailfailed', function (e) {
      let form = $('.wpcf7');
      let msg = e.detail.apiResponse.message;

      $(form).find('.btn').removeClass("btn-loading");

      if (msg) {
        snackbarNotification(msg);
      }
    });
  };

  let checkColumn = function() {
    let column;

    if ($(window).width() < 577) {
      column = 2;
    }
    else {
      column = 3
    }

    return column;
  };

  let grid = $('.portfolio').masonry({
    itemSelector: '.portfolio__item',
    gutter: 0,
    columnWidth: Math.floor($(".portfolio").width() / checkColumn())
  });

  function masonryProjectResize() {
    if ($('.portfolio').length) {
        let defaultSize = Math.floor($(".portfolio").width() / checkColumn());
        let projectDefault = $('.portfolio__item');
        let projectMasonryTall = $('.portfolio__item--tall');
        let gutter = $(window).width() > 576 ? 50 : 30;

        if ($(window).width() > 576) {
          projectDefault.css('height', defaultSize);
          projectMasonryTall.css('height', defaultSize * 2 + gutter);
        }
        else {
          projectDefault.css('height', defaultSize - gutter);
          projectMasonryTall.css('height', defaultSize * 2 + gutter);
        }
    }
  }

  grid.imagesLoaded().progress( function() {
    grid.masonry('layout');
  });

  toggleNav();
  toggleGIT();
  initModal();
  // inputMask();
  contactForm();
  masonryProjectResize();

  $(window).resize(function() {
    masonryProjectResize();
    $('.portfolio').masonry({
      itemSelector: '.portfolio__item',
      gutter: 0,
      columnWidth: Math.floor($(".portfolio").width() / checkColumn())
    });
  });

  // SVG
  svg4everybody({});
});