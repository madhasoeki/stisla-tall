# Navbar Component (TALL Stack)

Komponen Navbar (`<stisla::navbar>`) menyediakan bilah navigasi atas (top bar) untuk merek/logo aplikasi, daftar tautan navigasi, tombol hamburger responsif, dan tindakan sekunder.

## Basic Usage

Penggunaan dasar komponen Navbar yang selalu melebar horizontal (`:expand="true"`):

```blade
<stisla::navbar :expand="true">
    <stisla::navbar.brand href="#">Stisla</stisla::navbar.brand>

    <stisla::navbar.menu>
        <stisla::navbar.nav>
            <stisla::navbar.item>
                <stisla::navbar.button href="#" :active="true">Dashboard</stisla::navbar.button>
            </stisla::navbar.item>
            <stisla::navbar.item>
                <stisla::navbar.button href="#">Reports</stisla::navbar.button>
            </stisla::navbar.item>
        </stisla::navbar.nav>
        <stisla::button tone="primary" size="sm">New report</stisla::button>
    </stisla::navbar.menu>
</stisla::navbar>
```

---

## Variations & Features

### 1. Responsive Folding (`:expand="false"`)
Menyembunyikan menu di belakang tombol hamburger (`<stisla::navbar.toggle />`) pada layar kecil:

```blade
<stisla::navbar :expand="false">
    <stisla::navbar.brand href="#">Stisla</stisla::navbar.brand>
    <stisla::navbar.toggle />

    <stisla::navbar.menu>
        <stisla::navbar.nav>
            <stisla::navbar.item>
                <stisla::navbar.button href="#" :active="true">Dashboard</stisla::navbar.button>
            </stisla::navbar.item>
            <stisla::navbar.item>
                <stisla::navbar.button href="#">Settings</stisla::navbar.button>
            </stisla::navbar.item>
        </stisla::navbar.nav>
    </stisla::navbar.menu>
</stisla::navbar>
```

### 2. Expand Breakpoint Modifiers (`expand="..."`)
Mengubah titik lebur lipatan responsif sesuai lebar breakpoint Tailwind/CSS (`'sm'`, `'md'`, `'lg'`, `'xl'`):

```blade
<stisla::navbar expand="md">
    <stisla::navbar.brand href="#">Medium Expand</stisla::navbar.brand>
    <stisla::navbar.toggle />
    ...
</stisla::navbar>
```

---

## Props Reference

### `<stisla::navbar>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `expand` | `bool\|string` | `true` | Melebar horizontal (`true`, `false`, atau breakpoint `'sm'`, `'md'`, `'lg'`, `'xl'`) |
| `block` | `bool` | `true` | Menampilkan bar sebagai blok (`.navbar--block`) |
| `ariaLabel` | `string` | `'Main'` | Label accessibility untuk `<nav>` |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--navbar-*`) |

### Sub-Components Overview
- `<stisla::navbar.brand>`: Elemen merek/logo (`href`, `as`).
- `<stisla::navbar.toggle>`: Tombol hamburger untuk toggle menu pada layar kecil.
- `<stisla::navbar.menu>`: Kontainer menu navigasi (`state="closed"`).
- `<stisla::navbar.nav>`: Pembungkus daftar tautan navigasi (`<ul>`).
- `<stisla::navbar.item>`: Item pembungkus (`<li>`).
- `<stisla::navbar.button>`: Tombol/link tautan navigasi (`href`, `active`, `disabled`).

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::navbar :expand="true" :vars="['bg' => 'var(--color-surface-2)', 'button-radius' => '9999px']">
    ...
</stisla::navbar>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Navbar:

| Variable | Use |
| :--- | :--- |
| `--navbar-gap` | Jarak spasi antar merek, menu, dan tombol |
| `--navbar-padding-block` / `-padding-inline` | Padding dalam bilah navigasi |
| `--navbar-bg` / `-color` | Warna latar belakang dan teks bilah navigasi |
| `--navbar-button-height` | Tinggi chip tombol navigasi dan brand |
| `--navbar-button-radius` | Radius sudut chip tombol navigasi |
| `--navbar-button-gap` | Jarak spasi antar tautan navigasi |
| `--navbar-button-bg-hover` | Warna latar saat kursor mengambang di atas tautan |
| `--navbar-button-bg-active` | Warna latar tautan halaman aktif |
| `--navbar-toggle-size` | Ukuran fisik tombol hamburger |
