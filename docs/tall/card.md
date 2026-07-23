# Card Component (TALL Stack)

Komponen Card menyediakan kontainer konten modular dengan area body, header opsional, footer, gambar, dan overlay.

## Basic Usage

Penggunaan dasar komponen card:

```blade
<stisla::card class="w-full max-w-sm">
    <stisla::card.body>
        <stisla::card.title>Sign in</stisla::card.title>
        <stisla::card.text>Welcome back. Enter your details to continue.</stisla::card.text>

        <form class="flex flex-col gap-4 w-full mt-4">
            <stisla::field label="Email" for="cardLoginEmail">
                <stisla::input type="email" id="cardLoginEmail" placeholder="you@example.com" />
            </stisla::field>
            <stisla::button type="submit" tone="primary">Sign in</stisla::button>
        </form>
    </stisla::card.body>
</stisla::card>
```

---

## Variations & Features

### 1. Title, Subtitle, Text, Links
Ukuran font judul telah distandarkan, subtitle memiliki tampilan warna muted bawaan:

```blade
<stisla::card class="w-72">
    <stisla::card.body>
        <stisla::card.title>Card title</stisla::card.title>
        <stisla::card.subtitle>Card subtitle</stisla::card.subtitle>
        <stisla::card.text>Quick example text for card body.</stisla::card.text>
        <stisla::card.link href="#">Card link</stisla::card.link>
    </stisla::card.body>
</stisla::card>
```

### 2. Images & Overlay (`<stisla::card.image>`, `<stisla::card.overlay>`)
Gambar atas yang otomatis menyesuaikan sudut atas (*position-aware*), serta kontainer teks overlay di atas gambar:

```blade
{{-- Image Top --}}
<stisla::card class="w-72">
    <stisla::card.image src="path/to/image.jpg" alt="Description" />
    <stisla::card.body>
        <stisla::card.title>Image top</stisla::card.title>
    </stisla::card.body>
</stisla::card>

{{-- Image Overlay --}}
<stisla::card class="w-72 relative">
    <stisla::card.image src="path/to/image.jpg" alt="Description" />
    <stisla::card.overlay>
        <stisla::card.title class="text-white">Image overlay</stisla::card.title>
    </stisla::card.overlay>
</stisla::card>
```

### 3. Header, Body, Footer & Action Slot
Struktur card lengkap dengan area header, footer, dan slot tombol aksi kanan (`<stisla::card.action>`):

```blade
<stisla::card class="w-88">
    <stisla::card.header>
        Featured
        <stisla::card.action>
            <stisla::button tone="neutral" size="sm">Action</stisla::button>
        </stisla::card.action>
    </stisla::card.header>
    <stisla::card.body>
        <stisla::card.title>Special title</stisla::card.title>
        <stisla::card.text>Supporting text content.</stisla::card.text>
    </stisla::card.body>
    <stisla::card.footer>
        <stisla::card.subtitle>2 days ago</stisla::card.subtitle>
    </stisla::card.footer>
</stisla::card>
```

### 4. Heading Row inside Body (`<stisla::card.heading>`)
Sub-header bagian di dalam body card dengan judul dan slot tombol/tautan aksi di sisi kanan:

```blade
<stisla::card class="w-full max-w-sm">
    <stisla::card.body>
        <stisla::card.heading>
            <stisla::card.title as="span">Recent activity</stisla::card.title>
            <stisla::card.action>
                <stisla::card.link href="#">See all</stisla::card.link>
            </stisla::card.action>
        </stisla::card.heading>
        <stisla::card.text>Three new comments.</stisla::card.text>
    </stisla::card.body>
</stisla::card>
```

### 5. Alternate & Small Headers (`:alt="true"`, `:sm="true"`)
Header berlatar belakang alternatif (`surface-2`) dan variasi tinggi header yang lebih rapat:

```blade
{{-- Alternate header --}}
<stisla::card.header :alt="true">Alt Header</stisla::card.header>

{{-- Small header --}}
<stisla::card.header :sm="true">Small Header</stisla::card.header>
```

---

## Props Reference

### `<stisla::card>`
- `vars` (`array`): Array variabel CSS kustom (`--card-*`).

### `<stisla::card.header>`
- `alt` (`bool`): Mengaktifkan warna latar permukaan alternatif (`.card__header--alt`).
- `sm` / `size="sm"` (`bool`/`string`): Memperrapat tinggi baris header (`.card__header--sm`).

### `<stisla::card.title>`, `<stisla::card.subtitle>`, `<stisla::card.text>`
- `as` (`string`): Tag HTML yang digunakan (default: `h5` untuk title, `h6` untuk subtitle, `p` untuk text).

### `<stisla::card.link>`
- `href` (`string`): Target URL tautan.

### `<stisla::card.image>`
- `src` (`string`): URL sumber gambar.
- `alt` (`string`): Teks alternatif deskripsi gambar.

### Sub-Components Overview
- `<stisla::card.body>`: Kontainer isi utama.
- `<stisla::card.footer>`: Kontainer bagian bawah.
- `<stisla::card.overlay>`: Kontainer teks di atas gambar.
- `<stisla::card.heading>`: Baris sub-header di dalam body.
- `<stisla::card.action>`: Slot elemen aksi kanan (pada header atau heading row).

---

## Customization

Penimpaan visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::card :vars="['radius' => '0px', 'bg' => 'var(--color-surface-2)']">
    ...
</stisla::card>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Card:

| Variable | Use |
| :--- | :--- |
| `--card-radius` | Corner radius card |
| `--card-padding-inline` | Padding kiri dan kanan (shared oleh header, body, dan footer) |
| `--card-padding-block` | Padding atas dan bawah pada body |
| `--card-bg` | Warna latar belakang card |
| `--card-color` | Warna teks card |
| `--card-border-width` | Ketebalan border (set `0` untuk menghilangkan border) |
| `--card-border-color` | Warna border |
| `--card-shadow` | Drop shadow (set `none` untuk tampilan rata tanpa bayangan) |
| `--card-header-height` | Tinggi minimum baris header |
