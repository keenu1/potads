<?php
ob_start();
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
$array_gejala_pasien = array();

//cek gejala yang di alami
foreach ($array_gejala_database as $data) {
    if (empty($_POST['' . $data])) {
        $_POST['' . $data] = "tidak";
    }

    if ($data == $_POST['' . $data]) {
        //masukin gejala yang dialami ke array gejala pasien
        array_push($array_gejala_pasien, $data);
        //cek data yang diambil
        echo $data;
    }
}

//inisialisasi bobot gejala pasien array
//array Kode_penyakit Gx (yang akan dipakai di perhitungan)
$array_kode_gejala_pasien = array();

//inisialisasi bobot gejala pasien array
//array Kode_penyakit Gx (yang akan dipakai di perhitungan)
$array_gejala_bobot_pasien = array();

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
    array_push($array_gejala_bobot_pasien, $float_bobot); //bobot penyakit 
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

//jumlah gejala
$jumlah_gejala_pasien = count($array_gejala_pasien);

// ******************************** RUMUS DEMSPTER SHAFER NYA DISINI SEPERTI APA ???? ***********************************************

$G = $array_gejala_bobot_pasien;
$t = $array_teta_gejala_pasien;
$P1 = $array_p01_gejala_pasien;
$P2 = $array_p02_gejala_pasien;
$P3 = $array_p03_gejala_pasien;

//check gejala inputan
for ($i = 0; $i < $jumlah_gejala_pasien; $i++) {

    echo $array_gejala_pasien[$i];
    echo "=>";
    echo $G[$i];
    echo "|";
    echo $P1[$i];
    echo $P2[$i];
    echo $P3[$i];
    echo "|";
    echo "teta";
    echo $t[$i];
    echo "<br>";
}

$kombinasi = array();
$tempkombinasi = array();
$hasilKombinasi = array();

