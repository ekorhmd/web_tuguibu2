<nav class="navbar navbar-expand-lg navbar-light sticky-top w-100" style="z-index:1;" id="navbar">
    <div class="container">
        <a class="navbar-brand py-0" href="#">
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
                        <a class="nav-link active fw-bold" href="<?= base_url('') ?>">Home</a>
                    <?php else : ?>
                        <a class="nav-link" href="<?= base_url('') ?>">Home</a>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if ($active == 'Profil') :  ?>
                        <a class="nav-link active fw-bold" href="<?= base_url('page/profil') ?>">Profil</a>
                    <?php else : ?>
                        <a class="nav-link" href="<?= base_url('page/profil') ?>">Profil</a>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if ($active == 'Pendaftaran') :  ?>
                        <a class="nav-link active fw-bold" href="<?= base_url('page/pendaftaran') ?>">Pendaftaran</a>
                    <?php else : ?>
                        <a class="nav-link" href="<?= base_url('page/pendaftaran') ?>">Pendaftaran</a>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if ($active == 'Fasilitas') :  ?>
                        <a class="nav-link active" href="<?= base_url('page/fasilitas') ?>">Fasilitas</a>
                    <?php else : ?>
                        <a class="nav-link" href="<?= base_url('page/fasilitas') ?>">Fasilitas</a>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if ($active == 'Galeri') :  ?>
                        <a class="nav-link active" href="<?= base_url('page/galeri') ?>">Galeri</a>
                    <?php else : ?>
                        <a class="nav-link" href="<?= base_url('page/galeri') ?>">Galeri</a>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if ($active == 'Berita Sekolah') :  ?>
                        <a class="nav-link active" href="<?= base_url('page/berita') ?>">Berita Sekolah</a>
                    <?php else : ?>
                        <a class="nav-link" href="<?= base_url('page/berita') ?>">Berita Sekolah</a>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if ($active == 'Ekstrakulikuler') :  ?>
                        <a class="nav-link active" href="<?= base_url('page/ekstrakulikuler') ?>">Ekstrakulikuler</a>
                    <?php else : ?>
                        <a class="nav-link" href="<?= base_url('page/ekstrakulikuler') ?>">Ekstrakulikuler</a>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if ($active == 'Prestasi') :  ?>
                        <a class="nav-link active" href="<?= base_url('page/prestasi') ?>">Prestasi</a>
                    <?php else : ?>
                        <a class="nav-link" href="<?= base_url('page/prestasi') ?>">Prestasi</a>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if ($active == 'Contact Us') :  ?>
                        <a class="nav-link active" href="<?= base_url('page/contact') ?>">Contact Us</a>
                    <?php else : ?>
                        <a class="nav-link" href="<?= base_url('page/contact') ?>">Contact Us</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>