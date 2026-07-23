# Radio Component (TALL Stack)

Komponen Radio adalah elemen pilihan tunggal (*single-selection radio button*) yang terintegrasi penuh dengan sistem token dan layout Stisla.

## Basic Usage

Penggunaan dasar komponen radio dengan label:

```blade
<div class="field space-y-2">
    <stisla::radio name="plan" id="planBasic" label="Basic plan" value="basic" :checked="true" />
    <stisla::radio name="plan" id="planPro" label="Pro plan" value="pro" />
</div>
```

---

## Variations & Features

### 1. Inline Radio Group
Menyusun radio button secara horizontal menggunakan wrapper `.field.field--inline`:

```blade
<div class="field field--inline flex flex-wrap gap-4">
    <stisla::radio name="inlineRadio" label="One" value="1" :checked="true" />
    <stisla::radio name="inlineRadio" label="Two" value="2" />
    <stisla::radio name="inlineRadio" label="Three" value="3" />
</div>
```

### 2. Reversed Layout (`:reverse="true"`)
Meletakkan label di sebelah kiri dan tombol radio di ujung kanan (sesuai pola *settings row*):

```blade
<stisla::radio name="setting" label="Reversed option" :reverse="true" :checked="true" />
```

### 3. Disabled State (`:disabled="true"`)
Menonaktifkan interaksi pada tombol radio dan meredupkan teks labelnya:

```blade
<stisla::radio name="disabledRadio" label="Disabled radio" :disabled="true" />
<stisla::radio name="disabledRadio" label="Disabled, selected" :checked="true" :disabled="true" />
```

### 4. Validation States (`:required`, `:invalid`)
Mendukung validasi native browser (`:required="true"`) dan penandaan kesalahan server (`:invalid="true"`):

```blade
<stisla::radio name="reqPlan" label="Required option" :required="true" />
<stisla::radio name="srvPlan" label="Flagged option" :invalid="true" :checked="true" />
```

### 5. Bare Radios (Without Labels)
Jika dipanggil tanpa label atau slot, komponen merender tag `<input type="radio" class="radio">` murni tanpa pembungkus `.field__item`. Wajib menyertakan `aria-label`:

```blade
<stisla::radio name="bareRadio" value="1" aria-label="Bare radio" />
<stisla::radio name="bareRadio" value="2" aria-label="Bare radio, selected" :checked="true" />
```

---

## Props Reference (`<stisla::radio>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `label` | `string` | `null` | Teks label untuk radio button |
| `id` | `string` | `null` | ID elemen input (otomatis dibuatkan jika label ada) |
| `name` | `string` | `null` | Atribut `name` kelompok radio button |
| `value` | `mixed` | `null` | Nilai awal dari input radio |
| `checked` | `bool` | `false` | Menandai radio terpilih |
| `disabled` | `bool` | `false` | Menonaktifkan radio button |
| `invalid` | `bool` | `false` | Menandai kesalahan validasi (`aria-invalid="true"`) |
| `reverse` | `bool` | `false` | Membalik tata letak (label di kiri, radio di kanan) |
| `required` | `bool` | `false` | Atribut required formulir |
| `vars` | `array` | `[]` | Array variabel CSS kustom untuk override gaya visual |

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::radio
    name="customRadio"
    label="Larger Radio Size"
    :checked="true"
    :vars="['size' => '1.5rem']"
/>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Radio:

| Variable | Use |
| :--- | :--- |
| `--radio-size` | Diameter bulatan radio button |
| `--radio-bg` | Warna latar belakang saat tidak terpilih |
| `--radio-border-width` | Ketebalan garis tepi border |
| `--radio-border-color` | Warna garis tepi border saat tidak terpilih |
| `--radio-bg-checked` | Warna latar belakang saat terpilih |
| `--radio-indicator` | SVG titik pusat saat terpilih |
