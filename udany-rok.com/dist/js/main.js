"use strict"

window.onload = function () {

  document.documentElement.classList.add("loaded");

const menu = document.querySelector(".header__menu");

document.addEventListener("click", function (e) {

  const elementInteractive = e.target;

  if(elementInteractive.closest(".burger")) {
    menu.classList.add("menu-active")
    document.body.style.overflow = "hidden";
  }
  if (elementInteractive.closest(".header__exit-menu")) {
    menu.classList.remove("menu-active")
    document.body.style.overflow = "";
  }
  if (elementInteractive.closest(".nav__link")) {
    menu.classList.remove("menu-active")
    document.body.style.overflow = "";
  }
})

const cechyBlock = document.querySelector(".cechy");

if(cechyBlock) {
  document.querySelectorAll(".cechy__num").forEach(function(e,i) {
    e.innerHTML = `${i + 1}`;
  })
}

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



}