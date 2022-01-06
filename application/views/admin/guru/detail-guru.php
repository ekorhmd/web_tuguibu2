<div class="card mb-4 mx-4 shadow">
    <div class="card-body">
        <div class="row">
            <div class="col-md-9 mt-3 mt-md-0">
                <div class="row">
                    <div class="col-md-3">
                        <span class="font-weight-bold">Nama</span>
                    </div>
                    <div class="col-md-9">
                        <span class="font-weight-bold"><?= $guru['nama'] ?></span>
                    </div>
                </div>
                <hr class="my-2">
                <div class="row">
                    <div class="col-md-3">
                        <span>Tempat, tanggal lahir</span>
                    </div>
                    <div class="col-md-9">
                        <span><?= $guru['tempat_lahir'] ?>, <?= date("d-m-Y", strtotime($guru['tanggal_lahir']))  ?></span>
                    </div>
                </div>
                <hr class="my-2">
                <div class="row">
                    <div class="col-md-3">
                        <span>Jabatan</span>
                    </div>
                    <div class="col-md-9">
                        <span><?= $guru['jabatan'] ?></span>
                    </div>
                </div>
                <hr class="my-2">
                <div class="row">
                    <div class="col-md-3">
                        <span>Mata Pelajaran</span>
                    </div>
                    <div class="col-md-9">
                        <?php if ($guru['mapel2'] == "-") : ?>
                            <?= $guru['mapel1'] ?>
                        <?php else : ?>
                            <?= $guru['mapel1'] ?><br>
                            <?= $guru['mapel2'] ?>
                        <?php endif; ?>
                    </div>
                </div>
                <hr class="my-2">
                <div class="row">
                    <div class="col-md-3">
                        <span>Alamat</span>
                    </div>
                    <div class="col-md-9">
                        <span><?= $guru['alamat'] ?></span>
                    </div>
                </div>
                <hr class="my-2">
                <div class="row">
                    <div class="col-md-3">
                        <span>No Telepon</span>
                    </div>
                    <div class="col-md-9">
                        <span><?= $guru['notelp'] ?></span>
                    </div>
                </div>
                <hr class="my-2">
                <div class="col-md-12 px-0">
                    <a href="<?= base_url('guru/edit/') . $guru['id'] ?>" class="btn btn-warning mr-md-2" title="Ubah"><i class="fas fa-edit mr-2"></i>Ubah</a>
                    <button class="btn btn-danger" onclick="hapusGuru('<?= $guru['id'] ?>', '<?= base_url('guru/delete') ?>')" title="Hapus"><i class="far fa-trash-alt mr-2"></i>Hapus</button>
                </div>
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('assets/images/guru/') . $guru['image'] ?>" class="img-fluid rounded">
            </div>
        </div>
    </div>
</div>