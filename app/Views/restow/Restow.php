<?= $this->extend('layout/usertemplate'); ?>

<?= $this->section('user-content'); ?>

<div class="container-fluid">

    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Restow</h2>

            <?php $i = 1; ?>

            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <form action="/restow/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="container" class="col-sm-2 col-form-label">Container</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('container')) ? 'is-invalid' : ''; ?>" id="container" name="container" value="<?= old('container'); ?>" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('container'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="size" class="col-sm-2 col-form-label">Size</label>
                    <div class="col-sm-10">
                        <select class="form-select <?= ($validation->hasError('size')) ? 'is-invalid' : ''; ?>" id="size" name="size" value="<?= old('size'); ?>">
                            <option selected type="option">Choose Size</option>
                            <option type="option" name="size" id="sizeOption1" value="20 Feet">20 Feet</option>
                            <option type="option" name="size" id="sizeOption2" value="40 Feet">40 Feet</option>
                            <option type="option" name="size" id="sizeOption3" value="45 Feet">45 Feet</option>
                            <div class="invalid-feedback">
                                <?= $validation->getError('size'); ?>
                            </div>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="type" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                        <select class="form-select <?= ($validation->hasError('type')) ? 'is-invalid' : ''; ?>" id="type" name="type" value="<?= old('type'); ?>">
                            <option selected type="option">Choose Type</option>
                            <option type="option" name="type" id="typeOption1" value="DRY">DRY</option>
                            <option type="option" name="type" id="typeOption2" value="RFR">RFR</option>
                            <option type="option" name="type" id="typeOption3" value="TNK">TNK</option>
                            <option type="option" name="type" id="typeOption4" value="FLT">FLT</option>
                            <option type="option" name="type" id="typeOption5" value="OVD">OVD</option>
                            <div class="invalid-feedback">
                                <?= $validation->getError('type'); ?>
                            </div>
                        </select>
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="statusRadios1" value="Full">
                            <label class="form-check-label" for="statusRadios1">
                                Full
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="statusRadios2" value="Empty">
                            <label class="form-check-label" for="statusRadios2">
                                Empty
                            </label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Activity</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="activity" id="activityRadios1" value="Discharge">
                            <label class="form-check-label" for="activityRadios1">
                                Discharge
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="activity" id="activityRadios2" value="Loading">
                            <label class="form-check-label" for="activityRadios2">
                                Loading
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="activity" id="activityRadios3" value="Shifting">
                            <label class="form-check-label" for="activityRadios3">
                                Shifting
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-3">
                    <label for="vessel" class="col-sm-2 col-form-label">Vessel</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('vessel')) ? 'is-invalid' : ''; ?>" id="vessel" name="vessel" value="<?= old('vessel'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('vessel'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="voyage" class="col-sm-2 col-form-label">Voyage</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('voyage')) ? 'is-invalid' : ''; ?>" id="voyage" name="voyage" value="<?= old('voyage'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('voyage'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ref" class="col-sm-2 col-form-label">Ref</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('ref')) ? 'is-invalid' : ''; ?>" id="ref" name="ref" value="<?= old('ref'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('ref'); ?>
                        </div>
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Ship</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ship" id="shipRadios1" value="International">
                            <label class="form-check-label" for="ShipRadios1">
                                International
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ship" id="shipRadios2" value="Domestic">
                            <label class="form-check-label" for="shipRadios2">
                                Domestic
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-3">
                    <label for="date" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control <?= ($validation->hasError('date')) ? 'is-invalid' : ''; ?>" id="date" name="date" value="<?= old('date'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('date'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="time" class="col-sm-2 col-form-label">Time</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control <?= ($validation->hasError('time')) ? 'is-invalid' : ''; ?>" id="time" name="time" value="<?= old('time'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('time'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="lbs" class="col-sm-2 col-form-label"><b>Location Before Shifting</b></label>
                </div>
                <div class="row mb-3">
                    <label for="lbsb" class="col-sm-2 col-form-label">Bay (B)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('lbsb')) ? 'is-invalid' : ''; ?>" name="lbsb" value="<?= old('lbsb'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('lbsb'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="lbsr" class="col-sm-2 col-form-label">Row (R)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('lbsr')) ? 'is-invalid' : ''; ?>" name="lbsr" value="<?= old('lbsr'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('lbsr'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="lbst" class="col-sm-2 col-form-label">Tier (T)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('lbst')) ? 'is-invalid' : ''; ?>" name="lbst" value="<?= old('lbst'); ?>">
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
                        <input type="text" class="form-control <?= ($validation->hasError('lasb')) ? 'is-invalid' : ''; ?>" name="lasb" value="<?= old('lasb'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('lasb'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="lasr" class="col-sm-2 col-form-label">Row (R)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('lasr')) ? 'is-invalid' : ''; ?>" name="lasr" value="<?= old('lasr'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('lasr'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="last" class="col-sm-2 col-form-label">Tier (T)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('last')) ? 'is-invalid' : ''; ?>" name="last" value="<?= old('last'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('last'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="remarks" class="col-sm-2 col-form-label">Rincian </label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control <?= ($validation->hasError('remarks')) ? 'is-invalid' : ''; ?>" id="remarks" name="remarks" rows="5" value="<?= old('remarks'); ?>"></textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('remarks'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Foreman</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= old('nama'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" id="save" class="btn btn-primary">Save</button>
        </div>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>