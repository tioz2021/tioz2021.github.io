// main menu hover effect
(() => {
  const menuItems = document.querySelectorAll('.header__menu .main-menu__list-item');
  const underline = document.querySelector('.header__menu .main-menu__list-underline');
  
  menuItems.forEach((item) => {
    item.addEventListener('mouseenter', (e) => {
      const { offsetLeft, offsetWidth } = e.target;
      underline.style.left = `${offsetLeft}px`;
      underline.style.width = `${offsetWidth}px`;
    });
  
    item.addEventListener('mouseleave', () => {
      underline.style.width = '0';
    });
  });

  const menuItems2 = document.querySelectorAll('.footer__menu .main-menu__list-item');
  const underline2 = document.querySelector('.footer__menu .main-menu__list-underline');
  
  menuItems2.forEach((item) => {
    item.addEventListener('mouseenter', (e) => {
      const { offsetLeft, offsetWidth } = e.target;
      underline2.style.left = `${offsetLeft}px`;
      underline2.style.width = `${offsetWidth}px`;
    });
  
    item.addEventListener('mouseleave', () => {
      underline2.style.width = '0';
    });
  });
}) ();

// custom dropdown
(() => {
  const dropdownsBtn = document.querySelector('.selector-header');
  if (!dropdownsBtn) return;

  dropdownsBtn.addEventListener('click', function() {
    this.parentElement.classList.toggle('active');
    const indicator = this.querySelector('.toggle-indicator');
    indicator.textContent = this.parentElement.classList.contains('active') ? 'ON' : 'OFF';
  });
  
  document.querySelectorAll('.option').forEach(option => {
    option.addEventListener('click', function() {
      document.querySelector('.selected-value').textContent = this.textContent;
      this.parentElement.parentElement.classList.remove('active');
      document.querySelector('.toggle-indicator').textContent = 'OFF';
    });
  });
}) ();

// individualize-slider
(() => {
  const slider = document.getElementById('centerSlider');
  const thumb = document.querySelector('.slider-thumb');
  const valueDisplay = document.querySelector('.slider-value');
  const track = document.querySelector('.slider-track');
  
  let isDragging = false;
  
  if(!slider) return;

  // Инициализация
  updateSlider(0);
  
  // Обработчик для инпута
  // slider.addEventListener('input', function() {
  //   updateSlider(this.value);
  // });
  
  // Drag-логика для ползунка
  thumb.addEventListener('mousedown', (e) => {
    isDragging = true;
    document.addEventListener('mousemove', handleThumbDrag);
    document.addEventListener('mouseup', () => {
      isDragging = false;
      document.removeEventListener('mousemove', handleThumbDrag);
    });
  });
  
  function handleThumbDrag(e) {
    if (!isDragging) return;
    
    const trackRect = track.getBoundingClientRect();
    const position = ((e.clientX - trackRect.left) / trackRect.width) * 200 - 100; // -100..100
    const roundedValue = Math.max(-100, Math.min(100, Math.round(position)));
    
    slider.value = roundedValue;
    updateSlider(roundedValue);
  }
  
  function updateSlider(value) {
    const percent = value;
    const position = (parseInt(value) + 100) / 2;
    
    thumb.style.left = `${position}%`;
    valueDisplay.textContent = `${percent}%`;
    
    // if (value < 0) {
    //   track.style.background = `linear-gradient(to right, 
    //     #f00 0%, 
    //     #f00 ${50 + value/2}%, 
    //     #ddd ${50 + value/2}%, 
    //     #ddd 100%)`;
    // } else {
    //   track.style.background = `linear-gradient(to right, 
    //     #f00 0%, 
    //     #f00 ${50 + value/2}%, 
    //     #ddd ${50 + value/2}%, 
    //     #ddd 100%)`;
    // }
  }
  
  // Для мобильных устройств
  thumb.addEventListener('touchstart', (e) => {
    isDragging = true;
    document.addEventListener('touchmove', handleTouchDrag);
    document.addEventListener('touchend', () => {
      isDragging = false;
      document.removeEventListener('touchmove', handleTouchDrag);
    });
  });
  
  function handleTouchDrag(e) {
    if (!isDragging) return;
    const touch = e.touches[0];
    const trackRect = track.getBoundingClientRect();
    const position = ((touch.clientX - trackRect.left) / trackRect.width) * 200 - 100;
    const roundedValue = Math.max(-100, Math.min(100, Math.round(position)));
    
    slider.value = roundedValue;
    updateSlider(roundedValue);
  }
}) ();

// discount-slider
(() => {
  const budgetText = document.querySelector('.badge-v2 span');
  const budgedDiamand = document.querySelector('.badge-icon path');
  
  if (!budgetText) return;

  document.querySelector('.slider-input-v2').addEventListener('input', function() {
    const value = parseFloat(this.value);
    const min = parseFloat(this.min);
    const max = parseFloat(this.max);
    const percent = ((value - min) / (max - min)) * 100;
    
    // Обновляем прогресс и положение ползунка
    document.querySelector('.progress-v2').style.width = `${percent}%`;
    const thumb = document.querySelector('.thumb-v2');
    thumb.style.left = `${percent}%`;
    
    document.querySelector('.value-bubble-v2 span').textContent = `${value.toFixed(1)}%`;
    
    console.log('value', value);
    if(value <= 1.31) {
      budgetText.textContent = 'Standard';
      budgedDiamand.style.fill = '#2d2c38';
    } else if(value >= 1.32 && value <= 2.13) {
      budgetText.textContent = 'Reliable';
      budgedDiamand.style.fill = '#4e51f5';
    } else {
      budgetText.textContent = 'Brilliant';
      budgedDiamand.style.fill = '#470083';
    }
    // 0.5 1.31%
    // 1.32% 2.13%
    // 2.14% 3%

    window.addEventListener('resize', updateBubblePosition);
    updateBubblePosition();
  });
  
  function updateBubblePosition() {
    const thumb = document.querySelector('.thumb-v2');
    const bubble = document.querySelector('.value-bubble-v2');
    const thumbRect = thumb.getBoundingClientRect();

    const container = document.querySelector('.track-container-v2');
    const containerRect = container.getBoundingClientRect();
    
    let leftPosition = thumbRect.left - containerRect.left;
    leftPosition = Math.max(0, Math.min(containerRect.width, leftPosition));
    
    // bubble.style.left = `${leftPosition}px`;
    // bubble.style.transform = 'translateX(-50%)';
  }
  
  document.querySelector('.slider-input-v2').dispatchEvent(new Event('input'));
}) ();

(() => {
  const btnFlip = document.querySelector('.btn-flip');
  if(!btnFlip) return;
  const btnFlipIcon = document.querySelector('.btn-flip .btn-icon');

  btnFlip.addEventListener('mouseenter', (e) => {
    btnFlipIcon.classList.add('btn-flip-hover1');
    btnFlipIcon.classList.remove('btn-flip-hover2');
  });
  btnFlip.addEventListener('mouseleave', () => {
    btnFlipIcon.classList.remove('btn-flip-hover1');
    btnFlipIcon.classList.add('btn-flip-hover2');
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