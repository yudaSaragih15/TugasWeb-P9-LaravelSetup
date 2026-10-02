# TugasWeb-P9-LaravelSetup

## Langkah Install
1. Clone repository ini.
2. Jalankan `composer install`.
3. Copy file `.env.example` menjadi `.env`.
4. Sesuaikan konfigurasi database di file `.env`.
5. Jalankan `php artisan key:generate`.
6. Jalankan `php artisan migrate`.
7. Jalankan `php artisan serve`.

## Penjelasan Struktur Folder
- `app/`: Berisi logika utama aplikasi (Controller, Model).
- `routes/`: Berisi definisi URL (web.php).
- `resources/views/`: Berisi file tampilan (HTML/Blade).
- `public/`: Berisi file yang bisa diakses publik (gambar, CSS, JS).
- `.env`: Berisi konfigurasi environment (database, app key).