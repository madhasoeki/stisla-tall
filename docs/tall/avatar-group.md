# Avatar Group Component (TALL Stack)

Komponen Avatar Group menyediakan baris avatar yang saling bertumpuk (*overlapping avatars cluster*) untuk menampilkan sekelompok pengguna atau anggota tim.

## Basic Usage

Penggunaan dasar komponen avatar group:

```blade
<stisla::avatar-group>
    <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=1" fallback="A" />
    <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=2" fallback="B" />
    <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=3" fallback="C" />
    <stisla::avatar.more shape="circle" count="+2" />
</stisla::avatar-group>
```

---

## Variations & Features

### 1. Composition with Avatar Modifiers
Dapat dikombinasikan dengan modifier ukuran avatar (`size="sm"`, `size="lg"`) dan bentuk (`shape="circle"`):

```blade
<stisla::avatar-group>
    <stisla::avatar size="sm" src="https://i.pravatar.cc/96?img=11" fallback="A" />
    <stisla::avatar size="sm" src="https://i.pravatar.cc/96?img=12" fallback="B" />
    <stisla::avatar.more size="sm" count="+8" />
</stisla::avatar-group>
```

### 2. Overflow Tail (`<stisla::avatar.more>`)
Menampilkan ringkasan sisa anggota dengan sub-komponen `<stisla::avatar.more>` dan warna latar kustom:

```blade
<stisla::avatar-group>
    <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=41" fallback="A" />
    <stisla::avatar shape="circle" src="https://i.pravatar.cc/96?img=42" fallback="B" />
    <stisla::avatar.more shape="circle" count="+9" bg="var(--color-primary)" color="var(--color-primary-foreground)" />
</stisla::avatar-group>
```

### 3. Overlap Density (`overlap="..."`)
Mengatur jarak tumpukan avatar menggunakan prop `overlap`:

```blade
{{-- Tumpukan rapat --}}
<stisla::avatar-group overlap="1.25rem">
    ...
</stisla::avatar-group>

{{-- Tumpukan renggang --}}
<stisla::avatar-group overlap="0.25rem">
    ...
</stisla::avatar-group>
```

### 4. On a Tinted Surface (`ring-color="..."`)
Menyesuaikan warna garis pemisah outline ring avatar agar cocok dengan warna permukaan kontainer host:

```blade
<stisla::avatar-group ring-color="var(--color-surface-3)">
    ...
</stisla::avatar-group>
```

---

## Props Reference (`<stisla::avatar-group>`)

| Prop | Type | Default | Description |
| :--- | :--- | :--- | :--- |
| `overlap` | `string` | `null` | Jarak tumpukan antar avatar (`--avatar-group-overlap`) |
| `ring-width` / `ringWidth` | `string` | `null` | Ketebalan garis ring outline pemisah avatar (`--avatar-group-ring-width`) |
| `ring-color` / `ringColor` | `string` | `null` | Warna garis ring outline pemisah avatar (`--avatar-group-ring-color`) |
| `vars` | `array` | `[]` | Array variabel CSS kustom untuk override gaya visual |

### Sub-Components

- `<stisla::avatar.group>`: Alias pemanggilan alternatif untuk `<stisla::avatar-group>`.
- `<stisla::avatar.more>`: Avatar penanda sisa anggota (`.avatar-group__more`) dengan props: `count`, `shape`, `size`, `bg`, `color`, dan `vars`.

---

## Customization

Penimpaan variabel CSS dapat dilakukan via prop `:vars`:

```blade
<stisla::avatar-group
    :vars="[
        'overlap' => '0.75rem',
        'ring-width' => '3px'
    ]"
>
    ...
</stisla::avatar-group>
```

Variabel CSS yang tersedia untuk kustomisasi komponen Avatar Group:

| Variable | Use |
| :--- | :--- |
| `--avatar-group-overlap` | Negative inline margin per member avatar |
| `--avatar-group-ring-width` | Ketebalan outline ring pemisah |
| `--avatar-group-ring-color` | Warna outline ring pemisah |
