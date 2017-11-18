/* eslint-disable */
export function toggleNav() {
  let trigger      = $("body").find('[data-target]'),
      classTrigger = $(trigger).attr('data-target');

  $(trigger).click(function (e) {
    e.preventDefault();
    let target = $(this).parents('.' + classTrigger);

    $(target).toggleClass('open');
    $('body').toggleClass('overflow-hidden');
  });
}

export function toggleTextScroll() {
  let $window   = $(window),
      logo_text = $('.navigation_navbar-normal .logo-text-container');

  $window.scroll(function () {
    if ($window.scrollTop() > 50) {
      if (!logo_text.hasClass('hidden'))
        logo_text.addClass('hidden');
    } else {
      if (logo_text.hasClass('hidden'))
        logo_text.removeClass('hidden');
    }
  });
}
