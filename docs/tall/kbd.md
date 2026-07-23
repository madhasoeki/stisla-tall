# Kbd Component (TALL Stack)

Komponen Kbd (`<stisla::kbd>`) menampilkan label tombol keyboard atau pintasan shortcut dengan gaya key-cap berlatar netral dan border tipis.

## Basic Usage

Penggunaan dasar komponen Kbd:

```blade
<stisla::kbd>?</stisla::kbd>
<stisla::kbd>Esc</stisla::kbd>
```

---

## Variations & Features

### 1. Nested Shortcut Combinations
Menyarangkan beberapa elemen `<stisla::kbd>` untuk membuat urutan tombol pintasan:

```blade
<stisla::kbd>
    <stisla::kbd>⌘</stisla::kbd>
    <stisla::kbd>K</stisla::kbd>
</stisla::kbd>

<stisla::kbd>
    <stisla::kbd>Ctrl</stisla::kbd>
    <stisla::kbd>Shift</stisla::kbd>
    <stisla::kbd>P</stisla::kbd>
</stisla::kbd>
```

### 2. Separators for Screen Readers
Menambahkan karakter pemisah `+` di antara tombol:

```blade
<stisla::kbd>
    <stisla::kbd>Ctrl</stisla::kbd> + <stisla::kbd>C</stisla::kbd>
</stisla::kbd>
```

### 3. Inside Buttons
Memasangkan komponen Kbd di dalam tombol sebagai petunjuk pintasan aksi:

```blade
<stisla::button tone="neutral">
    Search <stisla::kbd>/</stisla::kbd>
</stisla::button>

<stisla::button mode="outline" tone="neutral">
    Command palette <stisla::kbd><stisla::kbd>⌘</stisla::kbd><stisla::kbd>K</stisla::kbd></stisla::kbd>
</stisla::button>
```

---

## Props Reference

### `<stisla::kbd>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'kbd'` | Tag HTML elemen utama (`'kbd'`, `'span'`, dll.) |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--kbd-*`) |

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::kbd :vars="['font-size' => '0.9rem', 'bg' => 'var(--color-primary-subtle)', 'color' => 'var(--color-primary)']">
    Custom Key
</stisla::kbd>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Kbd:

| Variable | Use |
| :--- | :--- |
| `--kbd-padding-block` | Padding vertikal atas & bawah |
| `--kbd-padding-inline` | Padding horizontal kiri & kanan |
| `--kbd-gap` | Jarak spasi antar tombol saat disarangkan |
| `--kbd-font-size` | Ukuran teks tombol |
| `--kbd-font-weight` | Ketebalan teks tombol |
| `--kbd-color` | Warna teks tombol |
| `--kbd-bg` | Latar belakang tombol |
| `--kbd-radius` | Radius sudut tombol |
| `--kbd-rim` | Warna border dan bayangan bawah |
