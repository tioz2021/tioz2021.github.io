(() => {
  var s3_swiper = new Swiper(".s3__swiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    effect: "fade",

    pagination: {
      el: ".swiper-pagination",
    },
  });
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

// (() => {
//   document.addEventListener("DOMContentLoaded", function () {
//     let popup = "";
//     const openBtn = document.querySelector(".openBtn");

//     if (!openBtn) {
//       return false;
//     }

//     if (openBtn.classList.contains("openBtn1")) {
//       popup = document.querySelector(".popup1");
//     } else if (openBtn.classList.contains("openBtn2")) {
//       popup = document.querySelector(".popup2");
//     } else {
//       popup = document.querySelector(".popup-form");
//     }

//     const popupContent = popup.querySelector(".popup-content");
//     const closeBtn = popup.querySelectorAll(".closeBtn");

//     openBtn.addEventListener("click", function (evt) {
//       evt.preventDefault();
//       popup.classList.add("open");
//       popupContent.classList.add("open");
//     });

//     closeBtn.forEach((e) => {
//       e.addEventListener("click", function () {
//         popup.classList.remove("open");
//         popupContent.classList.remove("open");
//       });
//     });

//     document.addEventListener("click", function (event) {
//       if (
//         !popupContent.contains(event.target) &&
//         !openBtn.contains(event.target)
//       ) {
//         popup.classList.remove("open");
//         popupContent.classList.remove("open");
//       }
//     });
//   });
// })();

// toggled cardHeader
(() => {
  const lists = document.querySelectorAll(".card-header__bottom-list");
  const btns = document.querySelectorAll(".open-header-list");
  const header = document.querySelector(".card-header__container"); // Получаем блок card-header

  function toggledHeader() {
    const targetIndex = Array.from(btns).indexOf(this);
    const targetList = lists[targetIndex];

    if (targetList.classList.contains("card-header__bottom-list--active")) {
      targetList.classList.remove("card-header__bottom-list--active");
      return;
    }

    lists.forEach((list) =>
      list.classList.remove("card-header__bottom-list--active")
    );
    targetList.classList.add("card-header__bottom-list--active");
  }

  function closeAllLists() {
    lists.forEach((list) =>
      list.classList.remove("card-header__bottom-list--active")
    );
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

// auto change height on textarea
// (() => {
//   const textarea = document.querySelector("textarea");
//   if (textarea) textarea.addEventListener("input", autoResize);
//   function autoResize() {
//     const textarea = this;
//     // var charLimitMessage = document.getElementById("charLimitMessage");
//     var maxLength = textarea.getAttribute("maxlength");
//     var currentLength = textarea.value.length;

//     if (currentLength > maxLength) {
//       // charLimitMessage.textContent = "Превышен лимит символов (максимум 5000).";
//       textarea.value = textarea.value.substring(0, maxLength);
//       textarea.style.height = "auto";
//       textarea.style.height =
//         textarea.scrollHeight +
//         textarea.offsetHeight -
//         textarea.clientHeight +
//         "px";
//     } else {
//       // charLimitMessage.textContent = "";
//       textarea.style.height = "auto";
//       textarea.style.height =
//         textarea.scrollHeight +
//         textarea.offsetHeight -
//         textarea.clientHeight +
//         "px";
//     }
//   }
// })();
