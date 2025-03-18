$('.innovative-slider').slick({
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 2,
  slidesToScroll: 1,
  dots: false,
  infinite: true,
  speed: 3000,
  arrows: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        slidesToShow: 1,

      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        slidesToShow: 1,


      }
    }
  ]
});
$('.production-slider').slick({
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 4,
  slidesToScroll: 1,
  dots: false,
  infinite: true,
  speed: 3000,
  arrows: true,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        arrows: false,
        slidesToShow: 3,

      }
    },
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        slidesToShow: 1,

      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        slidesToShow: 1,


      }
    }
  ]
});