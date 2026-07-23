# Placeholder Component (TALL Stack)

Komponen Placeholder (`<stisla::placeholder>`) menyediakan tampilan bar kerangka (skeleton loader) sebagai penanda tempat sementara untuk konten yang belum selesai dimuat.

## Basic Usage

Penggunaan dasar komponen Placeholder:

```blade
<div class="max-w-sm w-full" aria-hidden="true">
    <stisla::placeholder class="w-1/2" />
    <stisla::placeholder class="w-full" />
    <stisla::placeholder class="w-3/4" />
</div>
```

---

## Variations & Features

### 1. Color Tints (`tone="..."`)
Mewarnai bar kerangka menggunakan warna intent semantik (`primary`, `success`, `danger`, `warning`, `info`):

```blade
<stisla::placeholder tone="primary" class="w-full" />
<stisla::placeholder tone="success" class="w-full" />
```

### 2. Animations (`animation="..."`)
Animasi denyut pulsa (`animation="glow"`) atau efek siksaan gelombang kilau (`animation="wave"`):

```blade
<stisla::placeholder animation="glow" class="w-full" />
<stisla::placeholder animation="wave" class="w-full" />
```

### 3. Sizes (`size="..."`)
Ukuran tinggi bar relatif terhadap font (`size="sm"`, default, `size="lg"`):

```blade
<stisla::placeholder size="sm" class="w-full" />
<stisla::placeholder size="lg" class="w-full" />
```

### 4. Composed Skeletons (`<stisla::placeholder.avatar>`, `<stisla::placeholder.text>`)
Sub-komponen pembantu untuk membuat kerangka profil avatar dan bar paragraf teks secara instan:

```blade
<stisla::card class="max-w-sm w-full" aria-hidden="true">
    <stisla::card.body class="flex items-center gap-3">
        <stisla::placeholder.avatar size="lg" animation="glow" />
        <stisla::placeholder.text :lines="2" animation="glow" />
    </stisla::card.body>
</stisla::card>
```

---

## Props Reference

### `<stisla::placeholder>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'span'` | Tag HTML elemen (`'span'`, `'div'`) |
| `animation` | `string` | `null` | Jenis animasi (`'glow'`, `'wave'`) |
| `size` | `string` | `null` | Ukuran tinggi bar (`'sm'`, `'lg'`) |
| `tone` | `string` | `null` | Warna intent semantik (`'primary'`, `'success'`, `'danger'`, `'warning'`, `'info'`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--placeholder-*`) |

### Sub-Components Overview
- `<stisla::placeholder.text>`: Kerangka paragraf multi-baris (`lines`, `animation`, `size`, `tone`).
- `<stisla::placeholder.avatar>`: Kerangka gambar avatar (`size='xs'|'sm'|'md'|'lg'|'xl'`, `shape='circle'|'square'`, `animation`, `tone`).

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::placeholder animation="glow" :vars="['height' => '1.5rem', 'radius' => '9999px']" class="w-full" />
```

Variabel CSS yang tersedia untuk kustomisasi komponen Placeholder:

| Variable | Use |
| :--- | :--- |
| `--placeholder-height` | Tinggi fisik bar kerangka |
| `--placeholder-bg` | Warna latar fill |
| `--placeholder-opacity` | Opasitas transparansi bar |
| `--placeholder-radius` | Radius sudut melengkung |
