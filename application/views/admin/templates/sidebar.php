<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin') ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Tugu Ibu 2</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider mt-0 mb-3">

    <div class="sidebar-heading mb-2">
        Menu
    </div>

    <!-- Nav Item - Dashboard -->
    <?php if ($active == 'Dashboard') : ?>
        <li class="nav-item active">
        <?php else : ?>
        <li class="nav-item">
        <?php endif; ?>
        <a class="nav-link pt-0 pb-3" href="<?= base_url('admin/dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
        </li>

        <?php if ($active == 'Guru') : ?>
            <li class="nav-item active">
            <?php else : ?>
            <li class="nav-item">
            <?php endif; ?> <a class="nav-link collapsed pt-0 pb-3" href="#" data-toggle="collapse" data-target="#dropdown-guru" aria-expanded="true" aria-controls="dropdown-guru">
                <i class="fas fa-fw fa-user-tie"></i>
                <span>Guru</span>
            </a>

            <?php if ($active == 'Guru') : ?>
                <div id="dropdown-guru" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <?php else : ?>
                    <div id="dropdown-guru" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <?php endif; ?>
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php if ($sidebar == 'Data Guru') : ?>
                            <a class="collapse-item active" href="<?= base_url('guru') ?>">Data Guru</a>
                        <?php else : ?>
                            <a class="collapse-item" href="<?= base_url('guru') ?>">Data Guru</a>
                        <?php endif; ?>
                        <?php if ($sidebar == 'Tambah Guru') : ?>
                            <a class="collapse-item active" href="<?= base_url('guru/tambah') ?>">Tambah Guru</a>
                        <?php else : ?>
                            <a class="collapse-item" href="<?= base_url('guru/tambah') ?>">Tambah Guru</a>
                        <?php endif; ?>
                    </div>
                    </div>
            </li>

            <?php if ($active == 'Kalender Akademik') : ?>
                <li class="nav-item active">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link pt-0 pb-3" href="<?= base_url('akademik') ?>">
                    <i class="far fa-calendar-alt fa-fw"></i>
                    <span>Kalender Akademik</span>
                </a>
                </li>

                <?php if ($active == 'Berita Sekolah') : ?>
                    <li class="nav-item active">
                    <?php else : ?>
                    <li class="nav-item">
                    <?php endif; ?>
                    <a class="nav-link pt-0 pb-3" href="<?= base_url('berita') ?>">
                        <i class="fas fa-newspaper fa-fw"></i>
                        <span>Berita Sekolah</span>
                    </a>
                    </li>

                    <?php if ($active == 'Pengguna') : ?>
                        <li class="nav-item active">
                        <?php else : ?>
                        <li class="nav-item">
                        <?php endif; ?> <a class="nav-link collapsed pt-0 pb-3" href="#" data-toggle="collapse" data-target="#dropdown-pengguna" aria-expanded="true" aria-controls="dropdown-pengguna">
                            <i class="fas fa-users fa-fw"></i>
                            <span>Pengguna</span>
                        </a>

                        <?php if ($active == 'Pengguna') : ?>
                            <div id="dropdown-pengguna" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                            <?php else : ?>
                                <div id="dropdown-pengguna" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                                <?php endif; ?>
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <?php if ($sidebar == 'Data Pengguna') : ?>
                                        <a class="collapse-item active" href="<?= base_url('user') ?>">Data Pengguna</a>
                                    <?php else : ?>
                                        <a class="collapse-item" href="<?= base_url('user') ?>">Data Pengguna</a>
                                    <?php endif; ?>
                                    <?php if ($sidebar == 'Tambah Pengguna') : ?>
                                        <a class="collapse-item active" href="<?= base_url('user/tambah') ?>">Tambah Pengguna</a>
                                    <?php else : ?>
                                        <a class="collapse-item" href="<?= base_url('user/tambah') ?>">Tambah Pengguna</a>
                                    <?php endif; ?>
                                </div>
                                </div>
                        </li>

                        <!-- Sidebar Toggler (Sidebar) -->
                        <div class="text-center d-none d-md-inline">
                            <button class="rounded-circle border-0" id="sidebarToggle"></button>
                        </div>

</ul>
<!-- End of Sidebar -->