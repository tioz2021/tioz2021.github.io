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