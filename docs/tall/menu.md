# Menu Component (TALL Stack)

A floating list of actions anchored to a trigger.

## Basic

The `<stisla::menu>` wrapper holds a trigger and a `<stisla::menu.popup>` surface of `<stisla::menu.item>` rows.

```blade
<stisla::menu>
    <stisla::menu.trigger tone="neutral" for="menu-basic">Actions</stisla::menu.trigger>
    <stisla::menu.popup id="menu-basic">
        <stisla::menu.item icon="pencil" shortcut="⌘E">Edit</stisla::menu.item>
        <stisla::menu.item icon="copy" shortcut="⌘D">Duplicate</stisla::menu.item>
        <stisla::menu.item icon="share-2">Share</stisla::menu.item>
        <stisla::menu.separator />
        <stisla::menu.item :danger="true" icon="trash-2" shortcut="⌫">Delete</stisla::menu.item>
    </stisla::menu.popup>
</stisla::menu>
```

---

## Keyboard

Open with `Enter`, `Space`, or `ArrowDown`. Move focus with arrow keys, activate with `Enter`/`Space`, and `Escape` to dismiss.

---

## With icons

Drop an icon prop or icon element as the leading child of an item.

```blade
<stisla::menu.item icon="user">Profile</stisla::menu.item>
```

---

## Headers and dividers

Use `<stisla::menu.group>` with label or `<stisla::menu.separator>` to group options.

```blade
<stisla::menu.group label="Account" id="menu-account">
    <stisla::menu.item>Profile</stisla::menu.item>
</stisla::menu.group>
<stisla::menu.separator />
```

---

## Active and disabled

Mark active item with `:active="true"` and disabled items with `:disabled="true"`.

```blade
<stisla::menu.item :active="true">Newest first</stisla::menu.item>
<stisla::menu.item :disabled="true">By owner (Pro)</stisla::menu.item>
```

---

## Destructive items

Add `:danger="true"` for destructive actions.

```blade
<stisla::menu.item :danger="true" icon="trash-2">Delete project</stisla::menu.item>
```

---

## Checkbox items

Items with `role="menuitemcheckbox"` toggle state on click.

```blade
<stisla::menu.popup id="menu-check" autoClose="outside">
    <stisla::menu.item role="menuitemcheckbox" :checked="true">Show grid</stisla::menu.item>
</stisla::menu.popup>
```

---

## Radio items

Items with `role="menuitemradio"` inside a `<stisla::menu.group>` behave as a single-selection group.

```blade
<stisla::menu.group label="Appearance" id="radio-group">
    <stisla::menu.item role="menuitemradio" :checked="true">Light</stisla::menu.item>
    <stisla::menu.item role="menuitemradio" :checked="false">Dark</stisla::menu.item>
</stisla::menu.group>
```

---

## Item shortcuts

Append keyboard shortcuts via `<stisla::menu.shortcut>`.

```blade
<stisla::menu.item>
    <span>New file</span>
    <stisla::menu.shortcut><kbd>⌘</kbd><kbd>N</kbd></stisla::menu.shortcut>
</stisla::menu.item>
```

---

## Media rows

Use `role="menuitem"` on media rows for rich notification menus.

---

## Placement

Set `placement="top|right-start|left-start|bottom-end"` on the popup.

---

## Events

Four events fire on `.menu__popup`:

- `stisla:menu:opening` (cancelable)
- `stisla:menu:opened`
- `stisla:menu:closing` (cancelable)
- `stisla:menu:closed`

---

## Customization

These variables retune `.menu__popup`.

| Variable | Use |
| :--- | :--- |
| `--menu-z-index` | Overlay stacking order |
| `--menu-min-width` | Popup minimum width |
| `--menu-bg` / `-color` / `-border-color` | Popup fill, text, rim |
| `--menu-radius` / `-shadow` | Corner radius and elevation |
| `--menu-item-bg-hover` / `-item-color-hover` | Hover highlight paint |
| `--menu-item-color-danger` | Destructive row text |

---

## Props Reference

### `<stisla::menu.popup>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `id` | `string` | `null` | Unique ID popup menu |
| `placement` | `string` | `null` | Posisi Floating UI (`'bottom-start'`, `'top'`, `'right-start'`, `'left-start'`, `'bottom-end'`) |
| `autoClose` | `string\|bool` | `null` | Perilaku penutupan otomatis (`'both'`, `'outside'`, `'inside'`, `false`) |
| `open` | `bool` | `false` | Status awal terbuka |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--menu-*`) |

### `<stisla::menu.item>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'button'` | Tag HTML elemen (`'button'`, `'a'`) |
| `role` | `string` | `'menuitem'` | Peran ARIA (`'menuitem'`, `'menuitemcheckbox'`, `'menuitemradio'`) |
| `checked` | `bool` | `null` | Status centang untuk checkbox/radio |
| `active` | `bool` | `false` | Status terpilih aktif (`data-state="active"`) |
| `disabled` | `bool` | `false` | Status ter-nonaktifkan |
| `danger` | `bool` | `false` | Opsi aksi destruktif (`.menu__item--danger`) |
| `icon` | `string` | `null` | Nama ikon Lucide bagian depan |
| `shortcut` | `string` | `null` | Teks pintasan keyboard bagian belakang |
