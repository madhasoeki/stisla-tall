# Indicator Component (TALL Stack)

Komponen Indicator menyediakan titik indikator status kecil (*status dot*) untuk menandai kehadiran, keaktifan (*liveness*), atau pesan yang belum dibaca.

## Basic Usage

Penggunaan dasar komponen indicator:

```blade
<span class="inline-flex items-center gap-2">
    <stisla::indicator /> Offline
</span>
```

---

## Variations & Features

### 1. Tone Intents (`tone="primary"` / `success` / `warning` / `danger` / `info`)
Variasi nada warna indikator:

```blade
<stisla::indicator tone="primary" />
<stisla::indicator tone="success" />
<stisla::indicator tone="warning" />
<stisla::indicator tone="danger" />
<stisla::indicator tone="info" />
```

### 2. Pulse Animation (`:pulse="true"`)
Menambahkan efek lingkaran berdetak (*pulse halo*) untuk sinyal aktif/live:

```blade
<span class="inline-flex items-center gap-2">
    <stisla::indicator tone="success" :pulse="true" /> Online
</span>
<span class="inline-flex items-center gap-2">
    <stisla::indicator tone="danger" :pulse="true" /> Live
</span>
```

### 3. Sizes (`size="sm"` / `size="lg"`)
Variasi ukuran diameter titik indikator:

```blade
<stisla::indicator tone="success" size="sm" />
<stisla::indicator tone="success" />
<stisla::indicator tone="success" size="lg" />
```

### 4. Pinned to a Host
Menyematkan titik indikator pada sudut elemen pembungkus (misal tombol ikon notifikasi):

```blade
<span class="relative inline-flex">
    <stisla::button mode="outline" tone="neutral" :icon-only="true" icon="bell" aria-label="Notifications" />
    <stisla::indicator tone="danger" class="absolute -top-1 -right-1" :vars="['ring-width' => '2px']" />
</span>
```

---

## Props Reference (`<stisla::indicator>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `tone` / `variant` | `string` | `null` | Nada warna konteks (`'primary'`, `'success'`, `'warning'`, `'danger'`, `'info'`) |
| `pulse` | `bool` | `false` | Menampilkan animasi detak (*expanding halo*) |
| `size` | `string` | `null` | Ukuran diameter indikator (`'sm'`, `'lg'`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom untuk override gaya visual |

---

## Customization

Penimpaan visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::indicator :vars="['size' => '1rem', 'color' => 'oklch(0.6 0.25 140)']" />
```

Variabel CSS yang tersedia untuk kustomisasi komponen Indicator:

| Variable | Use |
| :--- | :--- |
| `--indicator-size` | Diameter fisik titik indikator |
| `--indicator-color` | Warna isi titik dan lingkaran pulse halo |
| `--indicator-ring-width` | Ketebalan ring pemisah dari permukaan host |
| `--indicator-ring-color` | Warna ring pemisah |
| `--indicator-pulse-duration` | Durasi loop animasi pulse |
