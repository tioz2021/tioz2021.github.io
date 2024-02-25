// sliders and change animation
(() => {
  const s2__slider_one = new Swiper(".swiper--one", {
    spaceBetween: 50,
    simulateTouch: false,

    // ---- phone
    // speed: 800,
    // loop: true,
    // grabCursor: true,
    // simulateTouch: true,

    // If we need pagination
    pagination: {
      el: ".swiper-pagination--one",
      // clickable: true,
    },
    scrollbar: {
      el: ".s2__slider-swiper-scrollbar--one",
    },

    effect: "creative",
    creativeEffect: {
      prev: {
        // shadow: true,
        translate: ["-120%", 0, -500],
        opacity: 0,
      },
      next: {
        // shadow: true,
        translate: ["120%", 0, -500],
        opacity: 1,
      },
    },
  });
  const s2__slider_two = new Swiper(".swiper--two", {
    spaceBetween: 50,
    simulateTouch: false,

    // ---- phone
    // speed: 800,
    // loop: true,
    // grabCursor: true,
    // simulateTouch: true,

    // If we need pagination
    pagination: {
      el: ".swiper-pagination--two",
      // clickable: true,
    },
    scrollbar: {
      el: ".s2__slider-swiper-scrollbar--two",
    },

    effect: "creative",
    creativeEffect: {
      prev: {
        // shadow: true,
        translate: ["-120%", 0, -500],
        opacity: 0,
      },
      next: {
        // shadow: true,
        translate: ["120%", 0, -500],
        opacity: 1,
      },
    },
  });

  const s2__slider_three = new Swiper(".swiper--three", {
    spaceBetween: 50,
    simulateTouch: false,

    // ---- phone
    // speed: 800,
    // loop: true,
    // grabCursor: true,
    // simulateTouch: true,

    // If we need pagination
    pagination: {
      el: ".swiper-pagination--three",
      clickable: true,
    },
    scrollbar: {
      el: ".s2__slider-swiper-scrollbar--three",
    },

    effect: "creative",
    creativeEffect: {
      prev: {
        // shadow: true,
        translate: ["-120%", 0, -500],
        opacity: 0,
      },
      next: {
        // shadow: true,
        translate: ["120%", 0, -500],
        opacity: 1,
      },
    },
  });

  const switchSlide = (event, slider, list) => {
    const listArray = Array.from(list);

    const index = listArray.indexOf(event.currentTarget);

    list.forEach((e) => e.classList.remove("s2__slider-list-item--active"));
    event.target.classList.add("s2__slider-list-item--active");

    slider.slideTo(index, 1000);
  };

  if (s2__slider_one && s2__slider_two && s2__slider_three) {
    listOne = document.querySelectorAll(".s2__slider-list--one li");

    listOne.forEach((e) =>
      e.addEventListener("click", (event) =>
        switchSlide(event, s2__slider_one, listOne)
      )
    );

    listTwo = document.querySelectorAll(".s2__slider-list--two li");

    listTwo.forEach((e) =>
      e.addEventListener("click", (event) =>
        switchSlide(event, s2__slider_two, listTwo)
      )
    );

    listThree = document.querySelectorAll(".s2__slider-list--three li");

    listThree.forEach((e) =>
      e.addEventListener("click", (event) =>
        switchSlide(event, s2__slider_three, listThree)
      )
    );
  }

  const s3__slider = new Swiper(".s3__slider", {
    spaceBetween: 24,
    slidesPerView: 2,
    speed: 600,
    loop: true,
    grabCursor: true,

    breakpoints: {
      1600: {
        slidesPerView: 3,
      },
    },

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
    grabCursor: true,

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
          otherItem.querySelector(".accordion__content").style.paddingBottom =
            "0rem";
        }
      });

      // Устанавливаем максимальную высоту для текущего элемента в rem
      if (header.classList.contains("active")) {
        // Получаем высоту текста внутри .accordion__content и устанавливаем в rem
        const textHeight = content.scrollHeight;
        content.style.maxHeight = `${textHeight + 24}rem`;
        content.style.paddingBottom = "24rem";
      } else {
        content.style.maxHeight = "0";
        content.style.paddingBottom = "0rem";
      }
    });
  });
})();

// popup
(() => {
  document.addEventListener("DOMContentLoaded", function () {
    var iframe = document.querySelector("iframe");
    if (iframe) iframeSrc = iframe.src;

    const openBtn = document.getElementById("openBtn");
    if (!openBtn) {
      return false;
    }
    const popup = document.getElementById("popup");
    const popupContent = document.querySelector(".popup-content");
    const closeBtn = document.getElementById("closeBtn");

    openBtn.addEventListener("click", function (evt) {
      evt.preventDefault();
      popup.classList.add("open");
      popupContent.classList.add("open");
      iframe.src = iframeSrc;
    });

    closeBtn.addEventListener("click", function () {
      popup.classList.remove("open");
      popupContent.classList.remove("open");
      iframe.src = "";
    });

    document.addEventListener("click", function (event) {
      // Закрываем popup, если клик произошел вне его области
      if (
        !popupContent.contains(event.target) &&
        !openBtn.contains(event.target)
      ) {
        popup.classList.remove("open");
        popupContent.classList.remove("open");
        iframe.src = "";
      }
    });
  });
})();

// auto change height on textarea
(() => {
  const textarea = document.querySelector("textarea");
  if (textarea) textarea.addEventListener("input", autoResize);
  function autoResize() {
    const textarea = this;
    // var charLimitMessage = document.getElementById("charLimitMessage");
    var maxLength = textarea.getAttribute("maxlength");
    var currentLength = textarea.value.length;

    if (currentLength > maxLength) {
      // charLimitMessage.textContent = "Превышен лимит символов (максимум 5000).";
      textarea.value = textarea.value.substring(0, maxLength);
      textarea.style.height = "auto";
      textarea.style.height =
        textarea.scrollHeight +
        textarea.offsetHeight -
        textarea.clientHeight +
        "rem";
    } else {
      // charLimitMessage.textContent = "";
      textarea.style.height = "auto";
      textarea.style.height =
        textarea.scrollHeight +
        textarea.offsetHeight -
        textarea.clientHeight +
        "rem";
    }
  }
})();

// s2 title animation
() => {};

const draw = (block) => {
  if (!block) return;

  const blockRect = block.getBoundingClientRect();
  const blockTop = blockRect.top;
  const blockHeight = block.clientHeight;
  const viewportHeight = window.innerHeight;
  const scrollTop = Math.max(
    0,
    viewportHeight - blockTop - viewportHeight / 1.15
  );
  const scrollHeight = Math.max(0, blockHeight - viewportHeight);
  console.log(scrollHeight);

  let scrollPercentage = Math.min(1, scrollTop / scrollHeight);
  // if (scrollPercentage > 0.98) {
  //   scrollPercentage = 0.98;
  // }

  const body_text = block.parentNode.querySelector(".key-features__wrapper");
  const conatiner = block.parentNode;
  block.style.setProperty("--scroll-percentage", scrollPercentage);
  body_text.style.setProperty("--scroll-percentage", scrollPercentage);
  conatiner.style.setProperty("--scroll-percentage", scrollPercentage);
};

const m_bodies = [
  document.querySelector(".key-features__badge1"),

  document.querySelector(".key-features__badge2"),
  document.querySelector(".key-features__badge3"),
];

m_bodies.forEach((body) => {
  draw(body);
  document.addEventListener("scroll", () => draw(body));
  window.addEventListener("resize", () => draw(body));
});
