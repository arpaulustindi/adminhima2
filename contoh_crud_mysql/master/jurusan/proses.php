<?php
//Keterangan dengan kode # artinya harap disesuakan dengan rancangan aplikasi
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$_r_ = '../../../'; //#
$_rl_modul = 'http://localhost/adminhima2/contoh_crud_mysql/master/jurusan/'; //#

include($_r_.'/_config/db.php'); //Menambahkan File Database
$tbl_jur = new db(); //# deklarasi koneksi baru (untuk tabel jurusan)
$sql_jur = ""; //#SQL/MySQL Query Posisi Awal Kosong
$pesan = ''; //Pesan Posisi Awal Kosong
$mode_proses=''; //Mode Proses Posisi Awal Kosong
$param = ''; //Parameter Posisi Awal Kosong

//GROUP APABILA DISUBMIT DARI FORM $_POST (TAMBAH/EDIT)
if(isset($_POST['mode'])){
    $mode = $_POST['mode']; //#Mendapatkan mode (tambah/edit)
    $jurusan_id = $_POST['jurusan_id']; //#Mendapatkan id_jurusan
    $jurusan = $_POST['jurusan']; //#Mendapatkan jurusan

    if($mode == 'tambah'){ //Apabila Mode tambah
        $sql_jur = "INSERT INTO jurusan(jurusan) VALUES('".$jurusan."')"; //#SQL/MySQL Query tambah data pada tabel jurusan
        $pesan = 'Tambah Jurusan'; //#Seting isi variabel $pesan
    } else if($mode == 'edit'){ //Apabila Mode edit
        $sql_jur = "UPDATE jurusan SET jurusan = '".$jurusan."' WHERE jurusan_id = ".$jurusan_id; //#SQL/MySQL Query edit->update data pada tabel jurusan berdasarkan Primary Key (jurusan_id)
        $pesan = 'Edit Jurusan'; //#Seting isi variabel $pesan
    }
//.GROUP APABILA DISUBMIT DARI FORM (TAMBAH/EDIT)

//GROUP APABILA HREF $_GET DARI TABEL (HAPUS) dan mode=hapus
} else if(isset($_GET['mode']) && $_GET['mode']=='hapus'){ 
    $jurusan_id = $_GET['pk']; //#Mendapatkan id_jurusan dari variabel pk
    $sql_jur = "DELETE FROM jurusan WHERE jurusan_id = ".$jurusan_id; //#SQL/MySQL Query hapus data dari tabel jurusan berdasarkan Primary Key (jurusan_id)
    $pesan = 'Hapus Jurusan'; //#Seting isi variabel $pesan
}

//Melakukan Query
if(mysqli_query($tbl_jur->Conn(),$sql_jur)){ //Apabila Query berhasil
    $mode_proses = 'Berhasil'; //Seting isi variabel $mode_proses
    $param = 'success'; //Seting parameter variabel $param
} else { //Apabila Query gagal/error
    $mode_proses = 'Gagal'; //Seting isi variabel $mode_proses
    $param = 'error'; //Seting parameter variabel $param
}

//Redirect ke halaman index/tabel pada modul
header("location:index.php?proses=$param&pesan=$mode_proses $pesan");
?>