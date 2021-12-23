<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider mt-0 mb-4">

    <!-- Nav Item - Dashboard -->
    <?php if ($active == 'Dashboard') : ?>
        <li class="nav-item active">
        <?php else : ?>
        <li class="nav-item">
        <?php endif; ?>
        <a class="nav-link pt-0 pb-4" href="<?= base_url('admin/index') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <?php if ($active == 'Guru') : ?>
            <li class="nav-item active">
            <?php else : ?>
            <li class="nav-item">
            <?php endif; ?> <a class="nav-link pt-0 pb-4 collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Guru</span>
            </a>

            <?php if ($active == 'Guru') : ?>
                <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <?php else : ?>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <?php endif; ?>
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php if ($sidebar == 'Data Guru') : ?>
                            <a class="collapse-item active" href="<?= base_url('admin/data_guru') ?>">Data Guru</a>
                        <?php else : ?>
                            <a class="collapse-item" href="<?= base_url('admin/data_guru') ?>">Data Guru</a>
                        <?php endif; ?>
                        <?php if ($sidebar == 'Tambah Guru') : ?>
                            <a class="collapse-item active" href="<?= base_url('admin/tambah_guru') ?>">Tambah Guru</a>
                        <?php else : ?>
                            <a class="collapse-item" href="<?= base_url('admin/tambah_guru') ?>">Tambah Guru</a>
                        <?php endif; ?>
                    </div>
                    </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

</ul>
<!-- End of Sidebar -->