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

  const heroSlider = $('[data-hero-slider]');
  if (heroSlider) {
    const slides = $$('[data-hero-slide]', heroSlider);
    const copies = $$('[data-hero-copy]', heroSlider);
    const dots = $$('[data-hero-dot]', heroSlider);
    let activeSlide = 0;
    let sliderTimer;

    const showSlide = (index) => {
      activeSlide = (index + slides.length) % slides.length;
      slides.forEach((slide, slideIndex) => {
        slide.classList.toggle('hero-slide-active', slideIndex === activeSlide);
      });
      copies.forEach((copy, copyIndex) => {
        copy.classList.toggle('hero-copy-active', copyIndex === activeSlide);
      });
      dots.forEach((dot, dotIndex) => {
        dot.classList.toggle('hero-dot-active', dotIndex === activeSlide);
      });
    };

    const startSlider = () => {
      if (slides.length < 2) return;
      sliderTimer = window.setInterval(() => showSlide(activeSlide + 1), 5200);
    };

    const stopSlider = () => {
      if (sliderTimer) window.clearInterval(sliderTimer);
    };

    dots.forEach((dot) => {
      dot.addEventListener('click', () => {
        stopSlider();
        showSlide(Number(dot.dataset.heroDot || 0));
        startSlider();
      });
    });
    heroSlider.addEventListener('mouseenter', stopSlider);
    heroSlider.addEventListener('mouseleave', startSlider);
    startSlider();
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
const lightboxButtons = $$('[data-lightbox]');
const prevBtn = $('#prevBtn');
const nextBtn = $('#nextBtn');

let currentLightboxIndex = 0;

const showLightboxImage = (index) => {
  if (!modalImage || !modalTitle || !lightboxButtons.length) return;

  currentLightboxIndex = (index + lightboxButtons.length) % lightboxButtons.length;

  const button = lightboxButtons[currentLightboxIndex];

  modalImage.src = button.dataset.lightbox || '';
  modalImage.alt = button.dataset.title || 'Digi CNC gallery image';
  modalTitle.textContent = button.dataset.title || '';
};

const closeLightbox = () => {
  if (!modal) return;
 modal.style.display = 'none';
  modal.setAttribute('aria-hidden', 'true');
};

lightboxButtons.forEach((button, index) => {
  button.addEventListener('click', () => {
    if (!modal) return;

    showLightboxImage(index);

   modal.style.display = 'flex';
    modal.setAttribute('aria-hidden', 'false');
  });
});

nextBtn?.addEventListener('click', (event) => {
  event.stopPropagation();
  showLightboxImage(currentLightboxIndex + 1);
});

prevBtn?.addEventListener('click', (event) => {
  event.stopPropagation();
  showLightboxImage(currentLightboxIndex - 1);
});

$('[data-lightbox-close]')?.addEventListener('click', closeLightbox);

modal?.addEventListener('click', (event) => {
  if (event.target === modal) closeLightbox();
});

document.addEventListener('keydown', (event) => {
  if (!modal || modal.classList.contains('hidden')) return;

  if (event.key === 'Escape') closeLightbox();
  if (event.key === 'ArrowRight') showLightboxImage(currentLightboxIndex + 1);
  if (event.key === 'ArrowLeft') showLightboxImage(currentLightboxIndex - 1);
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

  $$('.lead-form').forEach((leadForm) => {
    const fieldConfig = {
      name: { required: true },
      phone: { required: true },
      email: { required: false },
      message: { required: true }
    };

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const phonePattern = /^(\+?91[-\s]?)?[6-9]\d{9}$/;
    const namePattern = /^[A-Za-z\s.'-]{2,60}$/;

    const getField = (key) => leadForm.querySelector(`[name="${key}"]`);
    const getErrorEl = (key) => leadForm.querySelector(`[data-error-for="${key}"]`);

    const showError = (key, message) => {
      const field = getField(key);
      const errorEl = getErrorEl(key);
      if (field) field.style.borderColor = '#dc2626';
      if (errorEl) {
        errorEl.textContent = message;
        errorEl.classList.remove('hidden');
      }
    };

    const clearError = (key) => {
      const field = getField(key);
      const errorEl = getErrorEl(key);
      if (field) field.style.borderColor = '';
      if (errorEl) {
        errorEl.textContent = '';
        errorEl.classList.add('hidden');
      }
    };

    const validateField = (key) => {
      const config = fieldConfig[key];
      const field = getField(key);
      if (!config || !field) return true;

      const value = field.value.trim();

      if (config.required && value === '') {
        showError(key, 'This field is required.');
        return false;
      }

      if (key === 'name' && value !== '' && !namePattern.test(value)) {
        showError(key, 'Enter a valid name (letters only).');
        return false;
      }

      if (key === 'phone' && value !== '' && !phonePattern.test(value.replace(/[\s-]/g, ''))) {
        showError(key, 'Enter a valid 10-digit phone number.');
        return false;
      }

      if (key === 'email' && value !== '' && !emailPattern.test(value)) {
        showError(key, 'Enter a valid email address.');
        return false;
      }

      if (key === 'message' && config.required && value.length < 10) {
        showError(key, 'Please add a few more details about your requirement.');
        return false;
      }

      clearError(key);
      return true;
    };

    Object.keys(fieldConfig).forEach((key) => {
      const field = getField(key);
      if (!field) return;
      field.addEventListener('blur', () => validateField(key));
      field.addEventListener('input', () => {
        const errorEl = getErrorEl(key);
        if (errorEl && !errorEl.classList.contains('hidden')) {
          validateField(key);
        }
      });
    });

    leadForm.addEventListener('submit', (event) => {
      const honeypot = leadForm.querySelector('input[name="website"]');
      if (honeypot && honeypot.value.trim() !== '') {
        return;
      }

      let isValid = true;
      let firstInvalidField = null;

      Object.keys(fieldConfig).forEach((key) => {
        const fieldIsValid = validateField(key);
        if (!fieldIsValid) {
          isValid = false;
          if (!firstInvalidField) firstInvalidField = getField(key);
        }
      });

      if (!isValid) {
        event.preventDefault();
        firstInvalidField?.focus();
      }
    });
  });
  document.querySelectorAll('section:not(.bg-slate-950):not(.bg-slate-900) p').forEach(function(el) {
    if (
        el.classList.contains('text-slate-500') ||
        el.classList.contains('text-slate-600') ||
        el.classList.contains('text-slate-400')
    ) {
        el.classList.remove('text-slate-500', 'text-slate-600', 'text-slate-400');
        el.classList.add('text-slate-800');
    }
});
})();