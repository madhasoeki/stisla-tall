# List Group Component (TALL Stack)

Komponen List Group (`<stisla::list-group>`) menyusun baris-baris informasi atau pilihan interaktif dalam satu permukaan bingkai berpemisah (divider).

## Basic Usage

Penggunaan dasar komponen List Group:

```blade
<stisla::list-group class="max-w-sm w-full">
    <stisla::list-group.item icon="phone">
        <span>Phone</span>
        <span class="ms-auto text-muted-foreground">+62 812 3456 789</span>
    </stisla::list-group.item>
    <stisla::list-group.item icon="mail">
        <span>Email</span>
        <span class="ms-auto text-muted-foreground">steven@meridian.com</span>
    </stisla::list-group.item>
</stisla::list-group>
```

---

## Variations & Features

### 1. Seamless List Group (`:seamless="true"`)
Menghilangkan bingkai luar dan radius sudut saat komponen berada di dalam permukaan lain yang sudah memiliki border:

```blade
<stisla::list-group :seamless="true">
    <stisla::list-group.item>
        <span>Subtotal</span>
        <span class="ms-auto text-muted-foreground">$248.00</span>
    </stisla::list-group.item>
    <stisla::list-group.item>
        <span class="font-semibold">Total</span>
        <span class="ms-auto font-semibold">$280.80</span>
    </stisla::list-group.item>
</stisla::list-group>
```

### 2. Media Rows inside a Card
Menyusun baris `<stisla::media as="li">` di dalam Card dan List Group:

```blade
<stisla::card>
    <stisla::card.header>Integrations</stisla::card.header>
    <stisla::list-group>
        <stisla::media as="li">
            <stisla::media.figure icon="github" />
            <stisla::media.content title="GitHub" description="Sync issues and pull requests." />
            <stisla::media.action>
                <stisla::button mode="outline" tone="neutral" size="sm">Disconnect</stisla::button>
            </stisla::media.action>
        </stisla::media>
    </stisla::list-group>
</stisla::card>
```

### 3. Single Choice Radio Group
Menjadikan List Group sebagai grup pilihan radio tunggal interaktif:

```blade
<stisla::list-group as="div" role="radiogroup" aria-label="Plan">
    <stisla::media :selectable="true" as="label">
        <stisla::media.figure as="span" icon="sprout" />
        <stisla::media.content as="span" title="Starter" description="For a solo project." />
        <stisla::media.action as="span">
            <span class="font-semibold">$0</span>
            <stisla::radio name="plan" aria-label="Starter" />
        </stisla::media.action>
    </stisla::media>
</stisla::list-group>
```

### 4. Horizontal Layout (`:horizontal="true"`)
Menyusun baris secara bersisian (horizontal):

```blade
<stisla::list-group :horizontal="true">
    <stisla::media :vertical="true" as="li" class="flex-1">
        <stisla::media.meta>Revenue</stisla::media.meta>
        <stisla::media.title class="text-2xl">$48.2k</stisla::media.title>
    </stisla::media>
</stisla::list-group>
```

---

## Props Reference

### `<stisla::list-group>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'ul'` | Tag HTML elemen utama (`'ul'`, `'ol'`, `'div'`) |
| `seamless` | `bool` | `false` | Menghilangkan bingkai luar & radius (`.list-group--seamless`) |
| `horizontal` | `bool\|string` | `false` | Tata letak horizontal (`true` atau breakpoint e.g. `'sm'`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--list-group-*`) |

### `<stisla::list-group.item>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'li'` | Tag HTML baris item (`'li'`, `'div'`, `'a'`) |
| `icon` | `string` | `null` | Nama ikon Lucide di awal baris item |
| `active` | `bool` | `false` | Menandai status aktif pada item |
| `disabled` | `bool` | `false` | Menandai status non-aktif pada item |

---

## Customization

Penimpaan gaya visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::list-group :vars="['divider-color' => 'transparent', 'bg' => 'var(--color-surface-2)']">
    ...
</stisla::list-group>
```

Variabel CSS yang tersedia untuk kustomisasi komponen List Group:

| Variable | Use |
| :--- | :--- |
| `--list-group-bg` | Warna latar bingkai utama |
| `--list-group-border-color` | Warna border bingkai luar |
| `--list-group-border-width` | Ketebalan border bingkai luar |
| `--list-group-radius` | Radius sudut bingkai utama |
| `--list-group-divider-color` | Warna garis pemisah (divider) antar baris |
| `--list-group-item-padding-block` | Padding vertikal pada baris item |
| `--list-group-item-padding-inline` | Padding horizontal pada baris item |
| `--list-group-item-bg-active` | Warna latar item saat status active |
| `--list-group-item-disabled-opacity` | Opasitas visual item saat status disabled |
