"use strict";
/**
 * Guga's Laboratorium — site behaviour.
 * Progressive enhancement only: every page is fully usable without this file.
 */
const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
/* ---------- Navigation ---------- */
function markActiveNavLink() {
    const current = (window.location.pathname.split('/').pop() || 'index.html').toLowerCase();
    document.querySelectorAll('.site-nav a[href]').forEach((link) => {
        const target = (link.getAttribute('href') || '').toLowerCase();
        if (target === current) {
            link.setAttribute('aria-current', 'page');
        }
    });
}
function syncMobileNav() {
    const toggle = document.getElementById('nav-toggle');
    const label = document.querySelector('label[for="nav-toggle"]');
    if (!toggle || !label)
        return;
    const update = () => {
        label.setAttribute('aria-expanded', String(toggle.checked));
    };
    toggle.addEventListener('change', update);
    update();
    // Close the menu with Escape
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && toggle.checked) {
            toggle.checked = false;
            update();
            label.focus();
        }
    });
}
/* ---------- Scroll to top ---------- */
function initScrollToTop() {
    const button = document.getElementById('to-top');
    if (!button)
        return;
    const threshold = 480;
    let ticking = false;
    const update = () => {
        button.toggleAttribute('data-visible', window.scrollY > threshold);
        ticking = false;
    };
    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(update);
            ticking = true;
        }
    }, { passive: true });
    button.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: prefersReducedMotion.matches ? 'auto' : 'smooth' });
    });
    update();
}
/* ---------- Reveal on scroll ---------- */
function initReveal() {
    const targets = document.querySelectorAll('[data-reveal]');
    if (targets.length === 0)
        return;
    if (prefersReducedMotion.matches || !('IntersectionObserver' in window)) {
        targets.forEach((el) => el.setAttribute('data-revealed', ''));
        return;
    }
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.setAttribute('data-revealed', '');
                observer.unobserve(entry.target);
            }
        });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.1 });
    targets.forEach((el) => observer.observe(el));
}
/* ---------- Obfuscated e-mail ---------- */
function initEmailLinks() {
    document.querySelectorAll('[data-email]').forEach((el) => {
        const raw = el.dataset.email || el.textContent || '';
        const address = raw.replace(/\s*\(at\)\s*|\s+AT\s+/g, '@').replace(/\s*\(dot\)\s*/g, '.').trim();
        if (!address.includes('@'))
            return;
        const link = document.createElement('a');
        link.href = `mailto:${address}`;
        link.textContent = address;
        link.className = el.className;
        el.replaceWith(link);
    });
}
/* ---------- Links page filter ---------- */
function initLinkFilter() {
    const input = document.getElementById('link-filter');
    const status = document.getElementById('link-filter-status');
    if (!input)
        return;
    const groups = Array.from(document.querySelectorAll('[data-link-group]'));
    const items = Array.from(document.querySelectorAll('[data-link-group] li'));
    const apply = () => {
        const query = input.value.trim().toLowerCase();
        let visible = 0;
        items.forEach((item) => {
            const match = query === '' || (item.textContent || '').toLowerCase().includes(query);
            item.hidden = !match;
            if (match)
                visible += 1;
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
    input.addEventListener('keydown', (event) => {
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
