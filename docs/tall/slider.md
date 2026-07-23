# Slider Component (TALL Stack)

Komponen Slider menyediakan input bilah geser (*filled-track slider*) untuk memilih nilai angka dari rentang kontinu, terintegrasi penuh dengan JavaScript runtime Stisla (`data-stisla-slider`).

## Basic Usage

Penggunaan dasar komponen slider:

```blade
<stisla::field label="Brightness" for="basicSlider" class="max-w-xl">
    <stisla::slider id="basicSlider" name="brightness" value="40" value-text="{value}%" />
</stisla::field>
```

---

## Variations & Features

### 1. Value Display Readout (`stisla:slider:input`)
Mendengarkan event `stisla:slider:input` untuk memperbarui nilai elemen `<output>` secara *realtime* saat slider digeser:

```blade
<stisla::field class="max-w-xl">
    <div class="flex flex-wrap justify-between items-baseline">
        <stisla::field.label for="outputSlider">Opacity</stisla::field.label>
        <output for="outputSlider" class="text-muted-foreground">30</output>
    </div>
    <stisla::slider id="outputSlider" name="opacity" value="30" />
</stisla::field>

<script>
  document.getElementById('outputSlider')?.addEventListener('stisla:slider:input', function (e) {
    document.querySelector('output[for="outputSlider"]').value = e.detail.value;
  });
</script>
```

### 2. Min, Max & Step Bounds (`min`, `max`, `step`)
Membatasi nilai minimum, maksimum, dan kelipatan pergeseran (*step increments*):

```blade
<stisla::slider min="2000" max="2030" value="2026" />
<stisla::slider min="0" max="5" step="0.5" value="3" />
```

### 3. Sizes (`size="sm"` / `size="lg"`)
Variasi ukuran tinggi track dan thumb slider (`sm` atau `lg`).

```blade
<stisla::slider size="sm" value="40" />
<stisla::slider value="60" />
<stisla::slider size="lg" value="80" />
```

### 4. Disabled & Invalid States (`:disabled`, `:invalid`)
Menonaktifkan interaksi (`:disabled="true"`) atau menandai kesalahan validasi server (`:invalid="true"`):

```blade
<stisla::slider value="40" :disabled="true" />
<stisla::slider value="60" :invalid="true" />
```

---

## Props Reference (`<stisla::slider>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `id` | `string` | `null` | Atribut ID elemen pembungkus slider |
| `name` | `string` | `null` | Atribut nama elemen `<input type="hidden">` |
| `value` | `mixed` | `null` | Nilai posisi awal slider (`data-value`) |
| `min` | `mixed` | `null` | Batas nilai minimum (`data-min`, default: `0`) |
| `max` | `mixed` | `null` | Batas nilai maksimum (`data-max`, default: `100`) |
| `step` | `mixed` | `null` | Kelipatan nilai pergeseran (`data-step`, default: `1`) |
| `valueText` / `value-text` | `string` | `null` | Template pengumuman screen reader (`data-value-text="{value}%"`) |
| `size` | `string` | `null` | Ukuran varian tinggi slider (`'sm'`, `'lg'`) |
| `disabled` | `bool` | `false` | Menonaktifkan interaksi pointer dan keyboard (`data-disabled="true"`) |
| `invalid` | `bool` | `false` | Menandai kesalahan validasi (`aria-invalid="true"`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom untuk override gaya visual |

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::slider
    value="50"
    :vars="[
        'fill' => 'oklch(0.6 0.25 140)',
        'ring' => 'oklch(0.6 0.25 140 / 0.3)'
    ]"
/>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Slider:

| Variable | Use |
| :--- | :--- |
| `--slider-height` | Tinggi fisik pembungkus track slider |
| `--slider-thumb-width` | Lebar bentuk tombol thumb (pill vertikal) |
| `--slider-thumb-height` | Tinggi tombol thumb |
| `--slider-radius` | Corner radius track dan thumb |
| `--slider-track-bg` | Warna latar segmen track belum terisi |
| `--slider-fill` | Warna segmen track terisi |
| `--slider-thumb-bg` | Warna tombol thumb |
| `--slider-ring` | Warna ring fokus halo |
