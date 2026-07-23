# Collapsible Component (TALL Stack)

Komponen Collapsible menyediakan wilayah konten primitif yang dapat membuka dan menutup (*expand/collapse*) secara halus melalui tombol pemicu (*trigger*).

## Basic Usage

Penggunaan dasar komponen collapsible:

```blade
<div class="flex flex-col items-center">
    <stisla::collapsible.trigger target="collapsible-basic">Toggle details</stisla::collapsible.trigger>
    <stisla::collapsible id="collapsible-basic">
        <div class="rounded-md border border-border bg-surface p-4 mt-2">
            A collapsible is a region whose visibility flips between open and closed.
        </div>
    </stisla::collapsible>
</div>
```

---

## Variations & Features

### 1. Open by Default (`:open="true"`)
Memulai kondisi awal collapsible dalam keadaan terbuka:

```blade
<stisla::collapsible.trigger target="collapsible-open" :open="true">Toggle details</stisla::collapsible.trigger>
<stisla::collapsible id="collapsible-open" :open="true">
    <div class="p-4 border rounded-md">
        This region started open.
    </div>
</stisla::collapsible>
```

### 2. Inside a Card
Menyembunyikan rincian tambahan di dalam card di balik tombol pemicu:

```blade
<stisla::card class="max-w-96">
    <stisla::card.body>
        <stisla::card.title as="h4">API token</stisla::card.title>
        <stisla::collapsible.trigger target="collapsible-card" size="sm" mode="ghost" tone="neutral" flush="start">
            Show permissions
        </stisla::collapsible.trigger>
        <stisla::collapsible id="collapsible-card">
            <ul>
                <li>read:repo</li>
                <li>write:issues</li>
            </ul>
        </stisla::collapsible>
    </stisla::card.body>
</stisla::card>
```

### 3. Programmatic Control (JavaScript API)
Mengendalikan wilayah collapsible secara imperatif dari kode JS via `window.Stisla.Collapsible.getOrCreate(el)`:

```javascript
var el = document.getElementById('collapsible-programmatic');
var inst = window.Stisla.Collapsible.getOrCreate(el);

// Panggil method: inst.open(), inst.close(), inst.toggle()
```

---

## Props Reference

### `<stisla::collapsible>` / `<stisla::collapsible.content>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `id` | `string` | `null` | ID unik untuk dihubungkan dengan atribut `aria-controls` pemicu |
| `open` | `bool` | `false` | Kondisi awal terbuka (`data-state="open"` vs `"closed"`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--collapsible-*`) |

### `<stisla::collapsible.trigger>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `target` / `for` / `controls` | `string` | `null` | ID elemen wilayah collapsible sasaran (`data-stisla-collapsible-trigger`) |
| `open` | `bool` | `false` | Status awal `aria-expanded` |
| `tone` | `string` | `'neutral'` | Nada warna tombol |
| `mode` | `string` | `null` | Mode gaya tombol (`'ghost'`, `'outline'`, `'soft'`) |
| `size` | `string` | `null` | Ukuran tombol (`'sm'`, `'lg'`) |
| `flush` | `string` | `null` | Menyamakan padding tepi tombol (`'start'`) |

---

## Customization

Penimpaan visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::collapsible id="collapsible-custom" :vars="['transition-duration' => '300ms']">
    ...
</stisla::collapsible>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Collapsible:

| Variable | Use |
| :--- | :--- |
| `--collapsible-transition-duration` | Durasi dan timing animasi transisi tinggi panel |
