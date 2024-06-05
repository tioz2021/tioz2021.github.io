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
    
    // max value active slider ?
    const nameElm = this.querySelector(".ms__title");
    const nameText = nameElm.textContent;
    const swiperWrpElm = this.parentNode;
    const maxNumberVal = swiperWrpElm.querySelectorAll(".ms__list-item").length;
    console.log(maxNumberVal)

    // find index click element
    const elements = Array.from(swiperWrpElm.children);
    if (this.classList.contains('ms__list-item')) {
      const index = elements.indexOf(this);
      // active number slider
      console.log('Clicked element index:', elements.length);

      if(swiperWrpElm.classList.contains("ms__list--vip")){
        // open slider
        swipers[0].classList.add("active");
        // active item
        swiper.slideTo(index, 10, false);
        // add max number and active number
        const activeNumElm = document.querySelector(".ms-swiper__list-vip .ms-swiper__nav-num1");
        const maxNumElm = document.querySelector(".ms-swiper__list-vip .ms-swiper__nav-num2");
        activeNumElm.textContent = index+1;
        maxNumElm.textContent = elements.length;
      } else {
        // open slider
        swipers[1].classList.add("active");
        // active item
        swiper2.slideTo(index, 10, false);
        // add max number and active number
        const activeNumElm = document.querySelector(".ms-swiper__list-premium .ms-swiper__nav-num1");
        const maxNumElm = document.querySelector(".ms-swiper__list-premium .ms-swiper__nav-num2");
        activeNumElm.textContent = index+1;
        maxNumElm.textContent = elements.length;
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
    if(swipers[0].classList.contains("active")){
      console.log("vip")
      lists[0].classList.add("active");
    } else if(swipers[1].classList.contains("active")){
      console.log("prem")
      lists[1].classList.add("active");
    }

    
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

  // листание слайдов
  const vipPrevBtn = document.querySelector(".ms-swiper__list-vip .swiper-slide-btn-prev");
  const vipNextBtn = document.querySelector(".ms-swiper__list-vip .swiper-slide-btn-next");
  const vipNumberElm = document.querySelector(".ms-swiper__list-vip .ms-swiper__nav-num1");
  
  const premPrevBtn = document.querySelector(".ms-swiper__list-premium .swiper-slide-btn-prev");
  const premNextBtn = document.querySelector(".ms-swiper__list-premium .swiper-slide-btn-next");
  const premNumberElm = document.querySelector(".ms-swiper__list-premium .ms-swiper__nav-num1");

  function changeNumberVip() {
    vipNumberElm.textContent = swiper.activeIndex+1;
  }

  function changeNumberPrem() {
    premNumberElm.textContent = swiper2.activeIndex+1;
  }

  vipPrevBtn.addEventListener("click", changeNumberVip);
  vipNextBtn.addEventListener("click", changeNumberVip);

  premPrevBtn.addEventListener("click", changeNumberPrem);
  premNextBtn.addEventListener("click", changeNumberPrem);

})();

(() => {
})();
