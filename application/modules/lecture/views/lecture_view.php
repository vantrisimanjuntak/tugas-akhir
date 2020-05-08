<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('bootstrap-4.0.0/dist/css/bootstrap.min.css') ?>">
    <!-- Font -->
    <link href=" https://fonts.googleapis.com/css2?family=Bree+Serif&family=PT+Serif&display=swap" rel="stylesheet">
    <!-- End Font -->
    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/stta.png'); ?>">
    <!-- Added JS -->
    <script src="<?= base_url('assets/js/app.js') ?>"></script>
    <script src="<?= base_url('assets/javascript/jquery-3.5.1.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?= base_url('bootstrap-4.0.0/dist/js/bootstrap.min.js') ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title><?= $title; ?></title>
</head>

<body>
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
    <div class="container success-alert">
        <?= $this->session->flashdata('success-message'); ?>
    </div>
    <div class="container failed-alert">
        <?= $this->session->flashdata('failed-message'); ?>
    </div>
    <div class="container mt-4 mb-4">
        <form action="<?= base_url('supervisor/add_supervisor') ?>" method="POST" enctype="multipart/form-data">
            <h3 class="text-center" style="font-family: 'Bree Serif', serif">BIODATA DOSEN</h3>
            <hr>
            <div class="form-group row mt-3" style="font-family: 'PT Serif', serif; ">
                <label for="" class="col-sm-2 col-lg-2 col-form-label">NIP</label>
                <div class="col-sm-10 col-lg-3">
                    <input type="number" name="nip" id="" class="form-control">
                </div>
            </div>
            <div class="form-group row mt-3" style="font-family: 'PT Serif', serif; ">
                <label for="" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" id="" class="form-control" autocomplete="off">
                </div>
            </div>
            <div class="form-group row mt-3" style="font-family: 'PT Serif', serif; ">
                <label for="" class="col-sm-2 col-form-label">Program Studi</label>
                <div class="col-sm-4">
                    <select name="program_studi" class="custom-select" id="">
                        <?php foreach ($program_studi  as $prodi) : ?>
                            <option value="<?= $prodi['kd_program_studi']; ?>"><?= $prodi['program_studi']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row mt-3" style="font-family: 'PT Serif', serif; ">
                <label for="" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                <div class="col-sm-10">
                    <input type="text" name="pendidikan_terakhir" id="" class="form-control">
                </div>
            </div>
            <div class="form-group row mt-3" style="font-family: 'PT Serif', serif; ">
                <label for="" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <input type="file" accept="image/*" name="userfile" id="" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary align-right">Tambah Dosen</button>
        </form>
    </div>
    <div class="container-fluid" style="background-color:#0080FF; color:white ">
        <div class="container text-center" style="padding: 7px;font-family: 'Esteban', serif ">
            Copyright 2010 - <?= date('Y'); ?> Sekolah Tinggi Teknologi Adisutijpto Yogyakarta. Powered by TIK STTA. All Right Reserved
        </div>
    </div>
</body>

</html>