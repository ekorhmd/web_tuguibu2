<div class="card shadow mb-4 mx-3">
    <div class="card-body">
        <a href="<?= base_url('berita/tambah') ?>" class="btn btn-primary mb-3">
            <i class="fas fa-plus mr-2"></i>Tambah Berita
        </a>
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="bg-primary text-white">
                        <th style="width: 20px;">#</th>
                        <th>Tanggal</th>
                        <th>Berita</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($berita as $b) : ?>
                        <tr>
                            <th class="align-middle text-center"><?= $no ?></th>
                            <td class="align-middle"><?= $b['date'] ?></td>
                            <td class="align-middle pb-0" style="width: 60%;">
                                <span class="font-weight-bold text-dark"><?= $b['title'] ?></span>
                                <span class="text-gray-600 ">
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
                                </span>
                            </td>
                            <td class="align-middle text-center">
                                <a href="<?= base_url('guru/edit/') . $b['id'] ?>" class="badge badge-pill p-2 badge-success" title="Ubah"><i class="fas fa-eye"></i></a>
                                <a href="<?= base_url('guru/edit/') . $b['id'] ?>" class="badge badge-pill p-2 badge-warning" title="Ubah"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-danger badge rounded-pill p-2" onclick="hapusGuru('<?= $b['id'] ?>', '<?= base_url('guru/delete') ?>')" title="Hapus"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>