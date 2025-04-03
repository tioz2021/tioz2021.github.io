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
  const sliderInput = document.querySelector('.slider-input-v2');
  
  if (!budgetText || !sliderInput) return;

  // Устанавливаем параметры слайдера
  sliderInput.min = "0.50";
  sliderInput.max = "3.00";
  sliderInput.step = "0.01";
  sliderInput.value = "1.00";

  sliderInput.addEventListener('input', function() {
    const value = parseFloat(this.value);
    const min = parseFloat(this.min);
    const max = parseFloat(this.max);
    
    // Расчет позиции (0-100)
    const percent = ((value - min) / (max - min)) * 100;
    
    // Обновляем визуальные элементы
    updateSliderPosition(percent, value);
    updateBudgetCategory(value);
  });

  function updateSliderPosition(percent, value) {
    const progress = document.querySelector('.progress-v2');
    const thumb = document.querySelector('.thumb-v2');
    const bubbleValue = document.querySelector('.value-bubble-v2 span');
    
    // Обновляем прогресс-бар
    if (progress) progress.style.width = `${percent}%`;
    
    // Обновляем позицию ползунка (используем transform для точности)
    if (thumb) {
      thumb.style.left = `${percent}%`;
      thumb.style.transform = 'translateX(-50%)';
    }
    
    // Обновляем значение в пузырьке
    if (bubbleValue) bubbleValue.textContent = value.toFixed(2) + '%';
    
    // Позиционируем пузырек относительно thumb
    updateBubblePosition();
  }

  function updateBudgetCategory(value) {
    if (value <= 1.31) {
      budgetText.textContent = 'Standard';
      budgedDiamand.style.fill = '#9093f9';
      document.querySelector('.thumb-v2-icon circle').style.fill = '#9093f9';
      document.querySelector('.track-v2').classList.add('bg1');
      document.querySelector('.track-v2').classList.remove('bg2');
      document.querySelector('.track-v2').classList.remove('bg3');
    } else if (value > 1.31 && value <= 2.13) {
      budgetText.textContent = 'Reliable';
      budgedDiamand.style.fill = '#28b6e1';
      document.querySelector('.thumb-v2-icon circle').style.fill = '#28b6e1';
      document.querySelector('.track-v2').classList.remove('bg1');
      document.querySelector('.track-v2').classList.add('bg2');
      document.querySelector('.track-v2').classList.remove('bg3');
    } else {
      budgetText.textContent = 'Brilliant';
      budgedDiamand.style.fill = '#c707c2';
      document.querySelector('.thumb-v2-icon circle').style.fill = '#c707c2';
      document.querySelector('.track-v2').classList.remove('bg1');
      document.querySelector('.track-v2').classList.remove('bg2');
      document.querySelector('.track-v2').classList.add('bg3');
    }
  }

  function updateBubblePosition() {
    const thumb = document.querySelector('.thumb-v2');
    const bubble = document.querySelector('.value-bubble-v2');
    if (!thumb || !bubble) return;

    // Используем getBoundingClientRect для точного позиционирования
    const thumbRect = thumb.getBoundingClientRect();
    const container = document.querySelector('.track-container-v2');
    if (!container) return;

    const containerRect = container.getBoundingClientRect();
    
    // Центрируем пузырек относительно thumb
    const bubbleWidth = bubble.offsetWidth;
    const leftPosition = thumbRect.left - containerRect.left - bubbleWidth/2 + thumbRect.width/2;
    
    // bubble.style.left = `${leftPosition}px`;
  }

  // Инициализация
  sliderInput.dispatchEvent(new Event('input'));
  window.addEventListener('resize', updateBubblePosition);
})();

