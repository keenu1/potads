<?php
include 'koneksi.php';
session_start();
$kode_penyakit = $_POST["kode_penyakit"];
$nama_penyakit = $_POST["nama_penyakit"];
$nilai = $_POST["nilai"];
$deskripsi_penyakit = $_POST["deskripsi_penyakit"];
$solusi_penyakit = $_POST["solusi_penyakit"];

$query = mysqli_query($koneksi, "INSERT INTO penyakit (kode_penyakit, nama_penyakit, nilai,deskripsi_penyakit,solusi_penyakit) VALUES ('$kode_penyakit','$nama_penyakit','$nilai','$deskripsi_penyakit','$solusi_penyakit')")
    or die(mysqli_error($koneksi));
if ($query) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
} else {
    echo "Gagal";
}
