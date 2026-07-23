# Placeholders

Skeleton stand-ins for content that hasn't loaded yet.

## Basic

Apply `.placeholder` to any inline element and size it with a width utility or inline style; the fill is a muted gray by default. Wrap the loading region in `aria-hidden="true"` so the skeleton is skipped by assistive tech. Add`.placeholder--glow` for a pulse or`.placeholder--wave` for a shimmer. Stack a few bars of varying width to stand in for lines of text.

```
<div class="max-w-sm w-full" aria-hidden="true">
  <p class="mb-2"><span class="placeholder w-1/2"></span></p>
  <p class="mb-2"><span class="placeholder w-full"></span></p>
  <p class="m-0"><span class="placeholder w-3/4"></span></p>
</div>
```

## Colors

The default is a neutral muted gray. Set `--placeholder-bg`to tint a bar to any token.

```
<div class="flex flex-col gap-2 max-w-sm w-full" aria-hidden="true">
  <span class="placeholder w-full"></span>
  <span class="placeholder w-full" style="--placeholder-bg: var(--color-primary)"></span>
  <span class="placeholder w-full" style="--placeholder-bg: var(--color-success)"></span>
  <span class="placeholder w-full" style="--placeholder-bg: var(--color-danger)"></span>
  <span class="placeholder w-full" style="--placeholder-bg: var(--color-warning)"></span>
  <span class="placeholder w-full" style="--placeholder-bg: var(--color-info)"></span>
</div>
```

## Animated

`--glow` fades the bar in and out; `--wave`sweeps a highlight across it. They're modifiers on the bar, so put the class on each bar you want animated. Both stop under reduced motion.

```
<div class="flex flex-col gap-2 max-w-sm w-full" aria-hidden="true">
  <span class="placeholder placeholder--glow w-full"></span>
  <span class="placeholder placeholder--glow w-3/4"></span>
</div>
```

```
<div class="flex flex-col gap-2 max-w-sm w-full" aria-hidden="true">
  <span class="placeholder placeholder--wave w-full"></span>
  <span class="placeholder placeholder--wave w-3/4"></span>
</div>
```

## Sizes

The bar height tracks its font-size (`1em`);`--sm` and `--lg` shrink or grow it.

```
<div class="flex flex-col gap-3 max-w-sm w-full" aria-hidden="true">
  <span class="placeholder placeholder--sm w-full"></span>
  <span class="placeholder w-full"></span>
  <span class="placeholder placeholder--lg w-full"></span>
</div>
```

## Composed

Combine bars with width and shape utilities to skeleton a whole component, such as a media row with a round avatar.

```
<div class="card max-w-sm w-full" aria-hidden="true">
  <div class="card__body flex items-center gap-3">
    <span class="placeholder placeholder--glow w-12 h-12 rounded-full shrink-0"></span>
    <div class="flex-1 flex flex-col gap-2 w-full">
      <span class="placeholder placeholder--glow w-1/2"></span>
      <span class="placeholder placeholder--glow w-full"></span>
    </div>
  </div>
</div>
```

## Customization

These variables retune a placeholder bar. Override on the bar or any wrapper.

| Variable                | Use                                                      |
| ----------------------- | -------------------------------------------------------- |
| `--placeholder-height`  | Bar height (font-relative; the size modifiers retune it) |
| `--placeholder-bg`      | Fill color                                               |
| `--placeholder-opacity` | Fill opacity                                             |
| `--placeholder-radius`  | Corner radius                                            |
