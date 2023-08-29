<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    <header class="text-center"><h3>Daftar Siswa</h3></header>
    <br>

    <!-- button tambah -->
    <div class="row">
    <div class="col-2 d-md-flex justify-content-md-end">
    <a href="form.php"><button class="btn btn-outline-success" type="button">Tambah Baru</button></a>
    </div>
    </div>

    <div class="container mb-3">
        <table class="table table-hover" cellspading="8">
            <thread>
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Telepon</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thread>
            <tbody>
                <?php
                    $sql = "SELECT * FROM siswa";
                    $query = mysqli_query($db, $sql);
                        while($siswa = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            echo "<td>".$siswa['nis']."</td>";
                            echo "<td>".$siswa['nama_lengkap']."</td>";
                            echo "<td>".$siswa['alamat']."</td>";
                            echo "<td>".$siswa['jenis_kelamin']."</td>";
                            echo "<td>".$siswa['no_telp']."</td>";
                            echo "<td>".$siswa['kelas']."</td>";
                            echo "<td>";
                            echo "<a href= 'form.php?nis=".$siswa['nis']."'>Edit</a> | ";
                            echo "<a href= 'hapus.php?nis=".$siswa['nis']."'>Hapus</a> ";
                            echo "</td>";
                            echo "</tr>";
                        }
                ?>
            </tbody>
        </table>
        <p> Total data : 
            <?php echo mysqli_num_rows($query) ?>
        </p>
    </div>
</body>
</html>