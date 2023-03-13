"use strict"

window.onload = function () {

  function setCookie(name, value, days) {
  let expires = "";
  if (days) {
    let date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
  let matches = document.cookie.match(
    new RegExp(
      "(?:^|; )" +
        name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") +
        "=([^;]*)"
    )
  );
  return matches ? decodeURIComponent(matches[1]) : undefined;
}

function checkCookies() {
  let cookieNote = document.querySelector(".popup-active"); // элемент
  let cookieBtnAccept = cookieNote.querySelector(".popup__button"); // кнопка

  // Если куки cookies_policy нет или она просрочена, то показываем уведомление
  if (!getCookie("cookies_policy")) {
    cookieNote.classList.add("show");
  }

  // При клике на кнопку устанавливаем куку cookies_policy на один год
  cookieBtnAccept.addEventListener("click", function () {
    setCookie("cookies_policy", "true", 365);
    cookieNote.classList.remove("show");
  });
}

checkCookies();

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
  if (elementInteractive.closest(".popup__button")) {
    elementInteractive.closest(".popup").classList.remove("popup-active")
  }
})




}