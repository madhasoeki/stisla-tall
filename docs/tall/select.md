# Select Component (TALL Stack)

Komponen Select menyediakan elemen pemilih drop-down (`<select>`), baik mode native browser bawaan maupun mode popup kustom yang dihidrasi via JavaScript Stisla (`data-stisla-select`).

## Basic Usage

Penggunaan dasar komponen select native dengan array `:options`:

```blade
<stisla::field label="Country" for="basicSelect" class="max-w-96">
    <stisla::select
        id="basicSelect"
        name="country"
        placeholder="Pick one"
        :options="[
            'id' => 'Indonesia',
            'my' => 'Malaysia',
            'sg' => 'Singapore',
            'th' => 'Thailand'
        ]"
    />
</stisla::field>
```

Atau menggunakan sintaks slot `<option>` secara manual:

```blade
<stisla::select id="basicSelect" name="country">
    <option value="" selected>Pick one</option>
    <option value="id">Indonesia</option>
    <option value="my">Malaysia</option>
</stisla::select>
```

---

## Variations & Features

### 1. Sizes (`size="sm"` / `size="lg"`)
Variasi ukuran tinggi, padding, dan font select (`sm` atau `lg`).

```blade
<stisla::select size="sm" placeholder="Small" />
<stisla::select placeholder="Default" />
<stisla::select size="lg" placeholder="Large" />
```

### 2. Option Groups (`<optgroup>`)
Mengelompokkan opsi pilihan berdasarkan kategori menggunakan array bertingkat pada prop `:options`:

```blade
<stisla::select
    placeholder="Pick a city"
    :options="[
        'Indonesia' => ['jkt' => 'Jakarta', 'bdg' => 'Bandung'],
        'Malaysia' => ['kul' => 'Kuala Lumpur', 'pen' => 'Penang']
    ]"
/>
```

### 3. Multiple Select (`:multiple="true"`)
Mode daftar pilihan ganda (*multi-select listbox*):

```blade
<stisla::select
    :multiple="true"
    size="5"
    :selected="['docs', 'feat']"
    :options="['bug' => 'Bug', 'docs' => 'Docs', 'feat' => 'Feature']"
/>
```

### 4. Custom Stisla JS Popup (`:custom="true"`)
Mengaktifkan mode popup kustom yang dihidrasi oleh JavaScript runtime Stisla (`data-stisla-select`):

```blade
<stisla::select
    :custom="true"
    placeholder="Pick one"
    :options="['id' => 'Indonesia', 'my' => 'Malaysia']"
/>

{{-- Custom Popup Multiple --}}
<stisla::select
    :custom="true"
    :multiple="true"
    placeholder="Add tags"
    :selected="['docs', 'feat']"
    :options="['bug' => 'Bug', 'docs' => 'Docs', 'feat' => 'Feature']"
/>
```

### 5. Disabled & Validation States (`:disabled`, `:required`, `:invalid`)
Menonaktifkan interaksi (`:disabled="true"`), validasi browser (`:required="true"`), atau penandaan kesalahan server (`:invalid="true"`):

```blade
<stisla::select selected="free" :disabled="true" :options="['free' => 'Free', 'pro' => 'Pro']" />
<stisla::select :required="true" placeholder="Pick a plan" :options="['free' => 'Free', 'pro' => 'Pro']" />
<stisla::select selected="free" :invalid="true" :options="['free' => 'Free', 'pro' => 'Pro']" />
```

---

## Props Reference (`<stisla::select>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `options` | `array` | `[]` | Array pilihan (flat `['a', 'b']`, asosiatif `['a' => 'A']`, atau optgroup `['Group' => ['a' => 'A']]`) |
| `id` | `string` | `null` | Atribut ID elemen select |
| `name` | `string` | `null` | Atribut nama elemen HTML select |
| `value` / `selected` | `mixed` | `null` | Nilai atau array nilai opsi yang sedang terpilih |
| `placeholder` | `string` | `null` | Teks placeholder opsi pertama / `data-placeholder` |
| `size` | `mixed` | `null` | Ukuran tinggi varian (`'sm'`, `'lg'`) atau angka baris listbox (`size="4"`) |
| `multiple` | `bool` | `false` | Menonaktifkan mode pilihan tunggal menjadi pilihan ganda |
| `custom` | `bool` | `false` | Mengaktifkan hidrasi popup kustom Stisla JS (`data-stisla-select`) |
| `disabled` | `bool` | `false` | Menonaktifkan elemen select |
| `readonly` | `bool` | `false` | Menandai elemen select hanya-baca |
| `invalid` | `bool` | `false` | Menandai kesalahan validasi (`aria-invalid="true"`) |
| `required` | `bool` | `false` | Atribut required formulir |
| `vars` | `array` | `[]` | Array variabel CSS kustom untuk override gaya visual |

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::select
    placeholder="Custom styled select"
    :vars="[
        'radius' => '0px',
        'height' => '3rem'
    ]"
/>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Select:

| Variable | Use |
| :--- | :--- |
| `--select-radius` | Corner radius elemen select |
| `--select-height` | Tinggi fisik elemen select single-line |
| `--select-padding-inline` | Padding interior horizontal |
| `--select-bg` | Latar belakang select |
| `--select-color` | Warna teks select |
| `--select-border-width` | Ketebalan garis tepi border |
| `--select-border-color` | Warna garis tepi border |
| `--select-indicator` | SVG ikon panah chevron |
| `--select-shadow` | Bayangan elevasi popup kustom |
