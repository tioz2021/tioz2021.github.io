// init slider
new WOW().init();

// fs 100vh fixing animation fs mobile
(() => {
  document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".image-container img");
    let currentImageIndex = 0;

    function fadeInNextImage() {
      images[currentImageIndex].style.opacity = 0;
      images[currentImageIndex].style.transform = "scale(0.9)";
      currentImageIndex = (currentImageIndex + 1) % images.length;
      images[currentImageIndex].style.opacity = 1;
      images[currentImageIndex].style.transform = "scale(1)";
    }

    // Начните с первой картинки
    images[currentImageIndex].style.opacity = 1;
    images[currentImageIndex].style.transform = "scale(1)";

    // Задайте интервал для смены картинок (например, каждые 3 секунды)
    setInterval(fadeInNextImage, 5000);
  });
})();

// sliders init and config
(() => {
  const swiper = new Swiper(".swiper", {
    loop: true,
    speed: 750,

    pagination: {
      el: ".swiper-pagination",
    },

    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },

    breakpoints: {
      // 900: {
      //   slidesPerView: 2,
      //   // spaceBetween: 20,
      // },
      600: {
        // slidesPerView: 1,
        // spaceBetween: 40,
      },
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
})();

// wow init ( animation ) and preloader
window.onload = function () {
  setTimeout(() => {
    document.querySelector(".preloader").classList.add("disable");
    document.querySelector("main").style.opacity = "1";
  }, 1500);
};
