<?php
include("config.php");
if (isset($_GET['nis'])) {
    $title = "Edit";
    $url = 'proses_edit.php';
    $id = $_GET['nis'];

    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM siswa WHERE nis = $id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    // jika data yang diedit tidak ditemukan
    if (mysqli_num_rows($query) <1 ) {
        die("data tidak ditemukan...");
    } else {
    // url jika edit data
        $title = "Add";
        // url jika tambah data
        $url = 'proses_pendaftaran.php';
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Siswa</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    <header><h3 align="center">Formulir Siswa</h3></header>
    <br>
    <form action = "proses_pendaftaran.php" method = "POST">
    <div class="container">
    <div class="card">
    <div class="card-body">
            <div>
                <label for="nis"> NIS : </label><br>
                <input type = "text" name = "nis" value = "<?php if(isset($_GET['nis'])) {$siswa['nis'];}?>"/>
            </div>
            <div>
                <label for="nama_lengkap"> Nama : </label><br>
                <input type = "text" name = "nama_lengkap" value = "<?php if(isset($_GET['nis'])) {$siswa['nama_lengkap'];}?>"/>
            </div>
            <div>
                <label for="alamat"> Alamat : </label><br>
                <textarea name="alamat" row="5"><?php if(isset($_GET['nis'])) {$siswa['alamat'];}?></textarea>
            </div>
            <div>
                <label for="jenis_kelamin"> Jenis Kelamin : </label><br>
                <?php if(isset($_GET['nis'])) {$jk = $siswa['jenis_kelamin'];?>
                <td>
                    <input name="jenis_kelamin" type="radio" value="Laki-laki" <?php if($jk=='Laki-laki') {'checked';}?>>Laki laki
                    <input name="jenis_kelamin" type="radio" value="Perempuan" <?php if($jk=='perempuan') {'checked';}?>>Perempuan
                </td>
                <?php }else { ?>
                <td> <br>
                    <input name="jenis_kelamin" type="radio" value="Laki-laki">Laki laki
                    <input name="jenis_kelamin" type="radio" value="Perempuan">Perempuan
                </td>
                <?php } ?>
            </div>
            <br>
            <div>
                <label for="no_telp"> No_Telepon : </label><br>
                <input type = "text" name = "no_telp" value = "<?php if(isset($_GET['nis'])) {$siswa['no_telp'];}?>"/>
            </div>
            <div>
                <label for="kelas"> Kelas : </label><br>
                <input type = "text" name = "kelas" value = "<?php if(isset($_GET['nis'])) {$siswa['kelas'];}?>"/>
            </div>
            <hr>
            <div class="d-grid gap-2 col-2 mx-auto">
            <button type="simpan" class="btn btn-primary" value="simpan" name="simpan">Simpan</button>
            </div>
        </div>
        </div>
        </div>
    </form>
</body>
</html>