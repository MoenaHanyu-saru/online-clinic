

$(function () {
  if (window.matchMedia("(max-width: 768px)").matches) {
    $('.flow-items').slick({
      dots: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 5000,
      centerMode: false,
      centerPadding: '30%',
      // infinite: false,
    });
  } else {
    $('.flow-items').slick({
      dots: true,
      slidesToShow: 1.5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 5000,
      centerMode: true,
      centerPadding: '30%',
      // infinite: false,
    });
  }
})



