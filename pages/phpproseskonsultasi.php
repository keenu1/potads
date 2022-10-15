<?php
session_start();
include 'koneksi.php';
//identitas
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$kota_domisili = $_POST['kota_domisili'];
$nomor_hp = $_POST['no_hp'];
$nama_pasien = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$umur = $_POST['umur'];

//proses input ke data pasien 
$query = mysqli_query($koneksi, "INSERT INTO pasien (nama_ayah, nama_ibu, kota_domisili, nomor_hp, nama_pasien, jenis_kelamin, tanggal_lahir, umur) VALUES ('$nama_ayah','$nama_ibu','$kota_domisili','$nomor_hp', '$nama_pasien','$jenis_kelamin', '$tanggal_lahir', '$umur')")
    or die(mysqli_error($koneksi));

$query = mysqli_query($koneksi, "SELECT COUNT(*) as totalgejala FROM gejala")
    or die(mysqli_error($koneksi));
$jumlah_bobot = array();
$jumlah_penyakit = array();
$total_penyakit = 0;
$nama_penyakit_yang_terdekat = "";
$nilai_penyakit_yang_tederkat;
if ($data = mysqli_fetch_array($query)) {
    $jumlah = $data["totalgejala"];

    //pengumpulan nilai
    for ($i = 1; $i <= $jumlah; $i++) {
        $bobot = $_POST['orangtua' . $i];
        array_push($jumlah_bobot, $bobot);
    }
    for ($i = 1; $i <= $jumlah; $i++) {
        $bobot = $_POST['bayi' . $i];
        array_push($jumlah_bobot, $bobot);
    }

    $hasil_bobot = array_sum($jumlah_bobot);

    //masuk rumus contoh 
    $hasil_bobot = $hasil_bobot / 2;

    //hasilnya adalah variabel $hasil bobot


    //looping untuk mengambil nilai dari penyakit
    $query = mysqli_query($koneksi, "SELECT * FROM penyakit")
        or die(mysqli_error($koneksi));

    foreach ($query as $data) {
        $nilai = $data['nilai'];
        array_push($jumlah_penyakit, $nilai);
    }

    //array yang menyimpan nilai-nilai penyakit
    //$jumlah_penyakit

    //proses mencari $hasil_bobot terdekat ke nilai penyakit
    $terkecil = [];
    foreach ($jumlah_penyakit as $i) {
        $terkecil[$i] = abs($i - $hasil_bobot);
    }
    asort($terkecil);

    $nilai_penyakit_yang_tederkat =  key($terkecil);

    //mencari nama penyakit dengan nilai terdekat tersebut
    $query = mysqli_query($koneksi, "SELECT * FROM penyakit WHERE CAST(nilai AS DECIMAL) = CAST($nilai_penyakit_yang_tederkat AS DECIMAL)")
        or die(mysqli_error($koneksi));
    if ($data = mysqli_fetch_array($query)) {
        $nama_penyakit_yang_terdekat = $data['nama_penyakit'];
    } else {
        echo "gagal mencari nama penyakit";
    }

    //menyimpan kedalam session hasil_bobot yang dihitung pake rumus
    $_SESSION['hasil_bobot_akhir'] = $hasil_bobot;
    $_SESSION['nama_penyakit_terindikasi'] = $nama_penyakit_yang_terdekat;
    $_SESSION['konsul'] = "ya ada";
    header("Location:hasilkonsultasi.php");
    echo "berhasil";
} else {
    echo "gagal";
}
