// country cycl list 
(() => {
  document.addEventListener('DOMContentLoaded', function() {
    const track = document.querySelector('.ticker__track');
    const items = track.innerHTML;
    track.innerHTML = items + items;
    
    let position = 0;
    const speed = 0.1; // в rem!
    const originalWidth = track.scrollWidth / 2;
    
    // Конвертируем ширину из px в rem
    const remSize = parseFloat(getComputedStyle(document.documentElement).fontSize);
    const originalWidthRem = originalWidth / remSize;
    
    function animate() {
      position -= speed;
      
      if (Math.abs(position) >= originalWidthRem) {
        position = 0;
      }
      
      track.style.transform = `translateX(${position}rem)`;
      requestAnimationFrame(animate);
    }
    
    animate();
  });
}) ();

// horizontal box 
(() => {
  const swiper = new Swiper(".how-it-works__swiper", {
    direction: "horizontal",
    slidesPerView: 3,
    
    // try use rem
    spaceBetween: parseFloat(getComputedStyle(document.documentElement).fontSize) * 3.6,
    breakpoints: {
      320: { 
        slidesPerView: 1
      },
      768: { 
        slidesPerView: 2,
        spaceBetween: parseFloat(getComputedStyle(document.documentElement).fontSize) * 2.4,
      },
      1024: { slidesPerView: 3 }
    }
  });
  
  let isScrolling = false;
  const section = document.querySelector(".how-it-works");
  
  // Настройки отступов в процентах от высоты экрана
  const OFFSET_TOP_PERCENT = 0.5; // 30% сверху
  const OFFSET_BOTTOM_PERCENT = 1.2; // 30% снизу
  
  function isSectionInViewport() {
    const rect = section.getBoundingClientRect();
    const topThreshold = window.innerHeight * OFFSET_TOP_PERCENT;
    const bottomThreshold = window.innerHeight * OFFSET_BOTTOM_PERCENT;
    
    return rect.top < (window.innerHeight - topThreshold) && 
           rect.bottom > bottomThreshold;
  }
  
  window.addEventListener('wheel', (e) => {
    // Если уже обрабатываем скролл - игнорируем
    if (isScrolling) {
      e.preventDefault();
      return;
    }
    
    if (!isSectionInViewport()) return;
    
    // ЛЮБОЕ движение колеса = 1 итерация
    const isScrollingDown = e.deltaY > 0;
    const isScrollingUp = e.deltaY < 0;
    
    if ((isScrollingDown && !swiper.isEnd) || (isScrollingUp && !swiper.isBeginning)) {
      e.preventDefault();
      e.stopPropagation();
      
      isScrolling = true;
      
      if (isScrollingDown) {
        swiper.slideNext();
      } else {
        swiper.slidePrev();
      }
      
      // Блокируем дальнейшие события на 500ms
      setTimeout(() => {
        isScrolling = false;
      }, 500);
    }
  }, { passive: false });

})();

// s4 slider
(() => {
  const swiper = new Swiper(".s4__swiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    speed: 750,
    grabCursor: true,
    // parallax: true,

    effect: 'fade',
    fadeEffect: {
      crossFade: true // Плавное перекрытие слайдов
    },

    navigation: {
      nextEl: ".product__swiper-button-next",
      prevEl: ".product__swiper-button-prev",
    },
    
    pagination: {
      el: ".product__swiper-pagination",
      clickable: true,
    },
  });
})();

// s6 counter
(() => {
  const countEl = document.getElementById('count');
  const wordEl = document.getElementById('word');
  const upArrow = document.querySelector('.arrow.up');
  const downArrow = document.querySelector('.arrow.down');

  let count = 1;

  function updateText() {
    let word = 'МЕСЯЦ';
    if (count % 10 === 1 && count % 100 !== 11) word = 'МЕСЯЦ';
    else if ([2,3,4].includes(count % 10) && ![12,13,14].includes(count % 100)) word = 'МЕСЯЦА';
    else word = 'МЕСЯЦЕВ';

    countEl.textContent = count;
    wordEl.textContent = word;
  }

  upArrow.addEventListener('click', () => {
    count++;
    updateText();
  });

  downArrow.addEventListener('click', () => {
    if (count > 1) count--;
    updateText();
  });
}) ();

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
        content.style.maxHeight = `${textHeight + 2.4}rem`;
        content.style.paddingBottom = "2.4rem";
      } else {
        content.style.maxHeight = "0";
        content.style.paddingBottom = "0rem";
      }
    });
  });
})();

