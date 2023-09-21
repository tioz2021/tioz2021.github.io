// swiper media active
(() => {
  var mySwiper1 = null; // Переменная для хранения экземпляра Swiper 1
  var mySwiper2 = null; // Переменная для хранения экземпляра Swiper 2

  function initSwiper1() {
    if (window.innerWidth < 1000) {
      if (!mySwiper1 || mySwiper1.destroyed) {
        mySwiper1 = new Swiper("#swiper-container-1", {
          loop: true,
          slidesPerView: 1,
          spaceBetween: 10,
          // And if we need scrollbar
          scrollbar: {
            el: ".swiper-scrollbar",
          },
        });
      }
    } else if (mySwiper1 && !mySwiper1.destroyed) {
      mySwiper1.destroy(true, true); // Уничтожаем Swiper 1
      mySwiper1 = null;
    }
  }

  function initSwiper2() {
    if (window.innerWidth < 600) {
      if (!mySwiper2 || mySwiper2.destroyed) {
        mySwiper2 = new Swiper("#swiper-container-2", {
          slidesPerView: 3,
          loop: true,
          spaceBetween: 4,
          speed: 750,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
        });
        // Вручную скопируйте слайды для циклического перелистывания
        var originalSlides = document.querySelectorAll(
          "#swiper-container-2 .swiper-slide"
        );
        var duplicatedSlides = [];

        originalSlides.forEach(function (slide) {
          var duplicate = slide.cloneNode(true);
          duplicatedSlides.push(duplicate);
        });

        duplicatedSlides.forEach(function (duplicate) {
          document
            .querySelector("#swiper-container-2 .swiper-wrapper")
            .appendChild(duplicate);
        });
      }
    } else if (mySwiper2 && !mySwiper2.destroyed) {
      mySwiper2.destroy(true, true); // Уничтожаем Swiper 2
      mySwiper2 = null;
    }
  }

  // Инициализация Swiper при загрузке страницы
  window.addEventListener("load", function () {
    initSwiper1();
    initSwiper2();
  });

  // Отслеживание изменения размера окна браузера
  window.addEventListener("resize", function () {
    clearTimeout(window.resizeTimeout);
    window.resizeTimeout = setTimeout(function () {
      initSwiper1();
      initSwiper2();
    }, 300); // Ожидаем 300 миллисекунд после окончания изменения размера
  });
})();

// acardion
(() => {
  // Получаем все элементы аккордеона
  const accordionItems = document.querySelectorAll(".accordion-item");

  // Добавляем обработчик события для каждого элемента аккордеона
  accordionItems.forEach((item) => {
    const header = item.querySelector(".accordion-header");
    const content = item.querySelector(".accordion-content");

    header.addEventListener("click", () => {
      // Переключаем класс 'active' для заголовка текущего элемента
      header.classList.toggle("active");

      // Закрываем все другие элементы аккордеона
      accordionItems.forEach((otherItem) => {
        if (otherItem !== item) {
          otherItem
            .querySelector(".accordion-header")
            .classList.remove("active");
          otherItem.querySelector(".accordion-content").style.maxHeight = "0";
        }
      });

      // Устанавливаем максимальную высоту для текущего элемента в rem
      if (header.classList.contains("active")) {
        // Получаем высоту текста внутри .accordion-content и устанавливаем в rem
        const textHeight = content.scrollHeight;
        content.style.maxHeight = `${textHeight}px`;
      } else {
        content.style.maxHeight = "0";
      }
    });
  });
})();

