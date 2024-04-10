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
