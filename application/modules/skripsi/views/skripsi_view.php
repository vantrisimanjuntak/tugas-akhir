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
    <link href="https://fonts.googleapis.com/css2?family=Neuton:wght@700&display=swap" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/sweetalert2/package/dist/sweetalert2.min.css'); ?>">
    <title><?= $title; ?></title>
</head>

<body style="background:linear-gradient(to top, #66ffff 19%, #ff99cc 97%)">
    <!-- Navbar -->
    <?php $this->load->view('nav'); ?>
    <!-- End Navbar -->

    <!-- Main Content -->
    <div class="container pb-5" style="margin-top: 70px;border-style: ridge; background-color:white">
        <form action="<?= base_url('skripsi/submit'); ?>" method="post" id="submitSkripsi">
            <div class="container border-dark">
                <h4 class="font-weight-bold mt-3" style="font-family: 'Neuton', serif;">Form Input Skripsi</h4>
                <hr>
                <div class="form-group row" style="font-family: 'Times New Roman', serif">
                    <label for="" style="font-size: 20px" class="col-sm-3 col-form-label">No. Registrasi</label>
                    <div class="col-xs-2 col-sm-3 col-md-2">
                        <?php $no_reg = bin2hex(random_bytes(3)); ?>
                        <input type="text" name="no_reg" readonly class="form-control" value="<?= $no_reg; ?>">
                    </div>
                </div>
                <div class="form-group row" style="font-family: 'Times New Roman', serif">
                    <label for="" style="font-size: 20px" class="col-sm-3 col-form-label">NIM<span style="color:red;">*</span></label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="nim" id="" autocomplete="OFF">
                    </div>
                    <div class="col-sm-5" style="color: red">
                        <small id="nim_result"></small>
                    </div>
                </div>
                <div class="form-group row" style="font-family: 'Times New Roman', serif">
                    <label for="" style="font-size: 20px" class="col-sm-3 col-form-label">Judul Skripsi<span style="color:red;">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" autocomplete="off" name="judulskripsi" class="form-control" id="judulskripsi">
                    </div>
                </div>
                <div class="form-group row" style="font-family: 'Times New Roman', serif">
                    <label for="" style="font-size: 20px" class="col-sm-3 col-form-label">Abstrak<span style="color:red;">*</span></label>
                    <div class="col-sm-9">
                        <textarea name="abstrak" id="abstrak" cols="30" class="form-control" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group row" style="font-family: 'Times New Roman', serif">
                    <label for="" style="font-size: 20px" class="col-sm-3 col-form-label">Dosen Pembimbing I <span style="color:red;">*</span></label>
                    <div class="col-sm-9">
                        <select name="dp1" class="form-control" id="dp1">
                            <option value="">--PILIH DOSEN--</option>
                            <?php foreach ($dosen as $row) : ?>
                                <option value="<?= $row['nip']; ?>"><?= $row['nama']; ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row" style="font-family: 'Times New Roman', serif">
                    <label for="" style="font-size: 20px" class="col-sm-3 col-form-label">Dosen Pembimbing II <span style="color:red;">*</span></label>
                    <div class="col-sm-9">
                        <select name="dp2" class="form-control" id="dp2">
                            <option value="">--PILIH DOSEN--</option>
                            <?php foreach ($dosen as $row) : ?>
                                <option value="<?= $row['nip']; ?>"><?= $row['nama']; ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <small id="dosen_sama"><i style="color:red"></i> </small><br>
                <small><i style="color:red">(*) wajib diisi</i> </small>
                <button class="btn btn-warning text-white float-right" id="btnSubmit" type="button">Submit</button>
            </div>
        </form>
    </div>
    <!-- End Main Content -->
    <!-- Footer -->
    <?php $this->load->view('footer'); ?>
    <!-- End Footer -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" languange="javascript" src="<?= base_url('assets/javascript/main.js'); ?>"></script>
<!-- SweetAlert2 JS  -->
<script src="<?= base_url('assets/sweetalert2/package/dist/sweetalert2.min.js'); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</html>