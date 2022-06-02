<?= $this->extend('layout/usertemplate'); ?>

<?= $this->section('user-content'); ?>

<style>
    .card {
        width: 200px;
        height: 120px;
        box-shadow: 5px 5px 15px;
        transform-style: preserve-3d;
        cursor: pointer;
        text-align: center;
        background-color: #97Df5B;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" data-tilt>
            <a href="<?= base_url('cdr/CDRRead'); ?>" class="fas fa-journal-whills fa-5x" style="margin-top: 8px;"></a>
                <i>CDR</i>
            </div>
        </div>
        <div class="col">
            <div class="card" data-tilt>
                <a href="<?= base_url('heq/HEQRead'); ?>" class="fas fa-journal-whills fa-5x" style="margin-top: 8px;"></a>
                <i>HANDLING EQ</i>
            </div>
        </div>
        <div class="col">
            <div class="card" data-tilt>
                <a href="<?= base_url('restow/RestowRead'); ?>" class="fas fa-journal-whills fa-5x" style="margin-top: 8px;"></a>
                <i>RESTOW</i>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>