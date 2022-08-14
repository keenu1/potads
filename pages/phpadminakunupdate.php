<?php
include 'koneksi.php';
session_start();
$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$tipe = $_POST['tipe'];
$query = mysqli_query($koneksi, "UPDATE user SET email='$email', password='$password', nama='$nama', tipe='$tipe' WHERE id='$id'")
    or die(mysqli_error($koneksi));
if ($query) {
    header("Location: adminakun.php");
} else {
    echo "Gagal";
}
