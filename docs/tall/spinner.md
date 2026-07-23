# Spinner Component (TALL Stack)

A lightweight indicator for in-flight work.

## Basic

Use `.spinner` with `role="status"` and a visually hidden label so screen readers announce the loading state. The default is a spinning border ring.

```blade
<stisla::spinner />
```

---

## Grow

Add `.spinner--grow` for a pulsing dot. Same markup, same a11y story.

```blade
<stisla::spinner :grow="true" />
```

---

## Colors

Both spinners inherit from `currentColor`, so any `.text-*` utility recolors them.

```blade
<stisla::spinner tone="primary" />
<stisla::spinner tone="success" />
<stisla::spinner tone="danger" />
<stisla::spinner tone="warning" />
<stisla::spinner tone="info" />
<stisla::spinner tone="muted" />

<stisla::spinner :grow="true" tone="primary" />
<stisla::spinner :grow="true" tone="success" />
```

---

## Sizes

Add `size="sm"` for the compact size used inside buttons and badges, or `size="lg"` for an empty-state hero.

```blade
<stisla::spinner size="sm" />
<stisla::spinner />
<stisla::spinner size="lg" />

<stisla::spinner :grow="true" size="sm" />
<stisla::spinner :grow="true" />
<stisla::spinner :grow="true" size="lg" />
```

For one-off sizes, override `--spinner-size` inline or via props:

```blade
<stisla::spinner size-value="3rem" width-value="4px" />
<stisla::spinner :grow="true" size-value="3rem" />
```

---

## Alignment

Spinners are inline-block, so flex and margin utilities place them like any other inline element.

```blade
<span class="inline-flex items-center gap-2 text-sm">
    <stisla::spinner size="sm" :aria-hidden="true" />
    <span>Syncing inbox</span>
</span>
```

---

## In buttons

For the canonical icon-aware loading state, set `:busy="true"` on the button. It swaps any leading or trailing icon for the spinner without shifting the label.

```blade
<stisla::button tone="primary" :busy="true">Saving</stisla::button>
<stisla::button mode="outline" tone="neutral" :busy="true">Loading</stisla::button>
```

For a standalone spinner inside a button, slot `<stisla::spinner size="sm" :aria-hidden="true" as="span" />` as a leading element.

```blade
<stisla::button tone="primary" :disabled="true">
    <stisla::spinner size="sm" :aria-hidden="true" as="span" />
    Loading
</stisla::button>
```

---

## Customization

These variables retune `.spinner` without touching component CSS. Color comes from `currentColor`, so any `.text-*` utility recolors it.

| Variable | Use |
| :--- | :--- |
| `--spinner-size` | Diameter; size modifiers reassign this |
| `--spinner-width` | Stroke width on `.spinner`; ignored by `.spinner--grow` |
| `--spinner-duration` | One animation cycle; reduced-motion overrides to a longer value |

---

## Props Reference

### `<stisla::spinner>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'div'` | Tag HTML elemen (`'div'`, `'span'`) |
| `grow` | `bool` | `false` | Varian pulsing dot (`.spinner--grow`) |
| `size` | `string` | `null` | Ukuran spinner (`'sm'`, `'lg'`) |
| `tone` | `string` | `null` | Warna intent (`'primary'`, `'success'`, `'danger'`, `'warning'`, `'info'`, `'muted'`) |
| `label` | `string` | `'Loading…'` | Teks aksesibilitas screen reader (`<span class="sr-only">`) |
| `ariaHidden` | `bool` | `false` | Menyembunyikan dari screen reader (`aria-hidden="true"`) |
| `sizeValue` | `string` | `null` | Nilai CSS kustom diameter (`--spinner-size`) |
| `widthValue` | `string` | `null` | Nilai CSS kustom ketebalan stroke (`--spinner-width`) |
| `duration` | `string` | `null` | Durasi siklus animasi (`--spinner-duration`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--spinner-*`) |
