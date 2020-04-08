# ADMIN HIMA v2 Contoh

> Template Admin AdminLTE yang telah dimodifikasi untuk digunakan dengan PHP dan MySQL



Setelah belajar layout di adminhima versi 1di https://github.com/arpaulustindi/adminhima maka kita akan melanjutkan tutorial untuk CRUD Database MySQL.

Versi 2 ini telah dimodifikasi dan melakukan simplifikasi besar - besaran agar dapat mudah digunakan terutama untuk mahasiswa dalam penyusunan KTI / Skripsi Mahasiswa Sistem Informasi / Teknik Informatika. 

Minimum System Requirement :

- Apache 2
- PHP 7
- MySQL 5
- Browser Chrome (rekomendasi) / Firefox / Edge / Opera / dslb.  Install/Update min 2018
- Code Editor Visual Studio Code (rekomendasi) / Atom / Sublime / Dreamweaver / Notepad++ / dlsb



INSTALASI : 

1. Buat Database :  **adminhima2**

2. Buat Tabel : **jurusan**

   struktur tabel jurusan sebagai berikut

   | Kolom      | Type        | Property                   | Ket          |
   | ---------- | ----------- | -------------------------- | ------------ |
   | jurusan_id | Int         | Pimary Key, Auto Increment | Id Jurusan   |
   | jurusan    | Varchar(50) | -                          | Nama Jurusan |

   

3. Exctract File Download dengan nama folder **adminhima2**

   Struktur Folder

   adminhima2

   ├── _config

   │   ├── db.php

   │   ├── enskripsi.php

   │   └── menu.php

   └── _tema

   │	├── adminlte

   │    ├── dist    

   │    └── plugins

   │    └── adminlte.php

   ├── contoh_crud_mysql

   │   └── master

   │       └── jurusan

   │           ├── form.php

   │           ├── index.php

   │           └── proses.php

   ├── contoh_layout

   │   ├── form_advance.php

   │   ├── form_basic.php

   │   ├── form_kosong.php

   │   ├── grafik.php

   │   ├── kosong.php

   │   └── tabel.php

   ├── index.php

   ├── readme.md

   

   ​       

4. Tempatkan hasil extraksi di folder **htdocs**/**www** kalian

5. Buka Code Editor, kemudian konfigurasi database di file `_config/db.php` sesuai dengan pengaturan database kalian 

   ```php
   var $host = 'localhost'; // Nama/IP Adress MySQL
   var $user = 'root'; //username MySQL
   var $pass = ''; //password MySQL
   var $db = 'adminhima2'; //Nama Database yang dibuat
   var $port = '3306'; //Default Port MySQL
   ```

   

6. Buka browser dan masukan url `http://localhost/adminhima2`



[^1]: Untuk belajar tentang detail lengkap layout Admin LTE dapat mengunjungi https://adminlte.io/docs/2.4/layout
[^2]: Untuk nama-nama icon (Fontawsome) atau biasa pada tag <i class="fas/far ...></i>" silahkan mengunjungi https://fontawesome.com/icons?d=gallery

Selamat mencoba, kiranya hal sederhana ini mampu membantu kalian mencapai cita-cita, dan untuk keterangan lainnya lihat di file, bisa menggunakan code editor pilihan anda.

Untuk tutor video akan segera menyusul April 2020.

apabila ada pertanyaan silahkan kirim email ke Arifin P. Tindi di `paulustindi@gmail.com`