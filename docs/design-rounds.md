# Design rounds

Five iterative loops on the refactored site. Each round: the current build is
put in front of a simulated multicultural focus group of ten women aged 20–30
(Mei 🇨🇳, Priya 🇮🇳, Yuki 🇯🇵, Camila 🇧🇷, Sofía 🇪🇸, Rosie 🇬🇧, Lena 🇩🇪, Noor 🇸🇦,
Giulia 🇮🇹, Kasia 🇵🇱), their feedback is synthesised, and the next iteration
is built from it. No original content is removed at any point; where the
panel objected to content, it was re-presented rather than deleted.

---

## Round 1 — baseline conversion (commit `40f5edd`)

**What they saw:** the first static build. Swiss-editorial layout, Fraunces
display type on warm paper, cobalt accent, campus photo bands, all original
text carried over verbatim including the placeholder Latin.

### Phase 1 · Individual reactions

🇨🇳 **Mei:** The header and the name are strong. Then I scrolled and hit
paragraph after paragraph of lorem ipsum under "Recent favourite reading".
For a head of an AI group, shipping placeholder text is a negative-ROI
decision. It makes me doubt the parts that are real.

🇮🇳 **Priya:** Yaar, the one thing I would actually click on a professor's
page is "brief CV" and "detailed CV" — and they are not links. Same with
LATTES and Cristin. The information I need is the information that is
missing.

🇯🇵 **Yuki:** The paper colour and the serif are calm. He introduces himself
three times, though: in the hero, in "About", and again on the Lab page
under "Projects". Once would be enough.

🇧🇷 **Camila:** Nossa, the photo! He looks warm, he looks like someone who
would answer an e-mail. But on my phone the photo is below all the text. Put
the face first — the face is the reason I keep reading.

🇪🇸 **Sofía:** A Twitter timeline embedded in 2026 is a wall that half-loads.
And the "Positions" section says there are none, "Members" says they will be
listed. It is a website of promises. I know precariedad when I see it.

🇬🇧 **Rosie:** "Recent favourite reading" — in Latin. Ambitious. I scrolled on
my phone for what felt like a minute and it was still Latin. Otherwise it is
rather lovely, which is annoying.

🇩🇪 **Lena:** Structurally this is good: one h1, numbered sections, a real
definition list for contact data. But precision matters. "Samip, Nayan,
Pernille" with no surname, role or year is not an alumni list, it is a
guest book. And Sci-Hub and Z-Library linked from an official-looking
academic page is a legal exposure for him, not for us.

🇸🇦 **Noor:** A public page is a public room. Everything in it is fine for a
professor to show — office, institutional e-mail — except the personal Gmail
in the hero, which is a door he may not want left open. The dark mode is
beautiful; I read at night without lighting the room.

🇮🇹 **Giulia:** (hands up) The campus band with the brick and the yellow
OsloMet letters — che bello, that is the moment. The name set that large in
that serif is the second moment. Then the lorem arrives and the mood is gone.

🇵🇱 **Kasia:** Look. If half a page is fake Latin, I start wondering what
else is fake. The empty grey "Figure" boxes on the Archive page do the same
thing. The parts that are true are good. Show me only those, or label the
rest honestly.

### Phase 2 · Discussion

**Round 1**

🇬🇧 Rosie: Can we agree the Latin is the problem, not the design?
🇨🇳 Mei: The Latin is the symptom. The problem is nothing signals what is
finished and what is a draft.
🇵🇱 Kasia: Then label the drafts. I don't need it deleted, I need it honest.
🇯🇵 Yuki: Collapsed. Labelled. Out of the way.
🇧🇷 Camila: And the photo higher on mobile, gente, I keep saying it.

**Round 2**

🇩🇪 Lena: The alumni. Three first names. Is Nayan a man or a woman? The site
guessed "Alumnus". Don't guess.
🇮🇳 Priya: Exactly — being assumed is the worst feeling. "Former member" is
neutral and true.
🇪🇸 Sofía: Same with the Twitter box. Loading it without asking is assuming
I want to be tracked by X on a university page.
🇸🇦 Noor: A button. "Load timeline". Then it is my choice.

**Round 3**

🇮🇹 Giulia: Nobody has said the name. "Guga's Laboratorium". I love it. It is
a person, not a department.
🇨🇳 Mei: I find it slightly unserious for someone who runs an AI lab.
🇬🇧 Rosie: It's the only thing on the page with a personality. Keep it.
🇵🇱 Kasia: Keep it. Fix the Latin.
🇩🇪 Lena: Agreed on the name. Still want the Sci-Hub links reconsidered.

### Phase 3 · Heat check

