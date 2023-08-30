<?php
include "koneksi.php";

session_start();

if(!isset($_SESSION['nik'])){
  header("Location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php include "navbar.php" ?>
<div class="container">
<table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Nik</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">Status</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = "select * from pengaduan";
    $query = mysqli_query($koneksi, $sql);

    while ($pengaduan = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>" . $pengaduan['id_pengaduan'] . "</td>";
        echo "<td>" . $pengaduan['tgl_pengaduan'] . "</td>";
        echo "<td>" . $pengaduan['nik'] . "</td>";
        echo "<td>" . $pengaduan['isi_laporan'] . "</td>";?>
        <td><img width="100px" height="80px" src="foto/<?=$pengaduan['foto']?>" alt="" srcset=""></td>

        <?php echo "<td>" . $pengaduan['status'] . "</td>";
        echo "<td>";
        echo "<a href='halamanedit.php?id_pengaduan=" . $pengaduan['id_pengaduan'] . "'>Edit</a> | ";
        echo "<a href='proseshapus.php?id_pengaduan=" . $pengaduan['id_pengaduan'] . "'>Hapus</a>";
        echo "</td>";
        }
        ?>
  </tbody>
</table>
</div>
</body>
</html>