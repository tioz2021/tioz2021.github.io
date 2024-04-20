// other
(() => {
  // init AOS
  AOS.init({
    once: true, // Глобально устанавливаем опцию once для всех анимаций
    duration: 800,
  });

  // preloader
  document.addEventListener("DOMContentLoaded", function () {
    if (document.querySelector(".preloader")) {
      setTimeout(() => {
        if (document.querySelector(".preloader"))
          document.querySelector(".preloader").classList.add("disabled");
        // document.querySelector(".main-wrp").classList.add("active");
      }, 1000);
      setTimeout(() => {
        if (document.querySelector(".preloader"))
          document.querySelector(".preloader").style.zIndex = "-1";
        // document.querySelector(".main-wrp").classList.add("active");
      }, 2000);

      // fs main page animation timing
      if (document.querySelector(".s1__decoration-bg lottie-player")) {
        setTimeout(() => {
          document
            .querySelector(".s1__decoration-bg--left lottie-player")
            .play();
        }, 1225);

        setTimeout(() => {
          document
            .querySelector(".s1__decoration-bg--right lottie-player")
            .play();
        }, 1625);
      }
    }

    // card lottie animation timing
    if (
      document.querySelector(".card-box__decoration-img--one lottie-player")
    ) {
      document
        .querySelector(".card-box__decoration-img--one lottie-player")
        .play();

      setTimeout(() => {
        document
          .querySelector(".card-box__decoration-img--two lottie-player")
          .play();
      }, 1000);
    }
  });
})();

// slider?
(() => {
  // var s3_swiper = new Swiper(".s3__swiper", {
  //   slidesPerView: 1,
  //   spaceBetween: 10,
  //   loop: true,
  //   effect: "fade",
  //   grabCursor: true,
  //   pagination: {
  //     el: ".swiper-pagination",
  //     clickable: true,
  //   },
  // });
  // if (s3_swiper) s3_swiper.disable();
})();

// box selected
(() => {
  document.addEventListener("DOMContentLoaded", function () {
    const selectBox = document.querySelectorAll(".select-box");

    selectBox.forEach((e) => {
      const dropdown = e.querySelector(".dropdown");
      const options = e.querySelectorAll(".option");
      const selectedCount = e.querySelector(".selected-count");
      // const selectedItemsInput = document.getElementById("selectedItemsMainForm");

      // toggler
      e.addEventListener("click", function () {
        dropdown.classList.toggle("dropdown-active");
        dropdown.parentNode.classList.toggle("disabled-border");
        console.log(dropdown.parentNode);
      });
      // e.addEventListener("click", function () {
      //   dropdown.style.display =
      //     dropdown.style.display === "none" ? "block" : "none";
      // });

      options.forEach(function (option) {
        option.addEventListener("click", function () {
          console.log(option);
          options.forEach(function (opt) {
            opt.classList.remove("selected");
          });
          this.classList.add("selected");
          updateSelectedCount();
          updateSelectedItems();
        });
      });

      function updateSelectedCount() {
        const selectedOption = e.querySelector(".option.selected");
        const selectedText = selectedOption
          ? selectedOption.textContent
          : "Ничего не выбрано";
        selectedCount.textContent = selectedText;
      }

      function updateSelectedItems() {
        const selectedOption = e.querySelector(".option.selected");
        const selectedText = selectedOption ? selectedOption.textContent : "";
        // selectedItemsInput.value = selectedText;
      }
    });
  });
})();

// toggled popups
(() => {
  document.addEventListener("DOMContentLoaded", function () {
    const openBtns = document.querySelectorAll(".openBtn");

    openBtns.forEach((openBtn) => {
      openBtn.addEventListener("click", function (evt) {
        evt.preventDefault();
        let popup = "";
        if (openBtn.classList.contains("openBtn1")) {
          popup = document.querySelector(".popup1");
        } else if (openBtn.classList.contains("openBtn2")) {
          popup = document.querySelector(".popup2");
        } else {
          popup = document.querySelector(".popup-form");
        }
        const popupContent = popup.querySelector(".popup-content");

        // Закрываем все открытые попапы
        const allPopups = document.querySelectorAll(".popup");
        allPopups.forEach((popup) => {
          popup.classList.remove("open");
          popup.querySelector(".popup-content").classList.remove("open");
        });

        popup.classList.add("open");
        popupContent.classList.add("open");

        // play animation popup1
        if (openBtn.classList.contains("openBtn1")) {
          setTimeout(() => {
            document
              .querySelector(".popup1 .popup__decor--one lottie-player")
              .play();
          }, 150);
          setTimeout(() => {
            document
              .querySelector(".popup1 .popup__decor--two lottie-player")
              .play();
          }, 250);
        } else if (openBtn.classList.contains("openBtn2")) {
          setTimeout(() => {
            document
              .querySelector(".popup2 .popup__decor--one lottie-player")
              .play();
          }, 150);
          setTimeout(() => {
            document
              .querySelector(".popup2 .popup__decor--two lottie-player")
              .play();
          }, 250);
        }
        // END play animation popup1

        const closeBtn = popup.querySelectorAll(".closeBtn");
        closeBtn.forEach((e) => {
          e.addEventListener("click", function () {
            popup.classList.remove("open");
            popupContent.classList.remove("open");
          });
        });
      });
    });

    document.addEventListener("click", function (event) {
      const openBtnsArray = Array.from(openBtns); // Конвертируем NodeList в массив
      const allPopups = document.querySelectorAll(".popup");
      allPopups.forEach((popup) => {
        const popupContent = popup.querySelector(".popup-content");
        if (
          !popupContent.contains(event.target) &&
          !openBtnsArray.some((openBtn) => openBtn.contains(event.target))
        ) {
          popup.classList.remove("open");
          popupContent.classList.remove("open");
        }
      });
    });
  });
})();

