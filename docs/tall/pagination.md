# Pagination Component (TALL Stack)

Komponen Pagination (`<stisla::pagination>`) menyediakan deretan chip navigasi halaman untuk berpindah di antara tampilan terhalaman (paginated data).

## Basic Usage

Penggunaan dasar komponen Pagination:

```blade
<stisla::pagination>
    <stisla::pagination.item href="#">Previous</stisla::pagination.item>
    <stisla::pagination.item href="#">1</stisla::pagination.item>
    <stisla::pagination.item href="#" :active="true">2</stisla::pagination.item>
    <stisla::pagination.item href="#">3</stisla::pagination.item>
    <stisla::pagination.item href="#">Next</stisla::pagination.item>
</stisla::pagination>
```

---

## Variations & Features

### 1. With Icons & Directional Helpers (`<stisla::pagination.prev>`, `<stisla::pagination.next>`)
Sub-komponen pembantu tombol navigasi sebelumnya dan selanjutnya dengan ikon chevron bawaan:

```blade
<stisla::pagination>
    <stisla::pagination.prev href="#" />
    <stisla::pagination.item href="#">1</stisla::pagination.item>
    <stisla::pagination.item href="#" :active="true">2</stisla::pagination.item>
    <stisla::pagination.next href="#" />
</stisla::pagination>
```

### 2. Disabled State & Truncation Ellipsis (`<stisla::pagination.ellipsis>`)
Menonaktifkan tombol di tepi batas (`:disabled="true"`) dan menyisipkan penanda pemotong rentang halaman (`<stisla::pagination.ellipsis />`):

```blade
<stisla::pagination>
    <stisla::pagination.prev href="#" :disabled="true" />
    <stisla::pagination.item href="#" :active="true">1</stisla::pagination.item>
    <stisla::pagination.ellipsis />
    <stisla::pagination.item href="#">12</stisla::pagination.item>
    <stisla::pagination.next href="#" />
</stisla::pagination>
```

### 3. Sizes (`size="..."`)
Ukuran chip rapat (`size="sm"`), default, atau besar (`size="lg"`):

```blade
<stisla::pagination size="sm">...</stisla::pagination>
<stisla::pagination size="lg">...</stisla::pagination>
```

### 4. Alignment (`align="..."`)
Meratakan deretan navigasi ke tengah (`align="center"`) atau ke kanan (`align="end"`):

```blade
<stisla::pagination align="center">...</stisla::pagination>
<stisla::pagination align="end">...</stisla::pagination>
```

---

## Props Reference

### `<stisla::pagination>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `size` | `string` | `null` | Ukuran chip (`'sm'`, `'lg'`) |
| `align` | `string` | `null` | Perataan baris (`'center'`, `'end'`) |
| `ariaLabel` | `string` | `'Page navigation'` | Label accessibility untuk `<nav>` |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--pagination-*`) |

### Sub-Components Overview
- `<stisla::pagination.item>`: Chip item halaman (`href`, `active`, `disabled`, `icon`, `iconPosition`).
- `<stisla::pagination.ellipsis>`: Penanda pemotong rentang (`…`).
- `<stisla::pagination.prev>`: Tombol Halaman Sebelumnya (`href`, `disabled`, `label`).
- `<stisla::pagination.next>`: Tombol Halaman Selanjutnya (`href`, `disabled`, `label`).

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::pagination :vars="['button-radius' => '9999px']">
    ...
</stisla::pagination>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Pagination:

| Variable | Use |
| :--- | :--- |
| `--pagination-gap` | Jarak spasi antar chip |
| `--pagination-font-size` | Ukuran teks chip |
| `--pagination-button-height` | Tinggi chip tombol |
| `--pagination-button-radius` | Radius sudut chip |
| `--pagination-button-bg` / `-color` | Warna latar dasar & teks |
| `--pagination-button-bg-hover` | Warna latar saat hover |
| `--pagination-button-bg-active` | Warna latar halaman aktif |
