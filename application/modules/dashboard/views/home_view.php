<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= base_url('assets/images/stta.png') ?>">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-4.0.0/css/bootstrap.min.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/sweetalert2/package/dist/sweetalert2.min.css'); ?>">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Esteban&family=Laila:wght@300&family=Lato&family=Lora&family=Playfair+Display&family=Zilla+Slab&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="<?= base_url('assets/javascript/jquery-3.5.1.js') ?>"></script> -->
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
    <div class="container mt-2" style="border: 2px solid white; border-radius: 4px; background-color: #C5BCDF; max-width:700px;">
        <div class="pt-2 pb-2 text-center">
            <i class="fa fa-info" aria-hidden="true" style="color:white"></i>&nbsp;
            <span style="font-family:Arial, Helvetica, sans-serif; font-size:17px;">Klik&nbsp;<a href="" data-toggle="modal" data-target="#panduan" style="text-decoration: none; color: black"><b>disini</b></a>&nbsp;untuk panduan penggunaan</span>
        </div>
    </div>

    <div class="modal fade" id="panduan">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-center">Petunjuk Penggunaan</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center">
                                <i class="fa fa-keyboard-o fa-3x " aria-hidden="true" style="color: gray;"></i>
                            </div>
                            <h4 class="font-weight-bold text-center mt-4" style="font-family: 'Laila', serif;">Gunakan Kata Umum</h4>
                            <p style="font-family: 'Nobile', sans-serif; text-align:center">Mencari menggunakan kata yang tepat akan menambah keakuratan hasl pencarian, misalnya ruter menjadi <i>router</i>, enjin menjadi <i>engine</i>, dan lain sebagainya.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center">
                                <i class="fa fa-search fa-3x" aria-hidden="true" style="color: gray;"></i>
                            </div>
                            <h4 class="font-weight-bold text-center mt-4" style="font-family: 'Laila', serif;">Ganti Kata Kunci</h4>
                            <p style="font-size :20px;font-family: 'Nobile', sans-serif; text-align:center">Ganti kata kunci dengan yang memiliki kemiripan</p>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center">
                                <i class="fa fa-database fa-3x" aria-hidden="true" style="color: gray;"></i>
                            </div>
                            <h4 class="font-weight-bold text-center mt-4" style="font-family: 'Laila', serif;">Data</h4>
                            <p style="font-family: 'Nobile', sans-serif; text-align:center">Jika tidak menemukan solusi, kemungkinan koleksi data kami yang sedikit</p>
                        </div>
                    </div>
                    <h5 class="text-center">"Aplikasi ini menggunakan metode VSM (<i>Vector Space Model</i>)"</h5>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Content for Kata Kunci -->

    <div class="container mt-5" id="wrapper" style="height: 500px;">
        <h2 class="text-center font-weight-bold mb-4" style="font-family: 'Merriweather Sans', sans-serif;">Cari disini</h2>
        <div class="input-group input-group-lg pt-4 mb-5">
            <input type="text" name="judul_skripsi" id="keyword" class="form-control" autocomplete="off" placeholder="Tema apa yang anda pikirkan ?">
            <div class=" input-group-append">
                <button class="btn btn-outline-secondary search" type="button" id="btnSearch"><i class="fa fa-search"></i></button>
            </div>
        </div>
        <!-- End Content for Kata Kunci -->
        <div class="container-fluid mb-3" id="result"> </div>
    </div>


    <!-- Content for Result  id="wrapper"-->
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