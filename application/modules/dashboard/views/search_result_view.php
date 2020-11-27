<div class="row">
    <?php foreach ($hasil as $row => $data) : ?>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 pt-2">
            <div class="card" style="width:230px">
                <img class="card-img-top" src="<?= base_url('assets/images/dosen_profile/' . $data['foto']); ?>" alt="Card image">
                <div class="card-body">
                    <h6 class="card-title font-weight-bold" style="font-family: 'Lato', sans-serif;"><?= $data['nama'] ?></h6>
                    <h6>NIP : <?= $data['nip']; ?></h6>
                    <h6>Skor Pencarian : <?= $data['skor']; ?></h6>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#DataDosenModals">See Profile</button>
                </div>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="DataDosenModals" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>