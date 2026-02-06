(function (Drupal, once) {
  // Accordion behavior (AJAX-safe).
  Drupal.behaviors.accordionItem = {

    // Attach click handler once per header.
    attach(context) {

      // Use once() to ensure the click handler is attached.
      // only one time per accordion header, This prevents duplicate event listeners.
      once('accordion-item', '[data-accordion-trigger]', context)
        .forEach((trigger) => {

          trigger.addEventListener('click', () => {
            const item = trigger.closest('[data-accordion-item]');

            // Close all other accordion items (same behavior as before)
            document.querySelectorAll('[data-accordion-item]').forEach((el) => {
              if (el !== item) {
                el.classList.remove('is-open');
              }
            });

            // Toggle current accordion
            item.classList.toggle('is-open');
          });

        });
    }
  };
})(Drupal, once);
