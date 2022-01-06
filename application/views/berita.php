<div class="section-header my-4 py-4">
    <h2 class="fw-bold text-center">Berita Sekolah</h2>
    <span class="d-flex justify-content-center text-center">Informasi seputar SMP Yaspen Tugu Ibu 2.</span>
</div>
<div class="container mb-4">
    <div class="card-body py-0">
        <div class="row mb-4">
            <?php foreach ($berita as $b) : ?>
                <div class="col-md-6">
                    <div class="card card-berita shadow-sm h-100 ">
                        <div class="card-body p-0">
                            <div class="callout border-theme m-0 h-100 pb-0">
                                <h3 class="row mx-0 text-theme mb-0"><?= $b['title'] ?></h3>
                                <span class="text-theme" style="font-size: 14px;"><?= $b['date'] ?></span>
                                <hr class="my-1">
                                <?php
                                $kalimat = $b['body'];
                                $jumlahkarakter = 200;
                                $cetak = substr($kalimat, $jumlahkarakter, 1);
                                if ($cetak != " ") {
                                    while ($cetak != " ") {
                                        $i = 1;
                                        $jumlahkarakter = $jumlahkarakter + $i;
                                        $kalimat = $b['body'];
                                        $cetak = substr($kalimat, $jumlahkarakter, 1);
                                    }
                                }
                                $cetak = substr($kalimat, 0, $jumlahkarakter);
                                echo $cetak;
                                ?>
                                <a href="#" class="text-theme text-decoration-none stretched-link">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link mx-0" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link mx-0" href="#">1</a></li>
            <li class="page-item"><a class="page-link mx-0" href="#">2</a></li>
            <li class="page-item"><a class="page-link mx-0" href="#">3</a></li>
            <li class="page-item"><a class="page-link mx-0" href="#">Next</a></li>
        </ul>
    </div>
</div>