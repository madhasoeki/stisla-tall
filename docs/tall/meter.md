# Meter Component (TALL Stack)

Komponen Meter (`<stisla::meter>`) menguraikan visualisasi nilai skalar dalam rentang skala yang diketahui (seperti penggunaan penyimpanan, skor target, atau alokasi anggaran).

## Basic Usage

Penggunaan dasar komponen Meter dengan label dan teks nilai:

```blade
<stisla::meter :block="true" value="14.2" min="0" max="16" aria-label="Memory" valueText="14.2 GB of 16 GB used">
    <stisla::meter.label>Memory</stisla::meter.label>
    <stisla::meter.value>14.2 GB of 16 GB</stisla::meter.value>
    <stisla::meter.track>
        <stisla::meter.bar tone="warning" value="89" />
    </stisla::meter.track>
</stisla::meter>
```

Atau menggunakan sintaks ringkas (shorthand):
```blade
<stisla::meter value="75" tone="primary" label="Storage" valueText="75%" />
```

---

## Variations & Features

### 1. Intent Tones (`tone="..."`)
Mengubah warna pengisi (fill) sesuai intent nada (`primary`, `success`, `warning`, `danger`, `info`):

```blade
<stisla::meter value="60" tone="primary" />
<stisla::meter value="60" tone="success" />
<stisla::meter value="60" tone="warning" />
<stisla::meter value="60" tone="danger" />
<stisla::meter value="60" tone="info" />
```

### 2. Sizes (`size="..."`)
Ukuran tinggi trek visual (`size="sm"`, default, `size="lg"`):

```blade
<stisla::meter value="60" size="sm" />
<stisla::meter value="60" />
<stisla::meter value="60" size="lg" />
```

### 3. Stacked Segmented Bars
Menyusun beberapa batang `<stisla::meter.bar>` di dalam satu trek untuk menampilkan segmentasi nilai:

```blade
<stisla::meter size="lg" :block="true" value="78" label="Monthly budget" valueText="$3,120 of $4,000">
    <stisla::meter.track>
        <stisla::meter.bar tone="primary" value="32" />
        <stisla::meter.bar tone="info" value="24" />
        <stisla::meter.bar tone="success" value="12" />
        <stisla::meter.bar tone="warning" value="10" />
    </stisla::meter.track>
</stisla::meter>
```

### 4. Stacked Meter with Legend
Memasangkan trek berlapis dengan keterangan legenda (`<stisla::meter.legend>` dan `<stisla::meter.legend-item>`):

```blade
<stisla::meter size="lg" :block="true">
    <stisla::meter.label>Macintosh HD</stisla::meter.label>
    <stisla::meter.value>203.95 GB of 245.11 GB used</stisla::meter.value>
    <stisla::meter.track>
        <stisla::meter.bar tone="danger" value="2" />
        <stisla::meter.bar tone="warning" value="6" />
    </stisla::meter.track>
    <stisla::meter.legend>
        <stisla::meter.legend-item dotTone="danger">Trash</stisla::meter.legend-item>
        <stisla::meter.legend-item dotTone="warning">Music</stisla::meter.legend-item>
    </stisla::meter.legend>
</stisla::meter>
```

---

## Props Reference

### `<stisla::meter>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `value` | `numeric` | `null` | Nilai aktual meter |
| `min` | `numeric` | `0` | Nilai batas minimum |
| `max` | `numeric` | `100` | Nilai batas maksimum |
| `label` | `string` | `null` | Teks label nama pengukuran |
| `valueText` | `string` | `null` | Teks format nilai (misal `'14.2 GB of 16 GB'`) |
| `tone` | `string` | `null` | Warna fill bar (`'primary'`, `'success'`, `'warning'`, `'danger'`, `'info'`) |
| `size` | `string` | `null` | Ukuran fisik trek (`'sm'`, `'lg'`) |
| `block` | `bool` | `false` | Menampilkan header label/nilai & legenda (`.meter--block`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--meter-*`) |

### Sub-Components Overview
- `<stisla::meter.track>`: Pembungkus trek latar belakang.
- `<stisla::meter.bar>`: Batang persentase (`tone`, `value`, `:vars`).
- `<stisla::meter.label>`: Teks judul label.
- `<stisla::meter.value>`: Teks angka/nilai.
- `<stisla::meter.legend>`: Baris legenda swatches.
- `<stisla::meter.legend-item>`: Item legenda (`dotTone`, `dotVars`).
- `<stisla::meter.legend-dot>`: Swatch warna titik legenda.

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::meter value="75" tone="primary" :vars="['height' => '1rem', 'radius' => '4px']" />
```

Variabel CSS yang tersedia untuk kustomisasi komponen Meter:

| Variable | Use |
| :--- | :--- |
| `--meter-height` | Tinggi trek meter |
| `--meter-radius` | Radius sudut trek meter |
| `--meter-header-gap` | Jarak spasi antara header label/nilai dan trek |
| `--meter-segment-gap` | Jarak spasi antar segmen pada trek berlapis |
| `--meter-bg` | Warna latar belakang trek (unfilled) |
| `--meter-bar-bg` | Warna pengisi batang meter & titik legenda |
| `--meter-legend-row-gap` | Jarak spasi antara trek dan baris legenda |
| `--meter-legend-dot-size` | Diameter titik swatch pada legenda |
