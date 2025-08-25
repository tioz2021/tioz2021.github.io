// header menu
(() => {
  const mainBtn = document.querySelector('.main-menu__head');
  const menu = document.querySelector('.main-menu');

  // переключение по кнопке
  mainBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    menu.classList.toggle('active');
  });

  // клик вне меню
  document.addEventListener('click', (e) => {
    if (!menu.contains(e.target) && !mainBtn.contains(e.target)) {
      menu.classList.remove('active');
    }
  });
})();

// paymen method 
(() => {
  document.addEventListener("DOMContentLoaded", () => {
    const paymentBlock = document.querySelector(".payment-methods");
    if(!paymentBlock) return false;
    const toggleBtn = paymentBlock.querySelector(".payment-methods__toggle-btn");
  
    toggleBtn.addEventListener("click", () => {
      paymentBlock.classList.toggle("open");
    });
  });  
}) ();

// gallery
(() => {
  document.addEventListener("DOMContentLoaded", () => {
    const containers = document.querySelectorAll(".thumbnails__img-container");
    const currentImage = document.getElementById("current-image");

    let isAnimating = false;
    let pendingImage = null; // сюда кладём "запомненный" клик

    const switchImage = (src, container) => {
      isAnimating = true;

      // убираем active у всех
      containers.forEach(c => c.classList.remove("active"));
      container.classList.add("active");

      currentImage.classList.add("fade-out");

      const handleFadeOut = (e) => {
        if (e.propertyName !== "opacity") return;

        currentImage.src = src;
        currentImage.classList.remove("fade-out");
        currentImage.classList.add("fade-in");

        const handleFadeIn = (e2) => {
          if (e2.propertyName !== "opacity") return;

          currentImage.classList.remove("fade-in");
          currentImage.removeEventListener("transitionend", handleFadeIn);
          isAnimating = false;

          // если во время анимации уже выбрали другую картинку → переключаемся сразу
          if (pendingImage) {
            const { src: nextSrc, container: nextContainer } = pendingImage;
            pendingImage = null;
            switchImage(nextSrc, nextContainer);
          }
        };

        currentImage.addEventListener("transitionend", handleFadeIn);
        currentImage.removeEventListener("transitionend", handleFadeOut);
      };

      currentImage.addEventListener("transitionend", handleFadeOut);
    };

    containers.forEach(container => {
      const img = container.querySelector("img");

      container.addEventListener("click", () => {
        const newSrc = img.dataset.full;
        if (currentImage.src.includes(newSrc)) return;

        if (isAnimating) {
          // если идёт анимация → просто запоминаем
          pendingImage = { src: newSrc, container };
        } else {
          switchImage(newSrc, container);
        }
      });
    });
  });
})();

// popup
(() => {
  (() => {
    document.addEventListener("DOMContentLoaded", () => {
      const openBtn = document.getElementById("open-popup");
      const overlay = document.getElementById("popup-overlay");
      const closeBtn = document.querySelector(".popup__close");
  
      // открыть
      openBtn.addEventListener("click", () => {
        overlay.classList.add("active");
      });
  
      // закрыть по кнопке
      closeBtn.addEventListener("click", () => {
        overlay.classList.remove("active");
      });
  
      // закрыть по клику вне popup
      overlay.addEventListener("click", (e) => {
        if (e.target === overlay) {
          overlay.classList.remove("active");
        }
      });
    });
  })();
  
}) ();