// toggled cardHeader
(() => {
  const lists = document.querySelectorAll(".card-header__bottom-list");
  const btns = document.querySelectorAll(".open-header-list");
  const header = document.querySelector(".card-header__container"); // Получаем блок card-header

  const decor1 = document.querySelector(
    ".open-header-list1 .card-header__arrow-bottom"
  );
  const decor2 = document.querySelector(
    ".open-header-list2 .card-header__arrow-bottom"
  );

  function toggledHeader() {
    const targetIndex = Array.from(btns).indexOf(this);
    const targetList = lists[targetIndex];

    if (targetList.classList.contains("card-header__bottom-list--active")) {
      targetList.classList.remove("card-header__bottom-list--active");
      decor1.classList.remove("active");
      decor2.classList.remove("active");
      return;
    }

    lists.forEach((list) =>
      list.classList.remove("card-header__bottom-list--active")
    );
    targetList.classList.add("card-header__bottom-list--active");

    if (lists[0].classList.contains("card-header__bottom-list--active")) {
      decor1.classList.add("active");
      decor2.classList.remove("active");
    }
    if (lists[1].classList.contains("card-header__bottom-list--active")) {
      decor2.classList.add("active");
      decor1.classList.remove("active");
    }
  }

  function closeAllLists() {
    lists.forEach((list) =>
      list.classList.remove("card-header__bottom-list--active")
    );
    decor1.classList.remove("active");
    decor2.classList.remove("active");
  }

  if (btns) {
    btns.forEach((btn) => {
      btn.addEventListener("click", toggledHeader);
    });
  }

  // Добавляем обработчик события для блока card-header
  if (header) {
    header.addEventListener("mouseleave", closeAllLists);
  }
})();

// animations
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
          console.log(entry);
          // Запускаем анимацию или выполняем нужные действия

          if (entry.target.classList.contains("s2__main-img--center") == true) {
            entry.target.classList.add("anim");
            setTimeout(() => {
              document.querySelector(".s2__decor--left lottie-player").play();
            }, 750);
            setTimeout(() => {
              document.querySelector(".s2__decor--right lottie-player").play();
            }, 850);
          }

          if (entry.target.classList.contains("s3__last-text") == true) {
            // entry.target.classList.add("anim");
            document.querySelector(".s3__main-title-img").classList.add("anim");
            setTimeout(() => {
              document.querySelector(".s3__decor--left lottie-player").play();
            }, 150);
            setTimeout(() => {
              document.querySelector(".s3__decor--right lottie-player").play();
            }, 250);
          }

          if (entry.target.classList.contains("wrp") == true) {
            entry.target.classList.add("anim");
          }

          // if (entry.target.classList.contains("popup2") == true) {
          //   setTimeout(() => {
          //     document
          //       .querySelector(".popup2 .popup__decor--one lottie-player")
          //       .play();
          //   }, 150);
          //   setTimeout(() => {
          //     document
          //       .querySelector(".popup2 .popup__decor--two lottie-player")
          //       .play();
          //   }, 250);
          // }

          // После того, как анимация выполнена, можно отключить наблюдение, если оно больше не нужно
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 1, delay: 100 }
  ); // Устанавливаем порог пересечения 100% и задержку 1 секунда

  // Список селекторов для анимации
  const selectors = [
    ".s2__main-img--center",
    ".s3__last-text",
    ".footer__decoration-box .wrp",
  ];

  selectors.forEach((selector) => {
    // Находим блок для текущего селектора
    const blockToAnimate = document.querySelector(selector);
    // Начинаем наблюдение за блоком
    if (!blockToAnimate) return;
    observer.observe(blockToAnimate);
  });
})();
