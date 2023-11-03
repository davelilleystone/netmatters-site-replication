// start slick slider
// https://kenwheeler.github.io/slick/

// $(document).ready(function () {
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

$(".partners").slick({
  variableWidth: true,
  autoplay: true,
  pauseOnHover: false,
  dots: false,
  arrows: false,
  infinite: true,
  autoplaySpeed: 4000,
  cssEase: "ease-in-out",
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
});

$(".clients").slick({
  variableWidth: true,
  autoplay: true,
  pauseOnHover: true,
  dots: false,
  arrows: false,
  infinite: true,
  autoplaySpeed: 4000,
  cssEase: "ease-in-out",
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
});
// });
