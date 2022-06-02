<?= $this->extend('layout/usertemplate'); ?>

<?= $this->section('user-content'); ?>

<div class="container-fluid">

    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Approval</h2>

            <?php $i = 1; ?>

            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <form action="/heq/update/<?= $heq['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slugLama" value="<?= $heq['slug'] ?>">
                <input type="hidden" name="fotoLama" value="<?= $heq['foto'] ?>">
                <input type="hidden" name="ttdForeman" value="<?= $heq['signed'] ?>">
                <input type="hidden" name="containerLama" value="<?= $heq['container'] ?>">
                <input type="hidden" name="sizeLama" value="<?= $heq['size'] ?>">
                <input type="hidden" name="activityLama" value="<?= $heq['activity'] ?>">
                <input type="hidden" name="typeLama" value="<?= $heq['type'] ?>">
                <input type="hidden" name="statusLama" value="<?= $heq['status'] ?>">
                <input type="hidden" name="vesselLama" value="<?= $heq['vessel'] ?>">
                <input type="hidden" name="voyageLama" value="<?= $heq['voyage'] ?>">
                <input type="hidden" name="refLama" value="<?= $heq['ref'] ?>">
                <input type="hidden" name="shipLama" value="<?= $heq['ship'] ?>">
                <input type="hidden" name="dateLama" value="<?= $heq['date'] ?>">
                <input type="hidden" name="timeLama" value="<?= $heq['time'] ?>">
                <input type="hidden" name="namaLama" value="<?= $heq['nama'] ?>">
                <input type="hidden" name="remarksLama" value="<?= $heq['remarks'] ?>">
                <div class="row mb-3">
                    <label for="container" class="col-sm-2 col-form-label">Container</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('container')) ? 'is-invalid' : ''; ?>" id="container" name="container" value="<?= $heq['container']; ?>" disabled>
                        <div class="invalid-feedback">
                            <?= $validation->getError('container'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="size" class="col-sm-2 col-form-label">Size</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('size')) ? 'is-invalid' : ''; ?>" id="container" value="<?= $heq['size']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('size'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="type" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('type')) ? 'is-invalid' : ''; ?>" id="type" value="<?= $heq['type']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('type'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-form-label col-sm-2 pt-0">Status</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" id="status" value="<?= $heq['status']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('status'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-form-label col-sm-2 pt-0">Activity</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('activity')) ? 'is-invalid' : ''; ?>" id="activity" value="<?= $heq['activity']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('activity'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="vessel" class="col-sm-2 col-form-label">Vessel</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('vessel')) ? 'is-invalid' : ''; ?>" id="vessel" value="<?= $heq['vessel']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('vessel'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="voyage" class="col-sm-2 col-form-label">Voyage</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('voyage')) ? 'is-invalid' : ''; ?>" id="voyage" value="<?= $heq['voyage']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('voyage'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ref" class="col-sm-2 col-form-label">Ref</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('ref')) ? 'is-invalid' : ''; ?>" id="ref" value="<?= $heq['ref']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('ref'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-form-label col-sm-2 pt-0">Ship</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('ship')) ? 'is-invalid' : ''; ?>" id="ship" value="<?= $heq['ship']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('ship'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="date" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('date')) ? 'is-invalid' : ''; ?>" id="date" value="<?= $heq['date']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('date'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="time" class="col-sm-2 col-form-label">Time</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('time')) ? 'is-invalid' : ''; ?>" id="time" value="<?= $heq['time']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('time'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                    <img src="/img/<?= $heq['nama']?>/<?= $heq['foto']; ?>" alt="" width="200px" height="200px" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('foto'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="remarks" class="col-sm-2 col-form-label">Rincian </label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('remarks')) ? 'is-invalid' : ''; ?>" id="remarks" value="<?= $heq['remarks']; ?>" disabled>
                        <div class="invalid-feedback">
                            <?= $validation->getError('remarks'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="display:flex">
                    <label for="ttd" class="col-sm-2 col-form-label">Tanda Tangan</label>
                    <div class="col">
                    <img src="/img/ttd/<?= $heq['nama']?>/<?= $heq['signed']; ?> "alt=""  >
                        <textarea id="signature64" name="signed" style="display: none"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Foreman</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" value="<?= $heq['nama']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="display:flex">
                <label for="ttd" class="col-sm-2 col-form-label">Approval</label>
                    <div class="col">
                        <br />
                        <div class="border" id="signature"></div>
                        <br />
                        <button class="btn btn-danger mb-10" id="clear">Clear</button>
                        <textarea id="signature63" name="signedKapal" style="display: none"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="namaKapal" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('namaKapal')) ? 'is-invalid' : ''; ?>" name="namaKapal" value="<?= $heq['namaKapal']; ?>">
                    <div class="invalid-feedback">
                            <?= $validation->getError('namaKapal'); ?>
                        </div>
                    </div>
                </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" id="save" class="btn btn-primary">Approve</button>
        </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>