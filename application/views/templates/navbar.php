<nav class="navbar navbar-expand-lg navbar-light sticky-top w-100 navbar-normal" id="navbar">
    <div class="container">
        <a class="navbar-brand py-0 d-flex align-items-center" id="navbar-brand" href="<?= base_url('') ?>">
            <img class="img img-responsive me-1" height="30px;" src="<?= base_url('assets/') ?>/images/icon.gif">
            <span class="align-middle">SMP Tugu Ibu 2</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto align-items-center">
                <li class="nav-item">
                    <?php if ($active == 'Home') :  ?>
                        <a class="nav-link px-md-2 active fw-bold" href="<?= base_url('') ?>">Home</a>
                    <?php else : ?>
                        <a class="nav-link px-md-2" href="<?= base_url('') ?>">Home</a>
                    <?php endif; ?>
                </li>
                <li class="nav-item dropdown">
                    <?php if ($active == 'Profil') : ?>
                        <a class="nav-link px-md-2 active fw-bold dropdown-toggle" id="profilDropdown" role="button" href="#">Profil</a>
                    <?php else : ?>
                        <a class="nav-link px-md-2 dropdown-toggle text-center" id="profilDropdown" role="button" href="#">Profil</a>
                    <?php endif; ?>
                    <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                        <li><a href="<?= base_url("page/kepegawaian") ?>" class="dropdown-item">Kepegawaian</a></li>
                        <li><a href="<?= base_url("page/kurikulum") ?>" class="dropdown-item">Kurikulum</a></li>
                        <li><a href="<?= base_url("page/sarana_prasarana") ?>" class="dropdown-item">Sarana dan Prasarana</a></li>
                        <li><a href="<?= base_url('page/visi_misi') ?>" class="dropdown-item">Visi Misi</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <?php if ($active == 'Pendaftaran') :  ?>
                        <a class="nav-link px-md-2 active fw-bold" href="<?= base_url('page/pendaftaran') ?>">Pendaftaran</a>
                    <?php else : ?>
                        <a class="nav-link px-md-2" href="<?= base_url('page/pendaftaran') ?>">Pendaftaran</a>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if ($active == 'Berita Sekolah') :  ?>
                        <a class="nav-link px-md-2 active fw-bold" href="<?= base_url('page/berita') ?>">Berita Sekolah</a>
                    <?php else : ?>
                        <a class="nav-link px-md-2" href="<?= base_url('page/berita') ?>">Berita Sekolah</a>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if ($active == 'Prestasi') :  ?>
                        <a class="nav-link px-md-2 active fw-bold" href="<?= base_url('page/prestasi') ?>">Prestasi</a>
                    <?php else : ?>
                        <a href="<?= base_url('page/prestasi') ?>" class="nav-link px-md-2">Prestasi</a>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if ($active == 'Galeri') :  ?>
                        <a class="nav-link px-md-2 active fw-bold" href="<?= base_url('page/galeri') ?>">Galeri</a>
                    <?php else : ?>
                        <a class="nav-link px-md-2" href="<?= base_url('page/galeri') ?>">Galeri</a>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if ($active == 'Contact Us') :  ?>
                        <a class="nav-link px-md-2 active fw-bold" href="<?= base_url('page/contact') ?>">Contact Us</a>
                    <?php else : ?>
                        <a class="nav-link px-md-2" href="<?= base_url('page/contact') ?>">Contact Us</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>