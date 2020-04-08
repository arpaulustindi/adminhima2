<?php
//Keterangan dengan kode # artinya harap disesuakan dengan rancangan aplikasi
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$_r_ = '../../../'; //#
include($_r_.'_tema/adminlte.php');

$_rl_modul = 'http://localhost/adminhima2/contoh_crud_mysql/master/jurusan/'; //#

//GROUP KONDISI AWAL (TAMBAH DATA)
$mode = 'tambah'; //#setting mode default (tambah data baru)
$jurusan_id = ''; //#Deklarasi variabel jurusan_id (lihat kolom pada tabel DB)
$jurusan = ''; //#Deklarasi variabel jurusan (lihat kolom pada tabel DB)
$btn_submit_caption = 'Tambah'; //#Caption pada tobol submit

$tab_caption = 'Tambah Jurusan'; //#Caption Tab
$judul_content = 'Tambah Jurusan Baru'; //#Judul halaman
//.GROUP KONDISI AWAL (TAMBAH DATA)

//GROUP APABILA KONDISI EDIT (EDIT DATA) 
if(isset($_GET['mode']) && $_GET['mode']== 'edit'){ //Apabila ada $_GET mode=edit
    $mode = 'edit'; //mode menjadi edit
    $jurusan_id = $_GET['pk']; //#primary key (jurusan_id) dari parameter $_GET pk=...

    include($_r_.'/_config/db.php'); //Menambahkan File Database
    $tbl_jur = new db(); //# deklarasi koneksi baru (untuk tabel jurusan)
    $sql_jur = "SELECT * FROM jurusan WHERE jurusan_id = ".$jurusan_id; //#SQL/MySQL Query untuk baca data dari tabel jurusan berdasarkan jurusan_id (PRIMARY KEY)
    $query_jur = mysqli_query($tbl_jur->Conn(), $sql_jur); //Melakukan Query
    $dt = mysqli_fetch_assoc($query_jur); //Membaca data sinle (1 baris dan disimpan dalam variabel $dt)

    $jurusan = $dt['jurusan']; //Inisalisasi variabel $jurusan berdasarkan data pada kolom jurusan
    $btn_submit_caption = 'Update'; //#Caption pada tobol submit

    $tab_caption = 'Edit Jurusan'; //#Caption Tab
    $judul_content = 'Edit Data Jurusan'; //#Judul halaman
}
//*GROUP APABILA KONDISI EDIT (EDIT DATA) 
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
            <small>File Contoh Form Jurusan Ada Pada : <b>contoh_crud_mysql/master/jurusan/form.php</b></small>
            <div class="row">
                <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Jurusan</h3>
                            </div>
                            <!-- FORM -->
                            <form role="form" action="<?php echo $_rl_modul;?>proses.php" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <!-- Form Group Text -->
                                    <div class="form-group">
                                        <label for="jurusan">Jurusan :</label> <!--#Inputan Kolom Jurusan-->
                                        <input type="text" value="<?php echo $jurusan;?>" class="form-control" name="jurusan" id="jurusan" placeholder="Masukan Nama Jurusan"> <!--#value dari $jurusan (di atas), name dan id sebaiknya sesuai nama kolom Tabel DB-->
                                    </div>
                                    <!-- /.Form Group Text -->
                                    <!-- Form Group Hidden -->
                                    <div class="form-group">
                                        <input type="hidden" value="<?php echo $mode;?>" class="form-control" name="mode" id="mode"> <!--value dari $mode (di atas), name dan id = mode -->
                                    </div>
                                    <!-- /.Form Group Hidden -->
                                    <!-- Form Group Hidden -->
                                    <div class="form-group">
                                        <input type="hidden" value="<?php echo $jurusan_id;?>" class="form-control" name="jurusan_id" id="jurusan_id"> <!--#value dari $jurusan_id (Primary Key) (di atas), name dan id sebaiknya sesuai nama kolom Tabel DB-->
                                    </div>
                                    <!-- /.Form Group Hidden -->
                                </div>

                                <div class="card-footer">
                                <!-- Form Button -->
                                <button type="reset" class="btn btn-default">Reset</button>
                                <button type="submit" class="btn btn-primary float-right"><?php echo $btn_submit_caption;?></button>
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