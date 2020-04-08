<?php
//Ket % bisa diubah
//Ket # sebaiknya jangan diubah

$_r_ = ''; //% 0 Escape ''  =>berada dalam folder yang sama dengan root folder aplikasi
/* 
$_r_ Merupakan jarak escape file dari folder induk
Contoh 1: 
-------------------------------
file pada adminhima2/index.php 
===============================
maka $_r_ = '';
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
Contoh 2:
--------------------------------------------
file pada adminhima2/contoh_curd_mysq/xxx.php
============================================
maka $_r_ = '../';
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
Contoh 3:
--------------------------------------------
file pada adminhima2/contoh_curd_mysq/master/jurusan/index.php
==============================================================
maka $_r_ = '../../../';
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/
include($_r_.'_tema/adminlte.php'); //# Menambahkan Library Template

$tab_caption = 'Beranda'; //% Caption pada tab browser
$judul_content = 'Halaman Beranda'; //% Judul Utama Pada Halaman
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php html_head();?>
    <?php html_link_css($_r_);?>
    <?php html_link_js($_r_);?>
    <title><?php echo $tab_caption;?></title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php html_body_nav();?>
            <?php html_body_sidebar_open();?>
                <?php sidebar_akun($_r_);?>
                <?php sidebar_menu_open();?>
                <?php include($_r_.'_config/menu.php');?>
                <?php sidebar_menu_close();?>
            <?php html_body_sidebar_close();?>

            <?php html_body_content_open($judul_content);?>
            <!--Mulai Conten dari sini-->
            <small>File Contoh Halaman Beranda : <b>index.php</b></small>
            <!--/.Content Sampai di sini-->
            <?php html_body_content_close();?>
    </div>
</body>
</html>