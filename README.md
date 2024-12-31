# PT Sandana / Samator Healthcare

Created and maintained by [ivan@samatorhealthcare.com].
Supervised by [elbert@samatorhealthcare.com]

## Usage

This is a [Laravel](https://laravel.com/) project bootstrapped with [`composer create-project laravel/laravel:^10.0 subkon-app `] and filament (https://filamentphp.com/)

### Getting Started

1. clone with gitbash this project to local computer
2. open the folder of your git to code editor (e.g. VS code)
4. copy file of .env.example and rename to .env
5. setup the app_name and database based on your project
6. change the app_url to your port localhost to be able upload file
7. open the VS code terminal
8. run composer install in terminal to install composer in clone project
9. run php artisan migrate to run database migrate if any
10. run composer require filament/filament:"^3.2" -W to install filament
11. run php artisan vendor:publish --tag=filament-shield-config to config vendor 
12. run php artisan shield:install to install filament-shield policies
13. run php artisan key:generate to generate key for your app local
14. run php artisan serve to open in localhost
15. run php artisan make:policy YourModelName --model=YourModelName to add filament policy access
16. run php artisan storage:link to create mirroring Public folder for upload docs function

### Deploy on NiagaHoster or Hostinger

Niaga Hoster will provide hosting for this site

Check out [Niaga Hoster Hosting](https://www.niagahoster.co.id/) for more details.

## Terms and License

- Copyright 2024

## About Us

Sejak didirikan pada tanggal 6 Mei 1994, PT Sandana, yang merupakan anak perusahaan dari Samator Group, telah dikenal sebagai salah satu pemain utama di bidang perancangan, suplai, dan instalasi gas medis di Indonesia.
