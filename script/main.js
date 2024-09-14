// animation
AOS.init();

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
  const btns = document.querySelectorAll('.ppl-viewer__bottom-item');
  const items = document.querySelectorAll('.ppl-viewer__main-container');
  const cont = document.querySelector(".ppl-viewer-cont");
  const allIcons = document.querySelectorAll(".ppl-viewer__main-container-end-decoration-icon");

  function funk(){
    const item = this;
    
    // items.forEach(e => e.classList.remove("active"));
    if(item.classList.contains("ppl-viewer__bottom-item--1")){
      console.log("active 1");
      cont.style.transform = "translateX(-25.2%)";

      btns.forEach(e => e.classList.remove("active"));
      btns[0].classList.add("active");

      allIcons.forEach(e => e.classList.remove("active"));
      let icon1 = items[1].querySelector(".ppl-viewer__main-container-end-decoration-icon--1");
      icon1.classList.add("active");
      let icon2 = items[1].querySelector(".ppl-viewer__main-container-end-decoration-icon--2");
      icon2.classList.add("active");
      let icon3 = items[1].querySelector(".ppl-viewer__main-container-end-decoration-icon--3");
      icon3.classList.add("active");
      let icon4 = items[1].querySelector(".ppl-viewer__main-container-end-decoration-icon--4");
      icon4.classList.add("active");
    }
    else if(item.classList.contains("ppl-viewer__bottom-item--2")){
      console.log("active 2");
      cont.style.transform = "translateX(-50.4%)";

      btns.forEach(e => e.classList.remove("active"));
      btns[1].classList.add("active");

      allIcons.forEach(e => e.classList.remove("active"));
      let icon1 = items[2].querySelector(".ppl-viewer__main-container-end-decoration-icon--1");
      icon1.classList.add("active");
      let icon2 = items[2].querySelector(".ppl-viewer__main-container-end-decoration-icon--2");
      icon2.classList.add("active");
      let icon3 = items[2].querySelector(".ppl-viewer__main-container-end-decoration-icon--3");
      icon3.classList.add("active");
      let icon4 = items[2].querySelector(".ppl-viewer__main-container-end-decoration-icon--4");
      icon4.classList.add("active");
    }
    else if(item.classList.contains("ppl-viewer__bottom-item--3")){
      cont.style.transform = "translateX(-75.6%)";

      btns.forEach(e => e.classList.remove("active"));
      btns[2].classList.add("active");

      allIcons.forEach(e => e.classList.remove("active"));
      let icon1 = items[3].querySelector(".ppl-viewer__main-container-end-decoration-icon--1");
      icon1.classList.add("active");
      let icon2 = items[3].querySelector(".ppl-viewer__main-container-end-decoration-icon--2");
      icon2.classList.add("active");
      let icon3 = items[3].querySelector(".ppl-viewer__main-container-end-decoration-icon--3");
      icon3.classList.add("active");
      let icon4 = items[3].querySelector(".ppl-viewer__main-container-end-decoration-icon--4");
      icon4.classList.add("active");
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
  function funk(){
    const item = this;
    
    // items.forEach(e => e.classList.remove("active"));
    if(item.classList.contains("ss2__navigation-btn--1")){
      items.forEach(e => e.classList.remove("active-effect"));
      btns.forEach(e => e.classList.remove("active"));
      // setTimeout(() => {
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
      // }, 200);
    }
    else if(item.classList.contains("ss2__navigation-btn--2")){
      items.forEach(e => e.classList.remove("active-effect"));
      btns.forEach(e => e.classList.remove("active"));
      // setTimeout(() => {
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
      // }, 200);
    }
    else if(item.classList.contains("ss2__navigation-btn--3")){
      items.forEach(e => e.classList.remove("active-effect"));
      btns.forEach(e => e.classList.remove("active"));
      // setTimeout(() => {
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
      // }, 200);
    }
    else if(item.classList.contains("ss2__navigation-btn--4")){
      items.forEach(e => e.classList.remove("active-effect"));
      btns.forEach(e => e.classList.remove("active"));
      // setTimeout(() => {
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
      // }, 200);
    }

    console.log(item)

  }
  if(btns) btns.forEach(e => e.addEventListener("click", funk));
}) ();

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
        content.style.maxHeight = `${textHeight + 24}rem`;
        content.style.paddingBottom = "24rem";

        // x.style.paddingBottom = "0rem";

      } else {
        content.style.maxHeight = "0";
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