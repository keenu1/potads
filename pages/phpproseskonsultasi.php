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
// print_r($array_gejala_database);

//inisialisasi gejala array yang dialami pasien
//array 1 (yang akan dipakai di perhitungan)
$array_gejala_pasien = array();
//cek gejala yang di alami
foreach ($array_gejala_database as $data) {
    if ($data == $_POST['' . $data]) {
        //masukin gejala yang dialami ke array gejala pasien
        array_push($array_gejala_pasien, $data);
        //cek data yang diambil
        // echo $data;
    }
}

//inisialisasi bobot gejala pasien array
//array 2 (yang akan dipakai di perhitungan)
$array_float_gejala_bobot_pasien = array();

//insialisasi hubungan gejala dengan penyakit 1
//array 3 (yang akan dipakai perhitungan)
$array_p01_gejala_pasien = array();
//insialisasi hubungan gejala dengan penyakit 1
//array 4 (yang akan dipakai perhitungan)
$array_p02_gejala_pasien = array();
//insialisasi hubungan gejala dengan penyakit 1
//array 5 (yang akan dipakai perhitungan)
$array_p03_gejala_pasien = array();
//inisialisasi teta gejala pasien
//array 6 (yang akan dipakai perhitungan)
$array_teta_gejala_pasien = array();

