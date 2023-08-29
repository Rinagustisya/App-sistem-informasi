<?php
include("config.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // ambil data dari form
    $nis = $_POST['nis'];
    $nama = $_POST['nama_lengkap'];    
    $alamat = $_POST['alamat'];    
    $jk = $_POST['jenis_kelamin'];    
    $no_telp = $_POST['no_telp'];    
    $kelas = $_POST['kelas'];
    
    //buat query update
    $sql = "UPDATE siswa SET nama_lengkap='$nama', alamat='$alamat', jenis_kelamin='$jk' , no_telp='$no_telp' , kelas ='$kelas' WHERE nis=$nis";

    //check apakah update berhasil?
    if ($query) {
       header('location:index.php?status=sukses');
    } else {
        header('location:index.php?status=gagal');
    }

} else {
    die("Akses dilarang!!");
}
?>