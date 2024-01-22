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