foreach ($array_gejala_pasien as $data) {
    //ambil bobot, hubungan gejala p01, p02, po3
    $query = mysqli_query($koneksi, "SELECT bobot, p01, p02, p03 FROM gejala WHERE kode_gejala = '$data'")
        or die(mysqli_error($koneksi));

    //AMBIL BOBOT
    //konvert ke string
    $result = mysqli_fetch_assoc($query);
    $resultstring = $result['bobot'];
    //cek string
    // echo $resultstring;
    //konvert ke float
    $float_bobot  = floatval($resultstring);
    //cek float
    // echo $float_bobot;
    array_push($array_float_gejala_bobot_pasien, $float_bobot);
    array_push($array_teta_gejala_pasien, 1.0 - $float_bobot);

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

//cek array yang akan dipake di rumus demspter shafer
print_r($array_gejala_pasien);
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
echo "<br><br>";

//jumlah gejala
$jumlah_gejala_pasien = count($array_gejala_pasien);

//inisialisais variabel
$v1;
$v2;
$v3;
$v4;

$k1;
$k2;

$kombinasi_P1_P2_P3 = 0;
$kombinasi_P1 = 0;
$kombinasi_P1_P2 = 0;
$kombinasi_P1_P3 = 0;
$kombinasi_P2_P3 = 0;
$kombinasi_P3 = 0;

$teta_kombinasi;

$bobot_kombinasi;

$var1 = array();
$var2 = array();

// RUMUS DEMSPTER SHAFER ***

$gejala_database 
for ($i = 0; $i < $jumlah_gejala_pasien - 1; $i++) {

    if ($var1 == null) {
        array_push($var1, $array_p01_gejala_pasien[$i]);
        array_push($var1, $array_p02_gejala_pasien[$i]);
        array_push($var1, $array_p03_gejala_pasien[$i]);
    } else {
    }


    array_push($var2, $array_p01_gejala_pasien[$i + 1]);
    array_push($var2, $array_p02_gejala_pasien[$i + 1]);
    array_push($var2, $array_p03_gejala_pasien[$i + 1]);

    echo "hasil <br><br>";
    print_r($var1);
    echo '<br>';
    print_r($var2);
    echo '<br>';
    // print_r($var2);
    // echo '<br>';

    if ($var1[0] == $var2[0]) {
        if ($var1[1] == $var2[1]) {
            if ($var1[2] == $var2[2]) {
                echo "SAMAA";
                echo "<br><br>";

                echo "gejala 1 = ";
                print_r($var1);
                echo "<br>";
                echo "gejala 1 = ";
                print_r($var2);
                echo "<br>";

                $v1 = $array_float_gejala_bobot_pasien[$i] * $array_float_gejala_bobot_pasien[$i + 1];
                $v2 = $array_float_gejala_bobot_pasien[$i] * $array_teta_gejala_pasien[$i + 1];
                $v3 = $array_teta_gejala_pasien[$i]  * $array_float_gejala_bobot_pasien[$i];
                $v4 = $array_teta_gejala_pasien[$i + 1] * $array_teta_gejala_pasien[$i];

                $v1 = round($v1, 2);
                $v2 = round($v2, 2);
                $v3 = round($v3, 2);
                $v4 = round($v4, 2);

                echo "variabel 1 = " . $v1 . "<br>";
                echo "variabel 2 = " . $v2 . "<br>";
                echo "variabel 3 = " . $v3 . "<br>";
                echo "variabel 4 = " . $v4 . "<br>";

                $kombinasi_P1_P2_P3 = $v1 + $v2 + $v3;

                $teta_kombinasi = $v4;

                $kombinasi_P1_P2_P3 = round($kombinasi_P1_P2_P3, 2);

                echo "kombinasi = " . $kombinasi_P1_P2_P3 . "<br>";
                echo "teta kombinasi= " . $teta_kombinasi . "<br>";

                $var1 = $var1;
            }
        } else {
            if ($var1[2] == $var2[2]) {
            } else {
                if ($kombinasi_P1_P2_P3 == null && $kombinasi_P1 == null && $kombinasi_P2 == null && $kombinasi_P3 == null) {
                    echo "SAMAA P1 Pertama";
                    echo "<br><br>";

                    echo "gejala 1 = ";
                    print_r($var1);
                    echo "<br>";
                    echo "gejala 1 = ";
                    print_r($var2);
                    echo "<br>";

                    $v1 = $array_float_gejala_bobot_pasien[$i] * $array_float_gejala_bobot_pasien[$i + 1];
                    $v2 = $array_float_gejala_bobot_pasien[$i] * $array_teta_gejala_pasien[$i + 1];
                    $v3 = $array_teta_gejala_pasien[$i]  * $array_float_gejala_bobot_pasien[$i];
                    $v4 = $array_teta_gejala_pasien[$i + 1] * $array_teta_gejala_pasien[$i];

                    $v1 = round($v1, 2);
                    $v2 = round($v2, 2);
                    $v3 = round($v3, 2);
                    $v4 = round($v4, 2);

                    echo "variabel 1 = " . $v1 . "<br>";
                    echo "variabel 2 = " . $v2 . "<br>";
                    echo "variabel 3 = " . $v3 . "<br>";
                    echo "variabel 4 = " . $v4 . "<br>";

                    $kombinasi_P1 = $v1 + $v3;

                    $kombinasi_P1_P2_P3 = $v2;

                    $teta_kombinasi = $v4;

                    $kombinasi_P1_P2_P3 = round($kombinasi_P1_P2_P3, 2);
                    $kombinasi_P1 = round($kombinasi_P1, 2);

                    $teta_kombinasi = round($teta_kombinasi, 2);

                    echo "kombinasi = " . $kombinasi_P1_P2_P3 . "<br>";
                    echo "teta kombinasi= " . $teta_kombinasi . "<br>";

                    $var1 = $var1;
                } else {
                    echo "SAMAA P1";
                    echo "<br><br>";

                    echo "gejala 1 = ";
                    print_r($var1);
                    echo "<br>";
                    echo "gejala 1 = ";
                    print_r($var2);
                    echo "<br>";

                    if ($kombinasi_P1_P2_P3 != null) {
                        $v1 = $kombinasi_P1_P2_P3 * $array_float_gejala_bobot_pasien[$i + 1];
                        $v2 = $kombinasi_P1_P2_P3 * $array_teta_gejala_pasien[$i + 1];
                        $v3 = $array_teta_gejala_pasien[$i + 1]  * $teta_kombinasi;
                        $v4 = $array_teta_gejala_pasien[$i + 1] * $teta_kombinasi;
                    }

                    $v1 = round($v1, 2);
                    $v2 = round($v2, 2);
                    $v3 = round($v3, 2);
                    $v4 = round($v4, 2);

                    echo "variabel 1 = " . $v1 . "<br>";
                    echo "variabel 2 = " . $v2 . "<br>";
                    echo "variabel 3 = " . $v3 . "<br>";
                    echo "variabel 4 = " . $v4 . "<br>";

                    $kombinasi_P1 = $v1 + $v3;

                    $kombinasi_P1_P2_P3 = $v2;

                    $teta_kombinasi = $v4;

                    $kombinasi_P1_P2_P3 = round($kombinasi_P1_P2_P3, 2);
                    $teta_kombinasi = round($teta_kombinasi, 2);

                    echo "kombinasi = " . $kombinasi_P1_P2_P3 . "<br>";
                    echo "teta kombinasi= " . $teta_kombinasi . "<br>";

                    $var1 = $var1;
                }
            }
        }
    }




    $var1 = [];
    $var2 = [];

    echo "<br> " . $i . "<br> ";
}

//pengecekan siapa yang paling besar kombinasi valuenya 

echo "<br> " . "Pengecekan Value" . "<br> ";

echo "<br> " . $kombinasi_P1_P2_P3 . "<br> ";
echo "<br> " . $kombinasi_P1 . "<br> ";
echo "<br> " . $kombinasi_P2 . "<br> ";
echo "<br> " . $kombinasi_P3 . "<br> ";
echo "<br> " . $teta_kombinasi . "<br> ";

if ($kombinasi_P1_P2_P3 > $kombinasi_P1 && $kombinasi_P1_P2_P3 > $kombinasi_P2 && $kombinasi_P1_P2_P3 > $kombinasi_P3 && $kombinasi_P1_P2_P3 > $teta_kombinasi) {
    $_SESSION['hasil_bobot_akhir'] = $kombinasi_P1_P2_P3 . '%';
    $_SESSION['nama_penyakit_terindikasi'] = 'trisomi21, translokasi, dan mosaik';
} elseif ($kombinasi_P1 > $kombinasi_P1_P2_P3 && $kombinasi_P1 > $kombinasi_P2 && $kombinasi_P1 > $kombinasi_P3 && $kombinasi_P1 > $teta_kombinasi) {
    $_SESSION['hasil_bobot_akhir'] = $kombinasi_P1 . '%';
    $_SESSION['nama_penyakit_terindikasi'] = 'trisomi21';
} elseif ($kombinasi_P2 > $kombinasi_P1_P2_P3 && $kombinasi_P2 > $kombinasi_P1 && $kombinasi_P2 > $kombinasi_P3 && $kombinasi_P2 > $teta_kombinasi) {
    $_SESSION['hasil_bobot_akhir'] = $kombinasi_P2 . '%';
    $_SESSION['nama_penyakit_terindikasi'] = 'translokasi';
} elseif ($kombinasi_P3 > $kombinasi_P1_P2_P3 && $kombinasi_P3 > $kombinasi_P1 && $kombinasi_P3 > $kombinasi_P2 && $kombinasi_P3 > $teta_kombinasi) {
    $_SESSION['hasil_bobot_akhir'] = $kombinasi_P3 . '%';
    $_SESSION['nama_penyakit_terindikasi'] = 'mosaik';
} else {
    $_SESSION['hasil_bobot_akhir'] = $teta_kombinasi . '%';
    $_SESSION['nama_penyakit_terindikasi'] = 'Kemungkinan Semua Penyakit';
}


//cek mana yang lebih besar kemungkinananya 
echo "<br>" . $_SESSION['hasil_bobot_akhir'] . "<br>";
echo "<br>" . $_SESSION['nama_penyakit_terindikasi'] . "<br>";

//menyimpan kedalam session hasil_bobot yang dihitung pake rumus

//kirim hasil hitung ke session hasil_bobot akhir

$_SESSION['konsul'] = "ya ada";
header("Location:hasilkonsultasi.php");






// $query = mysqli_query($koneksi, "SELECT COUNT(*) as totalgejala FROM gejala")
//     or die(mysqli_error($koneksi));
// $jumlah_bobot = array();
// $jumlah_penyakit = array();
// $total_penyakit = 0;
// $nama_penyakit_yang_terdekat = "";
// $nilai_penyakit_yang_tederkat;
// if ($data = mysqli_fetch_array($query)) {
//     $jumlah = $data["totalgejala"];

//     //pengumpulan nilai
//     for ($i = 1; $i <= $jumlah; $i++) {
//         $bobot = $_POST['orangtua' . $i];
//         array_push($jumlah_bobot, $bobot);
//     }
//     for ($i = 1; $i <= $jumlah; $i++) {
//         $bobot = $_POST['bayi' . $i];
//         array_push($jumlah_bobot, $bobot);
//     }

//     $hasil_bobot = array_sum($jumlah_bobot);

//     //masuk rumus contoh 
//     $hasil_bobot = $hasil_bobot / 2;

//     //hasilnya adalah variabel $hasil bobot


//     //looping untuk mengambil nilai dari penyakit
//     $query = mysqli_query($koneksi, "SELECT * FROM penyakit")
//         or die(mysqli_error($koneksi));

//     foreach ($query as $data) {
//         $nilai = $data['nilai'];
//         array_push($jumlah_penyakit, $nilai);
//     }

//     //array yang menyimpan nilai-nilai penyakit
//     //$jumlah_penyakit

//     //proses mencari $hasil_bobot terdekat ke nilai penyakit
//     $terkecil = [];
//     foreach ($jumlah_penyakit as $i) {
//         $terkecil[$i] = abs($i - $hasil_bobot);
//     }
//     asort($terkecil);

//     $nilai_penyakit_yang_tederkat =  key($terkecil);

//     //mencari nama penyakit dengan nilai terdekat tersebut
//     $query = mysqli_query($koneksi, "SELECT * FROM penyakit WHERE CAST(nilai AS DECIMAL) = CAST($nilai_penyakit_yang_tederkat AS DECIMAL)")
//         or die(mysqli_error($koneksi));
//     if ($data = mysqli_fetch_array($query)) {
//         $nama_penyakit_yang_terdekat = $data['nama_penyakit'];
//     } else {
//         echo "gagal mencari nama penyakit";
//     }

//     //menyimpan kedalam session hasil_bobot yang dihitung pake rumus
//     $_SESSION['hasil_bobot_akhir'] = $hasil_bobot;
//     $_SESSION['nama_penyakit_terindikasi'] = $nama_penyakit_yang_terdekat;
//     $_SESSION['konsul'] = "ya ada";
//     // header("Location:hasilkonsultasi.php");
//     echo "berhasil";
// } else {
//     echo "gagal";
// }