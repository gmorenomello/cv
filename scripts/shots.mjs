/**
 * Render every page in light and dark mode at desktop and phone widths,
 * save full-page screenshots, and report horizontal overflow and console
 * errors. Usage:
 *
 *   node scripts/shots.mjs [outDir] [baseUrl]
 *
 * Requires a running static server (npm run serve) and Chromium. Set
 * CHROME_PATH to point at a Chromium binary if it is not on the default path.
 */
import { chromium } from 'playwright-core';
import { mkdirSync } from 'node:fs';
import { join } from 'node:path';

const outDir = process.argv[2] ?? 'shots';
const base = process.argv[3] ?? 'http://127.0.0.1:8765';
const pages = ['index', 'lab', 'teaching', 'archive', 'links'];
const viewports = [
  { name: 'desktop', width: 1440, height: 900 },
  { name: 'phone', width: 390, height: 844 },
];
const schemes = ['light', 'dark'];

mkdirSync(outDir, { recursive: true });

const browser = await chromium.launch({
  executablePath: process.env.CHROME_PATH || undefined,
  args: ['--no-sandbox'],
});

let problems = 0;

for (const vp of viewports) {
  for (const scheme of schemes) {
    const context = await browser.newContext({
      viewport: { width: vp.width, height: vp.height },
      colorScheme: scheme,
      deviceScaleFactor: 1,
    });
    for (const page of pages) {
      const tab = await context.newPage();
      const errors = [];
      tab.on('console', (msg) => msg.type() === 'error' && errors.push(msg.text()));
      tab.on('pageerror', (err) => errors.push(String(err)));
      await tab.goto(`${base}/${page}.html`, { waitUntil: 'networkidle', timeout: 30000 }).catch(() => {});
      await tab.waitForTimeout(600);

      const report = await tab.evaluate(() => {
        const doc = document.documentElement;
        const overflow = doc.scrollWidth - doc.clientWidth;
        const wide = [];
        if (overflow > 1) {
          for (const el of document.body.querySelectorAll('*')) {
            const r = el.getBoundingClientRect();
            if (r.right > doc.clientWidth + 1 && r.width > 0) {
              const tag = el.tagName.toLowerCase();
              const cls = el.className && typeof el.className === 'string' ? '.' + el.className.split(' ').join('.') : '';
              wide.push(`${tag}${cls} right=${Math.round(r.right)} width=${Math.round(r.width)}`);
              if (wide.length >= 12) break;
            }
          }
        }
        return { overflow, wide };
      });

      const file = join(outDir, `${page}-${vp.name}-${scheme}.png`);
      await tab.screenshot({ path: file, fullPage: true });

      const flags = [];
      if (report.overflow > 1) flags.push(`OVERFLOW ${report.overflow}px`);
      if (errors.length) flags.push(`${errors.length} console error(s)`);
      if (flags.length) problems += 1;
      console.log(`${page.padEnd(9)} ${vp.name.padEnd(8)} ${scheme.padEnd(6)} ${flags.join(' · ') || 'ok'}`);
      report.wide.forEach((w) => console.log(`    ↳ ${w}`));
      errors.forEach((e) => console.log(`    ✖ ${e}`));
      await tab.close();
    }
    await context.close();
  }
}

await browser.close();
console.log(problems ? `\n${problems} page render(s) need attention.` : '\nAll pages clean.');
