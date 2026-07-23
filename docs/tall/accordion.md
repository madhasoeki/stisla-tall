# Accordion Component (TALL Stack)

Komponen Accordion menyajikan kumpulan panel yang dapat diperluas (*expandable*) atau diciutkan (*collapsible*) untuk menghemat ruang tampilan.

## Basic Usage

Penggunaan standar dengan beberapa item yang dapat dibuka secara bersamaan:

```blade
<stisla::accordion>
    <stisla::accordion.item title="What is a design system?" :open="true">
        A shared vocabulary of tokens, primitives, and patterns that lets every screen in a product look like it was made by the same hand.
    </stisla::accordion.item>

    <stisla::accordion.item title="How are corners kept concentric?">
        The frame owns a single radius. Each item subtracts the wrapper padding from that radius so the inner arc shares a center with the outer arc.
    </stisla::accordion.item>

    <stisla::accordion.item title="Does it animate?">
        The chevron rotates and the panel slides open and closed.
    </stisla::accordion.item>
</stisla::accordion>
```

---

## Variations & Features

### 1. Single Open (`type="single"`)
Memaksa hanya 1 item yang dapat terbuka dalam satu waktu. Membuka item lain akan otomatis menutup item yang sedang aktif.

```blade
<stisla::accordion type="single">
    <stisla::accordion.item title="Section one" :open="true">
        Opening section two will close this panel.
    </stisla::accordion.item>

    <stisla::accordion.item title="Section two">
        Each trigger acts like a radio in a group.
    </stisla::accordion.item>
</stisla::accordion>
```

### 2. Seamless in a Card (`:seamless="true"`)
Menghilangkan outer frame accordion agar menyatu rata di dalam elemen Card.

```blade
<div class="card w-full">
    <div class="card__header">
        <h4 class="card__title">Frequently asked</h4>
    </div>
    <stisla::accordion :seamless="true">
        <stisla::accordion.item title="Can I deploy to my own domain?" :open="true" heading="h4">
            Point your domain at the build output. Any static host works.
        </stisla::accordion.item>

        <stisla::accordion.item title="Do you ship a CLI?" heading="h4">
            Not in 3.0. The starter templates download as zips.
        </stisla::accordion.item>
    </stisla::accordion>
</div>
```

### 3. With Leading Icon (`icon="..."`)
Menambahkan ikon Lucide di sebelah kiri judul item.

```blade
<stisla::accordion>
    <stisla::accordion.item title="Shipping" icon="truck" :open="true">
        Free standard shipping on orders over $50.
    </stisla::accordion.item>

    <stisla::accordion.item title="Returns" icon="trash-2">
        30-day window from delivery.
    </stisla::accordion.item>
</stisla::accordion>
```

### 4. Disabled Item (`:disabled="true"`)
Menonaktifkan interaksi pada item accordion tertentu.

```blade
<stisla::accordion>
    <stisla::accordion.item title="Active section">
        This one opens.
    </stisla::accordion.item>

    <stisla::accordion.item title="Locked section" :disabled="true">
        Body sits hidden; the trigger refuses interaction.
    </stisla::accordion.item>
</stisla::accordion>
```

---

## Props & Slots Reference

### Accordion Root (`<stisla::accordion>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `type` | `string` | `null` | Atur ke `'single'` untuk mode accordion tunggal |
| `seamless` | `bool` | `false` | Set `true` untuk tampilan tanpa outer border/frame |
| `vars` | `array` | `[]` | Array variabel CSS kustom |

### Accordion Item (`<stisla::accordion.item>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `title` | `string` | `''` | Teks judul item accordion |
| `open` | `bool` | `false` | Atur `true` jika item terbuka secara default |
| `disabled` | `bool` | `false` | Atur `true` untuk menonaktifkan item |
| `icon` | `string` | `null` | Nama ikon Lucide (misal `'truck'`, `'clock'`) |
| `heading` | `string` | `'h3'` | Tag heading HTML (`'h2'`, `'h3'`, `'h4'`, dll) |
| `id` | `string` | `null` | ID unik opsional (otomatis dibuat jika kosong) |
| `vars` | `array` | `[]` | Array variabel CSS kustom untuk item |

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan memasukkan array `:vars` atau atribut `style`:

```blade
<stisla::accordion :vars="['gap' => '1rem', 'radius' => '0px', 'item-open-bg' => 'oklch(0.95 0.05 280)']">
    <stisla::accordion.item title="Custom Accordion Item">
        Content...
    </stisla::accordion.item>
</stisla::accordion>
```
