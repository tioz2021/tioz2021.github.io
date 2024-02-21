// sliders and change animation
(() => {
  const s2__slider_one = new Swiper(".swiper--one", {
    spaceBetween: 50,
    speed: 600,
    loop: true,

    // If we need pagination
    pagination: {
      el: ".swiper-pagination--one",
    },

    // Navigation arrows
    // navigation: {
    //   nextEl: ".swiper-button-next",
    //   prevEl: ".swiper-button-prev",
    // },
  });

  const s2__slider_two = new Swiper(".swiper--two", {
    spaceBetween: 50,
    speed: 600,
    loop: true,

    // If we need pagination
    pagination: {
      el: ".swiper-pagination--two",
    },
  });

  const s2__slider_three = new Swiper(".swiper--three", {
    spaceBetween: 50,
    speed: 600,
    loop: true,

    // If we need pagination
    pagination: {
      el: ".swiper-pagination--three",
    },
  });

  const s3__slider = new Swiper(".s3__slider", {
    spaceBetween: 24,
    slidesPerView: 3,
    speed: 600,
    loop: true,

    // Navigation arrows
    navigation: {
      nextEl: ".s3__swiper-button-next",
      prevEl: ".s3__swiper-button-prev",
    },
  });

  const s5__slider = new Swiper(".s5__slider", {
    spaceBetween: 24,
    slidesPerView: 3,
    speed: 600,
    loop: true,
    watchSlidesProgress: true,

    // Navigation arrows
    navigation: {
      nextEl: ".s5__swiper-button-next",
      prevEl: ".s5__swiper-button-prev",
    },
  });
})();

// acardion
(() => {
  // Получаем все элементы аккордеона
  const accordionItems = document.querySelectorAll(".accordion__item");

  // Добавляем обработчик события для каждого элемента аккордеона
  accordionItems.forEach((item) => {
    const header = item.querySelector(".accordion__header");
    const content = item.querySelector(".accordion__content");

    header.addEventListener("click", () => {
      // Переключаем класс 'active' для заголовка текущего элемента
      header.classList.toggle("active");

      // Закрываем все другие элементы аккордеона
      accordionItems.forEach((otherItem) => {
        if (otherItem !== item) {
          otherItem
            .querySelector(".accordion__header")
            .classList.remove("active");
          otherItem.querySelector(".accordion__content").style.maxHeight = "0";
        }
      });

      // Устанавливаем максимальную высоту для текущего элемента в rem
      if (header.classList.contains("active")) {
        // Получаем высоту текста внутри .accordion__content и устанавливаем в rem
        const textHeight = content.scrollHeight;
        content.style.maxHeight = `${textHeight}px`;
      } else {
        content.style.maxHeight = "0";
      }
    });
  });
})();
