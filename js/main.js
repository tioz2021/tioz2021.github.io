// header menu
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

// paymen method 
(() => {
  document.addEventListener("DOMContentLoaded", () => {
    const paymentBlock = document.querySelector(".payment-methods");
    const toggleBtn = paymentBlock.querySelector(".payment-methods__toggle-btn");
  
    toggleBtn.addEventListener("click", () => {
      paymentBlock.classList.toggle("open");
    });
  });  
}) ();