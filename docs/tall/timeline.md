# Timeline Component (TALL Stack)

A sequence of events laid along a rail.

## Basic

Each event is a `<stisla::timeline.item>` holding a `<stisla::timeline.marker>` on the rail and a `<stisla::timeline.body>` beside it.

```blade
<stisla::timeline class="max-w-lg">
    <stisla::timeline.item>
        <stisla::timeline.marker />
        <stisla::timeline.body>
            <stisla::timeline.time>Today, 09:24</stisla::timeline.time>
            <stisla::timeline.title>Signed in</stisla::timeline.title>
            <stisla::timeline.text>Chrome on macOS from Jakarta, Indonesia.</stisla::timeline.text>
        </stisla::timeline.body>
    </stisla::timeline.item>
</stisla::timeline>
```

---

## Icon and avatar markers

Drop an icon inside a marker for a system event or an avatar for a person.

```blade
<stisla::timeline class="max-w-lg" :vars="['marker-size' => '2.5rem']">
    <stisla::timeline.item>
        <stisla::timeline.marker>
            <stisla::avatar src="https://i.pravatar.cc/96?img=47" fallback="MT" shape="circle" />
        </stisla::timeline.marker>
        <stisla::timeline.body>
            <stisla::timeline.time>11:40</stisla::timeline.time>
            <stisla::timeline.title>Maya opened this pull request</stisla::timeline.title>
            <stisla::timeline.text>Add a Google OAuth provider for sign-in. #482</stisla::timeline.text>
        </stisla::timeline.body>
    </stisla::timeline.item>
    <stisla::timeline.item>
        <stisla::timeline.marker icon="git-commit-horizontal" />
        <stisla::timeline.body>
            <stisla::timeline.time>12:15</stisla::timeline.time>
            <stisla::timeline.title>3 commits pushed</stisla::timeline.title>
            <stisla::timeline.text>Rebased onto main and resolved the merge conflicts.</stisla::timeline.text>
        </stisla::timeline.body>
    </stisla::timeline.item>
</stisla::timeline>
```

---

## Status

Set `state="..."` on an item to show where it sits in a process (`complete`, `current`, `pending`).

```blade
<stisla::timeline class="max-w-lg">
    <stisla::timeline.item state="complete">
        <stisla::timeline.marker icon="check" />
        <stisla::timeline.body>
            <stisla::timeline.time>Jun 20, 09:12</stisla::timeline.time>
            <stisla::timeline.title>Order placed</stisla::timeline.title>
            <stisla::timeline.text>Order #ATL-2918 confirmed.</stisla::timeline.text>
        </stisla::timeline.body>
    </stisla::timeline.item>
    <stisla::timeline.item state="current">
        <stisla::timeline.marker icon="truck" />
        <stisla::timeline.body>
            <stisla::timeline.time>Today, 08:05</stisla::timeline.time>
            <stisla::timeline.title>Out for delivery</stisla::timeline.title>
            <stisla::timeline.text>The courier is on the way and arrives by 6 PM.</stisla::timeline.text>
        </stisla::timeline.body>
    </stisla::timeline.item>
    <stisla::timeline.item state="pending">
        <stisla::timeline.marker icon="house" />
        <stisla::timeline.body>
            <stisla::timeline.time>Estimated today</stisla::timeline.time>
            <stisla::timeline.title>Delivered</stisla::timeline.title>
            <stisla::timeline.text>Left at the front door with a photo.</stisla::timeline.text>
        </stisla::timeline.body>
    </stisla::timeline.item>
</stisla::timeline>
```

---

## Time at the bottom

The body is a plain stack, so the time sits wherever you place it. Lead with the title and drop `<stisla::timeline.time>` to the last line.

```blade
<stisla::timeline class="max-w-lg">
    <stisla::timeline.item>
        <stisla::timeline.marker icon="tag" />
        <stisla::timeline.body>
            <stisla::timeline.title>v2.4.1</stisla::timeline.title>
            <stisla::timeline.text>Fixed a rounding error in multi-currency invoices.</stisla::timeline.text>
            <stisla::timeline.time>Released Jun 22, 2026</stisla::timeline.time>
        </stisla::timeline.body>
    </stisla::timeline.item>
</stisla::timeline>
```

---

## Marker colors

Add a `tone="..."` prop to a marker (`primary`, `success`, `danger`, `warning`, `info`, `neutral`).

