<?php
$_r_ = '../';
include($_r_.'_tema/adminlte.php');

$tab_caption = 'Form Kosong';
$judul_content = 'Contoh Form Kosong';
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
            <small>File Contoh Form Kosong Ada Pada : <b>contoh_layout/form_kosong.php</b></small>
            <div class="row">
                <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">FORM KOSONG</h3>
                            </div>
                            <!-- FORM -->
                            <form role="form" action="#" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    Isi Form
                                </div>

                                <div class="card-footer">
                                <!-- Form Button -->
                                <button type="reset" class="btn btn-default">Reset</button>
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                                <!-- /.Form Button -->
                                </div>
                            </form>
                            <!-- /.FORM -->
                        </div>
                </div>
            </div>
            <!--/.Content Sampai di sini-->
            <?php html_body_content_close();?>
    </div>
</body>
</html>