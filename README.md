Praktikum 4 : Autentikasi LaraPress

1. Buka Terminal
Masuk ke direktori proyek LaraPress.

2. Instalasi Breeze via Composer
Jalankan perintah berikut untuk mengunduh paket Breeze:
bash
composer require laravel/breeze --dev

3. Jalankan Perintah Instalasi Breeze
Publikasikan semua file yang dibutuhkan:
bash
php artisan breeze:install

Pilih opsi yang muncul:
- 0 untuk Blade with Alpine
- no untuk Dark mode support
- Pilih framework testing (Pest jika ragu)

4. Instalasi Dependensi Frontend
Breeze menggunakan Tailwind CSS, jalankan:
bash
npm install

5. Kompilasi Aset
Compile file CSS dan JS:
bash
npm run dev

6. Jalankan Migrasi
Breeze menambahkan kolom baru ke tabel users dan membuat tabel password_reset_tokens:
bash
php artisan migrate

## HASIL SCREENSHOT
<img width="1919" height="1197" alt="image" src="https://github.com/user-attachments/assets/1984833a-7118-4f94-805b-0714a1642ee8" />
