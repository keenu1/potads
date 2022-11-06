<?php
session_start();
include 'koneksi.php';
//identitas pasien 
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

//PROSES PERHITUNGAN

//ambil gejala dari database
$gejala_database = mysqli_query($koneksi, "SELECT kode_gejala FROM gejala ")
or die(mysqli_error($koneksi));

//inisialisasi variabel array gejala
$array_gejala_database = array();

//masukin gejala database kedalam array
foreach ($gejala_database as $data) {
    array_push($array_gejala_database, $data['kode_gejala']);
}


//cek array
//print_r($array_gejala_database);

//inisialisasi gejala array yang dialami pasien
//array 1 (yang akan dipakai di perhitungan)

$array_gejala_pasien = array();

//cek gejala yang di alami
foreach ($array_gejala_database as $data) {
    if ($data == $_POST['' . $data]) {
        //masukin gejala yang dialami ke array gejala pasien
        array_push($array_gejala_pasien, $data);
        //cek data yang diambil
        //echo $data;
    }
}

//inisialisasi bobot gejala pasien array
//array Kode_penyakit Gx (yang akan dipakai di perhitungan)
$array_float_gejala_bobot_pasien = array();

//inisialisasi teta gejala pasien
//array Kode_penyakit Mx (yang akan dipakai perhitungan)
$array_teta_gejala_pasien = array();

//insialisasi hubungan gejala dengan penyakit 1
//array 3 (yang akan dipakai perhitungan)
$array_p01_gejala_pasien = array();
//insialisasi hubungan gejala dengan penyakit 1
//array 4 (yang akan dipakai perhitungan)
$array_p02_gejala_pasien = array();
//insialisasi hubungan gejala dengan penyakit 1
//array 5 (yang akan dipakai perhitungan)
$array_p03_gejala_pasien = array();


//cek data gejala yang di alami pasien
foreach ($array_gejala_pasien as $data) {
    //ambil bobot, hubungan gejala p01, p02, po3
    $query = mysqli_query($koneksi, "SELECT bobot, p01, p02, p03 FROM gejala WHERE kode_gejala = '$data'")
    or die(mysqli_error($koneksi));

    //AMBIL BOBOT
    //konvert ke string
    $result = mysqli_fetch_assoc($query);
    $resultstring = $result['bobot'];
    //cek string
    //echo $resultstring;
    //konvert ke float
    $float_bobot  = floatval($resultstring);
    //cek float
    // echo $float_bobot;
    array_push($array_float_gejala_bobot_pasien, $float_bobot); //bobot penyakit 
    array_push($array_teta_gejala_pasien, 1.0 - $float_bobot); //bobot teta

    //AMBIL HUBUNGAN GEJALA SAMA P01
    //konvert ke string
    $resultstring = $result['p01'];
    //konvert ke int
    $int_nilai = (int)$resultstring;
    array_push($array_p01_gejala_pasien, $int_nilai);
    //cek nilainya bener apa gk
    // echo $resultstring . ' p01 ';

    //AMBIL HUBUNGAN GEJALA SAMA P02
    //konvert ke string
    $resultstring = $result['p02'];
    $int_nilai = (int)$resultstring;
    array_push($array_p02_gejala_pasien, $int_nilai);
    //cek nilainya bener apa gk
    // echo $resultstring . ' p02 ';

    //AMBIL HUBUNGAN GEJALA SAMA P03
    //konvert ke string
    $resultstring = $result['p03'];
    $int_nilai = (int)$resultstring;
    array_push($array_p03_gejala_pasien, $int_nilai);
    //cek nilainya bener apa gk
    // echo $resultstring . ' p03 ';
}

//cek array yang akan dipake
/*print_r($array_gejala_pasien);
echo "<br><br>";
print_r($array_float_gejala_bobot_pasien);
echo "<br><br>";
print_r($array_p01_gejala_pasien);
echo "<br><br>";
print_r($array_p02_gejala_pasien);
echo "<br><br>";
print_r($array_p03_gejala_pasien);
echo "<br><br>";
print_r($array_teta_gejala_pasien);
echo "<br><br>";*/

//jumlah gejala
$jumlah_gejala_pasien = count($array_gejala_pasien);


// ******************************** RUMUS DEMSPTER SHAFER NYA DISINI SEPERTI APA ???? ***********************************************

//variable data yang cocok dengan kode penyakit p1
$temp_bobot_p1=0;
$temp_teta_p1=0;
$hasil_persentasi_p1=0;

