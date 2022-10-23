<?php
include 'koneksi.php';
session_start();
$kode_gejala_lama = $_POST["kode_gejala_lama"];
$kode_gejala_baru = $_POST["kode_gejala_baru"];
$gejala = $_POST["gejala"];
$bobot = $_POST["bobot"];
$p01 = $_POST["p01"];
$p02 = $_POST["p02"];
$p03 = $_POST["p03"];
$query = mysqli_query($koneksi, "UPDATE gejala SET nama_gejala='$gejala', bobot='$bobot', kode_gejala='$kode_gejala_baru', p01 = '$p01', p02 = '$p02', p03 = '$p03' WHERE kode_gejala='$kode_gejala_lama'")
    or die(mysqli_error($koneksi));
if ($query) {
    header("Location: admingejala.php");
} else {
    echo "Gagal";
}