//kombinasi
for ($i = 0; $i < $jumlah_gejala_pasien - 1; $i++) {
    echo "<br>";

    if ($i < 1) {
        array_push($kombinasi, $P1[$i] . $P2[$i] . $P3[$i] . "|" . $G[$i]);
        array_push($kombinasi, "0" . "0" . "0" . "|" . $t[$i]);

        //print_r($kombinasi);echo "<br>";

        //check baris_1
        for ($j = 0; $j < count($kombinasi); $j++) {
            $splitkombinasi = explode("|", $kombinasi[$j]);
            $splitpenyakit = str_split($splitkombinasi[0]);

            $penyakit = "";
            if ($j < count($kombinasi) - 1) {
                if ($splitpenyakit[0] == 1 && $P1[$i + 1] == 1) {
                    $penyakit = $P1[$i + 1];
                } else {
                    $penyakit = "0";
                }
                if ($splitpenyakit[1] == 1 && $P2[$i + 1] == 1) {
                    $penyakit = $penyakit . $P2[$i + 1];
                } else {
                    $penyakit = $penyakit . "0";
                }
                if ($splitpenyakit[1] == 1 && $P3[$i + 1] == 1) {
                    $penyakit = $penyakit . $P3[$i + 1];
                } else {
                    $penyakit = $penyakit . "0";
                }
            } else {
                $penyakit = $P1[$i + 1] . $P2[$i + 1] . $P3[$i + 1];
            }

            $temp = $penyakit . "|" . ($G[$i + 1] * $splitkombinasi[1]);
            array_push($hasilKombinasi, $temp);
        }

        //print_r($hasilKombinasi);echo "<br>";


        //check baris_2
        for ($j = 0; $j < count($kombinasi); $j++) {
            $splitkombinasi = explode("|", $kombinasi[$j]);
            $splitpenyakit = str_split($splitkombinasi[0]);

            $penyakit = "";
            $penyakit = $splitkombinasi[0];

            $temp = $penyakit . "|" . ($t[$i + 1] * $splitkombinasi[1]);
            array_push($hasilKombinasi, $temp);
        }

        //print_r($hasilKombinasi);echo "<br>";

        $temp_bobot = 0;
        $temp_teta = 0;
        $kombinasi = array();
        $temp_penyakit = array();

        $tempHimpunanKosong = 0;
        //hasil
        for ($j = 0; $j < count($hasilKombinasi) - 1; $j++) {
            $splitCombine = explode("|", $hasilKombinasi[$j]);
            if ($splitCombine[0] == "000") {
                $tempHimpunanKosong = $tempHimpunanKosong + $splitCombine[0];
                echo $tempHimpunanKosong . "<br>";
            } else {
                if ($temp_penyakit == null) {
                    array_push($temp_penyakit, $splitCombine[0]);
                }
                $validate = false;
                foreach ($temp_penyakit as $data) {
                    if ($data == $splitCombine[0]) {
                        $validate = true;
                    }
                }
                if ($validate == false) {
                    if ($splitCombine[0] == "000") {
                        $tempHimpunanKosong = $tempHimpunanKosong + $splitCombine[0];
                        echo $tempHimpunanKosong . "<br>";
                    } else {
                        array_push($temp_penyakit, $splitCombine[0]);
                    }
                }
            }
        }


        //print_r($temp_penyakit);echo "<br>";
        foreach ($temp_penyakit as $data) {
            foreach ($hasilKombinasi as $hasil) {
                $splitCombine = explode("|", $hasil);
                if ($data == $splitCombine[0]) {
                    $temp_bobot = $temp_bobot + $splitCombine[1];
                }
            }
            $temp_bobot = $temp_bobot / (1 - $tempHimpunanKosong);

            array_push($tempkombinasi, $data . "|" . $temp_bobot);
            $temp_bobot = 0;
        }

        //teta
        $splitCombine = explode("|", $hasilKombinasi[count($hasilKombinasi) - 1]);
        $temp_teta = $splitCombine[1] / (1 - $tempHimpunanKosong);

        array_push($tempkombinasi, "000|" . $temp_teta);

        $hasilKombinasi = array();

        $kombinasi = $tempkombinasi;
        $tempkombinasi = array();
    } else {
        //print_r($kombinasi);echo "<br>";
        //echo $P1[$i+1].$P2[$i+1].$P3[$i+1]."|".$G[$i+1].",".$t[$i+1];echo "<br>";

        //check baris_1
        for ($j = 0; $j < count($kombinasi); $j++) {
            $splitkombinasi = explode("|", $kombinasi[$j]);
            $splitpenyakit = str_split($splitkombinasi[0]);

            $penyakit = "";
            if ($j < count($kombinasi) - 1) {

                if ($splitpenyakit[0] == 1 && $P1[$i + 1] == 1) {
                    $penyakit = $P1[$i + 1];
                } else {
                    $penyakit = "0";
                }
                if ($splitpenyakit[1] == 1 && $P2[$i + 1] == 1) {
                    $penyakit = $penyakit . $P2[$i + 1];
                } else {
                    $penyakit = $penyakit . "0";
                }
                if ($splitpenyakit[2] == 1 && $P3[$i + 1] == 1) {
                    $penyakit = $penyakit . $P3[$i + 1];
                } else {
                    $penyakit = $penyakit . "0";
                }
            } else {
                $penyakit = $P1[$i + 1] . $P2[$i + 1] . $P3[$i + 1];
            }

            $temp = $penyakit . "|" . ($G[$i + 1] * $splitkombinasi[1]);
            array_push($hasilKombinasi, $temp);
        }
        //print_r($hasilKombinasi);echo "<br>";


        //check baris_2
        for ($j = 0; $j < count($kombinasi); $j++) {
            $splitkombinasi = explode("|", $kombinasi[$j]);
            $splitpenyakit = str_split($splitkombinasi[0]);

            $penyakit = "";
            $penyakit = $splitkombinasi[0];

            $temp = $penyakit . "|" . ($t[$i + 1] * $splitkombinasi[1]);
            array_push($hasilKombinasi, $temp);
        }
        print_r($hasilKombinasi);
        echo "<br>";

        $temp_bobot = 0;
        $temp_teta = 0;
        $kombinasi = array();
        $temp_penyakit = array();

        $tempHimpunanKosong = 0;
        //hasil
        for ($j = 0; $j < count($hasilKombinasi) - 1; $j++) {
            $splitCombine = explode("|", $hasilKombinasi[$j]);
            if ($splitCombine[0] == "000") {
                $tempHimpunanKosong = $tempHimpunanKosong + $splitCombine[0];
                echo $tempHimpunanKosong . "<br>";
            } else {
                if ($temp_penyakit == null) {
                    array_push($temp_penyakit, $splitCombine[0]);
                }
                $validate = false;
                foreach ($temp_penyakit as $data) {
                    if ($data == $splitCombine[0]) {
                        $validate = true;
                    }
                }
                if ($validate == false) {
                    if ($splitCombine[0] == "000") {
                        $tempHimpunanKosong = $tempHimpunanKosong + $splitCombine[0];
                        echo $tempHimpunanKosong . "<br>";
                    } else {
                        array_push($temp_penyakit, $splitCombine[0]);
                    }
                }
            }
        }


        //print_r($temp_penyakit);echo "<br>";
        foreach ($temp_penyakit as $data) {
            foreach ($hasilKombinasi as $hasil) {
                $splitCombine = explode("|", $hasil);
                if ($data == $splitCombine[0]) {
                    $temp_bobot = $temp_bobot + $splitCombine[1];
                }
            }
            $temp_bobot = $temp_bobot / (1 - $tempHimpunanKosong);

            array_push($tempkombinasi, $data . "|" . $temp_bobot);
            $temp_bobot = 0;
        }

        //teta
        $splitCombine = explode("|", $hasilKombinasi[count($hasilKombinasi) - 1]);
        $temp_teta = $splitCombine[1] / (1 - $tempHimpunanKosong);

        array_push($tempkombinasi, "000|" . $temp_teta);


        $hasilKombinasi = array();

        $kombinasi = $tempkombinasi;
        $tempkombinasi = array();
    }
    print_r($kombinasi);
    echo " kombinasi" . ($i + 1);

    echo "<br>";
}
echo "<br>";


