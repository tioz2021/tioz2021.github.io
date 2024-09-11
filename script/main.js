// s6 changer
(() => {
  const btns = document.querySelectorAll('.ppl-viewer__bottom-item');
  const items = document.querySelectorAll('.ppl-viewer__main-container');
  function funk(){
    const item = this;
    
    // items.forEach(e => e.classList.remove("active"));
    if(item.classList.contains("ppl-viewer__bottom-item--1")){
      items.forEach(e => e.classList.remove("active-effect"));
      // setTimeout(() => {
        items[1].classList.add("active-effect");
      // }, 200);
    }
    else if(item.classList.contains("ppl-viewer__bottom-item--2")){
      items.forEach(e => e.classList.remove("active-effect"));
      // setTimeout(() => {
        items[2].classList.add("active-effect");
      // }, 200);
    }
    else if(item.classList.contains("ppl-viewer__bottom-item--3")){
      items.forEach(e => e.classList.remove("active-effect"));
      // setTimeout(() => {
        items[3].classList.add("active-effect");
      // }, 200);
    }

    console.log(item)

  }
  if(btns) btns.forEach(e => e.addEventListener("click", funk));
}) ();

// ss2 cnahger 
(() => {
  const btns = document.querySelectorAll('.ss2__navigation-btn');
  const items = document.querySelectorAll('.ss2__navigation-body');
  function funk(){
    const item = this;
    
    // items.forEach(e => e.classList.remove("active"));
    if(item.classList.contains("ss2__navigation-btn--1")){
      items.forEach(e => e.classList.remove("active-effect"));
      btns.forEach(e => e.classList.remove("active"));
      // setTimeout(() => {
        items[0].classList.add("active-effect");
        btns[0].classList.add("active");
      // }, 200);
    }
    else if(item.classList.contains("ss2__navigation-btn--2")){
      items.forEach(e => e.classList.remove("active-effect"));
      btns.forEach(e => e.classList.remove("active"));
      // setTimeout(() => {
        items[1].classList.add("active-effect");
        btns[1].classList.add("active");
      // }, 200);
    }
    else if(item.classList.contains("ss2__navigation-btn--3")){
      items.forEach(e => e.classList.remove("active-effect"));
      btns.forEach(e => e.classList.remove("active"));
      // setTimeout(() => {
        items[2].classList.add("active-effect");
        btns[2].classList.add("active");
      // }, 200);
    }
    else if(item.classList.contains("ss2__navigation-btn--4")){
      items.forEach(e => e.classList.remove("active-effect"));
      btns.forEach(e => e.classList.remove("active"));
      // setTimeout(() => {
        items[3].classList.add("active-effect");
        btns[3].classList.add("active");
      // }, 200);
    }

    console.log(item)

  }
  if(btns) btns.forEach(e => e.addEventListener("click", funk));
}) ();

// acardion
(() => {
  // Получаем все элементы аккордеона
  const accordionItems = document.querySelectorAll(".accordion__item");

  // Добавляем обработчик события для каждого элемента аккордеона
  accordionItems.forEach((item) => {
    const header = item.querySelector(".accordion__header");
    const content = item.querySelector(".accordion__content");
    let x = item.querySelector(".accordion__title");

    header.addEventListener("click", () => {
      // Переключаем класс 'active' для заголовка текущего элемента
      header.classList.toggle("active");

      // Закрываем все другие элементы аккордеона
      accordionItems.forEach((otherItem) => {
        if (otherItem !== item) {
          otherItem
            .querySelector(".accordion__header")
            .classList.remove("active");
          otherItem.querySelector(".accordion__content").style.maxHeight = "0";
          otherItem.querySelector(".accordion__content").style.paddingBottom =
            "0px";
        }
      });

      // Устанавливаем максимальную высоту для текущего элемента в rem
      if (header.classList.contains("active")) {
        // Получаем высоту текста внутри .accordion__content и устанавливаем в rem
        const textHeight = content.scrollHeight;
        content.style.maxHeight = `${textHeight + 24}px`;
        content.style.paddingBottom = "24px";

        // x.style.paddingBottom = "0px";

      } else {
        content.style.maxHeight = "0";
        content.style.paddingBottom = "0px";
      }
    });
  });
})();

// form
(() => {
  
  const buttonSubmit = document.querySelector(".main-form .main-btn");

  function funk() {
    const inputs = document.querySelectorAll("input");
    const textarea = document.querySelector(".textarea-wrp");
    const customChecbox = document.querySelector(".custom-checkbox span");

    inputs.forEach(e => {
      console.log(e)
      e.classList.add("error");
    })

    textarea.classList.add("error");
    document.querySelector(".textarea-error").classList.add("active");
    customChecbox.classList.add("error");

  }

  if(buttonSubmit) buttonSubmit.addEventListener("click", funk);
}) ();