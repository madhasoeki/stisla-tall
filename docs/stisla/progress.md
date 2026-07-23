# Progress

A horizontal bar that fills as work completes.

## Basic

Place a `.progress__track` with a single `.progress__bar` inside`.progress`. The wrapper carries `role="progressbar"` and the aria value attributes; the bar paints the fill via inline `width`. Add`.progress__label` and `.progress__value` to caption it.

Uploading72%

```
<div class="progress progress--block" role="progressbar" aria-label="Upload" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
  <span class="progress__label">Uploading</span>
  <span class="progress__value">72%</span>
  <div class="progress__track"><div class="progress__bar" style="width: 72%"></div></div>
</div>
```

## Intents

Recolor the fill with an intent modifier on `.progress__bar`. The track stays neutral so contrast holds in both themes.

```
<div class="flex flex-col gap-4 w-full">
  <div class="progress" role="progressbar" aria-label="Primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><div class="progress__track"><div class="progress__bar progress__bar--primary" style="width: 60%"></div></div></div>
  <div class="progress" role="progressbar" aria-label="Success" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><div class="progress__track"><div class="progress__bar progress__bar--success" style="width: 60%"></div></div></div>
  <div class="progress" role="progressbar" aria-label="Warning" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><div class="progress__track"><div class="progress__bar progress__bar--warning" style="width: 60%"></div></div></div>
  <div class="progress" role="progressbar" aria-label="Danger" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><div class="progress__track"><div class="progress__bar progress__bar--danger" style="width: 60%"></div></div></div>
  <div class="progress" role="progressbar" aria-label="Info" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><div class="progress__track"><div class="progress__bar progress__bar--info" style="width: 60%"></div></div></div>
</div>
```

## Sizes

Default is a thin strip; `--sm` compresses to a hairline; `--lg` grows to a label-friendly height.

```
<div class="flex flex-col gap-4 w-full">
  <div class="progress progress--sm" role="progressbar" aria-label="Small" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><div class="progress__track"><div class="progress__bar" style="width: 60%"></div></div></div>
  <div class="progress" role="progressbar" aria-label="Default" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><div class="progress__track"><div class="progress__bar" style="width: 60%"></div></div></div>
  <div class="progress progress--lg" role="progressbar" aria-label="Large" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><div class="progress__track"><div class="progress__bar" style="width: 60%"></div></div></div>
</div>
```

## Animated

Add `.progress__bar--animated` for a soft sheen that sweeps across the fill every few seconds — a quiet "still working" signal. Dropped under reduced-motion.

```
<div class="flex flex-col gap-4 w-full">
  <div class="progress progress--lg" role="progressbar" aria-label="Animated" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><div class="progress__track"><div class="progress__bar progress__bar--animated" style="width: 60%"></div></div></div>
  <div class="progress progress--lg" role="progressbar" aria-label="Animated success" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><div class="progress__track"><div class="progress__bar progress__bar--success progress__bar--animated" style="width: 80%"></div></div></div>
</div>
```

## Indeterminate

Add `data-indeterminate` on `.progress` when the duration is unknown. A partial bar slides across the track on loop; drop the inline width (the CSS owns it) and skip `aria-valuenow` so assistive tech announces it as indeterminate.

```
<div class="flex flex-col gap-4 w-full">
  <div class="progress" data-indeterminate role="progressbar" aria-label="Loading" aria-valuemin="0" aria-valuemax="100"><div class="progress__track"><div class="progress__bar"></div></div></div>
  <div class="progress progress--lg" data-indeterminate role="progressbar" aria-label="Loading large" aria-valuemin="0" aria-valuemax="100"><div class="progress__track"><div class="progress__bar progress__bar--success"></div></div></div>
</div>
```

## Customization

These variables retune `.progress`. Override on the element, a parent scope, or`:root`. The track is pilled by default; set `--progress-radius` to flatten.

| Variable                             | Use                                         |
| ------------------------------------ | ------------------------------------------- |
| `--progress-height`                  | Track height; size modifiers reassign this  |
| `--progress-radius`                  | Track corner radius; pilled by default      |
| `--progress-header-gap`              | Space between the caption row and the track |
| `--progress-bg`                      | Track background (unfilled portion)         |
| `--progress-bar-bg`                  | Bar fill (intent modifiers retune)          |
| `--progress-bar-transition-duration` | Width tween when the value changes          |
| `--progress-label-font-size`         | Caption font size                           |
| `--progress-label-font-weight`       | Label weight                                |
| `--progress-label-color`             | Label text color                            |
| `--progress-value-color`             | Value text color                            |
| `--progress-shimmer-color`           | Animated sheen color                        |
| `--progress-shimmer-duration`        | Animated cycle length                       |
| `--progress-indeterminate-duration`  | Indeterminate sweep cycle length            |
