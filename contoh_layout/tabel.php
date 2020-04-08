<?php
$_r_ = '../';
include($_r_.'_tema/adminlte.php');

$tab_caption = 'Tabel';
$judul_content = 'Contoh Tabel';
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
            <small>File Contoh Tabel Ada Pada : <b>contoh_layout/tabel.php</b></small>

            <div class="row">
                <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">TABEL : Data Table</h3>
                                <a href="#" class="btn btn-success float-right"><i class="fas fa-plus"></i> Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <!-- Tabel -->
                                <table class="table table-bordered table-striped tfull-feature">
                                <!-- Tabel Header-->
                                <thead>
                                    <!-- Baris-->
                                    <tr>
                                        <!-- Kumpulan Kolom-->
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Jurusan</th>
                                        <th>Prodi</th>
                                        <th>Aksi</th>
                                        <!-- /.Kumpulan Kolom-->
                                    </tr>
                                    <!-- /.Baris-->
                                </thead>
                                <!-- /.Tabel Header-->
                                <!-- Tabel Body-->
                                <tbody>
                                    <!-- Baris-->
                                    <tr>
                                        <!-- Kumpulan Kolom-->
                                        <td>1705001</td>
                                        <td>Mahasiswa 0</td>
                                        <td>TKK</td>
                                        <td>Sistem Informasi</td>
                                        <td>
                                            <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</a>
                                        </td>
                                        <!-- /.Kumpulan Kolom-->
                                    </tr>
                                    <!-- /.Baris-->
                                    <!-- Baris-->
                                    <tr>
                                        <!-- Kumpulan Kolom-->
                                        <td>1705002</td>
                                        <td>Mahasiswa A</td>
                                        <td>TKK</td>
                                        <td>Sistem Informasi</td>
                                        <td>
                                            <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</a>
                                        </td>
                                        <!-- /.Kumpulan Kolom-->
                                    </tr>
                                    <!-- /.Baris-->
                                    <!-- Baris-->
                                    <tr>
                                        <!-- Kumpulan Kolom-->
                                        <td>1705003</td>
                                        <td>Mahasiswa B</td>
                                        <td>TKK</td>
                                        <td>Sistem Informasi</td>
                                        <td>
                                            <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</a>
                                        </td>
                                        <!-- /.Kumpulan Kolom-->
                                    </tr>
                                    <!-- /.Baris-->
                                    <!-- Baris-->
                                    <tr>
                                        <!-- Kumpulan Kolom-->
                                        <td>1705004</td>
                                        <td>Mahasiswa C</td>
                                        <td>TKK</td>
                                        <td>Sistem Informasi</td>
                                        <td>
                                            <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</a>
                                        </td>
                                        <!-- /.Kumpulan Kolom-->
                                    </tr>
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
    $(function () {
        $('.tfull-feature').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        
    });
</script>