```blade
<stisla::timeline class="max-w-lg">
    <stisla::timeline.item>
        <stisla::timeline.marker tone="success" icon="rocket" />
        <stisla::timeline.body>
            <stisla::timeline.time>Today, 10:02</stisla::timeline.time>
            <stisla::timeline.title>Deployed v2.4.1 to production</stisla::timeline.title>
            <stisla::timeline.text>Shipped by the pipeline. No errors in the first hour.</stisla::timeline.text>
        </stisla::timeline.body>
    </stisla::timeline.item>
    <stisla::timeline.item>
        <stisla::timeline.marker tone="danger" icon="x" />
        <stisla::timeline.body>
            <stisla::timeline.time>Today, 08:47</stisla::timeline.time>
            <stisla::timeline.title>Build failed on v2.4.0</stisla::timeline.title>
            <stisla::timeline.text>Unit tests broke in the billing module.</stisla::timeline.text>
        </stisla::timeline.body>
    </stisla::timeline.item>
</stisla::timeline>
```

---

## Alternate

Add `:alternate="true"` to center the rail and place events on either side of it.

```blade
<stisla::timeline :alternate="true">
    <stisla::timeline.item state="complete">
        <stisla::timeline.marker>1</stisla::timeline.marker>
        <stisla::timeline.body>
            <stisla::timeline.time>Q1 2026</stisla::timeline.time>
            <stisla::timeline.title>Private beta</stisla::timeline.title>
            <stisla::timeline.text>Closed beta with 50 design partners.</stisla::timeline.text>
        </stisla::timeline.body>
    </stisla::timeline.item>
    <stisla::timeline.item state="current">
        <stisla::timeline.marker>2</stisla::timeline.marker>
        <stisla::timeline.body>
            <stisla::timeline.time>Q2 2026</stisla::timeline.time>
            <stisla::timeline.title>Public launch</stisla::timeline.title>
            <stisla::timeline.text>Open sign-ups and the v1 dashboard.</stisla::timeline.text>
        </stisla::timeline.body>
    </stisla::timeline.item>
</stisla::timeline>
```

---

## Customization

These variables retune `.timeline` without touching component CSS.

### Geometry

| Variable | Use |
| :--- | :--- |
| `--timeline-marker-size` | Diameter penanda lingkaran |
| `--timeline-dot-size` | Diameter titik saat marker kosong |
| `--timeline-connector-width` | Ketebalan garis rel |
| `--timeline-connector-gap` | Jarak antara penanda dan garis rel |
| `--timeline-connector-style` | Gaya garis rel (`solid`, `dashed`) |
| `--timeline-gutter` | Jarak horizontal antara rel dan bodi event |
| `--timeline-gap` | Jarak vertikal antar item event |

### Paint

| Variable | Use |
| :--- | :--- |
| `--timeline-marker-color` | Warna isian marker, titik, dan tint |
| `--timeline-marker-color-emphasis` | Warna simbol di dalam penanda |
| `--timeline-marker-ring` | Warna cincin di sekitar penanda current |
| `--timeline-marker-ring-size` | Ketebalan halo pada penanda current |
| `--timeline-ping-duration` | Durasi animasi ping |
| `--timeline-connector-color` | Warna garis rel |

---

## Props Reference

### `<stisla::timeline>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'ol'` | Tag HTML elemen (`'ol'`, `'ul'`, `'div'`) |
| `alternate` | `bool` | `false` | Menata rel di tengah dengan event berselang-seling (`.timeline--alternate`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom (`--timeline-*`) |

### `<stisla::timeline.item>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'li'` | Tag HTML elemen (`'li'`, `'div'`) |
| `state` | `string` | `null` | Status tahapan (`'complete'`, `'current'`, `'pending'`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom per item |

### `<stisla::timeline.marker>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'span'` | Tag HTML elemen (`'span'`, `'div'`) |
| `tone` | `string` | `null` | Varian intent warna (`'primary'`, `'success'`, `'danger'`, `'warning'`, `'info'`, `'neutral'`) |
| `icon` | `string` | `null` | Nama ikon Lucide |

### `<stisla::timeline.body>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'div'` | Tag HTML elemen (`'div'`) |

### `<stisla::timeline.time>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'div'` | Tag HTML elemen (`'div'`, `'span'`) |

### `<stisla::timeline.title>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'div'` | Tag HTML elemen (`'div'`, `'h4'`) |

### `<stisla::timeline.text>`

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `as` | `string` | `'div'` | Tag HTML elemen (`'div'`, `'p'`) |
