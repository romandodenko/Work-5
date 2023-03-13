const mainSliderInit = document.querySelector(".main-slider");

if (mainSliderInit) {
  const mainSlider = new Swiper('.main-slider', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: 1,
    spaceBetween: 15,
    direction: 'horizontal',
    navigation: {
      nextEl: '.main-slider-button-next',
      prevEl: '.main-slider-button-prev',
    },
  });
}
