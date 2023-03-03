Review Materi pada sesi 1:
1. mengintsall app VScode, server dengan XXamp, tools SQL dengan adminer, SQLyog
2. mengintsall extension seperti live server, php intelephense, php extension pack, prettier
3. memperbaiki masalah config php di vscode dengan cara crtl + "," lalu setting json dan menambahkan 
"php.validate.executablePath": "C:\\xampp\\php\\php.exe",
"php.debug.executablePath": "C:\\xampp\\php\\php.exe",
"php.validate.enable": true,
"php.validate.run": "onSave",
"php.suggest.basic": false
lalu dilanjutkan dengan mengedit path di env windows 
4. cara menjalan kan index.php yaitu dengan cara:
- live server
- running di terminal : php -S localhost:2222




running terminal :
php -S localhost:2222

extension (buat vscode)
- live server
- php intelephense
- php extension pack
- prettier - code formatter

install app
- vscode (visual studio code) : https://code.visualstudio.com/ - done
- notepad2 : https://notepad2.com/ - done
    pilih Download Notepad2 4.2.25 Setup (x64) 
- server
    - laragon (php 7.4)
        - apache
        - nginx
        - mysql / mariadb
    - xampp (7.4) - done
        - apache (server > nginx, litespeed, apache)
        - mysql
- sql tools
    - adminer > 1. digunakan
    - sqlyog > 2. digunakan
        > diberikan password : untuk mengakses adminer dan sqlyog
    - dbeaver
    - default bawaan dari xampp server (localhost/phpmyadmin)
    - heidesql


dxdiag
sistem requirement 64/32


tugas
-----

1. cara menjalankan aplikasi tugas (index.php)
2. jika extension menggunakan .php
    > membutuhkan live server (extension)
    > menjalankan dengan perintah php : php -S localhost:2222
3. jika extension menggunakan .html
    > open file index.html
    > bisa menggunakan live server (extension vscode)
4. isi alasan > mengambil kelas programmer web/web programming

format pengumpulan
- kodepeserta_namalengkap_tugas1
- 001_riodesra_tugas1.zip

struktur folder
- tugas > menggunakan yang ini
    - index.html/index.php
    - readme.txt
- sesi-1 > menggunakan yang ini


config vscode untuk php (ctrl + ,)
--- 
"php.validate.executablePath": "C:\\xampp\\php\\php.exe",
"php.debug.executablePath": "C:\\xampp\\php\\php.exe",
"php.validate.enable": true,
"php.validate.run": "onSave",
"php.suggest.basic": false