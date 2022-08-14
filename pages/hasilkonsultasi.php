<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<?php
session_start();
include 'phpcekhasilkonsultasi.php';
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
    <div class="page-header min-vh-45 relative" style="background-image: url('../assets/img/bg-konsul.jpg')">
      <span class="mask bg-gradient-primary opacity-4"></span>
    </div>
  </header>

  <div class="card card-body blur shadow-blur mx-0 mx-md-4 mt-n6">

    <section class="my-0 py-0">
      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-5">
            <div class="col-lg-8">
              <h2 class="text-dark mb-0">Hasil Konsultasi</h2>
              <p class="lead">Score yang didapatkan dihitung menggunakan rumus</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="my-0 py-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
            <div class="rotating-card-container">
              <div class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
                <div class="front front-background" style="background-image: url(https://images.unsplash.com/photo-1569683795645-b62e50fbf103?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80); background-size: cover;">
                  <div class="card-body py-7 text-center">
                    <h1 class="text-white my-3"><?php echo $_SESSION['hasil_bobot_akhir'] ?></h1>
                    <h3 class="text-white"> Score</h3>
                    <p class="text-white opacity-8">Dihitung menggunakan rumus yang shahih dan sanadnya nyambing.</p>
                  </div>
                </div>
                <div class="back back-background" style="background-image: url(https://images.unsplash.com/photo-1498889444388-e67ea62c464b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1365&q=80); background-size: cover;">
                  <div class="card-body pt-7 text-center">
                    <h3 class="text-white">Konsultasi Lagi ?</h3>
                    <p class="text-white opacity-8"> Apabila kurang yakin dengan hasil silahkan klik tombol dibawah untuk konsultasi kembali.</p>
                    <a href="./konsultasi.php" class="btn btn-white btn-sm w-50 mx-auto mt-3">Konsultasi</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 ms-0">
            <div class="row justify-content-start mt-0">
              <div class="col-md-12 mt-3">
                <h5 class="font-weight-bolder mt-3"><?php echo $_SESSION['nama_penyakit_terindikasi'] ?></h5>
                <p class="pe-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor alias earum neque tenetur ipsa ipsam nisi? Consequatur, ratione quae. Obcaecati rerum hic eum voluptatum error repellendus ducimus quia atque. Et.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- <section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-12 my-auto">
        <h3 class="text-gradient text-primary mb-0"> Apa Saja Gejala Down Syndrome </h3>
        <h3>pada Anak?</h3>
        <p class="pe-md-5 mb-4 justify-text">
          Down syndrome atau sindrom Down adalah kondisi kelainan genetik yang disebabkan karena bayi memiliki tambahan salinan kromom ke-21. Kondisi cacat lahir yang satu ini mengakibatkan bayi mengalami keterlambatan pada perkembangan fisik bayi, mental, serta intelektualnya.
<br><br>
Meski kerap terlihat serupa, sebenarnya setiap bayi maupun anak-anak dengan Down syndrome memiliki kondisi fisik dan mental yang tidak selalu sama.

Bahkan, gejala atau ciri-ciri Down syndrome atau sindrom Down bisa berbeda-beda pada setiap bayi dan anak-anak.

        </p>
        <div class="github-buttons">
          <a href="https://www.creative-tim.com/product/material-kit-pro?ref=index-mk2" target="_blank" class="btn bg-gradient-primary mb-5 mb-sm-0">Baca Lebih Lanjut</a>
          <div class="github-button">
            <span></span>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-12 my-auto">
        <a href="https://keenu.epizy.com">
          <img class="w-100 border-radius-lg shadow-lg" src="../assets/img/Bayi-Syndrome.jpg" alt="Product Image">
        </a>
      </div>
    </div>
  </div>
