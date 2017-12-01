/* eslint-disable */

export function toggleBg() {
  let $window     = $(window),
      nav         = $('.main_nav'),
      navHeight   = 50,
      botOfHeader = $('.page-header__titre').position().top + $('.page-header__titre').outerHeight(true);
  
  if ($window.scrollTop() > botOfHeader - navHeight) { toogle($window, nav, navHeight, botOfHeader) }
  $window.scroll(() => toogle($window, nav, navHeight, botOfHeader));
}

function toogle($window, nav, navHeight, botOfHeader) {
  if ($window.scrollTop() > botOfHeader - navHeight) {
    if (!nav.hasClass('active'))
      nav.addClass('active');
  } else {
    if (nav.hasClass('active'))
      nav.removeClass('active');
  }
}
