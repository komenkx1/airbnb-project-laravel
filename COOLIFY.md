# Coolify Deployment Guide — Airbnb Laravel

Panduan deploy project Airbnb Laravel ke Coolify menggunakan Nixpacks.

## Prasyarat

- [ ] Project sudah dipush ke GitHub/GitLab/Bitbucket
- [ ] Sudah punya Server di Coolify
- [ ] Sudah punya file SQL dump data Airbnb
- [ ] Domain sudah diarahkan ke server Coolify (jika perlu)

---

## Langkah 1: Buat MySQL Database di Coolify

1. Buka Coolify Dashboard → klik **+ New**
2. Pilih **Database** → **MySQL**
3. Isi:
   - **Name**: `airbnb-db`
   - **Database Name**: `airbnb`
   - **Username**: `airbnb_user`
   - **Password**: (generate / custom)
4. Klik **Save**. Tunggu sampai status **running**.
5. Catat internal hostname-nya (contoh: `mysql-airbnb-db-xxxxx`).

---

## Langkah 2: Import File SQL ke Database

### Cara A — Via Terminal Coolify

1. Buka terminal database di Coolify.
2. Upload file SQL dump-mu.
3. Jalankan:
   ```bash
   mysql -u airbnb_user -p airbnb < /path/to/dump.sql
   ```
4. Masukkan password saat diminta.

### Cara B — Export Port Sementara

1. Di service database, **Expose** port public (misal ke 3307).
2. Dari laptop:
   ```bash
   mysql -h SERVER_IP -P 3307 -u airbnb_user -p airbnb < dump.sql
   ```
3. Setelah selesai, **disable** public port lagi.

---

## Langkah 3: Generate APP_KEY

Di laptop lokal, jalankan:

```bash
cd airbnb-project-laravel
php artisan key:generate --show
```

Copy output-nya, ini akan jadi `APP_KEY` di Coolify nanti.

---

## Langkah 4: Buat Application di Coolify

1. Klik **+ New** → **Application**
2. Pilih Git Source → repo `airbnb-project-laravel`
3. Branch: `main` / `master`
4. Build Pack: **Nixpacks** (otomatis terdeteksi dari `nixpacks.toml`)

### Environment Variables

Set environment variables berikut di Coolify (copy dari `.env.coolify.example`, sesuaikan nilai):

| Key | Value | Keterangan |
|-----|-------|------------|
| `APP_NAME` | `Airbnb` | |
| `APP_ENV` | `production` | |
| `APP_DEBUG` | `false` | |
| `APP_URL` | `https://domain-anda.com` | Ganti domain |
| `APP_KEY` | `base64:...` | Hasil generate langkah 3 |
| `DB_CONNECTION` | `mysql` | |
| `DB_HOST` | `mysql-airbnb-db-xxxxx` | Ganti dengan hostname DB langkah 1 |
| `DB_PORT` | `3306` | |
| `DB_DATABASE` | `airbnb` | |
| `DB_USERNAME` | `airbnb_user` | |
| `DB_PASSWORD` | `********` | Password dari langkah 1 |
| `CACHE_DRIVER` | `file` | |
| `SESSION_DRIVER` | `file` | |
| `QUEUE_CONNECTION` | `sync` | |
| `LOG_CHANNEL` | `stack` | |
| `FILESYSTEM_DISK` | `local` | |

### Port

- **Ports Exposes**: `10000`
- **Ports Mapped**: sesuaikan kebutuhan

5. Klik **Save** lalu **Deploy**.

---

## Langkah 5: Verifikasi

1. Cek log build — pastikan semua command di `nixpacks.toml` sukses
2. Akses app di URL domain atau IP:PORT
3. Cek apakah data muncul (berarti konek ke database hasil import)

---

## Troubleshooting

### Error: "No application encryption key has been specified"
→ `APP_KEY` belum diset. Generate ulang (langkah 3) dan set di Coolify.

### Error: "SQLSTATE[HY000] [2002] Connection refused"
→ `DB_HOST` salah. Cek internal hostname MySQL di Coolify.

### Error: "SQLSTATE[42S02]: Base table or view not found"
→ Database belum diimport atau nama database salah.

### Error: "Vite manifest not found"
→ Pastikan `npm run build` jalan di fase build. Cek `nixpacks.toml`.

### Error: "Missing required PHP extensions"
→ Tambahkan extension yang diperlukan di `nixpacks.toml` bagian `nixPackages`.

---

## Struktur File Deployment

```
airbnb-project-laravel/
├── nixpacks.toml          # Konfigurasi Nixpacks build
├── .nixpacksignore        # File yang di-exclude dari build
├── .env.coolify.example   # Template environment variable
├── COOLIFY.md             # File ini
├── Procfile               # Fallback start command
├── composer.json          # PHP dependencies
├── package.json           # Node dependencies
└── vite.config.js         # Vite config
```
