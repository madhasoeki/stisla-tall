---
trigger: always_on
---

# Stisla Livewire Component Development Standards (`components.md`)

Dokumen ini berisi standar dan panduan baku bagi AI Agent dalam membangun komponen UI Stisla versi TALL Stack (Blade + Livewire + Alpine.js + TailwindCSS) berdasarkan dokumentasi resmi di `docs/stisla/{nama-komponen}.md`.

---

## 1. Referensi Spesifikasi Komponen

Sebelum membuat komponen baru, AI Agent **WAJIB** membaca file spesifikasi komponen yang bersangkutan di:
`docs/stisla/{nama-komponen}.md`

Setiap komponen yang dibuat harus mengimplementasikan seluruh fitur, opsi atribut (`data-stisla-*`), variasi visual, dan slot yang dijelaskan pada dokumentasi tersebut.

---

## 2. Struktur Folder & Organisasi Komponen

Semua komponen diletakkan dalam sub-folder modular di bawah `resources/views/components/stisla/`:

```text
resources/views/components/stisla/
└── {nama-komponen}/
    ├── index.blade.php   <-- Main Wrapper Component (<stisla::{nama-komponen}>)
    ├── item.blade.php    <-- Sub-component jika bertipe compound (<stisla::{nama-komponen}.item>)
    └── ...               <-- Sub-komponen pendukung lainnya
```

---

## 3. Sintaks Pemanggilan Komponen

Dengan pendaftaran namespace `stisla` dan extension precompiler di `AppServiceProvider`:

- Komponen dipanggil tanpa awalan `x-`:
    - `<stisla::accordion>`
    - `<stisla::accordion.item>`
    - `<stisla::button>`
    - `<stisla::card>`

---

## 4. Standar Kode & Arsitektur Komponen

Setiap komponen Blade Stisla harus mengikuti aturan struktur berikut:

### A. Props Definition (`@props`) & Standar Penamaan Tunggal

Definisikan atribut opsional dengan nilai default yang tepat. **WAJIB menggunakan penamaan baku tunggal dan DILARANG membuat prop alias duplikat** (misalnya membuat dua prop untuk fungsi yang sama):

- **Warna / Intent**: Selalu gunakan prop `tone` (contoh: `tone="primary"`, `tone="success"`). **DILARANG** menggunakan `variant`.
- **Gaya / Mode**: Selalu gunakan prop `mode` (contoh: `mode="outline"`, `mode="ghost"`). **DILARANG** menggunakan `style`.
- **State Loading**: Selalu gunakan prop `busy` (contoh: `:busy="true"`). **DILARANG** menggunakan `loading`.
- **Ukuran / Size**: Selalu gunakan prop `size` (contoh: `size="sm"`, `size="lg"`). **DILARANG** membuat boolean prop terpisah seperti `:sm="true"`.
- **Teks Keterangan**: Selalu gunakan prop `description`. **DILARANG** menggunakan alias `text`.
- **Datalist**: Selalu gunakan prop `datalist`. **DILARANG** menggunakan alias `list`.

Contoh struktur `@props`:

```blade
@props([
    'title' => '',
    'tone' => null,
    'mode' => null,
    'size' => null,
    'open' => false,
    'disabled' => false,
    'busy' => false,
    'icon' => null,
    'heading' => 'h3',
    'id' => null,
    'vars' => [],
])
```

### B. Otomatisasi & Dynamic Variables Handling

```php
@php
    // Unique ID generator untuk ARIA & accessibility
    $id = $id ?? 'stisla-' . \Illuminate\Support\Str::random(8);

    // Dynamic CSS variables handling
    $styleString = '';
    if (!empty($vars) && is_array($vars)) {
        foreach ($vars as $key => $val) {
            $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--accordion-' . $key;
            $styleString .= "{$propName}: {$val}; ";
        }
    }
@endphp
```

### C. Attribute Merging (`$attributes`)

Pastikan HTML root elemen komponen menggunakan `$attributes->merge()` agar pengguna bebas menambahkan `class`, `style`, `id`, `wire:model`, atau atribut Alpine/HTML5 lainnya:

```blade
<div {{ $attributes->merge(['class' => 'accordion__item', 'data-state' => $state])->merge(['style' => trim($styleString)]) }}>
    ...
</div>
```

### D. Lucide Icon Integration

Gunakan `<i data-lucide="{{ $icon }}"></i>` untuk icon, dan sediakan slot opsional `$iconSlot` / `$icon` jika pengguna ingin memasukkan SVG kustom.

### E. Illustration & SVG Handling

Untuk komponen ilustrasi (`<stisla::illustration>`):
- **Wajib Inline SVG**: Jangan gunakan tag `<img>` karena file SVG eksternal tidak dapat membaca CSS custom properties/variables dari parent document.
- **Konversi Warna Static ke Class Hooks**: File SVG mentah hasil export dari Stisla website memiliki warna OKLCH statis. AI Agent harus mendeteksi dan mengonversi warna-warna tersebut menjadi class paint hooks bawaan Stisla:
  - `il-g0` - `il-g3` untuk gradient stops.
  - `il-disc-o` untuk outer backing disc.
  - `il-disc-i` untuk inner backing disc.
  - `il-obj` untuk shadow-cast object.
  - `il-badge` untuk status pip (disertai `fill="var(--_b)"`).
