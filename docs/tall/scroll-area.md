# Scroll Area Component (TALL Stack)

Komponen Scroll Area (`<stisla::scroll-area>`) menyediakan kontainer gulir berujung tumpul (rounded clipped box) dengan bilah gulir kustom (overlay scrollbar) yang terintegrasi halus dengan tema aplikasi.

## Basic Usage

Penggunaan dasar komponen Scroll Area:

```blade
<stisla::scroll-area class="border border-border h-48 w-full max-w-md p-4">
    <div class="flex flex-col gap-3">
        <div class="font-semibold">Release notes</div>
        <div class="text-sm text-muted-foreground">3.0.0 — framework-agnostic rewrite lands.</div>
        <div class="text-sm text-muted-foreground">2.4.0 — new illustration system.</div>
    </div>
</stisla::scroll-area>
```

---

## Variations & Features

### 1. Horizontal Scroll Area (`overflow-y="hidden"`)
Membatasi guliran hanya pada sumbu X (horizontal):

```blade
<stisla::scroll-area overflow-y="hidden" class="border border-border w-full max-w-lg">
    <div class="flex gap-3 p-4 min-w-max">
        <stisla::card class="m-0 min-w-56">...</stisla::card>
        <stisla::card class="m-0 min-w-56">...</stisla::card>
    </div>
</stisla::scroll-area>
```

### 2. Both Axes Scroll Area
Area gulir dua sumbu (X dan Y) yang berguna untuk tabel data besar:

```blade
<stisla::scroll-area class="border border-border h-64 w-full max-w-lg">
    <stisla::table class="m-0 min-w-3xl">
        ...
    </stisla::table>
</stisla::scroll-area>
```

### 3. Always Visible Scrollbar (`auto-hide="never"`)
Menjaga agar bilah gulir selalu terlihat tanpa memudar saat tidak ada interaksi kursor:

```blade
<stisla::scroll-area auto-hide="never" class="h-48 w-full">
    ...
</stisla::scroll-area>
```

---

## Props Reference

### `<stisla::scroll-area>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'div'` | Tag HTML elemen utama (`'div'`, `'section'`) |
| `overflowX` | `string` | `null` | Perilaku overflow sumbu X (`'hidden'`, `'visible'`, `'scroll'`, `'auto'`) |
| `overflowY` | `string` | `null` | Perilaku overflow sumbu Y (`'hidden'`, `'visible'`, `'scroll'`, `'auto'`) |
| `autoHide` | `string` | `null` | Perilaku auto-hide bilah gulir (`'never'`, `'scroll'`, `'leave'`, `'move'`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--scroll-area-*`) |

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::scroll-area
    auto-hide="never"
    :vars="[
        'bar-size' => '0.875rem',
        'handle-bg' => 'color-mix(in oklch, var(--color-primary) 35%, transparent)',
        'handle-bg-hover' => 'color-mix(in oklch, var(--color-primary) 55%, transparent)',
        'handle-bg-active' => 'var(--color-primary)',
    ]"
>
    ...
</stisla::scroll-area>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Scroll Area:

| Variable | Use |
| :--- | :--- |
| `--scroll-area-radius` | Radius sudut elemen kontainer |
| `--scroll-area-bar-size` | Ketebalan bilah gulir |
| `--scroll-area-bar-padding` | Jarak inset bilah dari tepi |
| `--scroll-area-bar-radius` | Radius sudut gagang scrollbar |
| `--scroll-area-track-bg` | Warna latar jalur lintasan scrollbar |
| `--scroll-area-handle-bg` / `-hover` / `-active` | Warna gagang scrollbar saat diam, hover, dan aktif |
