# Checkbox Component (TALL Stack)

Komponen Checkbox menyajikan input pilihan kotak centang (*square box*) native yang mendukung status tercentang (*checked*), belum tercentang, maupun *indeterminate*.

## Basic Usage

Penggunaan standar dengan teks label:

```blade
<stisla::checkbox id="defaultCheck" label="Default checkbox" />
<stisla::checkbox id="checkedCheck" label="Checked by default" :checked="true" />
```

---

## Variations & Features

### 1. Inline Layout
Menyusun elemen checkbox secara horizontal menggunakan wrapper `.field.field--inline`:

```blade
<div class="field field--inline flex flex-wrap gap-4">
    <stisla::checkbox id="inlineCheck1" label="One" />
    <stisla::checkbox id="inlineCheck2" label="Two" />
    <stisla::checkbox id="inlineCheck3" label="Three" />
</div>
```

### 2. Indeterminate State (`:indeterminate="true"`)
Menampilkan status *indeterminate* (garis datar tengah), berguna untuk kontrol grup induk (*Select All*):

```blade
<stisla::checkbox id="indeterminateCheck" label="Select all" :indeterminate="true" />
```

### 3. Reversed Layout (`:reverse="true"`)
Membalik posisi label berada di sebelah kiri dan kotak checkbox di sebelah kanan edge:

```blade
<stisla::checkbox id="reverseCheck" label="Reversed checkbox" :reverse="true" />
```

### 4. Disabled State (`:disabled="true"`)
Menonaktifkan interaksi pada checkbox:

```blade
<stisla::checkbox id="disabledCheck" label="Disabled checkbox" :disabled="true" />
<stisla::checkbox id="disabledCheckedCheck" label="Disabled, checked" :checked="true" :disabled="true" />
```

### 5. Validation States (`:required`, `:invalid`)
Mendukung validasi native browser (`:required="true"`) maupun validasi server (`:invalid="true"`):

```blade
{{-- Validasi Native Browser --}}
<stisla::checkbox id="reqTerms" label="Accept the terms" :required="true" />

{{-- Validasi Server / Livewire --}}
<stisla::checkbox id="srvTerms" label="Accept the terms" :invalid="true" />
```

### 6. Without Labels (Bare Checkbox)
Checkbox tanpa pembungkus label untuk penggunaan di dalam tabel data (*row selection*) atau toolbar:

```blade
<stisla::checkbox aria-label="Bare checkbox" />
<stisla::checkbox aria-label="Bare checkbox, checked" :checked="true" />
```

---

## Props & Slots Reference

### Props (`<stisla::checkbox>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `label` | `string` | `null` | Teks label di samping kotak checkbox |
| `id` | `string` | `null` | ID elemen input (otomatis di-generate jika tidak diisi) |
| `name` | `string` | `null` | Atribut nama input HTML |
| `value` | `mixed` | `null` | Atribut nilai input HTML |
| `checked` | `bool` | `false` | Menandai checkbox dalam status tercentang |
| `indeterminate` | `bool` | `false` | Menandai checkbox dalam status *indeterminate* |
| `disabled` | `bool` | `false` | Menonaktifkan interaksi pada checkbox |
| `invalid` | `bool` | `false` | Menandai kesalahan validasi (`aria-invalid="true"`) |
| `reverse` | `bool` | `false` | Membalik posisi label ke kiri dan checkbox ke kanan (`field__item--reverse`) |
| `required` | `bool` | `false` | Atribut required input HTML |
| `vars` | `array` | `[]` | Array variabel CSS kustom untuk override gaya visual |

### Slots

| Slot | Description |
| :--- | :--- |
| `default` | Konten kustom label jika prop `label` tidak diisi |

---

## Customization

Kustomisasi visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::checkbox
    id="customCheck"
    label="Sharp Corners"
    :checked="true"
    :vars="['radius' => '0px', 'size' => '1.25rem']"
/>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Checkbox:

| Variable | Use |
| :--- | :--- |
| `--checkbox-size` | Dimensi kotak checkbox |
| `--checkbox-radius` | Corner radius kotak checkbox |
| `--checkbox-bg` | Latar belakang saat unchecked |
| `--checkbox-border-width` | Ketebalan garis tepi border |
| `--checkbox-border-color` | Warna garis tepi border |
| `--checkbox-bg-checked` | Warna latar belakang saat checked atau indeterminate |
| `--checkbox-indicator` | SVG glyph indicator (centang atau garis datar) |
