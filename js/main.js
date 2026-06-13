// lng switcher
(() => {
    const switcherBody = document.querySelector('.languare-switcher__body');
    const items = document.querySelectorAll('.languare-switcher__body-item');

    if (switcherBody) switcherBody.addEventListener('click', function (e) {
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
            const titleText = select.querySelector('.filter-select__title b');

            header.addEventListener('click', (e) => {
                e.stopPropagation();

                selects.forEach(s => {
                    if (s !== select) s.classList.remove('_active');
                });

                select.classList.toggle('_active');
            });

            items.forEach(item => {
                item.addEventListener('click', (e) => {
                    e.stopPropagation();

                    if (titleText) {
                        titleText.textContent = item.textContent;
                    }

                    select.querySelector('.filter-select__item._selected')?.classList.remove('_selected');
                    item.classList.add('_selected');

                    select.classList.remove('_active');
                });
            });
        });

        document.addEventListener('click', () => {
            selects.forEach(s => s.classList.remove('_active'));
        });
    });
})();

// acardion
(() => {
    const accordionItems = document.querySelectorAll(".accordion__item");

    accordionItems.forEach((item) => {
        const header = item.querySelector(".accordion__header");
        const content = item.querySelector(".accordion__content");

        header.addEventListener("click", () => {
            header.classList.toggle("active");

            accordionItems.forEach((otherItem) => {
                if (otherItem !== item) {
                    otherItem
                        .querySelector(".accordion__header")
                        .classList.remove("active");
                    otherItem.querySelector(".accordion__content").style.maxHeight = "0";
                    otherItem.querySelector(".accordion__content").style.paddingBottom =
                        "0rem";
                }
            });

            if (header.classList.contains("active")) {
                const textHeight = content.scrollHeight;
                const extraSpace = getComputedStyle(content).getPropertyValue('--extra-space') || '36rem';
                const paddingBottom = getComputedStyle(content).getPropertyValue('--content-padding') || '36rem';

                content.style.maxHeight = `calc(${textHeight}rem + ${extraSpace})`;
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
    const mainImg = mainImgContainer ? mainImgContainer.querySelector('img') : null;
    if (!mainImg || secondaryImgList.length === 0) return;

    secondaryImgList.forEach(item => {
        item.addEventListener('click', () => {
            const clickedImg = item.querySelector('img');

            if (clickedImg) {
                mainImg.src = clickedImg.src;
                mainImg.alt = clickedImg.alt;
            }
        });
    });
})();

// popups 
(() => {
    (() => {
        const popupButtons = document.querySelectorAll('.open-popup');
        const body = document.body;

        function openPopup(popupElement) {
            if (!popupElement) return;

            const activePopup = document.querySelector('.popup.is-open');
            if (activePopup) {
                closePopup(activePopup, false);
            }

            popupElement.classList.add('is-open');
            body.classList.add('popup-lock');
        }

        function closePopup(popupElement, removeLock = true) {
            if (!popupElement) return;

            popupElement.classList.remove('is-open');

            if (removeLock) {
                body.classList.remove('popup-lock');
            }
        }

        popupButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                const popupId = button.getAttribute('data-popup');
                const targetPopup = document.getElementById(popupId);
                openPopup(targetPopup);
            });
        });

        const popups = document.querySelectorAll('.popup');
        popups.forEach(popup => {
            popup.addEventListener('click', (e) => {
                if (e.target.classList.contains('popup__body') || e.target.closest('.popup__close')) {
                    closePopup(popup);
                }
            });
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                const activePopup = document.querySelector('.popup.is-open');
                if (activePopup) {
                    closePopup(activePopup);
                }
            }
        });
    })();
})();

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

// mobile menu
(() => {
    const menuBtn = document.querySelector('.mobile-menu-btn');
    const headerMenu = document.querySelector('.header__menu');
    const body = document.body;

    if (menuBtn && headerMenu) {
        menuBtn.addEventListener('click', (e) => {
            e.stopPropagation();

            menuBtn.classList.toggle('is-active');
            headerMenu.classList.toggle('is-open');

            body.classList.toggle('menu-lock');
        });

        headerMenu.addEventListener('click', (e) => {
            if (e.target.closest('a')) {
                menuBtn.classList.remove('is-active');
                headerMenu.classList.remove('is-open');
                body.classList.remove('menu-lock');
            }
        });

        document.addEventListener('click', (e) => {
            if (!headerMenu.contains(e.target) && !menuBtn.contains(e.target)) {
                menuBtn.classList.remove('is-active');
                headerMenu.classList.remove('is-open');
                body.classList.remove('menu-lock');
            }
        });
    }
})();