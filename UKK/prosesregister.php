<?php

    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'pengaduanmasyarakat';

    $koneksi = mysqli_connect($hostname,$username,$password,$database);

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $tlp = $_POST['telp'];

    $koneksi -> query ("INSERT INTO `masyarakat` VALUES ('$nik','$nama','$user','$pass','$tlp')");
    header("location: login.php");

            
    ?>