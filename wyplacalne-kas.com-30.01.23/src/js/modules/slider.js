const sliderGameInit = document.querySelector(".game-slider");

if(sliderGameInit) {
  const swiper = new Swiper('.game-slider', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: 1,
    spaceBetween: 32,
    direction: 'horizontal',
    pagination: {
      el: '.game-slider-pagination',
      clickable: true,
    },
  });
}