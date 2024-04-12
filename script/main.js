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

(() => {
  document.addEventListener("DOMContentLoaded", function () {
    const selectBox = document.querySelector(".select-box");
    const dropdown = document.querySelector(".dropdown");
    const options = document.querySelectorAll(".option");
    const selectedCount = document.querySelector(".selected-count");
    const selectedItemsInput = document.getElementById("selectedItems");

    // toggler
    selectBox.addEventListener("click", function () {
      dropdown.style.display =
        dropdown.style.display === "none" ? "block" : "none";
    });

    options.forEach(function (option) {
      option.addEventListener("click", function () {
        options.forEach(function (opt) {
          opt.classList.remove("selected");
        });
        this.classList.add("selected");
        updateSelectedCount();
        updateSelectedItems();
      });
    });

    function updateSelectedCount() {
      const selectedOption = document.querySelector(".option.selected");
      const selectedText = selectedOption
        ? selectedOption.textContent
        : "Ничего не выбрано";
      selectedCount.textContent = selectedText;
    }

    function updateSelectedItems() {
      const selectedOption = document.querySelector(".option.selected");
      const selectedText = selectedOption ? selectedOption.textContent : "";
      selectedItemsInput.value = selectedText;
    }
  });
})();

(() => {
  document.addEventListener("DOMContentLoaded", function () {
    let popup = "";
    const openBtn = document.querySelector(".openBtn");

    if (openBtn.classList.contains("openBtn1")) {
      popup = document.querySelector(".popup1");
    } else if (openBtn.classList.contains("openBtn2")) {
      popup = document.querySelector(".popup2");
    } else {
      popup = document.querySelector(".popup-form");
    }

    if (!openBtn) {
      return false;
    }

    const popupContent = popup.querySelector(".popup-content");
    const closeBtn = popup.querySelectorAll(".closeBtn");

    openBtn.addEventListener("click", function (evt) {
      evt.preventDefault();
      popup.classList.add("open");
      popupContent.classList.add("open");
    });

    closeBtn.forEach((e) => {
      e.addEventListener("click", function () {
        popup.classList.remove("open");
        popupContent.classList.remove("open");
      });
    });

    document.addEventListener("click", function (event) {
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
