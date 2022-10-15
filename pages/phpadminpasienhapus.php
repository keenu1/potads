<?php
include 'koneksi.php';
session_start();
$id_pasien = $_GET["id_pasien"];

$query = mysqli_query($koneksi, "DELETE FROM pasien WHERE id_pasien='$id_pasien'")
    or die(mysqli_error($koneksi));

if ($query) {
    header("Location: adminpasien.php");
} else {
    echo "Gagal";
}
unset($_SESSION["id_pasien"]);
