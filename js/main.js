// close cookies for click
(() => {
  const cookiesBtn = document.querySelector(".cookies .cookies__btn");
  const cookiesBody = document.querySelector(".cookies");
  //const cookiesContainer = document.querySelector(".cookies__container");
  cookiesBtn.onclick = (e) => {
    cookiesBody.style.opacity = 0;
    //cookiesContainer.style.height = 0;
  };
})();

// popups functions
(() => {
  const allSiteBtn = document.querySelectorAll(".main-btn");
  const popupBg = document.querySelector(".popup-bg");
  // const popupBody = document.querySelector(".popup-body");
  const popup = document.querySelector(".popup");

  const openPopups = (e) => {
    //popup.style.display = "block";
    popup.style.zIndex = "10";
    popup.style.opacity = 1;
  };

  const hiddenPopups = (e) => {
    popup.style.opacity = 0;
    setTimeout(() => {
      //popup.style.display = "none";
      popup.style.zIndex = "-1";
    }, 500);
  };

  popupBg.addEventListener("click", hiddenPopups);
  allSiteBtn.forEach((e) => e.addEventListener("click", openPopups));
})();
