# Architecture

How Stisla is put together. The packages, the CSS cascade layers, the source tree, and how a runtime composes on top of the shared spec.

## What this page covers

Stisla is a design specification with multiple implementations. What every implementation must honor lives in [Specification](https://stisla.dev/docs/specification), including the component anatomy and the token contract. The surface you tune lives in [Theming](https://stisla.dev/docs/theming). The reasoning behind avoiding Bootstrap, Tailwind alone, and CSS-in-JS lives in [Why Stisla](https://stisla.dev/docs/why-stisla). This page covers the structure that holds it together: the packages, how the CSS bundle is layered, where the source lives, and how a runtime composes on top.

The structure is shared across implementations. The vanilla implementation is the reference, and its runtime specifics live on the [JavaScript](https://stisla.dev/docs/vanilla/javascript) page; future implementations (React + Base UI, Vue + Reka, Svelte + bits-ui) get their own runtime pages as they land.

## Packages

Stisla ships as a set of scoped packages. They track the same version line, so the stylesheet and runtime stay in sync when you install a matched pair.

| Package           | What it ships                                                                                                                                                                          |
| ----------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `@stisla/style`   | The framework-agnostic source of truth: the Tailwind`@theme` foundation (`theme.css`), the per-component BEM CSS, and the composer (TypeScript). Every other package builds from this. |
| `@stisla/css`     | The pre-compiled universal stylesheet. Built from`@stisla/style`. No JavaScript, no build step to consume. Works in every implementation.                                              |
| `@stisla/vanilla` | The vanilla JS runtime. Drives `data-stisla-*`behavior on canonical markup. Ships one entry that registers every component, and pairs with `@stisla/css` at the matching version.      |
| `@stisla/react`   | React component wrappers built on Base UI. Consumes`@stisla/style` and the shared composer.                                                                                            |

The Tailwind `@theme` foundation lives inside`@stisla/style` as its `theme.css` file. The pre-compiled `@stisla/css` bakes it in for zero-build consumers; build-from-source consumers import it directly. [Setting up overrides](https://stisla.dev/docs/theming#setting-up-overrides) covers both paths from the user side.

## CSS bundle composition

Tailwind v4 organizes the compiled CSS into cascade layers. The order is:

```
@layer theme, base, components, utilities;
```

Order matters. The `theme` layer holds the tokens. The`base` layer holds the Preflight reset and base element rules. Component rules sit above both. Utilities sit on top, so a utility class wins against the component it tweaks. Within a layer, normal cascade rules apply.

### What each layer holds

| Layer          | Contents                                                                                        | Source                                          |
| -------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------- |
| **theme**      | The `@theme` token declarations (`--color-*`, `--radius-*`, …) and the dark-mode delta block    | `packages/style/src/theme.css`                  |
| **base**       | Tailwind Preflight reset plus the base body rule                                                | Tailwind (`@import "tailwindcss"`) +`theme.css` |
| **components** | Every BEM component file. One file per block                                                    | `packages/style/src/<name>/<name>.css`          |
| **utilities**  | Tailwind utilities (precompiled for the zero-build bundle, JIT for build-from-source consumers) | Tailwind                                        |

### The bundle

`@stisla/css` ships one precompiled stylesheet,`stisla.css`, with every component, the tokens, and no utilities. To ship a subset instead, compile from source with`@stisla/style`, which the [Optimization](https://stisla.dev/docs/vanilla/optimization) page covers. Three components depend on a 3rd-party library: carousel (Embla), combobox (Tom Select), scroll-area (OverlayScrollbars). They ship in the bundle like everything else.

## Source layout

Every Stisla implementation reads from the same source tree. The layout is flat by intent. Every spec’d component lives next to every other, regardless of whether one implementation classifies it as core or optional.

packages/

```
packages/
  style/src/
    theme.css                  (Tailwind @theme foundation, light + dark block)
    <name>/<name>.css          (one CSS file per BEM block, ~53 total)
    <name>/<name>.<lib>.css    (optional lib adapter, e.g. combobox.tomselect.css)
    components.css             (barrel; @import of every component CSS)
    composer.ts                (pure variant+tune → className+style function)
    index.ts                   (re-exports)
  css/
    stisla.css                 (the precompiled-bundle entry; theme + components barrel)
    package.json               (built by the Tailwind CLI into dist/stisla.css)
  vanilla/src/
    core/                      (component.js, init.js, transition.js, inert.js)
    components/                (one .js file per interactive component, 20 total)
    index.js                   (entry; registers every component, auto-inits)
  react/src/
    <name>/index.tsx           (React wrappers, one per component)
    index.ts                   (re-exports)
```

The repo also carries the cross-implementation contract files at the root. `SPEC.md` holds the shared contract.`spec/components/<name>.md` holds the per-component contract (anatomy, states, behavior, a11y, tokens) that every implementation honors.

## The runtime layer

The CSS is static; behavior comes from a runtime layer that each implementation supplies its own way. The reference vanilla runtime ships as `@stisla/vanilla`, around 600 lines of our own code plus a few vendored primitives, and drives`data-stisla-*` markup through a register-then-scan lifecycle. The [JavaScript](https://stisla.dev/docs/vanilla/javascript) page documents how it boots and its full API; the [Interactivity](https://stisla.dev/docs/specification#interactivity) contract is what any runtime has to satisfy.

Other implementations swap the layer wholesale. React leans on Base UI’s headless primitives, Vue on Reka. The CSS underneath is identical, so a `data-state="open"` dialog paints the same regardless of which runtime opened it.

## How this realizes the spec

The vanilla impl is one realization of the cross-implementation contract. Reading the spec alongside the source shows how each requirement lands in practice. A few examples:

| Spec requirement                                     | Vanilla solution                                                                                                                        |
| ---------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | ------ | -------------------------------------------------------------------------------------- |
| Token surface is one Tailwind `@theme` layer         | `packages/style/src/theme.css`. Only file with literal color values.                                                                    |
| State derivation via `color-mix`                     | Every component CSS file. Recipe percentages are CSS custom property defaults, e.g.`color-mix(in oklch, var(--button-tone) 88%, black)` |
| BEM block names match the spec                       | `.button`, `.card`, `.dialog`, etc. One `<name>.css` per block under`packages/style/src/`                                               |
| State attributes match primitive-library conventions | `[data-state="open                                                                                                                      | closed | active"]` set by the vanilla JS or by future primitive libraries; same CSS serves both |
| Focus, dismiss, scroll-lock, keyboard a11y           | focus-trap (dialog, drawer), our own dismiss and scroll-lock, Floating UI for floating elements                                         |
| Dark mode is one delta block                         | End of `theme.css`. `[data-theme="dark"]`and `.dark` both match                                                                         |
| Component contract per`spec/components/<name>.md`    | Each JS-coordinated component honors the spec’s required behavior, parts, and events                                                    |

Future implementations (React, Vue, Svelte) get their own runtime pages with the same shape. Same spec, different runtime, different primitive library, same `@stisla/css` underneath.

## What’s next

Read the [Specification](https://stisla.dev/docs/specification) for the cross-impl contract that every implementation honors, including the component anatomy and token rules. Read [Theming](https://stisla.dev/docs/theming) for the override model and the worked recipes. Open any component file under `packages/style/src/` for the canonical pattern in practice; `button/button.css`,`card/card.css`, and `alert/alert.css` are the cleanest references.
