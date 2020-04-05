(function () {

    // Перенос блока выбора региона из "мобильного" местоположения в "десктопное"
    function changeMenuPosition() {
        let currentWindowWidth = window.outerWidth;
        var menu = document.querySelector('#mainMenu');
        var desktopPlace = document.querySelector('.logo');
        var mobilePlace = document.getElementById('site-header');

        if (currentWindowWidth > 1199) {
            desktopPlace.insertAdjacentElement('afterend', menu);
            menu.classList.add('desktop');
        } else {
            mobilePlace.insertAdjacentElement('beforebegin', menu);
            menu.classList.remove('desktop');
        }
    }

    window.addEventListener('DOMContentLoaded', function () {
        const is_mobile = (window.outerWidth < 768) ? true : false;
        const event = is_mobile ? 'touchend' : 'click';

        // Показ и скрытие меню
        document.querySelector('.menu-toggler').addEventListener(event, function () {
            document.getElementById('mainMenu').classList.add('active');
            document.querySelector('body').classList.add('blur');
        });
        document.querySelector('.js-main-menu-close').addEventListener(event, function () {
            document.getElementById('mainMenu').classList.remove('active');
            document.querySelector('body').classList.remove('blur');
        });

        // Перенос меню из "мобильного" местоположения в "десктопное"
        changeMenuPosition();
    });

    window.addEventListener("load", function (event) {
        // Отключаем прелоадер
        document.querySelector('body').classList.add('loaded');
        document.querySelector('body').classList.remove('blur');
    });

    // Действия при изменении размера экрана
    window.addEventListener("resize", resizeThrottler, false);

    var resizeTimeout;
    function resizeThrottler() {
        // ignore resize events as long as an actualResizeHandler execution is in the queue
        if (!resizeTimeout) {
            resizeTimeout = setTimeout(function () {
                resizeTimeout = null;
                changeMenuPosition();

                // The actualResizeHandler will execute at a rate of 10fps
            }, 250);
        }
    }

    jQuery(function ($) {
        console.log('jquery ready');
    });

}());