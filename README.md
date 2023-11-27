<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects.

## Dokumentasi NeedKost - Artisan.Dev

clone project dari github dengan perintah berikut :
```bash
git clone https://github.com/ammarbahtiarasli/NeedKost---Artisan.Dev 'project-name'
cd project-name
```
Instal semua PHP dependency dengan menjalankan perintah berikut ini
```bash
composer install
```
Jangan lupa untuk menginstall semua node package yang kita butuhkan seperti:
```bash
npm install
```
Jika ingin dikembangkan, bisa dengan menjalankan
```bash
npm run dev
```


Buat 1 file dengan nama `.env` kemudian silakan copy semua yang ada di dalam file `.env.example` ke dalam file `.env`. Kemudian buka terminal kembali untuk generasi key baru.
```bash
php artisan key:generate
```
Buat 1 database, dan sesuaikan namanya dengan konfigurasi yang ada di file `.env`.
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=needkost
DB_USERNAME=root
DB_PASSWORD=
```
Setelah itu, jalankan perintah berikut pada terminal.
```bash
php artisan migrate
```
Setelah itu, jalankan `php artisan serve` untuk memulai server laravel nya.
dan jalankan juga `npm run dev` untuk rendering bagian front-end nya.

Silakan buat Pull Request jika ingin membuat perubahan, Sesuaikan dengan branch nya masing-masing.
Branch yang tersedia :
- Main (branch utama)
- Ammar
- Radit
- Salma
- Anggi

## Git Pull dan Git Push setiap mengerjakan

Sebelum lanjut mengerjakan progress di masing-masing branch, kita ganti branch ke main dan git pull dulu :
```bash
git checkout main
git pull
```

Setelah itu, pindah ke branch nya masing-masing :
```bash
git checkout {{ ammar , radit, salma, anggi }}

Setelah itu, jalankan `php artisan serve` untuk memulai server laravel nya.
dan jalankan juga `npm run dev` untuk rendering bagian front-end nya.

Jika sudah mengerjakan, push ke github dengan perintah berikut :
```bash
git init
git add .
git commit -m "task apa saja yang sudah dikerjakan"
git push
```

*jangan push langsung ke main, tapi push ke branch nya masing-masing.

`Last Edited 25/11/23 @artisan.dev`

