(function (Drupal, once) {
  Drupal.behaviors.slider = {
    attach(context) {
      once('slider', '[data-slider]', context).forEach((slider) => {
        const items = slider.querySelectorAll('[data-slider-item]');
        const images = slider.querySelectorAll('[data-slider-image]');
        const nextBtn = slider.querySelector('[data-slider-next]');
        const prevBtn = slider.querySelector('[data-slider-prev]');

        let current = 0;
        const total = items.length;

        function show(index) {
          items.forEach((item, i) => {
            item.hidden = i !== index;
            item.classList.toggle('is-active', i === index);
          });

          images.forEach((img, i) => {
            img.hidden = i !== index;
            img.classList.toggle('is-active', i === index);
          });

          current = index;
        }

        nextBtn?.addEventListener('click', () => {
          show((current + 1) % total);
        });

        prevBtn?.addEventListener('click', () => {
          show((current - 1 + total) % total);
        });
      });
    }
  };
})(Drupal, once);
