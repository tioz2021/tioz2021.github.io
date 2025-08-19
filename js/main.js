(() => {
  const mainBtn = document.querySelector('.main-menu__head');
  const menu = document.querySelector('.main-menu');

  // переключение по кнопке
  mainBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    menu.classList.toggle('active');
  });

  // клик вне меню
  document.addEventListener('click', (e) => {
    if (!menu.contains(e.target) && !mainBtn.contains(e.target)) {
      menu.classList.remove('active');
    }
  });
})();
