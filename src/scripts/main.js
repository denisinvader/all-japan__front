(function () {
  var $topNav = $('#topNav');
  var topNavBottom = $topNav.offset().top + 48;
  var lastScroll = 0;

  $(window).on('scroll', function (e) {
    var st = $(this).scrollTop();

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
  })
})();
