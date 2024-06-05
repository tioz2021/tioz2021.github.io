// sliders
(() => {
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
      el: ".slider-section__swiper1 .swiper-pagination",
      clickable: true,
    },

    navigation: {
      nextEl: ".slider-section__swiper1 .slider-section__swiper-button-next",
      prevEl: ".slider-section__swiper1 .slider-section__swiper-button-prev",
    },
  });
  var swiper_def_slider2 = new Swiper(swiper_def_slider_element2, {
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },

    pagination: {
      el: ".slider-section__swiper2 .swiper-pagination",
      clickable: true,
    },

    navigation: {
      nextEl: ".slider-section__swiper2 .slider-section__swiper-button-next",
      prevEl: ".slider-section__swiper2 .slider-section__swiper-button-prev",
    },
  });

  function initializeSwiper() {
    if (window.innerWidth < 1200) {
      var swiper = new Swiper(".s3_tab-swiper", {
        initialSlide: 1, // This will make the second slide active
        pagination: {
          el: ".s3 .scroll-section__slider-navigation",
          clickable: true,
        },
        navigation: {
          nextEl: ".s3 .slider-section__swiper-button-next",
          prevEl: ".s3 .slider-section__swiper-button-prev",
        },

        slidesPerView: 1,
        spaceBetween: 10,
      });
    }
  }

  // Инициализация при загрузке страницы
  initializeSwiper();

  // Инициализация при изменении размера окна
  window.addEventListener("resize", function () {
    initializeSwiper();
  });

  function scroll_slider_block() {
    const scrollingBlock = document.querySelector(".s2.scrolling-block");
    const scrollingBlock2 = document.querySelector(".s5.scrolling-block");
    if(!scrollingBlock || !scrollingBlock2) return;
    // const container = document.querySelector(".scroll-container");
    // const containerRect = container.getBoundingClientRect();
    const scrollTop = window.scrollY || window.pageYOffset;
    console.log(scrollTop);
    // s2 scroller 1
    if (scrollTop >= 1700 && scrollTop <= 2100) {
      if (scrollingBlock.classList.contains("fixed") == false) {
        // console.log("fixed");
        // scrollingBlock.classList.add("fixed");
        // scrollingBlock.style.top = "unset";
        // scrollingBlock.style.bottom = "0px"
      }
    } else if (scrollTop <= 1700) {
      if (scrollingBlock.classList.contains("fixed") == true) {
        // scrollingBlock.classList.remove("fixed");
        // scrollingBlock.style.top = "910px";
        // scrollingBlock.style.bottom = "unset"
      }
    } else if (scrollTop >= 2100) {
      if (scrollingBlock.classList.contains("fixed") == true) {
        // scrollingBlock.classList.remove("fixed");
        // scrollingBlock.style.top = "1310px";
      }
    }
    // if (scrollTop >= 1401 && scrollTop <= 1500) swiper.slideTo(0, 1000);
    // else if (scrollTop >= 1501 && scrollTop <= 1600) swiper.slideTo(1, 1000);
    // else if (scrollTop >= 1601 && scrollTop <= 1700) swiper.slideTo(2, 1000);

    // s5 scroller 2
    // 5300
    // if (scrollTop >= 5500 && scrollTop <= 5900) {
    //   if (scrollingBlock2.classList.contains("fixed") == false) {
    //     console.log("fixed");
    //     scrollingBlock2.classList.add("fixed");
    //     scrollingBlock2.style.top = "-409px";
    //   }
    // } else if (scrollTop <= 5500) {
    //   if (scrollingBlock2.classList.contains("fixed") == true) {
    //     scrollingBlock2.classList.remove("fixed");
    //     scrollingBlock2.style.top = "5093px";
    //   }
    // } else if (scrollTop >= 5900) {
    //   if (scrollingBlock2.classList.contains("fixed") == true) {
    //     scrollingBlock2.classList.remove("fixed");
    //     scrollingBlock2.style.top = "5493px";
    //   }
    // }
    // if (scrollTop >= 5501 && scrollTop <= 5600) swiper2.slideTo(0, 1000);
    // else if (scrollTop >= 5601 && scrollTop <= 5700) swiper2.slideTo(1, 1000);
    // else if (scrollTop >= 5701 && scrollTop <= 5800) swiper2.slideTo(2, 1000);
  }
  window.addEventListener("scroll", scroll_slider_block);
})();

