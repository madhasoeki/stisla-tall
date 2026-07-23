# Popover Component (TALL Stack)

A surface-tier panel anchored to a trigger, holding rich content.

## Basic

A plain popover holds `<stisla::popover.title>` and `<stisla::popover.body>`.

```blade
<stisla::popover.trigger tone="neutral" for="pop-basic">Details</stisla::popover.trigger>

<stisla::popover id="pop-basic" placement="bottom">
    <stisla::popover.title>Storage almost full</stisla::popover.title>
    <stisla::popover.body as="p">You have used 92% of your plan. Archive old projects or upgrade to keep syncing.</stisla::popover.body>
</stisla::popover>
```

---

## Keyboard

Open with `Enter` / `Space` when the trigger is focused. `Escape` closes the popover and restores focus to the trigger.

---

## With a close chip

Drop in `<stisla::popover.close>` for a corner dismiss affordance.

```blade
<stisla::popover id="pop-close" placement="bottom">
    <stisla::popover.close />
    <stisla::popover.title>Faster exports</stisla::popover.title>
    <stisla::popover.body as="p">Exports now stream in the background...</stisla::popover.body>
</stisla::popover>
```

---

## Placements

`placement` picks resting side (`top`, `right`, `bottom`, `left`, `bottom-start`, `bottom-end`).

```blade
<stisla::popover id="pop-place-top" placement="top">...</stisla::popover>
<stisla::popover id="pop-place-right" placement="right">...</stisla::popover>
<stisla::popover id="pop-place-bottom" placement="bottom">...</stisla::popover>
<stisla::popover id="pop-place-left" placement="left">...</stisla::popover>
```

---

## Hover trigger

Set `triggerMode="hover focus"` to open on mouse hover and keyboard focus.

```blade
<stisla::popover id="pop-hover" triggerMode="hover focus" placement="bottom">
    <stisla::popover.title>Read-only</stisla::popover.title>
    <stisla::popover.body as="p">Members with the viewer role...</stisla::popover.body>
</stisla::popover>
```

---

## Rich content

Author the body with HTML inputs, buttons, and custom layout.

```blade
<stisla::popover id="pop-rich" placement="bottom-start" style="min-width: 17rem;">
    <stisla::popover.title>Invite by email</stisla::popover.title>
    <stisla::popover.body>
        <stisla::input type="email" placeholder="name@example.com" />
        <stisla::button size="sm" tone="primary">Send invite</stisla::button>
    </stisla::popover.body>
</stisla::popover>
```

---

## Panel

Structured header, body list, and footer. Add `:menu="true"` for notification list items.

```blade
<stisla::popover id="pop-notify" :menu="true" placement="bottom-end">
    <stisla::popover.header>
        <stisla::popover.title>Notifications</stisla::popover.title>
        <stisla::popover.action>
            <stisla::link href="#">Mark all as read</stisla::link>
        </stisla::popover.action>
    </stisla::popover.header>
    <stisla::popover.body>
        ...
    </stisla::popover.body>
    <stisla::popover.footer>
        <stisla::button mode="outline" tone="neutral" :block="true">View all notifications</stisla::button>
    </stisla::popover.footer>
</stisla::popover>
```

---

## Imperative

Reach a marked popover via script: `Stisla.Popover.getOrCreate(el).open()`.

---

## Events

Four events fire on `.popover`:

- `stisla:popover:opening` (cancelable)
- `stisla:popover:opened`
- `stisla:popover:closing` (cancelable)
- `stisla:popover:closed`

---

## Customization

These variables retune `.popover`.

| Variable | Use |
| :--- | :--- |
| `--popover-z-index` | Overlay stacking order |
| `--popover-min-width` / `-max-width` | Panel width bounds |
| `--popover-bg` / `-color` / `-border-color` | Panel fill, text, rim |
| `--popover-radius` / `-shadow` | Panel corner radius and elevation |
| `--popover-arrow-size` | Caret square size |

---

## Props Reference

### `<stisla::popover>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `id` | `string` | `null` | Unique ID popover |
| `placement` | `string` | `null` | Posisi Floating UI (`'top'`, `'bottom'`, `'right'`, `'left'`, `'bottom-start'`, `'bottom-end'`) |
| `triggerMode` | `string` | `null` | Mode pemicu (`'click'`, `'hover focus'`, `'hover'`, `'focus'`) |
| `menu` | `bool` | `false` | Mode varian daftar menu (`.popover--menu`) |
| `open` | `bool` | `false` | Status awal terbuka |
| `role` | `string` | `'dialog'` | Peran ARIA |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--popover-*`) |

### `<stisla::popover.trigger>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `for` | `string` | `null` | ID popover target yang akan dibuka (`data-stisla-popover-trigger`) |
| `tone` | `string` | `'neutral'` | Intent warna tombol |
| `mode` | `string` | `null` | Gaya tombol (`'outline'`, `'ghost'`, `'soft'`) |
