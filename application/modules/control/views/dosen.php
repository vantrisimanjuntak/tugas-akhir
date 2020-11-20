<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?></title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="" href="apple-icon.png"> -->

    <script src="<?= base_url('assets/javascript/jquery-3.5.1.js') ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?= base_url('assets/javascript/main.js'); ?>"></script>
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/control_template/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/control_template/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') ?>">

    <link rel="shortcut icon" href="<?= base_url('assets/images/wp/stta.png') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/control_template/vendors/bootstrap/dist/css/bootstrap.min.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/control_template/vendors/font-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/control_template/vendors/themify-icons/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/control_template/vendors/flag-icon-css/css/flag-icon.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/control_template/vendors/selectFX/css/cs-skin-elastic.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/control_template/vendors/jqvmap/dist/jqvmap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/control_template/assets/css/style.css') ?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


</head>

<body>


    <!-- Left Panel -->

    <?php $this->load->view('control/side'); ?>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= strtoupper($session_access_user); ?>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>
                            <a class="nav-link" href="<?= base_url('control/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>


                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->


        <div class="card">
            <div class="card-header">
                <strong class="card-title">DOSEN</strong>
            </div>
            <br><br>
            <div class="container-fluid mb-4 mt-3" style="font-family: 'PT Serif', serif; ">
                <form action="<?= base_url('control/addLecture'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="" class="col-md-2 col-lg-2 col-form-label">NIP</label>
                        <div class="col-md-5 col-lg-3">
                            <input type="text" name="nip" id="nip" autocomplete="off" id="" class="form-control">
                        </div>
                        <h4 class="mt-2" style="color:red" id="nip_result"></h4>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-2 col-form-label">Nama</label>
                        <div class="col-md-7">
                            <input type="text" name="nama" autocomplete="off" id="nama" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-2 col-lg-2 col-form-label">Program Studi</label>
                        <div class="col-md-5">
                            <select name="program_studi" id="program_studi" class="custom-select">
                                <?php foreach ($prodi as $row) : ?>
                                    <option value="<?= $row['kd_program_studi']; ?>"><?= $row['program_studi']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-2 col-form-label">Pendidikan Terakhir</label>
                        <div class="col-md-5">
                            <select name="pendidikan_terakhir" class="custom-select" id="pendidikan_terakhir">
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-3" style="font-family: 'PT Serif', serif; ">
                        <label for="" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-6 col-md-5">
                            <input type="file" accept="image/*" name="userfile" id="foto" class="form-control">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary float-right" id="tambah">Tambah</button>
                            </div>
                        </div>
                    </div>
                </form>
                <hr>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Program Studi</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;">
                        <?php
                        $no = 1;
                        foreach ($dosen as $data) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data['nip']; ?></td>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['program_studi']; ?></td>
                                <td>
                                    <img src="<?= base_url('assets/images/dosen_profile/' . $data['foto']); ?>" alt="" style="width: 80px;">
                                </td>
                                <td>
                                    <a href="#">
                                        <button type="button" class="btn btn-warning">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true" style="color:white"></i>
                                        </button>
                                    </a>
                                    <a href="#">
                                        <button type="button" class="btn btn-danger">
                                            <i class="fa fa-trash" aria-hidden="true" style="color: white;"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->



    <script src="<?= base_url('assets/control_template/vendors/popper.js/dist/umd/popper.min.js') ?> "></script>
    <script src="<?= base_url('assets/control_template/vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/control_template/vendors/chart.js/dist/Chart.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/control_template/assets/js/dashboard.js') ?>"></script>
    <script src="<?= base_url('assets/control_template/assets/js/widgets.js') ?>"></script>
    <script src="<?= base_url('assets/control_template/vendors/jqvmap/dist/jquery.vmap.min.js') ?>"></script>
    <script src="<?= base_url('assets/control_template/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') ?>"></script>
    <script src="<?= base_url('assets/control_template/vendors/jqvmap/dist/maps/jquery.vmap.world.js') ?>"></script>

    <!-- DataTables JS -->
    <script src="<?= base_url('assets/control_template/vendors/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/control_template/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('assets/control_template/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('assets/control_template/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('assets/control_template/vendors/jszip/dist/jszip.min.js') ?>"></script>
    <script src="<?= base_url('assets/control_template/vendors/pdfmake/build/pdfmake.min.js'); ?>"></script>
    <script src="<?= base_url('assets/control_template/vendors/pdfmake/build/vfs_fonts.js'); ?>"></script>

    <script src="<?= base_url('assets/control_template/vendors/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
    <script src="<?= base_url('assets/control_template/vendors/datatables.net-buttons/js/buttons.colVis.min.js') ?>"></script>
    <script src="<?= base_url('assets/control_template/assets/js/init-scripts/data-table/datatables-init.js') ?>"></script>


    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>



</body>

</html>