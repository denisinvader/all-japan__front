var topNavBottom = $topNav.offset().top + 48;
var lastScroll = 0;

function toggleMenuOnScroll (e) {
  var st = $(this).scrollTop();

  if (Math.abs(st - lastScroll) < 25)
    return true;

  if ($topNav.hasClass('scrolled')) {
    if (st < topNavBottom - 48) {
      $topNav.removeClass('scrolled');
      $topNav.removeClass('active');
      $body.css({ 'margin-top': '' });
      return true;
    }

    if ($topNav.is(':hover'))
      return true;

    if (st < lastScroll)
      $topNav.addClass('active');
    else
      $topNav.removeClass('active');
  } else {
    if (st > topNavBottom) {
      $topNav.addClass('scrolled');
      $body.css({ 'margin-top': '48px' });
    }
  }

  lastScroll = st;
}

function hideMobileMenuOnResize (e) {
  var width = $window.width();

  if (width > bpTablet) {
    if ($topMenu.hasClass('active'))
      $menuToggle.click();
  }
}

function toggleMobileMenu (e) {
  e.preventDefault();

  if (!$topMenu.hasClass('active')) {
    $topMenu.addClass('active');
    $body.css({ 'overflow-y': 'hidden' });
  } else {
    $topMenu.removeClass('active');
    $body.css({ 'overflow-y': 'auto' });
  }
}

$window.on('scroll', toggleMenuOnScroll);
$window.on('resize', hideMobileMenuOnResize);

$menuToggle.on('click', toggleMobileMenu);
