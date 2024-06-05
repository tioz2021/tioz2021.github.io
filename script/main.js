(() => {
  // swiper init
  const swiper = new Swiper('.ms-swiper__list-vip', {
    spaceBetween: 30,
    // Navigation arrows
    navigation: {
      nextEl: '.ms-swiper__list-vip .swiper-slide-btn-next',
      prevEl: '.ms-swiper__list-vip .swiper-slide-btn-prev',
    }
  });

  const swiper2 = new Swiper('.ms-swiper__list-premium', {
    spaceBetween: 30,
    // Navigation arrows
    navigation: {
      nextEl: '.ms-swiper__list-premium .swiper-slide-btn-next',
      prevEl: '.ms-swiper__list-premium .swiper-slide-btn-prev',
    }
  });
  
  // change vip\premium box
  const header = document.querySelector(".header");
  const headerMenuBtns = document.querySelectorAll(".header__menu-item");
  const lists = document.querySelectorAll(".ms__list");

  const swiperWrp = document.querySelector(".ms-swiper");
  const swipers = document.querySelectorAll(".ms-swiper__list");

  // Функция для обработки клика
  const handleMenuClick = (index) => {
    headerMenuBtns.forEach((btn, btnIndex) => {
      swiperWrp.classList.remove("active");

      if(header.classList.contains("mod-box")){
        if (btnIndex === index) {
          btn.classList.add("header__menu-item-active");
          lists[btnIndex].classList.add("active");
        } else {
          btn.classList.remove("header__menu-item-active");
          lists[btnIndex].classList.remove("active");
        }
      } else {
        if (btnIndex === index) {
          btn.classList.add("header__menu-item-active");
          // lists[btnIndex].classList.add("active");
          swiperWrp.classList.add("active");
          // swipers[0].classList.add("active");
          swipers[1].classList.add("active");
        } else {
          btn.classList.remove("header__menu-item-active");
          // lists[btnIndex].classList.remove("active");
        }
      }

    });
  };
  
  // Привязка обработчиков событий
  headerMenuBtns.forEach((btn, index) => {
    btn.onclick = () => handleMenuClick(index);
  });

  // open items
  const items = document.querySelectorAll(".ms__list-item");
  const closeBtn = document.querySelector(".header__close");
  const prevBtn = document.querySelector(".header__prev");
  
  // const sliderBox = document.querySelector
  function openSwipers() {
    // console.log("h");
    
    const nameElm = this.querySelector(".ms__title");
    const nameText = nameElm.textContent;
    const swiperWrpElm = this.parentNode;
    const maxNumberVal = swiperWrpElm.querySelectorAll(".ms__list-item").length;
    console.log(maxNumberVal)

    // find index click element
    const elements = Array.from(swiperWrpElm.children);
    if (this.classList.contains('ms__list-item')) {
      const index = elements.indexOf(this);
      console.log('Clicked element index:', index);

      // open slider
      if(swiperWrpElm.classList.contains("ms__list--vip")){
        swipers[0].classList.add("active");
        swiper.slideTo(index, 1000, false);
      } else {
        swipers[1].classList.add("active");
        swiper2.slideTo(index, 1000, false);
      }
    }

    // hidden all list
    lists[0].classList.remove("active");
    lists[1].classList.remove("active");

    // open swipers Block
    swiperWrp.classList.add("active");

    // change closeBtn\PrevBtn
    prevBtn.classList.add("active");
    closeBtn.classList.remove("active");

    // change Header wiev mod
    header.classList.remove("mod-box");
    header.classList.add("mod-list");

  }
  items.forEach(e => e.addEventListener("click", openSwipers));

  prevBtn.onclick = function() {
    // back to list
    lists[0].classList.add("active");

    // hidden Swipers
    swiperWrp.classList.remove("active");
    swipers[0].classList.remove("active");
    swipers[1].classList.remove("active");

    // change Header wiev mod
    header.classList.add("mod-box");
    header.classList.remove("mod-list");

    // change closeBtn\PrevBtn
    prevBtn.classList.remove("active");
    closeBtn.classList.add("active");
  }
})();

(() => {
})();
