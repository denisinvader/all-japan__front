(function () {
  var bpTablet = 768;
  var $body = $('body');
  var $topNav = $('#topNav');
  var topNavBottom = $topNav.offset().top + 48;
  var lastScroll = 0;
  var $topMenu = $('#topMenu');
  var $menuToggle = $('#menuToggle');

  $(window).on('scroll', function (e) {
    var st = $(this).scrollTop();

    if (Math.abs(st - lastScroll) < 25)
      return true;

    if ($topNav.hasClass('scrolled')) {
      if ($('body').scrollTop() < topNavBottom - 48) {
        $topNav.removeClass('scrolled');
        $topNav.removeClass('active');
        $('body').css({ 'margin-top': '' });
        return true;
      }

      if (st < lastScroll)
        $topNav.addClass('active');
      else
        $topNav.removeClass('active');
    } else {
      if ($('body').scrollTop() > topNavBottom) {
        $topNav.addClass('scrolled');
        $('body').css({ 'margin-top': '48px' });
      }
    }

    lastScroll = st;
  });

  $(window).on('resize', function (e) {
    var width = $(window).width();

    if (width > bpTablet) {
      if ($topMenu.hasClass('active'))
        $menuToggle.click();
    }
  });

  $menuToggle.on('click', function (e) {
    e.preventDefault();

    if (!$topMenu.hasClass('active')) {
      $topMenu.addClass('active');
      $body.css({ 'overflow-y': 'hidden' });
    } else {
      $topMenu.removeClass('active');
      $body.css({ 'overflow-y': 'auto' });
    }
  });
})();
