$(function () {
  /*$('.banner').unslider({
   speed: 500,               //  The speed to animate each slide (in milliseconds)
   delay: 3000,              //  The delay between slide animations (in milliseconds)
   complete: function() {},  //  A function that gets called after every slide animation
   keys: true,               //  Enable keyboard (left, right) arrow shortcuts
   dots: true,               //  Display dot navigation
   fluid: false              //  Support responsive design. May break non-responsive designs
   });*/

  //$('.bxslider').bxSlider();

  $('.region-main-slider #block-views-notice-board-block-block-slider .view-content').slick({
    arrows: false,
    dots: true,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 5000
  });
});
