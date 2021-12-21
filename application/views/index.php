<section id="carousel">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/'); ?>/images/banner2.jpg" class="d-block w-100">
                <div class="container">
                    <div class="d-block h-100 d-flex align-items-center" style="position: absolute; right: 10%; top:0; left: 10%; ">
                        <div>
                            <h1 class="text-white text-capitalize judul-carousel">Selamat Datang Di<br> <b> SMP Yaspen Tugu Ibu 2</b></h1>
                            <a href="page/pendaftaran" class="btn btn-theme rounded-pill text-white w-auto btn-carousel">Informasi Pendaftaran</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="py-5">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-12">
                <h2 class="fw-bold text-center">Tentang Kami</h2>
            </div>
        </div>
        <div class="row mt-5 mx-0">
            <div class="col-md-5 p-2">
                <img src="<?= base_url('assets/'); ?>images/welcome.png" style="height: 300px" class="img-fluid rounded d-flex mx-auto col-md-12">
            </div>
            <div class="col-md-7 p-2 ps-md-5">
                <span class="h3 fw-bold">Tentang SMP Tugu Ibu 2</span>
                <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias est nam, sunt
                    dolore quos
                    aliquam earum ipsam dolorum quo quas minus recusandae excepturi repudiandae magnam laudantium
                    deleniti. Fugiat, fugit pariatur.Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Molestias est nam, sunt dolore quos
                    aliquam earum ipsam dolorum quo.</p>
                <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias est nam, sunt
                    dolore quos
                    aliquam earum ipsam dolorum quo quas minus recusandae excepturi repudiandae magnam laudantium
                    deleniti. Fugiat, fugit pariatur.Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Molestias est nam, sunt dolore quos
                    aliquam earum ipsam dolorum quo.</p>
            </div>
        </div>
    </div>
</section>

<section id="berita" class="bg-light py-5">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-12">
                <h2 class="fw-bold text-center">Berita Terbaru</h2>
                <span class="d-flex justify-content-center text-center">Beberapa berita terbaru yang berkaitan
                    dengan
                    SMP Yaspen Tugu Ibu 2</span>
            </div>
        </div>
        <div class="row mt-5 mx-0">
            <?php for ($i = 0; $i < 4; $i++) : ?>
                <div class="col-md-6 p-2">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="callout border-theme m-0">
                                <div class="row">
                                    <a href="#" class="h4 fw-bold text-decoration-none link-dark mb-0">Judul Berita</a>
                                    <span class="mb-2">01/01/2021</span>
                                    <span>
                                        Ini adalah contoh isi dari berita pertama yang diperpendek
                                        isinya...
                                        <a href="#" class="text-decoration-none link-theme">Lebih banyak</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <div class="row mt-5 mx-0">
            <div class="col-md-12 d-flex justify-content-center">
                <a href="#" style="font-weight: 600; font-size: 16px" class="border-3 border-theme btn btn-outline-theme py-3 px-4">Lihat Selengkapnya</a>
            </div>
        </div>
</section>

<section id="welcome" class="py-5">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-4 row my-auto d-flex justify-content-center">
                <div class="col-12 mb-3">
                    <img src="<?= base_url('assets/'); ?>images/bu-ita-kepsek.jpg" class="img-fluid rounded d-flex mx-auto" style="width: 250px;">
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <span class="text-center h5 mb-0">Dra. Hj. Ita Nur'Asita, MM</span>
                </div>
            </div>
            <div class="col-md-8 my-auto px-4 pt-4">
                <h2 class="fw-bold">Kepala Sekolah</h2>
                <p class="m-0">Kami Menyambut baik terbitnya Website Tugu Ibu 2 yang baru , dengan harapan
                    dipublikasinya
                    website
                    ini sekolah berharap : Peningkatan layanan pendidikan kepada siswa, orangtua, dan
                    masyarakat
                    pada umumnya semakin meningkat. </p>
            </div>
        </div>
    </div>
</section>

<section id="data" class="py-5 bg-theme text-white">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-12">
                <h2 class="fw-bold text-center">Data Sekolah</h2>
                <span class="d-flex justify-content-center text-center">Beberapa prestasi yang telah diraih oleh
                    siswa-siswi SMP Yaspen Tugu Ibu 2</span>
            </div>
        </div>
        <div class="row mt-md-5 pt-md-3 mt-4 mx-0">
            <div class="col-md-4 mb-3 mb-md-0 row m-0 p-0">
                <div class="col-12 text-center">
                    <span class="h1 fw-bolder counter">
                        20
                    </span>
                </div>
                <div class="col-12 text-center mt-1">
                    <span class="h6 fw-light">
                        Guru
                    </span>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0 row m-0 p-0">
                <div class="col-12 text-center">
                    <span class="h1 fw-bolder counter">
                        100
                    </span>
                </div>
                <div class="col-12 text-center mt-1">
                    <span class="h6 fw-light">
                        Siswa
                    </span>
                </div>
            </div>
            <div class="col-md-4 row m-0 p-0">
                <div class="col-12 text-center">
                    <span class="h1 fw-bolder counter">
                        10
                    </span>
                </div>
                <div class="col-12 text-center mt-1">
                    <span class="h6 fw-light">
                        Ruangan
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="prestasi" class="bg-light py-5">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-12">
                <h2 class="fw-bold text-center">Prestasi</h2>
                <span class="d-flex justify-content-center text-center">Beberapa prestasi yang telah diraih oleh
                    siswa-siswi SMP Yaspen Tugu Ibu 2</span>
            </div>
        </div>
        <div class="row mt-5 mx-0">
            <div id="carouselPrestasi" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselPrestasi" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselPrestasi" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselPrestasi" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url('assets/'); ?>/images/slider.jpg" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('assets/'); ?>/images/slider-2.jpg" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('assets/'); ?>/images/slider-3.jpg" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselPrestasi" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselPrestasi" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>

<section id="lokasi" class="py-5">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-12">
                <h2 class="fw-bold text-center">Lokasi</h2>
                <span class="d-flex justify-content-center text-center">Temui kami melalui Google Maps</span>
            </div>
        </div>
        <div class="row mt-5 mx-0">
            <div class="col-md-4 d-flex align-items-center">
                <div class="row">
                    <span class="col-md-12 mb-md-4 display-6 fs-3 text-center">
                        Lokasi kami ?
                    </span>
                    <span class="col-md-12 display-6 fs-4 text-center">
                        Jl. Radar AURI No. 30 Mekarsari, Cimanggis, Kota Depok, Jawa Barat - 16952
                    </span>
                </div>
            </div>
            <div class="col-md-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.171770339431!2d106.87887581431163!3d-6.371812064101601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec9bb403cf93%3A0x417a433dba62de1!2sSekolah%20Menengah%20Pertama%20Yaspen%20Tugu%20Ibu%202%20Depok!5e0!3m2!1sid!2sid!4v1639986978348!5m2!1sid!2sid" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>