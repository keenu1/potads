<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<?php
session_start();
unset($_SESSION["konsul"]);
?>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logo.jpg">
  <link rel="icon" type="image/jpg" href="../assets/img/logo.jpg">

  <title>Potads</title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />

</head>

<body class="index-page bg-gray-200">

  <!-- Navbar -->
  <?php
  include 'phpnavbarpages.php';
  ?>

  <header class="header-2" id="home">
    <div class="page-header min-vh-75 relative" style="background-image: url('../assets/img/bg-konsul.jpg')">
      <span class="mask bg-gradient-primary opacity-4"></span>
    </div>
  </header>

  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

    <section class="my-1 py-5">
      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-5">
            <div class="col-lg-8">
              <h2 class="text-dark mb-0">Form Konsultasi Down Syndrome</h2>
              <p class="lead">Silakan melakukan pengisian sesuai arahan yang tersedia. </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-sm-5 mt-3">
        <div class="row">
          <div class="col-lg-3">
            <div class="position-sticky pb-lg-5 pb-3 mt-lg-0 mt-5 ps-2" style="top: 100px">
              <h3>Formulir Pasien </h3>
              <h6 class="text-secondary font-weight-normal pe-3">Identitas Orang Tua Serta Pasien.</h6>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="row mt-3">
              <!-- Buttons color -->
              <div class="col-12">
                <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7">
                  <div class="container border-bottom">
                    <div class="row justify-space-between py-0">
                      <div class="col-lg me-auto">
                        <form role="form" id="contact-form" method="post" action="phpproseskonsultasi.php" autocomplete="off">
                          <div class="row text-center py-5 ">
                          <div class="col-lg mx-auto">
                            <div class="input-group input-group-static">
                              <label>Nama Orang Tua Ananda (Ayah)</label>
                              <input class="form-control" placeholder="eg. Kurt Shelby" type="text">
                              <label>Nama Orang Tua Ananda (Ibu)</label>
                              <input class="form-control" placeholder="eg. Kurt Shelby" type="text">
                              <label>Kota Domisili Saat Ini. </label>
                              <input class="form-control" placeholder="eg.Bekasi type="text">
                              <label>Nomor Hp Orang Tua Ananda (Ayah/Ibu) </label>
                              <input class="form-control" placeholder="eg. 081111111111" type="text">
                              <label>Nama Ananda </label>
                              <input class="form-control" placeholder="eg. putri kalia" type="text">
                              <label>Jenis Kelamin Ananda</label>
                              <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                              <label class="form-check-label" for="flexRadioDefault1">
                                Laki-Laki
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                              <label class="form-check-label" for="flexRadioDefault2">
                                Perempuan
                              </label>
                            </div>
                          </div>
                        </div>
                              <label>Tanggal Lahir Ananda (Ayah)</label>
                              <input class="form-control" type="date">
                            </div>
                          </div>
                        </div> -->
                          <div class="row text-center py-1">
                          <div class="col-lg mx-auto text-start">
                          <a href="./pages/gejala.php" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-5 mt-md-0">Selanjutnya</a>