- **Filter Shadow**: Ganti hardcoded shadow `flood-color` di filter defs menjadi `flood-color="var(--illus-accent)"` agar bayangan ikut berubah warna secara dinamis.
- **Dynamic Unique IDs**: Ganti ID statis pada `<linearGradient>` dan `<filter>` (seperti `gl-`, `gm-`, `gd-`, `sh-`) dengan prefix `{{ $id }}` agar tidak terjadi bentrokan ID saat multiple SVG dirender di satu halaman.
- **Penyimpanan**: Simpan file SVG sebagai Blade templates di folder `resources/views/components/stisla/illustration/svg/{nama-art}.blade.php` agar dapat di-render secara dinamis via `<stisla::illustration name="nama-art">`.

---

## 5. Integrasi Client-Side Behavior (Vanilla / Alpine / Livewire)

1. **Vanilla JS Runtime Alignment**:
    - Sertakan semua atribut `data-stisla-*` yang dibutuhkan oleh `@stisla/vanilla` runtime (misal `data-stisla-accordion`, `data-stisla-accordion-trigger`).
2. **Alpine.js & Livewire State**:
    - Jika komponen membutuhkan interaktivitas murni client-side tanpa server roundtrip, gunakan `x-data` / `Alpine.js`.
    - Jika komponen membutuhkan sinkronisasi data dengan server Livewire, manfaatkan `wire:model`, `$wire`, atau event Livewire.

---

## 6. Integrasi Pemakaian Komponen Lain (Sibling Component Reuse & Safety)

Saat membangun komponen baru atau halaman showcase yang memanggil komponen Stisla lain yang sudah ada (contoh: `<stisla::media>` memanggil `<stisla::button>`):

1. **Cek Komponen Eksisting Terlebih Dahulu**: AI Agent **WAJIB** membaca file komponen eksisting di `resources/views/components/stisla/{nama-komponen}/index.blade.php` untuk memahami prop resmi yang tersedia dan cara pemanggilannya.
2. **Gunakan Prop yang Sudah Ada dengan Benar**: Panggil komponen pendukung sesuai prop baku yang sudah didefinisikan (contoh: `<stisla::button :icon-only="true" icon="heart" tone="neutral" mode="ghost" size="sm" />`).
3. **DILARANG Menambah Prop Duplikat pada Komponen Lain**: Jangan menambahkan prop baru pada komponen eksisting hanya karena salah panggil atau asumsi sepihak (contoh: membuat prop duplikat icon-only padahal sebenarnya prop tersebut sudah ada).
4. **Hanya Edit Komponen Eksisting Jika Memang Diperlukan**: Komponen eksisting HANYA boleh diedit jika ada fitur resmi di `docs/stisla/{nama-komponen}.md` yang benar-benar belum diimplementasikan.

---

## 7. Standar Pembuatan Halaman Showcase / Preview (`resources/views/pages/⚡{nama-komponen}.blade.php`)

Saat membuat halaman showcase/preview untuk komponen (`pages::⚡{nama-komponen}`):

1. **Preservasi Urutan & Section 1-Banding-1**: Halaman showcase **HARUS MEMILIKI URUTAN DAN JUDUL SECTION SEPERTI DOKUMENTASI SAKRAL STISLA** di `docs/stisla/{nama-komponen}.md`.
2. **DILARANG MENGGABUNG ATAU MERINGKAS SECTION**: Setiap section utama (`## Judul Section`) pada `docs/stisla/{nama-komponen}.md` **WAJIB diwakili oleh satu `<section>`** di halaman showcase dengan judul yang persis sama (contoh: `1. Basic`, `2. Labeled`, `3. Vertical`, `4. Inside a card body`, `5. Customization`).
3. **Sertakan SELURUH Contoh**: Semua variasi dan contoh penggunaan di dokumen sumber harus ditampilkan secara utuh pada halaman showcase.
4. **Pengecualian**: Pemisahan atau pengubahan struktur section HANYA boleh dilakukan jika pengguna (USER) secara eksplisit meminta perubahan tersebut.

---

## 8. Prosedur Pembuatan Komponen Baru (Workflow)

Saat diperintahkan membuat komponen baru:

1. **Baca Dokumen**: `view_file` pada `docs/stisla/{nama-komponen}.md`.
2. **Buat File Komponen**: Buat `index.blade.php` (dan sub-komponennya jika ada) di `resources/views/components/stisla/{nama-komponen}/`.
3. **Update Halaman Test / Showcase**: Buat/update halaman testing di `resources/views/pages/⚡{nama-komponen}.blade.php` dengan menyertakan SELURUH contoh dari dokumen spesifikasi mengikuti alur section 1-banding-1.
4. **Buat Dokumentasi TALL**: Buat file dokumentasi TALL Stack di `docs/tall/{nama-komponen}.md` mengikuti alur section 1-banding-1 dari `docs/stisla/{nama-komponen}.md`.
5. **Update Route `routes/web.php`**: Ubah route target utama di `routes/web.php` menjadi `Route::livewire('/', 'pages::{nama-komponen}');` (modifikasi baris yang ada, DILARANG membuat route baru).
6. **Update README.md**: Daftarkan komponen baru di tabel `README.md`.
7. **Format & Verifikasi**:
    - Jalankan `vendor/bin/pint --dirty --format agent`.
    - Jalankan test render via `php artisan tinker --execute 'echo view("pages.⚡{nama-komponen}")->render();'`.
