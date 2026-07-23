---
trigger: always_on
---

# Rules & Guidelines for Writing Component Documentation (`documentation.md`)

Dokumen ini berisi instruksi bagi AI Agent untuk membuat dokumen panduan pengguna (User Documentation) setiap kali selesai mengimplementasikan komponen baru Stisla versi TALL Stack.

---

## 1. Kewajiban & Prinsip Keselarasan Dokumentasi

Setiap kali AI Agent selesai membuat komponen UI baru (misalnya `<stisla::button>`, `<stisla::card>`, `<stisla::separator>`, dll.):

1. AI Agent **WAJIB** membuat file dokumentasi penggunaannya di folder `docs/tall/{nama-komponen}.md`.
2. **DILARANG MENGEDIT DOKUMENTASI ASLI STISLA**: File spesifikasi di folder `docs/stisla/*.md` adalah dokumentasi acuan asli Stisla vanilla dan bersifat **READ-ONLY**. AI Agent **SANGAT DILARANG** mengubah, mengedit, atau menghapus file apa pun di bawah `docs/stisla/`. File yang dibuat atau diubah HANYA file dokumentasi versi TALL Stack di bawah folder `docs/tall/*.md`.
3. **Preservasi Struktur Section 1-Banding-1**: Dokumentasi di `docs/tall/{nama-komponen}.md` **HARUS SEMIRIP MUNGKIN** dengan struktur dokumentasi sumbernya di `docs/stisla/{nama-komponen}.md`.
4. **DILARANG MENGGABUNG ATAU MERINGKAS SECTION**: Setiap section utama (`## Judul Section`) dari `docs/stisla/{nama-komponen}.md` **WAJIB dipertahankan secara utuh**. Dilarang menggabungkan berbagai variasi ke dalam satu section umum seperti `## Features & Variations`.
5. **Konversi Kode ke Blade Syntax**: Isi penjelasan teks dan hierarki section tetap sama dengan dokumen Stisla asli, hanya contoh blok kodenya yang diubah dari versi HTML/CSS/JS vanilla Stisla menjadi kode komponen Blade TALL Stack (`<stisla::{nama-komponen}>`).
6. **Pengecualian**: Pemisahan atau pengubahan struktur section HANYA boleh dilakukan jika pengguna (USER) secara eksplisit meminta perubahan tersebut.

---

## 2. Struktur File Dokumentasi Komponen (`docs/tall/{nama-komponen}.md`)

Setiap file `docs/tall/{nama-komponen}.md` harus mengikuti alur berikut:

```markdown
# {Nama Komponen}

{Deskripsi singkat fungsi komponen dari docs/stisla/{nama-komponen}.md}

## {Section 1 dari docs/stisla/{nama-komponen}.md}

{Penjelasan dari docs/stisla/{nama-komponen}.md}

\`\`\`blade
<stisla::{nama-komponen}>
...
</stisla::{nama-komponen}>
\`\`\`

## {Section 2 dari docs/stisla/{nama-komponen}.md}

{Penjelasan dari docs/stisla/{nama-komponen}.md}

\`\`\`blade
<stisla::{nama-komponen}>
...
</stisla::{nama-komponen}>
\`\`\`

... {Lanjutkan SEMUA section berikutnya persis sesuai docs/stisla/{nama-komponen}.md, termasuk section Customization} ...

## Props & Slots Reference

### Props

| Prop   | Type     | Default | Description               |
| :----- | :------- | :------ | :------------------------ |
| `tone` | `string` | `null`  | Intent warna komponen     |
| `vars` | `array`  | `[]`    | Array variabel CSS kustom |

### Slots

| Slot      | Description           |
| :-------- | :-------------------- |
| `default` | Konten utama komponen |
```

---

## 3. Pendaftaran di `README.md`

Setelah membuat `docs/tall/{nama-komponen}.md`, AI Agent harus memperbarui tabel **Components List** pada [README.md](file:///home/madhasoeki/Programming/Laravel/stisla/README.md) dengan status `Ready` dan menyertakan link ke dokumentasi yang baru dibuat.

Tabel di `README.md` harus ditambahkan baris baru dengan format:
`| **{Nama Komponen}** |  Ready | [docs/tall/{nama-komponen}.md](docs/tall/{nama-komponen}.md) | [docs/stisla/{nama-komponen}.md](docs/stisla/{nama-komponen}.md) |`
