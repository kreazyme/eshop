jQuery(document).ready(function($) {
  var scrollup = $('.scroll-top');

  // Hide the scroll-to-top button initially
  scrollup.hide();

  /*------------------------------------------------
            Scroll Top
  ------------------------------------------------*/
  scrollup.click(function () {
    $('html, body').animate({
      scrollTop: '0px'
    }, 800);
    return false;
  });

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
      scrollup.fadeIn();
    } else {
      scrollup.fadeOut();
    }
  });
});