// 3d s1
(() => {
  if (window.innerWidth > 1200) {
    setTimeout(() => {
      const block = document.querySelector(".block");
      const container = document.querySelector(".s1");
      const container_centered = document.querySelector(".center-block");
      let offsetX = 0;
      let offsetY = 0;

      if (container) container.addEventListener("mousemove", moveBlock);

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
    }, 5000);
  }
})();

// 3d s13
(() => {
  if (window.innerWidth > 1200) {
    const wrapper1 = document.querySelector(".s7");
    const wrapper2 = document.querySelector(".s13");
    function globalMove(wrapper) {
      const block = wrapper.querySelector(".window");
      const container = wrapper;
      const container_blocks = wrapper.querySelectorAll(".s7__item");
      const container_centered = wrapper.querySelector(".s7__item-main");
      let offsetX = 0;
      let offsetY = 0;
  
      if (container) container.addEventListener("mousemove", moveBlock);
      function moveBlock(e) {
        const mouseX = e.clientX;
        const mouseY = e.clientY;
        const blockRect = block.getBoundingClientRect();
        const distanceX = mouseX - blockRect.left - blockRect.width / 2;
        const distanceY = mouseY - blockRect.top - blockRect.height / 2;
  
        offsetX = distanceX * -0.0035;
        offsetY = distanceY * -0.0035;
        block.style.transform = `translate(${offsetX}px, ${offsetY}px)`;
  
        offsetX_blocks = distanceX * 0.0025;
        offsetY_blocks = distanceY * 0.0025;
        container_blocks.forEach((e) => {
          e.style.transform = `translate(${offsetX_blocks}px, ${offsetY_blocks}px)`;
        });
  
        offsetX_center = distanceX * 0.0115;
        offsetY_center = distanceY * 0.0115;
        container_centered.style.transform = `translate(${offsetX_center}px, ${offsetY_center}px)`;
      }
    }
    if (wrapper1) globalMove(wrapper1);
    if (wrapper2) globalMove(wrapper2);
  }
})();

// line-progress
(() => {
  if (window.innerWidth > 1200) {
    document
    .querySelectorAll(".list-progress__item-wrp")
    .forEach((container) => {
      const block = container.querySelector(".list-progress__item-icon");
      let offsetX = 0;
      let offsetY = 0;

      // Добавляем transition при загрузке страницы
      block.style.transition = "transform 0.3s ease";

      if (container) container.addEventListener("mousemove", moveBlock);
      container.addEventListener("mouseleave", returnToOriginalPosition);

      function moveBlock(e) {
        const mouseX = e.clientX;
        const mouseY = e.clientY;
        const blockRect = block.getBoundingClientRect();
        const distanceX = mouseX - blockRect.left - blockRect.width / 2;
        const distanceY = mouseY - blockRect.top - blockRect.height / 2;

        offsetX = distanceX * 0.3511;
        offsetY = distanceY * 0.3511;

        requestAnimationFrame(() => {
          block.style.transform = `translate(${offsetX}px, ${offsetY}px)`;
        });
      }

      function returnToOriginalPosition() {
        block.style.transform = `translate(0, 0)`;
      }
    });
  }
      
    // // Инициализация при изменении размера окна
    // window.addEventListener("resize", function () {
    //   initializeSwiper();
    // });
})();

// svg blur ( svg-blur-hover-wrp, svg-blur, blur )
(() => {
  document.querySelectorAll(".svg-blur-hover-wrp").forEach((wrapper) => {
    const blurElement = wrapper.querySelectorAll(".blur");
    let timeoutId;

    wrapper.addEventListener("mouseenter", function () {
      clearTimeout(timeoutId);
      animateOpacity();
    });

    wrapper.addEventListener("mouseleave", function () {
      clearTimeout(timeoutId);
      blurElement.forEach((e) => (e.style.opacity = "0.3"));
      // blurElement.style.opacity = "0.1";
    });

    function animateOpacity() {
      blurElement.forEach((e) => (e.style.opacity = "0.5"));
      // blurElement.style.opacity = "0.1";
      timeoutId = setTimeout(() => {
        blurElement.forEach((e) => (e.style.opacity = "0.3"));
        timeoutId = setTimeout(animateOpacity, 1000);
      }, 1000);
    }
  });
})();

// Функция для генерации случайных чисел в заданном диапазоне
// (() => {
//   function getRandom(min, max) {
//     return Math.random() * (max - min) + min;
//   }

