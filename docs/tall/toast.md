# Toast Component (TALL Stack)

A status message that surfaces briefly at a corner of the screen.

## Triggering

The usual entry point is the imperative API: `Stisla.toast()`, `Stisla.toast.success()`, `Stisla.toast.error()`, `Stisla.toast.warning()`, `Stisla.toast.info()`, and `Stisla.toast.promise()`.

```blade
<stisla::button tone="neutral" onclick="Stisla.toast({ title: 'Heads up', description: 'Your export is ready.' })">Show toast</stisla::button>
<stisla::button tone="neutral" onclick="Stisla.toast.success('Changes saved')">Success</stisla::button>
<stisla::button tone="neutral" onclick="Stisla.toast.error('Upload failed')">Error</stisla::button>
```

---

## Basic

The icon column anchors the layout. The content column stacks `<stisla::toast.header>` and an optional `<stisla::toast.body>`.

```blade
<stisla::toast>
    <stisla::toast.icon icon="bell" />
    <stisla::toast.content>
        <stisla::toast.header>Report ready</stisla::toast.header>
        <stisla::toast.body>Your weekly export finished and is ready to download.</stisla::toast.body>
    </stisla::toast.content>
    <stisla::toast.close />
</stisla::toast>
```

---

## Intents

An intent modifier shifts only the icon color: `tone="success|warning|danger|info"`.

```blade
<stisla::toast tone="success">
    <stisla::toast.icon icon="circle-check" />
    <stisla::toast.content><stisla::toast.header>Payment received</stisla::toast.header></stisla::toast.content>
    <stisla::toast.close />
</stisla::toast>
```

---

## Timestamp and actions

A `<stisla::toast.timestamp>` reads muted next to the title, and a `<stisla::toast.action>` row trails the body.

```blade
<stisla::toast>
    <stisla::toast.icon icon="user-plus" />
    <stisla::toast.content>
        <stisla::toast.header>Priya invited you <stisla::toast.timestamp>2 mins ago</stisla::toast.timestamp></stisla::toast.header>
        <stisla::toast.body>You have been added to the Northwind project.</stisla::toast.body>
        <stisla::toast.action>
            <stisla::button size="sm" tone="primary">Accept</stisla::button>
            <stisla::button size="sm" mode="ghost" tone="neutral" data-stisla-toast-dismiss>Dismiss</stisla::button>
        </stisla::toast.action>
    </stisla::toast.content>
    <stisla::toast.close />
</stisla::toast>
```

---

## Placement

A `<stisla::toast.region>` pins the stack to a corner (`placement="top-start|top-center|top-end|bottom-start|bottom-center|bottom-end"`).

```blade
<stisla::toast.region placement="top-end">
    <stisla::toast tone="success">...</stisla::toast>
</stisla::toast.region>
```

---

## Customization

These variables retune `<stisla::toast>` and `<stisla::toast.region>`.

| Variable | Use |
| :--- | :--- |
| `--toast-region-z-index` | Stacking order |
| `--toast-region-gap` / `-region-inset` | Stack spacing and corner inset |
| `--toast-min-width` / `-max-width` | Width bounds |
| `--toast-bg` / `-color` / `-border-color` | Surface fill, text, rim |
| `--toast-radius` / `-shadow` | Corner radius and elevation |

---

## Props Reference

### `<stisla::toast>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `tone` | `string` | `null` | Intent warna (`'primary'`, `'success'`, `'warning'`, `'danger'`, `'info'`) |
| `open` | `bool` | `true` | Status terbuka |
| `role` | `string` | `null` | Peran ARIA (`'status'`, `'alert'`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--toast-*`) |

### `<stisla::toast.region>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `placement` | `string` | `'top-end'` | Penempatan sudut (`'top-start'`, `'top-center'`, `'top-end'`, `'bottom-start'`, `'bottom-center'`, `'bottom-end'`) |
| `name` | `string` | `'default'` | Nama wilayah toast (`data-stisla-toast-region`) |
