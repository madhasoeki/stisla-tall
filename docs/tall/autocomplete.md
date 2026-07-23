# Autocomplete Component (TALL Stack)

Komponen Autocomplete adalah input teks yang menyajikan saran opsi saat pengguna mengetik, mempermudah pengisian nilai tunggal secara presisi.

## Basic Usage

Penggunaan dasar autocomplete menggunakan array opsi data untuk disajikan sebagai opsi saran:

```blade
<stisla::autocomplete
    id="country"
    name="country"
    placeholder="Search countries"
    :datalist="['Indonesia', 'Malaysia', 'Singapore', 'Philippines', 'Thailand']"
/>
```

---

## Variations & Features

### 1. Dynamic Options (`:options`)
Menyediakan opsi saran dinamis berbasis array JSON melalui prop `:options`.

```blade
<stisla::autocomplete
    name="framework"
    placeholder="Search frameworks"
    :options='["React", "Vue", "Svelte", "Solid", "Angular", "Astro"]'
/>
```

### 2. Minimum Length (`:min-length`)
Menangguhkan kemunculan popup saran hingga pengguna mengetikkan sejumlah karakter minimal tertentu melalui `:min-length` atau `minLength`.

```blade
<stisla::autocomplete
    :min-length="2"
    placeholder="Type at least 2 characters"
    :options='["Jakarta", "Jambi", "Bandung", "Bali", "Surabaya"]'
/>
```

### 3. Sizes (`size="sm"` / `size="lg"`)
Variasi ukuran autocomplete untuk menyesuaikan tinggi, padding, dan ukuran font input (`sm` atau `lg`).

```blade
{{-- Ukuran Kecil --}}
<stisla::autocomplete size="sm" placeholder="Small autocomplete" :options='["Apple", "Banana", "Cherry"]' />

{{-- Ukuran Default --}}
<stisla::autocomplete placeholder="Default autocomplete" :options='["Apple", "Banana", "Cherry"]' />

{{-- Ukuran Besar --}}
<stisla::autocomplete size="lg" placeholder="Large autocomplete" :options='["Apple", "Banana", "Cherry"]' />
```

### 4. Disabled State (`:disabled="true"`)
Menonaktifkan interaksi pada input dan mencegah popup autocomplete terbuka.

```blade
<stisla::autocomplete
    :disabled="true"
    placeholder="Search countries"
    :options='["Indonesia", "Malaysia"]'
/>
```

### 5. Invalid State (`:invalid="true"`)
Menampilkan status kesalahan validasi formulir (garis tepi merah dan atribut `aria-invalid="true"`).

```blade
<stisla::autocomplete
    :invalid="true"
    aria-describedby="countryError"
    placeholder="Search countries"
    :options='["Indonesia", "Malaysia"]'
/>
```

### 6. Event Handling (`stisla:autocomplete:select`)
Mendengarkan event custom JavaScript `stisla:autocomplete:select` saat pengguna memilih salah satu saran.

```blade
<stisla::autocomplete
    id="eventAuto"
    placeholder="Pick a tag"
    :options='["Bug", "Docs", "Feature", "Performance"]'
/>

<script>
    document.getElementById('eventAuto').addEventListener('stisla:autocomplete:select', function (e) {
        console.log('Selected:', e.detail.value);
    });
</script>
```

### 7. Data dari Database / Livewire Property (`:datalist`)
Mengambil data dari query database (misal Eloquent Collection atau array dari `Country::all()`) di Livewire Component, lalu mengumpankannya ke prop `:datalist`. Komponen Autocomplete secara otomatis mendukung array asosiatif `['id' => '...', 'name' => '...']`, `['value' => '...', 'label' => '...']`, maupun key-value biasa.

```php
<?php

use App\Models\Country;
use Livewire\Component;

new class extends Component
{
    public array $countries = [];

    public function mount()
    {
        // Contoh query dari Database:
        // $this->countries = Country::select('id', 'name')->get()->toArray();
        $this->countries = [
            ['id' => 'ID', 'name' => 'Indonesia'],
            ['id' => 'MY', 'name' => 'Malaysia'],
            ['id' => 'SG', 'name' => 'Singapore'],
        ];
    }
};
?>

<div>
    <stisla::autocomplete
        id="countrySelect"
        name="country_id"
        placeholder="Pilih negara..."
        :datalist="$countries"
    />
</div>
```

---

## Props & Slots Reference

### Props (`<stisla::autocomplete>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `id` | `string` | `null` | ID elemen input (otomatis di-generate jika tidak diisi) |
| `name` | `string` | `null` | Atribut nama input HTML |
| `value` | `string` | `null` | Nilai awal pada input |
| `placeholder` | `string` | `null` | Teks placeholder input |
| `size` | `string` | `null` | Ukuran varian (`'sm'` atau `'lg'`) |
| `options` | `array\|string` | `null` | Opsi saran dalam format array PHP atau JSON string (`data-options`) |
| `datalist` | `array\|string` | `null` | Array item untuk `<datalist>` atau ID dari elemen `<datalist>` eksternal |
| `list` | `string` | `null` | ID referensi elemen `<datalist>` (`list="id"`) |
| `minLength` / `min-length` | `int\|string` | `null` | Jumlah minimum karakter sebelum saran ditampilkan (`data-stisla-autocomplete-min-length`) |
| `disabled` | `bool` | `false` | Menonaktifkan elemen input |
| `invalid` | `bool` | `false` | Menandai input memiliki kesalahan validasi (`aria-invalid="true"`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom untuk override gaya visual |

### Slots

| Slot | Description |
| :--- | :--- |
| `default` | Konten elemen opsional tambahan di dalam wrapper (misal elemen `<datalist>` kustom) |

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::autocomplete
    placeholder="Custom styled autocomplete"
    :options='["Custom 1", "Custom 2"]'
    :vars="[
        'radius' => '0px',
        'item-bg-hover' => 'oklch(0.95 0.05 280)',
        'item-color-hover' => 'oklch(0.3 0.2 280)'
    ]"
/>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Autocomplete:

| Variable | Use |
| :--- | :--- |
| `--autocomplete-height` | Tinggi fisik field input |
| `--autocomplete-padding-inline` | Padding interior horizontal field |
| `--autocomplete-font-size` | Ukuran tipe teks input dan popup |
| `--autocomplete-color` / `-bg` / `-border-color` | Warna teks, latar belakang, dan border field |
| `--autocomplete-radius` | Corner radius field dan popup |
| `--autocomplete-placeholder` | Warna teks placeholder |
| `--autocomplete-popup-border-color` / `-shadow` | Warna border dan bayangan (elevation) popup |
| `--autocomplete-item-gap` | Jarak antar baris item saran di popup |
| `--autocomplete-item-min-height` / `-item-padding-block` / `-item-padding-inline` | Dimensi dan padding baris item popup |
| `--autocomplete-item-bg-hover` / `-item-color-hover` | Latar belakang dan warna teks saat hover/keyboard navigation |
| `--autocomplete-item-color-disabled` | Warna teks item kosong/disable |
| `--autocomplete-mark-font-weight` | Weight (ketebalan) teks yang cocok dengan pencarian |
