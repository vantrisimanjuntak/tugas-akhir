<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
    <a class="navbar-brand" href="#">
        <img src="<?= base_url('assets/images/stta.png') ?>" alt="" style="width:43px;">
    </a>
    <span style="font-size: 20px; color: white;"><b>DASHBOARD</b>Control</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item text-white mr-3">
                <?= strtoupper($session_access_user); ?>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="<?php echo base_url('control/logout'); ?>" class="nav-link" style="color:white; font-size: 15px;">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;
                    Logout</a>
            </li>
        </ul>
    </div>
</nav>