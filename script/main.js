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
