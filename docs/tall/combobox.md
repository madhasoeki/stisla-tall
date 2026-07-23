# Combobox Component (TALL Stack)

Komponen Combobox mentransformasi elemen `<select>` native menjadi trigger pencarian interaktif yang mendukung pemilihan opsi tunggal, multi-select dengan chips, penambahan tag kustom, serta grup opsi.

## Basic Usage

Penggunaan dasar combobox pencarian tunggal dengan opsi array:

```blade
<stisla::combobox
    id="singleCombo"
    placeholder="Choose a framework"
    aria-label="Framework"
    :options="['react' => 'React', 'vue' => 'Vue', 'svelte' => 'Svelte', 'solid' => 'Solid']"
/>
```

---

## Variations & Features

### 1. Multiple Select Chips (`:multiple="true"`)
Mendukung pemilihan banyak opsi (*multi-select*). Setiap opsi yang dipilih akan dirender sebagai chip interaktif yang dapat dihapus.

```blade
<stisla::combobox
    :multiple="true"
    aria-label="Frameworks"
    :value="['react', 'vue']"
    :options="['react' => 'React', 'vue' => 'Vue', 'svelte' => 'Svelte', 'solid' => 'Solid']"
/>
```

### 2. Tagging / Custom Creation (`:create="true"`)
Memungkinkan pengguna mengetikkan dan menambahkan nilai baru yang belum ada di dalam daftar opsi dengan menekan tombol `Enter`.

```blade
<stisla::combobox
    name="topics"
    :multiple="true"
    :create="true"
    placeholder="Type and press Enter"
    :value="['design']"
    :options="['design' => 'Design', 'frontend' => 'Frontend', 'backend' => 'Backend']"
/>
```

### 3. Option Groups (`<optgroup>`)
Mengelompokkan opsi-opsi yang berhubungan dalam judul grup menggunakan array bersarang (*nested array*) atau elemen slot `<optgroup>`:

```blade
<stisla::combobox
    placeholder="Search cities"
    :options="[
        'Indonesia' => ['jkt' => 'Jakarta', 'bdg' => 'Bandung'],
        'Malaysia' => ['kul' => 'Kuala Lumpur', 'pen' => 'Penang']
    ]"
/>
```

### 4. Sizes (`size="sm"` / `size="lg"`)
Variasi ukuran tinggi, padding interior, dan ukuran font combobox (`sm` atau `lg`).

```blade
<stisla::combobox size="sm" placeholder="Small" :options="['One', 'Two']" />
<stisla::combobox placeholder="Default" :options="['One', 'Two']" />
<stisla::combobox size="lg" placeholder="Large" :options="['One', 'Two']" />
```

### 5. Disabled State (`:disabled="true"`)
Menonaktifkan interaksi pada elemen combobox:

```blade
<stisla::combobox :disabled="true" value="free" :options="['free' => 'Free', 'pro' => 'Pro']" />
```

### 6. Validation States (`:required`, `:invalid`)
Mendukung validasi formulir browser (`:required="true"`) dan validasi server (`:invalid="true"`):

```blade
<stisla::combobox :required="true" placeholder="Pick a plan" :options="['free' => 'Free', 'pro' => 'Pro']" />
<stisla::combobox :invalid="true" placeholder="Pick a plan" :options="['free' => 'Free', 'pro' => 'Pro']" />
```

### 7. Custom Event (`stisla:combobox:change`)
Mendengarkan event perubahan nilai combobox di sisi client:

```blade
<stisla::combobox id="comboboxEvent" placeholder="Pick a tag" :options="['bug' => 'Bug', 'docs' => 'Docs']" />

<script>
    document.getElementById('comboboxEvent').addEventListener('stisla:combobox:change', function (e) {
        console.log('Selected:', e.detail.value);
    });
</script>
```

---

## Props & Slots Reference

### Props (`<stisla::combobox>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `id` | `string` | `null` | ID elemen select (otomatis di-generate jika kosong) |
| `name` | `string` | `null` | Atribut nama elemen HTML select |
| `value` | `mixed` | `null` | Nilai awal terpilih (string, int, atau array untuk multi-select) |
| `placeholder` | `string` | `null` | Teks placeholder pencarian (`data-placeholder`) |
| `size` | `string` | `null` | Ukuran varian (`'sm'` atau `'lg'`) |
| `multiple` | `bool` | `false` | Mode pemilihan banyak opsi (chips) |
| `create` | `bool` | `false` | Mengizinkan penambahan nilai tag baru (`data-stisla-combobox-create="true"`) |
| `disabled` | `bool` | `false` | Menonaktifkan elemen combobox |
| `invalid` | `bool` | `false` | Menandai kesalahan validasi (`aria-invalid="true"`) |
| `required` | `bool` | `false` | Atribut required formulir |
| `options` | `array\|Collection` | `null` | Array/Collection opsi data (flat array, key-value, atau nested optgroups) |
| `vars` | `array` | `[]` | Array variabel CSS kustom untuk override gaya visual |

### Slots

| Slot | Description |
| :--- | :--- |
| `default` | Konten elemen `<option>` dan `<optgroup>` kustom tambahan |

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::combobox
    placeholder="Custom combobox"
    :options="['one' => 'Option One', 'two' => 'Option Two']"
    :vars="[
        'radius' => '0px',
        'item-bg-hover' => 'oklch(0.95 0.05 280)',
        'item-color-hover' => 'oklch(0.3 0.2 280)'
    ]"
/>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Combobox:

| Variable | Use |
| :--- | :--- |
| `--combobox-height` | Tinggi fisik trigger combobox |
| `--combobox-padding-inline` | Padding interior horizontal trigger |
| `--combobox-font-size` | Ukuran font trigger dan dropdown popup |
| `--combobox-color` / `-bg` / `-border-color` | Warna teks, latar belakang, dan border trigger |
| `--combobox-radius` | Corner radius trigger dan dropdown popup |
| `--combobox-placeholder` | Warna teks placeholder pencarian |
| `--combobox-indicator` | Ikon chevron SVG |
| `--combobox-popup-border-color` / `-shadow` | Warna border dan elevation bayangan dropdown |
| `--combobox-item-gap` | Jarak antar baris opsi di dropdown |
| `--combobox-item-min-height` / `-item-padding-block` / `-item-padding-inline` | Dimensi dan padding baris opsi dropdown |
| `--combobox-item-bg-hover` / `-item-color-hover` | Latar belakang dan warna teks saat hover/highlight keyboard |
| `--combobox-item-bg-active` / `-item-color-active` | Latar belakang dan warna teks baris terpilih |
| `--combobox-item-color-disabled` | Warna teks opsi non-aktif / tidak ada hasil |
