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
    <!-- <script type="text/javascript" languange="javascript" src="<?= base_url('assets/javascript/main.js'); ?>"></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- SweetAlert2 JS  -->
    <script src="<?= base_url('assets/sweetalert2/package/dist/sweetalert2.min.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="<?= base_url('assets/bootstrap-4.0.0/js/bootstrap.min.js'); ?>"></script>
    <script src="https://unpkg.com/@popperjs/core@2" type="javascript"></script>
    <title><?= $title ?></title>
</head>

<body>
    <!-- Navbar -->
    <?php $this->load->view('control/nav_control'); ?>

    <!-- End Navbar -->

    <!-- Main Content -->
    <div class="container mt-5" style="margin-top: 120px;">
        <h4>Panel Kontrol</h4>
        <div id="accordion">
            <div class="card mb-2">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#imbuhan">KATA IMBUHAN</a>
                </div>
                <div id="imbuhan" class="collapse" data-parent="#accordion">
                    <div id="imbuhan" class="collapse" data-parent="#accordion">
                        <div class="container-fluid mt-4">
                            <h5>TAMBAH DATA</h5>
                            <div class="container-fluid mt-3">
                                <form action="<?= base_url('control/addImbuhan'); ?>" method="post">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-3 col-form-label">Kata Imbuhan</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="kata_imbuhan" autocomplete="off" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-3 col-form-label">Kata Dasar</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="kata_dasar" autocomplete="off" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">TAMBAH</button>
                                </form>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kata Dasar</th>
                                        <th>Kata Imbuhan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($allImbuhan as $row) : ?>
                                        <tr>
                                            <th><?= $no++; ?></th>
                                            <th><?= $row['kata_imbuhan']; ?></th>
                                            <th><?= $row['kata_dasar'] ?></th>
                                            <th>
                                                <a href="<?= base_url('control/deleteImbuhan/' . $row['id']); ?>">
                                                    <button type="button" class="btn btn-danger">HAPUS</button>
                                                </a>
                                            </th>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#stopwords">STOPWORDS</a>
                </div>
                <div id="stopwords" class="collapse" data-parent="#accordion">
                    <div class="container-fluid mt-4">
                        <h5>TAMBAH DATA</h5>
                        <div class="container-fluid mt-3">
                            <form action="<?= base_url('control/addStopwords'); ?>" method="post">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Stopwords</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="stopwords" autocomplete="off" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary">TAMBAH</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Stopwords</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($stopwords as $row) : ?>
                                    <tr>
                                        <th><?= $no++; ?></th>
                                        <th><?= $row['stopwords']; ?></th>
                                        <th>
                                            <a href="<?= base_url('control/deleteStopwords/' . $row['id']); ?>" style="text-decoration: none;">
                                                <button type="button" class="btn btn-danger">HAPUS</button>
                                            </a>
                                        </th>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->

    <script>
        $(document).ready(function() {
            $('#example, #example2').DataTable({
                "scrollY": "400px",
                "scrollCollapse": true,
                "paging": false
            });
        });
    </script>
</body>

</html>