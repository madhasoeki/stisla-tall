# Empty State Component (TALL Stack)

Komponen Empty State menyediakan blok tampilan tengah (*centered block*) yang ditampilkan saat tidak ada konten atau data yang tersedia.

## Basic Usage

Penggunaan dasar komponen empty state (menggunakan sintaks shorthand atau sub-komponen):

```blade
{{-- Sintaks Shorthand --}}
<stisla::empty-state
    icon="inbox"
    title="No messages"
    text="Your inbox is empty. New messages will show up here."
>
    <stisla::empty-state.action>
        <stisla::button tone="primary">Compose</stisla::button>
    </stisla::empty-state.action>
</stisla::empty-state>

{{-- Sintaks Sub-Komponen --}}
<stisla::empty-state>
    <stisla::empty-state.media icon="inbox" />
    <stisla::empty-state.title>No messages</stisla::empty-state.title>
    <stisla::empty-state.text>Your inbox is empty. New messages will show up here.</stisla::empty-state.text>
    <stisla::empty-state.action>
        <stisla::button tone="primary">Compose</stisla::button>
    </stisla::empty-state.action>
</stisla::empty-state>
```

---

## Variations & Features

### 1. With Multiple Actions
Menyajikan tombol aksi utama (*primary*) dan sekunder (*outline*) di dalam slot `<stisla::empty-state.action>`:

```blade
<stisla::empty-state>
    <stisla::empty-state.media icon="folder-plus" />
    <stisla::empty-state.title>No projects yet</stisla::empty-state.title>
    <stisla::empty-state.text>Create your first project to start organizing your work.</stisla::empty-state.text>
    <stisla::empty-state.action>
        <stisla::button tone="primary" icon="plus">New project</stisla::button>
        <stisla::button mode="outline" tone="neutral">Import</stisla::button>
    </stisla::empty-state.action>
</stisla::empty-state>
```

### 2. Tone Modifiers (`tone="danger"` / `tone="success"`)
Warna lingkaran media akan mewarnai ulang status pesan error (`danger`) atau selesai (`success`):

```blade
{{-- Error state --}}
<stisla::empty-state tone="danger">
    <stisla::empty-state.media icon="circle-alert" />
    <stisla::empty-state.title>Something went wrong</stisla::empty-state.title>
    <stisla::empty-state.text>We couldn't load your reports.</stisla::empty-state.text>
</stisla::empty-state>

{{-- Done state --}}
<stisla::empty-state tone="success">
    <stisla::empty-state.media icon="circle-check" />
    <stisla::empty-state.title>All caught up</stisla::empty-state.title>
    <stisla::empty-state.text>You've cleared every task on your list.</stisla::empty-state.text>
</stisla::empty-state>
```

### 3. Small Variant inside Card (`:sm="true"`)
Ukuran lebih rapat untuk wilayah kosong di dalam card atau tabel:

```blade
<stisla::card>
    <stisla::card.body>
        <stisla::empty-state :sm="true">
            <stisla::empty-state.media icon="search-x" />
            <stisla::empty-state.title>No results</stisla::empty-state.title>
            <stisla::empty-state.text>No items match your filters.</stisla::empty-state.text>
        </stisla::empty-state>
    </stisla::card.body>
</stisla::card>
```

### 4. Richer Media Slot
Slot media dapat menampung elemen kustom seperti spinner loading:

```blade
<stisla::empty-state :sm="true">
    <stisla::empty-state.media>
        <span class="spinner" aria-hidden="true"></span>
    </stisla::empty-state.media>
    <stisla::empty-state.title>Loading</stisla::empty-state.title>
    <stisla::empty-state.text>Fetching your latest data.</stisla::empty-state.text>
</stisla::empty-state>
```

---

## Props Reference

### `<stisla::empty-state>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `tone` / `variant` | `string` | `null` | Warna nada media (`'danger'`, `'success'`) |
| `sm` / `size="sm"` | `bool`/`string` | `false` | Ukuran kecil rapat untuk card/tabel (`.empty-state--sm`) |
| `icon` | `string` | `null` | Shortcut nama ikon Lucide media |
| `title` | `string` | `null` | Shortcut judul pesan |
| `text` / `description` | `string` | `null` | Shortcut teks panduan pendukung |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--empty-state-*`) |

### Sub-Components Overview
- `<stisla::empty-state.media>`: Slot ikon/gambar (`icon` prop atau slot).
- `<stisla::empty-state.title>`: Judul pesan (`as` prop, default `h3`).
- `<stisla::empty-state.text>`: Paragraf deskripsi (`as` prop, default `p`).
- `<stisla::empty-state.action>`: Slot kontainer tombol aksi.

---

## Customization

Penimpaan visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::empty-state :vars="['media-size' => '4rem', 'max-width' => '30rem']">
    ...
</stisla::empty-state>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Empty State:

| Variable | Use |
| :--- | :--- |
| `--empty-state-max-width` | Lebar maksimum bidang tengah block |
| `--empty-state-padding-block` | Padding vertikal (atas & bawah) |
| `--empty-state-padding-inline` | Padding horizontal (kiri & kanan) |
| `--empty-state-media-size` | Diameter lingkaran media icon |
| `--empty-state-icon-size` | Ukuran ikon glyph di dalam media |
| `--empty-state-art-size` | Batas lebar maksimum untuk gambar/ilustrasi |
| `--empty-state-media-gap` | Jarak spasi di bawah media |
| `--empty-state-gap` | Jarak spasi antara title dan text |
| `--empty-state-action-gap` | Jarak spasi di atas baris action |