//   // Генерация SVG звезд
//   let svg =
//     '<svg width="1920" height="916" viewBox="0 0 1920 916" fill="none" xmlns="http://www.w3.org/2000/svg">';

//   for (let i = 0; i < 500; i++) {
//     let cx = getRandom(0, 1920);
//     let cy = getRandom(0, 916);

//     svg += `<circle cx="${cx}" cy="${cy}" r="0.5" fill="#8B9FCE">
// 							 <animate attributeName="cy" dur="${getRandom(6, 12)}s" values="${cy}; ${
//       cy - getRandom(50, 150)
//     }" repeatCount="indefinite" />
// 							 <animate attributeName="opacity" dur="${getRandom(
//                  6,
//                  12
//                )}s" values="1; 0" repeatCount="indefinite" />
// 						</circle>`;
//   }

//   svg += "</svg>";
//   // console.log(svg);
// })();

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

// animation
(() => {
  // Создаем новый экземпляр Intersection Observer
  const observer = new IntersectionObserver(
    (entries) => {
      // Перебираем все записи (entries)
      entries.forEach((entry) => {
        // console.log(entry.target);
        // Если блок стал видимым и находится в зоне видимости больше 1 секунды
        if (
          entry.isIntersecting &&
          entry.intersectionRatio >= 0.1 &&
          entry.time >= 100
        ) {
          let text_elm = entry.target.querySelector(".small-text");
          // Запускаем анимацию или выполняем нужные действия
          // entry.target.classList.add("anim");

          if (entry.target.classList.contains("s1__pre-title") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(".s1 lottie-player");
              elm[0].play();
              elm[1].play();
            }, 300);
          }
          if (entry.target.classList.contains("s2__pre-title") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(".s2 lottie-player");
              elm[0].play();
              elm[1].play();
            }, 300);
          }
          if (entry.target.classList.contains("s3__pre-title") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(".s3 lottie-player");
              elm[0].play();
              elm[1].play();
            }, 300);
          }
          if (entry.target.classList.contains("s4__pre-title") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(".s4 lottie-player");
              elm[0].play();
              elm[1].play();
            }, 300);
          }
          if (entry.target.classList.contains("s5__pre-title") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(".s5 lottie-player");
              elm[0].play();
              elm[1].play();
            }, 300);
          }
          if (entry.target.classList.contains("s6__pre-title--one") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(
                ".s6__pre-title--one lottie-player"
              );
              elm[0].play();
              elm[1].play();
            }, 300);
          }
          if (entry.target.classList.contains("s7__pre-title--one") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(
                ".s7__pre-title--one lottie-player"
              );
              elm[0].play();
              elm[1].play();
            }, 300);
          }
          if (entry.target.classList.contains("s7__pre-title--two") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(
                ".s7__pre-title--two lottie-player"
              );
              elm[0].play();
              elm[1].play();
            }, 300);
          }
          if (entry.target.classList.contains("s8__pre-title") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(".s8 lottie-player");
              elm[0].play();
              elm[1].play();
            }, 300);
          }
          if (entry.target.classList.contains("s9__pre-title") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(".s9 lottie-player");
              elm[0].play();
              elm[1].play();
            }, 300);
          }
          if (entry.target.classList.contains("s6__pre-title--two") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(
                ".s6__pre-title--two lottie-player"
              );
              elm[0].play();
              elm[1].play();
            }, 300);
          }
          if (entry.target.classList.contains("s11__pre-title") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(".s11 lottie-player");
              elm[0].play();
              elm[1].play();
            }, 300);
          }
          if (entry.target.classList.contains("s12__pre-title") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(".s12 lottie-player");
              elm[0].play();
              elm[1].play();
            }, 300);
          }

          // page about
          if (entry.target.classList.contains("pas1__pre-title") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(
                ".pas1__pre-title lottie-player"
              );
              elm[0].play();
              elm[1].play();
            }, 300);
          }
          if (entry.target.classList.contains("other-page-s7-title") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(
                ".other-page-s7-title lottie-player"
              );
              elm[0].play();
              elm[1].play();
            }, 300);
          }

          // page how to works
          if (entry.target.classList.contains("phwks1__pre-title") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(
                ".phwks1__pre-title lottie-player"
              );
              elm[0].play();
              elm[1].play();
            }, 300);
          }

          // page question answer
          if (entry.target.classList.contains("qas1__pre-title") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(
                ".qas1__pre-title lottie-player"
              );
              elm[0].play();
              elm[1].play();
            }, 300);
          }

          // page how to work
          if (entry.target.classList.contains("phws1__pre-title") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(
                ".phws1__pre-title lottie-player"
              );
              elm[0].play();
              elm[1].play();
            }, 300);
          }

          // page blog
          if (entry.target.classList.contains("pb1__pre-title") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(
                ".pb1__pre-title lottie-player"
              );
              elm[0].play();
              elm[1].play();
            }, 300);
          }

          // page post
          if (entry.target.classList.contains("pps1__pre-title--one") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(
                ".pps1__pre-title--one lottie-player"
              );
              elm[0].play();
              elm[1].play();
            }, 300);
          }
          if (
            entry.target.classList.contains("pps1__pre-title--last") == true
          ) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(
                ".pps1__pre-title--last lottie-player"
              );
              elm[0].play();
              elm[1].play();
            }, 300);
          }

          // 404
          if (entry.target.classList.contains("pre-title-404") == true) {
            text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelectorAll(
                ".pre-title-404 lottie-player"
              );
              elm[0].play();
              elm[1].play();
            }, 300);
          }

          // После того, как анимация выполнена, можно отключить наблюдение, если оно больше не нужно
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 1, delay: 100 }
  ); // Устанавливаем порог пересечения 100% и задержку 1 секунда

  // Список селекторов для анимации
  const selectors = [
    ".s1__pre-title",
    ".s2__pre-title",
    ".s3__pre-title",
    ".s4__pre-title",
    ".s5__pre-title",
    ".s6__pre-title--one",
    ".s7__pre-title--one",
    ".s7__pre-title--two",
    ".s8__pre-title",
    ".s9__pre-title",
    ".s6__pre-title--two",
    ".s11__pre-title",
    ".s12__pre-title",

    // page about
    ".pas1__pre-title",
    ".other-page-s7-title",

    // page how to works
    ".phwks1__pre-title",

    // page question answer
    ".qas1__pre-title",

    // page how to work
    ".phws1__pre-title",

    // page blog
    ".pb1__pre-title",

    // page post
    ".pps1__pre-title--one",
    ".pps1__pre-title--last",

    // 404
    ".pre-title-404",
  ];

  // Проходимся по списку селекторов
  selectors.forEach((selector) => {
    // Находим блок для текущего селектора
    const blockToAnimate = document.querySelector(selector);
    // Начинаем наблюдение за блоком
    if (!blockToAnimate) return;
    observer.observe(blockToAnimate);
  });
})();

