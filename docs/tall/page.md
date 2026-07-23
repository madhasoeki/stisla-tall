# Page Component (TALL Stack)

Komponen Page (`<stisla::page>`) mengatur ritme vertikal visual dan tata letak hierarki judul, sub-judul, serta seksi konten utama aplikasi.

## Basic Usage

Penggunaan dasar komponen Page dengan header, headline, dan seksi konten:

```blade
<stisla::page class="w-full">
    <stisla::page.header title="Reports" description="Everything your team shipped this week.">
        <stisla::page.action>
            <stisla::button mode="outline" tone="neutral">Export</stisla::button>
            <stisla::button tone="primary">New report</stisla::button>
        </stisla::page.action>
    </stisla::page.header>

    <stisla::page.section>
        <stisla::page.section-header title="Overview">
            <stisla::page.action>
                <stisla::button mode="ghost" tone="neutral" size="sm">Filter</stisla::button>
            </stisla::page.action>
        </stisla::page.section-header>
        <stisla::card>
            <stisla::card.body>Section content sits here.</stisla::card.body>
        </stisla::card>
    </stisla::page.section>
</stisla::page>
```

---

## Variations & Features

### 1. Page Body Flow Wrapper (`<stisla::page.body>`)
Membungkus seksi-seksi halaman untuk menjaga ritme spasi vertikal antar seksi saat menggunakan kontainer terpisah:

```blade
<stisla::page>
    <stisla::page.header title="Orders" description="42 orders received." />
    <stisla::page.body>
        <stisla::page.section>
            <stisla::card>...</stisla::card>
        </stisla::page.section>
    </stisla::page.body>
</stisla::page>
```

### 2. Standalone Header without Actions
Header halaman tanpa tombol aksi:

```blade
<stisla::page.header title="Settings" description="Manage your account preferences." />
```

### 3. Section with Header & Action Buttons
Seksi dengan judul dan tombol aksi khusus:

```blade
<stisla::page.section>
    <stisla::page.section-header title="Active Customers" description="1,284 accounts.">
        <stisla::page.action>
            <stisla::button mode="outline" tone="neutral" size="sm">Filter</stisla::button>
        </stisla::page.action>
    </stisla::page.section-header>
    ...
</stisla::page.section>
```

---

## Props Reference

### `<stisla::page>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'div'` | Tag HTML elemen utama (`'div'`, `'main'`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--page-*`) |

### Sub-Components Overview
- `<stisla::page.header>`: Bilah header judul utama (`title`, `description`).
- `<stisla::page.headline>`: Pembungkus judul & deskripsi (`<div class="page__headline">`).
- `<stisla::page.title>`: Tag judul utama (`<h1>`).
- `<stisla::page.description>`: Teks penjelas deskripsi utama.
- `<stisla::page.action>`: Slot tombol aksi kanan atas (`<div class="page__action">`).
- `<stisla::page.body>`: Pembungkus alur seksi (`<div class="page__body">`).
- `<stisla::page.section>`: Blok seksi halaman (`title`, `description`).
- `<stisla::page.section-header>`: Header seksi (`title`, `description`).
- `<stisla::page.section-title>`: Judul seksi (`<h2>`).
- `<stisla::page.section-description>`: Deskripsi seksi.

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::page :vars="['section-gap' => '3rem', 'title-font-size' => '2.25rem']">
    ...
</stisla::page>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Page:

| Variable | Use |
| :--- | :--- |
| `--page-section-gap` | Jarak spasi vertikal antar seksi halaman |
| `--page-header-gap` | Jarak spasi antara judul dan tombol aksi |
| `--page-heading-gap` | Jarak spasi antara judul dan deskripsinya |
| `--page-action-gap` | Jarak spasi antar tombol aksi |
| `--page-section-inner-gap` | Jarak spasi dalam seksi antara header dan kontennya |
| `--page-title-font-size` / `-title-font-weight` | Ukuran & bobot font judul utama |
| `--page-description-color` | Warna teks deskripsi utama |
| `--page-section-title-font-size` | Ukuran font judul seksi |
