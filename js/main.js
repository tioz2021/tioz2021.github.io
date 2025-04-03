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
  const dropdowns = document.querySelectorAll('.custom-time-selector');
  if (!dropdowns.length) return;

  dropdowns.forEach(dropdown => {
    const dropdownBtn = dropdown.querySelector('.selector-header');
    const selectedValue = dropdown.querySelector('.selected-value');
    const optionsContainer = dropdown.querySelector('.selector-options');
    const icon = dropdown.querySelector('.selector-header__icon');
    const allOptions = Array.from(dropdown.querySelectorAll('.option:not(.off-option)'));
    
    // Создаем OFF опцию
    const offOption = document.createElement('div');
    offOption.className = 'option off-option';
    offOption.textContent = 'OFF';

    // Функция для обновления списка опций
    const updateOptions = (selectedText) => {
      // Очищаем контейнер
      while (optionsContainer.firstChild) {
        optionsContainer.removeChild(optionsContainer.firstChild);
      }

      // Если выбрано не OFF, добавляем OFF в начало
      if (selectedText !== 'OFF') {
        optionsContainer.appendChild(offOption);
      }

      // Добавляем все опции, кроме выбранной
      allOptions.forEach(opt => {
        if (opt.textContent !== selectedText) {
          optionsContainer.appendChild(opt.cloneNode(true));
        }
      });
    };

    dropdownBtn.addEventListener('click', function(e) {
      e.stopPropagation();
      // Закрываем все другие открытые dropdown
      document.querySelectorAll('.custom-time-selector').forEach(d => {
        if (d !== dropdown) d.classList.remove('active');
      });
      // Открываем/закрываем текущий
      dropdown.classList.toggle('active');
    });

    // Обработчик для всех опций
    optionsContainer.addEventListener('click', function(e) {
      if (e.target.classList.contains('option')) {
        e.stopPropagation();
        const selectedText = e.target.textContent;
        
        // Обновляем выбранное значение
        selectedValue.textContent = selectedText;
        
        // Управляем иконкой
        icon.style.display = selectedText === 'OFF' ? 'block' : 'none';
        
        // Обновляем список опций
        updateOptions(selectedText);
        
        dropdown.classList.remove('active');
      }
    });

    // Инициализация
    updateOptions('OFF');

    // Закрываем dropdown при клике вне его
    document.addEventListener('click', function() {
      dropdown.classList.remove('active');
    });
  });
})();

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
    let x = item.querySelector(".accordion__title");

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
        content.style.maxHeight = `${textHeight + 94}px`;
        content.style.paddingBottom = "12px";

        // x.style.paddingBottom = "0rem";

      } else {
        content.style.maxHeight = "0px";
        content.style.paddingBottom = "0px";
      }
    });
  });
})();

