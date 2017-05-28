(function () {
  $('a[href*="tel:"]').click(function (e) {
    e.preventDefault();
    
    $.fancybox.open({
      src: '#callbackModal',
      type: 'inline'
    });
});
})();
