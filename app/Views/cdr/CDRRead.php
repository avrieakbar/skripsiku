<?= $this->extend('layout/usertemplate'); ?>

<?= $this->section('user-content'); ?>
<div class="container">
    <div class="row" style="justify-content: center;">
        <div class="col-6">
            <style>
                @media screen and (max-width: 600px) {
  .col-6{
    width: 100%;
    margin-top: 0;
  }
}
  </style>
            <h1 class="mt-2" style="text-align: center;">Data CDR</h1>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan Kode Container" name="keyword">
                    <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                </div>
        </div>
        </form>
    </div>
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Container</th>
                        <!-- <th scope="col">Ref</th>
                        <th scope="col">Tanggal Dibuat</th>
                        <th scope="col">Waktu Dibuat</th> -->
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                <?php foreach ($cdr as $k) : ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $k['container'] ?></td>
                            <!-- <td><?= $k['ref'] ?></td>
                            <td><?= $k['date'] ?></td>
                            <td><?= $k['time'] ?></td> -->
                            <?php if (in_groups('Kapal')) : ?>
                                <td><a href="/cdr/detailCDR/<?= $k['slug']; ?>" class="btn btn-success btn-sm">Detail</a>
                                <a href="/cdr/approval/<?= $k['slug']; ?>" class="btn btn-warning btn-sm d-inline">Approval</a>
                            </td>
                            </form>
                                <?php else : ?>
                                    <td><a href="/cdr/detailCDR/<?= $k['slug']; ?>" class="btn btn-success btn-sm">Detail</a>
                                    <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
            </table>
            <?= $pager->links('form', 'CDRPagination'); ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>