# Praktikum 4 : Autentikasi LaraPress

## Langkah-Langkah
1. Buka Terminal Masuk ke direktori proyek LaraPress Anda: <br>
```bash
   cd /path/to/LaraPress
```
2. Instalasi Breeze via Composer Perintah ini akan mengunduh paket Breeze dan dependensinya:<br>
```bash
   composer require laravel/breeze --dev
```
3. Jalankan perintah untuk menginstall breeze<br>
```bash
   php artisan breeze:install
```
- Ketik 'blade' untuk Blade with Alpine
- Ketik 'No' untuk Dark Mode Support
- Ketik '0' untuk Pest

4. Instalasi Dependensi Frontend Breeze menggunakan Tailwind CSS. Perintah ini akan menginstal dependensi JavaScript dari file package.json:<br>
```bash
   npm install
```
5. Kompilasi Aset Perintah ini akan meng-compile file CSS dan JS agar bisa digunakan oleh browser: <br>
```bash 
   npm run dev
```
6. Jalankan perintah 'php artisan migrate' untuk menambahkan kolom remember_token ke tabel users dan membuat tabel password_reset_tokens <br>
```bash 
   php artisan migrate
```
7. Tampilan Page Login ketika sudah berhasil
![alt text](image.png)
