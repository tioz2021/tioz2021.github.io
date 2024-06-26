// new-page functions
(() => {

  const npItems = document.querySelectorAll(".np__item");
  const contentBlock = document.querySelectorAll(".np__end");

  if(!npItems.length){
    return false;
  }

  const active = e => {    
    // Удаляем класс active у всех элементов
    npItems.forEach(item => item.classList.remove("active"));
    contentBlock.forEach(block => block.classList.remove("active"));
  
    // Добавляем класс active к целевому элементу
    e.target.classList.add("active");
  
    // Получаем индекс целевого элемента
    const index = Array.from(npItems).indexOf(e.target);
  
    // Добавляем класс active к соответствующему элементу contentBlock
    if (index !== -1) {
      contentBlock[index].classList.add("active");
    }
  }
  
  // Пример добавления обработчика события для элементов npItem
  npItems.forEach(item => {
    item.addEventListener('click', active);
  });
  
}) ();

// popup
(() => {
  document.addEventListener("DOMContentLoaded", function () {

    const openBtn = document.getElementById("openBtn");
    if (!openBtn) {
      return false;
    }
    const popup = document.getElementById("popup");
    const popupContent = document.querySelector(".popup-content");
    const closeBtn = document.getElementById("closeBtn");

    openBtn.addEventListener("click", function () {
      event.preventDefault();
      popup.classList.add("open");
      popupContent.classList.add("open");
    });

    closeBtn.addEventListener("click", function () {
      popup.classList.remove("open");
      popupContent.classList.remove("open");

      var iframe = document.getElementById('youtube-video');
      var iframeSrc = iframe.src;
      iframe.src = '';
      setTimeout(() => {
        iframe.src = iframeSrc;
      }, 100);
    });

    document.addEventListener("click", function (event) {
      // Закрываем popup, если клик произошел вне его области
      if (
        !popupContent.contains(event.target) &&
        !openBtn.contains(event.target)
      ) {
        popup.classList.remove("open");
        popupContent.classList.remove("open");

        var iframe = document.getElementById('youtube-video');
        var iframeSrc = iframe.src;
        iframe.src = '';
        setTimeout(() => {
          iframe.src = iframeSrc;
        }, 100);

      }
    });
  });
})();