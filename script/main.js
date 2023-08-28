// fs 100vh fixing
(() => {
  // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
  let vh = window.innerHeight * 0.01;
  // Then we set the value in the --vh custom property to the root of the document
  document.documentElement.style.setProperty("--vh", `${vh}px`);

  // We listen to the resize event
  window.addEventListener("resize", () => {
    // We execute the same script as before
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty("--vh", `${vh}px`);
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
  new WOW().init();

  setTimeout(() => {
    document.querySelector(".preloader").classList.add("disable");
    document.querySelector("main").style.opacity = "1";
  }, 1500);

  var vid = document.getElementById("bgvid");
  var pauseButton = document.querySelector("#polina button");

  if (window.matchMedia("(prefers-reduced-motion)").matches) {
    vid.removeAttribute("autoplay");
    vid.pause();
    pauseButton.innerHTML = "Paused";
  }

  function vidFade() {
    vid.classList.add("stopfade");
  }

  vid.addEventListener("ended", function () {
    // only functional if "loop" is removed
    vid.pause();
    // to capture IE10
    vidFade();
  });
};