//variable data yang cocok dengan kode penyakit p2
$temp_bobot_p2=0;
$temp_teta_p2=0;
$hasil_persentasi_p2=0;

//variable data yang cocok dengan kode penyakit p3
$temp_bobot_p3=0;
$temp_teta_p3=0;
$hasil_persentasi_p3=0;


for ($i = 0; $i < $jumlah_gejala_pasien; $i++) {
    //cek kode penyakit p1;
    if($array_p01_gejala_pasien[$i] == 1){
        $hasil_bobot_sementara = $array_float_gejala_bobot_pasien[$i];
        $hasil_teta_sementara = $array_teta_gejala_pasien[$i];

        if($temp_bobot_p1 == 0 && $temp_teta_p1 == 0){
            $temp_bobot_p1 = $hasil_bobot_sementara;
            $temp_teta_p1 = $hasil_teta_sementara;
        }else{
            $temp_bobot_p1 = ($temp_bobot_p1 * $hasil_bobot_sementara)+($temp_bobot_p1*$hasil_teta_sementara);
            $temp_bobot_p1 = ($temp_teta_p1*$hasil_teta_sementara);
        }
    }

    //cek kode penyakit p2;
    if($array_p02_gejala_pasien[$i] == 1){
        $hasil_bobot_sementara = $array_float_gejala_bobot_pasien[$i];
        $hasil_teta_sementara = $array_teta_gejala_pasien[$i];

        if($temp_bobot_p2 == 0 && $temp_teta_p2 == 0){
            $temp_bobot_p2 = $hasil_bobot_sementara;
            $temp_teta_p2 = $hasil_teta_sementara;
        }else{
            $temp_bobot_p2 = ($temp_bobot_p2 * $hasil_bobot_sementara)+($temp_bobot_p2*$hasil_teta_sementara);
            $temp_bobot_p2 = ($temp_teta_p2*$hasil_teta_sementara);
        }
    }

    //cek kode penyakit p3;
    if($array_p03_gejala_pasien[$i] == 1){
        $hasil_bobot_sementara = $array_float_gejala_bobot_pasien[$i];
        $hasil_teta_sementara = $array_teta_gejala_pasien[$i];

        if($temp_bobot_p3 == 0 && $temp_teta_p3 == 0){
            $temp_bobot_p3 = $hasil_bobot_sementara;
            $temp_teta_p3 = $hasil_teta_sementara;
        }else{
            $temp_bobot_p3 = ($temp_bobot_p3 * $hasil_bobot_sementara)+($temp_bobot_p3*$hasil_teta_sementara);
            $temp_bobot_p3 = ($temp_teta_p3*$hasil_teta_sementara);
        }
    }
}

//ambil data penyakit dari database
$penyakit_database = mysqli_query($koneksi, "SELECT * FROM penyakit ")
or die(mysqli_error($koneksi));

$_SESSION['kode_penyakit'] = array();
$_SESSION['persentase_penyakit'] = array();

foreach ($penyakit_database as $data) {
    if($data['kode_penyakit'] == "P01"){
        echo "<br>";
        echo $data['nama_penyakit'];echo ", ";
        echo $hasil_bobot_p1 = ($temp_bobot_p1+$temp_teta_p1)*100;

        if($hasil_bobot_p1>0){
            array_push($_SESSION['kode_penyakit'],$data['kode_penyakit']);
            array_push($_SESSION['persentase_penyakit'],$hasil_bobot_p1+"%");
        }
    }
    if($data['kode_penyakit'] == "P02"){
        echo "<br>";
        echo $data['nama_penyakit'];echo ", ";
        echo $hasil_bobot_p2 = ($temp_bobot_p2+$temp_teta_p2)*100;

        if($hasil_bobot_p2>0){
           array_push($_SESSION['kode_penyakit'],$data['kode_penyakit']);
           array_push($_SESSION['persentase_penyakit'],$hasil_bobot_p2+"%");
        }
    }
    if($data['kode_penyakit'] == "P03"){
        echo "<br>";
        echo $data['nama_penyakit'];echo ", ";
        echo $hasil_bobot_p3 = ($temp_bobot_p3+$temp_teta_p3)*100;

        if($hasil_bobot_p3>0){
            array_push($_SESSION['kode_penyakit'],$data['kode_penyakit']);
            array_push($_SESSION['persentase_penyakit'],$hasil_bobot_p3+"%");
        }
    }
}

$_SESSION['konsul'] = "ya ada";
$_SESSION['nama_pasien'] = $nama_pasien = $_POST['nama'];
header("Location:hasilkonsultasi.php");