<?php
include 'koneksi.php';
session_start();
$nama_ayah = $_POST["nama_ayah"];
$nama_ibu = $_POST["nama_ibu"];
$nomorhp = $_POST["nomorhp"];
$domisili = $_POST["domisili"];
$nama_ananda = $_POST["nama_ananda"];
$tgl_lahir = $_POST["tgl_lahir"];
$umur_ananda = $_POST["umur_ananda"];
$query = mysqli_query($koneksi, "INSERT INTO pasien (nama_ayah, nama_ibu, nomorhp, domisili, nama_ananda, tgl_lahir, umur_ananda) VALUES ('$nama_ayah','$nama_ibu','$nomorhp','$domisili','$nama_ananda','$tgl_lahir','$umur_ananda')")
    or die(mysqli_error($koneksi));
if ($query) {
    header("Location: adminpasien.php");
} else {
    echo "Gagal";
}
