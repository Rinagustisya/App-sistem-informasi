<?php include('config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
</head>
<body>
<div class="container">
<div class="row">
<div class="col">
<header align="center"><h3>Daftar Siswa</h3></header>
<nav><a href="v_form.php"><button class="btn btn-success">Tambah Baru</button></a></nav>
<br>
<table cellpadding= "8" class="table table-striped table-hover">
<thead>
<tr>
<th>NIS</th>
<th>Nama</th>
<th>Alamat</th>
<th>Jenis Kelamin</th>
<th>No Telepon</th>
<th>Kelas</th>
<th>Tindakan</th>
</tr>
</thead>
<?php
$sql = "SELECT * FROM siswa";
$query = mysqli_query($db, $sql);
while($siswa = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$siswa['nis']."</td>";
    echo "<td>".$siswa['nama_lengkap']."</td>";
    echo "<td>".$siswa['alamat']."</td>";
    echo "<td>".$siswa['jenis_kelamin']."</td>";
    echo "<td>".$siswa['no_telp']."</td>";
    echo "<td>".$siswa['kelas']."</td>";
    echo "<td>";
    echo "<a href= 'v_edit.php?nis=".$siswa['nis']."'>Edit</a> | ";
    echo "<a href= 'hapus.php?nis=".$siswa['nis']."'>Hapus</a>";
    echo "</td>";
    echo "</tr>";
}
?>
</table>
<p>Total:
<?php echo mysqli_num_rows($query) ?>
</p>
</div>
</div>
</div>
</body>
</html>
