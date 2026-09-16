/**
 * Guga's Laboratorium — site behaviour.
 * Progressive enhancement only: every page is fully usable without this file.
 */

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

/* ---------- Navigation ---------- */

function markActiveNavLink(): void {
  const current = (window.location.pathname.split('/').pop() || 'index.html').toLowerCase();
  document.querySelectorAll<HTMLAnchorElement>('.site-nav a[href]').forEach((link) => {
    const target = (link.getAttribute('href') || '').toLowerCase();
    if (target === current) {
      link.setAttribute('aria-current', 'page');
    }
  });
}

function syncMobileNav(): void {
  const toggle = document.getElementById('nav-toggle') as HTMLInputElement | null;
  const label = document.querySelector<HTMLLabelElement>('label[for="nav-toggle"]');
  if (!toggle || !label) return;

  const update = (): void => {
    label.setAttribute('aria-expanded', String(toggle.checked));
  };
  toggle.addEventListener('change', update);
  update();

  // Close the menu with Escape
  document.addEventListener('keydown', (event: KeyboardEvent) => {
    if (event.key === 'Escape' && toggle.checked) {
      toggle.checked = false;
      update();
      label.focus();
    }
  });
}

/* ---------- Scroll to top ---------- */

function initScrollToTop(): void {
  const button = document.getElementById('to-top') as HTMLButtonElement | null;
  if (!button) return;

  const threshold = 480;
  let ticking = false;

  const update = (): void => {
    button.toggleAttribute('data-visible', window.scrollY > threshold);
    ticking = false;
  };

  window.addEventListener(
    'scroll',
    () => {
      if (!ticking) {
        window.requestAnimationFrame(update);
        ticking = true;
      }
    },
    { passive: true }
  );

  button.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: prefersReducedMotion.matches ? 'auto' : 'smooth' });
  });

  update();
}

/* ---------- Reveal on scroll ---------- */

function initReveal(): void {
  const targets = document.querySelectorAll<HTMLElement>('[data-reveal]');
  if (targets.length === 0) return;

  if (prefersReducedMotion.matches || !('IntersectionObserver' in window)) {
    targets.forEach((el) => el.setAttribute('data-revealed', ''));
    return;
  }

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          (entry.target as HTMLElement).setAttribute('data-revealed', '');
          observer.unobserve(entry.target);
        }
      });
    },
    { rootMargin: '0px 0px -8% 0px', threshold: 0.1 }
  );

  targets.forEach((el) => observer.observe(el));
}

/* ---------- Obfuscated e-mail ---------- */

function initEmailLinks(): void {
  document.querySelectorAll<HTMLElement>('[data-email]').forEach((el) => {
    const raw = el.dataset.email || el.textContent || '';
    const address = raw.replace(/\s*\(at\)\s*|\s+AT\s+/g, '@').replace(/\s*\(dot\)\s*/g, '.').trim();
    if (!address.includes('@')) return;

    const link = document.createElement('a');
    link.href = `mailto:${address}`;
    link.textContent = address;
    link.className = el.className;
    el.replaceWith(link);
  });
}

/* ---------- Links page filter ---------- */

function initLinkFilter(): void {
  const input = document.getElementById('link-filter') as HTMLInputElement | null;
  const status = document.getElementById('link-filter-status');
  if (!input) return;

  const groups = Array.from(document.querySelectorAll<HTMLElement>('[data-link-group]'));
  const items = Array.from(document.querySelectorAll<HTMLElement>('[data-link-group] li'));

  const apply = (): void => {
    const query = input.value.trim().toLowerCase();
    let visible = 0;

    items.forEach((item) => {
      const match = query === '' || (item.textContent || '').toLowerCase().includes(query);
      item.hidden = !match;
      if (match) visible += 1;
    });

    groups.forEach((group) => {
      const anyVisible = group.querySelector('li:not([hidden])') !== null;
      group.hidden = !anyVisible;
    });

    if (status) {
      status.textContent =
        query === '' ? '' : `${visible} link${visible === 1 ? '' : 's'} match “${input.value.trim()}”`;
    }
  };

  input.addEventListener('input', apply);
  input.addEventListener('keydown', (event: KeyboardEvent) => {
    if (event.key === 'Escape') {
      input.value = '';
      apply();
    }
  });
}

/* ---------- Boot ---------- */

document.documentElement.classList.add('js');

document.addEventListener('DOMContentLoaded', () => {
  markActiveNavLink();
  syncMobileNav();
  initScrollToTop();
  initReveal();
  initEmailLinks();
  initLinkFilter();
});
