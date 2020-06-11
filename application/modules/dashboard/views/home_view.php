<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-4.0.0/dist/css/bootstrap.min.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/images/stta.png') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
    <!-- Lateef Font -->
    <link href="https://fonts.googleapis.com/css?family=Lateef&display=swap" rel="stylesheet">
    <!-- Esteban -->
    <link href="https://fonts.googleapis.com/css?family=Esteban&display=swap" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/sweetalert2/package/dist/sweetalert2.min.css'); ?>">
    <script type="text/javascript" src="<?= base_url('assets/javascript/jquery-3.5.1.js') ?>"></script>
    <!-- <script type="text/javascript" src="<?= base_url('assets/javascript/jquery-3.5.1.min.js') ?>"></script> -->
    <script type="text/javascript" languange="javascript" src="<?= base_url('assets/javascript/main.js'); ?>"></script>
    <!-- SweetAlert2 JS  -->
    <script src="<?= base_url('assets/sweetalert2/package/dist/sweetalert2.min.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <title><?= $title; ?></title>
    <style>
        .swal2-popup {
            font-size: 0.9rem !important;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #3104B4">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/images/stta.png') ?>" class="img-fluid" style="width:40px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Departemen</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- Content -->
    <!-- Content for Kata Kunci -->
    <div class="container" id="wrapper" style="margin-top:170px; height: 400px;">
        <h3 class="text-center font-weight-bold mb-4">Judul</h3>
        <div class="input-group pt-4 mb-3">
            <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Cari ...">
            <div class=" input-group-append">
                <button class="btn btn-outline-secondary search" type="button" id="btnSearch"><i class="fa fa-search"></i></button>
            </div>
        </div>
        <!-- End Content for Kata Kunci -->
        <div class="container " id="result"></div>

    </div>

    <!-- Content for Result -->
    <!-- End for Result -->
    <!-- End Content -->


    <!-- Footer -->
    <div class="container-fluid" style="background-color: #81F7F3; font-family : 'Lateef', cursive; color:black ">
        <div class="p-3">
            <div class="row">
                <!-- Logo -->
                <div class="p-4 col-xs-12 col-sm-12 col-md-12 col-lg-1 col-xl-1">
                    <img src="<?= base_url('assets/images/stta.png') ?>" class="img-fluid mx-auto d-block" width="140px;" alt="">
                </div>
                <!-- Nama Instansi -->
                <div class="p-4 col-sm-12 text-center col-md-5 col-lg-3 ">
                    <h3 class=" display-5 align-middle">Sekolah Tinggi Teknologi Adisutjipto</h3>
                    Jl. Janti, Blok R - Lanud Adisutjipto
                    Yogyakarta
                </div>
                <!-- Departemen -->
                <div class="col-sm-6 col-sm-4 col-md-4 col-lg-2">
                    <h3>Program Studi</h3>
                    <i class="fa fa-caret-right" aria-hidden="true">&nbsp;Departemen Dirgantara</i> <br>

                    <i class="fa fa-caret-right" aria-hidden="true">&nbsp;Departemen Informatika</i><br>
                    <i class="fa fa-caret-right" aria-hidden="true">&nbsp;Teknik Elektro</i><br>
                    <i class="fa fa-caret-right" aria-hidden="true">&nbsp;Departemen Industri</i><br>
                    <i class="fa fa-caret-right" aria-hidden="true">&nbsp;Teknik Mesin</i> <br>
                    <i class="fa fa-caret-right" aria-hidden="true">&nbsp;D-3 Aeronautika</i>
                </div>
                <!-- Sosial Media -->
                <div class="col-sm-6 col-md-3 col-lg-2">
                    <h3>Media Sosial</h3>
                    <a href="#" style="text-decoration: none; color:black ">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i> &nbsp;Sekolah Tinggi Teknologi Adisutjipto <br>
                    </a>
                    <a href="#" style="text-decoration: none; color: black">
                        <i class=" fa fa-instagram" aria-hidden="true">&nbsp; stt_adisutjipto</i><br>
                    </a>
                    <a href="#" style="text-decoration: none; color: black ">
                        <i class="fa fa-youtube-play" aria-hidden="true">&nbsp; STT Adisutjipto</i>
                    </a>
                </div>
                <!-- Hubung Kami -->
                <div class="col-sm-6 col-md-6 col-lg-2 align-center ">
                    <h3>Hubungi Kami</h3>
                    <i class="fa fa-phone " aria-hidden="true">&nbsp; +62 274 451262 (Hunting) </i> <br>
                    <i class="fa fa-phone" aria-hidden="true">&nbsp; +62 274 451263 (Telp) </i><br>
                    <i class="fa fa-fax" aria-hidden="true">&nbsp; +62274451265 (Fax)</i><br>
                    <i class="fa fa-envelope-o" aria-hidden="true">&nbsp; admin@stta.ac.id</i>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color:#0080FF; color:white ">
        <div class="container text-center" style="padding: 7px;font-family: 'Esteban', serif ">
            Copyright 2010 - <?= date('Y'); ?> Sekolah Tinggi Teknologi Adisutijpto Yogyakarta. Powered by TIK STTA. All Right Reserved
        </div>
    </div>
</body>

</html>