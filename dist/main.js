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
    if (!toggle)
        return;
    // Close the menu with Escape and return focus to the control
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && toggle.checked) {
            toggle.checked = false;
            toggle.focus();
        }
    });
    // Close the menu when a link inside it is activated
    document.querySelectorAll('.site-nav a').forEach((link) => {
        link.addEventListener('click', () => {
            toggle.checked = false;
        });
    });
}
const THEME_COLORS = { light: '#faf8f4', dark: '#1b1916' };
function readStoredTheme() {
    try {
        const value = localStorage.getItem('theme');
        return value === 'light' || value === 'dark' ? value : null;
    }
    catch {
        return null;
    }
}
function initThemeToggle() {
    const button = document.querySelector('[data-theme-toggle]');
    if (!button)
        return;
    const root = document.documentElement;
    const systemDark = window.matchMedia('(prefers-color-scheme: dark)');
    const apply = (chosen) => {
        if (chosen) {
            root.setAttribute('data-theme', chosen);
        }
        else {
            root.removeAttribute('data-theme');
        }
        const effective = chosen ?? (systemDark.matches ? 'dark' : 'light');
        button.setAttribute('aria-pressed', String(effective === 'dark'));
        button.setAttribute('aria-label', effective === 'dark' ? 'Switch to light theme' : 'Switch to dark theme');
        document
            .querySelectorAll('meta[name="theme-color"]')
            .forEach((meta) => meta.setAttribute('content', THEME_COLORS[effective]));
    };
    apply(readStoredTheme());
    button.hidden = false;
    button.addEventListener('click', () => {
        const next = button.getAttribute('aria-pressed') === 'true' ? 'light' : 'dark';
        try {
            localStorage.setItem('theme', next);
        }
        catch {
            /* storage unavailable: the choice lasts for this page only */
        }
        apply(next);
    });
    systemDark.addEventListener('change', () => {
        if (!readStoredTheme())
            apply(null);
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
/* ---------- Disabled placeholder links ---------- */
function initDisabledLinks() {
    document.querySelectorAll('a[aria-disabled="true"]').forEach((link) => {
        link.addEventListener('click', (event) => event.preventDefault());
    });
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
    document.addEventListener('keydown', (event) => {
        const active = document.activeElement;
        const typing = active instanceof HTMLInputElement || active instanceof HTMLTextAreaElement;
        if (event.key === '/' && !typing && !event.ctrlKey && !event.metaKey && !event.altKey) {
            event.preventDefault();
            input.focus();
            input.select();
        }
    });
    input.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            input.value = '';
            apply();
        }
    });
}
/* ---------- Opt-in third-party timeline ---------- */
function initTimeline() {
    const button = document.querySelector('[data-load-timeline]');
    const box = document.getElementById('timeline');
    if (!button || !box)
        return;
    button.addEventListener('click', () => {
        button.disabled = true;
        button.textContent = 'Loading timeline…';
        const script = document.createElement('script');
        script.src = 'https://platform.twitter.com/widgets.js';
        script.async = true;
        script.charset = 'utf-8';
        script.onload = () => {
            box.setAttribute('data-loaded', '');
            button.hidden = true;
        };
        script.onerror = () => {
            button.disabled = false;
            button.textContent = 'Timeline could not be loaded. Try again';
        };
        document.body.append(script);
    });
}
/* ---------- Print: expand draft disclosures ---------- */
function initPrintExpansion() {
    const opened = [];
    window.addEventListener('beforeprint', () => {
        document.querySelectorAll('details.draft:not([open])').forEach((d) => {
            d.open = true;
            opened.push(d);
        });
    });
    window.addEventListener('afterprint', () => {
        opened.splice(0).forEach((d) => {
            d.open = false;
        });
    });
}
/* ---------- Boot ---------- */
document.documentElement.classList.add('js');
document.addEventListener('DOMContentLoaded', () => {
    markActiveNavLink();
    syncMobileNav();
    initThemeToggle();
    initScrollToTop();
    initDisabledLinks();
    initEmailLinks();
    initLinkFilter();
    initTimeline();
    initPrintExpansion();
});
