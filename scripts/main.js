// init animation
// new WOW().init();

// sliders
(() => {
  const swiper1 = new Swiper(".swiper1", {
    // Optional parameters
    spaceBetween: 30,
    loop: true,

    // If we need pagination
    pagination: {
      el: ".swiper-pagination1",
    },

    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next1",
      prevEl: ".swiper-button-prev1",
    },
  });

  // Функция для проверки ширины экрана
  function checkScreenWidth() {
    // Получаем текущую ширину экрана
    var screenWidth =
      window.innerWidth ||
      document.documentElement.clientWidth ||
      document.body.clientWidth;

    // phone
    if (screenWidth <= 600) {
      // Ваш код для выполнения действий при ширине экрана <= 360px
      console.log("Ширина экрана меньше или равна 360px!");
      const swiper2 = new Swiper(".swiper2", {
        // Optional parameters
        spaceBetween: 30,
        loop: true,

        // If we need pagination
        pagination: {
          el: ".swiper-pagination2",
        },

        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next2",
          prevEl: ".swiper-button-prev2",
        },

        // Responsive breakpoints
        breakpoints: {
          // when window width is >= 360px
          360: {
            noSwiping: true,
          },
        },
      });
      if (document.querySelector(".slider-navigation2"))
        document
          .querySelector(".slider-navigation2")
          .classList.remove("disabled");
    }
    // tablet
    if (screenWidth <= 1000) {
      const swiper3 = new Swiper(".swiper3", {
        // Optional parameters
        speed: 300,
        spaceBetween: 30,
        centeredSlides: true,
        // watchSlidesProgress: true,
        // loop: true,

        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next3",
          prevEl: ".swiper-button-prev3",
        },

        // Responsive breakpoints
        breakpoints: {
          // when window width is >= 360px
          360: {
            // noSwiping: true,
          },
        },
      });
      swiper3.allowTouchMove = false;
      if (document.querySelector(".slider-navigation3")) {
        document
          .querySelector(".slider-navigation3")
          .classList.remove("disabled");
        const sliders = document.querySelectorAll(".p-vac-s3__item");
        const sliders_body = document.querySelector(
          ".p-vac-s3__item-title-wrp--tab"
        );
        const sliders_title = document.querySelectorAll(
          ".p-vac-s3__item-title-swiper .p-vac-s3__item-title"
        );

        const slider__bts = document.querySelectorAll(
          ".slider-navigation3 .swiper-button"
        );

        const change = (e) => {
          if (e.button === 0) {
            first_str = "translateX(6%)";
            two_str = "translateX(-14%)";
            three_str = "translateX(-34%)";

            if (screenWidth <= 600) {
              // first_str = "translateX(%)";
              two_str = "translateX(-6%)";
              three_str = "translateX(-19%)";
            }
            console.log("Click event");
            setTimeout((e) => {
              sliders_title.forEach((e) => e.classList.remove("active"));
              if (sliders[0].classList.contains("swiper-slide-active")) {
                sliders_body.style.transform = first_str;
                sliders_title[1].classList.add("active");
              } else if (sliders[1].classList.contains("swiper-slide-active")) {
                sliders_body.style.transform = two_str;
                sliders_title[2].classList.add("active");
              } else {
                sliders_body.style.transform = three_str;
                sliders_title[3].classList.add("active");
              }
            }, 300);
          }
        };

        slider__bts.forEach((e) => {
          e.addEventListener("click", change);
        });
      }
    }

    // web
    if (screenWidth >= 1000) {
      // Ваш код для выполнения действий при ширине экрана больше 360px
      console.log("Ширина экрана больше 360px.");
      if (document.querySelector(".slider-navigation2"))
        document.querySelector(".slider-navigation2").classList.add("disabled");
      if (document.querySelector(".slider-navigation3"))
        document.querySelector(".slider-navigation3").classList.add("disabled");
    }
  }

  // Вызываем функцию при загрузке страницы и изменении размера окна
  window.onload = window.onresize = checkScreenWidth;
})();

