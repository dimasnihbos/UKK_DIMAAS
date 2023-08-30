<?php
session_start();
include 'koneksi1.php';
$username = $_POST['username'];
$password = $_POST['password'];


$query = $koneksi->query("SELECT * FROM masyarakat WHERE username='$username' AND password='$password'");

$jumlahbaris = $query->rowCount();

if($jumlahbaris > 0){

    $data = $query->fetch();

    $_SESSION['nik'] = $data['nik'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['level'] = "masyarakat";
    

    header("location:halaman.php");
}else{
    $query = $koneksi->query("SELECT * FROM petugas WHERE username='$username' AND password='$password'");
    $jumlahbaris = $query->rowCount();

    if($jumlahbaris > 0){

    $data = $query->fetch();

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['id_petugas'] = $result['id_petugas'];
    $_SESSION['level'] = $result['level'];

    header("location:petugas.php");
}else{
    header("location: login.php");
}
}