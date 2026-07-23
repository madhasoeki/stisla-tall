# Button Group & Toolbar Components (TALL Stack)

Komponen Button Group menyatukan sekelompok tombol aksi (*action buttons*) dalam satu kesatuan visual dengan sudut luar yang membulat dan garis tepi antar tombol yang menyatu (*single seam*). Komponen Toolbar mengombinasikan beberapa kelompok button group sekaligus.

## Basic Usage

Penggunaan dasar komponen button group:

```blade
<stisla::button-group label="Basic example">
    <stisla::button tone="primary">Left</stisla::button>
    <stisla::button tone="primary">Middle</stisla::button>
    <stisla::button tone="primary">Right</stisla::button>
</stisla::button-group>
```

---

## Variations & Features

### 1. Outline & Mixed Members
Dapat berisi tombol outline maupun kombinasi tombol utama (*primary*) dan sekunder (*outline*):

```blade
{{-- Outline --}}
<stisla::button-group label="Outline example">
    <stisla::button mode="outline" tone="neutral">Left</stisla::button>
    <stisla::button mode="outline" tone="neutral">Middle</stisla::button>
    <stisla::button mode="outline" tone="neutral">Right</stisla::button>
</stisla::button-group>

{{-- Mixed --}}
<stisla::button-group label="Mixed example">
    <stisla::button tone="primary">Publish</stisla::button>
    <stisla::button mode="outline" tone="neutral">Save draft</stisla::button>
</stisla::button-group>
```

### 2. Sizes (`size="sm"` / `size="lg"`)
Mengatur skala seluruh tombol di dalam kelompok secara bersamaan:

```blade
<stisla::button-group size="sm">
    <stisla::button mode="outline" tone="neutral">Left</stisla::button>
    <stisla::button mode="outline" tone="neutral">Right</stisla::button>
</stisla::button-group>
```

### 3. Split Button
Mengombinasikan tombol aksi utama dengan tombol pemicu menu dropdown (*caret-only*):

```blade
<stisla::button-group label="Save options">
    <stisla::button tone="primary">Save</stisla::button>
    <stisla::button tone="primary" :icon-only="true" icon="chevron-down" aria-label="More save options" />
</stisla::button-group>
```

### 4. Vertical Stacking (`:vertical="true"`)
Menyusun kelompok tombol secara vertikal dari atas ke bawah:

```blade
<stisla::button-group :vertical="true">
    <stisla::button tone="primary">Top</stisla::button>
    <stisla::button tone="primary">Middle</stisla::button>
    <stisla::button tone="primary">Bottom</stisla::button>
</stisla::button-group>
```

### 5. Button Toolbar (`<stisla::button-toolbar>`)
Menggabungkan beberapa kelompok `<stisla::button-group>` dengan spasi pemisah standar:

```blade
<stisla::button-toolbar label="Toolbar example">
    <stisla::button-group label="First group">
        <stisla::button mode="outline" tone="neutral">1</stisla::button>
        <stisla::button mode="outline" tone="neutral">2</stisla::button>
    </stisla::button-group>

    <stisla::button-group label="Second group">
        <stisla::button mode="outline" tone="neutral">4</stisla::button>
        <stisla::button mode="outline" tone="neutral">5</stisla::button>
    </stisla::button-group>
</stisla::button-toolbar>
```

---

## Props Reference

### `<stisla::button-group>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `label` | `string` | `null` | Atribut aksesibilitas `aria-label` kelompok tombol |
| `size` | `string` | `null` | Ukuran kelompok tombol (`'sm'`, `'lg'`) |
| `vertical` | `bool` | `false` | Menyusun tombol secara vertikal (`.button-group--vertical`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--button-group-*`) |

### `<stisla::button-toolbar>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `label` | `string` | `null` | Atribut aksesibilitas `aria-label` toolbar |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--button-toolbar-*`) |

### Sub-Components & Aliases
- `<stisla::button.group>`: Alias untuk `<stisla::button-group>`.
- `<stisla::button.toolbar>`: Alias untuk `<stisla::button-toolbar>`.

---

## Customization

Penimpaan visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::button-group :vars="['radius' => '0px']">
    ...
</stisla::button-group>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Button Group & Toolbar:

| Variable | Use |
| :--- | :--- |
| `--button-group-radius` | Corner radius luar kelompok tombol |
| `--button-toolbar-gap` | Jarak spasi antar kelompok di dalam toolbar |
