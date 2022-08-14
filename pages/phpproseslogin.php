<?php
session_start();
include 'koneksi.php';
$email = $_POST["email"];
$password = $_POST["password"];
$query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' AND password='$password'")
    or die(mysqli_error($koneksi));

if ($data = mysqli_fetch_array($query)) {
    $_SESSION["email"] = $data["email"];
    $_SESSION["alert"] = "Anda Berhasil Login";
    $_SESSION["foto_profil"] = $data["foto_profil"];
    $_SESSION["tipe"] = $data["tipe"];
    if ($data["tipe"] == 1) {
        header("Location:admin.php");
    } else {
        header("Location:../index.php");
    }
} else {
    $_SESSION["alert"] = "Email atau Password Salah";
    $_SESSION["jenisalert"] = "danger";
    header("Location:login.php");
}
