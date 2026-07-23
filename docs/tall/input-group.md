# Input Group Component (TALL Stack)

Komponen Input Group menyatukan elemen input, select, textarea, atau tombol bersama elemen teks/ikon tambahan (*addons*) dalam satu permukaan (*continuous surface*) yang rapat dengan efek fokus tunggal.

## Basic Usage

Penggunaan dasar input group dengan teks addon di awal (*leading*) atau di akhir (*trailing*):

```blade
<stisla::input-group class="max-w-sm">
    <stisla::input-group.text>https://</stisla::input-group.text>
    <stisla::input placeholder="example.com" />
</stisla::input-group>

<stisla::input-group class="max-w-sm">
    <stisla::input placeholder="yourname" />
    <stisla::input-group.text>@company.com</stisla::input-group.text>
</stisla::input-group>
```

---

## Variations & Features

### 1. Icon Addons (`icon="..."`)
Menampilkan ikon Lucide di dalam elemen addon menggunakan prop `icon`:

```blade
<stisla::input-group class="max-w-sm">
    <stisla::input-group.text icon="search" />
    <stisla::input type="search" placeholder="Search" />
</stisla::input-group>
```

### 2. Sizes (`size="sm"` / `size="lg"`)
Variasi skala ukuran wrapper input group (`sm` atau `lg`). Pastikan untuk menyesuaikan ukuran elemen kontrol di dalamnya (misal `<stisla::input size="sm">`):

```blade
<stisla::input-group size="sm">
    <stisla::input-group.text icon="at-sign" />
    <stisla::input size="sm" placeholder="Small" />
</stisla::input-group>

<stisla::input-group size="lg">
    <stisla::input-group.text icon="at-sign" />
    <stisla::input size="lg" placeholder="Large" />
</stisla::input-group>
```

### 3. With Buttons
Elemen tombol dapat disisipkan di dalam wrapper input group untuk membentuk chip aksi mengambang (*floating action chip*):

```blade
<stisla::input-group class="max-w-sm">
    <stisla::input type="search" placeholder="Search..." />
    <button type="button" class="button button--primary">Go</button>
</stisla::input-group>
```

### 4. Labelled Select
Mengombinasikan addon teks/ikon dengan elemen `<select>` sebagai pemilih berlabel:

```blade
<stisla::input-group class="max-w-sm">
    <stisla::input-group.text icon="globe" />
    <select class="select" aria-label="Language">
        <option selected>English</option>
        <option>Bahasa Indonesia</option>
    </select>
</stisla::input-group>
```

### 5. Multiple Addons
Menumpuk lebih dari satu addon pada sisi yang sama:

```blade
<stisla::input-group class="max-w-sm">
    <stisla::input-group.text>$</stisla::input-group.text>
    <stisla::input-group.text>0.00</stisla::input-group.text>
    <stisla::input />
</stisla::input-group>
```

### 6. Validation & Disabled States
Ketika kontrol di dalam input group tidak valid (`:invalid="true"`) atau tidak aktif (`:disabled="true"`), border dan transparansi seluruh wrapper input group akan otomatis menyesuaikan secara visual:

```blade
{{-- Invalid State --}}
<stisla::input-group class="max-w-sm">
    <stisla::input-group.text icon="at-sign" />
    <stisla::input type="email" value="not-an-email" :invalid="true" />
</stisla::input-group>

{{-- Disabled State --}}
<stisla::input-group class="max-w-sm">
    <stisla::input-group.text>https://</stisla::input-group.text>
    <stisla::input value="example.com" :disabled="true" />
</stisla::input-group>
```

---

## Props & Sub-Components Reference

### Main Component (`<stisla::input-group>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `size` | `string` | `null` | Ukuran varian skala (`'sm'` atau `'lg'`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom untuk override gaya visual |

### Sub-Component (`<stisla::input-group.text>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `tag` | `string` | `'span'` | Tag HTML elemen addon (`'span'` atau `'label'`) |
| `for` | `string` | `null` | Atribut ID target jika elemen berupa `<label>` |
| `icon` | `string` | `null` | Nama ikon Lucide (misal `'search'`, `'at-sign'`, `'globe'`) |

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::input-group
    class="max-w-sm"
    :vars="[
        'radius' => '0px',
        'addon-color' => 'oklch(0.5 0.2 280)'
    ]"
>
    <stisla::input-group.text icon="search" />
    <stisla::input placeholder="Sharp corners & colored icon" />
</stisla::input-group>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Input Group:

| Variable | Use |
| :--- | :--- |
| `--input-group-radius` | Corner radius pembungkus input group |
| `--input-group-height` | Tinggi fisik pembungkus |
| `--input-group-bg` | Latar belakang permukaan pembungkus |
| `--input-group-border-width` | Ketebalan border pembungkus |
| `--input-group-border-color` | Warna border pembungkus |
| `--input-group-padding-inline` | Padding horizontal elemen addon |
| `--input-group-inset` | Margin inset di sekitar anak elemen button |
| `--input-group-addon-color` | Warna teks dan ikon addon |
