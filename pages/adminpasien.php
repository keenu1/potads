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

    <title>Sistem Pakar</title>

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

    <!-- Modal simpan
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penyakit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form role="form" id="contact-form" method="post" action="phpadminpenyakitinsert.php" autocomplete="off">
                        <div class="card-body">
                            <div class="input-group input-group-dynamic mb-4">
                                <label class="form-label">Kode Penyakit</label>
                                <input class="form-control" aria-label="kode_gejala" type="text" name="kode_penyakit">
                            </div>
                            <div class="input-group input-group-dynamic mb-4">
                                <label class="form-label">Nama Penyakit</label>
                                <input type="text" class="form-control" placeholder="" aria-label="gejala" name="nama_penyakit">
                            </div>
                            <div class="input-group input-group-dynamic mb-4">
                                <label class="form-label">Nilai</label>
                                <input type="number" step="0.01" class=" form-control" placeholder="" aria-label="nilai" name="nilai">
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
    </div> -->




















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
                            <h2 class="text-dark mb-0">Data Pasien</h2>
                            <p class="lead">Pasien yang telah berkonsultasi </p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Id Pasien</th>
                                            <th scope="col">Nama Ayah</th>
                                            <th scope="col">Nama Ibu</th>
                                            <th scope="col">No. Hp</th>
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">Domisili</th>
                                            <th scope="col">Nama </th>
                                            <th scope="col">Tanggal Lahir </th>
                                            <th scope="col">Umur</th>
                                            <th scope="col">Hasil Konsultasi</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'koneksi.php';
                                        $no = 1;
                                        $query = mysqli_query($koneksi, "SELECT * FROM pasien") or die(mysqli_error($koneksi));
                                        foreach ($query as $data) {
                                        ?>
                                            <tr>
                                                <th class="text-center" scope="row"><?php echo $no ?></th>
                                                <th class="text-center" scope="row"><?php echo $data['id_pasien'] ?></th>
                                                <td class="text-start"><?php echo $data['nama_ayah'] ?></td>
                                                <td class="text-start"><?php echo $data['nama_ibu'] ?></td>
                                                <td class="text-start"><?php echo $data['nomor_hp'] ?></td>
                                                <td class="text-start"><?php echo $data['jenis_kelamin'] ?></td>
                                                <td class="text-center"><?php echo $data['kota_domisili'] ?></td>
                                                <td class="text-center"><?php echo $data['nama_pasien'] ?></td>
                                                <td class="text-center"><?php echo $data['tanggal_lahir'] ?></td>
                                                <td class="text-center"><?php echo $data['umur'] ?></td>
                                                <td class="text-center"><?php echo $data['hasil_konsultasi'] ?></td>
                                                <td class="text-center">
                                                    <a href="phpadminpasienhapus.php?id_pasien=<?php echo $data['id_pasien'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">
                                                        <button type="button" class="btn btn-danger btn-sm w-auto me-1 mb-0 pt-2">
                                                            <i class='bx bx-trash' style="font-size : 1.25rem;"></i>
                                                        </button>
                                                    </a>

                                                    <!-- <button type="button" class="btn btn-warning btn-sm w-auto me-1 mb-0 pt-2" data-bs-toggle="modal" data-bs-target="#exampleModal2<?php echo $data['kode_penyakit'] ?>">
                                                        <i class='bx bx-edit-alt' style="font-size : 1.25rem;"></i>
                                                    </button> -->

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
                            <!-- <button type="button" class="btn bg-gradient-primary w-auto me-auto float-end mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button> -->
                            <div class="github-buttons">
                                <a href="./phpadminpasienhapussemua.php" class="btn btn-danger w-auto me-auto float-end mt-4">Hapus Semua</a>
                                <div class="github-button">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </div>
    <?php
    foreach ($query as $data) {
    ?>
        <!-- Modal update -->
        <div class="modal fade" id="exampleModal2<?php echo $data['kode_penyakit'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Perbarui Data Penyakit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="contact-form" method="post" action="phpadminpenyakitupdate.php" autocomplete="off">
                            <div class="card-body">
                                <div class="input-group input-group-static mb-4">
                                    <label>Kode Gejala</label>
                                    <input class="form-control" aria-label="kode_penyakit_baru" type="text" name="kode_penyakit_baru" value="<?php echo $data['kode_penyakit'] ?>">
                                </div>
                                <input class="form-control" hidden aria-label="kode_penyakit_lama" type="text" name="kode_penyakit_lama" value="<?php echo $data['kode_penyakit'] ?>">
                                <div class="input-group input-group-static mb-4">
                                    <label>Gejala</label>
                                    <input type="text" class="form-control" placeholder="" aria-label="penyakit" name="penyakit" value="<?php echo $data['nama_penyakit'] ?>">
                                </div>
                                <div class="input-group input-group-static mb-4">
                                    <label>Bobot</label>
                                    <input type="number" step="0.01" class=" form-control" placeholder="" aria-label="nilai" name="nilai" value="<?php echo $data['nilai'] ?>">
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
                        <h6 class="font-weight-bolder mb-4">Sistem Pakar</h6>
                    </div>
                    <!-- <div>
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
                    </div> -->
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
                        <div class="text-center">
                            <!-- <p class="text-dark my-4 text-sm font-weight-normal">
              All rights reserved. Copyright © <script>
                document.write(new Date().getFullYear())
              </script><a href="http://keenu.epizy.com/" target="_blank"> Rizki</a>.
            </p> -->
                        </div>
                    </div>
                </div>
            </div>
    </footer>





















    <!-- Core JS Files -->
    <script src="../assets/js/core/popper.min.js" type="text/javascript">
    </script>
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