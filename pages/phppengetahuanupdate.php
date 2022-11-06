<?php
include 'koneksi.php';
session_start();
$kode_penyakit_lama = $_POST["kode_penyakit_lama"];
$kode_penyakit_baru = $_POST["kode_penyakit_baru"];
$penyakit = $_POST["penyakit"];
$deskripsi_penyakit = $_POST["deskripsi_penyakit"];
$solusi_penyakit = $_POST["solusi_penyakit"];

$query = mysqli_query($koneksi, "UPDATE pengetahuan SET nama_penyakit='$penyakit', deskripsi_penyakit='$deskripsi_penyakit', solusi_penyakit='$solusi_penyakit', kode_penyakit='$kode_penyakit_baru' WHERE kode_penyakit='$kode_penyakit_lama'")
    or die(mysqli_error($koneksi));
if ($query) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
} else {
    echo "Gagal";
}
