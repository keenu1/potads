<?php
include 'koneksi.php';
session_start();
$kode_gejala_lama = $_POST["kode_gejala_lama"];
$kode_gejala_baru = $_POST["kode_gejala_baru"];
$gejala = $_POST["gejala"];
$bobot = $_POST["bobot"];
$query = mysqli_query($koneksi, "UPDATE gejala SET nama_gejala='$gejala', bobot='$bobot', kode_gejala='$kode_gejala_baru' WHERE kode_gejala='$kode_gejala_lama'")
    or die(mysqli_error($koneksi));
if ($query) {
    header("Location: admingejala.php");
} else {
    echo "Gagal";
}
