// acordio
(() => {
  const items = document.querySelectorAll(".tab");
  const activeItem = (e) => {
    items.forEach((e) => e.classList.remove("active"));

    const content =
      e.target.parentNode.parentNode.querySelector(".tab-content");
    content.parentNode.classList.toggle("active");
  };
  if (items)
    items.forEach((e) => {
      e.querySelector("label").addEventListener("click", activeItem);
    });
})();

const swiper = new Swiper(".swiper1", {
  // Optional parameters
  loop: true,
  spaceBetween: 25,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".arrow-btn-next",
    prevEl: ".arrow-btn-prev",
  },
});

const swiper2 = new Swiper(".swiper2", {
  // Optional parameters
  loop: false,
  allowTouchMove: false,
  spaceBetween: 25,

  // Navigation arrows
  navigation: {
    nextEl: ".s6 .arrow-btn-next",
    prevEl: ".s6 .arrow-btn-prev",
  },
});
// var container = document.querySelector(".swiper2 .swiper-container");
// var delay = 500; // Интервал задержки между нажатиями в миллисекундах
// var clickEnabled = true;

// container.addEventListener("click", function (event) {
//   if (!clickEnabled) {
//     event.preventDefault();
//     return;
//   }

//   clickEnabled = false;
//   setTimeout(function () {
//     clickEnabled = true;
//   }, delay);
// });

const swiperGallery = new Swiper(".popups__swiper-gallery", {
  // Optional parameters
  loop: true,
  spaceBetween: 25,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".popups__gallery-arrow-btn-wrp .arrow-btn-next",
    prevEl: ".popups__gallery-arrow-btn-wrp .arrow-btn-prev",
  },
});

const swiperInfo = new Swiper(".popups__swiper-info", {
  // Optional parameters
  loop: true,
  spaceBetween: 25,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".popups__info-arrow-btn-wrp .arrow-btn-next",
    prevEl: ".popups__info-arrow-btn-wrp .arrow-btn-prev",
  },
});

function exit() {
  // this.parentNode.style.display = "none";
  // this.parentNode.parentNode.style.display = "none";
  this.parentNode.classList.add("hidden");
  this.parentNode.parentNode.classList.add("hidden");
  this.parentNode.classList.remove("opened");
  this.parentNode.parentNode.classList.remove("opened");
  document.querySelector("html").style.overflowY = "scroll";
}

// gallery
(() => {
  const galleryItemsBodyImg = document.querySelectorAll(
    ".swiper1 .swiper-slide .gallery .img-wrp"
  );
  const popups = document.querySelector(".popups");
  const popupsGallery = document.querySelector(".popups__gallery");
  const popupsClose = document.querySelector(".popups__close--gallery");
  let img = null;
  let imgSrc = [];

  function activeGalleryItem() {
    const allImgInThisSlide = this.parentNode.parentNode.querySelectorAll(
      ".s4__gallery .img-wrp"
    );
    allImgInThisSlide.forEach((e, i) => {
      img = e.querySelector("img");
      imgSrc[i] = img.getAttribute("src");
    });
    const popupsImg = popupsGallery.querySelectorAll(".swiper-slide img");
    popupsImg.forEach((e, i) => {
      e.setAttribute("src", imgSrc[i]);
    });

    // popups.style.display = "block";
    // popupsGallery.style.display = "flex";
    popups.classList.add("opened");
    popupsGallery.classList.add("opened");
    popups.classList.remove("hidden");
    popupsGallery.classList.remove("hidden");
    document.querySelector("html").style.overflowY = "hidden";
  }

  if (popupsClose) popupsClose.addEventListener("click", exit);
  if (galleryItemsBodyImg)
    galleryItemsBodyImg.forEach((e) =>
      e.addEventListener("click", activeGalleryItem)
    );
})();

