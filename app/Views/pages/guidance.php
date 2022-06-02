<?= $this->extend('layout/usertemplate'); ?>

<?= $this->section('user-content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
        <?php if (in_groups('Kapal')) : ?>
            <h2>Guidance Vessel</h2>
                <ul>
                    <li>Log in / Register</li>
                    <li>Klik lihat form</li>
                    <li>Pilih form kontainer yang tersedia</li>
                    <li>Klik Detail</li>
                    <li>Lakukan Approval</li>
                    <li>Klik Save</li>
                </ul>
        <?php elseif (in_groups('Foreman')) : ?>
            <h2>Guidance Foreman</h2>
                <ul>
                    <li>Log in / Register</li>
                    <li>Klik menu Form </li>
                    <li>Pilih Form yang hendak diisi</li>
                    <li>Isi form sesuai dengan SOP yang berlaku</li>
                    <li>Lakukan Approval</li>
                    <li>Klik Save</li>
                    <li>Jika ingin melihat hasil pengisian form bisa dilihat melalui menu Lihat Form</li>
                </ul>
                <?php else : ?>
                    <h2>Guidance TOC</h2>
                <ul>
                    <li>Log in / Register</li>
                    <li>Klik lihat form</li>
                    <li>Cari Jenis form yang hendak di check/ download/ print</li>
                    <li>Klik Detail</li>
                </ul>
                <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>