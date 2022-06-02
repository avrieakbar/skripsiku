<?= $this->extend('layout/usertemplate'); ?>

<?= $this->section('user-content'); ?>

<div class="container-fluid">

<?php if (in_groups('Foreman')) : ?>
    <div class="header" style="text-align: center;">
        <h1>WIRO</h1>
        <hr>
        <h2>Web International Report Operation</h2>
    </div>
</div>

    <?php endif; ?>

    <?php if (in_groups('TOC')) : ?>
        <div class="header" style="text-align: center;">
        <h1>WIRO</h1>
        <hr>
        <h2>Web International Report Operation</h2>
    </div>
</div>

    <?php endif; ?>

<?= $this->endSection(); ?>