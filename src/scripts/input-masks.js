(function () {
  var $maskedInputs = $('input[data-mask], textarea[data-mask]');

  $maskedInputs.each(function () {
    var $element = $(this);
    var mask = $element.data('mask');

    if (mask.length)
      $element.mask(mask);
  });
})();