// Number animation
(() => {
  // Функция для анимации чисел во всех элементах с классом "animatedNumber"
  function animateNumbers() {
    // Получаем все элементы с классом "animatedNumber"
    var elements = document.querySelectorAll(".animatedNumber");
    var element2 = document.querySelector(".animatedNumberTwo");
    var element3 = document.querySelector(".animatedNumberFloat");
    element2_number = 8;

    // if (!elements || !element2 || !element3) return;

    // 4.9 - 5.0
    function updateNumber3(element) {
      if (element.textContent == 4.9) element.textContent = "5.0";
      else {
        element.textContent = 4.9;
      }

      var randomInterval = Math.floor(Math.random() * 1000) + 1000;
      setTimeout(function () {
        updateNumber3(element);
      }, randomInterval);
    }
    updateNumber3(element3);

    // 8 - 10
    function updateNumber2(element) {
      element.textContent = element2_number;
      element2_number++;
      if (element2_number == 11) element2_number = 8;

      var randomInterval = Math.floor(Math.random() * 500) + 500;
      setTimeout(function () {
        updateNumber2(element);
      }, randomInterval);
    }
    updateNumber2(element2);

    // Функция для обновления числа в указанном элементе
    function updateNumber(element) {
      // Генерируем случайное число от 0 до 9
      var randomNumber = Math.floor(Math.random() * 10);
      // Обновляем текстовое содержимое элемента
      element.textContent = randomNumber;

      // Генерируем случайный интервал для следующего обновления (от 1000 до 2000 миллисекунд)
      var randomInterval = Math.floor(Math.random() * 500) + 500;

      // Запускаем обновление числа через случайный интервал
      setTimeout(function () {
        updateNumber(element);
      }, randomInterval);
    }

    // Запускаем обновление числа для каждого элемента
    for (var i = 0; i < elements.length; i++) {
      updateNumber(elements[i]);
    }
  }

  // Запускаем анимацию после загрузки страницы
  window.onload = animateNumbers;
})();

