#Meter

A bar that visualizes a value within a known range.

## Basic

The scalar-measurement cousin of Progress: reach for meter when the value just sits at a level (storage used, score vs target) and for Progress when work is in motion. Wrap a`.meter__bar` in a `.meter__track` inside `.meter`. The root carries `role="meter"` \+ aria value attributes (use `aria-valuetext`when the unit matters). Add `.meter__label` / `.meter__value` to caption it.

Memory14.2 GB of 16 GB

```
<div class="meter meter--block" role="meter" aria-label="Memory" aria-valuenow="14.2" aria-valuemin="0" aria-valuemax="16" aria-valuetext="14.2 GB of 16 GB used">
  <span class="meter__label">Memory</span>
  <span class="meter__value">14.2 GB of 16 GB</span>
  <div class="meter__track"><div class="meter__bar meter__bar--warning" style="width: 89%"></div></div>
</div>
```

## Intents

Recolor the fill with an intent modifier on `.meter__bar`. Flip the intent at thresholds for a quick gauge.

```
<div class="flex flex-col gap-4 w-full">
  <div class="meter" role="meter" aria-label="Primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><div class="meter__track"><div class="meter__bar meter__bar--primary" style="width: 60%"></div></div></div>
  <div class="meter" role="meter" aria-label="Success" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><div class="meter__track"><div class="meter__bar meter__bar--success" style="width: 60%"></div></div></div>
  <div class="meter" role="meter" aria-label="Warning" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><div class="meter__track"><div class="meter__bar meter__bar--warning" style="width: 60%"></div></div></div>
  <div class="meter" role="meter" aria-label="Danger" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><div class="meter__track"><div class="meter__bar meter__bar--danger" style="width: 60%"></div></div></div>
  <div class="meter" role="meter" aria-label="Info" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><div class="meter__track"><div class="meter__bar meter__bar--info" style="width: 60%"></div></div></div>
</div>
```

## Sizes

Default is a thin strip; `--sm` a hairline; `--lg` a label-friendly height for hero metrics.

```
<div class="flex flex-col gap-4 w-full">
  <div class="meter meter--sm" role="meter" aria-label="Small" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><div class="meter__track"><div class="meter__bar" style="width: 60%"></div></div></div>
  <div class="meter" role="meter" aria-label="Default" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><div class="meter__track"><div class="meter__bar" style="width: 60%"></div></div></div>
  <div class="meter meter--lg" role="meter" aria-label="Large" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><div class="meter__track"><div class="meter__bar" style="width: 60%"></div></div></div>
</div>
```

## Stacked

Drop multiple `.meter__bar` children into one track to break the value into segments. Widths must sum to ≤ 100%; remaining room exposes the track background.

Monthly budget$3,120 of $4,000

```
<div class="meter meter--lg meter--block" role="meter" aria-label="Monthly budget" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" aria-valuetext="$3,120 of $4,000 spent">
  <span class="meter__label">Monthly budget</span>
  <span class="meter__value">$3,120 of $4,000</span>
  <div class="meter__track">
    <div class="meter__bar meter__bar--primary" style="width: 32%"></div>
    <div class="meter__bar meter__bar--info" style="width: 24%"></div>
    <div class="meter__bar meter__bar--success" style="width: 12%"></div>
    <div class="meter__bar meter__bar--warning" style="width: 10%"></div>
  </div>
</div>
```

## Legend

Pair a stacked meter with a `.meter__legend` row. Each`.meter__legend-dot` reuses `--meter-bar-bg`, so the intent modifier (or an inline override) colors the swatch to match its bar.

Macintosh HD203.95 GB of 245.11 GB used

Trash Music Documents Calculating… macOS

```
<div class="meter meter--lg meter--block" role="meter" aria-label="Macintosh HD" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" aria-valuetext="203.95 GB of 245.11 GB used">
  <span class="meter__label">Macintosh HD</span>
  <span class="meter__value">203.95 GB of 245.11 GB used</span>
  <div class="meter__track">
    <div class="meter__bar meter__bar--danger" style="width: 2%"></div>
    <div class="meter__bar meter__bar--warning" style="width: 6%"></div>
    <div class="meter__bar" style="width: 7%; --meter-bar-bg: oklch(0.86 0.18 95);"></div>
    <div class="meter__bar" style="width: 60%; --meter-bar-bg: var(--color-surface-3);"></div>
    <div class="meter__bar" style="width: 8%; --meter-bar-bg: var(--color-muted-foreground);"></div>
  </div>
  <div class="meter__legend">
    <span class="meter__legend-item"><span class="meter__legend-dot meter__legend-dot--danger"></span> Trash</span>
    <span class="meter__legend-item"><span class="meter__legend-dot meter__legend-dot--warning"></span> Music</span>
    <span class="meter__legend-item"><span class="meter__legend-dot" style="--meter-bar-bg: oklch(0.86 0.18 95);"></span> Documents</span>
    <span class="meter__legend-item"><span class="meter__legend-dot" style="--meter-bar-bg: var(--color-surface-3);"></span> Calculating…</span>
    <span class="meter__legend-item"><span class="meter__legend-dot" style="--meter-bar-bg: var(--color-muted-foreground);"></span> macOS</span>
  </div>
</div>
```

## Customization

These variables retune `.meter`. Override on the element, a parent scope, or`:root`.

| Variable                   | Use                                                            |
| -------------------------- | -------------------------------------------------------------- |
| `--meter-height`           | Track height; size modifiers reassign this                     |
| `--meter-radius`           | Track corner radius; pilled by default                         |
| `--meter-header-gap`       | Space between the caption row and the track                    |
| `--meter-segment-gap`      | Gap between adjacent bars in a stacked track                   |
| `--meter-bg`               | Track background (unfilled portion)                            |
| `--meter-bar-bg`           | Bar fill (intent modifiers retune; also drives the legend dot) |
| `--meter-label-font-size`  | Caption font size                                              |
| `--meter-label-color`      | Label text color                                               |
| `--meter-value-color`      | Value text color                                               |
| `--meter-legend-row-gap`   | Space between the track and the legend                         |
| `--meter-legend-item-gap`  | Horizontal gap between legend items                            |
| `--meter-legend-dot-size`  | Diameter of the legend swatch                                  |
| `--meter-legend-font-size` | Legend text size                                               |
| `--meter-legend-color`     | Legend text color                                              |
