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
    <!-- <script type="text/javascript" languange="javascript" src="<?= base_url('assets/javascript/main.js'); ?>"></script> -->
    <!-- SweetAlert2 JS  -->
    <script src="<?= base_url('assets/sweetalert2/package/dist/sweetalert2.min.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
    <div class="container-fluid">
        <div class="row mt-3 pt-5" style="height: 470px;">
            <div class="col-sm-5 col-md-4 col-lg-2 col-xl-2" style="background-color:purple">
                <div class="mt-5 mb-3 pr-2">
                    <h1 class="text-white">Bingung dengan judul tugas akhir?</h1>
                    <a href="<?= base_url('#wrapper') ?>">
                        <button class="btn btn-sm mt-5 text-white" style="background-color: green;">
                            Konsultasi disini
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-sm-7 col-md-8 col-lg-10 col-xl-10" style="background-image: url(assets/images/img-1.jpg); background-repeat: no-repeat;background-size: 100%;background-position:center;position:relative"></div>
        </div>
    </div>
    <!-- Content for Kata Kunci -->
    <div class="container" id="wrapper" style="margin-top:170px; height: 339px;">
        <h3 class="text-center font-weight-bold mb-4">Judul</h3>
        <form action="<?= base_url(''); ?>" method="POST" id="search">
            <div class="input-group pt-4 mb-3">
                <input type="text" name="keyword" id="keyword" autofocus class="form-control" placeholder="Cari ...">
                <div class=" input-group-append">
                    <button class="btn btn-outline-secondary search" type="submit" id="btnSearch"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- End Content for Kata Kunci -->
        <div class="container-fluid mb-3" id="result">
            <?php foreach ($hasil as $row) {
            ?>
                <h4><?= $row['judul_skripsi']; ?></h4>
                <br>
                <small><?= $row['dp_satu']; ?></small>
            <?php } ?>
        </div>

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