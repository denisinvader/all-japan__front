var $toggleFilterBtns = $('.js-toggle-filter');
var $catalogFilter = $('#catalogFilter');

function toggleFilter (e) {
  var $this = $(this);

  e.preventDefault();

  $catalogFilter.slideToggle();
  var opened = $catalogFilter.toggleClass('opened').hasClass('opened');

  $toggleFilterBtns.each(function () {
    var $this = $(this);
    var isOpener = $this.is('[data-open]');

    if (isOpener && opened)
      $this.slideToggle();
    else if (isOpener && !opened)
      $this.slideToggle();
  });
}

$toggleFilterBtns.on('click', toggleFilter);
