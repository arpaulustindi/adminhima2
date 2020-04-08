<?php
class db{
    var $host = 'localhost'; // Nama/IP Adress MySQL
    var $user = 'phpmyadmin'; //username MySQL
    var $pass = 'admin'; //password MySQL
    var $db = 'adminhima2'; //Nama Database yang dibuat
    var $port = '3306'; //Default Port MySQL

    var $conn = null; //Deklarasi variabel Koneksi

    //0 :Konstruktor untuk konek database di MySQL
    function __construct(){ 
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db); //Koneksi MySQLi
        if (mysqli_connect_error()){ //Apabila terjadi kesalahan koneksi
            echo 'Gagal Koneksi Database : '.mysqli_connect_error(); //Tampilkan pesan kesalahan
        }
    }

    function Conn(){
        return $this->conn;
    }
}

?>