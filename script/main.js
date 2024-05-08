// Включаем Swiper
let swiperContainer = document.querySelector(".scroll-section__swiper1");
let swiperContainer2 = document.querySelector(".scroll-section__swiper2");

var swiper = new Swiper(swiperContainer, {
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
var swiper2 = new Swiper(swiperContainer2, {
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

let swiper_def_slider_element = document.querySelector(
  ".slider-section__swiper1"
);
let swiper_def_slider_element2 = document.querySelector(
  ".slider-section__swiper2"
);
var swiper_def_slider = new Swiper(swiper_def_slider_element, {
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  navigation: {
    nextEl: ".slider-section__swiper-button-next",
    prevEl: ".slider-section__swiper-button-prev",
  },
});
var swiper_def_slider2 = new Swiper(swiper_def_slider_element2, {
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  navigation: {
    nextEl: ".slider-section__swiper-button-next",
    prevEl: ".slider-section__swiper-button-prev",
  },
});

// s2 auto scroll
(() => {
  // function scroll_slider_block() {
  //   const scrollingBlock = document.querySelector(".s2.scrolling-block");
  //   const scrollingBlock2 = document.querySelector(".s5.scrolling-block");
    
  //   if(!scrollingBlock || !scrollingBlock2) return;

  //   // const container = document.querySelector(".scroll-container");
  //   // const containerRect = container.getBoundingClientRect();
  //   const scrollTop = window.scrollY || window.pageYOffset;

  //   // console.log(scrollTop);

  //   // s2 scroller 1
  //   if (scrollTop >= 1400 && scrollTop <= 1800) {
  //     if (scrollingBlock.classList.contains("fixed") == false) {
  //       console.log("fixed");
  //       // scrollingBlock.classList.add("fixed");
  //       // scrollingBlock.style.top = "-497px";
  //     }
  //   } else if (scrollTop <= 1400) {
  //     if (scrollingBlock.classList.contains("fixed") == true) {
  //       // scrollingBlock.classList.remove("fixed");
  //       // scrollingBlock.style.top = "910px";
  //     }
  //   } else if (scrollTop >= 1800) {
  //     if (scrollingBlock.classList.contains("fixed") == true) {
  //       // scrollingBlock.classList.remove("fixed");
  //       // scrollingBlock.style.top = "1310px";
  //     }
  //   }
  //   // if (scrollTop >= 1401 && scrollTop <= 1500) swiper.slideTo(0, 1000);
  //   // else if (scrollTop >= 1501 && scrollTop <= 1600) swiper.slideTo(1, 1000);
  //   // else if (scrollTop >= 1601 && scrollTop <= 1700) swiper.slideTo(2, 1000);

  //   // s5 scroller 2
  //   // 5300
  //   if (scrollTop >= 5500 && scrollTop <= 5900) {
  //     if (scrollingBlock2.classList.contains("fixed") == false) {
  //       console.log("fixed");
  //       // scrollingBlock2.classList.add("fixed");
  //       // scrollingBlock2.style.top = "-409px";
  //     }
  //   } else if (scrollTop <= 5500) {
  //     if (scrollingBlock2.classList.contains("fixed") == true) {
  //       // scrollingBlock2.classList.remove("fixed");
  //       // scrollingBlock2.style.top = "5093px";
  //     }
  //   } else if (scrollTop >= 5900) {
  //     if (scrollingBlock2.classList.contains("fixed") == true) {
  //       // scrollingBlock2.classList.remove("fixed");
  //       // scrollingBlock2.style.top = "5493px";
  //     }
  //   }
  //   // if (scrollTop >= 5501 && scrollTop <= 5600) swiper2.slideTo(0, 1000);
  //   // else if (scrollTop >= 5601 && scrollTop <= 5700) swiper2.slideTo(1, 1000);
  //   // else if (scrollTop >= 5701 && scrollTop <= 5800) swiper2.slideTo(2, 1000);
  // }

  // window.addEventListener("scroll", scroll_slider_block);
})();

// 3d s1
(() => {
  const block = document.querySelector(".block");
  const container = document.querySelector(".s1");
  const container_centered = document.querySelector(".center-block");
  let offsetX = 0;
  let offsetY = 0;

  // let prevOffsetX = 0;
  // let prevOffsetY = 0;

  if(container) container.addEventListener("mousemove", moveBlock);
  // container.addEventListener("mouseleave", savePosition);

  function moveBlock(e) {
    const mouseX = e.clientX;
    const mouseY = e.clientY;
    const blockRect = block.getBoundingClientRect();
    const distanceX = mouseX - blockRect.left - blockRect.width / 2;
    const distanceY = mouseY - blockRect.top - blockRect.height / 2;

    offsetX = distanceX * 0.0055;
    offsetY = distanceY * 0.0055;
    block.style.transform = `translate(${offsetX}px, ${offsetY}px)`;

    offsetX_center = distanceX * 0.0095;
    offsetY_center = distanceY * 0.0095;
    container_centered.style.transform = `translate(${offsetX_center}px, ${offsetY_center}px)`;
  }

  // function savePosition() {
  //   prevOffsetX += offsetX;
  //   prevOffsetY += offsetY;
  //   block.style.transform = `translate(${prevOffsetX}px, ${prevOffsetY}px)`;
  // }
})();

// Функция для генерации случайных чисел в заданном диапазоне
(() => {
  function getRandom(min, max) {
    return Math.random() * (max - min) + min;
  }

  // Генерация SVG звезд
  let svg =
    '<svg width="1920" height="916" viewBox="0 0 1920 916" fill="none" xmlns="http://www.w3.org/2000/svg">';

  for (let i = 0; i < 500; i++) {
    let cx = getRandom(0, 1920);
    let cy = getRandom(0, 916);

    svg += `<circle cx="${cx}" cy="${cy}" r="0.5" fill="#8B9FCE">
							 <animate attributeName="cy" dur="${getRandom(6, 12)}s" values="${cy}; ${
      cy - getRandom(50, 150)
    }" repeatCount="indefinite" />
							 <animate attributeName="opacity" dur="${getRandom(
                 6,
                 12
               )}s" values="1; 0" repeatCount="indefinite" />
						</circle>`;
  }

  svg += "</svg>";
  // console.log(svg);
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
            "0px";
        }
      });

      // Устанавливаем максимальную высоту для текущего элемента в rem
      if (header.classList.contains("active")) {
        // Получаем высоту текста внутри .accordion__content и устанавливаем в rem
        const textHeight = content.scrollHeight;
        content.style.maxHeight = `${textHeight + 24}px`;
        content.style.paddingBottom = "24px";
      } else {
        content.style.maxHeight = "0";
        content.style.paddingBottom = "0px";
      }
    });
  });
})();
