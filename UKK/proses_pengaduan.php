<?php
    include 'koneksi1.php';
    $isi = $_POST ['isi_Laporan'];

    session_start();
    if(!isset($_SESSION['nik']))
    //var_dump($_FILES['foto']);

    $nama_foto = $_FILES['foto']['name'];
    $asal_foto = $_FILES['foto']['tmp_name'];

    
    $tanggal = date('Y-m-d');
    $nik = $_SESSION['nik'];
    $status = "0";
    $result = $koneksi->query("INSERT INTO `pengaduan`(tgl_pengaduan, nik, isi_laporan, foto, status) VALUES ('$tanggal', '$nik', '$isi', '$nama_foto', '$status')");
    if($result){
        move_uploaded_file($asal_foto, "foto/$nama_foto");
        header("Location:home.php");
    }
    

