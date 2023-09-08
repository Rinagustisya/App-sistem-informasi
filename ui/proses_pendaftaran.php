<?php
include("config.php");
//cek apakah tombol simpan sudah diklik atau belum
if($_SERVER['REQUEST_METHOD'] == "POST"){
    //ambil data dari form
    $nis = $_POST['nis'];
    $nama = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $no_telp = $_POST['no_telp'];
    $kelas = $_POST['kelas'];
    //buat query
    $sql = "INSERT INTO siswa(nis, nama_lengkap, alamat, jenis_kelamin, no_telp, kelas)VALUE('$nis','$nama','$alamat','$jk','$no_telp','$kelas')";
    $query = mysqli_query($db, $sql) or die(mysqli_error($db));
    //apakah query update berhasil
    if($query){
        //kalau berhasil, alihkan ke halaman index.php dengan status=sukses
        header('Location:index.php?status=sukses');
    }else{
        //kalau gagal, alihkan ke halaman index.php dengan status = gagal 
        header('Location:index. php?status=gagal');
    }
}else{
    die("Akses dilarang ...");
}
?>