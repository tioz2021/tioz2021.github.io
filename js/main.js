// observe animation
(() => {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const animation = entry.target.dataset.animate; 
        if (animation) {
          entry.target.classList.add('animate__animated', animation);
        }
        observer.unobserve(entry.target); 
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('[data-animate]').forEach(el => observer.observe(el));
})();


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

// tab shop list
(() => {
  document.querySelectorAll('.dropdown__toggle').forEach(btn => {
    btn.addEventListener('click', () => {
      btn.parentElement.classList.toggle('open');
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
  document.addEventListener("DOMContentLoaded", () => {
    const openBtn = document.getElementById("open-popup");
    if(!openBtn) return false;
    
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


const allItems = document.querySelectorAll('.shop-page-body__item');

allItems.forEach(item => {
  item.addEventListener('click', () => {
    // убираем активный класс у всех
    allItems.forEach(el => el.classList.remove('shop-page-body__item--active'));

    // добавляем активный только на кликнутый
    item.classList.add('shop-page-body__item--active');
  });
});

// cookie popup
(() => {
  class CookieConsent {
    constructor() {
      this.modal = document.getElementById('cookieConsent');
      this.acceptBtn = document.getElementById('cookieAccept');
      this.closeBtn = document.querySelector('.cookie-consent__close-btn');
      this.moreLink = document.querySelector('.cookie-consent__link');
      
      this.cookieName = 'cookie_consent_accepted';
      this.cookieExpiryDays = 365;
      this.isDetailedView = false;
      
      this.init();
    }
  
    init() {
      if (!this.getCookie(this.cookieName)) {
        this.showModal();
      }
  
      this.acceptBtn.addEventListener('click', () => {
        this.acceptCookies();
      });

      // Закрытие по кнопке X
      this.closeBtn.addEventListener('click', () => {
        if (this.isDetailedView) {
          this.hideDetailedText();
        } else {
          this.hideModal();
        }
      });
  
      // Обработчик кнопки "Подробнее"
      this.moreLink.addEventListener('click', (e) => {
        e.preventDefault();
        this.showDetailedText();
      });
  
      // Закрытие по ESC
      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && this.modal.classList.contains('active')) {
          if (this.isDetailedView) {
            this.hideDetailedText();
          } else {
            this.hideModal();
          }
        }
      });
    }
  
    showModal() {
      setTimeout(() => {
        document.body.style.overflow = 'hidden';
        this.modal.classList.add('active');
        
        setTimeout(() => {
          this.modal.classList.add('visible');
        }, 100);
      }, 1000);
    }
  
    hideModal() {
      this.modal.classList.remove('visible');
      
      setTimeout(() => {
        this.modal.classList.remove('active');
        document.body.style.overflow = '';
      }, 300);
    }

    showDetailedText() {
      this.isDetailedView = true;
      
      // Сохраняем оригинальный текст
      const originalDescription = document.querySelector('.cookie-consent__description');
      const originalLink = document.querySelector('.cookie-consent__link');
      
      // Заменяем текст
      originalDescription.textContent = 'Наш сайт использует файлы cookie с целью улучшить его работу, повысить его удобство и эффективность. Продолжая пользоваться сайтом, Вы выражаете свое согласие ООО «Маджестик Девелопмент» на обработку персональных с использованием метрической программы Яндекс.Метрика. Это позволяет нам анализировать взаимодействие посетителей с сайтом и делать его лучше.';
      
      // Скрываем ссылку "Подробнее"
      originalLink.style.display = 'none';
      
      // Добавляем анимацию появления
      setTimeout(() => {
        originalDescription.style.opacity = '1';
        originalDescription.style.transform = 'translateY(0)';
      }, 50);
    }

    hideDetailedText() {
      this.isDetailedView = false;
      
      const originalDescription = document.querySelector('.cookie-consent__description');
      const originalLink = document.querySelector('.cookie-consent__link');
      
      // Возвращаем оригинальный текст
      originalDescription.textContent = 'Наш сайт использует файлы cookie с целью улучшить его работу';
      
      // Показываем ссылку "Подробнее"
      originalLink.style.display = 'block';
    }
  
    acceptCookies() {
      this.setCookie(this.cookieName, 'true', this.cookieExpiryDays);
      this.hideModal();
      
      this.onAcceptCallback && this.onAcceptCallback();
    }
  
    setCookie(name, value, days) {
      const date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      const expires = "expires=" + date.toUTCString();
      document.cookie = name + "=" + value + ";" + expires + ";path=/;SameSite=Lax";
    }
  
    getCookie(name) {
      const nameEQ = name + "=";
      const ca = document.cookie.split(';');
      for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
      }
      return null;
    }
  
    onAccept(callback) {
      this.onAcceptCallback = callback;
    }
  
    show() {
      this.deleteCookie(this.cookieName);
      this.hideDetailedText(); // Сбрасываем к краткому виду
      this.showModal();
    }
  
    deleteCookie(name) {
      document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
    }
  }
  
  document.addEventListener('DOMContentLoaded', () => {
    window.cookieConsent = new CookieConsent();
    
    window.cookieConsent.onAccept(() => {
      console.log('Cookies accepted!');
    });
  });
})();