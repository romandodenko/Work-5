const aboutSliderInit = document.querySelector(".about-slider");
if (aboutSliderInit) {
  const aboutSlider = new Swiper('.about-slider', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: 3,
    direction: 'horizontal',
    pagination: {
      el: '.about-slider-pagination',
      clickable: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 5,
      },
      500: {
        slidesPerView: 2,
      },
      768: {
        spaceBetween: 10,
      },
      991: {
        slidesPerView: 3,
        spaceBetween: 15,
      }
    },
  });
}