<div class="row">
    <?php foreach ($hasil as $row => $data) : ?>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            <div class="card" style="width:300px">
                <img class="card-img-top" src="<?= base_url('assets/images/dosen_profile/' . $data['foto']); ?>" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title" style="font-family: 'Lato', sans-serif;"><?= $data['nama'] ?></h4>
                    <h6>NIP : <?= $data['nip']; ?></h6>
                    <h6>Skor Pencarian : <?= $data['skor']; ?></h6>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>