/* eslint-disable */

export function toggleBg() {
  if ($('.page-header__titre').length) {
    let $window     = $(window),
        nav         = $('.main_nav'),
        navHeight   = 200,
        botOfHeader = $('.page-header__titre').position().top + $('.page-header__titre').outerHeight(true);
    if ($window.scrollTop() > botOfHeader - navHeight) { toggle($window, nav, navHeight, botOfHeader) }
    $window.scroll(() => toggle($window, nav, navHeight, botOfHeader));
  }
}

export function responsiveNav() {
  $('#navMain').toggleClass('open');
}


function toggle($window, nav, navHeight, botOfHeader) {
  if ($window.scrollTop() > botOfHeader - navHeight) {
    if (!nav.hasClass('active'))
      nav.addClass('active');
  } else {
    if (nav.hasClass('active'))
      nav.removeClass('active');
  }
}
