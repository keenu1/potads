<?php
include 'koneksi.php';
session_start();
$kode_gejala = $_GET["kode_gejala"];
if ($kode_gejala != null) {
    header("Location: admingejala.php?kode_gejala=$kode_gejala");
} else {
    echo "Gagal";
}
$kode_gejala == null;
