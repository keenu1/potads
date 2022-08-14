<?php
session_start();
include 'koneksi.php';

$nama = $_POST["nama"];
$email = $_POST["email"];
$password = $_POST["password"];
$password2 = $_POST["password2"];

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'")
    or die(mysqli_error($koneksi));

if ($data = mysqli_fetch_array($query)) {
    $_SESSION["email"] = $data["email"];
    $_SESSION["alertsignup"] = "Akun dengan email tersebut sudah terdaftar";
    $_SESSION["jenisalert"] = "danger";
    header("Location:sign-up.php");
} else if ($nama == "" || $nama == " ") {
    $_SESSION["alertsignup"] = "Nama Kosong";
    $_SESSION["jenisalert"] = "danger";
    header("Location:sign-up.php");
} else if ($email == "" || $email == " ") {
    $_SESSION["alertsignup"] = "Email Kosong";
    $_SESSION["jenisalert"] = "danger";
    header("Location:sign-up.php");
} else if ($password2 != $password) {
    $_SESSION["alertsignup"] = "Password tidak sama ";
    $_SESSION["jenisalert"] = "danger";
    header("Location:sign-up.php");
} else {
    $query = mysqli_query($koneksi, "INSERT  INTO user (email, password, tipe, nama, foto_profil) VALUES ('$email','$password',2,'$nama','none.jpg')")
        or die(mysqli_error($koneksi));
    $_SESSION["alert"] = "Akun anda sudah terdaftar silahkan masuk";
    $_SESSION["jenisalert"] = "success";
    header("Location:login.php");
}
