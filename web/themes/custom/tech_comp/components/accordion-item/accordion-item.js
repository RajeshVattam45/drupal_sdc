(function () {
  document.addEventListener('click', function (e) {
    const header = e.target.closest('.accordion-item__header');
    if (!header) return;

    const item = header.closest('.accordion-item');

    document.querySelectorAll('.accordion-item').forEach(el => {
      if (el !== item) {
        el.classList.remove('is-open');
      }
    });

    item.classList.toggle('is-open');
  });
})();
