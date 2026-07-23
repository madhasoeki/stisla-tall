# Tooltip Component (TALL Stack)

A small inverse-surface chip that labels the control it points at.

## Basic

Add `data-stisla-tooltip` + `data-stisla-tooltip-title` to any control or wrap with `<stisla::tooltip>`.

```blade
<stisla::button tone="neutral" data-stisla-tooltip data-stisla-tooltip-title="Saved to your library" data-stisla-tooltip-delay="150">Hover me</stisla::button>
```

---

## Keyboard

Tooltip activation is tied to focus when `focus` is in the trigger list (the default). Blurring the trigger closes it.

- `Tab`: focus the trigger and open the tooltip
- `Escape`: close the open tooltip without taking focus off the trigger

---

## Placements

`placement` picks the resting side (`top`, `right`, `bottom`, `left`, `top-start`, `top-end`, `bottom-start`, `bottom-end`).

```blade
<stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-placement="top" data-stisla-tooltip-title="Anchored above">Top</stisla::button>
<stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-placement="right" data-stisla-tooltip-title="Anchored right">Right</stisla::button>
<stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-placement="bottom" data-stisla-tooltip-title="Anchored below">Bottom</stisla::button>
<stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-placement="left" data-stisla-tooltip-title="Anchored left">Left</stisla::button>
```

---

## Triggers

The default is `hover focus`. Specify `trigger="hover"` or `trigger="focus"` to restrict activation.

```blade
<stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-trigger="hover" data-stisla-tooltip-title="Hover only">Hover only</stisla::button>
<stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-trigger="focus" data-stisla-tooltip-title="Focus only">Focus only</stisla::button>
```

---

## Delay

Set opening delay in ms: `delay="0"` (instant), `delay="600"` (default), or `delay="1200"` (lazy).

```blade
<stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-delay="0" data-stisla-tooltip-title="Instant">Instant</stisla::button>
```

---

## On a link

Tooltips work on any element, including `<stisla::link>`.

```blade
<stisla::link href="#" data-stisla-tooltip data-stisla-tooltip-title="GitHub Actions">CI</stisla::link>
```

---

## Icon-only triggers

Pair tooltips on icon buttons with matching `aria-label` for screen reader accessibility.

```blade
<stisla::button mode="outline" tone="neutral" :icon-only="true" icon="pencil" data-stisla-tooltip data-stisla-tooltip-title="Edit" aria-label="Edit" />
```

---

## HTML content

Pass `html="true"` to render formatted HTML inside the chip.

```blade
<stisla::button mode="outline" tone="neutral" data-stisla-tooltip data-stisla-tooltip-html="true" data-stisla-tooltip-title="Press <kbd>Cmd</kbd>+<kbd>K</kbd> to search">Search</stisla::button>
```

---

## Long content

Text wrapping occurs automatically when title length exceeds `--tooltip-max-width`.

---

## Disabled trigger

Disabled buttons don't fire pointer events, so wrap them with `<stisla::tooltip>`:

```blade
<stisla::tooltip title="Upgrade to enable exports" class="inline-block" tabindex="0">
    <stisla::button tone="primary" :disabled="true" style="pointer-events: none;">Export CSV</stisla::button>
</stisla::tooltip>
```

---

## Events

Four events fire on the trigger element:

- `stisla:tooltip:opening` (cancelable)
- `stisla:tooltip:opened`
- `stisla:tooltip:closing` (cancelable)
- `stisla:tooltip:closed`

---

## Customization

These variables retune `<stisla::tooltip>`.

| Variable | Use |
| :--- | :--- |
| `--tooltip-z-index` | Overlay stacking order |
| `--tooltip-max-width` | Width cap before text wraps |
| `--tooltip-padding-block` / `-padding-inline` | Chip interior padding |
| `--tooltip-color` / `-bg` | Chip text and fill |
| `--tooltip-radius` / `-shadow` | Chip corner radius and elevation |
| `--tooltip-arrow-size` | Caret square size |

---

## Props Reference

### `<stisla::tooltip>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `title` | `string` | `''` | Teks keterangan tooltip |
| `placement` | `string` | `null` | Posisi Resting Floating UI (`'top'`, `'right'`, `'bottom'`, `'left'`, `'top-start'`, `'top-end'`, `'bottom-start'`, `'bottom-end'`) |
| `trigger` | `string` | `null` | Pemicu kemunculan (`'hover'`, `'focus'`, `'hover focus'`, `'manual'`) |
| `delay` | `int|string` | `null` | Waktu tunda buka dalam ms (`0`, `150`, `600`, `1200`) |
| `html` | `bool` | `false` | Render judul sebagai kode HTML |
| `as` | `string` | `'span'` | Tag pembungkus pemicu (`'span'`, `'div'`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--tooltip-*`) |
