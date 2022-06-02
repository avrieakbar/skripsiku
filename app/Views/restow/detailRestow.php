<?= $this->extend('layout/usertemplate'); ?>

<?= $this->section('user-content'); ?>

<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-2">Detail Restow</h1>
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
          <h6 class="card-title mb-3" style="text-align: center; margin-top:10px;"><b>FORMULIR RESTOW CONTAINER REQUEST BY CUSTOMER</b></h6>
          <div class="col-md-8">
            <div class="card-body">
              <p class="card-text mb-0">Container : <?= $restow['container']; ?></p>
              <p class="card-text mb-0">Ref : <?= $restow['ref']; ?></p>
              <p class="card-text mb-0">Size : <?= $restow['size']; ?></p>
              <p class="card-text mb-0">Type : <?= $restow['type']; ?></p>
              <p class="card-text mb-0">Status : <?= $restow['status']; ?></p>
              <p class="card-text mb-0">Activity : <?= $restow['activity']; ?></p>
              <p class="card-text mb-0">Vessel : <?= $restow['vessel']; ?></p>
              <p class="card-text mb-0">Voyage : <?= $restow['voyage']; ?></p>
              <p class="card-text mb-0">Ship : <?= $restow['ship']; ?></p>
              <p class="card-text mb-0">Date : <?= $restow['date']; ?></p>
              <p class="card-text mb-0">Time : <?= $restow['time']; ?></p>
              <p class="card-text mb-0"><b>Location Before Shifting</b> 
              <p class="card-text mb-0">Bay (B) : <?= $restow['lbsb']; ?></p>
              <p class="card-text mb-0">Row (R) : <?= $restow['lbsr']; ?></p>
              <p class="card-text mb-0">Tier (T) : <?= $restow['lbst']; ?></p>
              <p class="card-text mb-0"><b>Location After Shifting</b> 
              <p class="card-text mb-0">Bay (B) : <?= $restow['lasb']; ?></p>
              <p class="card-text mb-0">Row (R) : <?= $restow['lasr']; ?></p>
              <p class="card-text">Tier (T) : <?= $restow['last']; ?></p>
              <p class="card-text">Foto : <img src="/img/<?= $restow['nama'] ?>/<?= $restow['foto']; ?>" alt="" width="200px" height="200px"></p>
              <p class="card-text">Remarks : <?= $restow['remarks']; ?></p>
              <p class="card-text"><i>Note : Any damage on container or cargo found before the container is discharge
                  off of vessel will not be responsibility of PT. Terminal Teluk Lamong.
                </i></p>
            </div>
          </div>
        </div>
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="my-auto">
              <span>SOP03/TOD-FR.05-01</span>
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