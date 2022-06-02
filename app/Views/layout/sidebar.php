<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #97Df5B;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/'); ?>">
        <div class="sidebar-brand-text mx-3">WIRO</sup></div>
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-ship"></i>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Home -->
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?= base_url('/'); ?>">
            <i class="fas fa-home"></i>
            <span>Home</span></a>
    </li>

    <?php if (in_groups('Foreman')) : ?>
        <!-- Nav Item - Form -->
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url('pages/form'); ?>">
                <i class="fab fa-wpforms"></i>
                <span>Isi Form</span></a>
        </li>

    <?php endif; ?>

    <?php if (in_groups('TOC')) : ?>
        <!-- Nav Item - Form -->
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url('pages/filterdata'); ?>">
                <i class="fab fa-wpforms"></i>
                <span>Filter Data</span></a>
        </li>

    <?php endif; ?>

    <!-- Nav Item - Form -->
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?= base_url('pages/lihatform'); ?>">
            <i class="far fa-eye"></i>
            <span>Lihat Form</span></a>
    </li>

    <!-- Nav Item - Guidance -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/pages/guidance'); ?>">
            <i class="fas fa-clipboard-list"></i>
            <span>Guidance</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Log Out</span></a>

</ul>