// form validation and opens popups
(() => {
  // form validation
  // Получаем все формы
  const forms = document.querySelectorAll(".myForm");

  // фон для попапов
  const popupBackgroundsOne = document.querySelector(".popup-backgrounds");

  // Функция для проверки валидности номера телефона
  function isPhoneValid(phone) {
    // Проверяем, что номер телефона содержит только цифры и имеет длину 10 символов
    const phonePattern = /^\d{7,}$/;
    return phonePattern.test(phone);
  }

  // Обработчик события отправки формы для каждой формы
  forms.forEach((form) => {
    form.addEventListener("submit", function (event) {
      // Отменяем отправку формы по умолчанию
      event.preventDefault();

      // Получаем поля и сообщения об ошибках для текущей формы
      const nameInput = form.querySelector('input[name^="name"]');
      const phoneInput = form.querySelector('input[name^="phone"]');
      // const nameError = form.querySelector('span[id^="nameError"]');
      // const phoneError = form.querySelector('span[id^="phoneError"]');

      // Получаем введенные значения
      const enteredName = nameInput.value;
      const enteredPhone = phoneInput.value;

      // Флаги для проверки валидности полей
      let isNameValidFlag = enteredName.length >= 2;
      let isPhoneValidFlag = isPhoneValid(enteredPhone);

      // Проверяем валидность имени и телефона
      if (isNameValidFlag) {
        // nameError.textContent = "";
        nameInput.style.border = "2rem solid #fff"; // Убираем красную рамку
      } else {
        // nameError.textContent = "Имя должно содержать не менее 2 символов.";
        nameInput.style.border = "2rem solid #CA2626"; // Устанавливаем красную рамку
      }

      if (isPhoneValidFlag) {
        // phoneError.textContent = "";
        phoneInput.style.border = "2rem solid #fff"; // Убираем красную рамку
      } else {
        // phoneError.textContent =
        //   "Пожалуйста, введите корректный номер телефона (7 цифр).";
        phoneInput.style.border = "2rem solid #CA2626"; // Устанавливаем красную рамку
      }

      // Проверяем, могла ли форма быть отправлена
      if (isNameValidFlag && isPhoneValidFlag) {
        // Оба поля валидны, здесь можно отправить форму на сервер или выполнить другие действия
        // В этом примере форма не отправляется, так как мы не имеем сервера

        document.querySelector("#popup__form").style.opacity = "0";
        setTimeout(() => {
          document.querySelector("#popup__form").style.display = "none";
        }, 300);
        document.querySelector("#popup__form-end").style.display = "block";
        popupBackgroundsOne.style.display = "block";
        setTimeout(() => {
          document.querySelector("#popup__form-end").style.opacity = "1";
          popupBackgroundsOne.style.opacity = "1";
        }, 10);
      }
    });
  });

  // opens popups
  // Получаем все кнопки, фоновые поля и попапы
  const openPopupButtons = document.querySelectorAll(".openPopupButton");
  const closePopupButtons = document.querySelectorAll(".closePopupButton");
  const popupBackgrounds = document.querySelectorAll(".popup-background");

  // Добавляем обработчики событий для кнопок открытия
  openPopupButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const targetPopupId = button.getAttribute("data-popup");
      const targetPopup = document.getElementById(targetPopupId);

      if (targetPopupId == "police-popup") {
        closePopup(document.querySelector("#popup__form"), "police-popup");
      }

      targetPopup.style.display = "block";
      popupBackgroundsOne.style.display = "block";
      setTimeout(() => {
        popupBackgroundsOne.style.opacity = "1";
        targetPopup.style.opacity = "1";
      }, 10);
    });
  });

  // Добавляем обработчики событий для кнопок закрытия
  closePopupButtons.forEach((button) => {
    button.addEventListener("click", () => {
      closePopup(button.closest(".popup-background"));
    });
  });

  // Добавляем обработчики событий для фоновых полей
  popupBackgrounds.forEach((popupBackground) => {
    popupBackground.addEventListener("click", (e) => {
      if (e.target === popupBackground) {
        closePopup(popupBackground);
      }
    });
  });

  function closePopup(popup, id = "") {
    if (id == "police-popup") {
      popup.style.opacity = "0";
      setTimeout(() => {
        popup.style.display = "none";
      }, 300); // Установите желаемую продолжительность анимации в миллисекундах
    } else {
      popup.style.opacity = "0";
      popupBackgroundsOne.style.opacity = "0";
      setTimeout(() => {
        popup.style.display = "none";
        popupBackgroundsOne.style.display = "none";
      }, 300); // Установите желаемую продолжительность анимации в миллисекундах
    }
  }
})();

new WOW().init();

// parallax
(() => {
  window.addEventListener("scroll", function () {
    const images = document.querySelectorAll(".s3__img-obj");
    const startStickyAt = 200; // Установите желаемую высоту начала изменений

    images.forEach((image) => {
      const imagePosition = image.getBoundingClientRect().top;
      if (imagePosition <= startStickyAt) {
        image.style.transform = "translateY(0)";
      } else {
        image.style.transform = "translateY(-10%)";
      }
    });
  });
})();

// const list = document.querySelector(".s3__banner-tag-list");
// const items = document.querySelectorAll(".s3__banner-tag-list-item");
// const itemWidth = items[0].offsetWidth + 20; // Ширина элемента + отступ (20px)

// let currentScroll = 0;

// function moveList() {
//   currentScroll -= 1;
//   if (currentScroll <= -itemWidth) {
//     currentScroll = 0;
//     list.style.transition = "none";
//   } else {
//     list.style.transition = "transform 2s linear"; // Время анимации (2 секунды)
//   }
//   list.style.transform = `translateX(${currentScroll}px)`;
//   requestAnimationFrame(moveList);
// }

// requestAnimationFrame(moveList);
