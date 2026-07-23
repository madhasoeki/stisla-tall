# Badge

A compact label for status, counts, and categories.

## Basic

A bare `.badge` is the neutral filled chip. Add an intent modifier like `.badge--primary`,`.badge--success`, `.badge--warning`,`.badge--danger`, or `.badge--info` to color it. Sizing is intrinsic to the content, so a badge is as wide as its label.

NeutralPrimarySuccessWarningDangerInfo

```
<span class="badge">Neutral</span>
<span class="badge badge--primary">Primary</span>
<span class="badge badge--success">Success</span>
<span class="badge badge--warning">Warning</span>
<span class="badge badge--danger">Danger</span>
<span class="badge badge--info">Info</span>
```

## Soft

Add `.badge--soft` for a tinted fill with solid tone text, a quieter look than the filled chip. It composes with an intent modifier and reads its tone. On its own, `.badge--soft`falls back to the muted foreground.

NeutralPrimarySuccessWarningDangerInfo

```
<span class="badge badge--soft">Neutral</span>
<span class="badge badge--soft badge--primary">Primary</span>
<span class="badge badge--soft badge--success">Success</span>
<span class="badge badge--soft badge--warning">Warning</span>
<span class="badge badge--soft badge--danger">Danger</span>
<span class="badge badge--soft badge--info">Info</span>
```

## With icon

There's no icon wrapper class. Any direct `<svg>` or`<i>` child scales to the badge's font size, the same convention as `.button`. Drop it before or after the label.

Verified Pending Failed Featured12

```
<span class="badge badge--success"><i data-lucide="check"></i> Verified</span>
<span class="badge badge--soft badge--warning"><i data-lucide="clock"></i> Pending</span>
<span class="badge badge--soft badge--danger"><i data-lucide="circle-x"></i> Failed</span>
<span class="badge badge--primary"><i data-lucide="star"></i> Featured</span>
<span class="badge badge--info">12 <i data-lucide="arrow-up"></i></span>
```

## Loading

Slot a `.spinner.spinner--sm` in to signal in-flight work. It inherits the badge's text color and shrinks to the badge's font size.

Syncing

Loading

Uploading

```
<span class="badge badge--soft badge--primary">
  <span class="spinner spinner--sm" role="status" aria-hidden="true"></span>
  Syncing
</span>
<span class="badge badge--soft">
  <span class="spinner spinner--sm" role="status" aria-hidden="true"></span>
  Loading
</span>
<span class="badge badge--info">
  <span class="spinner spinner--sm" role="status" aria-hidden="true"></span>
  Uploading
</span>
```

## Count

A badge sits inside other components through the font-size cascade. Inside a `.button` it inherits the button's text size and packs alongside the label.

Inbox 24
Notifications 9
Alerts 12

```
<button type="button" class="button button--neutral">
  Inbox <span class="badge badge--primary">24</span>
</button>
<button type="button" class="button button--soft button--primary">
  Notifications <span class="badge badge--soft badge--primary">9</span>
</button>
<button type="button" class="button button--outline button--neutral">
  Alerts <span class="badge badge--danger">12</span>
</button>
```

## Flattened

Pill is the default shape. Set `--badge-radius` to flatten the corners, on a single badge or on a parent scope to flatten every badge inside it at once.

PrimarySuccessSquared

```
<span class="badge badge--primary" style="--badge-radius: var(--radius-sm)">Primary</span>
<span class="badge badge--soft badge--success" style="--badge-radius: var(--radius-sm)">Success</span>
<span class="badge" style="--badge-radius: 0">Squared</span>
```

## Customization

These variables retune `.badge` without touching component CSS. Override on the badge itself, on a parent scope, or on`:root`. The cascade scopes the change.

| Variable                 | Use                                                                                              |
| ------------------------ | ------------------------------------------------------------------------------------------------ |
| `--badge-radius`         | Corner radius; defaults to a full pill                                                           |
| `--badge-min-height`     | Minimum height of the chip                                                                       |
| `--badge-padding-block`  | Top and bottom padding                                                                           |
| `--badge-padding-inline` | Left and right padding                                                                           |
| `--badge-font-size`      | Label text size; icons track it via `1em`                                                        |
| `--badge-font-weight`    | Label weight                                                                                     |
| `--badge-bg`             | Background; intents set the tone, `--soft` sets a 15% tint                                       |
| `--badge-color`          | Text and icon color                                                                              |
| `--badge-tone`           | The intent fill an intent modifier publishes;`--soft` reads it for its 15% tint                  |
| `--badge-tone-emphasis`  | The accessible text `--soft` wears on that tint; intents set it from `--color-<intent>-emphasis` |
