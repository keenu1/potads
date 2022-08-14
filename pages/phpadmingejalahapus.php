<?php
include 'koneksi.php';
session_start();
$kode_gejala = $_GET["kode_gejala"];

$query = mysqli_query($koneksi, "DELETE FROM gejala WHERE kode_gejala='$kode_gejala'")
    or die(mysqli_error($koneksi));

if ($query) {
    header("Location: admingejala.php");
} else {
    echo "Gagal";
}
unset($_SESSION["kode_gejala"]);
