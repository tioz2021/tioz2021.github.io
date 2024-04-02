// Включаем Swiper
let swiperContainer = document.querySelector(".scroll-section__swiper");
var swiper = new Swiper(swiperContainer, {
  // direction: "horizontal",
  // slidesPerView: 1,
  // spaceBetween: 30,
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// s2 auto scroll
(() => {
  // const srcoller = document.querySelector(".scroller");
  // const scrollerContainer = document.querySelector(".scroller-content");
  // i = 0;
  // srcoller.addEventListener("wheel", function (event) {
  //   if (event.deltaY > 0) {
  //     // Прокрутка вниз
  //     i += 100;
  //     console.log("Прокрутка вниз");
  //   } else if (event.deltaY < 0) {
  //     // Прокрутка вверх
  //     i -= 100;
  //     console.log("Прокрутка вверх");
  //   }
  //   scrollerContainer.style.transform = `translate3d(0px, -${i}px, 0px)`;
  // });
  // window.addEventListener("scroll", function () {
  //   const scrollTop = window.scrollY;
  //   console.log(scrollTop);
  //   const scrollContainer = document.querySelector(".scroll-container");
  //   const scrollContainerOffset = scrollContainer.offsetTop;
  //   const scrollContainerHeight = scrollContainer.offsetHeight;
  //   if (
  //     scrollTop >= scrollContainerOffset &&
  //     scrollTop <= scrollContainerOffset + scrollContainerHeight
  //   ) {
  //     scrollContainer.classList.add("fixed-scroll");
  //   } else {
  //     scrollContainer.classList.remove("fixed-scroll");
  //   }
  // });
  // window.addEventListener("scroll", function () {
  //   const scrollTop = window.scrollY;
  //   console.log(scrollTop);
  //   if (scrollTop >= 1450 && scrollTop <= 1550) {
  //     document.documentElement.scrollTop = 1450; // Останавливаем прокрутку на 1450px
  //     // swiper.slideTo(2, 1000);
  //   }
  // });
  // function test() {
  // console.log("?");
  // const scrollTop = window.scrollY;
  // document.querySelector(".scroller").style.top = `${scrollTop}px`;
  // const mOffsetTop = parseInt(document.querySelector(".scroller").style.top);
  // const s2 = document.querySelector(".s2");
  // console.log(mOffsetTop);
  // 1400
  // if (mOffsetTop >= 1400 && mOffsetTop <= 2500) {
  // s2.style.transform = `translateY(${mOffsetTop - 1400}px)`;
  // swiper.slideTo(1, 1000);
  // if (mOffsetTop > 1499 && mOffsetTop < 1599) {
  //   // swiper.slideTo(2, 1000);
  // } else if (mOffsetTop > 1599 && mOffsetTop < 1699) {
  //   // swiper.slideTo(3, 1000);
  // }
  // }
  // if (mOffsetTop >= 1455) {
  //   // document.documentElement.style.overflow = "hidden";
  // } else if (mOffsetTop <= 1450) {
  // }
  // document.documentElement.style.overflow = "auto";
  // console.log(scrollTop);
  // console.log(parseInt(document.body.style.top));
  // if(document.body.style.top == "1450px")
  // 1455
  // if (scrollTop >= 1455) {
  //   document.documentElement.style.overflow = "hidden";
  // }
  // if (scrollTop >= 1455) {
  //   // s2.style.transform = "translateY(100px)";
  //   swiper.slideTo(2, 1000);
  // } else if (scrollTop >= 1550) {
  //   swiper.slideTo(3, 1000);
  // } else if (scrollTop < 1450) {
  //   swiper.slideTo(1, 1000);
  // }
  // }
  // function test(event) {
  //   const scrollTop = window.scrollY;
  //   window.document.body.style.top = `${scrollTop}px`;
  //   const mOffsetTop = parseInt(window.document.body.style.top);
  //   const s2 = document.querySelector(".s2");
  //   console.log(mOffsetTop);
  //   // 1400
  //   if (mOffsetTop >= 1400 && mOffsetTop <= 1700) {
  //     s2.style.transform = `translateY(${mOffsetTop - 1400}px)`;
  //     swiper.slideTo(0, 1000);
  //     if (mOffsetTop >= 1500) {
  //       swiper.slideTo(1, 1000);
  //     }
  //     if (mOffsetTop >= 1600) {
  //       swiper.slideTo(2, 1000);
  //     }
  //   }
  // }
  // window.addEventListener("scroll", test);
  // function test(event) {
  //   const scrollTop = window.scrollY;
  //   window.document.body.style.top = `${scrollTop}px`;
  //   const mOffsetTop = parseInt(window.document.body.style.top);
  //   const s2 = document.querySelector(".s2");
  //   // Плавное движение блока s2
  //   if (mOffsetTop >= 1400 && mOffsetTop <= 1700) {
  //     const translateY = Math.max(0, Math.min(mOffsetTop - 1400, 300)); // Ограничение значения translateY от 0 до 300
  //     s2.style.transition = "transform 0.3s ease"; // Добавляем плавный переход
  //     s2.style.transform = `translateY(${translateY}px)`; // Применяем значение translateY
  //   }
  //   // Плавное переключение слайдов в Swiper
  //   // if (mOffsetTop >= 1500) {
  //   //   swiper.slideTo(1, 1000);
  //   // } else if (mOffsetTop >= 1600) {
  //   //   swiper.slideTo(2, 1000);
  //   // } else {
  //   //   swiper.slideTo(0, 1000);
  //   // }
  // }
  window.addEventListener("scroll", function () {
    const scrollingBlock = document.querySelector(".scrolling-block");
    const container = document.querySelector(".scroll-container");
    const containerRect = container.getBoundingClientRect();
    const scrollTop = window.scrollY || window.pageYOffset;

    console.log(scrollTop);

    if (scrollTop >= 1400 && scrollTop <= 1800) {
      if (scrollingBlock.classList.contains("fixed") == false) {
        console.log("fixed");
        scrollingBlock.classList.add("fixed");
        scrollingBlock.style.top = "-512px";
      }
    } else if (scrollTop <= 1400) {
      if (scrollingBlock.classList.contains("fixed") == true) {
        scrollingBlock.classList.remove("fixed");
        scrollingBlock.style.top = "888px";
      }

    } else if (scrollTop >= 1800) {
      if (scrollingBlock.classList.contains("fixed") == true) {
        scrollingBlock.classList.remove("fixed");
        scrollingBlock.style.top = "1288px";
      }
    }

    if (scrollTop >= 1401 && scrollTop <= 1500) swiper.slideTo(0, 1000);
    else if (scrollTop >= 1501 && scrollTop <= 1600) swiper.slideTo(1, 1000);
    else if (scrollTop >= 1601 && scrollTop <= 1700) swiper.slideTo(2, 1000);

    // if (scrollTop >= 1400 && scrollTop <= 1800) {
    //   // scrollingBlock.style.position = "fixed";
    //   // scrollingBlock.style.top = "-497px";
    //   // scrollingBlock.style.top = `${scrollTop - 1400 + 888}px`;
    //   // scrollingBlock.style.top = "-495px";
    //   // scrollingBlock.style.top = "unset";
    //   // scrollingBlock.style.bottom = "0px";
    //   scrollingBlock.style.transform = `translate(-50%, ${scrollTop - 1400}px)`;
    // } else {
    //   // scrollingBlock.style.position = "absolute";
    //   // scrollingBlock.style.top = "1288px";
    //   // scrollingBlock.style.bottom = "unset";
    // }

    // if (scrollTop <= 1400) {
    //   // scrollingBlock.style.position = "absolute";
    //   scrollingBlock.style.transform = `translate(-50%, 0px)`;
    //   // scrollingBlock.style.bottom = "unset";
    // }

    // if (scrollTop >= 1800) {
    //   // scrollingBlock.style.position = "absolute";
    //   // scrollingBlock.style.top = "1288px";
    //   // scrollingBlock.style.bottom = "unset";
    //   // scrollingBlock.style.marginTop = "-697px";
    //   // scrollingBlock.style.position = "static";
    // }

    //
  });
})();

// 3d s1
(() => {
  const block = document.querySelector(".block");
  const container = document.querySelector(".s1");
  const container_centered = document.querySelector(".center-block");
  let offsetX = 0;
  let offsetY = 0;

  // let prevOffsetX = 0;
  // let prevOffsetY = 0;

  container.addEventListener("mousemove", moveBlock);
  // container.addEventListener("mouseleave", savePosition);

  function moveBlock(e) {
    const mouseX = e.clientX;
    const mouseY = e.clientY;
    const blockRect = block.getBoundingClientRect();
    const distanceX = mouseX - blockRect.left - blockRect.width / 2;
    const distanceY = mouseY - blockRect.top - blockRect.height / 2;

    offsetX = distanceX * 0.0055;
    offsetY = distanceY * 0.0055;
    block.style.transform = `translate(${offsetX}px, ${offsetY}px)`;

    offsetX_center = distanceX * 0.0095;
    offsetY_center = distanceY * 0.0095;
    container_centered.style.transform = `translate(${offsetX_center}px, ${offsetY_center}px)`;
  }

  // function savePosition() {
  //   prevOffsetX += offsetX;
  //   prevOffsetY += offsetY;
  //   block.style.transform = `translate(${prevOffsetX}px, ${prevOffsetY}px)`;
  // }
})();

// Функция для генерации случайных чисел в заданном диапазоне
(() => {
  function getRandom(min, max) {
    return Math.random() * (max - min) + min;
  }

  // Генерация SVG звезд
  let svg =
    '<svg width="1920" height="916" viewBox="0 0 1920 916" fill="none" xmlns="http://www.w3.org/2000/svg">';

  for (let i = 0; i < 500; i++) {
    let cx = getRandom(0, 1920);
    let cy = getRandom(0, 916);

    svg += `<circle cx="${cx}" cy="${cy}" r="0.5" fill="#8B9FCE">
							 <animate attributeName="cy" dur="${getRandom(6, 12)}s" values="${cy}; ${
      cy - getRandom(50, 150)
    }" repeatCount="indefinite" />
							 <animate attributeName="opacity" dur="${getRandom(
                 6,
                 12
               )}s" values="1; 0" repeatCount="indefinite" />
						</circle>`;
  }

  svg += "</svg>";
  // console.log(svg);
})();
