# Link Component (TALL Stack)

Komponen Link (`<stisla::link>`) menampilkan tautan jangkar inline berlatar warna brand/primary dengan dekorasi garis bawah (underline) dan efek hover tint.

## Basic Usage

Penggunaan dasar komponen Link:

```blade
<p>
    Settings have moved under <stisla::link href="#">Workspace preferences</stisla::link>.
</p>
```

---

## Variations & Features

### 1. Links with Icons
Menambahkan ikon di depan (`icon`) atau di belakang (`iconTrailing`):

```blade
<stisla::link href="#" iconTrailing="arrow-up-right">
    Documentation
</stisla::link>

<stisla::link href="#" icon="external-link">
    Open in new tab
</stisla::link>
```

### 2. Intent Tones (`tone="..."`)
Mengubah warna tautan sesuai maksud/tujuan visual (`success`, `danger`, `warning`, `info`, `primary`, `neutral`):

```blade
<p>
    Pair tone with intent:
    <stisla::link href="#" tone="success">Backup succeeded</stisla::link>,
    <stisla::link href="#" tone="danger">three checks failed</stisla::link>,
    <stisla::link href="#" tone="warning">two queued</stisla::link>.
</p>
```

---

## Props Reference

### `<stisla::link>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'a'` | Tag HTML elemen utama (`'a'`, `'button'`, `'span'`) |
| `href` | `string` | `'#'` | URL tujuan tautan jangkar |
| `tone` | `string` | `null` | Warna nada intent (`'success'`, `'danger'`, `'warning'`, `'info'`, `'primary'`) |
| `icon` | `string` | `null` | Nama ikon Lucide di awal teks label |
| `iconTrailing` | `string` | `null` | Nama ikon Lucide di akhir teks label |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--link-*`) |

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::link href="#" :vars="['color' => 'var(--color-info)', 'decoration-thickness' => '2px', 'decoration-offset' => '4px']">
    Custom Link
</stisla::link>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Link:

| Variable | Use |
| :--- | :--- |
| `--link-color` | Warna teks utama dan basis perhitungan hover tint |
| `--link-gap` | Jarak spasi antara teks label dan ikon |
| `--link-decoration-offset` | Jarak antara garis dasar teks dan underline |
| `--link-decoration-thickness` | Ketebalan garis underline |
| `--link-color-hover` | Warna khusus saat kursor berada di atas tautan (hover) |
