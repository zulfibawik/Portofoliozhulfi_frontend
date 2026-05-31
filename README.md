# Zhulfi Portfolio Frontend

Frontend statis berbasis CSS lokal.

## Cara membuka

Langsung buka file:

```text
index.html
```

Tidak perlu `npm install`.
Tidak perlu `npm run dev`.
Tidak perlu build.

## Struktur asset

Semua gambar, icon, dan logo dummy berada di:

```text
asset/image/
```

Ganti file dummy dengan file asli milik Anda. Nama file bisa dipertahankan supaya tidak perlu mengubah HTML.

## Warna rancangan

- Warna 1: `#36ADA3`
- Warna 2: `#242F72`
- Warna 3: `#30578A`

## Font rancangan

- Font utama: `Fjalla One`
- Sub font: `Chiron Sung HK`

---

# Docker

File Docker tersedia di project ini.

Jalankan:

```bash
docker compose up -d --build
```

Buka frontend:

```text
http://localhost:8428
```

Buka phpMyAdmin:

```text
http://localhost:3126
```

Dokumentasi lengkap ada di `README-Docker.md`.
