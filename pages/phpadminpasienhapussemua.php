<?php
include 'koneksi.php';

$query = mysqli_query($koneksi, "DELETE FROM pasien")
    or die(mysqli_error($koneksi));

if ($query) {
    header("Location: adminpasien.php");
} else {
    echo "Gagal";
}
