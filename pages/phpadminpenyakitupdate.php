<?php
include 'koneksi.php';
session_start();
$kode_penyakit_lama = $_POST["kode_penyakit_lama"];
$kode_penyakit_baru = $_POST["kode_penyakit_baru"];
$penyakit = $_POST["penyakit"];
$nilai = $_POST["nilai"];
$query = mysqli_query($koneksi, "UPDATE penyakit SET nama_penyakit='$penyakit', nilai='$nilai', kode_penyakit='$kode_penyakit_baru' WHERE kode_penyakit='$kode_penyakit_lama'")
    or die(mysqli_error($koneksi));
if ($query) {
    header("Location: adminpenyakit.php");
} else {
    echo "Gagal";
}
