<?php
$_r_ = '../';
include($_r_.'_tema/adminlte.php');

$tab_caption = 'Form Basic';
$judul_content = 'Contoh Form Basic';
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
            <small>File Contoh Form Basic Ada Pada : <b>contoh_layout/form_basic.php</b></small>
            <div class="row">
                <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">FORM BASIC</h3>
                            </div>
                        <!-- FORM -->
                        <form role="form" action="#" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <!-- Form Group Text -->
                                <div class="form-group">
                                    <label for="kol_email">Contoh Text :</label>
                                    <input type="text" class="form-control" name="kol_text" id="kol_text" placeholder="Masukan Text/Nama/Akun/dlsb">
                                </div>
                                <!-- /.Form Group Text -->
                                <!-- Form Group Angka -->
                                <div class="form-group">
                                    <label for="kol_email">Contoh Angka :</label>
                                    <input type="number" class="form-control" name="kol_angka" id="kol_angka" placeholder="Hanya Menerima Input Angka">
                                </div>
                                <!-- /.Form Group Angka -->
                                <!-- Form Group Email -->
                                <div class="form-group">
                                    <label for="kol_email">Contoh Email :</label>
                                    <input type="email" class="form-control" name="kol_email" id="kol_email" placeholder="Masukan Email Anda">
                                </div>
                                <!-- /.Form Group Email -->
                                <!-- Form Group Sandi -->
                                <div class="form-group">
                                    <label for="kol_sandi">Contoh Sandi :</label>
                                    <input type="password" class="form-control" name="kol_sandi" id="kol_sandi" placeholder="Sandi">
                                </div>
                                <!-- /.Form Group Sandi -->
                                <!-- Form Group Text Area -->
                                <div class="form-group">
                                    <label for="kol_text_area">Text Area :</label>
                                    <textarea class="form-control" name="kol_text_area" id="kol_text_area">Isi Teks Area</textarea>
                                </div>
                                <!-- /.Form Group Text Area -->
                                <!-- Form Group File -->
                                <div class="form-group">
                                    <label for="kol_file">Masukan File</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="kol_file" id="kol_file">
                                            <label class="custom-file-label" for="kol_file">Pilih File</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.Form Group File -->
                                <!-- Form Group Select -->
                                <div class="form-group">
                                    <label for="kol_select">Select :</label>
                                    <select class="form-control" name="kol_select" id="kol_select">
                                        <option value="1" selected>Satu</option>
                                        <option value="2">Dua</option>
                                        <option value="3">Tiga</option>
                                    </select>
                                </div>
                                <!-- /.Form Group Select -->
                                <!-- Form Group Check -->
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="kol_ceka" name="kol_ceka" id="kol_ceka">
                                        <label class="form-check-label" for="kol_cek">Cek Pilihan A</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="kol_cekb" name="kol_cekb" id="kol_cekb">
                                        <label class="form-check-label" for="kol_cekb">Cek Pilihan B</label>
                                    </div>
                                </div>
                                <!-- /.Form Group Check -->
                                <!-- Form Group Radio -->
                                <div class="form-group">
                                    <div class="form-radio">
                                        <input type="radio" class="kol_cek" name="kol_opsi1" id="kol_opsi1">
                                        <label class="form-radio-label" for="kol_opsi">Opsi 1</label>
                                    </div>
                                    <div class="form-radio">
                                        <input type="radio" class="kol_cek" name="kol_opsi2" id="kol_opsi2">
                                        <label class="form-radio-label" for="kol_opsi2">Opsi 2</label>
                                    </div>
                                </div>
                                <!-- /.Form Group Radio -->
                                <!-- Form Group Hidden -->
                                <div class="form-group">
                                    <label for="kol_hidden">Contoh Hidden :</label>
                                    <input type="hidden" class="form-control" name="kol_hidden" id="kol_hidden" value="Tidak Ditampilkan /Hidden">
                                </div>
                                <!-- /.Form Group Hidden -->
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