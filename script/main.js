// Включаем Swiper
let swiperContainer = document.querySelector(".scroll-section__swiper");
var swiper = new Swiper(swiperContainer, {
  direction: "horizontal",
  slidesPerView: 1,
  spaceBetween: 30,
  speed: 1000,

  // mousewheel: {
  //   // forceToAxis: true,
  //   // sensitivity: 1,
  //   releaseOnEdges: true,
  // },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  // on: {
  //   reachEnd: function () {
  //     // console.log("reachEnd");
  //     // var swiperContainer = document.querySelector(".scroll-section__swiper");
  //     // swiperContainer.classList.add("last-slide-reached");
  //     // swiper.disable();
  //   },
  //   reachBeginning: function () {
  //     // console.log("reachBeginning");
  //   },
  //   toEdge: function () {
  //     // console.log("toEdge");
  //     // swiper.disable();
  //   },
  //   fromEdge: function () {
  //     // console.log("fromEdge");
  //     // swiper.enable();
  //     // var swiperContainer = document.querySelector(".scroll-section__swiper");
  //     // swiperContainer.classList.remove("last-slide-reached");
  //   },
  //   slideChange: function () {
  //     // console.log("slideChange");
  //     // var swiperContainer = document.querySelector(".scroll-section__swiper");
  //     // swiperContainer.classList.remove("last-slide-reached");
  //   },
  // },
});

function test() {
  const scrollTop = window.scrollY;
  document.body.style.top = `${scrollTop}px`;
  const mOffsetTop = parseInt(document.body.style.top);

  const s2 = document.querySelector(".s2");

  console.log(mOffsetTop);

  if (mOffsetTop >= 1455) {
  } else if (mOffsetTop <= 1450) {
  }

  // document.documentElement.style.overflow = "hidden";
  // document.documentElement.style.overflow = "auto";

  // console.log(scrollTop);
  // console.log(parseInt(document.body.style.top));
  // if(document.body.style.top == "1450px")

  // 1455
  // if (scrollTop >= 1455) {
  //   document.documentElement.style.overflow = "hidden";
  // }

  // if (scrollTop >= 1455) {
  //   // s2.style.transform = "translateY(100px)";
  //   swiper.slideTo(2, 1000);
  // } else if (scrollTop >= 1550) {
  //   swiper.slideTo(3, 1000);
  // } else if (scrollTop < 1450) {
  //   swiper.slideTo(1, 1000);
  // }
}

window.addEventListener("scroll", test);

// 3d s1
(() => {
  const block = document.querySelector(".block");
  const container = document.querySelector(".s1");
  const container_centered = document.querySelector(".center-block");
  let offsetX = 0;
  let offsetY = 0;

  // let prevOffsetX = 0;
  // let prevOffsetY = 0;

  container.addEventListener("mousemove", moveBlock);
  // container.addEventListener("mouseleave", savePosition);

  function moveBlock(e) {
    const mouseX = e.clientX;
    const mouseY = e.clientY;
    const blockRect = block.getBoundingClientRect();
    const distanceX = mouseX - blockRect.left - blockRect.width / 2;
    const distanceY = mouseY - blockRect.top - blockRect.height / 2;

    offsetX = distanceX * 0.0055;
    offsetY = distanceY * 0.0055;
    block.style.transform = `translate(${offsetX}px, ${offsetY}px)`;

    offsetX_center = distanceX * 0.0095;
    offsetY_center = distanceY * 0.0095;
    container_centered.style.transform = `translate(${offsetX_center}px, ${offsetY_center}px)`;
  }

  // function savePosition() {
  //   prevOffsetX += offsetX;
  //   prevOffsetY += offsetY;
  //   block.style.transform = `translate(${prevOffsetX}px, ${prevOffsetY}px)`;
  // }
})();

// Функция для генерации случайных чисел в заданном диапазоне
(() => {
  function getRandom(min, max) {
    return Math.random() * (max - min) + min;
  }

  // Генерация SVG звезд
  let svg =
    '<svg width="1920" height="916" viewBox="0 0 1920 916" fill="none" xmlns="http://www.w3.org/2000/svg">';

  for (let i = 0; i < 500; i++) {
    let cx = getRandom(0, 1920);
    let cy = getRandom(0, 916);

    svg += `<circle cx="${cx}" cy="${cy}" r="0.5" fill="#8B9FCE">
							 <animate attributeName="cy" dur="${getRandom(6, 12)}s" values="${cy}; ${
      cy - getRandom(50, 150)
    }" repeatCount="indefinite" />
							 <animate attributeName="opacity" dur="${getRandom(
                 6,
                 12
               )}s" values="1; 0" repeatCount="indefinite" />
						</circle>`;
  }

  svg += "</svg>";
  // console.log(svg);
})();