// popupsOpen
(() => {
  const allBtnMoreInfo = document.querySelectorAll(".s2__list-btn--black");
  const popups = document.querySelector(".popups");
  const popupsInfo = document.querySelector(".popups__info");
  const popupsInfoClose = document.querySelector(".popups__close--info");
  const allBtnOpenPopupForm = document.querySelectorAll(".open-popups-form");
  const popupsForm = document.querySelector(".popups__form");
  const popupsFormClose = document.querySelector(".popups__close--form");
  const popupPolicyBtn = document.querySelector(".open-popup-policy");
  const popupPolicy = document.querySelector(".popups__policy");
  const popupsPolicyClose = document.querySelector(".popups__close--policy");

  function openPopupInfo(e) {
    e.preventDefault();
    // popups.style.display = "block";
    // popupsInfo.style.display = "flex";
    popups.classList.add("opened");
    popupsInfo.classList.add("opened");
    popups.classList.remove("hidden");
    popupsInfo.classList.remove("hidden");
    document.querySelector("html").style.overflowY = "hidden";
  }

  function openPopupForm(e) {
    e.preventDefault();
    // popups.style.display = "block";
    // popupsForm.style.display = "flex";
    popups.classList.add("opened");
    popupsForm.classList.add("opened");
    popups.classList.remove("hidden");
    popupsForm.classList.remove("hidden");
    document.querySelector("html").style.overflowY = "hidden";
  }

  function openPopupPolicy(e) {
    e.preventDefault();
    // popups.style.display = "block";
    // popupPolicy.style.display = "block";
    popups.classList.add("opened");
    popupPolicy.classList.add("opened");
    popups.classList.remove("hidden");
    popupPolicy.classList.remove("hidden");
    document.querySelector("html").style.overflowY = "hidden";
  }

  if (popupsInfoClose) popupsInfoClose.addEventListener("click", exit);
  document.querySelectorAll(".close-info-popup").forEach((e) =>
    e.addEventListener("click", (e) => {
      // e.target.parentNode.classList.add("hidden");
      // e.target.parentNode.parentNode.classList.add("hidden");
      // e.target.parentNode.classList.remove("opened");
      // e.target.parentNode.parentNode.classList.remove("opened");
      e.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.classList.remove(
        "opened"
      );
      e.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.classList.add(
        "hidden"
      );
      e.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.classList.remove(
        "opened"
      );
      e.target.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.classList.add(
        "hidden"
      );
    })
  );

  document
    .querySelectorAll(".close-info-popup-and-open-popups-form")
    .forEach((e) => {
      e.addEventListener("click", (e) => {
        e.preventDefault();
        const popups =
          e.target.parentNode.parentNode.parentNode.parentNode.parentNode
            .parentNode.parentNode.parentNode.parentNode;
        const popupInfo = popups.querySelector(".popups__info");
        const popupForm = popups.querySelector(".popups__form");
        popupInfo.classList.add("hidden");
        popupInfo.classList.remove("opened");
        popupForm.classList.add("opened");
        popupForm.classList.remove("hidden");
      });
    });

  if (allBtnMoreInfo)
    allBtnMoreInfo.forEach((e) => e.addEventListener("click", openPopupInfo));

  if (popupsFormClose) popupsFormClose.addEventListener("click", exit);
  if (allBtnOpenPopupForm)
    allBtnOpenPopupForm.forEach((e) =>
      e.addEventListener("click", openPopupForm)
    );

  if (popupsPolicyClose) popupsPolicyClose.addEventListener("click", exit);
  if (popupPolicyBtn) popupPolicyBtn.addEventListener("click", openPopupPolicy);
})();

