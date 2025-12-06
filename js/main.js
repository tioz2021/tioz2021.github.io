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
      this.title = document.querySelector('.cookie-consent__title');
      this.description = document.querySelector('.cookie-consent__description');
      this.buttonText = document.querySelector('.cookie-consent__btn .second-btn__text');
      
      this.cookieName = 'cookie_consent_accepted';
      this.disclaimerShownName = 'disclaimer_shown';
      this.cookieExpiryDays = 365;
      this.isDetailedView = false;
      this.isDisclaimerMode = false;
      this.isAnimating = false;
      this.showTimeout = null;
      this.hideTimeout = null;
      
      this.init();
    }
  
    init() {
      if (!this.getCookie(this.cookieName)) {
        this.showModal();
      } else if (!this.getCookie(this.disclaimerShownName)) {
        this.showDisclaimer();
      }

      this.acceptBtn.addEventListener('click', () => {
        this.handleAcceptClick();
      });

      this.closeBtn.addEventListener('click', () => {
        this.handleCloseClick();
      });
  
      this.moreLink.addEventListener('click', (e) => {
        e.preventDefault();
        this.showDetailedText();
      });
  
      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && this.modal.classList.contains('active')) {
          this.handleEscapePress();
        }
      });
    }

    handleAcceptClick() {
      if (this.isAnimating) return;
      
      if (this.isDisclaimerMode) {
        this.setCookie(this.disclaimerShownName, 'true', this.cookieExpiryDays);
        this.hideModal();
      } else {
        this.acceptCookies();
      }
    }

    handleCloseClick() {
      if (this.isAnimating) return;
      
      if (this.isDetailedView) {
        this.hideDetailedText();
      } else if (this.isDisclaimerMode) {
        this.setCookie(this.disclaimerShownName, 'true', this.cookieExpiryDays);
        this.hideModal();
      } else {
        this.hideModal();
      }
    }

    handleEscapePress() {
      if (this.isAnimating) return;
      
      if (this.isDetailedView) {
        this.hideDetailedText();
      } else if (this.isDisclaimerMode) {
        this.setCookie(this.disclaimerShownName, 'true', this.cookieExpiryDays);
        this.hideModal();
      } else {
        this.hideModal();
      }
    }
  
    showModal() {
      if (this.showTimeout) clearTimeout(this.showTimeout);
      if (this.hideTimeout) clearTimeout(this.hideTimeout);
      
      this.showTimeout = setTimeout(() => {
        if (this.modal.classList.contains('active')) return;
        
        this.isAnimating = true;
        // Убрано: document.body.style.overflow = 'hidden';
        this.modal.classList.add('active');
        
        setTimeout(() => {
          this.modal.classList.add('visible');
          this.isAnimating = false;
        }, 100);
      }, 1000);
    }
  
    hideModal() {
      if (this.isAnimating) return;
      
      this.isAnimating = true;
      this.modal.classList.remove('visible');
      
      if (this.hideTimeout) clearTimeout(this.hideTimeout);
      
      this.hideTimeout = setTimeout(() => {
        this.modal.classList.remove('active');
        // Убрано: document.body.style.overflow = '';
        this.isAnimating = false;
      }, 300);
    }

    showDetailedText() {
      if (this.isAnimating) return;
      
      this.isDetailedView = true;
      
      const originalDescription = document.querySelector('.cookie-consent__description');
      const originalLink = document.querySelector('.cookie-consent__link');
      
      // Меняем текст без анимации
      originalDescription.textContent = 'Наш сайт использует файлы cookie с целью улучшить его работу, повысить его удобство и эффективность. Продолжая пользоваться сайтом, Вы выражаете свое согласие ООО «Маджестик Девелопмент» на обработку персональных с использованием метрической программы Яндекс.Метрика. Это позволяет нам анализировать взаимодействие посетителей с сайтом и делать его лучше.';
      originalLink.style.display = 'none';
    }

    hideDetailedText() {
      if (this.isAnimating) return;
      
      this.isDetailedView = false;
      
      const originalDescription = document.querySelector('.cookie-consent__description');
      const originalLink = document.querySelector('.cookie-consent__link');
      
      // Возвращаем оригинальный текст без анимации
      originalDescription.textContent = 'Наш сайт использует файлы cookie с целью улучшить его работу';
      originalLink.style.display = 'block';
    }

    showDisclaimer() {
      if (this.isAnimating) return;
      
      this.isDisclaimerMode = true;
      
      // Меняем контент без анимации
      this.title.textContent = 'Дисклеймер';
      this.description.textContent = 'Majestic RP не связана и не поддерживается Take-Two, Rockstar North Interactive или любым другим правообладателем. Все используемые товарные знаки принадлежат их соответствующим владельцам и не связаны и не одобрены Take-Two, Rockstar North Interactive.';
      this.moreLink.style.display = 'none';
      this.buttonText.textContent = 'Закрыть';
    }
  
    acceptCookies() {
      if (this.isAnimating) return;
      
      this.setCookie(this.cookieName, 'true', this.cookieExpiryDays);
      this.showDisclaimer();
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
      this.deleteCookie(this.disclaimerShownName);
      this.hideDetailedText();
      this.resetToCookieMode();
      this.showModal();
    }

    resetToCookieMode() {
      this.isDisclaimerMode = false;
      this.title.textContent = 'Файлы cookie';
      this.description.textContent = 'Наш сайт использует файлы cookie с целью улучшить его работу';
      this.moreLink.style.display = 'block';
      this.buttonText.textContent = 'Понятно';
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