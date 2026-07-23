# Avatar Component (TALL Stack)

Komponen Avatar menyediakan foto profil (*portrait slot*) dengan mekanisme fallback halus jika gambar gagal dimuat atau belum selesai diproses.

## Basic Usage

Penggunaan dasar avatar teks/inisial atau ikon:

```blade
<stisla::avatar initials="RF" />
<stisla::avatar initials="NA" />
<stisla::avatar icon="user" />
```

---

## Variations & Features

### 1. Image with Fallback (`src`, `fallback`, `alt`)
Menampilkan gambar profil dengan fallback teks/inisial otomatis yang tetap ditampilkan hingga proses muat gambar terkonfirmasi:

```blade
<stisla::avatar src="https://i.pravatar.cc/96?img=12" alt="Rafiq" fallback="RF" />
<stisla::avatar src="https://i.pravatar.cc/96?img=32" alt="Nauval" fallback="NA" />
```

### 2. Circle Shape (`shape="circle"`)
Mengubah bentuk avatar dari persegi membulat (*rounded square*) menjadi lingkaran penuh (*full circle*):

```blade
<stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=15" fallback="RF" />
<stisla::avatar shape="circle" initials="NA" />
```

### 3. Sizes (`size="sm"` / `lg` / `xl`)
Variasi ukuran dimensi dan font avatar:

```blade
<stisla::avatar size="sm" initials="SM" />
<stisla::avatar initials="MD" />
<stisla::avatar size="lg" initials="LG" />
<stisla::avatar size="xl" initials="XL" />
```

### 4. Status Indicator (`<stisla::avatar.indicator>`)
Menambahkan penanda status (*status dot*), jumlah notifikasi, atau tanda verifikasi pada sudut avatar:

```blade
<stisla::avatar src="https://i.pravatar.cc/96?img=22" fallback="RF">
    <stisla::avatar.indicator />
</stisla::avatar>

<stisla::avatar src="https://i.pravatar.cc/96?img=44" fallback="ID">
    <stisla::avatar.indicator position="top" size="lg" bg="var(--color-danger)" color="var(--color-danger-foreground)">
        3
    </stisla::avatar.indicator>
</stisla::avatar>
```

### 5. Loading State Delay (`delay="1500"`)
Menahan status *loading* untuk durasi tertentu (ms) sebelum menampilkan gambar asli:

```blade
<stisla::avatar src="https://i.pravatar.cc/96?img=64" fallback="…" delay="1500" />
```

---

## Props Reference (`<stisla::avatar>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `src` | `string` | `null` | URL sumber gambar avatar |
| `alt` | `string` | `''` | Teks alt deskripsi gambar |
| `fallback` / `initials` | `string` | `null` | Teks inisial atau fallback saat gambar belum/gagal dimuat |
| `icon` | `string` | `null` | Nama ikon Lucide untuk fallback (misal `'user'`) |
| `shape` | `string` | `null` | Bentuk avatar (`'circle'`) |
| `size` | `string` | `null` | Ukuran dimensi avatar (`'sm'`, `'lg'`, `'xl'`) |
| `delay` | `mixed` | `null` | Penundaan pengungkapan gambar dalam milidetik (`data-stisla-avatar-delay`) |
| `status` | `string` | `null` | Pre-set status muat (`'loading'`, `'loaded'`, `'error'`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom untuk override gaya visual |

### Sub-Components

- `<stisla::avatar.image>`: Tag `<img>` berkelas `.avatar__image`.
- `<stisla::avatar.fallback>`: Tag `<span>` berkelas `.avatar__fallback`.
- `<stisla::avatar.indicator>`: Tag `<span>` berkelas `.avatar__indicator` dengan props: `position` (`'top'`), `size` (`'lg'`, `'xl'`), `bg`, `color`, `icon`, dan `vars`.

---

## Customization

Penimpaan visual dapat dilakukan dengan mendefinisikan array `:vars` pada komponen:

```blade
<stisla::avatar
    initials="ST"
    :vars="[
        'bg' => 'oklch(0.5 0.2 280)',
        'color' => 'white',
        'radius' => '0px'
    ]"
/>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Avatar:

| Variable | Use |
| :--- | :--- |
| `--avatar-size` | Ukuran lebar/tinggi bidang avatar |
| `--avatar-radius` | Corner radius elemen avatar |
| `--avatar-bg` | Latar belakang isian tile |
| `--avatar-color` | Warna teks fallback |
| `--avatar-font-size` | Ukuran teks fallback |
| `--avatar-ring-width` | Ketebalan ring outline avatar |
| `--avatar-ring-color` | Warna ring outline avatar |
