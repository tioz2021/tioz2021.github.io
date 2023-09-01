// init slider
new WOW().init();

// fs 100vh fixing
(() => {
  // let vh = window.innerHeight * 0.01;
  // document.documentElement.style.setProperty("--vh", `${vh}px`);
  // window.addEventListener("resize", () => {
  //   let vh = window.innerHeight * 0.01;
  //   document.documentElement.style.setProperty("--vh", `${vh}px`);
  // });
  // const appHeight = () => {
  //   const doc = document.documentElement;
  //   doc.style.setProperty("--app-height", `${window.innerHeight}px`);
  // };
  // window.addEventListener("resize", appHeight);
  // appHeight();
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

  // var vid = document.getElementById("bgvid");
  // var pauseButton = document.querySelector("#polina button");

  // if (window.matchMedia("(prefers-reduced-motion)").matches) {
  //   vid.removeAttribute("autoplay");
  //   vid.pause();
  //   pauseButton.innerHTML = "Paused";
  // }

  // function vidFade() {
  //   vid.classList.add("stopfade");
  // }

  // vid.addEventListener("ended", function () {
  //   // only functional if "loop" is removed
  //   vid.pause();
  //   // to capture IE10
  //   vidFade();
  // });
};
