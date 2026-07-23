# Specification

The decisions every Stisla implementation agrees on. Names, anatomy, states, and scales that stay stable across ports.

## What this page is

Stisla is a design specification. The [Introduction](https://stisla.dev/docs/introduction) covers why this is the shape. This page covers what is in it. The contract every implementation honors for the components it ships. The vanilla bundle is the first implementation, and the React + Base UI and Vue ports come against the same surface. Coverage varies per port; see [Implementations](https://stisla.dev/docs/specification#implementations) at the bottom for status.

The component pages ( [Button](https://stisla.dev/docs/vanilla/button), [Card](https://stisla.dev/docs/vanilla/card), [Dialog](https://stisla.dev/docs/vanilla/dialog)) show each component in use, with its markup, parts, variants, and the knobs it exposes. This page documents what is fixed for every implementation. The default values those knobs ship with are implementation detail and live on the component pages.

## Coverage

The spec describes the full design language, and each implementation ships a subset of it. CSS and HTTP work the same way. The spec catalogs features, and the implementations cover what they cover.

One guardrail keeps the spec honest: a component lands here only when at least one implementation has committed to shipping it. The spec is not a wishlist.

Token, state, scale, and theming surfaces are foundational and apply equally to every implementation. Only component coverage varies, and that lives on the [Implementations](https://stisla.dev/docs/specification#implementations) table below.

## Tokens

The token surface is one Tailwind `@theme` layer. Every component reads it directly through `var()`: colors from`--color-*`, radius from `--radius-*`, shadow from `--shadow-*`, spacing from `--spacing`, and type from `--font-*`, `--text-*`,`--leading-*`, and `--font-weight-*`. A handful of tokens that Tailwind has no namespace for stay on`--st-*`. Every override flows through hover, active, and focus because state derivations run at runtime through`color-mix(in oklch, …)`. The names below are the spec; the default values are an implementation detail that lives in each impl’s theme file. [Theming](https://stisla.dev/docs/theming) covers how to override them.

### Intent

Five paired tokens for semantic color. Each pairs a base with a foreground so text contrast survives a base swap.

| Token             | Pair                         | Use                                                                             |
| ----------------- | ---------------------------- | ------------------------------------------------------------------------------- |
| `--color-primary` | `--color-primary-foreground` | Brand color. Drives the default `--color-ring` and the `--color-highlight` tint |
| `--color-success` | `--color-success-foreground` | Positive state                                                                  |
| `--color-warning` | `--color-warning-foreground` | Caution. Foreground stays dark across themes                                    |
| `--color-danger`  | `--color-danger-foreground`  | Destructive or error                                                            |
| `--color-info`    | `--color-info-foreground`    | Informational                                                                   |

### Surface tier

Background, foreground, and the surface levels for stacked panels.`--color-muted-foreground` is the secondary text color paired with every surface.

| Token                      | Use                                              |
| -------------------------- | ------------------------------------------------ |
| `--color-background`       | Page background                                  |
| `--color-foreground`       | Primary text color                               |
| `--color-surface`          | Default raised surface (cards, dialogs)          |
| `--color-surface-2`        | Second-tier surface stacked on `--color-surface` |
| `--color-surface-3`        | Third-tier surface for the densest stacks        |
| `--color-border`           | Hairline borders between surfaces                |
| `--color-border-strong`    | Higher-contrast border for emphasized edges      |
| `--color-muted-foreground` | Secondary text on any surface                    |

Two more tokens, `--color-overlay` and`--color-overlay-foreground`, paint theme-independent chrome (dark surfaces that stay dark in both themes, like an image overlay). They do not flip per theme.

### Neutral fill

A neutral rest fill for component chips: kbd, badge, avatar, progress and slider tracks, table striping, and the neutral button.

| Token             | Use                                                                                      |
| ----------------- | ---------------------------------------------------------------------------------------- |
| `--color-neutral` | Neutral rest fill for filled controls and chips. Paired with`--color-neutral-foreground` |

### Interactional

Tokens that paint interactive states regardless of intent.

| Token               | Use                                                                                                        |
| ------------------- | ---------------------------------------------------------------------------------------------------------- |
| `--color-accent`    | Hover background over neutral or transparent surfaces. Paired with `--color-accent-foreground`             |
| `--color-highlight` | Persistent selected or current background, a soft primary tint. Paired with `--color-highlight-foreground` |
| `--color-ring`      | Focus ring color. Defaults to `--color-primary` so brand swaps repaint focus                               |

### Geometry

| Token               | Use                                                                                                         |
| ------------------- | ----------------------------------------------------------------------------------------------------------- |
| `--radius`          | Radius base. The tiers below are multiples of it, so one override scales every corner in the system at once |
| `--radius-sm`       | Small radius tier, for chips and inline shapes                                                              |
| `--radius-md`       | Default radius tier for everyday surfaces                                                                   |
| `--radius-lg`       | Large radius tier for elevated surfaces                                                                     |
| `--shadow-sm`       | Soft floating elevation, for tooltip-class surfaces                                                         |
| `--shadow-md`       | Default elevation, for cards, dropdowns, popovers, toasts, accordion                                        |
| `--shadow-lg`       | Modal elevation, for dialog and drawer                                                                      |
| `--shadow-xl`       | Highest elevation, unassigned by default, for the most-lifted surfaces                                      |
| `--spacing`         | Spacing base. Every padding, gap, and height is a multiple of it via `--spacing(n)`                         |
| `--st-border-width` | Width of every bordered shape's outline. Internal dividers stay literal 1 px                                |

The table lists the tiers the components use. The full Tailwind scale (`--radius-xs` through `--radius-4xl`) is overridden too, each a multiple of `--radius`, so utilities like `rounded-xl` stay on the same ramp and one override scales every tier together; you can still override a single tier on its own. The shadow tiers stay independent values, so a theme that wants every shadow flat overrides each tier.

### Type

| Token         | Use                              |
| ------------- | -------------------------------- |
| `--font-sans` | Default UI font stack            |
| `--font-mono` | Monospace stack for code and kbd |

Font size (`--text-*`), line height (`--leading-*`), weight (`--font-weight-*`), letter spacing, and easing are Tailwind’s default scales. Stisla keeps them as-is and references them directly.

### Z-index and duration

The z-index scale (`--z-index-dropdown` through`--z-index-tooltip`) and the duration scale (`--transition-duration-fast`,`--transition-duration-normal`,`--transition-duration-slow`) ride Tailwind’s own namespaces, so each entry also generates a utility (`z-modal`, `duration-fast`). Components reference the variables directly; the values are force-emitted so those raw references resolve even where no utility is used.

### No-namespace tokens

Only `--st-border-width` has no matching Tailwind namespace. It is a single global default thickness rather than a scale, so it lives on `:root` and components read it directly.

### Per-component tokens

Every component exposes a `--<block>-*` surface that falls back to the global tokens above. `--button-radius`falls back to `--radius-md`, `--card-bg` falls back to `--color-surface`, and so on. The names of those per-component tokens are part of the spec, but the defaults are set by each implementation. See the Customization section at the bottom of each component page for the catalog.

Because each knob falls back to a global token, you can retheme one component by setting its `--<block>-*` variables on a wrapper, or shift the whole system by changing the global token underneath. The fallback resolves at the component element, so wrapper overrides flow through correctly.

## Component anatomy

Every component is a BEM block with a fixed set of element slots.`.card` has `__header`, `__body`, and`__footer`; `.dialog` has`__backdrop`, `__panel`, and`__content`. A port can render those slots with any tag or framework primitive it likes, but the slot names are the contract. A user who learns Card on one implementation should find the same parts on the next.

### Naming

Block, element, modifier. The block is the component root (`.card`). Elements are its parts, joined with`__` (`.card__header`). Modifiers are variants, joined with `--` (`.button--primary`). The full slot list for each block lives on its [component page](https://stisla.dev/docs/vanilla/card), next to the live demos, so it cannot drift from the implementation. Treat the component pages as the source of truth for slot names; this page fixes the rules they all follow.

### Intent over appearance

Variants that carry meaning are named for the meaning, never the paint. A control is `--primary` or `--danger`, not `--blue` or `--red`. The name says what the variant is for, so it survives a brand swap and reads the same on every component that offers it. The intent set is fixed:`primary`, `success`, `warning`,`danger`, `info`, and the toned-down`neutral` and `tertiary`.

Emphasis is a separate axis, and it takes a name for what it renders because rendering is all it is. `--soft` is a tinted fill,`--outline` a bordered transparent one, and`--ghost` a fill that surfaces only on interaction, with solid as the unmodified default. No intent hides under these. A fill that appears on hover is only a rendering, so the visual name is the honest one. The two axes are orthogonal and compose on the root. `.button--danger.button--outline` reads as danger intent in outline emphasis, and neither rule reaches into the other.

Everything else a modifier expresses follows the same test. Size, structure, and orientation take descriptive names (`--sm`,`--vertical`, `--block`) because there is no meaning underneath them to name instead. The size names are a shared vocabulary. `--sm` means the small step on every component that has one, while the actual width or height each step resolves to is the component’s own. A modifier reads as intent only when there is intent to read.

### Flat, never nested

Modifiers stay flat on the root and compose. A button can be`.button--primary.button--lg` without either rule reaching into the other. Parts stay flat on the root’s descendants. No modifier nests inside another, and no rule reaches into a bare HTML tag, so a component’s CSS expresses only what the component contributes and nothing leaks in from the surrounding document.

### Seamless

A few modifier names carry one fixed meaning across every block they land on, and `--seamless` is the one worth stating outright. It removes a block’s own frame so the block reads as part of its container instead of a thing set on top of it. What the frame is depends on the component: a bordered block drops its border, a block with its own background drops the background and radius, a raised block drops its shadow. The intent stays fixed while the mechanics follow the component.

It shows up wherever one component sits inside another:`.list-group--seamless` inside a card,`.media--seamless` as a menu row,`.accordion--seamless`, `.table--seamless`, and`.input--seamless` for a field that reads as text. A separate modifier, `--flush-start` and `--flush-end`, handles a different job: it cancels one side’s padding with a negative margin so a control aligns hard to its container edge (`.button--flush-start`). Same instinct, different mechanic, so it keeps its own name.

### Knobs, and what isn’t one

Every visual decision a consumer might reasonably tune reads a`--<block>-*` custom property whose fallback default chains to a global token. The Per-component tokens note above covers the fallback mechanics; reading each knob through a `var()`fallback is what keeps it overridable from an ancestor scope.

```
.card {
  background:     var(--card-bg, var(--color-surface));
  border-radius:  var(--card-radius, var(--radius-lg));
  box-shadow:     var(--card-shadow, var(--shadow-md));
}
.avatar--circle { --avatar-radius: 9999px; }   /* a modifier reassigns one knob */
```

Not every declaration is a knob, and the restraint is deliberate. A property becomes a variable when a designer would tune it per project (color, radius, spacing, type), when it is a meaningful per-instance override (a button tone, a dialog width), or when several components share one recipe (the focus ring, an overlay scrim). It stays a literal when it is internal tuning that only reads as part of a recipe (the state-derivation percentages), when it only changes sensibly alongside other internals, or when no one can articulate a reason to change it. A smaller public surface means fewer accidental breakages and less to document. Adding a knob later is cheap; removing one is a breaking change, so each implementation starts conservative.

### Paired foregrounds

Every background-providing token ships a paired`-foreground`. If a component introduces a new background variable, it introduces the paired foreground at the same time, so a token override never strands a text color against an unreadable backdrop.

Component classes ship in `@layer components`. Utility classes ship in `@layer utilities`, a later cascade layer, so a utility always wins over a component without`!important`. Stisla does not ship its own grid; layout is plain CSS and Tailwind utilities.

## States

Interactive surfaces answer to a fixed vocabulary. Implementations choose how each state paints (the tokens decide that), but the state names and the runtime hooks below are part of the contract.

### Interactive states

Every interactive component supports the same six states. Pseudo-classes drive the first four, and the rest are explicit.

| State    | Trigger                                                             | Notes                                                                                                      |
| -------- | ------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| Rest     | default                                                             | The base painted by the component's tokens                                                                 |
| Hover    | `:hover`                                                            | Derives at runtime from the base via`color-mix(in oklch, …)`. The exact curve is an implementation default |
| Active   | `:active`                                                           | Derives at runtime, a step beyond hover                                                                    |
| Focus    | `:focus-visible`                                                    | Ring derives from `--color-ring`. Never`:focus` for the visible ring                                       |
| Disabled | `:disabled` on form controls,`aria-disabled="true"` on link buttons | Tone reduces; pointer events block                                                                         |
| Loading  | `aria-busy="true"`                                                  | Spinner replaces or augments content. Click is blocked while applied                                       |

### Runtime state hooks

Two prefixes, split by origin. Primitive-library-aligned states use`[data-state]`. Stisla-original states use data attributes named for the specific concept.

| Hook                                 | Components                                                     | Meaning                         |
| ------------------------------------ | -------------------------------------------------------------- | ------------------------------- |
| `data-state="open"` / `"closed"`     | Accordion, Collapsible, Dialog, Drawer, Menu, Popover, Tooltip | Disclosure open or closed       |
| `data-state="active"` / `"inactive"` | Tabs, Toggle, Toggle group                                     | Selected / current vs. not      |
| `data-state="checked"`               | Checkbox, Radio, Switch                                        | On state of a binary control    |
| `aria-busy="true"`                   | Button, Input                                                  | Async work in flight            |
| `[data-collapsed]`                   | Sidebar                                                        | Persistent rail-collapsed state |
| `[data-indeterminate]`               | Checkbox, Progress                                             | Tri-state or unknown            |
| `[aria-invalid]`, `:user-invalid`    | Form controls                                                  | Validation failure              |

## Interactivity

Components that open, close, select, or toggle expose their state through the runtime hooks above. How that state gets set is the implementation’s job. Each implementation drives interactivity through a primitive layer suited to its framework, and the same CSS paints the result, so a `data-state="open"` dialog looks identical no matter what set the attribute.

| Implementation | Interactivity layer                                                                                                      |
| -------------- | ------------------------------------------------------------------------------------------------------------------------ |
| Vanilla        | A small runtime drives `data-stisla-*` markup, backed by a few vendored primitives for positioning and focus containment |
| React          | Base UI headless primitives                                                                                              |
| Vue            | Reka (planned)                                                                                                           |

The contract is the state vocabulary and the behavior, whatever library sits underneath. A port may also ship a different set of interactive components; see [Coverage](https://stisla.dev/docs/specification#coverage). The runtime details for the vanilla implementation live on the [JavaScript](https://stisla.dev/docs/vanilla/javascript) page.

## Scales

Three knobs reshape the system. Implementations expose them as global tokens, and per-component overrides ride on top.

| Knob    | Token                                        | Range                                                                                                            |
| ------- | -------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| Radius  | `--radius-sm` / `--radius-md` /`--radius-lg` | Three independent tiers, from 0 (square) to roomy. Components pick a tier; override the tier to reshape rounding |
| Spacing | `--spacing`                                  | 0.25rem base. Every padding, gap, and height is a multiple of it. Raise for roomier, lower for compact           |
| Brand   | `--color-primary`                            | Any OKLCH (or any color), repaints every primary-toned surface, hover, active, focus, and highlight              |

## Theming

Light and dark are deltas on the same token surface rather than separate themes. A port honors them by writing two blocks. A base, and a dark override scoped to `[data-theme="dark"]` or`.dark`.

### Flips per theme

- Surface tier: `--color-background`,`--color-foreground`, `--color-surface`,`--color-surface-2`, `--color-surface-3`,`--color-border`, `--color-border-strong`,`--color-muted-foreground`
- Neutral fill: `--color-neutral`,`--color-neutral-foreground`
- Interactional pairs: `--color-accent`,`--color-accent-foreground`

### Stays put

- Intents and their foregrounds: `--color-primary`,`--color-success`, `--color-warning`,`--color-danger`, `--color-info`
- Overlay chrome: `--color-overlay`,`--color-overlay-foreground`
- Geometry, spacing, and type: `--radius-*`,`--shadow-*`, `--spacing`,`--font-sans`, `--font-mono`

Per-component `-foreground` pairings are mandatory. If a component introduces a new background variable, it introduces the paired foreground at the same time, so a token override never strands a text color.

## Accessibility

Accessibility is part of the contract. Every implementation operates the same way from the keyboard, exposes the same roles and relationships to assistive technology, and keeps the painted state and the announced state in sync. The mechanics differ by framework; the guarantees do not.

### Keyboard

Every interactive component is fully operable without a pointer. Enter and Space activate controls, Escape dismisses overlays, and arrow keys move within composites like Menu, Tabs, and Radio group. Tab order follows the document, and a composite is a single tab stop with arrow-key movement inside it rather than one stop per child. The exact keys each component binds live on its [component page](https://stisla.dev/docs/vanilla/button), next to the demos, so they cannot drift from the implementation.

### Roles and relationships

A port may render a slot with any tag, but it lands on the role the spec fixes for that slot. A Dialog is a dialog to assistive technology whether it is built from a `div` or a framework primitive. Labels and descriptions are wired through the matching aria attributes. A dialog points at its title and description, a field points at its error, and a control that shows only an icon carries an accessible name.

### State is announced, not just painted

The runtime hooks in [States](https://stisla.dev/docs/specification#states) double as the accessibility surface. The attribute that paints a state is the one that announces it. Open and closed ride`aria-expanded`, selection rides `aria-selected`or `aria-checked`, async work rides `aria-busy`, and a failed field rides `aria-invalid`. Assistive technology and the stylesheet read one source of truth, so they cannot disagree.

### Focus management

The visible ring is covered under [Focus](https://stisla.dev/docs/specification#focus). Beyond paint, overlays manage focus. Opening a Dialog or Drawer moves focus inside and contains it there, and closing returns focus to the trigger. This is behavior the interactivity layer owns, and every port honors it however its primitives express it.

### Contrast and motion

Paired foregrounds are an accessibility mechanism as much as a theming one. Because every background token ships a foreground tuned against it, a token swap repaints text and surface together and never strands one against the other. [Motion](https://stisla.dev/docs/specification#motion) collapses under `prefers-reduced-motion` while leaving the start and end states intact, so a reduced-motion user still lands on a settled, addressable state.

System-wide guarantees live here. The specifics each component adds, the exact keys it binds, the roles its slots take, and the labels it requires, live on the component page so they stay next to the markup that has to deliver them.

## Focus

One ring rule across the system. The visible ring derives from`--color-ring`, which defaults to`--color-primary` so a brand swap repaints every focus. The ring is rendered with `box-shadow` or `outline`, but not both. Only `:focus-visible` paints the ring.`:focus` on its own is invisible because it fires on mouse clicks too.

## Motion

Disclosure components (Accordion, Collapsible, Dialog, Drawer, Menu, Popover, Toast, Tooltip) transition between`data-state="open"` and `data-state="closed"`. The shape of that transition is up to the implementation. The contract is that both states are settled and addressable.`prefers-reduced-motion` collapses the transition to zero duration but keeps the start and end states intact.

## Implementations

One spec, many implementations. Status as of `3.0`.

| Implementation   | Status         | Notes                                                                                  |
| ---------------- | -------------- | -------------------------------------------------------------------------------------- |
| Vanilla CSS + JS | Ships in `3.0` | Reference implementation. [Installation](https://stisla.dev/docs/vanilla/installation) |
| React            | In progress    | Same tokens, same class names, headless interactions via Base UI                       |
| Vue              | Planned        | Same tokens, same class names                                                          |

Every implementation reads from the same Tailwind `@theme`token surface and ships the same BEM class names. A page authored against one implementation should swap to another without rewriting markup.
