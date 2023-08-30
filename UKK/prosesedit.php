<?php
include 'koneksi.php';

$isi_laporan = $_POST['isi_laporan'];
$id = $_GET['id'];
// die($isi_laporan);


$query = $koneksi->query("UPDATE `pengaduan` SET isi_laporan='$isi_laporan' where id_pengaduan='$id'");

header("Location: home.php");

