//popups toggle
(() => {
  const popupCloseBtn = document.querySelector(".pops__header-btn");
  const popupOpenBtn = document.querySelectorAll(".open-popup-btn");
  const popups = document.querySelector(".pops");
  const popupsBg = document.querySelector(".pops__bg");

  const mobileMenuOpen = document.querySelector(".main-nav__open-menu");

  function toggleAllPopups(e) {
    e.preventDefault();
    // this.addEventListener("click", toggleAllPopups);

    if (popups.classList.contains("closed")) {
      popups.style.top = "0%";
      document.querySelector(".pops-wrp").style.top = "0%";
      document.querySelector("body").style.overflowY = "hidden";
    } else {
      setTimeout(() => {
        popups.style.top = "-200%";
        document.querySelector(".pops-wrp").style.top = "-200%";
        document.querySelector("body").style.overflowY = "scroll";
      }, 0);
    }

    popups.classList.toggle("closed");

    setTimeout(() => {
      if (this == mobileMenuOpen) {
        document.querySelector(".pops .s1-banner").style.display = "none";
        document.querySelector(".pops .mobile-menu").style.display = "block";
      } else {
        document.querySelector(".pops .mobile-menu").style.display = "none";
        document.querySelector(".pops .s1-banner").style.display = "block";
      }
    }, 0);
  }

  if (popups) {
    popupCloseBtn.addEventListener("click", toggleAllPopups);
    popupsBg.addEventListener("click", toggleAllPopups);
    mobileMenuOpen.addEventListener("click", toggleAllPopups);
    popupOpenBtn.forEach((e) => e.addEventListener("click", toggleAllPopups));
  }
})();

// popups 100vh
(() => {
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty("--vh", `${vh}rem`);

  window.addEventListener("resize", () => {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty("--vh", `${vh}rem`);
  });
})();

// custom select change height
(() => {
  // const sityCustomSelect = document.querySelector(
  //   ".sity-list .custom-select__content"
  // );
  // let sityItem = sityCustomSelect.querySelectorAll(".custom-select__item");
  // let sityHeight = sityItem.length * 55;
  // sityCustomSelect.style.setProperty("--shh", `${sityHeight}rem`);
  // const lngCustomSelect = document.querySelectorAll(
  //   ".lng-list .custom-select__content"
  // );
  // lngCustomSelect.forEach((e) => {
  //   let lngItem = e.querySelectorAll(".custom-select__item");
  //   let n = 0;
  //   lngItem.length === 3 ? (n = 32) : (n = 28);
  //   let lngHeight = lngItem.length * n;
  //   e.style.setProperty("--lhh", `${lngHeight}rem`);
  // });
})();

// custom-select
(() => {
  const customSelect = document.querySelectorAll(".custom-select");
  if (customSelect) {
    function customSelectToggle(e) {
      let elm = this;

      this.mousedown = function () {
        console.log(elm);
        elm.classList.remove("active");
      };
      elm.classList.toggle("active");
    }
    customSelect.forEach((e) => {
      e.addEventListener("click", customSelectToggle);
    });
  }
})();

(() => {
  const btn1 = document.querySelector(".auto-btn1");
  const btn2 = document.querySelector(".auto-btn2");
  function test() {
    let list = document.querySelector(".s3__auto-list");
    let list1 = document.querySelector(".s3__auto-list:nth-child(2)");
    let list2 = document.querySelector(".s3__auto-list:nth-child(3)");

    if (this == btn1) {
      list1.style.transform = "translateX(0%)";
      list2.style.transform = "translateX(0%)";
      btn1.classList.add("active");
      btn2.classList.remove("active");
    } else {
      list1.style.transform = "translateX(-106%)";
      list2.style.transform = "translateX(-105%)";
      btn2.classList.add("active");
      btn1.classList.remove("active");
    }
    // document.querySelector(".s3__auto-list:nth-child(1)").style.transform =
    //   "translateX('-100%')";
  }
  btn1.addEventListener("click", test);
  btn2.addEventListener("click", test);
})();
