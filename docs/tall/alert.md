# Alert Component (TALL Stack)

Komponen Alert menyediakan strip umpan balik kontekstual (*contextual feedback strip*) untuk menampilkan pesan neutral, info, sukses, peringatan, atau bahaya.

## Basic Usage

Penggunaan dasar komponen alert dengan variasi nada warna (*tone modifiers*):

```blade
<stisla::alert tone="neutral" icon="info">Some neutral message here.</stisla::alert>
<stisla::alert tone="primary" icon="info">Heads up, your trial ends in 3 days.</stisla::alert>
<stisla::alert tone="success" icon="circle-check">Your changes have been saved successfully.</stisla::alert>
<stisla::alert tone="warning" icon="triangle-alert">Some features may not work.</stisla::alert>
<stisla::alert tone="danger" icon="circle-x">Payment failed. Check your card details.</stisla::alert>
<stisla::alert tone="info" icon="info">Some useful information here.</stisla::alert>
```

---

## Variations & Features

### 1. Without Icon
Alert dapat digunakan tanpa ikon terdepan (*leading icon*):

```blade
<stisla::alert tone="neutral">Heads up, your trial ends in 3 days.</stisla::alert>
<stisla::alert tone="success">Your changes have been saved successfully.</stisla::alert>
```

### 2. With Heading & Description (`title`, `description`)
Alert dengan judul dan deskripsi bertumpuk dapat dibuat menggunakan props atau sub-komponen:

```blade
{{-- Menggunakan props --}}
<stisla::alert tone="info" icon="info" title="Heads up" description="A new version is available. Refresh to load it." />

{{-- Menggunakan sub-komponen --}}
<stisla::alert tone="warning" icon="triangle-alert">
    <stisla::alert.title>Unsaved changes</stisla::alert.title>
    <stisla::alert.description>Leaving this page will discard your edits.</stisla::alert.description>
</stisla::alert>
```

### 3. Action Slot (`<stisla::alert.action>`)
Menyisipkan tombol aksi atau tautan di sebelah kanan alert:

```blade
<stisla::alert tone="neutral" icon="info">
    Message deleted successfully.
    <stisla::alert.action>
        <button type="button" class="button button--neutral button--sm">Undo</button>
    </stisla::alert.action>
</stisla::alert>
```

### 4. Dismissible Alert (`:dismissible="true"`)
Menyediakan tombol tutup (X) interaktif berbasis Alpine.js:

```blade
<stisla::alert tone="success" icon="circle-check" :dismissible="true">
    Your changes have been saved.
</stisla::alert>
```

### 5. Inline Link (`<stisla::alert.link>`)
Tautan di dalam alert menggunakan sub-komponen `<stisla::alert.link>` agar warnanya menyesuaikan nada alert:

```blade
<stisla::alert tone="info" icon="info">
    An info alert with <stisla::alert.link href="#">an info-colored link</stisla::alert.link>.
</stisla::alert>
```

---

## Props Reference (`<stisla::alert>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `tone` / `variant` | `string` | `'neutral'` | Nada warna konteks (`'neutral'`, `'primary'`, `'success'`, `'warning'`, `'danger'`, `'info'`) |
| `icon` | `string` | `null` | Nama ikon Lucide (misal `'info'`, `'circle-check'`, `'triangle-alert'`, `'circle-x'`) |
| `title` | `string` | `null` | Teks judul alert (`.alert__title`) |
| `description` | `string` | `null` | Teks deskripsi alert (`.alert__description`) |
| `dismissible` | `bool` | `false` | Menampilkan tombol tutup interaktif |
| `vars` | `array` | `[]` | Array variabel CSS kustom untuk override gaya visual |

### Sub-Components

- `<stisla::alert.title>`: Wadah untuk judul alert (`.alert__title`).
- `<stisla::alert.description>`: Wadah untuk deskripsi alert (`.alert__description`).
- `<stisla::alert.action>`: Wadah aksi di sebelah kanan alert (`.alert__action`).
- `<stisla::alert.link>`: Tag `<a>` berkelas `.alert__link` dengan warna sesuai konteks alert.

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::alert
    tone="primary"
    icon="info"
    :vars="['radius' => '0px']"
>
    Custom sharp corner alert.
</stisla::alert>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Alert:

| Variable | Use |
| :--- | :--- |
| `--alert-radius` | Corner radius elemen alert |
| `--alert-padding-block` | Padding vertikal (atas & bawah) |
| `--alert-padding-inline` | Padding horizontal (kiri & kanan) |
| `--alert-bg` | Latar belakang permukaan alert |
| `--alert-border-width` | Ketebalan garis tepi border |
| `--alert-border-color` | Warna garis tepi border |
| `--alert-color` | Warna teks body |
| `--alert-icon-color` | Warna ikon terdepan |
| `--alert-link-color` | Warna tautan `.alert__link` |
