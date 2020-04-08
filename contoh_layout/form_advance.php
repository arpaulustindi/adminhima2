<?php
$_r_ = '../';
include($_r_.'_tema/adminlte.php');

$tab_caption = 'Form Advance';
$judul_content = 'Contoh Form Advance';
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
            <small>File Contoh Form Advance Ada Pada : <b>contoh_layout/form_advance.php</b></small>
            <div class="row">
                <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">FORM ADVANCE</h3>
                            </div>
                        <!-- FORM ADVANCE -->
                        <form role="form" action="#" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <!-- Form Advance Group Text -->
                                <div class="form-group">
                                    <label for="kol_email">Contoh Text :</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="kol_text" id="kol_text" placeholder="Masukan Text/Nama/Akun/dlsb">
                                    </div>
                                </div>
                                <!-- /.Form Advance Group Text -->
                                <!-- Form Advance Group Angka -->
                                <div class="form-group">
                                    <label for="kol_email">Contoh Angka :</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><b>Rp.</b></span>
                                        </div>
                                        <input type="number" class="form-control" name="kol_angka" id="kol_angka" placeholder="Hanya Menerima Input Angka">
                                    </div>
                                </div>
                                <!-- /.Form Advance Group Angka -->
                                <!-- Form Advance Group Email -->
                                <div class="form-group">
                                    <label for="kol_email">Contoh Email :</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                        </div>
                                        <input type="email" class="form-control" name="kol_email" id="kol_email" placeholder="Masukan Email Anda">
                                    </div>
                                </div>
                                <!-- /.Form Advance Group Email -->
                                <!-- Form Advance Group Sandi -->
                                <div class="form-group">
                                    <label for="kol_sandi">Contoh Sandi :</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" name="kol_sandi" id="kol_sandi" placeholder="Sandi">
                                    </div>
                                </div>
                                <!-- /.Form Advance Group Sandi -->
                                <!-- Form Advance Group Select2 -->                                  
                                <div class="form-group">
                                    <label for="kol_select">Plugin Select2:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><b>...</b></span>
                                        </div>
                                        <select class="form-control select2bs4" name="kol_select" id="kol_select">
                                            <option value="1" selected>Satu</option>
                                            <option value="2" selected>Dua</option>
                                            <option value="3" selected>Tiga</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /Form Advance Group Select2 -->
                                <!-- Form Advance Group Date Picker --> 
                                <div class="form-group">
                                    <label for="kol_select">Plugin Datepicker:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control datepicker" name="kol_text" id="kol_text" placeholder="Pilih Tanggal">
                                    </div>
                                </div>
                                <!-- /Form Advance Group Date Picker -->
                            </div>

                            <div class="card-footer">
                            <!-- Form Advance Button -->
                            <button type="reset" class="btn btn-default"><i class="fas fa-sync"></i> Reset</button>
                            <button type="submit" class="btn btn-success float-right"><i class="fas fa-check"></i> Submit</button>
                            <!-- /.Form Advance Button -->
                            </div>
                        </form>
                        <!-- /.FORM ADVANCE -->
                        </div>
                </div>
            </div>
            <!--/.Content Sampai di sini-->
            <?php html_body_content_close();?>
    </div>
</body>
</html>
<script>    
    $(function () {
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        });
        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            startDate: '-3d'
        });
    })    
</script>