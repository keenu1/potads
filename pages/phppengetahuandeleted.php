<?php
include 'koneksi.php';
session_start();
$kode_penyakit = $_GET["kode_penyakit"];

$query = mysqli_query($koneksi, "DELETE FROM pengetahuan WHERE kode_penyakit='$kode_penyakit'")
    or die(mysqli_error($koneksi));

if ($query) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
} else {
    echo "Gagal";
}
unset($_SESSION["kode_penyakit"]);
