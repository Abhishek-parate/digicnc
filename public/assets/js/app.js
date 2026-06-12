(() => {
  const $ = (selector, root = document) => root.querySelector(selector);
  const $$ = (selector, root = document) => Array.from(root.querySelectorAll(selector));

  const mobileToggle = $('[data-mobile-toggle]');
  const mobileMenu = $('[data-mobile-menu]');
  if (mobileToggle && mobileMenu) {
    mobileToggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  }

  const counters = $$('[data-counter]');
  if (counters.length) {
    const animateCounter = (element) => {
      const target = Number(element.dataset.counter || 0);
      const duration = 1100;
      const start = performance.now();
      const tick = (time) => {
        const progress = Math.min((time - start) / duration, 1);
        element.textContent = Math.round(target * progress).toLocaleString('en-IN');
        if (progress < 1) requestAnimationFrame(tick);
      };
      requestAnimationFrame(tick);
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.35 });

    counters.forEach((counter) => observer.observe(counter));
  }

  const filterButtons = $$('[data-gallery-filters] [data-filter]');
  const galleryItems = $$('[data-gallery-grid] [data-category]');
  filterButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const filter = button.dataset.filter;
      filterButtons.forEach((btn) => btn.classList.remove('is-active'));
      button.classList.add('is-active');
      galleryItems.forEach((item) => {
        const visible = filter === 'all' || item.dataset.category === filter;
        item.classList.toggle('hidden', !visible);
      });
    });
  });

  const modal = $('[data-lightbox-modal]');
  const modalImage = $('[data-lightbox-image]');
  const modalTitle = $('[data-lightbox-title]');
  const closeLightbox = () => {
    if (!modal) return;
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    modal.setAttribute('aria-hidden', 'true');
  };

  $$('[data-lightbox]').forEach((button) => {
    button.addEventListener('click', () => {
      if (!modal || !modalImage || !modalTitle) return;
      modalImage.src = button.dataset.lightbox || '';
      modalImage.alt = button.dataset.title || 'Digi CNC gallery image';
      modalTitle.textContent = button.dataset.title || '';
      modal.classList.remove('hidden');
      modal.classList.add('flex');
      modal.setAttribute('aria-hidden', 'false');
    });
  });

  $('[data-lightbox-close]')?.addEventListener('click', closeLightbox);
  modal?.addEventListener('click', (event) => {
    if (event.target === modal) closeLightbox();
  });
  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') closeLightbox();
  });

  $$('.rich-editor').forEach((editor) => {
    editor.addEventListener('input', () => {
      editor.style.minHeight = '240px';
    });
  });

  $$('input[name="title"], input[name="name"]').forEach((input) => {
    input.addEventListener('blur', () => {
      const form = input.closest('form');
      const slug = form?.querySelector('input[name="slug"]');
      if (!slug || slug.value.trim() !== '') return;
      slug.value = input.value
        .toLowerCase()
        .trim()
        .replace(/[^a-z0-9]+/g, '-')
        .replace(/(^-|-$)/g, '');
    });
  });
})();
