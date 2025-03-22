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