<?php
//Keterangan dengan kode # artinya harap disesuakan dengan rancangan aplikasi
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$_r_ = '../../../'; //#

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
Contoh 3 File ini :
--------------------------------------------
file pada adminhima2/contoh_curd_mysq/master/jurusan/index.php
==============================================================
maka $_r_ = '../../../';
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/
include($_r_.'_tema/adminlte.php');

$tab_caption = 'Jurusan'; //#
$judul_content = 'Data Jurusan'; //#
$_rl_modul = 'http://localhost/adminhima2/contoh_crud_mysql/master/jurusan/'; #
/*
$_rl_modul merupakan lokasi sub folder root yang berisi file index.php (halaman tabel)
Contoh 1: 
-------------------------------
file index pada adminhima2/index.php 
===============================
maka $_rl_modul = 'http://localhost/adminhima2/';
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
Contoh 2:
--------------------------------------------
file pada adminhima2/contoh_curd_mysq/xxx.php
============================================
maka $_rl_modul = 'http://localhost/adminhima2/contoh_crud_mysql/';
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
Contoh 3 File ini :
--------------------------------------------
file pada adminhima2/contoh_curd_mysq/master/jurusan/index.php
==============================================================
maka $_rl_modul = 'http://localhost/adminhima2/contoh_crud_mysql/master/jurusan/';
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/

include($_r_.'/_config/db.php'); //Menambahkan File Database
$tbl_jur = new db(); //# tbl_jurusan bermakna 'Tabel Jurusan', jika mahasiswa maka $tbl_mhs
$sql_jur = "SELECT * FROM jurusan"; //#SQL/MySQL Query untuk baca data dari tabel jurusan
$query_jur = mysqli_query($tbl_jur->Conn(), $sql_jur); //Melakukan Query

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
            <small>File Contoh Data Jurusan Ada Pada : <b>contoh_crud_mysql/master/jurusan/index.php</b></small> <!--<small>....</small> Bisa dihapus-->         
            <div class="row">
                <div class="col-md-12">                
                        <div class="card card-primary">                            
                            <div class="card-header">
                                <h3 class="card-title">Data Jurusan</h3> <!--#-->
                                <a href="<?php echo $_rl_modul;?>form.php" class="btn btn-success float-right"><i class="fas fa-plus"></i> Tambah Jurusan</a>
                            </div>
                            <div class="card-body">                                
                                <!-- Tabel -->
                                <table class="table table-bordered table-striped tfull-feature">
                                <!-- Tabel Header-->
                                <thead>
                                    <!-- Baris-->
                                    <tr>
                                        <!-- Kumpulan Kolom Sesuia Kebutuhan (Terkait Tabel di DB)-->
                                        <th>No.</th> <!--#-->
                                        <th>Jurusan</th> <!--#-->
                                        <th>Aksi</th> <!--#-->
                                        <!-- /.Kumpulan Kolom-->
                                    </tr>
                                    <!-- /.Baris-->
                                </thead>
                                <!-- /.Tabel Header-->
                                <!-- Tabel Body-->
                                <tbody>
                                    <!-- Baris-->
                                    <?php
                                    $no = 0; //Deklarasi variabel Nomor Baris
                                    //Melakukan looping baca data hasilnya dalam variabel $row
                                    while($row = mysqli_fetch_array($query_jur)){
                                    $no++; //Increment nomor (nomor = nomor + 1)
                                    $pk_ = $row['jurusan_id']; //Defenisi kolom Primary Key pada Tabel   
                                    ?>
                                    <tr>
                                        <!-- Kumpulan Kolom-->
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $row['jurusan'];?></td> <!--# Menampilkan data jurusan-->
                                        <td>
                                            <a href="<?php echo $_rl_modul;?>form.php?mode=edit&pk=<?php echo $pk_;?>" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a> <!--Edit ke Form berdasarkan Primary Key -->
                                            <a href="<?php echo $_rl_modul;?>proses.php?mode=hapus&pk=<?php echo $pk_;?>" class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</a> <!--Hapus ke Proses berdasarkan Primary Key -->
                                        </td>
                                        <!-- /.Kumpulan Kolom-->
                                    </tr>
                                    <?php } ?>
                                    <!-- /.Baris-->                                        
                                </tbody>
                                <!-- /.Tabel Body-->
                                </table>
                                <!-- /.Tabel -->
                            </div>
                        </div>
                </div>
            </div>
            <!--/.Content Sampai di sini-->
            <?php html_body_content_close();?>
    </div>
</body>
</html>
<script>
    //Java Script Saat Halaman/Page Diload    
    $(function () {
        //Setting Javascript Untuk Tabel
        $('.tfull-feature').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        //.Setting Javascript Untuk Tabel

        //Setting Javascript Untuk Pesan (Alert Setelah Melakukan Proses)
        <?php
        if(isset($_GET['proses'])){?>
        Swal.fire({
            position: 'top-end',
            icon: '<?php echo $_GET['proses'];?>',
            title: '<?php echo $_GET['pesan'];?>',
            showConfirmButton: false,
            timer: 3500
        });
        <?php } ?>
        //.Setting Javascript Untuk Pesan (Alert Setelah Melakukan Proses)
    });
    //.Java Script Saat Halaman/Page Diload 

</script>