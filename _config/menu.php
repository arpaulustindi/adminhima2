<?php
$_rl_ = 'http://localhost/adminhima2/'; #Sesuaikan dengan nama folder

menu_item_single('BERANDA',$_rl_,'fas fa-home'); //#Menambahkan Menu Item Single Beranda

menu_item_head(); //#Menambahkan Menu Head Contoh
menu_item_single(); //#Menambahkan Menu Item Single Contoh
    menu_tree_open(); //#-->Membuka Menu Tree Contoh
        menu_tree_item(); //#Menambahkan Menu Tree Item Contoh
    menu_tree_close(); //#<--Menutup Menu Tree Contoh

menu_item_head('CONTOH LAYOUT'); //#Menambahkan Menu Head "CONTOH LAYOUT
menu_item_single('HALAMAN KOSONG',$_rl_.'contoh_layout/kosong.php','fas fa-box'); //#Menambahkan Menu Item Single Halaman Kosong
    menu_tree_open('FORM','fas fa-edit'); //#-->Membuka Menu Tree FORM
        menu_tree_item('Form Awal (Kosong)',$_rl_.'contoh_layout/form_kosong.php'); //#Menambahkan Menu Tree Item Form Kosong
        menu_tree_item('Form Basic',$_rl_.'contoh_layout/form_basic.php'); //#Menambahkan Menu Tree Item Form Basic
        menu_tree_item('Form Advance',$_rl_.'contoh_layout/form_advance.php'); //#Menambahkan Menu Tree Item Form Advance
    menu_tree_close(); //#<--Menutup Menu Tree FORM
    menu_item_single('TABEL',$_rl_.'contoh_layout/tabel.php','fas fa-table'); //#Menambahkan Menu Item Single Tabel
    menu_item_single('GRAFIK',$_rl_.'contoh_layout/grafik.php','fas fa-chart-area'); //#Menambahkan Menu Item Chart

menu_item_head('CONTOH CRUD MYSQL'); //#Menambahkan Menu Head "CONTOH CRUD MYSQL
    menu_tree_open('DATA MASTER','fas fa-database'); //#-->Membuka Menu Tree DATA MASTER
        menu_tree_item('JURUSAN',$_rl_.'contoh_crud_mysql/master/jurusan'); //#Menambahkan Menu Tree Item Jurusan
        menu_tree_item('PROGRAM STUDI','#'); //#Menambahkan Menu Tree Item Prodi
    menu_tree_close(); //#<--Menutup Menu Tree DATA MASTER
menu_item_single('MAHASISWA',$_rl_.'#','fas fa-users'); //#Menambahkan Menu Item Single Mahasiswa

/*
CATATAN UNTUK Menu Tree 
dimulai dengan menu_tree_open(...)
ditutup dengan menu_tree_close(...)
*/
?>