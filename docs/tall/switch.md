# Switch Component (TALL Stack)

Komponen Switch menyediakan tombol sakelar (*track-and-thumb toggle*) untuk mengontrol opsi aktif/nonaktif pada pengaturan aplikasi, terintegrasi penuh dengan atribut aksesibilitas `role="switch"`.

## Basic Usage

Penggunaan dasar komponen switch dengan label:

```blade
<div class="field space-y-2">
    <stisla::switch id="defaultSwitch" label="Notifications" />
    <stisla::switch id="checkedSwitch" label="Auto-update" :checked="true" />
</div>
```

---

## Variations & Features

### 1. Large Variant (`size="lg"`)
Varian ukuran sakelar yang lebih besar untuk baris pengaturan utama:

```blade
<stisla::switch size="lg" label="Notifications" />
<stisla::switch size="lg" label="Auto-update" :checked="true" />
```

### 2. Settings Row Layout (`:reverse="true"`)
Meletakkan teks deskripsi/label di sebelah kiri dan tombol sakelar di paling kanan (sesuai tata letak *settings row*):

```blade
<stisla::switch size="lg" label="Email notifications" :checked="true" :reverse="true" />
<stisla::switch size="lg" label="Push notifications" :reverse="true" />
```

### 3. Disabled State (`:disabled="true"`)
Menonaktifkan interaksi sakelar dan meredupkan teks labelnya:

```blade
<stisla::switch label="Disabled off" :disabled="true" />
<stisla::switch label="Disabled on" :checked="true" :disabled="true" />
```

### 4. Validation States (`:required`, `:invalid`)
Mendukung validasi native browser (`:required="true"`) dan penandaan kesalahan server (`:invalid="true"`):

```blade
<stisla::switch label="Enable two-factor (required)" :required="true" />
<stisla::switch label="Two-factor must be enabled" :invalid="true" />
```

### 5. Bare Switches (Without Labels)
Jika dipanggil tanpa label atau slot, komponen merender tag `<input type="checkbox" role="switch" class="switch">` murni tanpa pembungkus `.field__item`. Wajib menyertakan `aria-label`:

```blade
<stisla::switch aria-label="Bare switch off" />
<stisla::switch aria-label="Bare switch on" :checked="true" />
```

---

## Props Reference (`<stisla::switch>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `label` | `string` | `null` | Teks label untuk tombol switch |
| `id` | `string` | `null` | ID elemen input (otomatis dibuatkan jika label ada) |
| `name` | `string` | `null` | Atribut nama elemen HTML input |
| `value` | `mixed` | `null` | Nilai input switch |
| `checked` | `bool` | `false` | Menandai switch dalam keadaan aktif (on) |
| `size` | `string` | `null` | Ukuran varian sakelar (`'lg'`) |
| `disabled` | `bool` | `false` | Menonaktifkan tombol switch |
| `invalid` | `bool` | `false` | Menandai kesalahan validasi (`aria-invalid="true"`) |
| `reverse` | `bool` | `false` | Membalik tata letak (label di kiri, switch di kanan) |
| `required` | `bool` | `false` | Atribut required formulir |
| `vars` | `array` | `[]` | Array variabel CSS kustom untuk override gaya visual |

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::switch
    label="Custom Track Color"
    :checked="true"
    :vars="['on-bg' => 'oklch(0.6 0.25 140)']"
/>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Switch:

| Variable | Use |
| :--- | :--- |
| `--switch-track-width` | Lebar fisik track sakelar |
| `--switch-track-height` | Tinggi fisik track sakelar |
| `--switch-thumb-size` | Diameter tombol thumb bulat |
| `--switch-inset` | Jarak gap antara tombol thumb dan tepi track |
| `--switch-radius` | Corner radius track |
| `--switch-off-bg` | Warna latar track saat mati (off) |
| `--switch-on-bg` | Warna latar track saat aktif (on) |
| `--switch-thumb-color` | Warna tombol thumb |
