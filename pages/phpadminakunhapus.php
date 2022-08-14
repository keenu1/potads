<?php
include 'koneksi.php';
session_start();
$id = $_GET["id"];

$query = mysqli_query($koneksi, "DELETE FROM user WHERE id='$id'")
    or die(mysqli_error($koneksi));

if ($query) {
    header("Location: adminakun.php");
} else {
    echo "Gagal";
}
