<?php
/*Kunci public untuk Enskripsi
Apabila mengubah kunci public, makan hasilnya akan berbeda
Sarankan hanya mengubah kunci public di awal sebelum menyimpan data password user/akun*/
$public_key = 'h1mapr05SiTKKPNNU'; //Dapat Diubah (tanpa spasi, CASE SENSITIVE)



// Mulai Jangan Diubah
//++++++++++++++++++++
//Menggunakan Enskripsi SHA512
CRYPT_SHA512 == 1; //Metode Enskripsi

//Biasa digunakan untuk proses input/edit akun (sandi)
function proses_hash($private_key){ //Melakukan Enskripsi (untuk simpan sandi)    
    $hasil_hash = crypt($private_key, '$6$rounds=5000'.$public_key.'$'); //Melakukan Enskripsi
    return $hasil_hash; //Nilai kembalian berupa hasil enskripsi
}

//Biasa digunakan untuk proses login/verifikasi untuk mengubah sandi baru
function cek_hash($input, $hashed){ //Cek Hasil Inputan dengan Hasil Enskripsi Tersimpan
    $cocok = false; //Posisi awal tidak cocok/false/0
    if(password_verify($input, $hashed)){ //Melakukan proses verifikasi inut dan hash
        $cocok = true; //apabila verifikasi sama maka cocok = ya/true/1
    }
    return $cocok; //Nilai kembalian apabila 0/false tidak cocok, 1/true apabila cocokt
}
//----------------------
//.Selesai Jangan diubah
?>