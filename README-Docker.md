# Docker Portfolio Zhulfi Bajra

Docker ini memakai:

- PHP 8.2 Apache
- MySQL 8.0
- MySQLi extension aktif
- phpMyAdmin
- Tailwind CSS CDN
- Tanpa npm, tanpa run dev

## Port

- Frontend/PHP: `8428`
- phpMyAdmin: `3126`
- MySQL tidak dibuka ke host, hanya dipakai antar-container.

## Cara menjalankan

```bash
docker compose up -d --build
```

Buka di browser:

```text
http://localhost:8428
```

Buka phpMyAdmin:

```text
http://localhost:3126
```

Login phpMyAdmin:

```text
Server   : mysql
Username : root
Password : root_password
```

Atau user database aplikasi:

```text
Username : portfolio_user
Password : portfolio_pass
Database : portfolio_db
```

## Cek MySQLi

Buka:

```text
http://localhost:8428/mysqli-check.php
```

Jika berhasil, akan tampil status koneksi MySQLi.

## Masuk container PHP

```bash
docker exec -it zhulfi_portfolio_php8 bash
```

Di dalam container, perintah berikut bisa digunakan:

```bash
apt update
nano index.html
composer install
php -v
php -m | grep mysqli
```

## Mengganti gambar, icon, dan logo

Semua asset dummy berada di:

```text
asset/image/
```

Silakan ganti file dummy dengan file asli milik Anda. Nama file dapat dipertahankan supaya HTML tidak perlu diubah.

## Menghentikan Docker

```bash
docker compose down
```

Jika ingin menghapus database juga:

```bash
docker compose down -v
```
