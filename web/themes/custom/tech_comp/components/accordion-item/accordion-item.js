(function (Drupal, once) {
  // Accordion behavior (AJAX-safe).
  Drupal.behaviors.accordionItem = {

    // Attach click handler once per header.
    attach(context) {

      // Use once() to ensure the click handler is attached.
      // only one time per accordion header, This prevents duplicate event listeners.
      once('accordion-item', '.accordion-item__header', context)
        .forEach((header) => {

          // Attach click event to the accordion header button
          header.addEventListener('click', function () {
            const item = header.closest('.accordion-item');

            // Close all other accordion items.
            // This ensures only one accordion is open at a time.
            document.querySelectorAll('.accordion-item').forEach((el) => {
              if (el !== item) {
                el.classList.remove('is-open');
              }
            });

            // Toggle the current accordion item's open state.
            item.classList.toggle('is-open');
          });

        });
    }
  };
})(Drupal, once);
