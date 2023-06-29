// fs menu changer
(() => {
  const list = document.querySelector(".fs__list");
  const listItem = list.querySelectorAll(".fs__list-item");
  const textOverflow = document.querySelector(".fs__list-overflov-text");
  const firstScrin = document.querySelector(".fs");

  function changed() {
    listItem.forEach((e) => e.classList.remove("active"));
    this.classList.toggle("active");
    textOverflow.classList.add("active");
    textOverflow.innerHTML = this.querySelector(
      ".fs__list-hidden-text"
    ).innerHTML;
    if (listItem[0] == this || listItem[1] == this) {
      textOverflow.classList.add("top-minus-rem1");
      textOverflow.classList.remove("top-minus-rem2");
    } else if (listItem[2] == this || listItem[3] == this) {
      textOverflow.classList.remove("top-minus-rem1");
      textOverflow.classList.add("top-minus-rem2");
    } else if (listItem[4] == this || listItem[5] == this) {
      textOverflow.classList.remove("top-minus-rem1");
      textOverflow.classList.remove("top-minus-rem2");
    }
  }

  if (listItem)
    listItem.forEach((e) => e.addEventListener("mouseover", changed));
  if (document.body)
    document.body.addEventListener("mouseout", (e) => {
      listItem.forEach((e) => e.classList.remove("active"));
      textOverflow.classList.remove("active");
    });
})();

// s3 item change
(() => {
  const list = document.querySelector(".s3__list");
  const listItem = list.querySelectorAll(".s3__item");
  const s3 = document.querySelector(".s3");

  function changed() {
    listItem.forEach((e) => e.classList.remove("active"));
    this.classList.toggle("active");
  }
  if (listItem)
    listItem.forEach((e) => e.addEventListener("mouseover", changed));
  if (s3)
    s3.addEventListener("mouseout", (e) => {
      listItem.forEach((e) => e.classList.remove("active"));
    });
})();

// lng cnahger
(() => {
  const lng = document.querySelector(".header__lng-switcher");
  const header = document.querySelector(".header");
  function changed() {
    this.classList.toggle("active");
  }
  // mouseover
  if (lng) lng.addEventListener("click", changed);
  // if (header)
  //   header.addEventListener("mouseout", (e) => {
  //     lng.classList.remove("active");
  //   });
})();

// menu mobile
(() => {
  const openMenuBtn = document.querySelector(".mobile-menu-open");
  const closeMenuBtn = document.querySelector(".mobile-menu-close");
  const menu = document.querySelector(".header__contacts-wrp");
  const items = document.querySelectorAll(".header__menu-item");
  function openMenu() {
    menu.classList.add("active");
  }
  function closeMenu() {
    menu.classList.remove("active");
  }
  if (openMenuBtn) openMenuBtn.addEventListener("click", openMenu);
  if (items) items.forEach((e) => e.addEventListener("click", closeMenu));
  if (closeMenuBtn) closeMenuBtn.addEventListener("click", closeMenu);
})();

// wow js init
new WOW().init();
