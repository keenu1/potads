<?php
include 'koneksi.php';
session_start();
$email = $_POST['email'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$tipe = $_POST['tipe'];

$query = mysqli_query($koneksi, "INSERT INTO user ( email, password, nama, tipe) VALUES ('$email','$password','$nama','$tipe')")
    or die(mysqli_error($koneksi));
if ($query) {
    header("Location: adminakun.php");
} else {
    echo "Gagal";
}
