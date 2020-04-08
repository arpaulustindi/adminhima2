<?php
$_r_ = '../';
include($_r_.'_tema/adminlte.php');

$tab_caption = 'Halaman Kosong';
$judul_content = 'Contoh Halaman Beranda';
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
            <small>File Contoh Halaman Kosong Ada Pada : <b>contoh_layout/kosong.php</b></small>
            <!--/.Content Sampai di sini-->
            <?php html_body_content_close();?>
    </div>
</body>
</html>