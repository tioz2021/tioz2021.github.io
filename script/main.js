// form slide
(() => {
  const slideWrp = document.querySelector(".slide-wrp");
  const slides = document.querySelectorAll(".slide");
  const slideStartBtn = document.querySelector(".start-slide");
  const slideSecondBtn = document.querySelector(".second-slide");
  const slide1 = (e) => {
    let c = document.querySelector("#success");
    if (c.checked == true) {
      slideWrp.style.left = "-100%";
      c.nextElementSibling.querySelector("span").style.color = "#7e7e7e";
      c.nextElementSibling.querySelector("span a").style.color = "#7e7e7e";
    } else {
      c.nextElementSibling.querySelector("span").style.color = "red";
      c.nextElementSibling.querySelector("span a").style.color = "red";
    }
  };
  const slide2 = (e) => {
    console.log(slides[0]);
    slideWrp.style.left = "-200%";
  };
  if (slideStartBtn) slideStartBtn.addEventListener("click", slide1);
  if (slideSecondBtn) slideSecondBtn.addEventListener("click", slide2);
})();

// toggle police popup
(() => {
  const policeCloseBtn = document.querySelector(".police__close-btn");
  const policePopup = document.querySelector(".popup");
  const policeOpenBtn = document.querySelector(".policy-btn");
  const openPolicePopup = (e) => {
    e.preventDefault();
    policePopup.classList.add("active");
  };
  const closePolicePopup = () => {
    policePopup.classList.remove("active");
    policePopup.style.zIndex = "10";
    setTimeout(() => {
      policePopup.style.zIndex = "-1";
    }, 500);
  };
  policeOpenBtn.addEventListener("click", openPolicePopup);
  policePopup.addEventListener("click", closePolicePopup);
  policeCloseBtn.addEventListener("click", closePolicePopup);
})();

// custom select
(() => {
  var x, i, j, l, ll, selElmnt, a, b, c;
  /* Look for any elements with the class "custom-select": */
  x = document.getElementsByClassName("custom-select");
  l = x.length;
  for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /* For each element, create a new DIV that will act as the selected item: */
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /* For each element, create a new DIV that will contain the option list: */
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
      /* For each option in the original select element,
    create a new DIV that will act as an option item: */
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function (e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
      });
      b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function (e) {
      /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
  }

  function closeAllSelect(elmnt) {
    /* A function that will close all select boxes in the document,
  except the current select box: */
    var x,
      y,
      i,
      xl,
      yl,
      arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
      if (elmnt == y[i]) {
        arrNo.push(i);
      } else {
        y[i].classList.remove("select-arrow-active");
      }
    }
    for (i = 0; i < xl; i++) {
      if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide");
      }
    }
  }

  /* If the user clicks anywhere outside the select box,
then close all select boxes: */
  document.addEventListener("click", closeAllSelect);
})();
