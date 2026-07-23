# Button

A clickable control that triggers an action.

## Basic

Add `.button` to a `<button>`, then pair it with a tone modifier for the role. `.button--primary` is the main call to action; use one per surface for the action you most want the user to take.

Primary

```
<button type="button" class="button button--primary">Primary</button>
```

## Neutral

A quieter button next to primary. Use for actions that should sit alongside primary without competing for attention, like Cancel next to Save.

NeutralOutline

```
<button type="button" class="button button--neutral">Neutral</button>
<button type="button" class="button button--outline button--neutral">Outline</button>
```

The canonical pairing in context.

Save changesCancel

```
<button type="button" class="button button--primary">Save changes</button>
<button type="button" class="button button--outline button--neutral">Cancel</button>
```

## Tertiary

An alternative to primary when the brand color is already taken on the page. The fill flips by theme, dark in light mode and light in dark mode.

Tertiary

```
<button type="button" class="button button--tertiary">Tertiary</button>
```

## Danger

For destructive actions like Delete or Discard. Filled red is the safe default for a confirm dialog; outline and soft fit softer surfaces such as row-level deletes.

DangerOutlineSoft

```
<button type="button" class="button button--danger">Danger</button>
<button type="button" class="button button--outline button--danger">Outline</button>
<button type="button" class="button button--soft button--danger">Soft</button>
```

## Ghost

No background, no border, just a colored label. Use for low-stakes actions in toolbars or quiet inline triggers. Hover paints a soft tint so the affordance shows on interaction.

CancelView detailsRemove

```
<button type="button" class="button button--ghost button--neutral">Cancel</button>
<button type="button" class="button button--ghost button--primary">View details</button>
<button type="button" class="button button--ghost button--danger">Remove</button>
```

## Custom color

For one-off colors outside the shipped tones, set `--button-tone` and`--button-color` inline. The fill gradient, rim, and inset edge all derive from `--button-tone`, and hover/active fade a white`--button-overlay` wash over it, so a one-line override carries every state. If the same color appears in three or more places, promote it to a project class.

Custom greenCustom violetCustom orange

```
<button type="button" class="button" style="--button-tone: oklch(0.55 0.18 149); --button-color: white;">Custom green</button>
<button type="button" class="button" style="--button-tone: oklch(0.55 0.15 285); --button-color: white;">Custom violet</button>
<button type="button" class="button" style="--button-tone: oklch(0.65 0.18 55); --button-color: white;">Custom orange</button>
```

## Sizes

Heights are pinned across each size regardless of content. Base (unmodified) is`md`; `.button--sm`, `.button--lg`, and`.button--xl` step it.

SmallDefaultLargeXL

```
<button type="button" class="button button--primary button--sm">Small</button>
<button type="button" class="button button--primary">Default</button>
<button type="button" class="button button--primary button--lg">Large</button>
<button type="button" class="button button--primary button--xl">XL</button>
```

## With icon

Icons drop in via flexbox `gap` and scale to the label's font size.

Leading iconTrailing icon

```
<button type="button" class="button button--primary"><i data-lucide="plus"></i> Leading icon</button>
<button type="button" class="button button--primary">Trailing icon <i data-lucide="arrow-right"></i></button>
```

## Icon only

Add `.button--icon-only` for a square button at any size. Pair with`aria-label` so the action stays announced. Add`.button--pill` to round the ends fully; on an icon-only button that reads as a circle.

```
<button type="button" class="button button--primary button--icon-only button--sm" aria-label="Add"><i data-lucide="plus"></i></button>
<button type="button" class="button button--primary button--icon-only" aria-label="Add"><i data-lucide="plus"></i></button>
<button type="button" class="button button--primary button--icon-only button--lg" aria-label="Add"><i data-lucide="plus"></i></button>
<button type="button" class="button button--outline button--danger button--icon-only" aria-label="Delete"><i data-lucide="trash-2"></i></button>
<button type="button" class="button button--outline button--neutral button--icon-only" aria-label="Edit"><i data-lucide="pencil"></i></button>
<button type="button" class="button button--ghost button--neutral button--icon-only button--pill" aria-label="Edit"><i data-lucide="pencil"></i></button>
```

## States

`aria-pressed="true"` applies the pressed-in fill on any tone. Native`:disabled` applies on form controls; `aria-disabled="true"`mirrors it on link buttons.

