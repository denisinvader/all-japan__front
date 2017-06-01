var $toggleFilterBtns = $('.js-toggle-filter');
var $catalogFilter = $('#catalogFilter');
var $toggleCategoriesBtns = $('.js-toggle-categories');
var $catalogCategories = $('#catalogCategories');
var $catalogImageContainer = $('#catalogImage');
var $catalogImage = $catalogImageContainer.find('img');
var $catalogImageZoom = $catalogImageContainer.find('a');
var $catalogThumbnails = $('#catalogThumbnails');

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

function toggleCategories (e) {
  var $this = $(this);

  e.preventDefault();

  $catalogCategories.slideToggle();
  var opened = $catalogCategories.toggleClass('opened').hasClass('opened');

  $toggleCategoriesBtns.each(function () {
    var $this = $(this);
    var isOpener = $this.is('[data-open]');

    if (isOpener && opened)
      $this.slideToggle();
    else if (isOpener && !opened)
      $this.slideToggle();
  });
}

function selectThumbnail (e) {
  var $target = $(e.target);

  if ($target.is('img:not(.active)')) {
    $catalogImageZoom.attr('href', $target.data('large'));
    $catalogImage.attr('src', $target.data('img'));

    $catalogThumbnails.find('img').removeClass('active');
    $target.addClass('active');
  }
}

$toggleFilterBtns.on('click', toggleFilter);
$toggleCategoriesBtns.on('click', toggleCategories);
$catalogThumbnails.on('click', selectThumbnail);
