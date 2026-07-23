---
trigger: always_on
---

# Stisla Customization Guidelines for AI Agents

Dokumen ini berisi aturan dan panduan bagi AI Agent saat menerapkan atau merekayasa ulang sistem kustomisasi (Theming, Styling, dan Composition) pada komponen Stisla di Laravel / Livewire / TALL Stack.

---

## 1. Prinsip Dasar Kustomisasi Stisla

1. **CSS Custom Properties First (Token-Driven)**
    - Setiap elemen visual Stisla dikendalikan oleh CSS Custom Properties (`--color-*`, `--radius-*`, `--spacing`, `--shadow-*`, dan `--component-*`).
    - Kustomisasi dilakukan dengan **mendeklarasikan ulang variabel CSS**, BUKAN dengan menambahkan rule CSS `!important` atau menimpa selector BEM secara paksa.

2. **Hierarki Cakupan Overrides (Cascade Scopes)**
   Kustomisasi dapat diterapkan pada 4 level cakupan:
    - **Global (`:root` / `@theme`)**: Berlaku untuk seluruh aplikasi.
    - **Theme Variant (`[data-theme="dark"]` / `[data-theme="brand"]`)**: Berlaku ketika atribut tema diaktifkan pada elemen/wrapper.
    - **Scoped Wrapper**: Berlaku untuk komponen di dalam elemen pembungkus tertentu.
    - **Single Element (Inline / `:vars` Prop)**: Berlaku hanya pada satu instance komponen tertentu.

3. **Color Contrast & Foreground Pairing**
    - Setiap token warna latar belakang berpasangan dengan `-foreground` (misal: `--color-primary` berpasangan dengan `--color-primary-foreground`).
    - Apabila mengubah token background, **WAJIB** mengubah/memeriksa token foreground pasangannya agar rasio kontras teks (AA Contrast) tetap terjaga.

---

## 2. Aturan Kustomisasi pada Component Architecture

Saat membuat atau menggunakan komponen Blade / Livewire Stisla, AI Agent harus mematuhi aturan berikut:

### A. Mendukung Prop `:vars` dan `style` Passthrough

Setiap komponen Stisla **harus** mendukung passing CSS variables via prop `:vars` (berupa array PHP) maupun atribut `style` bawaan:

```blade
{{-- Penggunaan via :vars array --}}
<stisla::accordion :vars="['gap' => '1rem', 'radius' => '0px', 'item-open-bg' => 'oklch(0.95 0.05 280)']">
    ...
</stisla::accordion>

{{-- Penggunaan via style attribute biasa --}}
<stisla::accordion style="--accordion-gap: 1.5rem; --accordion-radius: 0.5rem;">
    ...
</stisla::accordion>
```

### B. Konversi Nama Variabel Scoped Komponen

Secara otomatis, key di dalam prop `vars` yang tidak diawali `--` harus dipetakan ke prefix variabel komponen (misal: `gap` pada `<stisla::accordion>` otomatis menjadi `--accordion-gap`).

```php
// Implementasi standar di PHP/Blade Component:
$styleString = '';
if (!empty($vars) && is_array($vars)) {
    foreach ($vars as $key => $val) {
        $propName = \Illuminate\Support\Str::startsWith($key, '--') ? $key : '--' . $componentPrefix . '-' . $key;
        $styleString .= "{$propName}: {$val}; ";
    }
}
```

### C. Color Mix & Derivasi State

- Stisla menggunakan `color-mix(in oklch, ...)` untuk merender state hover, active, rim, dan focus secar amaterialized.
- Jika pengguna ingin mengubah warna utama brand, cukup ubah `--color-primary` dan `--color-primary-foreground`. State hover & focus akan menghitung sendiri secara otomatis.

### D. Dark Mode Integration

- Dark mode di Stisla dijalankan melalui atribut `data-theme="dark"` atau class `.dark` pada root `<html>` atau wrapper.
- Komponen tidak perlu mengubah logika PHP internal untuk Dark Mode; pastikan token warna membaca `var(--color-surface)`, `var(--color-foreground)`, dan `var(--color-border)`.

---

## 3. Density & Sizing Model

1. **Global Density (`--spacing`)**:
    - `0.2rem`: Compact (Admin dashboard / dense tabular UI).
    - `0.25rem`: Default.
    - `0.28rem`: Comfortable (Marketing / reading flow).
2. **Component Sizing Knobs**:
    - `--<component>-height`: Mengontrol ukuran fisik elemen (misal `--button-height`).
    - `--<component>-font-size`: Mengontrol ukuran teks label.
    - `--<component>-icon-size`: Mengontrol ukuran ikon saja tanpa merubah tinggi shape.

---

## 4. Panduan Komposisi (Composition Over New CSS)

- **Compose First**: Selalu utamakan mengombinasikan komponen dasar yang sudah ada (misal Card + Media + Avatar + Button) daripada membuat kelas CSS / komponen baru dari nol.
- **Modifier First**: Jika membutuhkan variasi dari komponen yang ada, buatlah modifier class (misal `.card--product`) daripada membuat komponen yang berdiri sendiri.
- **New Component**: Buat komponen baru HANYA jika struktur anatomi dan perilakunya benar-benar berbeda dari komponen yang sudah tersedia.
