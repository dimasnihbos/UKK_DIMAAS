<?php
include "koneksi.php";

if (isset($_GET['id_pengaduan'])) {
    $id_pengaduan = $_GET['id_pengaduan'];

    $delete_query = "DELETE FROM pengaduan WHERE id_pengaduan = '$id_pengaduan'";
    $result = mysqli_query($koneksi, $delete_query);

    if ($result) {
        header("Location:home.php");
        exit ();
    } else {
        echo "Error deleting the complant.";
    }
} else {
    echo "Invalid request.";
}
?>