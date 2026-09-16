# Guga’s Laboratorium

Personal academic website of Gustavo Borges Moreno e Mello, Associate
Professor of Computer Science at OsloMet. Static HTML, CSS and TypeScript;
no server-side code, no framework, no build step other than compiling the
TypeScript.

## Pages

| File | Content |
|---|---|
| `index.html` | Profile, research interests, positions and contact, opt-in X/Twitter timeline, reading list |
| `lab.html` | Mørk Lab / Living Dynamics Lab: projects, positions, members, alumni |
| `teaching.html` | Teaching philosophy, courses, PhD and Master thesis supervision |
| `archive.html` | Articles |
| `links.html` | Curated links with a live filter (`/` focuses it) |
| `404.html` | Not-found page (served automatically by GitHub Pages) |

Passages that are still placeholder text are kept in the pages but wrapped
in closed `<details class="draft">` disclosures labelled “Placeholder text
(draft)”, so nothing is lost and nothing pretends to be finished.

## Structure

```
css/style.css      design tokens and all styling (@layer-based, OKLCH colours)
css/fonts.css      self-hosted @font-face rules (Fraunces, Instrument Sans, JetBrains Mono)
fonts/             WOFF2 files, Latin and Latin-extended subsets only
src/ts/main.ts     site behaviour (TypeScript source)
dist/main.js       compiled output loaded by the pages
images/            photographs and icons; *_web.* are the optimised versions used by the pages
scripts/shots.mjs  renders every page in both themes at two widths and reports overflow
docs/design-rounds.md  record of the five focus-group design rounds
```

Header and footer are plain HTML repeated in each page so that every page
works with JavaScript disabled. The script only enhances: active nav
marking, theme switch, scroll-to-top, e-mail de-obfuscation, link filter,
opt-in timeline loading.

## Working on the site

```bash
npm install          # TypeScript and playwright-core (dev only)
npm run build        # compile src/ts/main.ts to dist/main.js
npm run watch        # recompile on change
npm run serve        # preview at http://127.0.0.1:8765
npm run shots        # screenshots + overflow report into ./shots (needs Chromium)
```

Commit `dist/main.js` together with changes to `src/ts/main.ts`; the pages
load the compiled file directly, so no build runs on the server.

To point the screenshot script at a specific Chromium binary set
`CHROME_PATH=/path/to/chrome`.

## Design

Art direction is documented at the top of `css/style.css`: Swiss-editorial
academic, ink on warm paper, one cobalt accent, hairline rules, Fraunces for
display type, Instrument Sans for text, JetBrains Mono for metadata. Colours
are defined once as OKLCH tokens; dark mode remaps the same tokens and can
be chosen on the page or follow the system. Motion respects
`prefers-reduced-motion`. A print stylesheet produces a clean light
document with the draft disclosures expanded.

## Deployment

Any static host works. On GitHub Pages, publish the repository root (or the
`main` branch) and the site is served as-is, including `404.html`.
