# Progress Component (TALL Stack)

Komponen Progress (`<stisla::progress>`) menampilkan bilah indikator pencapaian (progress bar) horizontal untuk menunjukkan tingkat penyelesaian tugas atau alur proses.

## Basic Usage

Penggunaan dasar komponen Progress:

```blade
<stisla::progress :value="72" label="Uploading" :show-value="true" :block="true" />
```

---

## Variations & Features

### 1. Tone Intents (`tone="..."`)
Mewarnai isian bilah dengan varian intent semantik (`primary`, `success`, `warning`, `danger`, `info`):

```blade
<stisla::progress :value="60" tone="primary" />
<stisla::progress :value="75" tone="success" />
<stisla::progress :value="45" tone="warning" />
```

### 2. Sizes (`size="..."`)
Ukuran tinggi tipis (`size="sm"`), default, atau tinggi tebal untuk teks (`size="lg"`):

```blade
<stisla::progress size="sm" :value="60" />
<stisla::progress size="lg" :value="60" />
```

### 3. Animated Sheen (`:animated="true"`)
Animasi sabetan kilat halus yang melintasi isian bilah:

```blade
<stisla::progress size="lg" :value="80" tone="success" :animated="true" />
```

### 4. Indeterminate Loading (`:indeterminate="true"`)
Animasi bilah meluncur berulang ketika durasi atau estimasi penyelesaian tidak diketahui:

```blade
<stisla::progress :indeterminate="true" aria-label="Loading..." />
```

### 5. Custom Compound Anatomy
Penggunaan sub-komponen terpisah jika membutuhkan kustomisasi HTML yang lebih fleksibel:

```blade
<stisla::progress :block="true" aria-label="Uploading file">
    <stisla::progress.label>Uploading</stisla::progress.label>
    <stisla::progress.value>72%</stisla::progress.value>
    <stisla::progress.track>
        <stisla::progress.bar :value="72" tone="primary" />
    </stisla::progress.track>
</stisla::progress>
```

---

## Props Reference

### `<stisla::progress>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `value` | `int\|float` | `null` | Nilai persentase pengisian (0-100) |
| `min` | `int` | `0` | Nilai minimum accessibility |
| `max` | `int` | `100` | Nilai maksimum accessibility |
| `label` | `string` | `null` | Teks caption label |
| `showValue` | `bool` | `false` | Menampilkan nilai persen teks di kanan atas |
| `tone` | `string` | `null` | Warna intent semantik (`'primary'`, `'success'`, `'warning'`, `'danger'`, `'info'`) |
| `size` | `string` | `null` | Ukuran tinggi bilah (`'sm'`, `'lg'`) |
| `block` | `bool` | `false` | Menampilkan sebagai blok (`.progress--block`) |
| `animated` | `bool` | `false` | Mengaktifkan animasi kilau (`.progress__bar--animated`) |
| `indeterminate` | `bool` | `false` | Mengaktifkan mode pengisian tak tentu (`data-indeterminate`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--progress-*`) |

### Sub-Components Overview
- `<stisla::progress.label>`: Caption teks label (`<span class="progress__label">`).
- `<stisla::progress.value>`: Teks persentase nilai (`<span class="progress__value">`).
- `<stisla::progress.track>`: Pembungkus track rel (`<div class="progress__track">`).
- `<stisla::progress.bar>`: Isian bilah (`<div class="progress__bar">`, `value`, `tone`, `animated`).

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::progress :value="85" tone="primary" :vars="['radius' => '0px', 'height' => '0.75rem']" />
```

Variabel CSS yang tersedia untuk kustomisasi komponen Progress:

| Variable | Use |
| :--- | :--- |
| `--progress-height` | Tinggi fisik track rel |
| `--progress-radius` | Radius sudut melengkung |
| `--progress-bg` | Warna latar bagian kosong track |
| `--progress-bar-bg` | Warna isi bilah progress |
| `--progress-shimmer-color` | Warna kilatan animasi sheen |
