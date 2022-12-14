<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/logo.jpg">
  <link rel="icon" type="image/jpg" href="./assets/img/logo.jpg">

  <title>Sistem Pakar</title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />

</head>

<body class="index-page bg-gray-200">

  <!-- Navbar -->

  <?php
  session_start();
  include 'phpnavbarindex.php';
  ?>

  <header class="header-2" id="home">
    <div class="page-header min-vh-75 relative" style="background-image: url('./assets/img/bg2.jpg')">
      <span class="mask bg-gradient-primary opacity-5"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center mx-auto">
            <h1 class="text-white pt-3 mt-n5"> Sistem Pakar Deteksi Down Syndrome Pada Balita </h1>
            <p class="lead text-white mt-3"> <br> Menggunakan Metode Dempster Shafer Dengan Hasil Penelusuran Forward Chaining </br></p>
            <!-- <a href="./pages/konsultasi.php" class="btn btn-lg   bg-white text-primary  mb-0 me-1 mt-5 mt-md-0">Konsultasi</a> -->
            <div class="github-buttons">
              <a href="./pages/konsultasi.php" class="btn btn-lg bg-white   bg-gradient-white mb-5 mb-sm-0 text-primary text-lg">Konsultasi</a>
              <div class="github-button">
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6  ">

    <section class="my-5" id="DownSyndrome">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-12 my-auto">
            <h3 class="text-gradient text-primary mb-0"> Deskripsi Website </h3>
            <p class="pe-md-5 mb-5 justify-text mb-0 text-lg text-bold text-dark ">
              Sistem Pakar adalah sistem informasi yang berisi pengetahuan seorang pakar sehingga dapat digunakan untuk konsultasi. Pengetahuan seorang pakar yang dimiliki oleh Sistem Pakar ini digunakan sebagi dasar untuk menjawab pertanyaan.
              <br><br>
              Metode Dempster Shafer adalah metode ketidakpastian untuk menghasilkan diagnosis. Karena penambahan atau pengurangan fakta baru dalam bentuk informasi tentang gejala dan gangguan. Metode ini memberi para ahli kepercayaan diri dalam pengetahuan mereka.
            </p>
            <div class="github-buttons">
              <a href="tentang.php" target="_blank" class="btn bg-gradient-primary mb-5 mb-sm-0">Baca Lebih Lanjut</a>
              <div class="github-button">
                <span></span>
              </div>
            </div>
          </div>
          <div class="col-md-5 col-12 my-auto">
            <a href="#">
              <img class="w-100 border-radius-lg shadow-lg" src="./assets/img/Bayi-Syndrome.jpg" alt="Product Image">
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="pb-5 position-relative bg-gradient-dark mx-n3 " id="tentangKita">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-start mb-5 mt-5">
            <h3 class="text-white z-index-1 position-relative">Tentang Kami</h3>
            <p class="text-white opacity-8 mb-0">Penyelesaian Tugas Akhir Untuk Mendapatkan Gelar Sarjana.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="card card-profile mt-4">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                  <a href="javascript:;">
                    <div class="p-3 pe-md-0">
                      <!-- ganti gambar disini ganti bagian src nya dan taro gambar di folder assets/ image /  -->
                      <img class="w-100 border-radius-md shadow-lg" src="./assets/img/team-5.jpg" alt="image">
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                  <div class="card-body ps-lg-0">
                    <h5 class="mb-0">dr. Tri Yanti Rahayuningsih SpA (K)</h5>
                    <h6 class="text-gradient text-primary">Doktor Spesialis Jantung Anak</h6>
                    <p class="mb-0">dokter spesialis yang fokus dalam pemeriksaan dan pengobatan terkait gangguan jantung pada anak</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="card card-profile mt-4">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                  <a href="javascript:;">
                    <div class="p-3 pe-md-0">
                      <!-- ganti gambar disini ganti bagian src nya dan taro gambar di folder assets/ image /  -->
                      <img class="w-100 border-radius-md shadow-lg" src="./assets/img/ivana-squares.jpg" alt="image">
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                  <div class="card-body ps-lg-0">
                    <h5 class="mb-0">Rianti Surya Sukatma</h5>
                    <h6 class="text-gradient text-primary">Penulis</h6>
                    <p class="mb-0">Mahasiswi Teknik Informatika Universitas Singaperbangsa Karawang</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


    <!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->

    <!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->

  </div>




  <footer class="footer pt-5 mt-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-3 mb-4 ms-auto">
          <div>
            <a href="https://www.creative-tim.com/product/material-kit">
              <img src="./assets/img/logo.png" class="mb-3 footer-logo" alt="main_logo">
            </a>
            <h6 class="font-weight-bolder mb-4">Sistem Pakar</h6>
          </div>
          <div>
            <!-- <ul class="d-flex flex-row ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                  <i class="fab fa-facebook text-lg opacity-8"></i>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                  <i class="fab fa-twitter text-lg opacity-8"></i>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                  <i class="fab fa-dribbble text-lg opacity-8"></i>
                </a>
              </li>


              <li class="nav-item">
                <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                  <i class="fab fa-github text-lg opacity-8"></i>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                  <i class="fab fa-youtube text-lg opacity-8"></i>
                </a>
              </li>
            </ul> -->
          </div>
        </div>



        <div class="col-md-2 col-sm-6 col-6 mb-4 hide">
          <div>
            <h6 class="text-sm">Company</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">
                  About Us
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank">
                  Freebies
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank">
                  Premium Tools
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">
                  Blog
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-md-2 col-sm-6 col-6 mb-4 hide">
          <div>
            <h6 class="text-sm">Projek</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">
                  Tentang Kita
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank">
                  Knowledge Center
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-mk2-footer" target="_blank">
                  Custom Development
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank">
                  Sponsorships
                </a>
              </li>

            </ul>
          </div>
        </div>

        <div class="col-md-2 col-sm-6 col-6 mb-4 ">
          <div>
            <h6 class="text-sm">Pelayanan </h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="#DownSyndrome"">
                Mengenal Down Syndrome
              </a>
            </li>

            <li class=" nav-item">
                  <a class="nav-link" href="./pages/konsultasi.php">
                    Konsultasi Dengan Ahli
                  </a>
              </li>

            </ul>
          </div>
        </div>

        <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
          <div>
            <h6 class="text-sm">Company</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="#tentangKita">
                  Tentang Kita
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#home">
                  Potads
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-12">
          <div class="text-center">
            <div class="col-12">
              <div class="text-center">
                <!-- <p class="text-dark my-4 text-sm font-weight-normal">
              All rights reserved. Copyright ?? <script>
                document.write(new Date().getFullYear())
              </script><a href="http://keenu.epizy.com/" target="_blank"> Rizki</a>.
            </p> -->
              </div>
            </div>
          </div>
        </div>
  </footer>





















  <!--Core JS Files-->
  <script src="./assets/js/core/popper.min.js" type="text/javascript">
  </script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>




  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="./assets/js/plugins/countup.min.js"></script>





  <script src="./assets/js/plugins/choices.min.js"></script>



  <script src="./assets/js/plugins/prism.min.js"></script>
  <script src="./assets/js/plugins/highlight.min.js"></script>



  <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
  <script src="./assets/js/plugins/rellax.min.js"></script>
  <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
  <script src="./assets/js/plugins/tilt.min.js"></script>
  <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
  <script src="./assets/js/plugins/choices.min.js"></script>


  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="./assets/js/plugins/parallax.min.js"></script>











  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="./assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>


  <script type="text/javascript">
    if (document.getElementById('state1')) {
      const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('state2')) {
      const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    if (document.getElementById('state3')) {
      const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
      if (!countUp2.error) {
        countUp2.start();
      } else {
        console.error(countUp2.error);
      };
    }
  </script>



























</body>

</html>