// btn flip
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
      // this.colors = ['#FFFFFF', '#C5C7FC', '#C5C7FC'];
      // this.colors = ['#FFFFFF', '#C5C7FC', '#470083'];
      this.colors = ['#FFFFFF', '#FFFFFF', '#FFFFFF'];
    }
  
    setHandles(count) {
      if (count < 1 || count > 8) return false;
      
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

// save %
// (() => {
//   class MultiHandleSlider {
//     constructor(container) {
//       this.container = container;
//       this.track = container.querySelector('.slider-track');
//       this.valuesDisplay = container.querySelector('.slider-values');
//       this.handles = [];
//       this.values = [100];
//       this.colors = ['#FFFFFF', '#C5C7FC', '#470083'];
//     }
  
//     setHandles(newCount) {
//       if (newCount < 1 || newCount > 6) return false;
      
//       const currentCount = this.values.length;
//       const oldValues = [...this.values];
      
//       // Сохраняем позиции существующих ползунков
//       const oldPositions = [0];
//       this.handles.forEach(handle => {
//         oldPositions.push(parseFloat(handle.style.left));
//       });
//       oldPositions.push(100);
      
//       this.track.innerHTML = '';
//       this.handles = [];
//       this.values = [];
      
//       // Рассчитываем новые значения с сохранением пропорций
//       if (newCount > currentCount) {
//         // Добавляем новые ползунки
//         const newValues = [...oldValues];
//         const remaining = 100 - oldValues.reduce((a, b) => a + b, 0);
//         const newSegmentValue = remaining / (newCount - currentCount);
        
//         for (let i = currentCount; i < newCount; i++) {
//           newValues.push(newSegmentValue);
//         }
        
//         // Корректируем сумму до 100%
//         const sum = newValues.reduce((a, b) => a + b, 0);
//         if (sum !== 100) {
//           newValues[0] += 100 - sum;
//         }
        
//         this.values = newValues;
//       } else {
//         // Уменьшаем количество ползунков
//         this.values = oldValues.slice(0, newCount);
        
//         // Корректируем сумму до 100%
//         const sum = this.values.reduce((a, b) => a + b, 0);
//         if (sum !== 100) {
//           const scaleFactor = 100 / sum;
//           this.values = this.values.map(v => v * scaleFactor);
//         }
//       }
      
//       // Создаем новые ползунки с сохраненными значениями
//       let accumulated = 0;
//       for (let i = 0; i < newCount; i++) {
//         if (i > 0) {
//           accumulated += this.values[i-1];
//           const handle = this.createHandle(accumulated, i);
//           this.track.appendChild(handle);
//           this.handles.push(handle);
//         }
//       }
      
//       this.updateVisuals();
//       return true;
//     }
  
//     createHandle(position, index) {
//       const handle = document.createElement('div');
//       handle.className = 'slider-handle';
//       handle.style.left = `${position}%`;
//       handle.dataset.index = index;
      
//       handle.addEventListener('mousedown', (e) => {
//         e.preventDefault();
//         const startX = e.clientX;
//         const startLeft = parseFloat(handle.style.left);
//         const handleIndex = parseInt(handle.dataset.index);
        
//         const moveHandler = (e) => {
//           const deltaX = e.clientX - startX;
//           const percentDelta = (deltaX / this.track.offsetWidth) * 100;
//           let newLeft = startLeft + percentDelta;
          
//           const prevHandle = this.handles[handleIndex - 2];
//           const nextHandle = this.handles[handleIndex];
//           const min = prevHandle ? parseFloat(prevHandle.style.left) + 1 : 0;
//           const max = nextHandle ? parseFloat(nextHandle.style.left) - 1 : 100;
          
//           newLeft = Math.max(min, Math.min(max, newLeft));
//           handle.style.left = `${newLeft}%`;
          
//           this.updateValues();
//           this.updateVisuals();
//         };
        
//         document.addEventListener('mousemove', moveHandler);
//         document.addEventListener('mouseup', () => {
//           document.removeEventListener('mousemove', moveHandler);
//         }, { once: true });
//       });
      
//       return handle;
//     }
  
//     updateValues() {
//       const positions = [0, ...this.handles.map(h => parseFloat(h.style.left)), 100];
//       this.values = positions.slice(1).map((pos, i) => pos - positions[i]);
//       this.updateInputsPercent();
//     }
  
//     updateVisuals() {
//       let accumulated = 0;
//       const gradientStops = this.values.map((val, i) => {
//         accumulated += val;
//         return `${this.colors[i % this.colors.length]} ${accumulated}%`;
//       });
//       this.track.style.background = `linear-gradient(90deg, ${gradientStops.join(', ')})`;
//       this.updateInputsPercent();
//     }
  
//     updateInputsPercent() {
//       const inputsPercent = document.querySelectorAll('.main-input__input-end__num');
//       this.values.forEach((value, index) => {
//         if (inputsPercent[index]) {
//           inputsPercent[index].textContent = `${value.toFixed(0)}%`;
//         }
//       });
//     }
  
//     getValues() {
//       return this.values;
//     }
//   }
  
//   // Инициализация слайдера
//   const slider = new MultiHandleSlider(document.querySelector('.multi-handle-slider'));

//   // Элементы управления
//   const mainBtn = document.querySelector('.main-form__step-buttons-one');
//   const btnMore = document.querySelector('.main-form__step-buttons-more');
//   const addBtn = document.querySelector('.button-add-input');
//   const deleteBtn = document.querySelector('.button-remove-input');
//   const inputs = document.querySelectorAll('.main-form__step-input-wrp');
//   const step1_1 = document.querySelector('.main-form__step-wrp-1_1');
  
//   let visibleInputs = 1;
//   const maxInputs = inputs.length;

//   function updateButtons() {
//     addBtn.disabled = visibleInputs >= maxInputs;
//     deleteBtn.disabled = visibleInputs <= 1;

//     // Сохраняем текущие значения перед обновлением
//     const currentValues = visibleInputs > 1 ? slider.getValues() : [100];
//     slider.setHandles(visibleInputs);
    
//     // Восстанавливаем значения после обновления
//     if (visibleInputs > 1) {
//       let sum = currentValues.reduce((a, b) => a + b, 0);
//       if (sum !== 100) {
//         currentValues[0] += 100 - sum;
//       }
      
//       // Обновляем позиции ползунков
//       let accumulated = 0;
//       for (let i = 1; i < visibleInputs; i++) {
//         accumulated += currentValues[i-1];
//         if (slider.handles[i-1]) {
//           slider.handles[i-1].style.left = `${accumulated}%`;
//         }
//       }
      
//       slider.values = [...currentValues];
//       slider.updateVisuals();
//     }
    
//     if (visibleInputs === 1) {
//       mainBtn.classList.remove('hidden');
//       btnMore.classList.add('hidden');
//       step1_1.classList.add('disabled');
//     } else {
//       mainBtn.classList.add('hidden');
//       btnMore.classList.remove('hidden');
//       step1_1.classList.remove('disabled');
//     }
//   }

//   function addFirstInput() {
//     if (visibleInputs < maxInputs) {
//       inputs[visibleInputs].classList.remove('disabled');
//       visibleInputs++;
//       updateButtons();
//     }
//   }

//   function addMoreInputs() {
//     if (visibleInputs < maxInputs) {
//       inputs[visibleInputs].classList.remove('disabled');
//       visibleInputs++;
//       updateButtons();
//     }
//   }

//   function removeInputs() {
//     if (visibleInputs > 1) {
//       inputs[visibleInputs - 1].classList.add('disabled');
//       visibleInputs--;
//       updateButtons();
//     }
//   }

//   // Инициализация
//   updateButtons();

//   // Назначение обработчиков событий
//   mainBtn.addEventListener('click', addFirstInput);
//   addBtn.addEventListener('click', addMoreInputs);
//   deleteBtn.addEventListener('click', removeInputs);
// })();