| | Verdict | Why |
|---|---|---|
| 🇨🇳 Mei | Mixed | Excellent frame, unfinished picture |
| 🇮🇳 Priya | Mixed | Fix the links I would actually click |
| 🇯🇵 Yuki | 👍 | Calm; needs editing, not redesign |
| 🇧🇷 Camila | 👍 | Photo first on mobile and I'm happy |
| 🇪🇸 Sofía | Mixed | Stop the tracking embed |
| 🇬🇧 Rosie | 👍 | Annoyingly good, minus the Latin |
| 🇩🇪 Lena | Mixed | Precision on people and legal links |
| 🇸🇦 Noor | 👍 | Dark mode alone earns it |
| 🇮🇹 Giulia | 👍 | The brick band is the screenshot |
| 🇵🇱 Kasia | Mixed | Label what is not real |

### Phase 4 · Moderator summary

**Consensus (10/10):** the placeholder Latin must not be presented as
finished content. It should be visibly labelled as draft and collapsed so
that the true content dominates and the mobile page becomes scannable.

**Consensus (9/10):** the typography, paper palette, campus band and dark
mode are right. The direction should not change; the editing should.

**Fault lines:**
- *Name of the site.* Giulia, Rosie, Kasia, Camila want "Guga's
  Laboratorium" kept as the one personal note; Mei finds it unserious. The
  majority keeps it.
- *Piracy links.* Lena and Mei see institutional risk in Sci-Hub and
  Z-Library; Sofía and Giulia see them as a lived reality of underfunded
  research. Owner's decision; nothing removed in this round.

**Standout insights:**
- Priya: the unlinked CV lines are the highest-intent element on the page.
- Lena: gender was inferred from first names in the alumni labels.
- Noor and Sofía: the auto-loading third-party timeline is a consent issue.
- Camila: on phones the face should precede the essay.

**Recommendations, ranked by endorsement:**
1. Collapse and label every placeholder block as a draft (10).
2. Neutral "Former member" labels; never infer gender (9).
3. Make the timeline opt-in with a button (8).
4. Photo before text on small screens; larger photo on desktop (8).
5. Link or clearly mark CV, LATTES, Cristin (8).
6. Owner to reconsider Sci-Hub and Z-Library links (5).

**Market flags:** Noor and Priya both note that the personal Gmail address
being on the public hero is a choice the owner should make deliberately; it
is original content and stays unless he decides otherwise.

### Changes made for iteration 2
- Placeholder Latin on Home, Teaching and Archive wrapped in
  `<details class="draft">` disclosures labelled "Placeholder text (draft)".
  All paragraphs are still in the document; they are simply closed by default.
- Alumni labels changed to "Former member".
- Twitter timeline replaced by an opt-in "Load timeline" button; the widget
  script is only injected after the click. The original profile link remains.
- Hero photo enlarged and ordered first on phones.
- "brief CV", "detailed CV", LATTES, Cristin, Web of Science, Gnuplot,
  Inspera and XMGRace shown as visibly unlinked entries.
- Fraunces italic files dropped from the self-hosted font set (unused).
- Inline styles replaced by utility classes.
- Sci-Hub / Z-Library links kept, flagged for the owner.

---

## Round 2 — drafts labelled, timeline opt-in (commit `e7d2f5b`)

**What they saw:** the placeholder Latin collapsed behind "Placeholder text
(draft)" disclosures, "Former member" labels, an opt-in timeline button, the
portrait first on phones, self-hosted fonts.

### Phase 1 · Individual reactions

🇨🇳 **Mei:** Now the home page reads like a finished person with an
unfinished appendix, which is the correct order. I would never press "Load
timeline", but I respect being asked.

🇮🇳 **Priya:** "Placeholder text (draft) · 35 paragraphs" made me laugh out
loud — that is honest. The CV lines are still just sentences, though. I want
a row of the things I can actually click: ORCID, Scholar, e-mail, right under
his name.

🇯🇵 **Yuki:** I printed the Lab page to PDF to read on the train. It ends
after "Positions". The people are gone. The same happens in reader mode.

🇧🇷 **Camila:** Face first on the phone. Gente, I'm happy. The little
"PORTRAIT · NOVEMBER 2020" under it is a nice touch, it feels like a museum
label.

🇪🇸 **Sofía:** On my phone the line above his name — associate professor,
department, OsloMet — wraps into three lines of typewriter capitals. It
looks like a terminal error, not a title.

🇬🇧 **Rosie:** The footer says "follow me on the following platforms" and
four of the six buttons are greyed out. Six buttons, two work. It's a bit
"exit through the gift shop, gift shop closed".

🇩🇪 **Lena:** Progress. Two things remain imprecise: the contact list says
"Role / Role / Role" three times instead of "Roles" once, and "Information
about the lab" is a description, not a name — the names are Mørk Lab and
Living Dynamics Lab, they should be the heading.

