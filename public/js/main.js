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

document.addEventListener("DOMContentLoaded", function() {
    var multiItemCarousel = document.querySelectorAll('.multi-item-carousel');

    multiItemCarousel.forEach(function(carousel) {
        // Инициализация карусели
        var bsCarousel = new bootstrap.Carousel(carousel, {
            interval: false
        });

        var items = carousel.querySelectorAll('.item');

        // Для каждого слайда в карусели
        items.forEach(function(item) {
            var nextItem = item.nextElementSibling;
            if (!nextItem) {
                nextItem = carousel.querySelector('.item:first-child');
            }

            // Клонируем первый дочерний элемент следующего слайда
            var clonedChild = nextItem.querySelector(':first-child').cloneNode(true);
            item.appendChild(clonedChild);

            // Проверяем следующий за следующим слайд
            var nextNextItem = nextItem.nextElementSibling;
            if (!nextNextItem) {
                nextNextItem = carousel.querySelector('.item:first-child');
            }

            // Клонируем первый дочерний элемент следующего за следующим слайда
            var clonedNextChild = nextNextItem.querySelector(':first-child').cloneNode(true);
            item.appendChild(clonedNextChild);
        });
    });
});

