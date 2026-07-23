# Media Component (TALL Stack)

Komponen Media menyediakan baris tata letak serbaguna yang memasangkan elemen media (seperti ikon, avatar, atau gambar) dengan teks deskripsi dan tombol/kontrol aksi.

## Basic Usage

Penggunaan dasar komponen media:

```blade
<stisla::media class="max-w-md">
    <stisla::media.figure>
        <stisla::icon-box tone="primary" icon="package" />
    </stisla::media.figure>
    <stisla::media.content>
        <stisla::media.title>Order #ATL-2918</stisla::media.title>
        <stisla::media.description>Out for delivery, arrives today by 6 PM.</stisla::media.description>
    </stisla::media.content>
    <stisla::media.action>
        <stisla::button tone="primary" size="sm">Track</stisla::button>
    </stisla::media.action>
</stisla::media>
```

---

## Variations & Features

### 1. Title, Description, and Meta
Menambahkan baris sekunder meta di bawah deskripsi:

```blade
<stisla::media class="max-w-lg">
    <stisla::media.figure>
        <stisla::avatar src="user.jpg" fallback="JC" shape="circle" />
    </stisla::media.figure>
    <stisla::media.content>
        <stisla::media.title>Joseph Cooper</stisla::media.title>
        <stisla::media.description>Pushed 3 commits to atlas/main.</stisla::media.description>
        <stisla::media.meta>2 minutes ago</stisla::media.meta>
    </stisla::media.content>
</stisla::media>
```

### 2. Vertical Tiles (`:vertical="true"`)
Menumpuk elemen dari atas ke bawah untuk membuat ubin statistik atau ringkasan:

```blade
<stisla::media :vertical="true">
    <stisla::media.meta>Monthly revenue</stisla::media.meta>
    <stisla::media.title class="text-2xl">$48,210</stisla::media.title>
    <stisla::media.description class="text-success">+12.4% from last month</stisla::media.description>
</stisla::media>
```

### 3. Seamless Rows inside Card (`:seamless="true"`)
Baris tanpa border/background mandiri untuk disusun rapi di dalam komponen Card:

```blade
<stisla::card>
    <stisla::card.header>Team members</stisla::card.header>
    <stisla::media :seamless="true">
        <stisla::media.figure>
            <stisla::avatar fallback="MT" shape="circle" />
        </stisla::media.figure>
        <stisla::media.content title="Maya Tanaka" meta="maya@kredibel.com" />
        <stisla::media.action>
            <stisla::button mode="outline" tone="neutral" size="sm">Following</stisla::button>
        </stisla::media.action>
    </stisla::media>
</stisla::card>
```

### 4. Interactive Card-Style Selection (`:selectable="true" as="label"`)
Menjadikan seluruh baris media sebagai pilihan radio atau checkbox interaktif:

```blade
<stisla::media :selectable="true" as="label">
    <stisla::media.figure as="span">
        <stisla::icon-box tone="primary" icon="zap" />
    </stisla::media.figure>
    <stisla::media.content as="span">
        <stisla::media.title as="span">Express delivery</stisla::media.title>
        <stisla::media.description as="span">Arrives next business day.</stisla::media.description>
        <stisla::media.meta as="span">$24.00</stisla::media.meta>
    </stisla::media.content>
    <stisla::media.action as="span">
        <stisla::radio name="delivery" :checked="true" />
    </stisla::media.action>
</stisla::media>
```

---

## Props Reference

### `<stisla::media>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'div'` | Tag HTML elemen utama (`'div'`, `'label'`, `'li'`) |
| `vertical` | `bool` | `false` | Menumpuk elemen secara vertikal (`.media--vertical`) |
| `seamless` | `bool` | `false` | Menghilangkan border & fill untuk dalam card (`.media--seamless`) |
| `selectable` | `bool` | `false` | Mengaktifkan state hover/selected interaktif (`.media--selectable`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--media-*`) |

### Sub-Components Overview
- `<stisla::media.figure>`: Slot media kiri/atas (`icon` prop atau slot avatar/image).
- `<stisla::media.content>`: Slot kontainer teks (`title`, `description`, `meta` prop atau slot).
- `<stisla::media.title>`: Judul baris.
- `<stisla::media.description>`: Deskripsi penjelasan.
- `<stisla::media.meta>`: Teks info sekunder.
- `<stisla::media.action>`: Slot tombol/kontrol di ujung kanan.

---

## Customization

Penimpaan visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::media :vars="['padding-block' => '1.25rem', 'bg' => 'var(--color-surface-2)']">
    ...
</stisla::media>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Media:

| Variable | Use |
| :--- | :--- |
| `--media-radius` | Radius sudut baris media |
| `--media-padding-block` | Padding vertikal atas & bawah |
| `--media-padding-inline` | Padding horizontal kiri & kanan |
| `--media-gap` | Jarak spasi antar figure, content, dan action |
| `--media-bg` | Warna latar belakang |
| `--media-border-width` | Ketebalan border |
| `--media-border-color` | Warna border |
| `--media-bg-hover` | Warna latar saat hover/highlight |
| `--media-bg-selected` | Warna latar saat status selected active |
| `--media-border-color-selected` | Warna ring border saat status selected active |
