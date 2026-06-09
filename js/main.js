// lng switcher
(() => {
    const switcherBody = document.querySelector('.languare-switcher__body');
    const items = document.querySelectorAll('.languare-switcher__body-item');

    switcherBody.addEventListener('click', function (e) {
        this.classList.toggle('_active');
    });

    items.forEach(item => {
        item.addEventListener('click', function (e) {
            e.stopPropagation(); 
            e.preventDefault(); 
            
            if (!switcherBody.classList.contains('_active')) {
                switcherBody.classList.add('_active');
                return;
            }

            const currentActive = document.querySelector('.languare-switcher__body-item._current');
            if (currentActive) currentActive.classList.remove('_current');
            
            this.classList.add('_current');

            setTimeout(() => {
                switcherBody.classList.remove('_active');
            }, 100);
        });
    });

    document.addEventListener('click', (e) => {
        if (!switcherBody.contains(e.target)) {
            switcherBody.classList.remove('_active');
        }
    });
})();

(() => {
    document.addEventListener('DOMContentLoaded', () => {
    const selects = document.querySelectorAll('.filter-select');

    selects.forEach(select => {
        const header = select.querySelector('.filter-select__header');
        const items = select.querySelectorAll('.filter-select__item');
        const titleText = select.querySelector('.filter-select__title b'); // Ищем жирный текст, куда подставим выбор

        // 1. Открытие/закрытие по клику на плашку
        header.addEventListener('click', (e) => {
            e.stopPropagation();
            
            // Закрываем все ОСТАЛЬНЫЕ селекты перед открытием текущего
            selects.forEach(s => {
                if (s !== select) s.classList.remove('_active');
            });

            select.classList.toggle('_active');
        });

        // 2. Выбор элемента в списке
        items.forEach(item => {
            item.addEventListener('click', (e) => {
                e.stopPropagation();

                // Меняем текст в шапке на выбранный
                if (titleText) {
                    titleText.textContent = item.textContent;
                }

                // Переключаем активный класс у элементов списка
                select.querySelector('.filter-select__item._selected')?.classList.remove('_selected');
                item.classList.add('_selected');

                // Закрываем дропдаун
                select.classList.remove('_active');
            });
        });
    });

    // 3. Закрытие любого открытого селекта при клике в пустую область экрана
    document.addEventListener('click', () => {
        selects.forEach(s => s.classList.remove('_active'));
    });
});
})();

// acardion
(() => {
  // Получаем все элементы аккордеона
  const accordionItems = document.querySelectorAll(".accordion__item");

  // Добавляем обработчик события для каждого элемента аккордеона
  accordionItems.forEach((item) => {
    const header = item.querySelector(".accordion__header");
    const content = item.querySelector(".accordion__content");

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

      if (header.classList.contains("active")) {
        const textHeight = content.scrollHeight;
        const extraSpace = getComputedStyle(content).getPropertyValue('--extra-space') || '36px';
        const paddingBottom = getComputedStyle(content).getPropertyValue('--content-padding') || '36px';
        
        content.style.maxHeight = `calc(${textHeight}px + ${extraSpace})`;
        content.style.paddingBottom = paddingBottom;
      } else {
          content.style.maxHeight = "0";
          content.style.paddingBottom = "0";
      }

    });
  });
})();

// main-item galery
(() => {
    const mainImgContainer = document.querySelector('.main-item__img-box-main-img');
    const secondaryImgList = document.querySelectorAll('.main-item__img-box-secondary-img');

    // Находим саму картинку внутри главного контейнера
    const mainImg = mainImgContainer ? mainImgContainer.querySelector('img') : null;

    // Проверяем, нашлись ли элементы на странице, чтобы JS не падал в ошибку
    if (!mainImg || secondaryImgList.length === 0) return;

    // Перебираем список миниатюр
    secondaryImgList.forEach(item => {
        item.addEventListener('click', () => {
            // Ищем картинку внутри кликнутой миниатюры
            const clickedImg = item.querySelector('img');
            
            if (clickedImg) {
                // Меняем путь (src) и альт (alt) главной картинки на данные из миниатюры
                mainImg.src = clickedImg.src;
                mainImg.alt = clickedImg.alt;
            }
        });
    });
})();