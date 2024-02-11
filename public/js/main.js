document.addEventListener("DOMContentLoaded", function() {
    // Навешиваем событие 'mouseenter' на все dropdown элементы
    document.querySelectorAll('.navbar .nav-item.dropdown').forEach(function(everydropdown) {
      everydropdown.addEventListener('mouseenter', function(e) {
        let el_link = this.querySelector('a[data-bs-toggle]');

        if (el_link != null) {
          let nextEl = el_link.nextElementSibling;
          el_link.classList.add('show');
          nextEl.classList.add('show');
        }

      });
      everydropdown.addEventListener('mouseleave', function(e) {
        let el_link = this.querySelector('a[data-bs-toggle]');

        if (el_link != null) {
          let nextEl = el_link.nextElementSibling;
          el_link.classList.remove('show');
          nextEl.classList.remove('show');
        }
      });
    });
});

$(document).ready(function(){
    $(".owl-home").owlCarousel({
        loop:true, // Бесконечное зацикливание слайдера
        margin:50, // Отступ между элементами в пикселях
        nav:false, // Навигация (стрелки вперед-назад)
        autoplay:true, // Автоматическая прокрутка слайдера
        autoplayTimeout:2500, // Время в миллисекундах до автоматического переключения слайдов
        autoplaySpeed: 2000,
        autoplayHoverPause:true, // Остановка автопрокрутки при наведении курсора
        lazyLoad:true, // Включает ленивую загрузку изображений
        responsive:{
            0:{
                items:1 // Количество слайдов для отображения на маленьких экранах
            },
            600:{
                items:3 // Количество слайдов для отображения на средних экранах
            },
            1000:{
                items:5 // Количество слайдов для отображения на больших экранах
            }
        }
    });
    $(".owl-firm").owlCarousel({
        loop:true, // Бесконечное зацикливание слайдера
        margin:50, // Отступ между элементами в пикселях
        nav:false, // Навигация (стрелки вперед-назад)
        autoplay:true, // Автоматическая прокрутка слайдера
        autoplayTimeout:2500, // Время в миллисекундах до автоматического переключения слайдов
        autoplaySpeed: 2000,
        autoplayHoverPause:true, // Остановка автопрокрутки при наведении курсора
        lazyLoad:true, // Включает ленивую загрузку изображений
        responsive:{
            0:{
                items:1 // Количество слайдов для отображения на маленьких экранах
            },
            600:{
                items:1 // Количество слайдов для отображения на средних экранах
            },
            1000:{
                items:1 // Количество слайдов для отображения на больших экранах
            }
        }
    });



    // Функция проверки видимости элемента в области видимости
    function checkVisibility(element) {
        var windowHeight = $(window).height(),
            scrollTop = $(window).scrollTop(),
            elementOffset = $(element).offset().top,
            elementHeight = $(element).height();

        // Проверяем, находится ли элемент в области видимости
        if (elementOffset + elementHeight >= scrollTop && elementOffset <= scrollTop + windowHeight) {
            $(element).addClass('fadeInUp');
        }
        }

        // Проверяем каждый элемент при прокрутке
        $(window).scroll(function() {
        $('.timeline-item').each(function() {
            checkVisibility(this);
        });
        });

        // Проверяем один раз при загрузке страницы
        $('.timeline-item').each(function() {
        checkVisibility(this);
        });
});
