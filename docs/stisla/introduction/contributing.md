# Contributing

How the repo is laid out, how to run it locally, and how to add a component or a customization variable.

## Repo layout

The packages and docs live at the repo root. The top-level `src/` tree on the `master` branch is the v2 Bootstrap release and is not actively maintained.

```
packages/
  style/src/
    theme.css          Tailwind @theme foundation (light + dark block)
    <name>/<name>.css  one BEM CSS file per component block (~53 total)
    <name>/<name>.<lib>.css  lib adapter (e.g. combobox.tomselect.css)
    components.css     barrel; @import of every component CSS
    composer.ts        pure (variantProps, tune) → { className, style }
    index.ts           re-exports
  css/
    stisla.css         precompiled-bundle entry (theme + components barrel)
    package.json       built by the Tailwind CLI into dist/stisla.css
  vanilla/src/
    core/              component.js, init.js, transition.js, inert.js
    components/        one .js file per interactive component
    index.js           entry; registers every component, auto-inits
  react/src/
    <name>/index.tsx   React wrappers, one per component
    index.ts           re-exports
  vue/                 stub (planned)
docs/src/              TanStack Start docs site
  routes/docs/
    vanilla/           one .tsx per component
    react/             one .tsx per component (in progress)
  demo/                Demo, Code, DemoFrame, and demo CSS
```

## Running locally

Node 24 or newer, and pnpm 10.30.3. The pnpm version is pinned via the `packageManager` field, so run `corepack enable` and it matches automatically.

```
git clone https://github.com/stisla/stisla.git
cd stisla
pnpm install
pnpm dev
```

The dev server starts Vite at `localhost:5173`. CSS rebuilds on save via Tailwind v4’s HMR. The vanilla IIFE bundle is built inline by a Vite plugin and hot-reloads into demo iframes automatically.

To run the token checker across all component files:

```
pnpm check
```

This catches undeclared token references, missing `--component-*` fallbacks, and literal values that should be token refs. Run it before opening a PR.

## Adding a component

Each component is one CSS file, one optional JS file, and one docs page. The scaffold command sets up the files and wires the nav entry.

```
pnpm scaffold <name>
```

### 1\. Write the CSS

The scaffold creates `packages/style/src/<name>/<name>.css`. BEM names follow `.block`, `.block__element`, `.block--modifier`. Lowercase, hyphen-separated. Multiple modifiers stack flat on the root and never nest.

Read tokens via fallback-default variables. This keeps the knob overridable from any scope without specificity fights.

```
.my-thing {
  border-radius: var(--my-thing-radius, var(--radius-md));
  padding: var(--my-thing-padding, --spacing(3) --spacing(4));
  background: var(--my-thing-bg, var(--color-surface));
}
```

Use `--spacing(n)` for padding, gap, and heights so the component tracks the global density knob. Layout widths and animation anchors can stay as literal `rem` values.

Derive states with `color-mix(in oklch, …)` so overriding the base hue automatically repaints hover and active.

```
.my-thing:hover  { --my-thing-bg: color-mix(in oklch, var(--my-thing-tone) 88%, black); }
.my-thing:active { --my-thing-bg: color-mix(in oklch, var(--my-thing-tone) 78%, black); }
```

Register the component CSS in `docs/src/demo/demo.css` so the demo iframes pick it up. The scaffold adds the import automatically.

### 2\. Write the behavior (if any)

If the component needs JavaScript, add `packages/vanilla/src/components/my-thing.js`. Export a class with a constructor that takes a root element, a `.destroy()` method, and DOM custom events for its lifecycle (`stisla:my-thing:opened`, `stisla:my-thing:closed`).

Register it in `packages/vanilla/src/index.js` so `Stisla.init()` scans for it.

For state hooks, use `[data-state="open"]` for open/closed concepts, `[data-state="active"]` for selected/current, and `data-<concept>` for Stisla-original states (`[data-collapsed]`, `[data-shaking]`). No `.is-*` classes. The CSS reads from the attribute; the JS writes it.

### 3\. Write the docs page

Add `docs/src/routes/docs/vanilla/my-thing.tsx`. Cover every variant and every state. Rest, hover (a sentence is enough), focus, active, disabled, and invalid where applicable.

Use `<Demo>` for live previews and `<Code>` for copyable snippets. One snippet per demo drives both the live render and the shown code.

```
import { Demo } from '~/demo/Demo';
import { Code } from '~/demo/Code';

<Demo html={`
<button type="button" class="my-thing">Hello</button>
`} />
```

Page structure: a `<header>` with `<h1>` and a short lead, then one `<section>` per topic. End with a Customization section. The [Slider](https://stisla.dev/docs/vanilla/slider) page is the reference shape.

### 4\. Verify

```
pnpm check     # token linter
pnpm build     # confirm the docs site builds clean
```

Check the demo page at 320, 768, and 1280 px under both light and dark.

## Adding a customization variable

Component-scoped variables open up a knob without touching the spec. Pick a hyphenated name under the block prefix: `--button-radius`, `--slider-thumb-width`, `--card-padding`.

Default to a global token via fallback when the knob is a global concept. Default to a literal when the knob is component-private.

packages/style/src/my-thing/my-thing.css

```
.my-thing {
  /* Component-private default. */
  --my-thing-thumb-width: 0.5rem;

  /* Falls back to the global scale token, so overriding --radius-md
     retunes this component too unless the user sets --my-thing-radius. */
  --my-thing-radius: var(--radius-md);

  border-radius: var(--my-thing-radius);
}
```

Document every new knob in the component’s Customization section. One row per variable, with columns for Variable, Default, and Use. The [Slider](https://stisla.dev/docs/vanilla/slider) page is the reference shape for how to write that table.

For components with many variables, group the table by purpose (sizing, surface, interaction). For components that mostly rely on shared tokens, a short pointer paragraph back to [Styling](https://stisla.dev/docs/styling#per-component-variables) is enough.

## Before opening a PR

- Run `pnpm check` from the repo root and confirm it passes clean.
- Run `pnpm build` from `docs/` and confirm the site builds without error.
- Open the demo page and walk every state under light and dark at 320, 768, and 1280 px.
- If you changed a component’s CSS or behavior, run the tests: `pnpm test` (or `pnpm test:rc` for Chromium only). See [TESTING.md](https://github.com/stisla/stisla/blob/master/TESTING.md).
- Run `pnpm changeset` if you touched a published package (`@stisla/style`, `@stisla/css`, `@stisla/vanilla`), and commit the generated file. Docs-only changes skip this.

One component per PR keeps reviews scoped. A new customization knob can ride along with the component that introduces it.
