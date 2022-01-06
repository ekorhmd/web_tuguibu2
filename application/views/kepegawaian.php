<div class="section-header my-4 py-4">
    <h2 class="fw-bold text-center">Kepegawaian</h2>
    <span class=" d-flex justify-content-center text-center">Beberapa guru, karyawan atau staff yang bertugas di SMP Yaspen Tugu Ibu 2</span>
</div>
<div class="container mt-3 mb-4">

    <section id="data">
        <?php foreach ($guru as $g) : ?>
            <div class="row">
                <div class="col-md-2 my-auto">
                    <img src="<?= base_url('assets/images/guru/') . $g['image'] ?>" class="img-fluid rounded mx-auto my-auto d-block col-5 col-md-12 mb-3 mb-md-0">
                </div>
                <div class="col-md-10">
                    <table class="table table-striped table-responsive mb-0" style="font-size: 14px;">
                        <tr>
                            <td class="col-md-3">Nama</td>
                            <td><?= $g['nama'] ?></td>
                        </tr>
                        <tr>
                            <td class="col-md-3">Tempat, Tanggal Lahir</td>
                            <td><?= $g['tempat_lahir'] ?>, <?= date("d-m-Y", strtotime($g['tanggal_lahir']))  ?></td>
                        </tr>
                        <tr>
                            <td class="col-md-3">Jabatan</td>
                            <td><?= $g['jabatan'] ?></td>
                        </tr>
                        <tr>
                            <td class="col-md-3">Mata Pelajaran</td>
                            <td>
                                <?php if ($g['mapel2'] == "-") : ?>
                                    <?= $g['mapel1'] ?>
                                <?php else : ?>
                                    <?= $g['mapel1'] ?><br>
                                    <?= $g['mapel2'] ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-md-3">Alamat</td>
                            <td><?= $g['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td class="col-md-3">Nomor Telepon</td>
                            <td><?= $g['notelp'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr>
        <?php endforeach; ?>
    </section>
</div>