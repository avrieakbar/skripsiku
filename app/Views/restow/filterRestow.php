<?= $this->extend('layout/usertemplate'); ?>

<?= $this->section('user-content'); ?>
<div class="container">
    <div class="row" style="justify-content: center;">
        <div class="col-6">
            <h1 class="mt-2" style="text-align: center;">Filter Restow</h1>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan Tanggal" name="keyword">
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
                        <!-- <th scope="col">No</th> -->
                        <th scope="col">Container</th>
                        <!-- <th scope="col">Ref</th> -->
                        <th scope="col">Tanggal Dibuat</th>
                        <!-- <th scope="col">Waktu Dibuat</th> -->
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                <?php foreach ($restow as $k) : ?>
                    <tbody>
                        <tr>
                             <!-- <th scope="row"><?= $i++; ?></th> -->
                             <td><?= $k['container'] ?></td>
                            <!-- <td><?= $k['ref'] ?></td> -->
                            <td><?= $k['date'] ?></td>
                            <!-- <td><?= $k['time'] ?></td> -->
                            <?php if (in_groups('Kapal')) : ?>
                                <td><a href="/restow/detailRestow/<?= $k['slug']; ?>" class="btn btn-success btn-sm">Detail</a>
                                <a href="/restow/approval/<?= $k['slug']; ?>" class="btn btn-warning btn-sm d-inline">Approval</a>
                            </td>
                            </form>
                                <?php else : ?>
                                    <td><a href="/restow/detailRestow/<?= $k['slug']; ?>" class="btn btn-success btn-sm">Detail</a>

                                <form action="/restow/delete/<?= $k['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure?');">Delete</button>
                            </td>
                            </form>
                                    <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>