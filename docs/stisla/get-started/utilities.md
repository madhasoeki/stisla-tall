# Utilities

Stisla ships components and leaves layout and spacing to you, with Tailwind as the intended source. This page sets that up without doubling the reset the bundle already gives you, then shows the utilities you reach for to arrange components.

## The component layer

The precompiled `@stisla/css` bundle covers the component layer alone. It carries no grid system and no spacing, flex, or sizing utilities, by design. Every demo on this site arranges its components with Tailwind classes (`flex`, `gap-4`,`grid`, `w-full`), and those work here because the docs compile Tailwind. A page that only links `stisla.css`will not have them.

So if you copy a demo and the layout collapses, this is why. You have two ways to add the utility surface. Both run the Tailwind CLI as a build step. The difference is whether you keep the precompiled bundle or compile the components yourself.

## Option A. Build from source

The clean default for a new project. Stop linking the precompiled`stisla.css` and compile your own stylesheet instead. Tailwind comes in once, so the reset, the token theme, and the utilities all land exactly once, with no duplication to reason about.

```
npm install -D tailwindcss @tailwindcss/cli
npm install @stisla/style
```

Author one input stylesheet. Pull in Tailwind, then the token theme, then the components. The `components.css` barrel imports every component in one line.

app.css

```
@import "tailwindcss";
@import "@stisla/style/theme.css";
@import "@stisla/style/components.css";   /* every component */

/* Only needed if Tailwind doesn't auto-detect your templates
   (see the note below). Point it at the files that use utilities: */
/* @source "./src"; */
```

