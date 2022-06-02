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

            <form action="/restow/update/<?= $restow['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slugLama" value="<?= $restow['slug'] ?>">
                <input type="hidden" name="fotoLama" value="<?= $restow['foto'] ?>">
                <input type="hidden" name="ttdForeman" value="<?= $restow['signed'] ?>">
                <input type="hidden" name="containerLama" value="<?= $restow['container'] ?>">
                <input type="hidden" name="sizeLama" value="<?= $restow['size'] ?>">
                <input type="hidden" name="activityLama" value="<?= $restow['activity'] ?>">
                <input type="hidden" name="typeLama" value="<?= $restow['type'] ?>">
                <input type="hidden" name="statusLama" value="<?= $restow['status'] ?>">
                <input type="hidden" name="vesselLama" value="<?= $restow['vessel'] ?>">
                <input type="hidden" name="voyageLama" value="<?= $restow['voyage'] ?>">
                <input type="hidden" name="refLama" value="<?= $restow['ref'] ?>">
                <input type="hidden" name="shipLama" value="<?= $restow['ship'] ?>">
                <input type="hidden" name="dateLama" value="<?= $restow['date'] ?>">
                <input type="hidden" name="timeLama" value="<?= $restow['time'] ?>">
                <input type="hidden" name="namaLama" value="<?= $restow['nama'] ?>">
                <input type="hidden" name="lbsbLama" value="<?= $restow['lbsb'] ?>">
                <input type="hidden" name="lbsrLama" value="<?= $restow['lbsr'] ?>">
                <input type="hidden" name="lbstLama" value="<?= $restow['lbst'] ?>">
                <input type="hidden" name="lasbLama" value="<?= $restow['lasb'] ?>">
                <input type="hidden" name="lasrLama" value="<?= $restow['lasr'] ?>">
                <input type="hidden" name="lastLama" value="<?= $restow['last'] ?>">
                <input type="hidden" name="remarksLama" value="<?= $restow['remarks'] ?>">
                <div class="row mb-3">
                    <label for="container" class="col-sm-2 col-form-label">Container</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('container')) ? 'is-invalid' : ''; ?>" id="container" name="container" value="<?= $restow['container']; ?>" disabled>
                        <div class="invalid-feedback">
                            <?= $validation->getError('container'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="size" class="col-sm-2 col-form-label">Size</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('size')) ? 'is-invalid' : ''; ?>" id="container" value="<?= $restow['size']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('size'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="type" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('type')) ? 'is-invalid' : ''; ?>" id="type" value="<?= $restow['type']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('type'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-form-label col-sm-2 pt-0">Status</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" id="status" value="<?= $restow['status']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('status'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-form-label col-sm-2 pt-0">Activity</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('activity')) ? 'is-invalid' : ''; ?>" id="activity" value="<?= $restow['activity']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('activity'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="vessel" class="col-sm-2 col-form-label">Vessel</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('vessel')) ? 'is-invalid' : ''; ?>" id="vessel" value="<?= $restow['vessel']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('vessel'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="voyage" class="col-sm-2 col-form-label">Voyage</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('voyage')) ? 'is-invalid' : ''; ?>" id="voyage" value="<?= $restow['voyage']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('voyage'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ref" class="col-sm-2 col-form-label">Ref</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('ref')) ? 'is-invalid' : ''; ?>" id="ref" value="<?= $restow['ref']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('ref'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-form-label col-sm-2 pt-0">Ship</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('ship')) ? 'is-invalid' : ''; ?>" id="ship" value="<?= $restow['ship']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('ship'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="date" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('date')) ? 'is-invalid' : ''; ?>" id="date" value="<?= $restow['date']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('date'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="time" class="col-sm-2 col-form-label">Time</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('time')) ? 'is-invalid' : ''; ?>" id="time" value="<?= $restow['time']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('time'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                    <img src="/img/<?= $restow['nama']?>/<?= $restow['foto']; ?>" alt="" width="200px" height="200px" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('foto'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="remarks" class="col-sm-2 col-form-label">Rincian </label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('remarks')) ? 'is-invalid' : ''; ?>" id="remarks" value="<?= $restow['remarks']; ?>" disabled>
                        <div class="invalid-feedback">
                            <?= $validation->getError('remarks'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="lbs" class="col-sm-2 col-form-label"><b>Location Before Shifting</b></label>
                </div>
                <div class="row mb-3">
                    <label for="lbsb" class="col-sm-2 col-form-label">Bay (B)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('lbsb')) ? 'is-invalid' : ''; ?>" name="lbsb" value="<?= $restow['lbsb']; ?>" disabled>
                        <div class="invalid-feedback">
                            <?= $validation->getError('lbsb'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="lbsr" class="col-sm-2 col-form-label">Row (R)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('lbsr')) ? 'is-invalid' : ''; ?>" name="lbsr" value="<?= $restow['lbsr']; ?>" disabled>
                        <div class="invalid-feedback">
                            <?= $validation->getError('lbsr'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="lbst" class="col-sm-2 col-form-label">Tier (T)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('lbst')) ? 'is-invalid' : ''; ?>" name="lbst" value="<?= $restow['lbst']; ?>" disabled>
                        <div class="invalid-feedback">
                            <?= $validation->getError('lbst'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="las" class="col-sm-2 col-form-label"><b>Location After Shifting</b></label>
                </div>
                <div class="row mb-3">
                    <label for="lasb" class="col-sm-2 col-form-label">Bay (B)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('lasb')) ? 'is-invalid' : ''; ?>" name="lasb" value="<?= $restow['lasb']; ?>" disabled>
                        <div class="invalid-feedback">
                            <?= $validation->getError('lasb'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="lasr" class="col-sm-2 col-form-label">Row (R)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('lasr')) ? 'is-invalid' : ''; ?>" name="lasr" value="<?= $restow['lasr']; ?>" disabled>
                        <div class="invalid-feedback">
                            <?= $validation->getError('lasr'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="last" class="col-sm-2 col-form-label">Tier (T)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('last')) ? 'is-invalid' : ''; ?>" name="last" value="<?= $restow['last']; ?>" disabled>
                        <div class="invalid-feedback">
                            <?= $validation->getError('last'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="display:flex">
                    <label for="ttd" class="col-sm-2 col-form-label">Tanda Tangan</label>
                    <div class="col">
                    <img src="/img/ttd/<?= $restow['nama']?>/<?= $restow['signed']; ?> "alt=""  >
                        <textarea id="signature64" name="signed" style="display: none"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Foreman</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" value="<?= $restow['nama']; ?>" disabled>
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
                    <input type="text" class="form-control <?= ($validation->hasError('namaKapal')) ? 'is-invalid' : ''; ?>" name="namaKapal" value="<?= $restow['namaKapal']; ?>">
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