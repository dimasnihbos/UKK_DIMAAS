<?php
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
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php include "navbar.php";
 ?>
  <div class="hero">
    <div class="container">
    <h1>SELAMAT DATANG DI </h1>
    <h1>APLIKASI LAYANAN PENGADUAN MASYARAKAT</h1>
  </div>
</div>
</body>
</html>
