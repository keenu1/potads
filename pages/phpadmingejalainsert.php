<?php
include 'koneksi.php';
session_start();
$kode_gejala = $_POST["kode_gejala"];
$gejala = $_POST["gejala"];
$bobot = $_POST["bobot"];
$p01 = $_POST["p01"];
$p02 = $_POST["p02"];
$p03 = $_POST["p03"];

$query = mysqli_query($koneksi, "INSERT INTO gejala (kode_gejala, nama_gejala, bobot, p01, p02, p03) VALUES ('$kode_gejala','$gejala','$bobot', '$p01', '$p02', '$p03')")
    or die(mysqli_error($koneksi));
if ($query) {
    header("Location: admingejala.php");
} else {
    echo "Gagal";
}
