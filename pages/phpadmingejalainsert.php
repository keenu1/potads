<?php
include 'koneksi.php';
session_start();
$kode_gejala = $_POST["kode_gejala"];
$gejala = $_POST["gejala"];
$bobot = $_POST["bobot"];
$query = mysqli_query($koneksi, "INSERT INTO gejala (kode_gejala, nama_gejala, bobot) VALUES ('$kode_gejala','$gejala','$bobot')")
    or die(mysqli_error($koneksi));
if ($query) {
    header("Location: admingejala.php");
} else {
    echo "Gagal";
}
