# Sistem Klinik (Sistem Temu Dokter)

## Deskripsi Proyek
Sistem ini dibuat untuk memenuhi tugas Bimbingan Karir dengan teknologi Laravel 11 yang menyediakan sistem pemeriksaan untuk klinik dengan tiga role pengguna: admin, pasien, dan dokter.

---

## Persyaratan
Pastikan Anda telah menginstal perangkat berikut:

1. **PHP**: Versi >= 8.3.7
2. **Composer**: Dependency Manager untuk PHP
3. **Database**: MySQL/MariaDB (atau database lain yang didukung Laravel)

---

## Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di mesin lokal Anda:

1. **Clone repository**:

   ```bash
   git clone https://github.com/username/repo-name.git
   cd repo-name
   ```

2. **Install dependencies**:

   Jalankan perintah berikut untuk menginstal dependencies PHP:

   ```bash
   composer install
   ```

3. **Salin file konfigurasi**:

   Salin file `.env.example` menjadi `.env`:

   ```bash
   cp .env.example .env
   ```

4. **Konfigurasi file `.env`**:

   Sesuaikan konfigurasi database di file `.env`:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database
   DB_USERNAME=username_database
   DB_PASSWORD=password_database
   ```

5. **Generate application key**:

   Jalankan perintah berikut untuk menghasilkan application key:

   ```bash
   php artisan key:generate
   ```

6. **Migrasi Database**:

   Jalankan perintah untuk membuat tabel di database:

   ```bash
   php artisan migrate
   ```


7. **Jalankan server lokal**:

   Jalankan perintah berikut untuk menjalankan server development Laravel:

   ```bash
   php artisan serve
   ```
