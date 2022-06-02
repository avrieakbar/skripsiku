<?= $this->extend('layout/usertemplate'); ?>

<?= $this->section('user-content'); ?>

<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-2">Detail Handling EQ</h1>
        <button class="btn btn-primary mb-2 d-inline" onclick="return printArea('area')">Print</button>
      </td>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="card mb-3" style="max-width: 540px;" id="area">
        <div class="container" style="text-align: center; position: inline-block;">
          <div class="box">
            <img src="/ttl-logo.png" style="width: 70px; height: 35px; text-align: center;  margin-top:20px;">
          </div>
        </div>
        <div class="row g-0">
          <h6 class="card-title mb-3" style="text-align: center; margin-top:20px;"><b>FORMULIR HANDLING USES ADDITIONAL EQUIPMENT </b></h6>
          <div class="col-md-8">
            <div class="card-body">
              <p class="card-text">Container : <?= $heq['container']; ?></p>
              <p class="card-text">Ref : <?= $heq['ref']; ?></p>
              <p class="card-text">Size : <?= $heq['size']; ?></p>
              <p class="card-text">Type : <?= $heq['type']; ?></p>
              <p class="card-text">Status : <?= $heq['status']; ?></p>
              <p class="card-text">Activity : <?= $heq['activity']; ?></p>
              <p class="card-text">Vessel : <?= $heq['vessel']; ?></p>
              <p class="card-text">Voyage : <?= $heq['voyage']; ?></p>
              <p class="card-text">Ship : <?= $heq['ship']; ?></p>
              <p class="card-text">Date : <?= $heq['date']; ?></p>
              <p class="card-text">Time : <?= $heq['time']; ?></p>
              <p class="card-text">Foto : <img src="/img/<?= $heq['nama'] ?>/<?= $heq['foto']; ?>" alt="" width="200px" height="200px"></p>
              <p class="card-text">Remarks : <?= $heq['remarks']; ?></p>
              <p class="card-text"><i>Note : Any damage on container or cargo found before the container is discharge
                  off of vessel will not be responsibility of PT. Terminal Teluk Lamong.
                </i></p>
            </div>
          </div>
        </div>
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="my-auto">
              <span>SOP03/TOD-FR.02-02</span>
            </div>
          </div>
          <div class="container my-auto">
            <div class="my-auto">
              <span>Tgl. 01-11-2020 Rev.01</span>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>