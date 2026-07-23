# Styling

How to restyle a component that already exists. Bump a knob, override a property that isn’t a knob yet, or hand-tune a state. Scoped variables plus BEM plus cascade order mean you never need !important.

## Where your CSS goes

Everything on this page is a few lines of CSS you write yourself, and they belong in `@layer components` — the same cascade layer Stisla’s own component rules live in. Layers are native CSS, so this works whether or not you run a build. Putting your rules in that layer lands them beside the framework’s, where the ordinary cascade decides: higher specificity wins, and at equal specificity the rule authored later wins. Your stylesheet loads after Stisla’s, so an equal-specificity override is yours.

**Without a build step.** Link your stylesheet after `stisla.css` and wrap your rules in the layer.

```
<link rel="stylesheet" href="stisla.css">
<link rel="stylesheet" href="app.css">
```

app.css

```
@layer components {
  .button--prominent-icon { --button-icon-size: 1.25em; }
  /* ...the rest of your component overrides... */
}
```

**With Vite and Tailwind.** Same layer. You just pull in Tailwind and the source theme at the top first, the same two setups from [Theming](https://stisla.dev/docs/theming#setting-up-overrides).

app.css

```
@import "tailwindcss";
@import "@stisla/style/theme.css";

@layer components {
  .button--prominent-icon { --button-icon-size: 1.25em; }
  /* ...the rest of your component overrides... */
}
```

Only the `@import` lines differ between the two. The rules inside the layer are identical, so the examples below show the rule alone — drop it into `@layer components` either way.

## Tweaking a knob that exists

The everyday case. You like the button, you just want the icon a bit larger. `--button-icon-size` defaults to`--spacing(4)` on every `.button`. Three escalation levels from least invasive to most. Stop at the one that matches how broad the change really is.

### Option A. Inline override

Bumps the icon size inside this one button. Tone, padding, height all stay default.

Default icon

Larger icon

```
<div class="flex flex-wrap items-center gap-4">
  <button type="button" class="button button--primary">
    <i data-lucide="upload"></i>
    Default icon
  </button>
  <button type="button" class="button button--primary" style="--button-icon-size: 1.25em">
    <i data-lucide="upload"></i>
    Larger icon
  </button>
</div>
```

### Option B. Your own scoped class

You want the icon-prominent treatment in more than one place. Write a modifier class once, apply it where you want it.

Upload

Download

```
<style>
  .button--prominent-icon { --button-icon-size: 1.25em; }
</style>
<div class="flex flex-wrap items-center gap-4">
  <button type="button" class="button button--primary button--prominent-icon">
    <i data-lucide="upload"></i>
    Upload
  </button>
  <button type="button" class="button button--neutral button--prominent-icon">
    <i data-lucide="download"></i>
    Download
  </button>
</div>
```

Specificity matches Stisla’s own rule (one class), and cascade order resolves it. No `!important`.

### Option C. Wrap a region

Every button inside a region gets the bigger icon. Useful for toolbars and command bars where the icon is the dominant read.

app.css

```
.toolbar .button { --button-icon-size: 1.25em; }
```

Higher specificity (two classes beat one), so this wins even if your stylesheet loads before Stisla’s. Reach for it when you can’t control load order, or when the change really belongs to a region rather than a button modifier.

## Tweaking when there’s no knob

Plenty of properties aren’t exposed as variables, by design. The [Specification](https://stisla.dev/docs/specification) covers which decisions become knobs and which stay literal. You still have a clean path: the same three escalation options, only now you’re targeting the property directly.

Scenario: you want uppercase button labels. `.button`doesn’t set `text-transform`, and there’s no`--button-text-transform` knob. You add the property directly.

### Option A. Inline style

Default

Uppercase

```
<div class="flex flex-wrap items-center gap-4">
  <button type="button" class="button button--primary">
    <i data-lucide="check"></i>
    Default
  </button>
  <button type="button" class="button button--primary" style="text-transform: uppercase">
    <i data-lucide="check"></i>
    Uppercase
  </button>
</div>
```

Inline always wins. No specificity battle.

### Option B. Your own scoped class

Default

Uppercase

```
<style>
  .button--caps { text-transform: uppercase; }
</style>
<div class="flex flex-wrap items-center gap-4">
  <button type="button" class="button button--primary">
    <i data-lucide="check"></i>
    Default
  </button>
  <button type="button" class="button button--primary button--caps">
    <i data-lucide="check"></i>
    Uppercase
  </button>
</div>
```

Same specificity as Stisla’s `.button` rule. Your stylesheet loads after, so cascade order resolves it.

### Option C. Region-scoped

app.css

```
.toolbar .button { text-transform: uppercase; }
```

Two classes beat one. Wins regardless of load order.

There’s a feedback loop here. If you find yourself overriding the same property in three or more places (one specific`text-transform`, one specific `padding`, one specific `font-weight`), that’s the signal it should become a Stisla variable. File an issue. The user-side overrides are the input to the public knob surface. That’s how`--button-rim-mix` got exposed when`.button-group` needed to lift it. Skip the issue when your override is genuinely one-off, project-specific, or just personal preference.

## No `!important` needed

You may have noticed none of the options above reach for`!important`. That’s the point of the model, and it holds in every case. Token changes inherit, so the cascade isn’t even involved in the _use_ of a variable. Property overrides resolve on the ordinary rules: inline beats any class, two classes beat one, and at equal specificity your stylesheet loads after Stisla’s so it wins. Set the variable on a wrapper and every descendant inherits it, no fight at all.

Default primary

Green via wrapperSoft retints

```
<div class="flex flex-wrap items-center gap-4">
  <button type="button" class="button button--primary">Default primary</button>
  <div class="flex flex-wrap items-center gap-3" style="--color-primary: oklch(0.65 0.18 149); --color-primary-foreground: oklch(1 0 0)">
    <button type="button" class="button button--primary">Green via wrapper</button>
    <button type="button" class="button button--soft button--primary">Soft retints</button>
  </div>
</div>
```

## State derivation and escape hatches

Stisla derives hover, active, and focus colors from a single source via `color-mix(in oklch, …)`. Change one variable and every state recomputes. This is the easy path. It’s also escapable at three levels when you want hand-tuned states. The reference is `.button`, but the same pattern shows up in alert, badge, dialog, kbd, list-group, scroll-area, table, and a dozen others.

### Level 1. Keep color-mix, swap the source

You like the derivation curve, you want a different brand color. Override `--button-tone` for this button only, or`--color-primary` for every primary-toned component (buttons, links, focus rings, soft highlights).

Default tone--button-tone (this button)

--color-primary (subtree)Soft follows

```
<div class="flex flex-wrap justify-center items-center gap-4">
  <button type="button" class="button button--primary">Default tone</button>
  <button type="button" class="button button--primary" style="--button-tone: oklch(0.6 0.2 30); --button-color: oklch(1 0 0)">--button-tone (this button)</button>
  <div class="flex flex-wrap items-center gap-3" style="--color-primary: oklch(0.6 0.2 30); --color-primary-foreground: oklch(1 0 0)">
    <button type="button" class="button button--primary">--color-primary (subtree)</button>
    <button type="button" class="button button--soft button--primary">Soft follows</button>
  </div>
</div>
```

Either way, hover, active, rim, and bevel all recompute through the same recipe (hover at 88%, active at 78%, rim at 85%). One write, full state machinery intact. Hover the buttons to see it.

### Level 2. Keep the variable surface, bypass color-mix per state

You want hand-picked swatches at each state instead of the derived progression. Set each state’s background directly.`color-mix` never runs because you’re writing the final value. Reach for this when the auto-derived ramp doesn’t match a designer’s hand-picked swatch, or isn’t right for an unusual hue.

Derived statesHand-tuned states

```
<style>
  .button--brand        { --button-bg: oklch(0.60 0.22 30); --button-color: oklch(1 0 0); --button-tone: oklch(0.60 0.22 30); }
  .button--brand:hover  { --button-bg: oklch(0.55 0.22 30); }
  .button--brand:active { --button-bg: oklch(0.50 0.24 30); }
</style>
<div class="flex flex-wrap items-center gap-4">
  <button type="button" class="button button--primary">Derived states</button>
  <button type="button" class="button button--brand">Hand-tuned states</button>
</div>
```

### Level 3. Skip the variable layer entirely

Plain CSS. Cascade and specificity resolve it; the variable layer isn’t involved at all. Reach for this when you’re styling something that doesn’t belong in Stisla’s tone model (a designer-supplied gradient CTA, for instance).

Stisla buttonCustom CTA

```
<style>
  .my-cta        { background: linear-gradient(135deg, oklch(0.7 0.2 290), oklch(0.65 0.22 350)); color: oklch(1 0 0); border: 0; padding: 0 1rem; height: 2.25rem; border-radius: 0.5rem; font-weight: 600; cursor: pointer; }
  .my-cta:hover  { filter: brightness(1.05); }
  .my-cta:active { filter: brightness(0.95); }
</style>
<div class="flex flex-wrap items-center gap-4">
  <button type="button" class="button button--primary">Stisla button</button>
  <button type="button" class="my-cta">Custom CTA</button>
</div>
```

Most design systems pick one mode (forced derivation, or fully manual). Stisla offers both, and you pick per situation. Level 1 for a color change, Level 2 for a curve change, Level 3 for leaving the system. The level you reach for is the level you need. Don’t over-commit.

## Sizing model

Chip-like components (buttons, form fields, pagination chips, navbar buttons, toggles, tabs) ship three independent knobs. Shape, content, icon. Override any one without touching the others.

- **`--*-height`** is the shape knob. It defaults to a `--spacing()` multiple (the button’s is `--spacing(9)`), so it tracks`--spacing` along with the rest of the system. Override with a plain value (`3rem`) for a rigid shape that ignores the base, or with your own `--spacing()` multiple to keep it tracking.
- **`--*-font-size`** is the label knob. Defaults to `var(--text-sm)`. Doesn’t affect shape; text sits centered inside whatever height you set.
- **`--*-icon-size`**(and similar) is the icon knob. Defaults to a`--spacing()` multiple (the button’s is`--spacing(4)`). Bump it to `1.25em` for an icon-prominent UI without touching height or label size.

Each size variant (`--sm`, `--lg`) reassigns`--*-height`, `--*-padding-inline`, and`--*-font-size` so the sized chip lands on its small / default / large cadence at the default spacing base.

### Make one element taller or shorter

Override `--*-height` on the element. A plain value gives a rigid shape that doesn’t track the spacing base.

DefaultRigid

```
<div class="flex flex-wrap items-center gap-4">
  <button type="button" class="button button--primary">Default</button>
  <button type="button" class="button button--primary" style="--button-height: 3rem">Rigid</button>
</div>
```

Leave the height alone if you want the element to keep tracking the base. The two buttons below sit inside a region with a larger`--spacing`. The first one (rigid `3rem`) stays put; the second one (default height, a `--spacing()`multiple) grows with the region.

RigidTracks the base

```
<div class="flex flex-wrap items-center gap-4" style="--spacing: 0.34rem">
  <button type="button" class="button button--primary" style="--button-height: 3rem">Rigid</button>
  <button type="button" class="button button--primary">Tracks the base</button>
</div>
```

### Bigger content, same shape

Bump `--*-icon-size` or `--*-font-size` to grow the content without touching the shape. Content centers inside the height via flex, so it grows toward the box edges without breaking the chip silhouette.

Default

Big icon

```
<div class="flex flex-wrap items-center gap-4">
  <button type="button" class="button button--primary">
    <i data-lucide="upload"></i>
    Default
  </button>
  <button type="button" class="button button--primary" style="--button-icon-size: 1.5em">
    <i data-lucide="upload"></i>
    Big icon
  </button>
</div>
```

### Resize a region

Scope `--spacing` on a wrapper. Every button, field, and chip inside scales together. Use this when “the form is tight” or “the dashboard is roomy” describes a whole area. For a single element, the height override above is enough. To retune the whole app’s density, set `--spacing`globally instead, covered under [Density](https://stisla.dev/docs/theming#density).

Default spacing

CancelSave

--spacing: 0.3rem

CancelSave

```
<div class="flex flex-wrap items-start gap-4">
  <div class="flex flex-col gap-2 p-4 flex-1 rounded-md border border-border">
    <span class="text-xs uppercase tracking-[0.05em] text-muted-foreground">Default spacing</span>
    <input class="input" placeholder="Email" />
    <div class="flex gap-2 justify-end">
      <button type="button" class="button button--ghost button--neutral">Cancel</button>
      <button type="button" class="button button--primary">Save</button>
    </div>
  </div>
  <div class="flex flex-col gap-2 p-4 flex-1 rounded-md border border-border" style="--spacing: 0.3rem">
    <span class="text-xs uppercase tracking-[0.05em] text-muted-foreground">--spacing: 0.3rem</span>
    <input class="input" placeholder="Email" />
    <div class="flex gap-2 justify-end">
      <button type="button" class="button button--ghost button--neutral">Cancel</button>
      <button type="button" class="button button--primary">Save</button>
    </div>
  </div>
</div>
```

## Per-component variables

Each component exposes its own scoped variables on top of the global tokens. Set `--button-radius` to give buttons a different radius from cards. Set `--dialog-bg` to retune a dialog without retinting the rest of the system. Component variables fall back through to the matching global token, so leaving them alone gives you the global default.

Every component page ends with a Customization section that tables its`--component-*` variables. [Button](https://stisla.dev/docs/vanilla/button#customization) is the reference shape (Variable, Use). When you find yourself overriding the same property across three or more components, that’s the signal to file an issue for a new knob; the feedback loop above covers when to ask and when to leave the override on the project side.

When a pattern recurs enough that it deserves to be a modifier or its own component rather than a pile of overrides, see [Composition](https://stisla.dev/docs/composition).
