(() => {
  // change vip\premium box
  const header = document.querySelector(".header");
  const headerMenuBtns = document.querySelectorAll(".header__menu-item");
  const lists = document.querySelectorAll(".ms__list");

  const swiperWrp = document.querySelector(".ms-swiper");
  const swipers = document.querySelectorAll(".ms-swiper__list");

  if(headerMenuBtns[0]) headerMenuBtns[0].onclick = function(){
    if(header.classList.contains("mod-box")){
      lists[1].classList.remove("active-effect");
      setTimeout(() => {
        lists[1].classList.remove("active");
      }, 300);

      setTimeout(() => {
        lists[0].classList.add("active");
        lists[0].classList.add("active-effect");
      }, 400);

    } else {
      swiperWrp.classList.add("active");
      
      swipers[1].classList.remove("active-effect");
      setTimeout(() => {
        swipers[1].classList.remove("active");
      }, 300);
      setTimeout(() => {
        swipers[0].classList.add("active");
        swipers[0].classList.add("active-effect");
      }, 400);

      // swipers[0].classList.add("active");
      // swipers[1].classList.remove("active");
    }

    // change active effect
    headerMenuBtns[0].classList.add("header__menu-item-active");
    headerMenuBtns[1].classList.remove("header__menu-item-active");
  }
  if(headerMenuBtns[1]) headerMenuBtns[1].onclick = function(){
    if(header.classList.contains("mod-box")){
      lists[0].classList.remove("active-effect");
      setTimeout(() => {
        lists[0].classList.remove("active");
      }, 300);

      setTimeout(() => {
        lists[1].classList.add("active");
        lists[1].classList.add("active-effect");
      }, 400);
    } else {
      swiperWrp.classList.add("active");
      swipers[0].classList.remove("active-effect");
      setTimeout(() => {
        swipers[0].classList.remove("active");
      }, 300);
      setTimeout(() => {
        swipers[1].classList.add("active");
        swipers[1].classList.add("active-effect");
      }, 400);
      // swipers[1].classList.add("active");
      // swipers[0].classList.remove("active");
    }

    // change active effect
    headerMenuBtns[1].classList.add("header__menu-item-active");
    headerMenuBtns[0].classList.remove("header__menu-item-active");
  }

  if (window.innerWidth > 1200) {
    // swiper init
    const swiper = new Swiper('.ms-swiper__list-vip', {
      // spaceBetween: 0,
      speed: 750,
      slidesPerView: 1,
      allowTouchMove: false,

      effect: "creative",
      creativeEffect: {
        prev: {
          // shadow: true,
          translate: ["-120%", 0, -500],
          opacity: 0,
        },
        next: {
          // shadow: true,
          translate: ["120%", 0, -500],
          opacity: 1,
        },
      },

      // Navigation arrows
      navigation: {
        nextEl: '.ms-swiper__list-vip .swiper-slide-btn-next',
        prevEl: '.ms-swiper__list-vip .swiper-slide-btn-prev',
      }
    });

    const swiper2 = new Swiper('.ms-swiper__list-premium', {
      // spaceBetween: 500,
      speed: 750,
      slidesPerView: 1,
      allowTouchMove: false,

      effect: "creative",
      creativeEffect: {
        prev: {
          // shadow: true,
          translate: ["-120%", 0, -500],
          opacity: 0,
        },
        next: {
          // shadow: true,
          translate: ["120%", 0, -500],
          opacity: 1,
        },
      },

      // Navigation arrows
      navigation: {
        nextEl: '.ms-swiper__list-premium .swiper-slide-btn-next',
        prevEl: '.ms-swiper__list-premium .swiper-slide-btn-prev',
      }
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
          lists[0].classList.remove("active-effect");
          setTimeout(() => {
            lists[0].classList.remove("active");
          }, 300);
          setTimeout(() => {
            swipers[0].classList.add("active");
            swipers[0].classList.add("active-effect");
          }, 400);

          // active item
          swiper.slideTo(index, 10, false);
          // add max number and active number
          const activeNumElm = document.querySelector(".ms-swiper__list-vip .ms-swiper__nav-num1");
          const maxNumElm = document.querySelector(".ms-swiper__list-vip .ms-swiper__nav-num2");
          activeNumElm.textContent = index+1;
          maxNumElm.textContent = elements.length;
        } else {
          // open slider
          lists[1].classList.remove("active-effect");
          setTimeout(() => {
            lists[1].classList.remove("active");
          }, 300);
          setTimeout(() => {
            swipers[1].classList.add("active");
            swipers[1].classList.add("active-effect");
          }, 400);

          // active item
          swiper2.slideTo(index, 10, false);
          // add max number and active number
          const activeNumElm = document.querySelector(".ms-swiper__list-premium .ms-swiper__nav-num1");
          const maxNumElm = document.querySelector(".ms-swiper__list-premium .ms-swiper__nav-num2");
          activeNumElm.textContent = index+1;
          maxNumElm.textContent = elements.length;
        }
      }

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
        swipers[0].classList.remove("active-effect");
        setTimeout(() => {
          swipers[0].classList.remove("active");
        }, 300);
        setTimeout(() => {
          lists[0].classList.add("active");
          lists[0].classList.add("active-effect");
        }, 400);

      } else if(swipers[1].classList.contains("active")){
        swipers[1].classList.remove("active-effect");
        setTimeout(() => {
          swipers[1].classList.remove("active");
        }, 300);
        setTimeout(() => {
          lists[1].classList.add("active");
          lists[1].classList.add("active-effect");
        }, 400);
      }

      // hidden Swipers
      swiperWrp.classList.remove("active");
      // swipers[0].classList.remove("active");
      // swipers[1].classList.remove("active");

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
  }
})();