// 3d-slider
(() => {
  var TrandingSlider = new Swiper('.tranding-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 'auto',
    speed: 500,
    
    
    breakpoints: {
      // 0-600px - настройки по умолчанию (mobile)
      321: {
        coverflowEffect: {
          // rotate: 0,
          // stretch: 1,
          // depth: 1,
          // modifier: 1,
          // scale: 1,
        }
      },

      // 601-1000px (tablet)
      601: {
        // slidesPerView: 1.3,
        centeredSlides: true,
        coverflowEffect: {
          // rotate: 0,
          // stretch: 18.68,
          // depth: 15,
          // modifier: 15,
        }
      },
      
      // 1001px+ (desktop)
      1001: {
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 141,
          modifier: 2.5,
        }
      }
    },

    // autoplay: {
    //   delay: 4000, 
    //   disableOnInteraction: false,
    // },

  });
}) ();

// popup
(() => {
  document.addEventListener("DOMContentLoaded", function () {
    const openButtons = document.querySelectorAll(".openBtn");
    const popups = document.querySelectorAll(".popup");

    openButtons.forEach((btn) => {
      btn.addEventListener("click", (evt) => {
        evt.preventDefault();
        const popupId = btn.getAttribute("data-popup");
        const popup = document.getElementById(popupId);
        if (popup) {
          const popupContent = popup.querySelector(".popup-content");
          popup.classList.add("open");
          popupContent.classList.add("open");
        }
      });
    });

    popups.forEach((popup) => {
      const popupContent = popup.querySelector(".popup-content");
      const closeBtn = popup.querySelector(".closeBtn");

      if (closeBtn) {
        closeBtn.addEventListener("click", () => {
          popup.classList.remove("open");
          popupContent.classList.remove("open");
        });
      }

      // Закрытие при клике вне области
      document.addEventListener("click", (event) => {
        if (
          popup.classList.contains("open") &&
          !popupContent.contains(event.target) &&
          !event.target.closest(".openBtn")
        ) {
          popup.classList.remove("open");
          popupContent.classList.remove("open");
        }
      });
    });
  });
})();

// text animation
(function() {
  document.addEventListener('DOMContentLoaded', function() {
      const observerOptions = {
          root: null,
          rootMargin: '0px 0px -50px 0px',
          threshold: 0.1
      };
      
      let hasAnimated = new Set();
      
      function initAnimation(element) {
          const delay = element.dataset.delay ? parseInt(element.dataset.delay) : 0;
          
          setTimeout(() => {
              // Для текстовых элементов (специальная обработка)
              if (element.classList.contains('animated-text')) {
                  const chars = element.querySelectorAll('.char');
                  const icons = element.querySelectorAll('.animated-icon');
                  
                  chars.forEach((char, index) => {
                      const charDelay = index * 0.015;
                      char.style.animationDelay = `${charDelay}s`;
                  });
                  
                  icons.forEach((icon, iconIndex) => {
                      const iconDelay = 0.3 + (iconIndex * 0.2);
                      icon.style.animationDelay = `${iconDelay}s`;
                  });
              }
              
              // Для всех анимированных элементов
              element.classList.add('animated');
              hasAnimated.add(element);
          }, delay);
      }
      
      const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
              if (entry.isIntersecting && !hasAnimated.has(entry.target)) {
                  initAnimation(entry.target);
              }
          });
      }, observerOptions);
      
      // Наблюдаем за всеми анимированными элементами
      const animatedElements = document.querySelectorAll('.animated-text, .animated-element');
      animatedElements.forEach(element => {
          observer.observe(element);
      });
  });
})();

// tab/mobile menu
(() => {
  const openMenuBtn = document.querySelector('.header__tab-version-gmbrg-btn');
  const tabMenuBody = document.querySelector('.tab-menu');
  const tabMenuCloseBtn = document.querySelector('.tab-menu__close-btn');
  const fsBody = document.querySelector('.fs');

  function menu() {
    tabMenuBody.classList.toggle('active');
    fsBody.classList.toggle('active')
  };

  openMenuBtn.addEventListener('click', menu);
  tabMenuCloseBtn.addEventListener('click', menu);
}) ();