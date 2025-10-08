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