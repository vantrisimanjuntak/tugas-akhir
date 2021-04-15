<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= base_url('assets/images/wp/fav.png') ?>">
    <!-- Bootstrap 4 CSS -->
    <!-- <link rel="stylesheet" href="<?= base_url('assets/bootstrap-4.0.0/css/bootstrap.min.css') ?>"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/sweetalert2/package/dist/sweetalert2.min.css'); ?>">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Esteban&family=Laila:wght@300&family=Lato&family=Lora&family=Playfair+Display&family=Zilla+Slab&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&family=Crimson+Text:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500&family=Roboto&display=swap" rel="stylesheet">
    <!-- <script type="text/javascript" src="<?= base_url('assets/javascript/jquery-3.5.1.js') ?>"></script> -->
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
    <script type="text/javascript" languange="javascript" src="<?= base_url('assets/javascript/main.js'); ?>"></script>
    <script type="text/javascript" languange="javascript" src="<?= base_url('assets/javascript/nav-scroll.js'); ?>"></script>

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
    <header>
        <?php $this->load->view('nav') ?>
    </header>


    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-1 col-sm-1 col-md-4 col-lg-4 margin">
                    <h1 class="title"><b>Bingung dengan Skripsi?</b></h1>
                    <button type="button" id="toWrapper" class="btn mt-3 pt-2" style="background-color: #D49E8D; max-width:180px;">

                        <h5 class="font-weight-bold text-white" style="font-family: 'Roboto Slab', serif; font-size:0,5rem;">Temukan Dosenmu disini</h5>

                    </button>
                </div>
            </div>
        </div>
    </section>


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
                            <h5 class="font-weight-bold text-center mt-4" style="font-family: 'Laila', serif;">Gunakan Kata Umum</h5>
                            <p style="font-family: 'Nobile', sans-serif; text-align:center; font-size:13px;">Mencari menggunakan kata yang tepat akan menambah keakuratan hasl pencarian, misalnya ruter menjadi <i>router</i>, enjin menjadi <i>engine</i>, dan lain sebagainya.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center">
                                <i class="fa fa-search fa-3x" aria-hidden="true" style="color: gray;"></i>
                            </div>
                            <h5 class="font-weight-bold text-center mt-4" style="font-family: 'Laila', serif;">Ganti Kata Kunci</h5>
                            <p style="font-size :20px;font-family: 'Nobile', sans-serif; text-align:center">Ganti kata kunci dengan yang memiliki kemiripan</p>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex justify-content-center">
                                <i class="fa fa-database fa-3x" aria-hidden="true" style="color: gray;"></i>
                            </div>
                            <h5 class="font-weight-bold text-center mt-4" style="font-family: 'Laila', serif;">Data</h5>
                            <p style="font-family: 'Nobile', sans-serif; text-align:center">Jika tidak menemukan solusi, kemungkinan koleksi data kami yang sedikit</p>
                        </div>
                    </div>
                    <h5 class="text-center">"Aplikasi ini menggunakan metode VSM (<i>Vector Space Model</i>)"</h5>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Content for Kata Kunci -->

    <div class="container mt-5" id="wrapper" style="height: 500px;">
        <h6 class="text-left font-weight-bold mb-1 mb-3" style="font-family: 'Roboto', sans-serif;">Topik apa yang sedang kamu pikirkan?</h6>
        <div class="input-group input-group-lg pt-1 mb-5">
            <input type="text" name="judul_skripsi" id="keyword" class="form-control" autocomplete="off" placeholder="" style="font-family: 'Times New Roman', Times, serif">
            <div class=" input-group-append">
                <button class="btn btn-outline-secondary search" type="button" id="btnSearch"><i class="fa fa-search"></i></button>
            </div>
        </div>
        <!-- End Content for Kata Kunci -->

        <div class="d-flex justify-content-center text-center">
            <div id="overlay" style="display: none;">
                <img src="<?= base_url('assets/images/wp/35.gif'); ?>" alt="Loading" /><br />
                Sedang mencari ....
            </div>
        </div>
        <div class="container-fluid mb-3" id="result">

        </div>

    </div>

    </div>


    <!-- Content for Result  id="wrapper"-->
    <!-- End for Result -->
    <!-- End Content -->


    <!-- Footer -->
    <?php $this->load->view('footer'); ?>
    <script>
        $(document).ready(function() {
            $("#toWrapper").on('click', function(event) {
                $('html, body').animate({
                    scrollTop: '+=300px'
                }, 800);
                // if (this.hash !== "") {
                //     event.preventDefault();
                //     var hash = this.hash;

                //     $('html, body').animate({
                //         scrollTop: $(hash).offset().top
                //     }, 1200, function() {
                //         window.location.hash = hash;
                //     });
                // }
            });


        });
    </script>
    <!-- <script>
        var preloader = document.getElementById('overlay');

        function loadFunction() {
            preloader.style.display = 'none';
        }
    </script> -->

</body>

</html>