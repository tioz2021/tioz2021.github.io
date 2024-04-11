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
