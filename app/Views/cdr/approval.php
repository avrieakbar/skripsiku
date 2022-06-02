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

            <form action="/cdr/update/<?= $cdr['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slugLama" value="<?= $cdr['slug'] ?>">
                <input type="hidden" name="fotoLama" value="<?= $cdr['foto'] ?>">
                <input type="hidden" name="ttdForeman" value="<?= $cdr['signed'] ?>">
                <input type="hidden" name="containerLama" value="<?= $cdr['container'] ?>">
                <input type="hidden" name="sizeLama" value="<?= $cdr['size'] ?>">
                <input type="hidden" name="activityLama" value="<?= $cdr['activity'] ?>">
                <input type="hidden" name="typeLama" value="<?= $cdr['type'] ?>">
                <input type="hidden" name="statusLama" value="<?= $cdr['status'] ?>">
                <input type="hidden" name="vesselLama" value="<?= $cdr['vessel'] ?>">
                <input type="hidden" name="voyageLama" value="<?= $cdr['voyage'] ?>">
                <input type="hidden" name="refLama" value="<?= $cdr['ref'] ?>">
                <input type="hidden" name="shipLama" value="<?= $cdr['ship'] ?>">
                <input type="hidden" name="dateLama" value="<?= $cdr['date'] ?>">
                <input type="hidden" name="timeLama" value="<?= $cdr['time'] ?>">
                <input type="hidden" name="codeLama" value="<?= $cdr['code'] ?>">
                <input type="hidden" name="dcodeLama" value="<?= $cdr['dcode'] ?>">
                <input type="hidden" name="namaLama" value="<?= $cdr['nama'] ?>">
                <input type="hidden" name="remarksLama" value="<?= $cdr['remarks'] ?>">
                <div class="row mb-3">
                    <label for="container" class="col-sm-2 col-form-label">Container</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('container')) ? 'is-invalid' : ''; ?>" id="container" name="container" value="<?= $cdr['container']; ?>" disabled>
                        <div class="invalid-feedback">
                            <?= $validation->getError('container'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="size" class="col-sm-2 col-form-label">Size</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('size')) ? 'is-invalid' : ''; ?>" id="container" value="<?= $cdr['size']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('size'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="type" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('type')) ? 'is-invalid' : ''; ?>" id="type" value="<?= $cdr['type']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('type'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-form-label col-sm-2 pt-0">Status</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" id="status" value="<?= $cdr['status']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('status'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-form-label col-sm-2 pt-0">Activity</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('activity')) ? 'is-invalid' : ''; ?>" id="activity" value="<?= $cdr['activity']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('activity'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="vessel" class="col-sm-2 col-form-label">Vessel</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('vessel')) ? 'is-invalid' : ''; ?>" id="vessel" value="<?= $cdr['vessel']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('vessel'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="voyage" class="col-sm-2 col-form-label">Voyage</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('voyage')) ? 'is-invalid' : ''; ?>" id="voyage" value="<?= $cdr['voyage']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('voyage'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ref" class="col-sm-2 col-form-label">Ref</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('ref')) ? 'is-invalid' : ''; ?>" id="ref" value="<?= $cdr['ref']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('ref'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-form-label col-sm-2 pt-0">Ship</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('ship')) ? 'is-invalid' : ''; ?>" id="ship" value="<?= $cdr['ship']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('ship'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="date" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('date')) ? 'is-invalid' : ''; ?>" id="date" value="<?= $cdr['date']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('date'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="time" class="col-sm-2 col-form-label">Time</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('time')) ? 'is-invalid' : ''; ?>" id="time" value="<?= $cdr['time']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('time'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                    <img src="/img/<?= $cdr['nama']?>/<?= $cdr['foto']; ?>" alt="" width="200px" height="200px" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('foto'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="code" class="col-sm-2 col-form-label">Damage Code 1</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('code')) ? 'is-invalid' : ''; ?>" id="code" value="<?= $cdr['code']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('code'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="dcode" class="col-sm-2 col-form-label">Damage Code 2</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('dcode')) ? 'is-invalid' : ''; ?>" id="dcode" value="<?= $cdr['dcode']; ?>" disabled>
                    <div class="invalid-feedback">
                            <?= $validation->getError('dcode'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="remarks" class="col-sm-2 col-form-label">Rincian </label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('remarks')) ? 'is-invalid' : ''; ?>" id="remarks" value="<?= $cdr['remarks']; ?>" disabled>
                        <div class="invalid-feedback">
                            <?= $validation->getError('remarks'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="display:flex">
                    <label for="ttd" class="col-sm-2 col-form-label">Tanda Tangan</label>
                    <div class="col">
                    <img src="/img/ttd/<?= $cdr['nama']?>/<?= $cdr['signed']; ?> "alt=""  >
                        <textarea id="signature64" name="signed" style="display: none"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Foreman</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" value="<?= $cdr['nama']; ?>" disabled>
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
                    <input type="text" class="form-control <?= ($validation->hasError('namaKapal')) ? 'is-invalid' : ''; ?>" name="namaKapal" value="<?= $cdr['namaKapal']; ?>">
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