<?php 
include("config.php");
if(isset($_GET['nis'])){
    //ambil nis dari query string
    $nis = $_GET['nis'];
    //buat query hapus
    $sql = "DELETE FROM siswa WHERE nis=$nis";
    $query = mysqli_query($db, $sql) or die(mysqli_error($db));
    //apakah query update berhasil?
    if ($query){
        //kalau berhasil, alihkan ke halaman index.php dengan status=sukses
        header('Location:index.php?status=sukses');
    } else{
        //kalau gagal, alihkan ke halaman index.php dengan status = gagal
        header('Location:index.php?status=gagal');
    }
} else{
    die("Akses dilarang ...");
}
?>