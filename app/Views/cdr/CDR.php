<?= $this->extend('layout/usertemplate'); ?>

<?= $this->section('user-content'); ?>

<div class="container-fluid">

    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form CDR</h2>

            <?php $i = 1; ?>

            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <form action="/cdr/save" method="post" enctype="multipart/form-data">
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
                    <label for="code" class="col-sm-2 col-form-label">Damage Code 1</label>
                    <div class="col-sm-10">
                        <select id="inputCode" class="form-select <?= ($validation->hasError('code')) ? 'is-invalid' : ''; ?>" id="code" name="code" value="<?= old('code'); ?>">
                            <option selected type="option" name="code" id="codeOption1" value="Kosong">Choose Damage Code</option>
                            <option type="option" name="code" id="codeOption2" value="Bruise">Bruise (B)</option>
                            <option type="option" name="code" id="codeOption3" value="Bent">Bent (BE)</option>
                            <option type="option" name="code" id="codeOption4" value="Broken">Broken (BR)</option>
                            <option type="option" name="code" id="codeOption5" value="Burn Out">Burn out (BO)</option>
                            <option type="option" name="code" id="codeOption6" value="Cut">Cut (C)</option>
                            <option type="option" name="code" id="codeOption7" value="Caved In">Caved In (CI)</option>
                            <option type="option" name="code" id="codeOption8" value="Dent">Dent (D)</option>
                            <option type="option" name="code" id="codeOption9" value="Distorte">Distorte (DI)</option>
                            <option type="option" name="code" id="codeOption10" value="Flat">Flat (F)</option>
                            <option type="option" name="code" id="codeOption11" value="Hole">Hole (H)</option>
                            <option type="option" name="code" id="codeOption12" value="Loose">Loose (L)</option>
                            <option type="option" name="code" id="codeOption13" value="Leaking">Leaking (LE)</option>
                            <option type="option" name="code" id="codeOption14" value="Missing">Missing (M)</option>
                            <option type="option" name="code" id="codeOption15" value="Puncture">Puncture (P)</option>
                            <option type="option" name="code" id="codeOption16" value="Pin Hole">Pin Hole (PH)</option>
                            <option type="option" name="code" id="codeOption17" value="Pushed In">Pushed In (PI)</option>
                            <option type="option" name="code" id="codeOption18" value="Pushed Out">Pushed Out (PO)</option>
                            <option type="option" name="code" id="codeOption19" value="Rusty">Rusty (R)</option>
                            <option type="option" name="code" id="codeOption20" value="Sprung">Sprung (S)</option>
                            <option type="option" name="code" id="codeOption21" value="Scratched">Scratched (SC)</option>
                            <option type="option" name="code" id="codeOption22" value="Torn/Rip">Torn/Rip (T)</option>
                            <div class="invalid-feedback">
                                <?= $validation->getError('code'); ?>
                            </div>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="dcode" class="col-sm-2 col-form-label">Damage Code 2</label>
                    <div class="col-sm-10">
                        <select id="inputDcode" class="form-select <?= ($validation->hasError('dcode')) ? 'is-invalid' : ''; ?>" id="dcode" name="dcode" value="<?= old('dcode'); ?>">
                            <option selected type="text" type="option" name="code" id="code1Option1" value="Kosong">Choose Damage Code</option>
                            <option type="text" type="option" name="dcode" id="code1Option2" value="Bruise">Bruise (B)</option>
                            <option type="text" type="option" name="dcode" id="code1Option3" value="Bent">Bent (BE)</option>
                            <option type="text" type="option" name="dcode" id="code1Option4" value="Broken">Broken (BR)</option>
                            <option type="text" type="option" name="dcode" id="code1Option5" value="Burn Out">Burn out (BO)</option>
                            <option type="text" type="option" name="dcode" id="code1Option6" value="Cut">Cut (C)</option>
                            <option type="text" type="option" name="dcode" id="code1Option7" value="Caved In">Caved In (CI)</option>
                            <option type="text" type="option" name="dcode" id="code1Option8" value="Dent">Dent (D)</option>
                            <option type="text" type="option" name="dcode" id="code1Option9" value="Distorte">Distorte (DI)</option>
                            <option type="text" type="option" name="dcode" id="code1Option10" value="Flat">Flat (F)</option>
                            <option type="text" type="option" name="dcode" id="code1Option11" value="Hole">Hole (H)</option>
                            <option type="text" type="option" name="dcode" id="code1Option12" value="Loose">Loose (L)</option>
                            <option type="text" type="option" name="dcode" id="code1Option13" value="Leaking">Leaking (LE)</option>
                            <option type="text" type="option" name="dcode" id="code1Option14" value="Missing">Missing (M)</option>
                            <option type="text" type="option" name="dcode" id="code1Option15" value="Puncture">Puncture (P)</option>
                            <option type="text" type="option" name="dcode" id="code1Option16" value="Pin Hole">Pin Hole (PH)</option>
                            <option type="text" type="option" name="dcode" id="code1Option17" value="Pushed In">Pushed In (PI)</option>
                            <option type="text" type="option" name="dcode" id="code1Option18" value="Pushed Out">Pushed Out (PO)</option>
                            <option type="text" type="option" name="dcode" id="code1Option19" value="Rusty">Rusty (R)</option>
                            <option type="text" type="option" name="dcode" id="code1Option20" value="Sprung">Sprung (S)</option>
                            <option type="text" type="option" name="dcode" id="code1Option21" value="Scratched">Scratched (SC)</option>
                            <option type="text" type="option" name="dcode" id="code1Option22" value="Torn/Rip">Torn/Rip (T)</option>
                            <div class="invalid-feedback">
                                <?= $validation->getError('dcode'); ?>
                            </div>
                        </select>
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