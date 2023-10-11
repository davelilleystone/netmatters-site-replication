$(document).ready(function () {
  $(".slick-container").slick({
    dots: true,
    autoplay: true,
    pauseOnDotsHover: true,
    pauseOnHover: true,
    pauseOnFocus: true,
    slide: ".slick-item",
    slidesToShow: 1,
    slidesToScroll: 1,
  });
});

console.log("slick");
