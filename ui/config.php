<?php
$_SERVER = "localhost";
$USER = "root";
$PASSWORD = "";
$nama_database = "db_siswa";
$db = mysqli_connect($_SERVER, $USER, $PASSWORD, $nama_database);

if(!$db){
    die("Gagal terhubung dengan database" .mysqli_connect_error());
} else {
    // echo "berhasil koneksi";
}
?>