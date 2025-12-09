// Slider Js

jQuery(document).ready(function(){
  var owl = jQuery('.slider-upper.owl-carousel');
    owl.owlCarousel({
    margin: 20,
    nav: false,
    autoplay: true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots: true,
    navText: ['<span class="dashicons dashicons-arrow-right-alt"></span>','<span class="dashicons dashicons-arrow-left-alt"></span>'],
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 1,
        nav: false
      },
      1000: {
        items: 1
      }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });
});