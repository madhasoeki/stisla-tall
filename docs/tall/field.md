# Field Component (TALL Stack)

Komponen Field adalah pembungkus (*wrapper container*) yang mengelompokkan label, kontrol formulir (input, select, textarea, checkbox, dll.), serta teks bantuan (*description*) atau pesan kesalahan validasi (*error*) dalam satu ritme tampilan yang konsisten.

## Basic Usage

Penggunaan dasar pembungkus label dan kontrol formulir:

```blade
<stisla::field label="Email" for="fieldBasicEmail" class="max-w-96">
    <input type="email" class="input" id="fieldBasicEmail" placeholder="you@example.com" />
</stisla::field>
```

---

## Variations & Features

### 1. Field Description
Menambahkan teks bantuan (*helper text*) di bawah kontrol formulir melalui prop `description="..."` atau komponen `<stisla::field.description>`:

```blade
<stisla::field
    label="Password"
    for="fieldDescPwd"
    description="At least 12 characters. Mix letters, numbers, and a symbol."
    description-id="fieldDescPwdHelp"
>
    <input type="password" class="input" id="fieldDescPwd" aria-describedby="fieldDescPwdHelp" />
</stisla::field>
```

### 2. Field Error
Menampilkan pesan kesalahan validasi formulir melalui prop `error="..."` atau komponen `<stisla::field.error>`:

```blade
<stisla::field
    label="Email"
    for="fieldErrEmail"
    error="Please enter a valid email address."
    error-id="fieldErrEmailMsg"
>
    <input type="email" class="input" id="fieldErrEmail" value="not-an-email" aria-invalid="true" aria-describedby="fieldErrEmailMsg" />
</stisla::field>
```

### 3. Field Items (Baris Checkbox / Radio)
Mengelompokkan pasangan kontrol dan label secara horizontal dalam baris menggunakan `<stisla::field.item>`:

```blade
<stisla::field class="max-w-96 space-y-2">
    <stisla::field.item label="Email me about updates" for="fieldItem1">
        <input class="checkbox" type="checkbox" id="fieldItem1" />
    </stisla::field.item>

    <stisla::field.item label="Email me about security alerts" for="fieldItem2">
        <input class="checkbox" type="checkbox" id="fieldItem2" checked />
    </stisla::field.item>
</stisla::field>
```

### 4. Inline Field Items (`:inline="true"`)
Menyusun pasangan item field secara horizontal bersisian menggunakan modifier `:inline="true"` (`field--inline`):

```blade
<stisla::field :inline="true" class="flex flex-wrap gap-4">
    <stisla::field.item label="Daily" for="item1">
        <input class="radio" type="radio" name="freq" id="item1" checked />
    </stisla::field.item>
    <stisla::field.item label="Weekly" for="item2">
        <input class="radio" type="radio" name="freq" id="item2" />
    </stisla::field.item>
</stisla::field>
```

### 5. Reversed Item Layout (`:reverse="true"`)
Membalik tata letak baris item sehingga label berada di sebelah kiri dan input menempel di ujung kanan (*right edge*):

```blade
<stisla::field.item label="Compact density" for="itemRev" :reverse="true">
    <input class="checkbox" type="checkbox" id="itemRev" />
</stisla::field.item>
```

---

## Props & Sub-Components Reference

### Main Component (`<stisla::field>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `label` | `string` | `null` | Teks label utama field |
| `for` / `id` | `string` | `null` | Atribut ID target elemen kontrol untuk label `for` |
| `description` | `string` | `null` | Teks bantuan (*helper text*) di bawah kontrol |
| `descriptionId` | `string` | `null` | Atribut ID pada teks bantuan untuk `aria-describedby` |
| `error` | `string` | `null` | Pesan kesalahan validasi |
| `errorId` | `string` | `null` | Atribut ID pada pesan kesalahan untuk `aria-describedby` |
| `inline` | `bool` | `false` | Menyusun elemen secara horizontal (`field--inline`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom untuk override gaya visual |

### Sub-Components

- `<stisla::field.item>`: Pembungkus baris horizontal kontrol + label (Props: `label`, `for`/`id`, `reverse`).
- `<stisla::field.label>`: Komponen label kustom (`.field__label`).
- `<stisla::field.description>`: Komponen teks deskripsi kustom (`.field__description`).
- `<stisla::field.error>`: Komponen teks kesalahan kustom (`.field__error`).

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::field
    label="Custom Spacing & Label Color"
    :vars="['gap' => '1rem', 'label-color' => 'oklch(0.5 0.2 280)']"
>
    <input type="text" class="input" />
</stisla::field>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Field:

| Variable | Use |
| :--- | :--- |
| `--field-gap` | Jarak vertikal antara label, kontrol, dan teks bantuan |
| `--field-label-font-size` | Ukuran tipe teks label |
| `--field-label-font-weight` | Ketebalan font label utama |
| `--field-label-color` | Warna teks label |
| `--field-helper-font-size` | Ukuran teks deskripsi dan pesan kesalahan |
| `--field-helper-color` | Warna teks deskripsi bantuan |
| `--field-error-color` | Warna pesan kesalahan validasi |
| `--field-item-gap` | Jarak horizontal antara input dan label dalam item |
| `--field-item-padding-block` | Breathing room vertikal pada baris item |
| `--field-item-label-font-weight` | Ketebalan font label di dalam item |
| `--field-item-disabled-opacity` | Opasitas redup label saat kontrol di dalam item non-aktif |
