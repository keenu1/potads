<!--
=========================================================
* Material Kit 2 - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<?php
session_start();
?>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logo.jpg">
  <link rel="icon" type="image/jpg" href="../assets/img/logo.jpg">
  <title>
    Potads
  </title>
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

<body class="sign-in-basic">
  <!-- Navbar Transparent -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
    <div class="container">
      <a class="navbar-brand  text-white " href="../index.php" rel="tooltip" data-placement="bottom">
        Beranda
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
        <ul class="navbar-nav navbar-nav-hover ms-auto">
          <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages8" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
              Halaman
              <img src="../assets/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
              <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-2 d-lg-none d-block">
            </a>
            <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages8">
              <div class="d-none d-lg-block">
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                  Halaman Menu
                </h6>
                <a href="../index.php" class="dropdown-item border-radius-md">
                  <span>Beranda</span>
                </a>
                <a href="../pages/konsultasi.php" class="dropdown-item border-radius-md">
                  <span>Konsultasi</span>
                </a>
                <a href="../index.php#tentangKita" class="dropdown-item border-radius-md">
                  <span>Tentang Kita</span>
                </a>
                <!-- <a href="./pages/author.html" class="dropdown-item border-radius-md">
                  <span>Author</span>
                </a> -->
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                  Akun
                </h6>
                <a href="login.php" class="dropdown-item border-radius-md">
                  <span>Masuk</span>
                </a>
              </div>

              <div class="d-lg-none">
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                  Halaman
                </h6>

                <a href="./pages/about-us.php" class="dropdown-item border-radius-md">
                  <span>Konsultasi</span>
                </a>
                <a href="./pages/contact-us.php" class="dropdown-item border-radius-md">
                  <span>Tentang Kita</span>
                </a>

                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                  Akun
                </h6>
                <a href="login.php" class="dropdown-item border-radius-md">
                  <span>Masuk</span>
                </a>

              </div>
            </div>
          </li>
          <li class="nav-item dropdown dropdown-hover mx-2">
            <a href="./konsultasi.php" class="nav-link ps-2 d-flex cursor-pointer align-items-center" aria-expanded="false">
              <!-- <i class="material-icons opacity-6 me-2 text-md">dashboard</i> -->
              Konsultasi
            </a>
          </li>
          <!-- <li class="nav-item my-auto ms-3 ms-lg-0">
            <a href="https://www.creative-tim.com/product/material-kit-pro" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Bergabung Bersama Potads</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>

  <!-- End Navbar -->
  <div class="page-header align-items-start min-vh-100" style="background-image: url(../assets/img/bg_login2.jpg);" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row mt-2">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Daftar</h4>

              </div>
            </div>
            <div class="card-body">
              <?php
              include 'phpalertsign-up.php';
              ?>
              <form role="form" id="contact-form" method="post" action="phpprosessignup.php" autocomplete="off">
                <div class="card-body">
                  <div class="input-group input-group-dynamic mb-4">
                    <label class="form-label">Nama </label>
                    <input class="form-control" aria-label="Nama" type="text" name="nama">
                  </div>
                  <div class="input-group input-group-dynamic mb-4">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="" aria-label="email" name="email">
                  </div>
                  <div class="mb-4">
                    <div class="input-group input-group-dynamic">
                      <label class="form-label">Password</label>
                      <input type="password" class="form-control" name="password">
                    </div>
                  </div>
                  <div class="mb-4">
                    <div class="input-group input-group-dynamic">
                      <label class="form-label">Konfirmasi Password</label>
                      <input type="password" class="form-control" name="password2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <button type="submit" class="btn bg-gradient-primary w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Daftar</button>
                    </div>
                  </div>
                  <p class="mt-0 text-sm text-center">
                    Sudah punya akun? <a href="login.php" class="text-primary">Masuk</a>
                  </p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer position-absolute bottom-2 py-2 w-100">
      <div class="container">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-12 col-md-6 my-auto">
            <!-- <div class="copyright text-center text-sm text-white text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart" aria-hidden="true"></i> by
              <a href="http://keenu.epizy.com" class="font-weight-bold text-white" target="_blank"></a>.
            </div> -->
          </div>
          <div class="col-12 col-md-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <!-- <li class="nav-item">
                <a href="../index.php" class="nav-link text-white">Home</a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="../index.php#tentangKita" class="nav-link text-white"">Tentang Kita</a>
              </li> -->
              <!-- <li class=" nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-white" target="_blank">Down Syndrome</a>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="../assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>

</html>