🇸🇦 **Noor:** Dark mode follows my phone, but my phone is on light for family
reasons and I would still want this site dark at night. A switch on the page
would let me choose in the moment, without changing anything visible on my
device.

🇮🇹 **Giulia:** The alumni list now says "Former member" three times, like a
spreadsheet column. The heading already says alumni; let the names breathe.

🇵🇱 **Kasia:** Look, the honesty labels fixed my main problem. But Yuki is
right — I scrolled fast on the Lab page and for a second the members section
was blank. If it can be blank for a second, it can be blank forever on a bad
day.

### Phase 2 · Discussion

**Round 1**

🇯🇵 Yuki: The disappearing sections are the priority.
🇵🇱 Kasia: Agreed. Content that depends on a script to become visible is
content that can fail.
🇩🇪 Lena: The fix is in CSS, not in more JavaScript. It should be visible by
default and animated only as an extra.
🇬🇧 Rosie: I didn't notice it, but I also didn't print anything since 2019.

**Round 2**

🇮🇳 Priya: Quick links under the name. ORCID, Scholar, e-mail. Three things.
🇨🇳 Mei: Three, not six. The moment it becomes a toolbar it is a corporate
site.
🇧🇷 Camila: And "e-mail" as a real button so on the phone it just opens.
🇸🇦 Noor: With the institutional address, not the Gmail. The Gmail is
already in the paragraph; it doesn't need a button too.

**Round 3**

🇮🇹 Giulia: Can we talk about the footer? (gestures) The grey circles.
🇬🇧 Rosie: Keep the icons, he clearly intends to fill them. Just don't let my
keyboard land on a button that does nothing.
🇪🇸 Sofía: And the typewriter title line on mobile — shorter, or wrap it
kindly.
🇩🇪 Lena: "Wrap it kindly" is not a specification. Balance the lines and
reduce the letter-spacing on small screens.
🇪🇸 Sofía: That is what I said.

### Phase 3 · Heat check

| | Verdict | Why |
|---|---|---|
| 🇨🇳 Mei | 👍 | Correct hierarchy of truth now |
| 🇮🇳 Priya | Mixed | Still no quick way to the things I'd click |
| 🇯🇵 Yuki | Mixed | Sections vanish in print and reader mode |
| 🇧🇷 Camila | 👍 | Face first, done |
| 🇪🇸 Sofía | Mixed | Mobile kicker line |
| 🇬🇧 Rosie | 👍 | Footer quibble only |
| 🇩🇪 Lena | Mixed | Three precision items, one of them structural |
| 🇸🇦 Noor | 👍 | Wants a theme switch, otherwise sold |
| 🇮🇹 Giulia | 👍 | Let the alumni names breathe |
| 🇵🇱 Kasia | Mixed | Robustness of the reveal |

### Phase 4 · Moderator summary

**Consensus (10/10):** the draft disclosures resolved round 1's central
objection. Nobody asked for the placeholder text to be removed.

**Consensus (8/10):** below-the-fold sections must be visible without
JavaScript succeeding; reveal animation should be an enhancement in CSS.

**Fault lines:**
- *Quick links.* Priya, Camila, Noor want them; Mei accepts three at most.
  Resolution: exactly three, institutional e-mail only.
- *Footer icons.* Rosie and Giulia want them kept as intent; Lena wants dead
  controls out of the tab order. Resolution: kept, dimmed, unfocusable.

**Standout insights:**
- Yuki and Kasia independently found the reveal failure by different routes
  (print, fast scroll).
- Noor's theme switch is a privacy-adjacent request: choice on the page, not
  on the device.
- Lena's naming point: lab names should be the heading; the description
  becomes the eyebrow.

**Recommendations, ranked by endorsement:**
1. Make reveals CSS-only with content visible by default (8).
2. Three quick links under the hero (7).
3. Dead footer links unfocusable and clearly dimmed (7).
4. Mobile kicker: balanced lines, tighter tracking (6).
5. "Roles" grouped once; alumni labels reduced to names (6).
6. Lab heading uses the lab names (5).
7. On-page theme switch (4; scheduled for a later round).

### Changes made for iteration 3
- Reveal now uses a CSS scroll-driven animation (`animation-timeline: view()`)
  inside `@supports`, with `prefers-reduced-motion` respected. Without
  support, everything is simply visible. The IntersectionObserver code is
  removed.
- Three quick links (ORCID, Google Scholar, institutional e-mail) under the
  hero text.
- Contact list groups the three roles under one "Roles" term.
- Lab page: heading is "Mørk Lab, Living Dynamics Lab"; eyebrow is
  "Information about the lab". Alumni rows show names only.
- Footer: unlinked platform icons carry `aria-disabled` and are removed
  from the tab order; the icons themselves stay.
- Mobile kicker: balanced wrapping and reduced letter-spacing under 52em.
- Screenshot script scrolls each page before capture.
