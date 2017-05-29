(function () {
  function openCallbackOnDesktop (e) {
    var width = $window.width();

    if (width > bpTablet) {
      e.preventDefault();

      $.fancybox.open({
        src: '#callbackModal',
        type: 'inline'
      });
    }
  }

  $('a[href^="tel:"]').on('click', openCallbackOnDesktop);
})();
