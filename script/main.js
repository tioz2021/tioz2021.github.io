(() => {
  // animation
  AOS.init();
  
  const swiper = new Swiper('.swiper', {
    // loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    speed: 750,
  });

  const btns = document.querySelectorAll(".ppl-viewer__bottom-container--mobile .ppl-viewer__bottom-item");
  function f() {
    if(this.classList.contains("ppl-viewer__bottom-item--1")){
      swiper.slideTo(0);
    }
    else if(this.classList.contains("ppl-viewer__bottom-item--2")){
      swiper.slideTo(1);
    }
    else if(this.classList.contains("ppl-viewer__bottom-item--3")){
      swiper.slideTo(2);
    }
  }

  if(btns) btns.forEach(e => e.addEventListener("click", f));



  const line = document.querySelector(".ppl-viewer__bottom-container--mobile");
  const icons1 = document.querySelectorAll(".swiper .ppl-viewer__main-container--1 .ppl-viewer__main-container-end-decoration-icon");
  const icons2 = document.querySelectorAll(".swiper .ppl-viewer__main-container--2 .ppl-viewer__main-container-end-decoration-icon");
  const icons3 = document.querySelectorAll(".swiper .ppl-viewer__main-container--3 .ppl-viewer__main-container-end-decoration-icon");

  // Обработчик события slideChangeTransitionEnd
  swiper.on('slideChangeTransitionEnd', function () {
    // Проверяем, если активный слайд 2 (индекс 1)
    if (swiper.activeIndex === 0) {
      console.log("1")
      // line.style.left = "-748rem";
      line.classList.add("active1");
      line.classList.remove("active2");
      line.classList.remove("active3");

      icons1.forEach(e => e.classList.add("active"));
      icons2.forEach(e => e.classList.remove("active"));
      icons3.forEach(e => e.classList.remove("active"));

      setTimeout(() => {
        icons1[0].querySelector("lottie-player").play();
        icons1[1].querySelector("lottie-player").play();
      }, 1000);
      setTimeout(() => {
        icons1[2].querySelector("lottie-player").play();
        icons1[3].querySelector("lottie-player").play();
      }, 1250);
    }
    if (swiper.activeIndex === 1) {
      console.log("2")
      // line.style.left = "-1069rem";
      line.classList.remove("active1");
      line.classList.add("active2");
      line.classList.remove("active3");

      icons1.forEach(e => e.classList.remove("active"));
      icons2.forEach(e => e.classList.add("active"));
      icons3.forEach(e => e.classList.remove("active"));

      setTimeout(() => {
        icons2[0].querySelector("lottie-player").play();
        icons2[1].querySelector("lottie-player").play();
      }, 1000);
      setTimeout(() => {
        icons2[2].querySelector("lottie-player").play();
        icons2[3].querySelector("lottie-player").play();
      }, 1250);
    }
    if (swiper.activeIndex === 2) {
      console.log("3")
      // line.style.left = "-1393rem";
      line.classList.remove("active1");
      line.classList.remove("active2");
      line.classList.add("active3");

      icons1.forEach(e => e.classList.remove("active"));
      icons2.forEach(e => e.classList.remove("active"));
      icons3.forEach(e => e.classList.add("active"));

      setTimeout(() => {
        icons3[0].querySelector("lottie-player").play();
        icons3[1].querySelector("lottie-player").play();
      }, 1000);
      setTimeout(() => {
        icons3[2].querySelector("lottie-player").play();
        icons3[3].querySelector("lottie-player").play();
      }, 1250);
    }
  });
}) ();

