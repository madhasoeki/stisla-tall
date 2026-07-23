# Badge Component (TALL Stack)

Komponen Badge menyediakan label ringkas untuk status, hitungan (*counts*), dan kategori.

## Basic Usage

Penggunaan dasar komponen badge dengan variasi nada warna (*tone modifiers*):

```blade
<stisla::badge>Neutral</stisla::badge>
<stisla::badge tone="primary">Primary</stisla::badge>
<stisla::badge tone="success">Success</stisla::badge>
<stisla::badge tone="warning">Warning</stisla::badge>
<stisla::badge tone="danger">Danger</stisla::badge>
<stisla::badge tone="info">Info</stisla::badge>
```

---

## Variations & Features

### 1. Soft Variant (`:soft="true"`)
Varian warna lembut dengan isian latar transparan berwarna dan teks solid:

```blade
<stisla::badge :soft="true">Neutral</stisla::badge>
<stisla::badge :soft="true" tone="primary">Primary</stisla::badge>
<stisla::badge :soft="true" tone="success">Success</stisla::badge>
```

### 2. With Icons (`icon`, `icon-trailing`)
Ikon terdepan atau trailing yang skalanya menyesuaikan ukuran teks badge:

```blade
<stisla::badge tone="success" icon="check">Verified</stisla::badge>
<stisla::badge :soft="true" tone="warning" icon="clock">Pending</stisla::badge>
<stisla::badge tone="info" icon-trailing="arrow-up">12</stisla::badge>
```

### 3. Loading State (`:busy="true"`)
Menyisipkan indikator *spinner* kecil di dalam badge saat pemrosesan berlangsung:

```blade
<stisla::badge :soft="true" tone="primary" :busy="true">Syncing</stisla::badge>
```

### 4. Count inside Buttons
Badge yang diletakkan di dalam `<stisla::button>` secara otomatis mewarisi *font-size cascade*:

```blade
<stisla::button tone="neutral">
    Inbox <stisla::badge tone="primary">24</stisla::badge>
</stisla::button>
```

---

## Props Reference (`<stisla::badge>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `tone` / `variant` | `string` | `null` | Nada warna konteks (`'primary'`, `'success'`, `'warning'`, `'danger'`, `'info'`) |
| `soft` | `bool` | `false` | Varian isian lembut (*soft tinted fill*) |
| `icon` | `string` | `null` | Nama ikon Lucide terdepan |
| `icon-trailing` / `iconTrailing` | `string` | `null` | Nama ikon Lucide trailing di belakang teks |
| `busy` / `loading` | `bool` | `false` | Menampilkan indikator loading spinner (`.spinner.spinner--sm`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom untuk override gaya visual |

---

## Customization

Penimpaan visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::badge
    tone="primary"
    :vars="['radius' => 'var(--radius-sm)']"
>
    Flattened Badge
</stisla::badge>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Badge:

| Variable | Use |
| :--- | :--- |
| `--badge-radius` | Corner radius (default: full pill) |
| `--badge-min-height` | Minimum tinggi bidang chip badge |
| `--badge-padding-block` | Padding vertikal (atas & bawah) |
| `--badge-padding-inline` | Padding horizontal (kiri & kanan) |
| `--badge-font-size` | Ukuran teks label (ikon menyesuaikan 1em) |
| `--badge-font-weight` | Ketebalan teks label |
| `--badge-bg` | Latar belakang isian |
| `--badge-color` | Warna teks dan ikon |
