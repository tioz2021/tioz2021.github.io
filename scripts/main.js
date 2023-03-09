//popups toggle
(() => {
  const popupCloseBtn = document.querySelector(".pops__header-btn");
  const popups = document.querySelector(".pops");
  const popupsBg = document.querySelector(".pops__bg");

  const mobileMenuOpen = document.querySelector(".main-nav__open-menu");

  function toggleAllPopups(e) {
    e.preventDefault();

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
(() => {})();

(() => {
  const btn1 = document.querySelector(".auto-btn1");
  const btn2 = document.querySelector(".auto-btn2");
  function test() {
    let list = document.querySelector(".s3__auto-list");
    let list1 = document.querySelector(".s3__auto-list:nth-child(2)");
    let list2 = document.querySelector(".s3__auto-list:nth-child(3)");

    if (this == btn1) {
    } else {
    }
  }
  btn1.addEventListener("click", test);
  btn2.addEventListener("click", test);
})();

// custom-select
(() => {
  const customSelect = document.querySelectorAll(".custom-select");
  function customSelectToggle(e) {
    if (this.classList.contains("hover")) {
      this.classList.remove("hover");
    } else {
      this.classList.add("hover");
    }
  }

  customSelect.forEach((e) => {
    if (document.body.offsetWidth < 1000) {
      e.addEventListener("click", customSelectToggle);
    } else {
      e.addEventListener("mouseenter", function () {
        this.classList.add("hover");
      });
      e.addEventListener("mouseleave", function () {
        this.classList.remove("hover");
      });
    }
  });
})();
