# Carousel Component (TALL Stack)

Komponen Carousel menyediakan tayangan slide (*slideshow*) interaktif dengan kontrol navigasi tepi (*prev/next*), titik indikator, overlay teks deskripsi (*caption*), serta dukungan gerak usap (*touch swipe*), keyboard, dan autoplay.

## Basic Usage

Penggunaan dasar komponen carousel (16:9 aspect ratio standar):

```blade
<stisla::carousel label="Gallery" :controls="true" :indicators="3">
    <stisla::carousel.slide label="1 of 3">
        <div class="h-full w-full bg-[#0ea5e9] flex items-center justify-center text-white text-2xl font-semibold">Slide 1</div>
        <stisla::carousel.caption title="Mountain vista" description="A wide alpine panorama." />
    </stisla::carousel.slide>

    <stisla::carousel.slide label="2 of 3">
        <div class="h-full w-full bg-[#8b5cf6] flex items-center justify-center text-white text-2xl font-semibold">Slide 2</div>
    </stisla::carousel.slide>

    <stisla::carousel.slide label="3 of 3">
        <div class="h-full w-full bg-[#10b981] flex items-center justify-center text-white text-2xl font-semibold">Slide 3</div>
    </stisla::carousel.slide>
</stisla::carousel>
```

---

## Variations & Features

### 1. Custom Layout with Sub-Components (`<stisla::carousel.viewport>`)
Saat mengisikan tombol kontrol dan indikator kustom di dalam carousel, bungkus slide di dalam `<stisla::carousel.viewport>` agar tombol kontrol berada di luar trek slide:

```blade
<stisla::carousel label="Travel destinations">
    <stisla::carousel.viewport>
        <stisla::carousel.slide label="1 of 3">...</stisla::carousel.slide>
        <stisla::carousel.slide label="2 of 3">...</stisla::carousel.slide>
    </stisla::carousel.viewport>

    <stisla::carousel.controls />
    <stisla::carousel.indicators count="2" />
</stisla::carousel>
```

### 2. Without Fixed Aspect Ratio (`:aspect="false"`)
Menyesuaikan tinggi carousel secara dinamis dengan isi slide (sangat cocok untuk tayangan teks atau card):

```blade
<stisla::carousel :aspect="false" label="Quotes" :controls="true">
    <stisla::carousel.slide>
        <div class="p-8 bg-surface">
            <p class="mt-0 text-lg">"It is the framework I reach for first."</p>
            <p class="mb-0 text-muted-foreground">— A happy developer</p>
        </div>
    </stisla::carousel.slide>
</stisla::carousel>
```

### 3. Captions Overlay (`<stisla::carousel.caption>`)
Menyajikan hamparan teks deskripsi di bagian bawah slide dengan gradien pelindung:

```blade
<stisla::carousel.slide>
    <img src="photo.jpg" alt="Photo" />
    <stisla::carousel.caption title="Above the clouds" description="A break in the weather over the alps." />
</stisla::carousel.slide>
```

### 4. Card Content inside Slides
Menempatkan komponen `<stisla::card>` di dalam slide carousel:

```blade
<stisla::carousel :aspect="false" :loop="true">
    <stisla::carousel.viewport>
        <stisla::carousel.slide>
            <stisla::card>
                <stisla::card.body>
                    <p>Testimonial text...</p>
                </stisla::card.body>
            </stisla::card>
        </stisla::carousel.slide>
    </stisla::carousel.viewport>
    <stisla::carousel.controls />
</stisla::carousel>
```

### 5. Autoplay & Loop (`:autoplay="true"`, `:loop="true"`)
Pewaktu otomatis (*autoplay*) setiap 4 detik dan perulangan tak terbatas (*infinite loop*):

```blade
<stisla::carousel :autoplay="true" :loop="true" :controls="true" :indicators="3">
    ...
</stisla::carousel>
```

---

## Props Reference

### `<stisla::carousel>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `label` | `string` | `'Gallery'` | Atribut aksesibilitas `aria-label` carousel |
| `aspect` | `bool` | `true` | Rasio aspek bawaan 16:9. Set `false` untuk tinggi dinamis (`.carousel--no-aspect`) |
| `autoplay` | `bool` | `false` | Mengaktifkan pergantian slide otomatis (`data-stisla-carousel-autoplay="true"`) |
| `loop` | `bool` | `false` | Perulangan tak terbatas dari slide terakhir kembali ke awal (`data-stisla-carousel-loop="true"`) |
| `controls` | `bool` | `false` | Merender tombol kontrol prev/next secara otomatis |
| `indicators` | `bool`/`int` | `false` | Merender baris indikator secara otomatis |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--carousel-*`) |

### Sub-Components Overview
- `<stisla::carousel.viewport>`: Pembungkus bidang viewport dan track slide (`.carousel__viewport` > `.carousel__track`).
- `<stisla::carousel.slide>`: Kontainer per slide (`role="group"`).
- `<stisla::carousel.caption>`: Hamparan judul (`title`) dan deskripsi (`description`).
- `<stisla::carousel.controls>`: Pasangan tombol kontrol prev dan next.
- `<stisla::carousel.control>`: Tombol kontrol individual (`direction="prev"` / `"next"`).
- `<stisla::carousel.indicators>`: Kontainer baris indikator titik (`count`, `active`).
- `<stisla::carousel.indicator>`: Tombol indikator titik individual (`active`).

---

## Customization

Penimpaan visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::carousel :vars="[
    'control-bg' => 'var(--color-surface)',
    'indicator-bg-active' => 'var(--color-primary)'
]">
    ...
</stisla::carousel>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Carousel:

| Variable | Use |
| :--- | :--- |
| `--carousel-radius` | Corner radius viewport carousel |
| `--carousel-aspect-ratio` | Rasio aspek viewport (default 16/9) |
| `--carousel-slide-gap` | Jarak spasi antar slide |
| `--carousel-control-size` | Ukuran tombol chip kontrol prev/next |
| `--carousel-control-inset` | Inset posisi tombol kontrol dari tepi |
| `--carousel-control-bg` | Warna latar tombol kontrol |
| `--carousel-color` | Warna ikon tombol kontrol |
| `--carousel-indicator-size` | Ukuran diameter titik indikator |
| `--carousel-indicator-width-active` | Lebar titik indikator saat aktif (*pill shape*) |
| `--carousel-indicator-bg-active` | Warna titik indikator aktif |
