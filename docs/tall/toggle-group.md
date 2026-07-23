# Toggle Group Component (TALL Stack)

A pill container hosting a row of toggles pressed inside its padded interior.

## Single-select (segmented)

The container owns the frame; members go ghost-rest so the cluster reads as one segmented control.

```blade
<stisla::toggle-group label="Text alignment">
    <stisla::toggle-group.item role="radio" :iconOnly="true" value="left" icon="align-left" aria-label="Align left" />
    <stisla::toggle-group.item role="radio" :iconOnly="true" :active="true" value="center" icon="align-center" aria-label="Align center" />
    <stisla::toggle-group.item role="radio" :iconOnly="true" value="right" icon="align-right" aria-label="Align right" />
</stisla::toggle-group>
```

---

## Keyboard

Roving tabindex keeps one member in the tab order at a time.

| Key | Single-select | Multi-select |
| :--- | :--- | :--- |
| `→` / `↓` | Focus next enabled member, auto-select. | Focus next enabled member. |
| `←` / `↑` | Focus previous enabled member, auto-select. | Focus previous enabled member. |
| `Home` | Focus first enabled, auto-select. | Focus first enabled member. |
| `End` | Focus last enabled, auto-select. | Focus last enabled member. |
| `Space` / `Enter` | Select focused. | Flip `aria-pressed` on focused member. |
| `Tab` | Leaves the group. | Leaves the group. |

---

## Multi-select

Each member is an independent press toggle with `type="multiple"`.

```blade
<stisla::toggle-group type="multiple" label="Text style">
    <stisla::toggle-group.item :iconOnly="true" :active="true" value="bold" icon="bold" aria-label="Bold" />
    <stisla::toggle-group.item :iconOnly="true" :active="false" value="italic" icon="italic" aria-label="Italic" />
    <stisla::toggle-group.item :iconOnly="true" :active="true" value="underline" icon="underline" aria-label="Underline" />
</stisla::toggle-group>
```

---

## Text labels and icon + label

Members can carry text instead of, or alongside, icons.

```blade
<stisla::toggle-group label="Calendar view">
    <stisla::toggle-group.item role="radio" :active="true" value="day">Day</stisla::toggle-group.item>
    <stisla::toggle-group.item role="radio" value="week">Week</stisla::toggle-group.item>
    <stisla::toggle-group.item role="radio" value="month">Month</stisla::toggle-group.item>
</stisla::toggle-group>
```

---

## Form data (radio set)

For single-select form submission using native HTML radios.

```blade
<stisla::toggle-group>
    <stisla::toggle-group.input type="radio" name="planRange" id="tgDay" value="day" :checked="true" />
    <stisla::toggle as="label" for="tgDay">Day</stisla::toggle>
    <stisla::toggle-group.input type="radio" name="planRange" id="tgWeek" value="week" />
    <stisla::toggle as="label" for="tgWeek">Week</stisla::toggle>
</stisla::toggle-group>
```

---

## Form data (checkbox set)

For multi-select form submission using native HTML checkboxes.

```blade
<stisla::toggle-group>
    <stisla::toggle-group.input type="checkbox" name="tools" id="toolBold" value="bold" :checked="true" />
    <stisla::toggle as="label" for="toolBold" :iconOnly="true" icon="bold" aria-label="Bold" />
    <stisla::toggle-group.input type="checkbox" name="tools" id="toolItalic" value="italic" />
    <stisla::toggle as="label" for="toolItalic" :iconOnly="true" icon="italic" aria-label="Italic" />
</stisla::toggle-group>
```

---

## Vertical

Add `:vertical="true"` to stack members as a menu list.

```blade
<stisla::toggle-group :vertical="true" class="max-w-xs" label="Mailbox">
    <stisla::toggle-group.item role="radio" :active="true" value="inbox" icon="inbox">Inbox</stisla::toggle-group.item>
    <stisla::toggle-group.item role="radio" value="archive" icon="archive">Archive</stisla::toggle-group.item>
    <stisla::toggle-group.item role="radio" value="trash" icon="trash-2">Trash</stisla::toggle-group.item>
</stisla::toggle-group>
```

---

## Sizes

Add `size="sm"` or `size="lg"`.

```blade
<stisla::toggle-group size="sm" label="Small">
    <stisla::toggle-group.item role="radio" :active="true" value="day">Day</stisla::toggle-group.item>
</stisla::toggle-group>
<stisla::toggle-group size="lg" label="Large">
    <stisla::toggle-group.item role="radio" :active="true" value="day">Day</stisla::toggle-group.item>
</stisla::toggle-group>
```

---

## Events

Two events fire on the group's root:

- `stisla:toggle-group:changing`: cancelable
- `stisla:toggle-group:changed`: final value update

---

## Customization

These variables retune `.toggle-group`.

| Variable | Use |
| :--- | :--- |
| `--toggle-group-height` | Outer container height |
| `--toggle-group-radius` | Outer corner radius |
| `--toggle-group-padding-block` / `-padding-inline` | Interior padding |
| `--toggle-group-gap` | Gap between members |
| `--toggle-group-bg` | Container background |
| `--toggle-group-border-color` / `-border-width` | Rim color / thickness |

---

## Props Reference

### `<stisla::toggle-group>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'div'` | Tag HTML elemen (`'div'`, `'nav'`) |
| `type` | `string` | `'single'` | Mode pilihan (`'single'`, `'multiple'`) |
| `size` | `string` | `null` | Ukuran grup (`'sm'`, `'lg'`) |
| `vertical` | `bool` | `false` | Menata anggota secara vertikal (`.toggle-group--vertical`) |
| `label` | `string` | `null` | Label aksesibilitas (`aria-label`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--toggle-group-*`) |

### `<stisla::toggle-group.item>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'button'` | Tag HTML elemen (`'button'`, `'a'`) |
| `value` | `string` | `null` | Nilai data elemen (`data-value`) |
| `active` | `bool` | `false` | Status terkonfirmasi aktif (`data-state="active"`) |
| `role` | `string` | `null` | Peran ARIA (`'radio'`, `'button'`) |
| `icon` | `string` | `null` | Nama ikon Lucide |
| `iconOnly` | `bool` | `false` | Mode kotak persegi hanya ikon |
| `circle` | `bool` | `false` | Mode lingkaran bundar |
| `disabled` | `bool` | `false` | Status disabled elemen |

### `<stisla::toggle-group.input>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `type` | `string` | `'radio'` | Tipe elemen input (`'radio'`, `'checkbox'`) |
| `name` | `string` | `null` | Nama grup form |
| `id` | `string` | `null` | Unique ID input |
| `value` | `string` | `null` | Nilai input form |
| `checked` | `bool` | `false` | Status awal terpilih |
| `disabled` | `bool` | `false` | Status disabled input |