// typing profit
(() => {
  document.addEventListener("DOMContentLoaded", function () {
    var textWrp = document.querySelector(".typingEffect");
    if (!textWrp) return;
    var text = textWrp.getElementsByTagName("span");
    var index = 0;
    var typingSpeed = 200; // Скорость печати (в миллисекундах)
    var eraseSpeed = 100; // Скорость стирания (в миллисекундах)
    var pauseBetweenCycles = 1000; // Пауза между циклами (в миллисекундах)

    function type() {
      if (index < text.length) {
        text[index].style.display = "inline";
        index++;
        setTimeout(type, typingSpeed); // Задержка перед отображением следующей буквы
      } else {
        setTimeout(erase, pauseBetweenCycles); // Пауза перед стиранием слова
      }
    }

    function erase() {
      if (index > 0) {
        index--;
        text[index].style.display = "none";
        setTimeout(erase, eraseSpeed); // Задержка перед исчезновением предыдущей буквы
      } else {
        index = 0;
        type(); // Начать новый цикл печати после стирания
      }
    }

    type(); // Начать первый цикл печати
  });
})();

// card animation start
(() => {
  const items = document.querySelectorAll(".card-box__item-wrp");
  const wrp = document.querySelector(".s1__card-box");
  if (items)
    items.forEach((e) => {
      setTimeout(() => {
        e.classList.remove("disabled");
        e.classList.add("active");

        wrp.classList.remove("disabled");
        wrp.classList.add("active");
        setTimeout(() => {
          wrp.style.transition = "unset";
        }, 1500);
      }, 3500);
    });

  // const video = document.querySelector(".logo-video1");
  // setTimeout(() => {
  //   video.classList.add("active");
  // }, 2000);
})();

// s4 tab|mob auto scroller
(() => {
  document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".s4__list-item");

    let currentIndex = 0;
    let previousIndex = items.length - 1;

    function showNextItem() {
      // Скрыть текущий элемент, переместив его влево
      items[previousIndex].classList.remove("previous");
      items[currentIndex].classList.remove("active");
      items[currentIndex].classList.add("previous");

      // Рассчитать индекс следующего элемента
      previousIndex = currentIndex;
      currentIndex = (currentIndex + 1) % items.length;

      // Показать следующий элемент, переместив его из правой части
      items[currentIndex].classList.add("active");
    }

    // Изначально показать первый элемент
    items[currentIndex].classList.add("active");

    // Установить интервал для автоматического переключения элементов
    setInterval(showNextItem, 6000);
  });

})();

// s6 | s10 animation 
(() => {
  if (window.innerWidth > 1200) {
  function activateItemsCyclically(items, interval) {
    let currentIndex = 0;
  
    function activateNextItem() {
      // Удаляем класс active у всех элементов
      items.forEach(e => e.classList.remove("active"));
      
      // Добавляем класс active к текущему элементу
      items[currentIndex].classList.add("active");
      
      // Переходим к следующему элементу, возвращаемся к первому, если дошли до конца
      currentIndex = (currentIndex + 1) % items.length;
    }
  
    // Активируем первый элемент сразу
    activateNextItem();
  
    // Запускаем цикл с указанным интервалом
    setInterval(activateNextItem, interval);
  }
  
  // Для блока .s4
  const items1 = document.querySelectorAll(".s4 .list-progress__item .blur");
  activateItemsCyclically(items1, 2000);
  
  // Для блока .s10
  const items2 = document.querySelectorAll(".s10 .list-progress__item .blur");
  activateItemsCyclically(items2, 2000);
  }
}) ();

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
      event.preventDefault();
      popup.classList.add("open");
      popupContent.classList.add("open");
    });

    closeBtn.addEventListener("click", function () {
      popup.classList.remove("open");
      popupContent.classList.remove("open");

      var iframe = document.getElementById('youtube-video');
      var iframeSrc = iframe.src;
      iframe.src = '';
      setTimeout(() => {
        iframe.src = iframeSrc;
      }, 100);
    });

    document.addEventListener("click", function (event) {
      // Закрываем popup, если клик произошел вне его области
      if (
        !popupContent.contains(event.target) &&
        !openBtn.contains(event.target)
      ) {
        popup.classList.remove("open");
        popupContent.classList.remove("open");

        var iframe = document.getElementById('youtube-video');
        var iframeSrc = iframe.src;
        iframe.src = '';
        setTimeout(() => {
          iframe.src = iframeSrc;
        }, 100);

      }
    });
  });
})();