**Important:** Tailwind only generates the utility classes it actually finds in your markup. It auto-detects templates in most projects, so this usually needs nothing. But if your HTML or components live where it can’t reach, your`flex` and `gap-4` come out missing and layouts collapse. Add the `@source` line above, pointing at those files. The [Telling Tailwind what to scan](https://stisla.dev/docs/vanilla/utilities#content-sources) section covers it in full.

Compile it, watching for changes during development.

```
npx @tailwindcss/cli -i app.css -o dist/app.css --watch
```

```
<link rel="stylesheet" href="dist/app.css">
```

The barrel is pure grouping. It re-imports the same raw component files you could list one by one, so the output is identical either way. When you want only the components you use (a smaller build, or any subset), swap the barrel for individual imports like`@stisla/style/button.css`. The [Optimization](https://stisla.dev/docs/vanilla/optimization) page covers that subset path, and this is the same setup the [Theming](https://stisla.dev/docs/theming#setting-up-overrides) and [Styling](https://stisla.dev/docs/styling) pages call the build path. The JavaScript runtime is separate and unchanged; see [Installation](https://stisla.dev/docs/vanilla/installation).

## Option B. Add utilities to the precompiled bundle

Keep the curated `stisla.css` exactly as it is and generate a second stylesheet that holds only the utilities. The bundle already carries the reset and the token theme, so you must not pull the whole of Tailwind in again next to it, which would emit a second reset and re-declare every token. Reference those parts instead of importing them.

```
npm install -D tailwindcss @tailwindcss/cli @stisla/style
```

utilities.css

```
@reference "tailwindcss";
@reference "@stisla/style/theme.css";
@import "tailwindcss/utilities.css" layer(utilities);
```

The two `@reference` lines load Tailwind and the Stisla theme for context only. They teach the generator the spacing scale and the semantic colors (so `gap-4` tracks `--spacing` and`bg-primary` resolves to the brand token) while emitting nothing themselves. Only the utilities layer is written out, so it drops onto the bundle without a second reset or re-declared tokens.

The same content rule from Option A applies here. Only the utilities Tailwind finds in your markup are generated, so add an`@source` line if it doesn’t auto-detect your templates (see [Telling Tailwind what to scan](https://stisla.dev/docs/vanilla/utilities#content-sources)).

```
npx @tailwindcss/cli -i utilities.css -o dist/utilities.css --watch
```

Link the generated file after the bundle.

```
<link rel="stylesheet" href="stisla.css">
<link rel="stylesheet" href="dist/utilities.css">
```

Now `stisla.css` stays untouched and your`utilities.css` adds only what is missing, with one reset in the page and no duplicated tokens.

## Which one

- **Option A** for a new project, or any time you already compile CSS. One file holds everything, and it unlocks subsetting and compile-time token baking on the same build.
- **Option B** when`stisla.css` is already deployed and you only need to layer utilities on top. It is the smaller change and leaves the bundle exactly as shipped.

Most projects need one. Framework apps (React, Vue) almost always land on Option A, because they already run a build and import Tailwind once at the root; the utility surface comes for free there and this page is really for the no-build path.

## Telling Tailwind what to scan

Either option only generates the utility classes it actually finds in your markup. Tailwind v4 auto-detects template files in your project, so most setups need no configuration. If your HTML or component templates live somewhere it does not reach, point at them explicitly in the input stylesheet.

```
@source "./src";
@source "./templates";
```

## Laying out components

With utilities available, you arrange components the ordinary Tailwind way. A handful of classes covers almost everything. Flex for a row or a stack, grid for a matrix, and the spacing scale for the gaps between.

### A row

`flex items-center gap-3` lines components up on one axis.`flex-wrap` lets them spill onto a second line on narrow screens, and `ml-auto` pushes one item to the far edge.

New
FilterExport

```
<div class="flex flex-wrap items-center gap-3">
  <button type="button" class="button button--primary">
    <i data-lucide="plus"></i>
    New
  </button>
  <button type="button" class="button button--outline button--neutral">Filter</button>
  <button type="button" class="button button--outline button--neutral">Export</button>
  <button type="button" class="button button--ghost button--neutral button--icon-only ml-auto" aria-label="More">
    <i data-lucide="more-horizontal"></i>
  </button>
</div>
```

### A stack

`flex flex-col gap-3` stacks components vertically with even spacing. `max-w-sm` caps the width so a form does not stretch across the whole page.

Sign in

```
<div class="flex flex-col gap-3 max-w-sm">
  <input class="input" placeholder="Email" />
  <input class="input" type="password" placeholder="Password" />
  <button type="button" class="button button--primary">Sign in</button>
</div>
```

### A grid

`grid grid-cols-2 gap-4` lays cards out in a matrix. For a layout that reflows by screen size, add responsive prefixes like`sm:grid-cols-2 lg:grid-cols-3`; the count steps up as the viewport widens.

Revenue

$48.2k this month, up 12 percent.

Orders

1,204 placed, 38 awaiting fulfillment.

Customers

312 new, 89 percent returning.

Refunds

$1.1k across 14 requests.

```
<div class="grid grid-cols-2 gap-4">
  <div class="card">
    <div class="card__header">Revenue</div>
    <div class="card__body"><p class="card__text">$48.2k this month, up 12 percent.</p></div>
  </div>
  <div class="card">
    <div class="card__header">Orders</div>
    <div class="card__body"><p class="card__text">1,204 placed, 38 awaiting fulfillment.</p></div>
  </div>
  <div class="card">
    <div class="card__header">Customers</div>
    <div class="card__body"><p class="card__text">312 new, 89 percent returning.</p></div>
  </div>
  <div class="card">
    <div class="card__header">Refunds</div>
    <div class="card__body"><p class="card__text">$1.1k across 14 requests.</p></div>
  </div>
</div>
```

### A split layout

Mix grid with `col-span-*` for a main-and-aside split. The components keep reading from the same tokens, so the two regions stay coherent for free.

Activity

The main column spans two of three tracks on wider screens, and drops to full width when the row can no longer hold both.

Payout sent

View report

```
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
  <div class="card md:col-span-2">
    <div class="card__header">Activity</div>
    <div class="card__body">
      <p class="card__text">The main column spans two of three tracks on wider screens, and drops to full width when the row can no longer hold both.</p>
    </div>
  </div>
  <div class="card">
    <div class="card__body flex flex-col gap-3">
      <div class="alert alert--success">
        <i data-lucide="check-circle"></i>
        <div>Payout sent</div>
      </div>
      <button type="button" class="button button--primary w-full">View report</button>
    </div>
  </div>
</div>
```

## Tweaking the fit

Utilities also handle the small adjustments where a component sits a little wrong in its context. A full-width button in a narrow column, a touch of margin, a one-off corner. Because utilities compile into a later cascade layer than components, a utility wins over the component’s own rule with no specificity fight.

Default radiusrounded-none

```
<div class="flex flex-wrap items-center gap-4">
  <button type="button" class="button button--primary">Default radius</button>
  <button type="button" class="button button--primary rounded-none">rounded-none</button>
</div>
```

Reach for a utility when the change is about how a component fits the layout around it. When the change is about the component itself, a different radius for every button in the app, a recurring restyle, set its variable instead; the [Styling](https://stisla.dev/docs/styling) page covers that side, and [Composition](https://stisla.dev/docs/composition) covers when a recurring pattern should graduate into its own class.

One link worth keeping in mind: the spacing utilities (`gap-*`, `p-*`, `m-*`) are multiples of`--spacing`, the same base that drives component density. Dial`--spacing` for a region and the layout gaps reflow along with the components inside it. See [Density](https://stisla.dev/docs/theming#density) for that token.
