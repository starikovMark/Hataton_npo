const navbar = document.querySelector(".navbar");
const mMenuToggle = document.querySelector(".navbar-menu-toggle");
const menu = document.querySelector(".navbar-mobile");
const modalDialog = document.querySelector(".modal.dialog");
const openMenu = (event) => {
  // Стрелочная функция открывания меню
  menu.classList.add("is-open"); // Добавляем класс к меню
  mMenuToggle.classList.add("close-menu"); // Добавляем класс к кнопке меню
  document.body.style.overflow = "hidden"; // Когда меню открыто, страница не двигается
};
const closeMenu = (event) => {
  // Функция закрытия меню
  menu.classList.remove("is-open"); // Удаляем класс с меню
  mMenuToggle.classList.remove("close-menu"); // Удаляем класс с кнопки меню
  document.body.style.overflow = ""; // Страница двигается
};
mMenuToggle.addEventListener("click", (event) => {
  // Функция при клике на кнопку меню
  event.preventDefault(); // Отключаем переход по ссылке для кнопки меню
  menu.classList.contains("is-open") ? closeMenu() : openMenu(); // если меню содержит класс is-open, выполняется функция закрытия меню, в противном случае меню открывается.
});

const swiper = new Swiper(".swiper", {
  speed: 300,
  slidesPerView: 1,
  spaceBetween: 30,
  // centeredSlides: true,
  autoheight: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    788: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    992: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    1188: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
  },
});
