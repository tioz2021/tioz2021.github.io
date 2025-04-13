// main menu hover effect
(() => {
  // Функция для конвертации px в rem
  function pxToRem(px) {
    return px / parseFloat(getComputedStyle(document.documentElement).fontSize);
  }

  const menuItems = document.querySelectorAll('.header__menu .main-menu__list-item');
  const underline = document.querySelector('.header__menu .main-menu__list-underline');

  menuItems.forEach((item) => {
    item.addEventListener('mouseenter', (e) => {
      const { offsetLeft, offsetWidth } = e.target;
      underline.style.left = `${pxToRem(offsetLeft)}rem`;
      underline.style.width = `${pxToRem(offsetWidth)}rem`;
    });

    item.addEventListener('mouseleave', () => {
      underline.style.width = '0';
    });
  });

  // Футер
  const menuItems2 = document.querySelectorAll('.footer__menu .main-menu__list-item');
  const underline2 = document.querySelector('.footer__menu .main-menu__list-underline');

  menuItems2.forEach((item) => {
    item.addEventListener('mouseenter', (e) => {
      const { offsetLeft, offsetWidth } = e.target;
      underline2.style.left = `${pxToRem(offsetLeft)}rem`;
      underline2.style.width = `${pxToRem(offsetWidth)}rem`;
    });

    item.addEventListener('mouseleave', () => {
      underline2.style.width = '0';
    });
  });
})();

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
    const stepBox = document.querySelector('.main-form__step-box');

    // Создаем OFF опцию
    const offOption = document.createElement('div');
    offOption.className = 'option text-large off-option';
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

    dropdownBtn.addEventListener('click', function (e) {
      e.stopPropagation();

      // stepBox.style.zIndex = '3';
      stepBox.classList.add('active');

      // Закрываем все другие открытые dropdown
      document.querySelectorAll('.custom-time-selector').forEach(d => {
        if (d !== dropdown) d.classList.remove('active');
      });
      // Открываем/закрываем текущий
      dropdown.classList.toggle('active');
    });

    // Обработчик для всех опций
    optionsContainer.addEventListener('click', function (e) {
      if (e.target.classList.contains('option')) {
        e.stopPropagation();
        const selectedText = e.target.textContent;

        // stepBox.style.zIndex = '2';
        stepBox.classList.remove('active');

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
    document.addEventListener('click', function () {
      dropdown.classList.remove('active');
      // stepBox.style.zIndex = '2';
      stepBox.classList.remove('active');
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

  if (!slider) return;

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
})();

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

  sliderInput.addEventListener('input', function () {
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
    if (value < 1.02) {
      budgetText.textContent = 'Standard';
      budgedDiamand.style.fill = '#9093f9';
      document.querySelector('.thumb-v2-icon circle').style.fill = '#9093f9';
      document.querySelector('.track-v2').classList.add('bg1');
      document.querySelector('.track-v2').classList.remove('bg2');
      document.querySelector('.track-v2').classList.remove('bg3');
    } else if (value > 1.01 && value <= 2.13) {
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
    // const thumbRect = thumb.getBoundingClientRect();
    const container = document.querySelector('.track-container-v2');
    if (!container) return;

    // const containerRect = container.getBoundingClientRect();

    // Центрируем пузырек относительно thumb
    // const bubbleWidth = bubble.offsetWidth;
    // const leftPosition = thumbRect.left - containerRect.left - bubbleWidth / 2 + thumbRect.width / 2;

    // bubble.style.left = `${leftPosition}rem`;
  }

  // Инициализация
  sliderInput.dispatchEvent(new Event('input'));
  // window.addEventListener('resize', updateBubblePosition);
})();

// btn flip
(() => {
  const btnFlip = document.querySelector('.btn-flip');
  if (!btnFlip) return;
  const btnFlipIcon = document.querySelector('.btn-flip .btn-icon');

  btnFlip.addEventListener('mouseenter', (e) => {
    btnFlipIcon.classList.add('btn-flip-hover1');
    btnFlipIcon.classList.remove('btn-flip-hover2');
  });
  btnFlip.addEventListener('mouseleave', () => {
    btnFlipIcon.classList.remove('btn-flip-hover1');
    btnFlipIcon.classList.add('btn-flip-hover2');
  });

  btnFlip.addEventListener('click', (e) => {
    e.preventDefault();
    console.log(e.target)
  });
})();

// acardion
(() => {
  const accordionItems = document.querySelectorAll(".accordion__item");

  // Функция для открытия элемента
  const openAccordionItem = (item) => {
    const header = item.querySelector(".accordion__header");
    const content = item.querySelector(".accordion__content");

    header.classList.add("active");
    const textHeight = content.scrollHeight;
    content.style.maxHeight = `${textHeight + 94}rem`;
    content.style.paddingBottom = "12rem";
  };

  // Функция для закрытия всех элементов
  const closeAllAccordionItems = () => {
    accordionItems.forEach((item) => {
      const header = item.querySelector(".accordion__header");
      const content = item.querySelector(".accordion__content");

      header.classList.remove("active");
      content.style.maxHeight = "0";
      content.style.paddingBottom = "0rem";
    });
  };

  // Открываем активный по умолчанию элемент при загрузке
  document.addEventListener("DOMContentLoaded", () => {
    const defaultActiveItem = document.querySelector(".accordion__item.active");
    if (defaultActiveItem) {
      openAccordionItem(defaultActiveItem);
    }
  });

  // Обработчики кликов
  accordionItems.forEach((item) => {
    const header = item.querySelector(".accordion__header");

    header.addEventListener("click", () => {
      const isActive = header.classList.contains("active");

      closeAllAccordionItems();

      if (!isActive) {
        openAccordionItem(item);
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
      this.colors = ['#FFFFFF', '#FFFFFF', '#FFFFFF'];
      this.isTouchDevice = 'ontouchstart' in window;
      this.MIN_SEGMENT = 0.15; // Минимальное значение сегмента в процентах
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

      const startDrag = (clientX, startLeft, handleIndex) => {
        const moveHandler = (e) => {
          const currentX = this.isTouchDevice ? e.touches[0].clientX : e.clientX;
          const deltaX = currentX - clientX;
          const percentDelta = (deltaX / this.track.offsetWidth) * 100;
          let newLeft = startLeft + percentDelta;

          const prevHandle = this.handles[handleIndex - 2];
          const nextHandle = this.handles[handleIndex];
          
          const min = prevHandle ? 
            Math.max(parseFloat(prevHandle.style.left) + this.MIN_SEGMENT, 0) : 
            0;
            
          const max = nextHandle ? 
            Math.min(parseFloat(nextHandle.style.left) - this.MIN_SEGMENT, 100) : 
            100;

          newLeft = Math.max(min, Math.min(max, newLeft));
          handle.style.left = `${newLeft}%`;

          this.updateValues();
          this.updateVisuals();
        };

        const endDrag = () => {
          if (this.isTouchDevice) {
            document.removeEventListener('touchmove', moveHandler);
            document.removeEventListener('touchend', endDrag);
          } else {
            document.removeEventListener('mousemove', moveHandler);
            document.removeEventListener('mouseup', endDrag);
          }
        };

        if (this.isTouchDevice) {
          document.addEventListener('touchmove', moveHandler, { passive: false });
          document.addEventListener('touchend', endDrag, { once: true });
        } else {
          document.addEventListener('mousemove', moveHandler);
          document.addEventListener('mouseup', endDrag, { once: true });
        }
      };

      handle.addEventListener('mousedown', (e) => {
        e.preventDefault();
        startDrag(e.clientX, parseFloat(handle.style.left), parseInt(handle.dataset.index));
      });

      handle.addEventListener('touchstart', (e) => {
        e.preventDefault();
        startDrag(e.touches[0].clientX, parseFloat(handle.style.left), parseInt(handle.dataset.index));
      }, { passive: false });

      return handle;
    }

    updateValues() {
      const positions = [0, ...this.handles.map(h => parseFloat(h.style.left)), 100];
      let segments = positions.slice(1).map((pos, i) => pos - positions[i]);
      
      // Проверяем все сегменты на минимальное значение
      let needsAdjustment = true;
      while (needsAdjustment) {
        needsAdjustment = false;
        
        // Находим сегменты меньше минимального
        for (let i = 0; i < segments.length; i++) {
          if (segments[i] < this.MIN_SEGMENT) {
            needsAdjustment = true;
            const diff = this.MIN_SEGMENT - segments[i];
            
            // Пытаемся взять разницу у соседних сегментов
            if (i > 0 && segments[i-1] > this.MIN_SEGMENT) {
              const available = segments[i-1] - this.MIN_SEGMENT;
              const transfer = Math.min(diff, available);
              segments[i-1] -= transfer;
              segments[i] += transfer;
            }
            else if (i < segments.length-1 && segments[i+1] > this.MIN_SEGMENT) {
              const available = segments[i+1] - this.MIN_SEGMENT;
              const transfer = Math.min(diff, available);
              segments[i+1] -= transfer;
              segments[i] += transfer;
            }
          }
        }
      }
      
      // Обновляем позиции ручек на основе скорректированных значений
      let accumulated = 0;
      for (let i = 0; i < this.values.length - 1; i++) {
        accumulated += segments[i];
        if (this.handles[i]) {
          this.handles[i].style.left = `${accumulated}%`;
        }
      }
      
      this.values = segments;
      this.updateInputsPercent();
    }

    updateVisuals() {
      let accumulated = 0;
      const gradientStops = this.values.map((val, i) => {
        accumulated += val;
        return `${this.colors[i % this.colors.length]} ${accumulated}%`;
      });
      this.track.style.background = `linear-gradient(90deg, ${gradientStops.join(', ')})`;
      this.updateInputsPercent();
    }

    updateInputsPercent() {
      const inputsPercent = document.querySelectorAll('.main-input__input-end__num');
      this.values.forEach((value, index) => {
        if(this.values.length === 3) {
          this.values[0] = this.values[0] + 0.001;
        } 
        else if(this.values.length === 6) {
          this.values[5] = this.values[5] - 0.002;
        }
        else if(this.values.length === 7) {
          this.values[6] = this.values[6] - 0.002;
        }
        
        if (inputsPercent[index]) {
          inputsPercent[index].textContent = `${value.toFixed(2)}%`;
        }
      });
    }

    getValues() {
      return this.values;
    }
  }

  const mainBtn = document.querySelector('.main-form__step-buttons-one');
  if (!mainBtn) return;
  const btnMore = document.querySelector('.main-form__step-buttons-more');
  const addBtn = document.querySelector('.button-add-input');
  const deleteBtn = document.querySelector('.button-remove-input');
  const inputs = document.querySelectorAll('.main-form__step-input-wrp');
  const step1_1 = document.querySelector('.main-form__step-wrp-1_1');

  const slider = new MultiHandleSlider(document.querySelector('.multi-handle-slider'));

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

(() => {
  const copyBtn = document.querySelector('.copy-btn');
  const btnLine = document.querySelector('.btn-line a');
  function active() {
    btnLine.classList.add('active');
    setTimeout(() => {
      btnLine.classList.remove('active');
    }, 750)
  }
  if (copyBtn) copyBtn.addEventListener('click', active);

  const defBtnResult2 = document.querySelector('.default-btn');
  if (!defBtnResult2) return;
  defBtnResult2.onclick = function () {
    this.classList.toggle('active');
  }
})();

// mobile-menu
(() => {
  document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menuToggle');
    const menuList = document.querySelector('.mob-menu__list');
    const menuOverlay = document.querySelector('.menu-overlay');

    // Открытие/закрытие меню
    menuToggle.addEventListener('click', function (e) {
      e.stopPropagation();
      menuList.classList.toggle('active');
      menuOverlay.classList.toggle('active');
      menuToggle.classList.toggle('active');
    });

    // Закрытие при клике вне меню
    menuOverlay.addEventListener('click', function () {
      menuList.classList.remove('active');
      menuOverlay.classList.remove('active');
      menuToggle.classList.remove('active');
    });

    // Закрытие при клике на пункт меню (опционально)
    const menuItems = document.querySelectorAll('.mob-menu__list-link');
    menuItems.forEach(item => {
      item.addEventListener('click', function () {
        menuList.classList.remove('active');
        menuOverlay.classList.remove('active');
        menuToggle.classList.remove('active');
      });
    });
  });
})();

// copy-btn
(() => {
  function copy(selector) {
    // Получаем элемент по указанному селектору
    const element = document.querySelector(selector);

    if (!element) {
      console.error('Элемент не найден:', selector);
      return;
    }

    let textToCopy;

    // Определяем, как получить текст в зависимости от типа элемента
    if (element.tagName === 'INPUT' || element.tagName === 'TEXTAREA') {
      // Для input или textarea используем value
      textToCopy = element.value;
    } else {
      // Для остальных элементов используем textContent
      textToCopy = element.textContent;
    }

    // Создаем временный элемент textarea
    const textarea = document.createElement('textarea');
    textarea.value = textToCopy;
    document.body.appendChild(textarea);

    // Выделяем текст
    textarea.select();
    textarea.setSelectionRange(0, 99999); // Для мобильных устройств

    // Копируем текст
    try {
      document.execCommand('copy');
      console.log('Текст успешно скопирован:', textToCopy);
    } catch (error) {
      console.error('Ошибка при копировании:', error);
    }

    // Удаляем временный элемент
    document.body.removeChild(textarea);
  }

  // При клике на кнопку .copy-btn копируем текст из .btn-line i
  if (document.querySelector('.copy-btn')) {
    document.querySelector('.copy-btn').addEventListener('click', () => {
      copy('.btn-line i'); // Селектор для текста
    });
  }

  // При клике на кнопку .mixing-input-btn копируем значение из .mixing-input-wrp .mixing-input
  if (document.querySelector('.mixing-input-btn')) {
    document.querySelector('.mixing-input-btn').addEventListener('click', () => {
      copy('.mixing-input-wrp .mixing-input'); // Селектор для поля ввода
    });

    document.querySelector('.mixing-input-btn').addEventListener('click', function () {
      const main = document.querySelector('.mixing-input-btn-main');
      const ok = document.querySelector('.mixing-input-btn-ok');

      // Скрываем -main и показываем -ok
      main.style.opacity = '0';
      ok.style.display = 'flex'; // Делаем видимым
      setTimeout(() => {
        ok.style.opacity = '1'; // Плавное появление
      }, 10); // Небольшая задержка для корректной анимации

      // Через 1 секунду возвращаем все обратно
      setTimeout(() => {
        ok.style.opacity = '0'; // Скрываем -ok
        setTimeout(() => {
          ok.style.display = 'none'; // Полностью убираем из потока
          main.style.opacity = '1'; // Показываем -main
        }, 250); // Время анимации исчезновения
      }, 1000); // Время показа -ok
    });
  }
})();

// preloader
// (() => {
//   document.addEventListener('DOMContentLoaded', function () {
//     const preloader = document.querySelector('.preloader');
//     if (!preloader) return false;

//     const video = document.getElementById('video-element');
//     const fallbackImage = document.getElementById('fallback-image');
    
//     document.body.classList.add('body-no-scroll');

//     // Настройка видео
//     if (video) {
//       video.muted = true; // Обязательно для автовоспроизведения
//       video.loop = true;
//       video.playsInline = true;
//       video.setAttribute('webkit-playsinline', ''); // Для старых iOS
//     }

//     // Когда вся страница загружена
//     window.addEventListener('load', function () {
//       setTimeout(async function () {
//         // Скрываем прелоадер
//         preloader.classList.add('hide');

//         if (!video) {
//           showFallbackImage();
//           return;
//         }

//         try {
//           // Пытаемся запустить видео
//           const playPromise = video.play();

//           if (playPromise !== undefined) {
//             await playPromise.catch(error => {
//               console.log('Автовоспроизведение не сработало:', error);
//               showFallbackImage();
//             });
//           }
//         } catch (error) {
//           console.log('Ошибка воспроизведения видео:', error);
//           showFallbackImage();
//         }

//         // Полное удаление прелоадера через 0.5s
//         document.body.classList.remove('body-no-scroll');
//         setTimeout(() => preloader.remove(), 500);
//       }, 1000); // Задержка перед скрытием прелоадера
//     });

//     function showFallbackImage() {
//       if (fallbackImage) {
//         // Скрываем видео
//         if (video) video.style.display = 'none';
//         // Показываем изображение
//         fallbackImage.style.display = 'block';
//       } else if (video) {
//         // Если нет фолбэка, показываем controls
//         video.controls = true;
//       }
//     }
//   });
// })();

(() => {
  document.addEventListener('DOMContentLoaded', function() {
    const preloader = document.querySelector('.preloader');
    if (!preloader) return;

    const video = document.getElementById('video-element');
    const fallbackImage = document.getElementById('fallback-image');
    
    // Разблокируем скролл сразу (если нужно)
    document.body.classList.add('body-no-scroll');
    
    // Настройка видео
    if (video) {
      video.muted = true;
      video.loop = true;
      video.playsInline = true;
      video.setAttribute('webkit-playsinline', '');
      video.preload = 'auto'; // Оптимальная предзагрузка
    }

    // Показываем контент через 1000мс независимо от загрузки
    setTimeout(() => {
      // Скрываем прелоадер
      preloader.classList.add('hide');
      document.body.classList.remove('body-no-scroll');
      
      // Пытаемся запустить видео, если оно есть
      if (video) {
        try {
          const playPromise = video.play();
          if (playPromise !== undefined) {
            playPromise.catch(error => {
              console.log('Автовоспроизведение не сработало:', error);
              showFallbackImage();
            });
          }
        } catch (error) {
          console.log('Ошибка воспроизведения видео:', error);
          showFallbackImage();
        }
      }
      
      setTimeout(() => preloader.remove(), 500);
    }, 1000);

    function showFallbackImage() {
      if (fallbackImage && video) {
        video.style.display = 'none';
        fallbackImage.style.display = 'block';
      } else if (video) {
        video.controls = true;
      }
    }
  });
})();

// main-form poupup
(() => {
  const btns = document.querySelectorAll('.main-form__last-btn-wrp .button');
  if (!btns.length) return;

  btns.forEach(button => {
    button.addEventListener('click', function() {
      const buttonId = this.id;
      const modalContainer = document.getElementById('modal-container');
      
      // Удаляем все классы и добавляем ID кнопки как класс
      modalContainer.className = '';
      modalContainer.classList.add(buttonId);
      
      // Добавляем класс к body
      document.body.classList.add('modal-active');
    });
  });

  function close() {
    // Добавляем класс 'out'
    document.querySelector('#modal-container').classList.add('out');
    
    // Удаляем класс у body
    document.body.classList.remove('modal-active');
  };

  // Обработчик клика по modal-container
  document.querySelector('.modal-background').addEventListener('click', close);
  document.querySelector('.modal-icon-close').addEventListener('click', close);

})();