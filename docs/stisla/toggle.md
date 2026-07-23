# Toggle

A two-state press button: outline-neutral at rest, highlight-filled when active.

## Basic

Active comes from `aria-pressed`, `data-state="active"`, or a checked`.toggle-input` — all paint identically. A button toggle gets its press wiring from `@stisla/vanilla` via `data-stisla-toggle` (the demos below are live); the native `.toggle-input` form-data path works with no JS. A`<button class="toggle">` with `aria-pressed`. The active state is shown below.

Notifications on Off

```
<button type="button" data-stisla-toggle class="toggle" aria-pressed="true"><i data-lucide="bell"></i> Notifications on</button>
<button type="button" data-stisla-toggle class="toggle" aria-pressed="false"><i data-lucide="bell-off"></i> Off</button>
```

## Keyboard

The toggle behaves like a native button with a sticky pressed state.

- `Tab`: focus the toggle
- `Space` / `Enter`: flip `aria-pressed`

## Form data

For a toggle whose state submits with a form, pair a hidden`<input class="toggle-input">` with a sibling`<label class="toggle">`. The browser owns selection, so this is fully interactive with no JS.

Subscribe to newsletter

```
<input type="checkbox" class="toggle-input" id="newsletterToggle" name="newsletter" checked>
<label class="toggle" for="newsletterToggle"><i data-lucide="mail"></i> Subscribe to newsletter</label>
```

## Sizes

Add `.toggle--sm` or `.toggle--lg` to match the button size cadence.

BoldBoldBold

```
<button type="button" data-stisla-toggle class="toggle toggle--sm" aria-pressed="true">Bold</button>
<button type="button" data-stisla-toggle class="toggle" aria-pressed="true">Bold</button>
<button type="button" data-stisla-toggle class="toggle toggle--lg" aria-pressed="true">Bold</button>
```

## Icon-only

Add `.toggle--icon-only` for a square slot. Add an `aria-label` so the affordance is named for assistive tech.

```
<button type="button" data-stisla-toggle class="toggle toggle--icon-only" aria-pressed="false" aria-label="Bold"><i data-lucide="bold"></i></button>
<button type="button" data-stisla-toggle class="toggle toggle--icon-only" aria-pressed="true" aria-label="Italic"><i data-lucide="italic"></i></button>
<button type="button" data-stisla-toggle class="toggle toggle--icon-only" aria-pressed="false" aria-label="Underline"><i data-lucide="underline"></i></button>
```

## Circle

Add `.toggle--circle` alongside `.toggle--icon-only` for a circular silhouette.

```
<button type="button" data-stisla-toggle class="toggle toggle--icon-only toggle--circle" aria-pressed="false" aria-label="Like"><i data-lucide="thumbs-up"></i></button>
<button type="button" data-stisla-toggle class="toggle toggle--icon-only toggle--circle" aria-pressed="true" aria-label="Love"><i data-lucide="heart"></i></button>
<button type="button" data-stisla-toggle class="toggle toggle--icon-only toggle--circle" aria-pressed="false" aria-label="Star"><i data-lucide="star"></i></button>
```

## Disabled

Native `:disabled` on the button (or the paired `.toggle-input`) dims the chip and blocks pointer events.

Off, disabledOn, disabledForm, disabled

```
<button type="button" data-stisla-toggle class="toggle" aria-pressed="false" disabled>Off, disabled</button>
<button type="button" data-stisla-toggle class="toggle" aria-pressed="true" disabled>On, disabled</button>
<input type="checkbox" class="toggle-input" id="toggleDisabledForm" disabled>
<label class="toggle" for="toggleDisabledForm">Form, disabled</label>
```

## Events

Two events fire on the toggle. Both carry the upcoming or new state in`detail.pressed`.

`stisla:toggle:changing` fires before the flip and is cancelable. Call`preventDefault()` on the event to keep the current state, useful when an external check has to confirm the flip first.

`stisla:toggle:changed` fires after the flip lands. Use it to mirror the state somewhere else or to save the choice.

## Customization

These variables retune `.toggle`. Geometry mirrors `.button`; the surface follows the interactional trio (rest, accent hover, highlight active).

| Variable                                  | Use                                                                |
| ----------------------------------------- | ------------------------------------------------------------------ |
| `--toggle-radius`                         | Corner radius                                                      |
| `--toggle-height`                         | Hard height; sm/lg reassign this                                   |
| `--toggle-padding-inline`                 | Horizontal padding; sm/lg reassign this                            |
| `--toggle-padding-block`                  | Vertical padding; defaults to `0` since the height owns the rhythm |
| `--toggle-gap`                            | Space between an icon and its label                                |
| `--toggle-font-size`                      | Label size                                                         |
| `--toggle-font-weight`                    | Label weight                                                       |
| `--toggle-bg` / `-color`                  | Rest fill / text                                                   |
| `--toggle-border-color` / `-border-width` | Rim color / thickness                                              |
| `--toggle-bg-hover` / `-color-hover`      | Hover fill / text (accent, transient)                              |
| `--toggle-bg-active` / `-color-active`    | Active fill / text (highlight, persistent)                         |
| `--toggle-border-color-active`            | Active rim; defaults to the active bg for a clean solid fill       |
| `--toggle-ring`                           | Focus outline color                                                |
