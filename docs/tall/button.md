# Button Component (TALL Stack)

Komponen Button menyediakan kontrol tombol yang dapat diklik untuk memicu tindakan pengguna, mendukung elemen `<button>` maupun `<a>`.

## Basic Usage

Penggunaan dasar komponen tombol dengan variasi nada warna (*tone modifiers*):

```blade
<stisla::button tone="primary">Save changes</stisla::button>
<stisla::button mode="outline" tone="neutral">Cancel</stisla::button>
```

---

## Variations & Features

### 1. Tones (`tone="primary"` / `neutral` / `tertiary` / `danger`)
Variasi warna peran tombol:

```blade
<stisla::button tone="primary">Primary</stisla::button>
<stisla::button tone="neutral">Neutral</stisla::button>
<stisla::button tone="tertiary">Tertiary</stisla::button>
<stisla::button tone="danger">Danger</stisla::button>
```

### 2. Styles (`mode="outline"` / `ghost` / `soft`)
Variasi gaya permukaan tombol:

```blade
<stisla::button mode="outline" tone="neutral">Outline</stisla::button>
<stisla::button mode="ghost" tone="primary">Ghost</stisla::button>
<stisla::button mode="soft" tone="danger">Soft</stisla::button>
```

### 3. Sizes (`size="sm"` / `lg` / `xl`)
Variasi tinggi dan ukuran teks tombol:

```blade
<stisla::button tone="primary" size="sm">Small</stisla::button>
<stisla::button tone="primary">Default</stisla::button>
<stisla::button tone="primary" size="lg">Large</stisla::button>
<stisla::button tone="primary" size="xl">XL</stisla::button>
```

### 4. Icons & Icon Only (`icon`, `icon-trailing`, `:icon-only`, `:pill`)
Dukungan ikon terdepan, trailing, dan tombol khusus ikon bulat/persegi:

```blade
<stisla::button tone="primary" icon="plus">Leading Icon</stisla::button>
<stisla::button tone="primary" icon-trailing="arrow-right">Trailing Icon</stisla::button>
<stisla::button tone="primary" :icon-only="true" icon="plus" aria-label="Add" />
<stisla::button mode="ghost" tone="neutral" :icon-only="true" :pill="true" icon="pencil" aria-label="Edit" />
```

### 5. States (`:disabled`, `:busy`, `:pressed`)
Menonaktifkan tombol (`:disabled="true"`), status pemrosesan/spinner CSS (`:busy="true"`), dan status ditekan (`:pressed="true"`):

```blade
<stisla::button tone="primary" :disabled="true">Disabled</stisla::button>
<stisla::button tone="primary" :busy="true">Saving...</stisla::button>
<stisla::button tone="primary" :pressed="true">Pressed</stisla::button>
```

### 6. Rendered as Link (`href="..."`)
Jika atribut `href` diisi, komponen merender tag `<a>` dengan `role="button"`:

```blade
<stisla::button tone="primary" href="https://stisla.dev">Stisla Link</stisla::button>
```

---

## Props Reference (`<stisla::button>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `tone` / `variant` | `string` | `null` | Nada warna peran (`'primary'`, `'neutral'`, `'tertiary'`, `'danger'`) |
| `mode` / `style` | `string` | `null` | Gaya gaya permukaan (`'outline'`, `'ghost'`, `'soft'`) |
| `size` | `string` | `null` | Ukuran tinggi tombol (`'sm'`, `'lg'`, `'xl'`) |
| `icon` | `string` | `null` | Nama ikon Lucide terdepan |
| `icon-trailing` / `iconTrailing` | `string` | `null` | Nama ikon Lucide di belakang label |
| `icon-only` / `iconOnly` | `bool` | `false` | Modifikasi tombol khusus ikon (persegi) |
| `pill` | `bool` | `false` | Sudut tombol bulat penuh (lingkaran jika icon-only) |
| `disabled` | `bool` | `false` | Menonaktifkan interaksi tombol |
| `busy` / `loading` | `bool` | `false` | Menampilkan indikator loading spinner (`aria-busy="true"`) |
| `pressed` | `bool` | `false` | Menandai tombol dalam keadaan tertekan (`aria-pressed="true"`) |
| `href` | `string` | `null` | Tautan URL (merender elemen `<a>`) |
| `type` | `string` | `'button'` | Atribut type elemen HTML `<button>` |
| `vars` | `array` | `[]` | Array variabel CSS kustom untuk override gaya visual |

---

## Customization

Penimpaan warna atau variabel visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::button
    :vars="[
        'tone' => 'oklch(0.55 0.18 149)',
        'color' => 'white'
    ]"
>
    Custom Green Button
</stisla::button>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Button:

| Variable | Use |
| :--- | :--- |
| `--button-radius` | Corner radius tombol |
| `--button-height` | Tinggi fisik tombol |
| `--button-padding-inline` | Padding interior horizontal |
| `--button-font-size` | Ukuran teks label |
| `--button-font-weight` | Ketebalan teks label |
| `--button-icon-size` | Ukuran ikon Lucide |
| `--button-tone` | Token warna dasar yang mendasari state tombol |
| `--button-bg` | Latar belakang isian |
| `--button-color` | Warna teks label |
| `--button-border-color` | Warna garis tepi border |
