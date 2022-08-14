<?php
include 'koneksi.php';
session_start();
$kode_penyakit = $_POST["kode_penyakit"];
$nama_penyakit = $_POST["nama_penyakit"];
$nilai = $_POST["nilai"];
$query = mysqli_query($koneksi, "INSERT INTO penyakit (kode_penyakit, nama_penyakit, nilai) VALUES ('$kode_penyakit','$nama_penyakit','$nilai')")
    or die(mysqli_error($koneksi));
if ($query) {
    header("Location: adminpenyakit.php");
} else {
    echo "Gagal";
}
