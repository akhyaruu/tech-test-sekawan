# Deskripsi
Hanya digunakan untuk keperluan technical test perusahaan. Akan di privat sesegera mungkin apabila sudah selesai.

## Persiapan
MySQL ver. 5.7, PHP ver. ^7.3 atau ^8.0, Composer (package manager php)

## Tech Stack
Framework: laravel ver. 8, Library: jquery, datatable

## Cara Install
Clone repositori

    git clone https://github.com/akhyaruu/tech-test-sekawan.git

Pindah kedalam repositori folder

    cd tech-test-sekawan

Install semua dependency menggunakan composer

    composer install

Salin contoh file .env.example dan buat perubahan konfigurasi yang diperlukan di file .env tersebut

    cp .env.example .env

Generate application key yang baru

    php artisan key:generate


Jalankan migrasi database (**Atur koneksi database di .env sebelum di migrasi**)

    php artisan migrate --seed

Jalankan server lokal

    php artisan serve

Anda sekarang dapat mengakses server di http://127.0.0.1:8000/
