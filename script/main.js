// sliders opt
(() => {
  // Функция для инициализации слайдеров
  function initSwiper(container, paginationSelector, navigationSelectors, config = {}) {
    return new Swiper(container, {
      effect: "fade",
      fadeEffect: {
        crossFade: true,
      },
      pagination: {
        el: paginationSelector,
        clickable: true,
      },
      navigation: navigationSelectors,
      ...config,
    });
  }

  // Инициализация слайдеров
  const swiperConfig = {
    speed: 750,
    slidesPerView: 1,
    effect: "creative",
    creativeEffect: {
      prev: {
        translate: ["-120%", 0, -500],
        opacity: 0,
      },
      next: {
        translate: ["120%", 0, -500],
        opacity: 1,
      },
    },
  };

  const swiper1 = initSwiper(".scroll-section__swiper1", ".swiper-pagination", {}, swiperConfig);
  const swiper2 = initSwiper(".scroll-section__swiper2", ".swiper-pagination", {}, swiperConfig);
  
  const defaultSwiperConfig = {
    fadeEffect: {
      crossFade: true,
    },
  };

  const swiperDef1 = initSwiper(
    ".slider-section__swiper1",
    ".slider-section__swiper1 .swiper-pagination",
    {
      nextEl: ".slider-section__swiper1 .slider-section__swiper-button-next",
      prevEl: ".slider-section__swiper1 .slider-section__swiper-button-prev",
    },
    defaultSwiperConfig
  );
  
  const swiperDef2 = initSwiper(
    ".slider-section__swiper2",
    ".slider-section__swiper2 .swiper-pagination",
    {
      nextEl: ".slider-section__swiper2 .slider-section__swiper-button-next",
      prevEl: ".slider-section__swiper2 .slider-section__swiper-button-prev",
    },
    defaultSwiperConfig
  );

  // Функция для инициализации мобильного слайдера
  function initializeSwiper() {
    if (window.innerWidth < 1200) {
      new Swiper(".s3_tab-swiper", {
        initialSlide: 1,
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

  // Инициализация при загрузке страницы и изменении размера окна
  initializeSwiper();
  window.addEventListener("resize", initializeSwiper);

  // Функция для обработки прокрутки
  function scrollSliderBlock() {
    const scrollingBlock = document.querySelector(".s2.scrolling-block");
    const scrollingBlock2 = document.querySelector(".s5.scrolling-block");
    if (!scrollingBlock || !scrollingBlock2) return;
    
    const scrollTop = window.scrollY || window.pageYOffset;
    const windowWidth = window.innerWidth;
    const windowHeight = window.innerHeight;
    
    // Конфигурация для разного разрешения экрана
    const config = [
      {
        condition: windowWidth > 1200 && windowHeight < 910,
        ranges: [
          { start: 1700, end: 2700, fixedClass: "fixed", topFixed: "-797px", topStart: "910px", topEnd: "1910px", slideRanges: [1701, 2000, 2301, 2600] },
          { start: 6400, end: 7400, fixedClass: "fixed", topFixed: "-697px", topStart: "5684px", topEnd: "6684px", slideRanges: [6401, 6700, 7001, 7300] }
        ]
      },
      {
        condition: windowWidth > 1200 && windowHeight >= 910,
        ranges: [
          { start: 1400, end: 2400, fixedClass: "fixed", topFixed: "-497px", topStart: "910px", topEnd: "1910px", slideRanges: [1401, 1700, 2001, 2300] },
          { start: 6100, end: 7100, fixedClass: "fixed", topFixed: "-409px", topStart: "5684px", topEnd: "6684px", slideRanges: [6101, 6400, 6701, 7000] }
        ]
      }
    ];
    
    config.forEach(({ condition, ranges }) => {
      if (condition) {
        ranges.forEach(({ start, end, fixedClass, topFixed, topStart, topEnd, slideRanges }) => {
          const block = (start >= 6000) ? scrollingBlock2 : scrollingBlock;
          const swiper = (start >= 6000) ? swiper2 : swiper1;

          if (scrollTop >= start && scrollTop <= end) {
            if (!block.classList.contains(fixedClass)) {
              block.classList.add(fixedClass);
              block.style.top = topFixed;
            }
          } else if (scrollTop < start) {
            if (block.classList.contains(fixedClass)) {
              block.classList.remove(fixedClass);
              block.style.top = topStart;
            }
          } else if (scrollTop > end) {
            if (block.classList.contains(fixedClass)) {
              block.classList.remove(fixedClass);
              block.style.top = topEnd;
            }
          }

          slideRanges.forEach((range, index) => {
            if (scrollTop >= range && scrollTop <= slideRanges[index + 1]) swiper.slideTo(index, 1000);
          });
        });
      }
    });
  }

  window.addEventListener("scroll", scrollSliderBlock);
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
    });

    function animateOpacity() {
      blurElement.forEach((e) => (e.style.opacity = "0.5"));
      timeoutId = setTimeout(() => {
        blurElement.forEach((e) => (e.style.opacity = "0.3"));
        timeoutId = setTimeout(animateOpacity, 1000);
      }, 1000);
    }
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

// animation opt
(() => {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting && entry.intersectionRatio >= 0.1 && entry.time >= 100) {
          const textElm = entry.target.querySelector(".small-text");
          if (!textElm) return;

          textElm.classList.add("anim");

          const classPrefix = entry.target.className.match(/(\w+?)(__pre-title|--pre-title--\w+)/);
          if (!classPrefix) return;

          const lottieElements = document.querySelectorAll(`.${classPrefix[1]} lottie-player`);
          if (lottieElements.length > 0) {
            setTimeout(() => {
              lottieElements.forEach((elm) => elm.play());
            }, 300);
          }

          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 1, delay: 100 }
  );

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
    ".pas1__pre-title",
    ".other-page-s7-title",
    ".phwks1__pre-title",
    ".qas1__pre-title",
    ".phws1__pre-title",
    ".pb1__pre-title",
    ".pps1__pre-title--one",
    ".pps1__pre-title--last",
    ".pre-title-404",
  ];

  selectors.forEach((selector) => {
    const blockToAnimate = document.querySelector(selector);
    if (blockToAnimate) observer.observe(blockToAnimate);
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

    if (!elements.length) {
      return false;
    }

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
})();

// s4 tab|mob auto scroller
(() => {
  document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".s4__list-item");
    if (!items.length) {
      return false;
    }

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
    if(items1[0]) activateItemsCyclically(items1, 2000);
    
    // Для блока .s10
    const items2 = document.querySelectorAll(".s10 .list-progress__item .blur");
    if(items2[0]) activateItemsCyclically(items2, 2000);
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

// page-how-works functional opt
(() => {
  const btns = document.querySelectorAll(".phws1__item");
  const deskBox = document.querySelectorAll(".phws1__body");
  const accordion = document.querySelectorAll(".s14-modifi");

  const toggleActiveClasses = (elements, index) => {
    elements.forEach(e => e.classList.remove("active-effect"));
    setTimeout(() => {
      elements.forEach(e => e.classList.remove("active"));
      elements[index].classList.add("active");
      elements[index].classList.add("active-effect");
    }, 600);
  };

  const handleClick = evt => {
    btns.forEach(e => e.classList.remove("active"));
    evt.target.classList.add("active");

    if (evt.target.classList.contains("phws1__item1")) {
      toggleActiveClasses(deskBox, 0);
      toggleActiveClasses(accordion, 0);
    } else if (evt.target.classList.contains("phws1__item2")) {
      toggleActiveClasses(deskBox, 1);
      toggleActiveClasses(accordion, 1);
    } else {
      toggleActiveClasses(deskBox, 2);
      toggleActiveClasses(accordion, 2);
    }
  };

  if (btns) btns.forEach(e => e.addEventListener("click", handleClick));
})();

// page-how-work functional
(() => {

  // web
  const btns = document.querySelectorAll(".win-box__top-menu-item");
  const elements = document.querySelectorAll(".win-box__center");
  const text_links = document.querySelectorAll(".win-box__left-list-item");

  // main nav
  const main_nav = evt => {
    const active_link = evt.target;
    btns.forEach(e => e.classList.remove("active"));
    active_link.classList.add("active");
    
    if(active_link.classList.contains("win-box__top-menu-item1")){ 
      // video
      let video_link = elements[0].querySelector(".video_link");
      if(video_link) document.querySelector("iframe").src = video_link.textContent;

      // body
      elements.forEach(e => e.classList.remove("active-effect"))
      setTimeout(() => {
        elements.forEach(e => e.classList.remove("active"))
      }, 400)
      setTimeout(() => {
        elements[0].classList.add("active");
        elements[0].classList.add("active-effect");
      }, 400)
    } 
    
    else if(active_link.classList.contains("win-box__top-menu-item2")){
      // video
      let video_link = elements[1].querySelector(".video_link");
      if(video_link) document.querySelector("iframe").src = video_link.textContent;

      elements.forEach(e => e.classList.remove("active-effect"))
      setTimeout(() => {
        elements.forEach(e => e.classList.remove("active"))
      }, 400)
      setTimeout(() => {
        elements[1].classList.add("active");
        elements[1].classList.add("active-effect");
      }, 400)
    }
    
    else if(active_link.classList.contains("win-box__top-menu-item3")){
      // video
      let video_link = elements[2].querySelector(".video_link");
      if(video_link) document.querySelector("iframe").src = video_link.textContent;

      elements.forEach(e => e.classList.remove("active-effect"))
      setTimeout(() => {
        elements.forEach(e => e.classList.remove("active"))
      }, 400)
      setTimeout(() => {
        elements[2].classList.add("active");
        elements[2].classList.add("active-effect");
      }, 400)
    }
    
    else if(active_link.classList.contains("win-box__top-menu-item4")){
      // video
      let video_link = elements[3].querySelector(".video_link");
      if(video_link) document.querySelector("iframe").src = video_link.textContent;

      elements.forEach(e => e.classList.remove("active-effect"))
      setTimeout(() => {
        elements.forEach(e => e.classList.remove("active"))
      }, 400)
      setTimeout(() => {
        elements[3].classList.add("active");
        elements[3].classList.add("active-effect");
      }, 400)
    }
    
    else if(active_link.classList.contains("win-box__top-menu-item5")){
      // video
      let video_link = elements[4].querySelector(".video_link");
      if(video_link) document.querySelector("iframe").src = video_link.textContent;

      elements.forEach(e => e.classList.remove("active-effect"))
      setTimeout(() => {
        elements.forEach(e => e.classList.remove("active"))
      }, 400)
      setTimeout(() => {
        elements[4].classList.add("active");
        elements[4].classList.add("active-effect");
      }, 400)
    }

    else{
      // video
      let video_link = elements[5].querySelector(".video_link");
      if(video_link) document.querySelector("iframe").src = video_link.textContent;

      elements.forEach(e => e.classList.remove("active-effect"))
      setTimeout(() => {
        elements.forEach(e => e.classList.remove("active"))
      }, 400)
      setTimeout(() => {
        elements[5].classList.add("active");
        elements[5].classList.add("active-effect");
      }, 400)
    }
    
  }

  // inside text nav
  const text_nav = evt => {
    const elm = evt.target;
    const box = elm.parentNode.parentNode.parentNode;
    const texts = box.querySelectorAll(".win-box__text");

    text_links.forEach(e => e.classList.remove("active"));
    elm.classList.add("active");
    
    if(elm.classList.contains("win-box__left-list-item1")){
      texts.forEach(e => e.classList.remove("active"));
      texts[0].classList.add("active");
    }
    else if(elm.classList.contains("win-box__left-list-item2")){
      texts.forEach(e => e.classList.remove("active"));
      texts[1].classList.add("active");
    }
    else if(elm.classList.contains("win-box__left-list-item3")){
      texts.forEach(e => e.classList.remove("active"));
      texts[2].classList.add("active");
    }
    else if(elm.classList.contains("win-box__left-list-item4")){
      texts.forEach(e => e.classList.remove("active"));
      texts[3].classList.add("active");
    }
    else if(elm.classList.contains("win-box__left-list-item5")){
      texts.forEach(e => e.classList.remove("active"));
      texts[4].classList.add("active");
    }
  }

  // mob
  const menuItem = document.querySelectorAll(".win-box__top-menu-mobile li");
  
  const mf = evt => {
    const m_this = evt.target;
    const numItem = parseInt(m_this.textContent);
    const container = m_this.parentNode.parentNode.parentNode.parentNode
    const items = container.querySelectorAll(".swiper-slide-active .win-box__center");
    
    if(numItem == 1){
      items.forEach(e => e.classList.remove("active"));
      items[0].classList.add("active");
    } else if(numItem == 2){
      items.forEach(e => e.classList.remove("active"));
      items[1].classList.add("active");
    } else if(numItem == 3){
      items.forEach(e => e.classList.remove("active"));
      items[2].classList.add("active");
    } else if(numItem == 4){
      items.forEach(e => e.classList.remove("active"));
      items[3].classList.add("active");
    } else if(numItem == 5){
      items.forEach(e => e.classList.remove("active"));
      items[4].classList.add("active");
    }
  }

  // changer
  document.addEventListener("DOMContentLoaded", function () {
    if (window.innerWidth > 1200) {
      btns.forEach(e => e.addEventListener("click", main_nav));
      text_links.forEach(e => e.addEventListener("click", text_nav));
    } else {      
      menuItem.forEach(e => e.addEventListener("click", mf))
    }
  });

}) ();