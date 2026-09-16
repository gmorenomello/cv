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