// quiz
(() => {
  const allSlideBlock = document.querySelectorAll(".s6 .swiper-slide");
  const stepNumber = document.querySelector(".s6__step-number");
  const stepText = document.querySelector(".s6__step-info");
  const stepPrev = document.querySelector(".s6 .arrow-btn-prev");
  const stepNext = document.querySelector(".s6 .arrow-btn-next");
  const inputsStep3 = document.querySelectorAll(".s6__step-three-input");
  const hiddenBtn = document.querySelector(".s6__hidden-btn");
  const hiddenBtnText = document.querySelector(
    ".s6__hideden-validation-text-block"
  );
  const finishBtn = document.querySelector(".s6__finish-form");

  inputsStep3.forEach((e) => e.addEventListener("input", validateStep3Inputs));

  function validateStep3Inputs() {
    if (this.value.length >= 3) {
      hiddenBtn.style.zIndex = "-1";
      hiddenBtnText.style.opacity = "0";
      inputsStep3.forEach((e) => {
        e.style.border = "1px solid rgba(255, 255, 255, 0.3)";
      });
    } else {
      hiddenBtn.style.zIndex = "2";
      hiddenBtnText.style.opacity = "1";
      inputsStep3.forEach((e) => {
        e.style.border = "1px solid #F26363";
      });
    }
  }
  let counterSteps = 0;
  let counterStepsDopSlide = false;

  function changeItem() {
    const wrapper = this.parentNode;
    const items = wrapper.querySelectorAll(".s6__item");
    items.forEach((e) => e.classList.remove("active"));
    this.classList.add("active");
    if (this.classList.contains("s6__item--changed")) {
      counterStepsDopSlide = true;
      allSlideBlock.forEach((e) => {
        if (e.classList.contains("swiper-slide--modifi")) {
          e.classList.remove("disabled");
        }
      });
    } else if (this.classList.contains("s6__item--def")) {
      counterStepsDopSlide = false;
      allSlideBlock.forEach((e) => {
        if (e.classList.contains("swiper-slide--modifi")) {
          e.classList.add("disabled");
        }
      });
    }
  }

  function nextStep() {
    const currentStep = stepNumber.textContent;

    if (counterStepsDopSlide) {
      counterStepsDopSlide = false;
    } else {
      if (parseInt(currentStep) < 4) {
        stepNumber.textContent = parseInt(stepNumber.textContent) + 1;
        if (counterSteps < 4) {
          counterSteps++;
        }
        counterStepsTextChanger();
      }
    }
  }

  function nextPrev() {
    const currentStep = stepNumber.textContent;
    if (parseInt(currentStep) > 1) {
      stepNumber.textContent = parseInt(stepNumber.textContent) - 1;
    }
    if (counterSteps != 0) counterSteps--;
    counterStepsTextChanger();
  }

  function counterStepsTextChanger() {
    console.log(counterSteps);
    if (counterSteps == 0) {
      stepText.innerHTML = "Выберите тип объекта <i>для расчета стоимости</i>";
    } else if (counterSteps == 1) {
      stepText.textContent = "Подбор системы";
      hiddenBtn.style.zIndex = "-1";
    } else if (counterSteps == 2) {
      stepText.textContent = "Введите параметры объекта";
      if (hiddenBtn.style.zIndex == "-1") {
        if (
          (inputsStep3[0].value.length < 3 &&
            inputsStep3[1].value.length < 3) ||
          (inputsStep3[0].value.length > 3 &&
            inputsStep3[1].value.length < 3) ||
          (inputsStep3[0].value.length < 3 && inputsStep3[1].value.length > 3)
        ) {
          hiddenBtn.style.zIndex = "2";
        }
      }
      hiddenBtn.onclick = function () {
        hiddenBtnText.style.opacity = "1";
        inputsStep3.forEach((e) => {
          e.style.border = "1px solid #F26363";
        });
      };
      stepNext.style.display = "flex";
      finishBtn.style.display = "none";
    } else if (counterSteps == 3) {
      stepText.textContent = "Введите свои данные";
      stepNext.style.display = "none";
      finishBtn.style.display = "flex";
    }
  }

  const finishFormInputs = document.querySelectorAll(
    ".s6 .s6__step-four-input"
  );
  function finishForm() {
    finishFormInputs.forEach((e) => {
      if (e.value.length < 3) {
        e.style.border = "1px solid #F26363";
      }
    });
    if (
      finishFormInputs[0].value.length >= 3 &&
      finishFormInputs[1].value.length >= 3 &&
      document.querySelector(".chexbox__item").checked == true
    ) {
      document.querySelector(".s6__step-finish-form").style.display = "flex";
      document.querySelector(".s6__title").style.display = "none";
      document.querySelector(".s6__step-wrp").style.display = "none";
      document.querySelector(".s6__helper").style.display = "none";
      document.querySelector(".s6__swiper").style.display = "none";
    }
  }

  function validateFinishForm() {
    if (this.value.length >= 3) {
      this.style.border = "1px solid rgba(255, 255, 255, 0.3)";
    } else {
      this.style.border = "1px solid #F26363";
    }
  }

  finishFormInputs.forEach((e) =>
    e.addEventListener("input", validateFinishForm)
  );

  allSlideBlock.forEach((e) => {
    const items = e.querySelectorAll(".s6__item");
    items.forEach((e) => e.addEventListener("click", changeItem));
  });
  stepNext.addEventListener("click", nextStep);
  stepPrev.addEventListener("click", nextPrev);
  finishBtn.addEventListener("click", finishForm);

  let btnOkIntoFinish = document.querySelector(
    ".s6__step-finish-form .main-btn"
  );
  btnOkIntoFinish.addEventListener("click", (e) => {
    e.preventDefault();
    document.querySelector(".s6__step-finish-form").style.display = "none";
    document.querySelector(".s6__title").style.display = "flex";
    document.querySelector(".s6__step-wrp").style.display = "flex";
    document.querySelector(".s6__helper").style.display = "flex";
    document.querySelector(".s6__swiper").style.display = "flex";
  });
})();

// swiper - slide;
// s6__item;

// popups info validation
(() => {
  const formSendBtn = document.querySelector(".popups .s6__finish-form");
  function test() {
    const inputs = this.parentNode.querySelectorAll(".main-form__input");
    const chexbox = this.parentNode.querySelector(".chexbox__label input");

    if (inputs[0].value.length >= 3) {
      inputs[0].style.border = "1px solid rgba(255, 255, 255, 0.3)";
    } else {
      inputs[0].style.border = "1px solid #F26363";
    }
    if (inputs[1].value.length >= 7) {
      inputs[1].style.border = "1px solid rgba(255, 255, 255, 0.3)";
    } else {
      inputs[1].style.border = "1px solid #F26363";
    }

    if (
      chexbox.checked == true &&
      inputs[0].value.length >= 3 &&
      inputs[1].value.length >= 7
    ) {
      console.log("send");
    }
  }
  formSendBtn.addEventListener("click", test);
})();

// mobile menu
(() => {
  const menuOpenBtn = document.querySelector(".open-mobile-menu");
  const menuBody = document.querySelector(".header .nav");
  const mobileMenuBg = document.querySelector(".popups__white-blur-bg");
  function openMenu() {
    menuBody.classList.toggle("active");
    this.classList.toggle("active");
    mobileMenuBg.classList.toggle("active");
  }
  menuOpenBtn.addEventListener("click", openMenu);

  // close list
  const allBtnList = document.querySelectorAll(".header .nav li a");
  function closeMenu() {
    menuBody.classList.remove("active");
    menuOpenBtn.classList.remove("active");
    mobileMenuBg.classList.remove("active");
  }
  allBtnList.forEach((e) => e.addEventListener("click", closeMenu));
})();
