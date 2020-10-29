<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-4.0.0/css/bootstrap.min.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/images/stta.png') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
    <!-- Lateef Font -->
    <link href="https://fonts.googleapis.com/css?family=Lateef&display=swap" rel="stylesheet">

    <!-- Esteban -->
    <link href="https://fonts.googleapis.com/css?family=Esteban&display=swap" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/sweetalert2/package/dist/sweetalert2.min.css'); ?>">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/javascript/jquery-3.5.1.js') ?>"></script>
    <script type="text/javascript" languange="javascript" src="<?= base_url('assets/javascript/main.js'); ?>"></script>
    <!-- SweetAlert2 JS  -->
    <script src="<?= base_url('assets/sweetalert2/package/dist/sweetalert2.min.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="<?= base_url('assets/bootstrap-4.0.0/js/bootstrap.min.js'); ?>"></script>

    <title><?= $title; ?></title>
    <style>
        .swal2-popup {
            font-size: 0.9rem !important;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php $this->load->view('nav'); ?>
    <!-- End Navbar -->
    <!-- Content -->
    <div class="pt-5" style="background-image: url('assets/images/img-1.jpg'); height: 400px; background-position:70% 30%;background-size:cover;position:relative;background-repeat:no-repeat;">
        <div class="pt-4 pl-3">
            <div style="width: 240px;">
                <h1 class="text-white" style="font-family: 'Playfair Display', serif">Bingung dengan Tugas Akhir?</h1>
            </div>
            <a href="#wrapper">
                <button type="button" class="btn btn-success mt-4 font-weight-bold" style="border-radius: 29px;">
                    <h5 class="mt-2">Konsultasi disini</h5>
                </button>
            </a>
        </div>
    </div>
    <!-- Content for Kata Kunci -->
    <div class="container" id="wrapper" style="margin-top:170px; height: 500px;">
        <h3 class="text-center font-weight-bold mb-4" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Kata Kunci</h3>
        <div class="input-group pt-4 mb-3">
            <input type="text" name="judul_skripsi" id="keyword" class="form-control" autofocus placeholder="Cari ...">
            <div class=" input-group-append">
                <button class="btn btn-outline-secondary search" type="button" id="btnSearch"><i class="fa fa-search"></i></button>
            </div>
        </div>
        <!-- End Content for Kata Kunci -->
        <div class="container-fluid mb-3" id="result"></div>
    </div>

    <!-- Content for Result -->
    <!-- End for Result -->
    <!-- End Content -->


    <!-- Footer -->
    <?php $this->load->view('footer'); ?>
    <script>
        $(document).ready(function() {
            $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;

                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function() {
                        window.location.hash = hash;
                    });
                }
            });


        });
    </script>

</body>

</html>