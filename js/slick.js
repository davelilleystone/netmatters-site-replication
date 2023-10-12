// start slick slider
// https://kenwheeler.github.io/slick/

$(document).ready(function () {
  $(".slick-container").slick({
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    pauseOnDotsHover: true,
    pauseOnHover: true,
    pauseOnFocus: true,
    slide: ".slick-item",
    slidesToShow: 1,
    slidesToScroll: 1,
  });
});

console.log("slick");
