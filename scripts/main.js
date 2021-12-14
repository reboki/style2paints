document.addEventListener('DOMContentLoaded', function () {
    const hero = new HeroSlider('.swiper-container');
    hero.start();


    const header = document.querySelector('.header');
    const _navAnimation = function (el, inview) {
        if (inview) {
            header.classList.remove('triggered');
        } else {
            header.classList.add('triggered');
        }
    }

    new MobileMenu();

});