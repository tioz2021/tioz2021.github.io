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
    spaceBetween: 36,
    mousewheel: false,
    breakpoints: {
      320: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
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
    mousewheel: false,
    breakpoints: {
      // 320: { slidesPerView: 1 },
      // 768: { slidesPerView: 2 },
      // 1024: { slidesPerView: 3 }
    },
    pagination: {
      el: ".product__swiper-pagination",
    },
    navigation: {
      nextEl: ".product__swiper-button-next",
      prevEl: ".product__swiper-button-prev",
    },
  });

}) ();

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
