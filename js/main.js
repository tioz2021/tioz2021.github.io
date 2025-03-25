// main menu hover effect
(() => {
  const menuItems = document.querySelectorAll('.main-menu__list-item');
  const underline = document.querySelector('.main-menu__list-underline');
  
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
}) ();

// custom dropdown
(() => {
  document.querySelector('.selector-header').addEventListener('click', function() {
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