// animation opt
(() => {
  // Создаем новый экземпляр Intersection Observer
  const observer = new IntersectionObserver(
    (entries) => {
      // Перебираем все записи (entries)
      entries.forEach((entry) => {
        // Если блок стал видимым и находится в зоне видимости больше 1 секунды
        if (
          entry.isIntersecting &&
          entry.intersectionRatio >= 0.1 &&
          entry.time >= 100
        ) {
          // let text_elm = entry.target.querySelector(".small-text");
          // Запускаем анимацию или выполняем нужные действия

          if (entry.target.classList.contains("s1__end-btn") == true) {
            // text_elm.classList.add("anim");
            setTimeout(() => {
              let elm = document.querySelector(".s1__end-btn-icon lottie-player");
              elm.play();
              // elm[1].play();
            }, 150);
          }

          if (entry.target.classList.contains("s7__end-btn") == true) {
            setTimeout(() => {
              let elm = document.querySelector(".s7__end-btn-icon lottie-player");
              elm.play();
              // elm[1].play();
            }, 150);
          }

          if (entry.target.classList.contains("ss4__list-item") == true) {
            setTimeout(() => {
              let elm = document.querySelector(".ss4__center-img .start");
              let elm2 = document.querySelector(".ss4__center-img .loop");
              elm.play();
              setTimeout(() => {
                elm.style.display = "none";
                elm2.style.display = "block";
                elm2.play();
              }, 2000)
            }, 150);
          }

          if (entry.target.classList.contains("ss2") == true) {
            let childItems = document.querySelector(".ss2__navigation-body--1").querySelectorAll(".ss2__navigation-item");
            setTimeout(() => {
              childItems[0].classList.add("active");
            }, 100);
            setTimeout(() => {
              childItems[1].classList.add("active");
            }, 150);
            setTimeout(() => {
              childItems[2].classList.add("active");
            }, 250);
          }


          if (entry.target.classList.contains("ss4__end-btn") == true) {
            setTimeout(() => {
              let elm = document.querySelector(".ss4__end-btn lottie-player");
              elm.play();
              // elm[1].play();
            }, 150);
          }

          if (entry.target.classList.contains("s2__title") == true) {
            setTimeout(() => {
              document.querySelector(".s2 .marquee-content").classList.add("marquee-content--active");
            }, 1500);
          }

          if (entry.target.classList.contains("s6__title") == true) {
            setTimeout(() => {
              console.log("active?");
              let icons = document.querySelectorAll(".ppl-viewer__main-container--1 .ppl-viewer__main-container-end-decoration-icon");
              // if (!icons) return;
              icons.forEach(e => e.classList.add("active"));

              setTimeout(() => {
                icons[0].querySelector("lottie-player").play();
                icons[4].querySelector("lottie-player").play();

                icons[3].querySelector("lottie-player").play();
                icons[7].querySelector("lottie-player").play();

                icons[1].querySelector("lottie-player").play();
                icons[5].querySelector("lottie-player").play();
              }, 1000);
              setTimeout(() => {
                icons[2].querySelector("lottie-player").play();
                icons[6].querySelector("lottie-player").play();

                icons[3].querySelector("lottie-player").play();
                icons[1].querySelector("lottie-player").play();
              }, 1000);
              setTimeout(() => {
                icons[2].querySelector("lottie-player").play();

              }, 1250);
            }, 150);
          }

          // После того, как анимация выполнена, можно отключить наблюдение, если оно больше не нужно
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 1, delay: 100 }
  ); // Устанавливаем порог пересечения 100% и задержку 1 секунда

  // Список селекторов для анимации
  const selectors = [
    ".s1__end-btn",
    ".s7__end-btn",
    ".ss4__list-item",
    ".ss4__end-btn",
    ".ss2",
    ".s6__title",
    ".s2__title",
  ];

  // Проходимся по списку селекторов
  selectors.forEach((selector) => {
    // Находим блок для текущего селектора
    const blockToAnimate = document.querySelector(selector);
    // Начинаем наблюдение за блоком
    if (!blockToAnimate) return;
    observer.observe(blockToAnimate);
  });
})();


// s6 changer
(() => {
  const btns = document.querySelectorAll('.ppl-viewer__bottom-container--web .ppl-viewer__bottom-item');
  const items = document.querySelectorAll('.ppl-viewer__main-container');
  const cont = document.querySelector(".ppl-viewer-cont");
  const allIcons = document.querySelectorAll(".ppl-viewer__main-container-end-decoration-icon");

  function funk(){
    const item = this;

    if(item.classList.contains("ppl-viewer__bottom-item--1")){
      console.log("active 1");
      cont.style.transform = "translateX(0%)";

      btns.forEach(e => e.classList.remove("active"));
      btns[0].classList.add("active");

      allIcons.forEach(e => e.classList.remove("active"));
      let icon1 = items[0].querySelector(".ppl-viewer__main-container-end-decoration-icon--1");
      icon1.classList.add("active");
      let icon2 = items[0].querySelector(".ppl-viewer__main-container-end-decoration-icon--2");
      icon2.classList.add("active");
      let icon3 = items[0].querySelector(".ppl-viewer__main-container-end-decoration-icon--3");
      icon3.classList.add("active");
      let icon4 = items[0].querySelector(".ppl-viewer__main-container-end-decoration-icon--4");
      icon4.classList.add("active");

      // animate icon
      setTimeout(() => {
        icon1.querySelector("lottie-player").play();
        icon4.querySelector("lottie-player").play();
        icon2.querySelector("lottie-player").play();
      }, 1000);
      setTimeout(() => {
        icon3.querySelector("lottie-player").play();
      }, 1250);
    }
    else if(item.classList.contains("ppl-viewer__bottom-item--2")){
      console.log("active 2");
      cont.style.transform = "translateX(-34.35%)";

      btns.forEach(e => e.classList.remove("active"));
      btns[1].classList.add("active");

      allIcons.forEach(e => e.classList.remove("active"));
      let icon1 = items[1].querySelector(".ppl-viewer__main-container-end-decoration-icon--1");
      icon1.classList.add("active");
      let icon2 = items[1].querySelector(".ppl-viewer__main-container-end-decoration-icon--2");
      icon2.classList.add("active");
      let icon3 = items[1].querySelector(".ppl-viewer__main-container-end-decoration-icon--3");
      icon3.classList.add("active");
      let icon4 = items[1].querySelector(".ppl-viewer__main-container-end-decoration-icon--4");
      icon4.classList.add("active");

      // animate icon      
      setTimeout(() => {
        icon1.querySelector("lottie-player").play();
        icon4.querySelector("lottie-player").play();
        icon2.querySelector("lottie-player").play();
      }, 1000);
      setTimeout(() => {
        icon3.querySelector("lottie-player").play();
      }, 1250);
    }
    else if(item.classList.contains("ppl-viewer__bottom-item--3")){
      cont.style.transform = "translateX(-68.75%)";

      btns.forEach(e => e.classList.remove("active"));
      btns[2].classList.add("active");

      allIcons.forEach(e => e.classList.remove("active"));
      let icon1 = items[2].querySelector(".ppl-viewer__main-container-end-decoration-icon--1");
      icon1.classList.add("active");
      let icon2 = items[2].querySelector(".ppl-viewer__main-container-end-decoration-icon--2");
      icon2.classList.add("active");
      let icon3 = items[2].querySelector(".ppl-viewer__main-container-end-decoration-icon--3");
      icon3.classList.add("active");
      let icon4 = items[2].querySelector(".ppl-viewer__main-container-end-decoration-icon--4");
      icon4.classList.add("active");

      // animate icon      
      setTimeout(() => {
        icon1.querySelector("lottie-player").play();
        icon4.querySelector("lottie-player").play();
        icon2.querySelector("lottie-player").play();
      }, 1000);
      setTimeout(() => {
        icon3.querySelector("lottie-player").play();
      }, 1250);
    }

    console.log(item)

  }
  if(btns) btns.forEach(e => e.addEventListener("click", funk));
}) ();

// ss2 cnahger 
(() => {
  const btns = document.querySelectorAll('.ss2__navigation-btn');
  const items = document.querySelectorAll('.ss2__navigation-body');
  const allChildItems = document.querySelectorAll('.ss2__navigation-item');

  function funk() {
    const item = this;

    // items.forEach(e => e.classList.remove("active"));
    if (item.classList.contains("ss2__navigation-btn--1")) {
      items.forEach(e => e.classList.remove("active-effect"));
      btns.forEach(e => e.classList.remove("active"));
      items[0].classList.add("active-effect");
      btns[0].classList.add("active");

      allChildItems.forEach(e => e.classList.remove("active"));
      let childItems = items[0].querySelectorAll(".ss2__navigation-item");
      setTimeout(() => {
        childItems[0].classList.add("active");
      }, 100);
      setTimeout(() => {
        childItems[1].classList.add("active");
      }, 200);
      setTimeout(() => {
        childItems[2].classList.add("active");
      }, 300);
    } else if (item.classList.contains("ss2__navigation-btn--2")) {
      items.forEach(e => e.classList.remove("active-effect"));
      btns.forEach(e => e.classList.remove("active"));
      items[1].classList.add("active-effect");
      btns[1].classList.add("active");

      allChildItems.forEach(e => e.classList.remove("active"));
      let childItems = items[1].querySelectorAll(".ss2__navigation-item");
      setTimeout(() => {
        childItems[0].classList.add("active");
      }, 100);
      setTimeout(() => {
        childItems[1].classList.add("active");
      }, 200);
      setTimeout(() => {
        childItems[2].classList.add("active");
      }, 300);
    } else if (item.classList.contains("ss2__navigation-btn--3")) {
      items.forEach(e => e.classList.remove("active-effect"));
      btns.forEach(e => e.classList.remove("active"));
      items[2].classList.add("active-effect");
      btns[2].classList.add("active");

      allChildItems.forEach(e => e.classList.remove("active"));
      let childItems = items[2].querySelectorAll(".ss2__navigation-item");
      setTimeout(() => {
        childItems[0].classList.add("active");
      }, 100);
      setTimeout(() => {
        childItems[1].classList.add("active");
      }, 200);
      setTimeout(() => {
        childItems[2].classList.add("active");
      }, 300);
    } else if (item.classList.contains("ss2__navigation-btn--4")) {
      items.forEach(e => e.classList.remove("active-effect"));
      btns.forEach(e => e.classList.remove("active"));
      items[3].classList.add("active-effect");
      btns[3].classList.add("active");

      allChildItems.forEach(e => e.classList.remove("active"));
      let childItems = items[3].querySelectorAll(".ss2__navigation-item");
      setTimeout(() => {
        childItems[0].classList.add("active");
      }, 100);
      setTimeout(() => {
        childItems[1].classList.add("active");
      }, 200);
      setTimeout(() => {
        childItems[2].classList.add("active");
      }, 300);
    }

    console.log(item);
  }

  // Добавляем поддержку touchstart для мобильных устройств
  if (btns) {
    btns.forEach(e => {
      e.addEventListener("click", funk);
      e.addEventListener("touchstart", funk); // Обработка touch-событий
    });
  }
})();

// acardion
(() => {
  // Получаем все элементы аккордеона
  const accordionItems = document.querySelectorAll(".accordion__item");

  // Добавляем обработчик события для каждого элемента аккордеона
  accordionItems.forEach((item) => {
    const header = item.querySelector(".accordion__header");
    const content = item.querySelector(".accordion__content");
    let x = item.querySelector(".accordion__title");

    header.addEventListener("click", () => {
      // Переключаем класс 'active' для заголовка текущего элемента
      header.classList.toggle("active");

      // Закрываем все другие элементы аккордеона
      accordionItems.forEach((otherItem) => {
        if (otherItem !== item) {
          otherItem
            .querySelector(".accordion__header")
            .classList.remove("active");
          otherItem.querySelector(".accordion__content").style.maxHeight = "0";
          otherItem.querySelector(".accordion__content").style.paddingBottom =
            "0rem";
        }
      });

      // Устанавливаем максимальную высоту для текущего элемента в rem
      if (header.classList.contains("active")) {
        // Получаем высоту текста внутри .accordion__content и устанавливаем в rem
        const textHeight = content.scrollHeight;
        content.style.maxHeight = `${textHeight + 94}rem`;
        content.style.paddingBottom = "24rem";

        // x.style.paddingBottom = "0rem";

      } else {
        content.style.maxHeight = "0rem";
        content.style.paddingBottom = "0rem";
      }
    });
  });
})();

// form
(() => {
  
  const buttonSubmit = document.querySelector(".main-form .main-btn");

  function funk() {
    const inputs = document.querySelectorAll("input");
    const textarea = document.querySelector(".textarea-wrp");
    const customChecbox = document.querySelector(".custom-checkbox span");

    inputs.forEach(e => {
      console.log(e)
      e.classList.add("error");
    })

    textarea.classList.add("error");
    document.querySelector(".textarea-error").classList.add("active");
    customChecbox.classList.add("error");

  }

  if(buttonSubmit) buttonSubmit.addEventListener("click", funk);
}) ();

// header menu
(() => {

  const openMenuBtn = document.querySelector('.tab-menu');
  const menuBody = document.querySelector(".header__nav--mobile");
  const menuBg = document.querySelector(".header__nav--mobile-bg");

  function f() {
    menuBody.classList.toggle("active");
    menuBg.classList.toggle("active");
    openMenuBtn.querySelector(".burger").classList.toggle("active");
  }

  if(openMenuBtn) openMenuBtn.addEventListener("click", f);
  if(menuBg) menuBg.addEventListener("click", f);

}) ();

// popup
(() => {
  document.addEventListener("DOMContentLoaded", function () {

    const openBtn = document.getElementById("openBtn");
    if (!openBtn) {
      return false;
    }
    const popup = document.getElementById("popup");
    const popupContent = document.querySelector(".popup-content");
    const closeBtn = document.getElementById("closeBtn");

    openBtn.addEventListener("click", function () {
      event.preventDefault();
      popup.classList.add("open");
      popupContent.classList.add("open");
    });

    closeBtn.addEventListener("click", function () {
      popup.classList.remove("open");
      popupContent.classList.remove("open");
    });

    document.addEventListener("click", function (event) {
      // Закрываем popup, если клик произошел вне его области
      if (
        !popupContent.contains(event.target) &&
        !openBtn.contains(event.target)
      ) {
        popup.classList.remove("open");
        popupContent.classList.remove("open");
      }
    });
  });
})();