// popup
(() => {
  document.addEventListener("DOMContentLoaded", function () {
    const openBtn = document.getElementById("openBtn");
    if (!openBtn) {
      return false;
    }
    const popup = document.getElementById("popup");
    const popupContent = document.querySelector(".popup-content");
    const closeBtn = document.getElementById("closeBtn");

    openBtn.addEventListener("click", function () {
      popup.classList.add("open");
      popupContent.classList.add("open");
    });

    closeBtn.addEventListener("click", function () {
      popup.classList.remove("open");
      popupContent.classList.remove("open");
    });

    document.addEventListener("click", function (event) {
      // Закрываем popup, если клик произошел вне его области
      if (
        !popupContent.contains(event.target) &&
        !openBtn.contains(event.target)
      ) {
        popup.classList.remove("open");
        popupContent.classList.remove("open");
      }
    });
  });
})();

// s4 changer
(() => {
  const body = document.querySelectorAll(".s4__end .swiper-slide");
  body.forEach((e, index) => {
    const itemHeader = e.querySelectorAll(".s4__item-btn");
    const itemBody = e.querySelectorAll(".s4__price-list");
    itemHeader.forEach((btn, btnIndex) =>
      btn.addEventListener("click", () => {
        changeActiveItem(btn, btnIndex), changeActiveBody(itemBody, btnIndex);
      })
    );
  });

  function changeActiveItem(btn, btnIndex) {
    const containerItem = btn.parentNode.parentNode;
    const otherItems = containerItem.querySelectorAll(
      ".s4__item-btn-list-item .s4__item-btn"
    );
    otherItems.forEach((e) => e.classList.remove("s4__item-btn--active"));
    btn.classList.add("s4__item-btn--active");
    // changeActiveBody(btnIndex);
  }

  function changeActiveBody(body, index) {
    console.log(body, " : ", index);
    body.forEach((e) => e.classList.remove("s4__price-list--active"));
    body[index].classList.add("s4__price-list--active");
  }
})();

// observer stroke lottie animation
(() => {
  function createIntersectionObserver(element) {
    return new IntersectionObserver((entries, observer) => {
      entries.forEach(
        (entry) => {
          if (entry.isIntersecting) {
            // Если элемент видим, добавляем класс "visible"
            element.classList.add("visible");
            // Запускаем вашу анимацию
            element.play();
            // Отключаем наблюдение, если больше не нужно
            observer.disconnect();
          }
        },
        {
          rootMargin: "350px", // Задержка в 350 пикселей
        }
      );
    });
  }
  const animations = [
    "anim_s1",
    "anim_s2",
    "anim_s3",
    "anim_s4",
    "anim_s5",
    "anim_s6",
  ];

  const observers = [];

  animations.forEach((animationId) => {
    const element = document.querySelector(`#${animationId}`);
    if (element) {
      const observer = createIntersectionObserver(element);
      observer.observe(element);
      observers.push(observer);
    }
  });
})();

// document.addEventListener("DOMContentLoaded", function () {
//   const accordionItems = document.querySelectorAll(".accordion-item");

//   accordionItems.forEach(function (item) {
//     const header = item.querySelector(".accordion-header");
//     const content = item.querySelector(".accordion-content");

//     header.addEventListener("click", function () {
//       content.style.marginBottom =
//         content.style.marginBottom === "0px"
//           ? `-${content.scrollHeight}px`
//           : "0px";

//       // Закрывать другие элементы аккордеона при открытии текущего
//       accordionItems.forEach(function (otherItem) {
//         if (otherItem !== item) {
//           otherItem.querySelector(
//             ".accordion-content"
//           ).style.marginBottom = `-${content.scrollHeight}px`;
//         }
//       });
//     });
//   });
// });

// acardion
(() => {
  // Получаем все элементы аккордеона
  const accordionItems = document.querySelectorAll(".accordion-item");

  // Добавляем обработчик события для каждого элемента аккордеона
  accordionItems.forEach((item) => {
    const header = item.querySelector(".accordion-header");
    const content = item.querySelector(".accordion-content");

    header.addEventListener("click", () => {
      // Переключаем класс 'active' для заголовка текущего элемента
      header.classList.toggle("active");

      // Закрываем все другие элементы аккордеона
      accordionItems.forEach((otherItem) => {
        if (otherItem !== item) {
          otherItem
            .querySelector(".accordion-header")
            .classList.remove("active");
          otherItem.querySelector(".accordion-content").style.maxHeight = "0";
        }
      });

      // Устанавливаем максимальную высоту для текущего элемента в rem
      if (header.classList.contains("active")) {
        // Получаем высоту текста внутри .accordion-content и устанавливаем в rem
        const textHeight = content.scrollHeight;
        content.style.maxHeight = `${textHeight}px`;
      } else {
        content.style.maxHeight = "0";
      }
    });
  });
})();
