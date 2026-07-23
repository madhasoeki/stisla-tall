# Dialog Component (TALL Stack)

A centered modal over a frosted backdrop that dims the page.

## Basic

The `<stisla::dialog>` root holds a `<stisla::dialog.backdrop>` and a `<stisla::dialog.panel>` wrapping `<stisla::dialog.content>`.

```blade
<stisla::dialog.trigger tone="primary" for="dlg-basic">Invite a teammate</stisla::dialog.trigger>

<stisla::dialog id="dlg-basic" aria-labelledby="dlg-basic-label">
    <stisla::dialog.backdrop />
    <stisla::dialog.panel>
        <stisla::dialog.content>
            <stisla::dialog.close />
            <stisla::dialog.header>
                <stisla::dialog.title id="dlg-basic-label">Invite a teammate</stisla::dialog.title>
            </stisla::dialog.header>
            <stisla::dialog.body>
                <p class="mt-0 text-muted-foreground">Send a link by email. The invite expires in seven days.</p>
                <stisla::field label="Email" for="dlg-basic-email">
                    <stisla::input type="email" id="dlg-basic-email" placeholder="name@example.com" autocomplete="email" autofocus />
                </stisla::field>
            </stisla::dialog.body>
            <stisla::dialog.footer>
                <stisla::button mode="ghost" tone="neutral" data-stisla-dialog-dismiss>Cancel</stisla::button>
                <stisla::button tone="primary" data-stisla-dialog-dismiss>Send invite</stisla::button>
            </stisla::dialog.footer>
        </stisla::dialog.content>
    </stisla::dialog.panel>
</stisla::dialog>
```

---

## Keyboard

Focus is trapped inside the dialog while open. `Tab` / `Shift+Tab` cycle focus, and `Escape` dismisses the dialog.

---

## Scrollable body

Add `:scrollable="true"` on the panel so long content scrolls while header and footer stay pinned.

```blade
<stisla::dialog id="dlg-scroll">
    <stisla::dialog.backdrop />
    <stisla::dialog.panel :scrollable="true">
        <stisla::dialog.content>
            <stisla::dialog.close />
            <stisla::dialog.header>
                <stisla::dialog.title>Terms of service</stisla::dialog.title>
            </stisla::dialog.header>
            <stisla::dialog.body>
                ...
            </stisla::dialog.body>
        </stisla::dialog.content>
    </stisla::dialog.panel>
</stisla::dialog>
```

---

## Fullscreen

`size="fullscreen"` drops outer margins and corner radius so the panel takes the whole viewport.

```blade
<stisla::dialog id="dlg-full" size="fullscreen">
    <stisla::dialog.backdrop />
    <stisla::dialog.panel>
        <stisla::dialog.content>
            ...
        </stisla::dialog.content>
    </stisla::dialog.panel>
</stisla::dialog>
```

---

## Sizes

Width modifiers on the root swap the panel size: `sm`, default, `lg`, `xl`, and `almost-fullscreen`.

```blade
<stisla::dialog id="dlg-sm" size="sm">...</stisla::dialog>
<stisla::dialog id="dlg-lg" size="lg">...</stisla::dialog>
<stisla::dialog id="dlg-xl" size="xl">...</stisla::dialog>
<stisla::dialog id="dlg-afs" size="almost-fullscreen">...</stisla::dialog>
```

---

## Positioning

The panel centers by default. Set `position="top"` or `position="bottom"` on the panel to change vertical alignment.

```blade
<stisla::dialog.panel position="top">...</stisla::dialog.panel>
<stisla::dialog.panel position="bottom">...</stisla::dialog.panel>
```

---

## Static backdrop

Set `backdrop="static"` and `:keyboard="false"` for a deliberate dismiss where backdrop clicks shake the panel.

```blade
<stisla::dialog id="dlg-static" backdrop="static" :keyboard="false">
    <stisla::dialog.backdrop />
    <stisla::dialog.panel>
        ...
    </stisla::dialog.panel>
</stisla::dialog>
```

---

## Confirmation

The alert-dialog pattern for destructive actions: `role="alertdialog"`.

```blade
<stisla::dialog id="dlg-confirm" size="sm" role="alertdialog" aria-labelledby="dlg-confirm-label">
    <stisla::dialog.backdrop />
    <stisla::dialog.panel>
        <stisla::dialog.content>
            <stisla::dialog.body class="text-center pt-6">
                <stisla::icon-box tone="danger" shape="circle" icon="trash-2" class="mb-3" />
                <stisla::dialog.title as="h3" id="dlg-confirm-label">Delete this workspace?</stisla::dialog.title>
            </stisla::dialog.body>
        </stisla::dialog.content>
    </stisla::dialog.panel>
</stisla::dialog>
```

---

## Success

End-of-flow state with success icon and block button.

---

## Media hero

Drop header when the leading row is media content.

---

## Lightbox

Override surface variables via `:vars` to frame media.

```blade
<stisla::dialog id="dlg-lightbox" size="xl" :vars="['bg' => 'transparent', 'border-color' => 'transparent', 'shadow' => 'none']">
    <stisla::dialog.backdrop />
    <stisla::dialog.panel>
        <stisla::dialog.content>
            <stisla::dialog.close />
            <img class="block w-full max-h-[calc(100dvh-5rem)] object-contain rounded-md" src="..." alt="" />
        </stisla::dialog.content>
    </stisla::dialog.panel>
</stisla::dialog>
```

---

## Events

Four events fire on `.dialog`:

- `stisla:dialog:opening` (cancelable)
- `stisla:dialog:opened`
- `stisla:dialog:closing` (cancelable)
- `stisla:dialog:closed`

---

## Customization

These variables retune the dialog.

| Variable | Use |
| :--- | :--- |
| `--dialog-z-index` | Stacking order |
| `--dialog-width` | Panel width cap |
| `--dialog-margin-block` / `-margin-inline` | Viewport gap |
| `--dialog-bg` / `-color` / `-border-color` | Content fill, text, rim |
| `--dialog-radius` / `-shadow` | Corner radius and elevation |
| `--dialog-padding-block` / `-padding-inline` | Interior padding |

---

## Props Reference

### `<stisla::dialog>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `id` | `string` | `null` | Unique ID dialog |
| `size` | `string` | `null` | Ukuran modal (`'sm'`, `'lg'`, `'xl'`, `'almost-fullscreen'`, `'fullscreen'`) |
| `backdrop` | `string\|bool` | `null` | Opsi backdrop (`'static'`, `true`, `false`) |
| `keyboard` | `bool` | `null` | Mengizinkan penutupan tombol ESC (`true`, `false`) |
| `role` | `string` | `'dialog'` | Peran ARIA (`'dialog'`, `'alertdialog'`) |
| `open` | `bool` | `false` | Status awal terbuka |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--dialog-*`) |

### `<stisla::dialog.panel>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `scrollable` | `bool` | `false` | Menjadikan isi bodi ber-scroll (`.dialog__panel--scrollable`) |
| `position` | `string` | `null` | Posisi vertikal (`'top'`, `'bottom'`) |

### `<stisla::dialog.trigger>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `for` | `string` | `null` | ID dialog target yang akan dibuka (`data-stisla-dialog-trigger`) |
| `tone` | `string` | `'neutral'` | Intent warna tombol |
| `mode` | `string` | `null` | Gaya tombol (`'outline'`, `'ghost'`, `'soft'`) |
