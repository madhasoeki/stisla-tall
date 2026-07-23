# Breadcrumb Component (TALL Stack)

Komponen Breadcrumb menyediakan jejak navigasi tautan (*breadcrumb navigation trail*) untuk menunjukkan posisi halaman pengguna dalam hierarki aplikasi.

## Basic Usage

Penggunaan dasar komponen breadcrumb:

```blade
<stisla::breadcrumb>
    <stisla::breadcrumb.item href="#">Home</stisla::breadcrumb.item>
    <stisla::breadcrumb.item :current="true">Library</stisla::breadcrumb.item>
</stisla::breadcrumb>
```

---

## Variations & Features

### 1. Multiple Levels
Mendukung jejak navigasi berjenjang dengan pembatas chevron bawaan:

```blade
<stisla::breadcrumb>
    <stisla::breadcrumb.item href="#">Home</stisla::breadcrumb.item>
    <stisla::breadcrumb.item href="#">Library</stisla::breadcrumb.item>
    <stisla::breadcrumb.item :current="true">Data</stisla::breadcrumb.item>
</stisla::breadcrumb>
```

### 2. With Icon (`icon="..."`)
Ikon Lucide terdepan pada item breadcrumb:

```blade
<stisla::breadcrumb>
    <stisla::breadcrumb.item href="#" icon="house">Home</stisla::breadcrumb.item>
    <stisla::breadcrumb.item href="#">Library</stisla::breadcrumb.item>
    <stisla::breadcrumb.item :current="true">Data</stisla::breadcrumb.item>
</stisla::breadcrumb>
```

### 3. Custom String & SVG Dividers (`divider="..."`)
Kustomisasi karakter pembatas menggunakan teks string biasa (misal `/`) atau URL SVG:

```blade
{{-- Pembatas string biasa --}}
<stisla::breadcrumb divider="/">
    <stisla::breadcrumb.item href="#">Home</stisla::breadcrumb.item>
    <stisla::breadcrumb.item :current="true">Library</stisla::breadcrumb.item>
</stisla::breadcrumb>

{{-- Pembatas SVG data-URL --}}
<stisla::breadcrumb divider="url('data:image/svg+xml,...')">
    ...
</stisla::breadcrumb>
```

### 4. Chip Wrap (`:vars="..."`)
Membungkus jejak breadcrumb dalam chip berlatar belakang dengan sudut membulat:

```blade
<stisla::breadcrumb :vars="[
    'bg' => 'var(--color-surface-2)',
    'radius' => 'var(--radius-full)',
    'padding-inline' => '1rem',
    'padding-block' => '0.5rem'
]">
    <stisla::breadcrumb.item href="#" icon="house">Home</stisla::breadcrumb.item>
    <stisla::breadcrumb.item :current="true">Settings</stisla::breadcrumb.item>
</stisla::breadcrumb>
```

---

## Props Reference

### `<stisla::breadcrumb>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `label` | `string` | `'breadcrumb'` | Atribut aksesibilitas `aria-label` navigasi |
| `divider` | `string` | `null` | Karakter pembatas kustom (`--breadcrumb-divider`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom untuk override gaya visual |

### `<stisla::breadcrumb.item>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `href` | `string` | `null` | URL tautan item breadcrumb |
| `active` / `current` | `bool` | `false` | Menandai halaman aktif saat ini (`aria-current="page"`) |
| `icon` | `string` | `null` | Nama ikon Lucide terdepan |

---

## Customization

Penimpaan visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

Variabel CSS yang tersedia untuk kustomisasi komponen Breadcrumb:

| Variable | Use |
| :--- | :--- |
| `--breadcrumb-padding-block` | Padding vertikal jejak breadcrumb |
| `--breadcrumb-padding-inline` | Padding horizontal jejak breadcrumb |
| `--breadcrumb-gap` | Jarak antar item breadcrumb dan pembatas |
| `--breadcrumb-font-size` | Ukuran font teks item |
| `--breadcrumb-bg` | Latar belakang isian |
| `--breadcrumb-radius` | Corner radius luar pembungkus |
| `--breadcrumb-color` | Warna teks jejak navigasi |
| `--breadcrumb-color-hover` | Warna teks tautan saat hover |
| `--breadcrumb-color-active` | Warna teks halaman aktif (`aria-current="page"`) |
| `--breadcrumb-divider` | Karakter/gambar pembatas antar item |
| `--breadcrumb-icon-size` | Ukuran ikon Lucide terdepan |
