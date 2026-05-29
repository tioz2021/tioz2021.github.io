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