// main forms
(() => {
  class MultiHandleSlider {
    constructor(container) {
      this.container = container;
      this.track = container.querySelector('.slider-track');
      this.valuesDisplay = container.querySelector('.slider-values');
      this.handles = [];
      this.values = [100];
      this.colors = ['#FFFFFF', '#C5C7FC', '#470083'];
    }
  
    setHandles(count) {
      if (count < 1 || count > 6) return false;
      
      this.track.innerHTML = '';
      this.handles = [];
      this.values = [];
      
      const segmentWidth = 100 / count;
      for (let i = 0; i < count; i++) {
        this.values.push(segmentWidth);
        
        if (i > 0) {
          const handle = this.createHandle(i * segmentWidth, i);
          this.track.appendChild(handle);
          this.handles.push(handle);
        }
      }
      
      this.updateVisuals();
      return true;
    }
  
    createHandle(position, index) {
      const handle = document.createElement('div');
      handle.className = 'slider-handle';
      handle.style.left = `${position}%`;
      handle.dataset.index = index;
      
      handle.addEventListener('mousedown', (e) => {
        e.preventDefault();
        const startX = e.clientX;
        const startLeft = parseFloat(handle.style.left);
        const handleIndex = parseInt(handle.dataset.index);
        
        const moveHandler = (e) => {
          const deltaX = e.clientX - startX;
          const percentDelta = (deltaX / this.track.offsetWidth) * 100;
          let newLeft = startLeft + percentDelta;
          
          const prevHandle = this.handles[handleIndex - 2];
          const nextHandle = this.handles[handleIndex];
          const min = prevHandle ? parseFloat(prevHandle.style.left) + 1 : 0;
          const max = nextHandle ? parseFloat(nextHandle.style.left) - 1 : 100;
          
          newLeft = Math.max(min, Math.min(max, newLeft));
          handle.style.left = `${newLeft}%`;
          
          this.updateValues();
          this.updateVisuals();
        };
        
        document.addEventListener('mousemove', moveHandler);
        document.addEventListener('mouseup', () => {
          document.removeEventListener('mousemove', moveHandler);
        }, { once: true });
      });
      
      return handle;
    }
  
    updateValues() {
      const positions = [0, ...this.handles.map(h => parseFloat(h.style.left)), 100];
      this.values = positions.slice(1).map((pos, i) => pos - positions[i]);
      // this.updateValuesDisplay();
      this.updateInputsPercent();
    }
  
    updateVisuals() {
      let accumulated = 0;
      const gradientStops = this.values.map((val, i) => {
        accumulated += val;
        return `${this.colors[i % this.colors.length]} ${accumulated}%`;
      });
      this.track.style.background = `linear-gradient(90deg, ${gradientStops.join(', ')})`;
      
      // this.updateValuesDisplay();
      this.updateInputsPercent();
    }
  
    // updateValuesDisplay() {
    //   this.valuesDisplay.innerHTML = this.values
    //     .map(v => `<div class="value-label">${v.toFixed(1)}%</div>`)
    //     .join('');
    // }
  
    updateInputsPercent() {
      const inputsPercent = document.querySelectorAll('.main-input__input-end__num');
      this.values.forEach((value, index) => {
        if (inputsPercent[index]) {
          inputsPercent[index].textContent = `${value.toFixed(0)}%`;
        }
      });
    }
  
    getValues() {
      return this.values;
    }
  }
  
  // Остальной код без изменений
  const slider = new MultiHandleSlider(document.querySelector('.multi-handle-slider'));

  const mainBtn = document.querySelector('.main-form__step-buttons-one');
  const btnMore = document.querySelector('.main-form__step-buttons-more');
  const addBtn = document.querySelector('.button-add-input');
  const deleteBtn = document.querySelector('.button-remove-input');
  const inputs = document.querySelectorAll('.main-form__step-input-wrp');
  const step1_1 = document.querySelector('.main-form__step-wrp-1_1');
  
  let visibleInputs = 1;
  const maxInputs = inputs.length;

  function updateButtons() {
    addBtn.disabled = visibleInputs >= maxInputs;
    deleteBtn.disabled = visibleInputs <= 1;

    slider.setHandles(visibleInputs);
    slider.updateInputsPercent();
    
    if (visibleInputs === 1) {
      mainBtn.classList.remove('hidden');
      btnMore.classList.add('hidden');
      step1_1.classList.add('disabled');
    } else {
      mainBtn.classList.add('hidden');
      btnMore.classList.remove('hidden');
      step1_1.classList.remove('disabled');
    }
  }

  function addFirstInput() {
    if (visibleInputs < maxInputs) {
      inputs[visibleInputs].classList.remove('disabled');
      visibleInputs++;
      updateButtons();
    }
  }

  function addMoreInputs() {
    if (visibleInputs < maxInputs) {
      inputs[visibleInputs].classList.remove('disabled');
      visibleInputs++;
      updateButtons();
    }
  }

  function removeInputs() {
    if (visibleInputs > 1) {
      inputs[visibleInputs - 1].classList.add('disabled');
      visibleInputs--;
      updateButtons();
    }
  }

  updateButtons();

  mainBtn.addEventListener('click', addFirstInput);
  addBtn.addEventListener('click', addMoreInputs);
  deleteBtn.addEventListener('click', removeInputs);
})();