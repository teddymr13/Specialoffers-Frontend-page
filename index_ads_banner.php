<script type="text/javascript" src="assets/js/bundles/Slick/slick.min.js"></script>
<script type="text/javascript" nonce="<?php echo $nonceScript; ?>">
$(function () {
  $('.slider').slick({
      infinite: true,
      speed: 600,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed:1700,
      fade: true,
      arrows: true,
      //appendArrows: $('.news__arrows'),
      //nextArrow: '<div class="news__arrow news__arrow_dir_right"></div>',
      //prevArrow: '<div class="news__arrow news__arrow_dir_left"></div>',
      dots: false,
    });

    $('.slider').slick('setPosition');
});
</script>