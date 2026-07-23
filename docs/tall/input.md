# Input Component (TALL Stack)

Komponen Input adalah elemen input teks serbaguna (`text`, `email`, `password`, `number`, `search`, `date`, `color`, `file`, dll.) yang terintegrasi penuh dengan sistem token dan layout Stisla.

## Basic Usage

Penggunaan dasar input teks:

```blade
<stisla::field label="Email" for="basicInput" class="max-w-96">
    <stisla::input type="email" id="basicInput" placeholder="you@example.com" />
</stisla::field>
```

---

## Variations & Features

### 1. Sizes (`size="sm"` / `size="lg"`)
Variasi ukuran tinggi, padding, dan font input (`sm` atau `lg`).

```blade
<stisla::input size="sm" placeholder="Small" />
<stisla::input placeholder="Default" />
<stisla::input size="lg" placeholder="Large" />
```

### 2. Input Types (`type="..."`)
Mendukung seluruh tipe input HTML seperti `email`, `password`, `number`, `search`, `date`, `color`, `file`, dll.

```blade
<stisla::input type="password" placeholder="Password" />
<stisla::input type="number" placeholder="Number" />
<stisla::input type="date" />
<stisla::input type="color" value="#3b82f6" />
<stisla::input type="file" />
```

### 3. Disabled & Readonly (`:disabled`, `:readonly`)
Menonaktifkan interaksi (`:disabled="true"`) atau menandai field hanya-baca (`:readonly="true"`):

```blade
<stisla::input value="Disabled" :disabled="true" />
<stisla::input value="Readonly" :readonly="true" />
```

### 4. Plain Text (`:seamless="true"`)
Menampilkan nilai readonly sebagai teks biasa tanpa border dan background menggunakan `:seamless="true"` (`input--seamless`):

```blade
<stisla::input type="email" value="you@example.com" :readonly="true" :seamless="true" />
```

### 5. Validation States (`:required`, `:invalid`)
Mendukung validasi native browser (`:required="true"`) dan validasi server (`:invalid="true"`):

```blade
<stisla::input type="email" :required="true" placeholder="you@example.com" />
<stisla::input type="email" value="not-an-email" :invalid="true" />
```

---

## Props & Slots Reference

### Props (`<stisla::input>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `type` | `string` | `'text'` | Tipe atribut HTML input (`text`, `email`, `password`, `number`, `search`, `color`, `file`, dll.) |
| `id` | `string` | `null` | Atribut ID elemen input |
| `name` | `string` | `null` | Atribut nama elemen HTML input |
| `value` | `mixed` | `null` | Nilai awal elemen input |
| `placeholder` | `string` | `null` | Teks placeholder input |
| `size` | `string` | `null` | Ukuran varian (`'sm'` atau `'lg'`) |
| `seamless` | `bool` | `false` | Tampilan teks polos tanpa border/background (`input--seamless`) |
| `disabled` | `bool` | `false` | Menonaktifkan elemen input |
| `readonly` | `bool` | `false` | Menandai input hanya-baca |
| `invalid` | `bool` | `false` | Menandai kesalahan validasi (`aria-invalid="true"`) |
| `required` | `bool` | `false` | Atribut required formulir |
| `vars` | `array` | `[]` | Array variabel CSS kustom untuk override gaya visual |

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::input
    placeholder="Custom styled input"
    :vars="[
        'radius' => '0px',
        'height' => '3rem'
    ]"
/>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Input:

| Variable | Use |
| :--- | :--- |
| `--input-radius` | Corner radius elemen input |
| `--input-height` | Tinggi fisik elemen input single-line |
| `--input-padding-inline` | Padding interior horizontal |
| `--input-padding-block` | Padding interior vertikal |
| `--input-font-size` | Ukuran font teks input |
| `--input-bg` | Latar belakang input |
| `--input-color` | Warna teks input |
| `--input-border-width` | Ketebalan garis tepi border |
| `--input-border-color` | Warna garis tepi border |
| `--input-placeholder` | Warna teks placeholder |