</section> -->

    <!-- <section class="my-5 position-relative bg-gradient-dark mx-n3" id="tentangKita">
  <div class="container">
    <div class="row">
      <div class="col-md-8 text-start mb-5 mt-5">
        <h3 class="text-white z-index-1 position-relative">Tim Deadliner</h3>
        <p class="text-white opacity-8 mb-0">Rebahan jalan ninjaku SKS metodeku.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-12">
        <div class="card card-profile mt-4">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-n5">
              <a href="javascript:;">
                <div class="p-3 pe-md-0">
                  <img class="w-100 border-radius-md shadow-lg" src="../assets/img/team-5.jpg" alt="image">
                </div>
              </a>
            </div>
            <div class="col-lg-8 col-md-6 col-12 my-auto">
              <div class="card-body ps-lg-0">
                <h5 class="mb-0">Emma Junaedi</h5>
                <h6 class="text-gradient text-primary">Dokter Internis</h6>
                <p class="mb-0">Seorang Dokter yang sangat mencintai Pekerjaannya dan Pasangan Hidupnya.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12">
        <div class="card card-profile mt-lg-4 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-n5">
              <a href="javascript:;">
                <div class="p-3 pe-md-0">
                  <img class="w-100 border-radius-md shadow-lg" src="../assets/img/bruce-mars.jpg" alt="image">
                </div>
              </a>
            </div>
            <div class="col-lg-8 col-md-6 col-12 my-auto">
              <div class="card-body ps-lg-0">
                <h5 class="mb-0">Rianti Surya</h5>
                <h6 class="text-gradient text-primary">Pacar Yusuf</h6>
                <p class="mb-0">Seorang mahasiswa yang melayani majikan majikannya dan bucin dengan bambang.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4 mb-5">
      <div class="col-lg-6 col-12">
        <div class="card card-profile mt-4 z-index-2">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-n5">
              <a href="javascript:;">
                <div class="p-3 pe-md-0">
                  <img class="w-100 border-radius-md shadow-lg" src="../assets/img/ivana-squares.jpg" alt="image">
                </div>
              </a>
            </div>
            <div class="col-lg-8 col-md-6 col-12 my-auto">
              <div class="card-body ps-lg-0">
                <h5 class="mb-0">Yusuf</h5>
                <h6 class="text-gradient text-primary">Pacar Yanti</h6>
                <p class="mb-0">Dimana Bumi dipijak disitu saya tidur. bucin yanti</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12">
        <div class="card card-profile mt-lg-4 mt-5 z-index-2">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-n5">
              <a href="javascript:;">
                <div class="p-3 pe-md-0">
                  <img class="w-100 border-radius-md shadow-lg" src="../assets/img/Rizki.jpg" alt="image">
                </div>
              </a>
            </div>
            <div class="col-lg-8 col-md-6 col-12 my-auto">
              <div class="card-body ps-lg-0">
                <h5 class="mb-0">M Rizki Nugroho</h5>
                <h6 class="text-gradient text-primary">Software Engineer</h6>
                <p class="mb-0">Seorang manusia nolep yang doyan rebahan dan ngoding.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->


    <!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->

    <!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->

  </div>




  <footer class="footer pt-5 mt-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-3 mb-4 ms-auto">
          <div>
            <a href="https://www.creative-tim.com/product/material-kit">
              <img src="../assets/img/logo.png" class="mb-3 footer-logo" alt="main_logo">
            </a>
            <h6 class="font-weight-bolder mb-4">Potads</h6>
          </div>
          <div>
            <ul class="d-flex flex-row ms-n3 nav">
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
            </ul>
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
                <a class="nav-link" href="../index.php">
                  Mengenal Down Syndrome
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="konsultasi.php">
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
                <a class="nav-link" href="../index.php#tentangKita">
                  Tentang Kita
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php">
                  Potads
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              All rights reserved. Copyright © <script>
                document.write(new Date().getFullYear())
              </script><a href="http://keenu.epizy.com/" target="_blank"> Rizki</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>





















  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>




  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="../assets/js/plugins/countup.min.js"></script>





  <script src="../assets/js/plugins/choices.min.js"></script>



  <script src="../assets/js/plugins/prism.min.js"></script>
  <script src="../assets/js/plugins/highlight.min.js"></script>



  <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
  <script src="../assets/js/plugins/rellax.min.js"></script>
  <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
  <script src="../assets/js/plugins/tilt.min.js"></script>
  <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
  <script src="../assets/js/plugins/choices.min.js"></script>


  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="../assets/js/plugins/parallax.min.js"></script>











  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>


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