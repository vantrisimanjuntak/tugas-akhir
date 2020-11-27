<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
    <title><?= $title ?></title>
</head>

<body style="background-color: #1D0B4C;">
    <div class="container bg-white mt-5" style="max-width :560px; border: 2px solid white; border-radius:15px">
        <div class="container bg-danger text-center text" style="border-radius: 3px;">
            <?= $this->session->flashdata('failed'); ?></div>
        <div class="container-fluid mt-3">
            <img src="<?= base_url('assets/images/wp/operating-system-control-center-server-512-removebg-preview.png') ?>" class="mx-auto d-block " alt="" style="width: 80px;">
            <h3 class="text-center text-dark mt-4">Login </h3>
            <div class="container-fluid mt-4 mb-4">
                <form action="<?= base_url('control/checklogin'); ?>" method="POST">
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" autocomplete="off" name="username" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" id="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center pt-5">
                            <button type="submit" class="btn btn-warning text-white font-weight-bold" style="width:180px; height:47px; border-radius: 40px;">
                                <h4>LOGIN</h4>
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>





    <!-- Bootstrap 4 JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>