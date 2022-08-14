<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid px-0">
                    <a class="navbar-brand font-weight-bolder ms-sm-3" href="#home" rel="tooltip" title="Design by Rizki" data-placement="bottom">
                        Potads
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover ms-auto">
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                                    Halaman
                                    <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
                                </a>
                                <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                                    <div class="d-none d-lg-block">
                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                            Halaman
                                        </h6>
                                        <a href="admin.php" class="dropdown-item border-radius-md">
                                            <span>Admin</span>
                                        </a>
                                        <a href="admingejala.php" class="dropdown-item border-radius-md">
                                            <span>Data Gejala</span>
                                        </a>
                                        <a href="adminpenyakit.php" class="dropdown-item border-radius-md">
                                            <span>Data Penyakit</span>
                                        </a>
                                        <a href="adminakun.php" class="dropdown-item border-radius-md">
                                            <span>Data User</span>
                                        </a>
                                        <!-- <a
                                        <!-- <a href="./pages/author.html" class="dropdown-item border-radius-md">
                <span>Author</span>
              </a> -->
                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                            Akun
                                        </h6>
                                        <a href="phplogout.php" class="dropdown-item border-radius-md">
                                            <span>Keluar</span>
                                        </a>
                                    </div>

                                    <div class="d-lg-none">
                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                            Halaman
                                        </h6>

                                        <a href="admin.php" class="dropdown-item border-radius-md">
                                            <span>Admin</span>
                                        </a>
                                        <a href="admingejala.php" class="dropdown-item border-radius-md">
                                            <span>Data Gejala</span>
                                        </a>
                                        <a href="adminpenyakit.php" class="dropdown-item border-radius-md">
                                            <span>Data Penyakit</span>
                                        </a>
                                        <a href="adminakun.php" class="dropdown-item border-radius-md">
                                            <span>Data User</span>
                                        </a>

                                        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                            Akun
                                        </h6>
                                        <a href="phplogout.php" class="dropdown-item border-radius-md">
                                            <span>Keluar</span>
                                        </a>

                                    </div>

                                </div>
                            </li>


                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <a href="konsultasi.php" class="nav-link ps-2 d-flex cursor-pointer align-items-center" aria-expanded="false">
                                    <!-- <i class="material-icons opacity-6 me-2 text-md">dashboard</i> -->
                                    Konsultasi
                                </a>
                            </li>
                            <li class="nav-item my-auto ms-3 ms-lg-0">
                                <a href="javascript:;" class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="../assets/img/foto_profil/<?= $_SESSION["foto_profil"] ?>">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
    </div>
</div>