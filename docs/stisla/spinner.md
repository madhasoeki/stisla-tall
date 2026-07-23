# Spinner

A lightweight indicator for in-flight work.

## Basic

Use `.spinner` with `role="status"` and a visually hidden label so screen readers announce the loading state. The default is a spinning border ring.

Loading…

```
<div class="spinner" role="status"><span class="sr-only">Loading…</span></div>
```

## Grow

Add `.spinner--grow` for a pulsing dot. Same markup, same a11y story.

Loading…

```
<div class="spinner spinner--grow" role="status"><span class="sr-only">Loading…</span></div>
```

## Colors

Both spinners inherit from `currentColor`, so any `.text-*` utility recolors them.

Loading…

Loading…

Loading…

Loading…

Loading…

Loading…

```
<div class="spinner text-primary" role="status"><span class="sr-only">Loading…</span></div>
<div class="spinner text-success" role="status"><span class="sr-only">Loading…</span></div>
<div class="spinner text-danger" role="status"><span class="sr-only">Loading…</span></div>
<div class="spinner text-warning" role="status"><span class="sr-only">Loading…</span></div>
<div class="spinner text-info" role="status"><span class="sr-only">Loading…</span></div>
<div class="spinner text-muted-foreground" role="status"><span class="sr-only">Loading…</span></div>
```

The grow variant takes the same utilities.

Loading…

Loading…

Loading…

Loading…

Loading…

Loading…

```
<div class="spinner spinner--grow text-primary" role="status"><span class="sr-only">Loading…</span></div>
<div class="spinner spinner--grow text-success" role="status"><span class="sr-only">Loading…</span></div>
<div class="spinner spinner--grow text-danger" role="status"><span class="sr-only">Loading…</span></div>
<div class="spinner spinner--grow text-warning" role="status"><span class="sr-only">Loading…</span></div>
<div class="spinner spinner--grow text-info" role="status"><span class="sr-only">Loading…</span></div>
<div class="spinner spinner--grow text-muted-foreground" role="status"><span class="sr-only">Loading…</span></div>
```

## Sizes

Add `.spinner--sm` for the compact size used inside buttons and badges, or`.spinner--lg` for an empty-state hero.

Loading…

Loading…

Loading…

Loading…

Loading…

Loading…

```
<div class="spinner spinner--sm" role="status"><span class="sr-only">Loading…</span></div>
<div class="spinner" role="status"><span class="sr-only">Loading…</span></div>
<div class="spinner spinner--lg" role="status"><span class="sr-only">Loading…</span></div>
<div class="spinner spinner--grow spinner--sm" role="status"><span class="sr-only">Loading…</span></div>
<div class="spinner spinner--grow" role="status"><span class="sr-only">Loading…</span></div>
<div class="spinner spinner--grow spinner--lg" role="status"><span class="sr-only">Loading…</span></div>
```

For one-off sizes, override `--spinner-size` inline.

Loading…

Loading…

```
<div class="spinner" role="status" style="--spinner-size: 3rem; --spinner-width: 4px;"><span class="sr-only">Loading…</span></div>
<div class="spinner spinner--grow" role="status" style="--spinner-size: 3rem;"><span class="sr-only">Loading…</span></div>
```

## Alignment

Spinners are inline-block, so flex and margin utilities place them like any other inline element.

Syncing inbox

```
<span class="inline-flex items-center gap-2">
  <span class="spinner spinner--sm" role="status" aria-hidden="true"></span>
  <span>Syncing inbox</span>
</span>
```

## In buttons

For the canonical icon-aware loading state, set `aria-busy="true"` on the button. It swaps any leading or trailing icon for the spinner without shifting the label. For a standalone spinner, slot `.spinner.spinner--sm` as a leading element.

SavingLoading

```
<button type="button" class="button button--primary" aria-busy="true">Saving</button>
<button type="button" class="button button--outline button--neutral" aria-busy="true">Loading</button>
```

For a standalone spinner inside a button, slot `.spinner.spinner--sm` as a leading element.

Loading

Loading

```
<button type="button" class="button button--primary" disabled>
  <span class="spinner spinner--sm" role="status" aria-hidden="true"></span>
  Loading
</button>
<button type="button" class="button button--primary" disabled>
  <span class="spinner spinner--grow spinner--sm" role="status" aria-hidden="true"></span>
  Loading
</button>
```

## Customization

These variables retune `.spinner` without touching component CSS. Color comes from `currentColor`, so any `.text-*` utility recolors it.

| Variable             | Use                                                             |
| -------------------- | --------------------------------------------------------------- |
| `--spinner-size`     | Diameter; size modifiers reassign this                          |
| `--spinner-width`    | Stroke width on `.spinner`; ignored by `.spinner--grow`         |
| `--spinner-duration` | One animation cycle; reduced-motion overrides to a longer value |
