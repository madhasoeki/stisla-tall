# Drawer Component (TALL Stack)

An edge-anchored panel for side drawers, filters, and quick captures.

## Basic

A trigger opens the panel via `data-stisla-drawer-trigger="<id>"`. The panel itself is a `<stisla::drawer>` with optional `<stisla::drawer.header>`, `<stisla::drawer.body>`, and `<stisla::drawer.footer>`.

```blade
<stisla::drawer.trigger tone="primary" for="drawerBasic">New task</stisla::drawer.trigger>

<stisla::drawer id="drawerBasic" aria-labelledby="drawerBasicLabel">
    <stisla::drawer.backdrop />
    <stisla::drawer.content>
        <stisla::drawer.header>
            <stisla::drawer.title id="drawerBasicLabel">New task</stisla::drawer.title>
            <stisla::drawer.close />
        </stisla::drawer.header>
        <stisla::drawer.body>
            <stisla::field label="Title" for="taskTitle" class="mb-4">
                <stisla::input id="taskTitle" placeholder="Write the launch announcement" />
            </stisla::field>
        </stisla::drawer.body>
        <stisla::drawer.footer>
            <stisla::button mode="ghost" tone="neutral" data-stisla-drawer-dismiss>Cancel</stisla::button>
            <stisla::button tone="primary" data-stisla-drawer-dismiss>Create task</stisla::button>
        </stisla::drawer.footer>
    </stisla::drawer.content>
</stisla::drawer>
```

---

## Keyboard

In modal mode, focus is trapped inside the drawer. `Tab` / `Shift+Tab` cycle focus, and `Escape` dismisses the drawer.

---

## Placements

Four modifiers anchor the panel: `placement="start"` (left), `placement="end"` (right, default), `placement="top"` (above), and `placement="bottom"` (below).

```blade
<stisla::drawer id="drawerStart" placement="start">...</stisla::drawer>
<stisla::drawer id="drawerEnd" placement="end">...</stisla::drawer>
<stisla::drawer id="drawerTop" placement="top">...</stisla::drawer>
<stisla::drawer id="drawerBottom" placement="bottom">...</stisla::drawer>
```

---

## Floating

Add `:floating="true"` to detach the panel from the viewport edge with gaps and rounded corners.

```blade
<stisla::drawer id="drawerFloatStart" placement="start" :floating="true">...</stisla::drawer>
```

---

## Sized

Override `--drawer-width` or `--drawer-height` inline via `:vars`.

```blade
<stisla::drawer id="drawerSized" :vars="['width' => '28rem']">...</stisla::drawer>
```

---

## Body scroll allowed

Set `:scroll="true"` to let the page keep scrolling while open.

```blade
<stisla::drawer as="aside" id="drawerActivity" :scroll="true" :backdrop="false">...</stisla::drawer>
```

---

## Static backdrop

Set `backdrop="static"` and `:keyboard="false"` for a deliberate dismiss where backdrop clicks shake the panel.

```blade
<stisla::drawer id="drawerSetup" backdrop="static" :keyboard="false">...</stisla::drawer>
```

---

## No backdrop

Set `:backdrop="false"` to drop the dim scrim entirely.

```blade
<stisla::drawer as="aside" placement="start" id="drawerFilters" :backdrop="false" :scroll="true">...</stisla::drawer>
```

---

## Events

Four events fire on `.drawer`:

- `stisla:drawer:opening` (cancelable)
- `stisla:drawer:opened`
- `stisla:drawer:closing` (cancelable)
- `stisla:drawer:closed`

---

## Customization

These variables retune `.drawer`.

| Variable | Use |
| :--- | :--- |
| `--drawer-width` | Panel width for `start` / `end` |
| `--drawer-height` | Panel height for `top` / `bottom` |
| `--drawer-padding-block` / `-padding-inline` | Interior padding |
| `--drawer-gap` | Breathing room under `:floating="true"` |
| `--drawer-bg` / `-color` | Panel fill / text |
| `--drawer-backdrop-bg` / `-backdrop-blur` | Dim color / blur radius |

---

## Props Reference

### `<stisla::drawer>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'div'` | Tag HTML elemen (`'div'`, `'aside'`) |
| `id` | `string` | `null` | Unique ID drawer |
| `placement` | `string` | `null` | Posisi jangkar tepi (`'start'`, `'end'`, `'top'`, `'bottom'`) |
| `floating` | `bool` | `false` | Mode panel mengapung dengan sudut membulat (`.drawer--floating`) |
| `scroll` | `bool` | `false` | Mengizinkan halaman belakang tetap di-scroll (`data-stisla-drawer-scroll="true"`) |
| `backdrop` | `string\|bool` | `null` | Opsi backdrop (`'static'`, `true`, `false`) |
| `keyboard` | `bool` | `null` | Mengizinkan penutupan tombol ESC |
| `open` | `bool` | `false` | Status awal terbuka |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--drawer-*`) |

### `<stisla::drawer.trigger>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `for` | `string` | `null` | ID drawer target yang akan dibuka (`data-stisla-drawer-trigger`) |
| `tone` | `string` | `'primary'` | Intent warna tombol |
| `mode` | `string` | `null` | Gaya tombol (`'outline'`, `'ghost'`, `'soft'`) |
