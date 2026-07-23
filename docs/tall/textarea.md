# Textarea Component (TALL Stack)

Komponen Textarea menyediakan elemen bidang teks multi-baris (*multi-line text field*) yang dapat bertambah tinggi sesuai konten, terintegrasi dengan layout Stisla.

## Basic Usage

Penggunaan dasar komponen textarea dengan label:

```blade
<stisla::field label="Notes" for="basicTextarea" class="max-w-96">
    <stisla::textarea id="basicTextarea" name="notes" rows="3" placeholder="Anything else we should know?" />
</stisla::field>
```

---

## Variations & Features

### 1. Sizes (`size="sm"` / `size="lg"`)
Variasi ukuran tinggi min-height, padding, dan font textarea (`sm` atau `lg`).

```blade
<stisla::textarea size="sm" rows="2" placeholder="Small" />
<stisla::textarea rows="2" placeholder="Default" />
<stisla::textarea size="lg" rows="2" placeholder="Large" />
```

### 2. Helper Text
Penggunaan textarea bersama teks deskripsi bantuan:

```blade
<stisla::field label="Bio" for="bioTextarea" description="A sentence or two. Visible on your public profile.">
    <stisla::textarea id="bioTextarea" rows="3" />
</stisla::field>
```

### 3. Disabled & Readonly States (`:disabled`, `:readonly`)
Menonaktifkan interaksi (`:disabled="true"`) atau menandai bidang hanya-baca (`:readonly="true"`):

```blade
<stisla::textarea rows="2" value="Disabled content" :disabled="true" />
<stisla::textarea rows="2" value="Readonly content" :readonly="true" />
```

### 4. Validation States (`:required`, `minlength`, `:invalid`)
Mendukung validasi native browser (`:required="true"`, `minlength="10"`) dan penandaan kesalahan server (`:invalid="true"`):

```blade
<stisla::textarea rows="3" :required="true" minlength="10" placeholder="At least 10 characters" />
<stisla::textarea rows="3" value="Way too short." :invalid="true" />
```

---

## Props Reference (`<stisla::textarea>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `id` | `string` | `null` | Atribut ID elemen textarea |
| `name` | `string` | `null` | Atribut nama elemen HTML textarea |
| `value` | `string` | `null` | Isi konten awal bidang textarea |
| `rows` | `mixed` | `null` | Jumlah baris teks yang terlihat |
| `placeholder` | `string` | `null` | Teks placeholder |
| `size` | `string` | `null` | Ukuran varian tinggi textarea (`'sm'`, `'lg'`) |
| `disabled` | `bool` | `false` | Menonaktifkan elemen textarea |
| `readonly` | `bool` | `false` | Menandai bidang textarea hanya-baca |
| `invalid` | `bool` | `false` | Menandai kesalahan validasi (`aria-invalid="true"`) |
| `required` | `bool` | `false` | Atribut required formulir |
| `minlength` | `mixed` | `null` | Batas minimum jumlah karakter |
| `maxlength` | `mixed` | `null` | Batas maksimum jumlah karakter |
| `vars` | `array` | `[]` | Array variabel CSS kustom untuk override gaya visual |

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::textarea
    rows="3"
    placeholder="Custom styled textarea"
    :vars="[
        'radius' => '0px',
        'height' => '8rem'
    ]"
/>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Textarea:

| Variable | Use |
| :--- | :--- |
| `--textarea-radius` | Corner radius bidang textarea |
| `--textarea-height` | Min-height floor; bidang tumbuh seiring isi teks |
| `--textarea-padding-inline` | Padding interior horizontal |
| `--textarea-padding-block` | Padding interior vertikal di sekitar teks |
| `--textarea-font-size` | Ukuran font teks |
| `--textarea-line-height` | Line height teks |
| `--textarea-bg` | Warna latar belakang |
| `--textarea-color` | Warna teks |
| `--textarea-border-width` | Ketebalan garis tepi border |
| `--textarea-border-color` | Warna garis tepi border |
| `--textarea-placeholder` | Warna teks placeholder |
