<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-4.0.0/dist/css/bootstrap.min.css') ?>">
    <!-- Font -->
    <link href=" https://fonts.googleapis.com/css2?family=Bree+Serif&family=PT+Serif&display=swap" rel="stylesheet">
    <!-- End Font -->
    <!-- Font awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/stta.png'); ?>">
    <!-- Added JS -->
    <script src="<?= base_url('assets/javascript/jquery-3.5.1.js'); ?>"></script>
    <script src="<?= base_url('assets/bootstrap-4.0.0/dist/js/bootstrap.min.js') ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?= base_url('assets/javascript/main.js') ?>"></script>
    <title><?= $title; ?></title>
</head>

<body>
    <?php $this->load->view('nav'); ?>

    <div class="container mt-5 mb-4" style="height:500px;">
        <form action="<?= base_url('lecture/addlecture') ?>" method="POST" enctype="multipart/form-data">
            <h3 class="text-center" style="font-family: 'Bree Serif', serif">BIODATA DOSEN</h3>
            <hr>
            <div class="form-group row mt-5" style="font-family: 'PT Serif', serif; ">
                <label for="" class="col-sm-2 col-lg-2 col-form-label">NIP</label>
                <div class="col-sm-10 col-lg-3">
                    <input type="text" name="nip" id="nip" class="form-control">
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
    <?php $this->load->view('footer'); ?>
</body>

</html>