//ambil data penyakit dari database
$penyakit_database = mysqli_query($koneksi, "SELECT * FROM penyakit ")
    or die(mysqli_error($koneksi));

$_SESSION['nama_penyakit'] = array();
$_SESSION['persentase_penyakit'] = array();

$nama_penyakit = array();

foreach ($penyakit_database as $data) {
    array_push($nama_penyakit, $data["nama_penyakit"]);
}
print_r($nama_penyakit);
echo "<br>";

//tambah array untuk menyimpan nilai 

$nilai_penyakit = array();

foreach ($kombinasi as $data) {
    $splitkombinasi = explode("|", $data);
    $splitpenyakit = str_split($splitkombinasi[0]);

    $temp_penyakit = array();
    $penyakit = "";

    if ($splitpenyakit[0] == 1) {
        array_push($temp_penyakit, $nama_penyakit[0]);
    }
    if ($splitpenyakit[1] == 1) {
        array_push($temp_penyakit, $nama_penyakit[1]);
    }
    if ($splitpenyakit[2] == 1) {
        array_push($temp_penyakit, $nama_penyakit[2]);
    }

    $penyakit = implode(", ", $temp_penyakit);

    if ($splitkombinasi[0] == "000") {
        $penyakit = "Kemungkinan semua penyakit";
    }

    echo "<br>";
    print_r($penyakit);

    array_push($_SESSION['nama_penyakit'], $penyakit);
    $bilanganBulat = round($splitkombinasi[1], 2);
    array_push($_SESSION['persentase_penyakit'], ($bilanganBulat * 100) . "%");
    array_push($nilai_penyakit, $bilanganBulat * 100);
}
echo "<br>";
print_r($_SESSION['nama_penyakit']);
echo "<br>";
print_r($_SESSION['persentase_penyakit']);

if (count($nilai_penyakit) == 0) {
    $hasil_konsultasi = 'sehat jasmani dan rohani';
} else {
    print_r($nilai_penyakit);

    //mencari nilai penyakit yang paling tinggi 
    $nilai_penyakit_max = max($nilai_penyakit);

    //mencari index nilai penyakit 
    $index_nilai_penyakit = array_search($nilai_penyakit_max, $nilai_penyakit);


    //print dari 
    echo "<br>";
    echo $_SESSION['nama_penyakit'][$index_nilai_penyakit];
    echo "<br>";
    echo $_SESSION['persentase_penyakit'][$index_nilai_penyakit];
    $hasil_konsultasi = $_SESSION['nama_penyakit'][$index_nilai_penyakit] . " " . $_SESSION['persentase_penyakit'][$index_nilai_penyakit];
}
$_SESSION['konsul'] = "ya ada";
$_SESSION['nama_pasien'] = $nama_pasien = $_POST['nama'];

//proses input ke data pasien 
$query = mysqli_query($koneksi, "INSERT INTO pasien (nama_ayah, nama_ibu, kota_domisili, nomor_hp, nama_pasien, jenis_kelamin, tanggal_lahir, umur, hasil_konsultasi) VALUES ('$nama_ayah','$nama_ibu','$kota_domisili','$nomor_hp', '$nama_pasien','$jenis_kelamin', '$tanggal_lahir', '$umur', '$hasil_konsultasi')")
    or die(mysqli_error($koneksi));

header("Location:hasilkonsultasi.php");
