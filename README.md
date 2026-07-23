# Stisla UI Components for TALL Stack

Pustaka komponen UI Stisla versi **TALL Stack (TailwindCSS v4, Alpine.js, Livewire v4, Laravel)**. Paket ini mentransformasi komponen UI Vanilla CSS + JS Stisla v3 menjadi komponen Blade & Livewire yang modular, elegan, cerdas, dan siap pakai di ekosistem Laravel.

---

## Daftar Isi (Table of Contents)

1. [Prasyarat & Persyaratan Sistem](#prasyarat--persyaratan-sistem)
2. [Instalasi Cepat](#instalasi-cepat)
3. [Arsitektur & Prinsip Desain](#arsitektur--prinsip-desain)
4. [Panduan Kustomisasi & Theming](#panduan-kustomisasi--theming)
   - [A. Global Brand Color](#a-global-brand-color)
   - [B. Density & Spacing](#b-density--spacing)
   - [C. Component-Scoped Variables (:vars Prop)](#c-component-scoped-variables-vars-prop)
   - [D. Mode Gelap (Dark Mode)](#d-mode-gelap-dark-mode)
5. [Aturan Internal & Pedoman Pengembang](#aturan-internal--pedoman-pengembang)
6. [Daftar Komponen & Status](#daftar-komponen--status)

---

## Prasyarat & Persyaratan Sistem

Sebelum menggunakan paket Stisla TALL Stack, pastikan proyek Laravel Anda memenuhi persyaratan berikut:

- **PHP**: `^8.2`
- **Laravel Framework**: `^11.0` / `^12.0` / `v13`
- **Livewire**: `^3.0` / `^4.0` (Otomatis terinstal saat `stisla:install` jika belum ada)
- **TailwindCSS**: `^4.0`

---

## Instalasi Cepat

Pasang paket via Composer dan jalankan installer otomatis Stisla:

```bash
composer require madhasoeki/stisla

php artisan stisla:install
```

### Apa yang dilakukan oleh `php artisan stisla:install`?
* **Pengecekan Livewire**: Mengecek apakah Livewire terpasang. Jika belum, installer akan memasangkannya via Composer secara otomatis.
* **Smart Dependencies Check**: Mengecek & menyuntikkan paket npm `@stisla/css`, `@stisla/vanilla`, dan `lucide` ke dalam `package.json` tanpa menimpa library yang sudah ada.
* **Script Injection**: Menyuntikkan import Stisla dan listener ikon Lucide ke `resources/js/app.js`.
* **Tailwind v4 Token Registration**: Menyuntikkan skema variabel warna Stisla ke blok `@theme` di `resources/css/app.css`.
* **Build Bundle**: Menjalankan `npm run build` untuk langsung menghasilkan bundel CSS & JS yang siap pakai.

---

## Arsitektur & Prinsip Desain

- **Token-Driven**: Setiap komponen dikendalikan oleh CSS Custom Properties (`--color-*`, `--radius-*`, `--spacing`, `--shadow-*`).
- **Sintaks Komponen Ringkas**: Seluruh komponen dipanggil dengan namespace `stisla` tanpa awalan `x-`:
  ```blade
  <stisla::button tone="primary" icon="plus">
      Tambah Data
  </stisla::button>
  ```
- **Compound Components**: Komponen kompleks dipecah menjadi komponen utama dan sub-komponen modular (misal `<stisla::accordion>` dan `<stisla::accordion.item>`).

---

## Panduan Kustomisasi & Theming

Kustomisasi komponen Stisla sangat fleksibel karena digerakkan sepenuhnya oleh variabel CSS (*CSS Custom Properties*).

### A. Global Brand Color
Ubah warna brand utama dengan mendeklarasikan ulang `--color-primary` dan `--color-primary-foreground` di `app.css` atau `:root`:

```css
:root {
  --color-primary: oklch(0.58 0.22 285); /* Warna Violet */
  --color-primary-foreground: oklch(1 0 0); /* Warna teks di atas primary */
}
```
State hover, active, focus ring, dan highlight akan otomatis terhitung (*re-compute*) melalui fungsi `color-mix(in oklch, ...)`.

### B. Density & Spacing
Mengatur kepadatan ukuran komponen di seluruh aplikasi dengan mengubah basis `--spacing`:

- `0.2rem` : Compact (Admin Dashboard / Tabel padat).
- `0.25rem`: Default.
- `0.28rem`: Comfortable (Halaman Marketing / Mode Baca).

```css
:root {
  --spacing: 0.2rem;
}
```

### C. Component-Scoped Variables (`:vars` Prop)
Setiap komponen mendukung prop `:vars` untuk mengubah variabel CSS khusus pada satu instance komponen tanpa memengaruhi komponen lain:

```blade
<stisla::accordion :vars="['gap' => '1.5rem', 'radius' => '0px', 'item-open-bg' => 'oklch(0.95 0.05 280)']">
    <stisla::accordion.item title="Brutalist Accordion">
        Konten accordion...
    </stisla::accordion.item>
</stisla::accordion>
```

### D. Mode Gelap (Dark Mode)
Stisla secara otomatis mendukung mode gelap melalui atribut `data-theme="dark"` atau kelas `.dark` pada tag `<html>` atau wrapper:

```blade
<html data-theme="dark">
  <!-- Seluruh komponen Stisla akan otomatis beralih ke tema gelap -->
</html>
```

---

## Aturan Internal & Pedoman Pengembang

Proyek ini dilengkapi dengan panduan standar pengoperasian untuk pengembangan dan AI Agent:

- **[create-component-guide.md](.agents/rules/create-component-guide.md)**: Standar arsitektur & struktur file komponen Blade/Livewire.
- **[customization-guide.md](.agents/rules/customization-guide.md)**: Panduan penerapan prinsip kustomisasi Stisla.
- **[create-documentation-guide.md](.agents/rules/create-documentation-guide.md)**: Aturan penulisan dokumentasi komponen pengguna di folder `docs/tall/`.

---

## Daftar Komponen & Status

Berikut adalah daftar komponen Stisla yang sudah diimplementasikan:

### 1. Forms

| Komponen | Status | Dokumentasi TALL | Referensi Stisla |
| :--- | :--- | :--- | :--- |
| **Autocomplete** |  Ready | [docs/tall/autocomplete.md](docs/tall/autocomplete.md) | [docs/stisla/autocomplete.md](docs/stisla/autocomplete.md) |
| **Checkbox** |  Ready | [docs/tall/checkbox.md](docs/tall/checkbox.md) | [docs/stisla/checkbox.md](docs/stisla/checkbox.md) |
| **Combobox** |  Ready | [docs/tall/combobox.md](docs/tall/combobox.md) | [docs/stisla/combobox.md](docs/stisla/combobox.md) |
| **Field** |  Ready | [docs/tall/field.md](docs/tall/field.md) | [docs/stisla/field.md](docs/stisla/field.md) |
| **Input** |  Ready | [docs/tall/input.md](docs/tall/input.md) | [docs/stisla/input.md](docs/stisla/input.md) |
| **Input Group** |  Ready | [docs/tall/input-group.md](docs/tall/input-group.md) | [docs/stisla/input-group.md](docs/stisla/input-group.md) |
| **Radio** |  Ready | [docs/tall/radio.md](docs/tall/radio.md) | [docs/stisla/radio.md](docs/stisla/radio.md) |
| **Select** |  Ready | [docs/tall/select.md](docs/tall/select.md) | [docs/stisla/select.md](docs/stisla/select.md) |
| **Slider** |  Ready | [docs/tall/slider.md](docs/tall/slider.md) | [docs/stisla/slider.md](docs/stisla/slider.md) |
| **Switch** |  Ready | [docs/tall/switch.md](docs/tall/switch.md) | [docs/stisla/switch.md](docs/stisla/switch.md) |
| **Textarea** |  Ready | [docs/tall/textarea.md](docs/tall/textarea.md) | [docs/stisla/textarea.md](docs/stisla/textarea.md) |

### 2. Components

| Komponen | Status | Dokumentasi TALL | Referensi Stisla |
| :--- | :--- | :--- | :--- |
| **Accordion** |  Ready | [docs/tall/accordion.md](docs/tall/accordion.md) | [docs/stisla/accordion.md](docs/stisla/accordion.md) |
| **Alert** |  Ready | [docs/tall/alert.md](docs/tall/alert.md) | [docs/stisla/alert.md](docs/stisla/alert.md) |
| **Avatar** |  Ready | [docs/tall/avatar.md](docs/tall/avatar.md) | [docs/stisla/avatar.md](docs/stisla/avatar.md) |
| **Avatar Group** |  Ready | [docs/tall/avatar-group.md](docs/tall/avatar-group.md) | [docs/stisla/avatar-group.md](docs/stisla/avatar-group.md) |
| **Badge** |  Ready | [docs/tall/badge.md](docs/tall/badge.md) | [docs/stisla/badge.md](docs/stisla/badge.md) |
| **Breadcrumb** |  Ready | [docs/tall/breadcrumb.md](docs/tall/breadcrumb.md) | [docs/stisla/breadcrumb.md](docs/stisla/breadcrumb.md) |
| **Button** |  Ready | [docs/tall/button.md](docs/tall/button.md) | [docs/stisla/button.md](docs/stisla/button.md) |
| **Button Group** |  Ready | [docs/tall/button-group.md](docs/tall/button-group.md) | [docs/stisla/button-group.md](docs/stisla/button-group.md) |
| **Card** |  Ready | [docs/tall/card.md](docs/tall/card.md) | [docs/stisla/card.md](docs/stisla/card.md) |
| **Carousel** |  Ready | [docs/tall/carousel.md](docs/tall/carousel.md) | [docs/stisla/carousel.md](docs/stisla/carousel.md) |
| **Collapsible** |  Ready | [docs/tall/collapsible.md](docs/tall/collapsible.md) | [docs/stisla/collapsible.md](docs/stisla/collapsible.md) |
| **Empty State** |  Ready | [docs/tall/empty-state.md](docs/tall/empty-state.md) | [docs/stisla/empty-state.md](docs/stisla/empty-state.md) |
| **Icon Box** |  Ready | [docs/tall/icon-box.md](docs/tall/icon-box.md) | [docs/stisla/icon-box.md](docs/stisla/icon-box.md) |
| **Illustration** |  Ready | [docs/tall/illustration.md](docs/tall/illustration.md) | [docs/stisla/illustration.md](docs/stisla/illustration.md) |
| **Indicator** |  Ready | [docs/tall/indicator.md](docs/tall/indicator.md) | [docs/stisla/indicator.md](docs/stisla/indicator.md) |
| **Kbd** |  Ready | [docs/tall/kbd.md](docs/tall/kbd.md) | [docs/stisla/kbd.md](docs/stisla/kbd.md) |
| **Link** |  Ready | [docs/tall/link.md](docs/tall/link.md) | [docs/stisla/link.md](docs/stisla/link.md) |
| **List Group** |  Ready | [docs/tall/list-group.md](docs/tall/list-group.md) | [docs/stisla/list-group.md](docs/stisla/list-group.md) |
| **Media** |  Ready | [docs/tall/media.md](docs/tall/media.md) | [docs/stisla/media.md](docs/stisla/media.md) |
| **Meter** |  Ready | [docs/tall/meter.md](docs/tall/meter.md) | [docs/stisla/meter.md](docs/stisla/meter.md) |
| **Navbar** |  Ready | [docs/tall/navbar.md](docs/tall/navbar.md) | [docs/stisla/navbar.md](docs/stisla/navbar.md) |
| **Page** |  Ready | [docs/tall/page.md](docs/tall/page.md) | [docs/stisla/page.md](docs/stisla/page.md) |
| **Pagination** |  Ready | [docs/tall/pagination.md](docs/tall/pagination.md) | [docs/stisla/pagination.md](docs/stisla/pagination.md) |
| **Placeholder** |  Ready | [docs/tall/placeholder.md](docs/tall/placeholder.md) | [docs/stisla/placeholders.md](docs/stisla/placeholders.md) |
| **Progress** |  Ready | [docs/tall/progress.md](docs/tall/progress.md) | [docs/stisla/progress.md](docs/stisla/progress.md) |
| **Scroll Area** |  Ready | [docs/tall/scroll-area.md](docs/tall/scroll-area.md) | [docs/stisla/scroll-area.md](docs/stisla/scroll-area.md) |
| **Separator** |  Ready | [docs/tall/separator.md](docs/tall/separator.md) | [docs/stisla/separator.md](docs/stisla/separator.md) |
| **Sidebar** |  Ready | [docs/tall/sidebar.md](docs/tall/sidebar.md) | [docs/stisla/sidebar.md](docs/stisla/sidebar.md) |
| **Spinner** |  Ready | [docs/tall/spinner.md](docs/tall/spinner.md) | [docs/stisla/spinner.md](docs/stisla/spinner.md) |
| **Table** |  Ready | [docs/tall/table.md](docs/tall/table.md) | [docs/stisla/table.md](docs/stisla/table.md) |
| **Tabs** |  Ready | [docs/tall/tabs.md](docs/tall/tabs.md) | [docs/stisla/tabs.md](docs/stisla/tabs.md) |
| **Timeline** |  Ready | [docs/tall/timeline.md](docs/tall/timeline.md) | [docs/stisla/timeline.md](docs/stisla/timeline.md) |
| **Toggle** |  Ready | [docs/tall/toggle.md](docs/tall/toggle.md) | [docs/stisla/toggle.md](docs/stisla/toggle.md) |
| **Toggle Group** |  Ready | [docs/tall/toggle-group.md](docs/tall/toggle-group.md) | [docs/stisla/toggle-group.md](docs/stisla/toggle-group.md) |

### 3. Overlays

| Komponen | Status | Dokumentasi TALL | Referensi Stisla |
| :--- | :--- | :--- | :--- |
| **Dialog** |  Ready | [docs/tall/dialog.md](docs/tall/dialog.md) | [docs/stisla/dialog.md](docs/stisla/dialog.md) |
| **Drawer** |  Ready | [docs/tall/drawer.md](docs/tall/drawer.md) | [docs/stisla/drawer.md](docs/stisla/drawer.md) |
| **Menu** |  Ready | [docs/tall/menu.md](docs/tall/menu.md) | [docs/stisla/menu.md](docs/stisla/menu.md) |
| **Popover** |  Ready | [docs/tall/popover.md](docs/tall/popover.md) | [docs/stisla/popover.md](docs/stisla/popover.md) |
| **Toast** |  Ready | [docs/tall/toast.md](docs/tall/toast.md) | [docs/stisla/toast.md](docs/stisla/toast.md) |
| **Tooltip** |  Ready | [docs/tall/tooltip.md](docs/tall/tooltip.md) | [docs/stisla/tooltip.md](docs/stisla/tooltip.md) |
