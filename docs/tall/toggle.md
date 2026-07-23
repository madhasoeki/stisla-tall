# Toggle Component (TALL Stack)

A two-state press button: outline-neutral at rest, highlight-filled when active.

## Basic

Active comes from `aria-pressed`, `data-state="active"`, or a checked `.toggle-input`.

```blade
<stisla::toggle :pressed="true" icon="bell">Notifications on</stisla::toggle>
<stisla::toggle :pressed="false" icon="bell-off">Off</stisla::toggle>
```

---

## Keyboard

The toggle behaves like a native button with a sticky pressed state.

- `Tab`: focus the toggle
- `Space` / `Enter`: flip `aria-pressed`

---

## Form data

For a toggle whose state submits with a form, pair a hidden `<stisla::toggle.input>` with a sibling `<stisla::toggle as="label">`.

```blade
<stisla::toggle.input id="newsletterToggle" name="newsletter" :checked="true" />
<stisla::toggle as="label" for="newsletterToggle" icon="mail">Subscribe to newsletter</stisla::toggle>
```

---

## Sizes

Add `size="sm"` or `size="lg"` to match the button size cadence.

```blade
<stisla::toggle size="sm" :pressed="true">Bold</stisla::toggle>
<stisla::toggle :pressed="true">Bold</stisla::toggle>
<stisla::toggle size="lg" :pressed="true">Bold</stisla::toggle>
```

---

## Icon-only

Add `:iconOnly="true"` for a square slot.

```blade
<stisla::toggle :iconOnly="true" :pressed="false" icon="bold" aria-label="Bold" />
<stisla::toggle :iconOnly="true" :pressed="true" icon="italic" aria-label="Italic" />
<stisla::toggle :iconOnly="true" :pressed="false" icon="underline" aria-label="Underline" />
```

---

## Circle

Add `:circle="true"` alongside `:iconOnly="true"` for a circular silhouette.

```blade
<stisla::toggle :iconOnly="true" :circle="true" :pressed="false" icon="thumbs-up" aria-label="Like" />
<stisla::toggle :iconOnly="true" :circle="true" :pressed="true" icon="heart" aria-label="Love" />
<stisla::toggle :iconOnly="true" :circle="true" :pressed="false" icon="star" aria-label="Star" />
```

---

## Disabled

Native `:disabled="true"` dims the chip and blocks pointer events.

```blade
<stisla::toggle :pressed="false" :disabled="true">Off, disabled</stisla::toggle>
<stisla::toggle :pressed="true" :disabled="true">On, disabled</stisla::toggle>
<stisla::toggle.input id="toggleDisabledForm" :disabled="true" />
<stisla::toggle as="label" for="toggleDisabledForm" :disabled="true">Form, disabled</stisla::toggle>
```

---

## Events

Two events fire on the toggle:

- `stisla:toggle:changing`: fires before the flip and is cancelable.
- `stisla:toggle:changed`: fires after the flip lands.

---

## Customization

These variables retune `.toggle`.

| Variable | Use |
| :--- | :--- |
| `--toggle-radius` | Corner radius |
| `--toggle-height` | Hard height; sm/lg reassign this |
| `--toggle-padding-inline` | Horizontal padding |
| `--toggle-padding-block` | Vertical padding |
| `--toggle-gap` | Space between icon and label |
| `--toggle-font-size` / `-font-weight` | Label size / weight |
| `--toggle-bg` / `-color` | Rest fill / text |
| `--toggle-border-color` / `-border-width` | Rim color / thickness |
| `--toggle-bg-hover` / `-color-hover` | Hover fill / text |
| `--toggle-bg-active` / `-color-active` | Active fill / text |
| `--toggle-border-color-active` | Active rim |
| `--toggle-ring` | Focus outline color |

---

## Props Reference

### `<stisla::toggle>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'button'` | Tag HTML elemen (`'button'`, `'label'`, `'a'`) |
| `pressed` | `bool` | `false` | State aktif tombol (`aria-pressed="true\|false"`) |
| `size` | `string` | `null` | Ukuran tombol (`'sm'`, `'lg'`) |
| `iconOnly` | `bool` | `false` | Mode kotak persegi hanya ikon (`.toggle--icon-only`) |
| `circle` | `bool` | `false` | Mode lingkaran bundar (`.toggle--circle`) |
| `icon` | `string` | `null` | Nama ikon Lucide |
| `disabled` | `bool` | `false` | Mematikan interaksi tombol (`:disabled="true"`) |
| `for` | `string` | `null` | Atribut `for` saat `as="label"` |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--toggle-*`) |

### `<stisla::toggle.input>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `id` | `string` | `null` | Unique ID elemen checkbox |
| `name` | `string` | `null` | Atribut nama form |
| `checked` | `bool` | `false` | Status terpilih checkbox |
| `disabled` | `bool` | `false` | Status disabled checkbox |