PressedDisabled button [Disabled link](https://stisla.dev/docs/vanilla/button#)

```
<button type="button" class="button button--primary" aria-pressed="true">Pressed</button>
<button type="button" class="button button--primary" disabled>Disabled button</button>
<a href="#" role="button" class="button button--primary" aria-disabled="true" tabindex="-1">Disabled link</a>
```

## Loading

Set `aria-busy="true"` to show a leading spinner. The label stays; leading or trailing icons hide so the spinner takes their place. Click is blocked while busy. The spinner is pure CSS, no JS in this demo.

SavingSavingSavingLoading

```
<button type="button" class="button button--primary button--sm" aria-busy="true">Saving</button>
<button type="button" class="button button--primary" aria-busy="true">Saving</button>
<button type="button" class="button button--primary button--lg" aria-busy="true">Saving</button>
<button type="button" class="button button--outline button--neutral" aria-busy="true">Loading</button>
<button type="button" class="button button--danger button--icon-only" aria-busy="true" aria-label="Deleting"></button>
```

With icons, the spinner replaces them in place.

AddingContinuing

```
<button type="button" class="button button--primary" aria-busy="true"><i data-lucide="plus"></i> Adding</button>
<button type="button" class="button button--primary" aria-busy="true">Continuing <i data-lucide="arrow-right"></i></button>
```

## Works on any element

`.button` renders the same on `<button>`, `<a>`, and form inputs.

<button> [<a>](https://stisla.dev/docs/vanilla/button#)

```
<button type="button" class="button button--primary">&lt;button&gt;</button>
<a href="#" role="button" class="button button--primary">&lt;a&gt;</a>
<input type="submit" class="button button--primary" value="<input type=submit>" />
```

## Customization

Override on `.button` itself, on a parent scope, or on `:root`. The cascade scopes the change. The variable surface splits into four groups.

### Geometry and sizes

Shape, height, and text scale. Size modifiers (`--sm`, `--lg`,`--xl`) reassign each row to the corresponding value.

| Variable                  | Use                                                                                                                       |
| ------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `--button-radius`         | Corner radius. Size modifiers step it to a smaller or larger tier                                                         |
| `--button-height`         | Hard single-line height — a `--spacing()` multiple, so it tracks `--spacing`                                              |
| `--button-padding-inline` | Inline padding (left and right)                                                                                           |
| `--button-padding-block`  | Block padding (top and bottom); defaults to `0` since the height owns the rhythm. `--wrap` sets it for multi-line buttons |
| `--button-border-width`   | Border thickness; set `0` to drop the rim                                                                                 |
| `--button-font-size`      | Label size                                                                                                                |
| `--button-font-weight`    | Label weight                                                                                                              |
| `--button-icon-size`      | Width and height of inline icons                                                                                          |

### Color knobs

The surface variables that paint each state. Most default from`--button-tone`, so retoning is usually a one-line `--button-tone`override.

| Variable                      | Use                                                                                                                                                                                                           |
| ----------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `--button-bg`                 | Background fill. Defaults to a lighter-tone → tone gradient; set a flat color to override. Stays fixed across states — `--button-overlay` paints hover/active                                                 |
| `--button-color`              | Label color. Pairs with `--button-tone` for legibility across overrides                                                                                                                                       |
| `--button-tone-emphasis`      | Label color for `--outline`/`--ghost`/`--soft`, where the tone is text on a transparent or tinted bg. Intents set it from `--color-<intent>-emphasis` so it clears AA contrast; falls back to `--button-tone` |
| `--button-overlay`            | Color of the hover/active wash faded over the fill. White by default; neutral washes with foreground and tertiary with background so the wash stays visible on any fill                                       |
| `--button-overlay-strength`   | Peak (active) opacity of the wash; hover shows 0.6 of it. Raise for a stronger wash, set `0` to disable (outline/ghost/soft do this)                                                                          |
| `--button-border-color`       | Rim border — recessed in light, rim-lit in dark                                                                                                                                                               |
| `--button-inset-shadow-color` | Color of the all-around inset edge. Set `transparent` to drop it (outline/ghost/soft do this automatically)                                                                                                   |

### Tone source

One variable carries the button's color; the four color knobs derive from it. Tone modifiers reassign `--button-tone` to the matching token.

| Modifier            | Sets `--button-tone`                                                                                                           |
| ------------------- | ------------------------------------------------------------------------------------------------------------------------------ |
| `.button--primary`  | `var(--color-primary)` \+ `--button-color: var(--color-primary-foreground)`                                                    |
| `.button--danger`   | `var(--color-danger)` \+ `--button-color: var(--color-danger-foreground)`                                                      |
| `.button--neutral`  | `var(--color-neutral)` \+ `--button-tone-emphasis: var(--color-foreground)`, `--button-color: var(--color-neutral-foreground)` |
| `.button--tertiary` | `var(--color-foreground)` \+ `--button-color: var(--color-background)`; flips with theme                                       |

### Shape variants

Outline, ghost, and soft override the color knobs while leaving`--button-tone` intact, so a single tone reads three ways. Each drops the inset edge and wash (`--button-inset-shadow-color: transparent` and`--button-overlay-strength: 0`).

| Modifier           | `--button-bg`               | `--button-border-color` |
| ------------------ | --------------------------- | ----------------------- |
| `.button--outline` | transparent                 | `var(--button-tone)`    |
| `.button--ghost`   | transparent                 | transparent             |
| `.button--soft`    | tone @ 12% over transparent | transparent             |
