# Icon Box Component (TALL Stack)

Komponen Icon Box menyediakan wadah ubin (*tile container*) persegi atau lingkaran berwarna lembut (*tinted*) untuk menampilkan sebuah ikon.

## Basic Usage

Penggunaan dasar komponen icon box:

```blade
<stisla::icon-box icon="zap" />
```

---

## Variations & Features

### 1. Intent Variants (`tone="..."`)
Mewarnai latar ubin dengan tingkat kejenuhan 15% dan ikon dengan warna solid sesuai nada intent:

```blade
<stisla::icon-box tone="primary" icon="zap" />
<stisla::icon-box tone="success" icon="check" />
<stisla::icon-box tone="warning" icon="clock" />
<stisla::icon-box tone="danger" icon="triangle-alert" />
<stisla::icon-box tone="info" icon="info" />
```

### 2. Shape (`:circle="true"`)
Bentuk ubin bawaan adalah persegi melengkung (*rounded square*). Gunakan `:circle="true"` untuk bentuk lingkaran:

```blade
<stisla::icon-box tone="primary" icon="bell" />
<stisla::icon-box tone="primary" :circle="true" icon="bell" />
```

### 3. Sizes (`size="sm"` / `size="lg"`)
Tiga pilihan ukuran fisik ubin dan ikon:

```blade
<stisla::icon-box tone="primary" size="sm" icon="zap" />
<stisla::icon-box tone="primary" icon="zap" />
<stisla::icon-box tone="primary" size="lg" icon="zap" />
```

### 4. Integration with Empty State
Komponen Icon Box dapat digunakan di dalam slot media komponen `<stisla::empty-state.media>`:

```blade
<stisla::empty-state :sm="true">
    <stisla::empty-state.media>
        <stisla::icon-box tone="primary" :circle="true" size="lg" icon="users" />
    </stisla::empty-state.media>
    <stisla::empty-state.title>No team members</stisla::empty-state.title>
    <stisla::empty-state.text>Invite people to collaborate.</stisla::empty-state.text>
</stisla::empty-state>
```

---

## Props Reference

### `<stisla::icon-box>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `icon` | `string` | `null` | Nama ikon Lucide |
| `tone` / `variant` | `string` | `null` | Nada warna ubin (`'primary'`, `'success'`, `'warning'`, `'danger'`, `'info'`) |
| `shape` / `circle` | `bool`/`string` | `false` | Beralih ke bentuk lingkaran (`.icon-box--circle`) |
| `size` | `string` | `null` | Ukuran ubin (`'sm'`, `'lg'`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--icon-box-*`) |

---

## Customization

Penimpaan visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::icon-box icon="sparkles" :vars="['tone' => 'oklch(0.62 0.20 295)']" />
```

Variabel CSS yang tersedia untuk kustomisasi komponen Icon Box:

| Variable | Use |
| :--- | :--- |
| `--icon-box-size` | Dimensi luar ubin persegi |
| `--icon-box-icon-size` | Ukuran ikon glyph di dalam ubin |
| `--icon-box-radius` | Radius sudut ubin |
| `--icon-box-tone` | Warna dasar turunan tint latar belakang |
| `--icon-box-tone-emphasis` | Warna glyph ikon di atas latar |
| `--icon-box-bg` | Warna latar ubin |
| `--icon-box-color` | Warna langsung glyph ikon |
