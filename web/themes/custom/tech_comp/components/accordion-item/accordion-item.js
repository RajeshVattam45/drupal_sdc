(function (Drupal, once) {
  Drupal.behaviors.accordionItem = {
    attach(context) {
      once('accordion-item', '[data-accordion-trigger]', context)
        .forEach((trigger) => {

          trigger.addEventListener('click', () => {
            const item = trigger.closest('[data-accordion-item]');
            const content = item.querySelector('[data-accordion-content]');
            const isOpen = item.classList.contains('is-open');

            // Close all other accordion items
            document.querySelectorAll('[data-accordion-item]').forEach((el) => {
              const btn = el.querySelector('[data-accordion-trigger]');
              const cnt = el.querySelector('[data-accordion-content]');

              el.classList.remove('is-open');
              btn.setAttribute('aria-expanded', 'false');
              cnt.setAttribute('aria-hidden', 'true');
            });

            // Toggle current accordion
            if (!isOpen) {
              item.classList.add('is-open');
              trigger.setAttribute('aria-expanded', 'true');
              content.setAttribute('aria-hidden', 'false');
            }
          });

        });
    }
  };
})(Drupal, once);
