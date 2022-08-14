<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<?php
session_start();
include 'phpcek.php';
$kode_gejala = 'aa';
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

  <!-- Box Icons -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

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
  include 'navbaradmin.php';
  ?>

  <!-- Modal simpan -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form role="form" id="contact-form" method="post" action="phpadminakuninsert.php" autocomplete="off">
            <div class="card-body">
              <div class="input-group input-group-dynamic mb-4">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="" aria-label="email" name="email">
              </div>
              <div class="input-group input-group-dynamic mb-4">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" placeholder="" aria-label="nama" name="nama">
              </div>
              <div class="input-group input-group-dynamic mb-4">
                <label class="form-label">Password</label>
                <input type="text" class="form-control" placeholder="" aria-label="password" name="password">
              </div>
              <div class="input-group input-group-dynamic mb-4">
                <label class="form-label">tipe</label>
                <input type="number" class=" form-control" placeholder="" aria-label="tipe" name="tipe" min="1" max="2">
              </div>
            </div>

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn bg-gradient-dark" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn bg-gradient-primary">Tambah</button>
        </div>
        </form>
      </div>
    </div>
  </div>




















  <header class="header-2 hide" id="home">
    <div class="page-header min-vh-25 relative" style="background-image: url('../assets/img/bg-konsul.jpg')">
      <span class="mask bg-gradient-primary opacity-4"></span>
    </div>
  </header>



  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

    <section class="my-0 py-0">
      <div class="container">
        <div class="row">
          <div class="row justify-content-center text-center my-sm-1">
            <div class="col-lg-12">
              <h2 class="text-dark mb-0">Data Akun</h2>
              <p class="lead">Silahkan Input dan Edit Akun. </p>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Email</th>
                      <th scope="col">Password</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Tipe</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM user") or die(mysqli_error($koneksi));
                    foreach ($query as $data) {
                    ?>
                      <tr>
                        <th class="text-center" scope="row"><?php echo $no ?></th>
                        <th class="text-center" scope="row"><?php echo $data['email'] ?></th>
                        <td class="text-start"><?php echo $data['password'] ?></td>
                        <td class="text-center"><?php echo $data['nama'] ?></td>
                        <td class="text-center"><?php echo $data['tipe'] ?></td>
                        <td class="text-center">
                          <a href="phpadminakunhapus.php?id=<?php echo $data['id'] ?>">
                            <button type="button" class="btn btn-danger btn-sm w-auto me-1 mb-0 pt-2">
                              <i class='bx bx-trash' style="font-size : 1.25rem;"></i>
                            </button>
                          </a>
                          <button type="button" class="btn btn-warning btn-sm w-auto me-1 mb-0 pt-2" data-bs-toggle="modal" data-bs-target="#exampleModal2<?php echo $data['id']; ?>">
                            <i class='bx bx-edit-alt' style="font-size : 1.25rem;"></i>
                          </button>

                        </td>
                      </tr>
                    <?php
                      $no++;
                    }
                    ?>
                    <tr></tr>
                  </tbody>
                </table>
              </div>
              <button type="button" class="btn bg-gradient-primary w-auto me-auto float-end mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button>
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
  <?php
  foreach ($query as $data) {
  ?>
    <!-- Modal update -->
    <div class="modal fade" id="exampleModal2<?php echo $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Perbarui Akun</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form role="form" id="contact-form" method="post" action="phpadminakunupdate.php" autocomplete="off">
              <div class="card-body">
                <input class="form-control" hidden aria-label="kode_penyakit_lama" type="text" name="id" value="<?php echo $data['id'] ?>">
                <div class="input-group input-group-static mb-4">
                  <label>email</label>
                  <input class="form-control" aria-label="email" type="email" name="email" value="<?php echo $data['email'] ?>">
                </div>
                <div class="input-group input-group-static mb-4">
                  <label>Password</label>
                  <input type="text" class="form-control" placeholder="" aria-label="password" name="password" value="<?php echo $data['password'] ?>">
                </div>
                <div class="input-group input-group-static mb-4">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="" aria-label="nama" name="nama" value="<?php echo $data['nama'] ?>">
                </div>
                <div class="input-group input-group-static mb-4">
                  <label>tipe</label>
                  <input type="number" class=" form-control" placeholder="" aria-label="tipe" name="tipe" min="1" max="2" value="<?php echo $data['tipe'] ?>">
                </div>
              </div>

          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn bg-gradient-dark" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn bg-gradient-primary">Perbarui</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  <?php
    $no++;
  }
  ?>

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
                <a class="nav-link" href="../index.php#DownSyndrome">
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