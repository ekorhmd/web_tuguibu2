<div class="card shadow mb-4 mx-3">
    <div class="card-body">
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#modalAkademik">
            Tambah Data
        </button>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
                <thead>
                    <tr class="bg-primary text-white">
                        <th></th>
                        <th>Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($akademik as $a) : ?>
                        <tr>
                            <td class="align-middle text-center"><?= $i ?></td>
                            <td class="align-middle"><?= $a['kegiatan'] ?></td>
                            <td class="align-middle">
                                <?php if ($a['tanggal2'] == '0000-00-00') : ?>
                                    <?= date("d-m-Y", strtotime($a['tanggal1'])) ?>
                                <?php else : ?>
                                    <?= date("d-m-Y", strtotime($a['tanggal1'])) ?> -
                                    <?= date("d-m-Y", strtotime($a['tanggal2'])) ?>
                                <?php endif; ?>
                            </td>
                            <td class="align-middle text-center">
                                <a href="#" class="badge badge-pill p-2 badge-success ubahAkademik" title="Ubah" data-toggle="modal" data-target="#ubahAkademik" data-id="<?= $a['id'] ?>" data-url="<?= base_url('akademik/getIdAkademik') ?>"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-danger badge rounded-pill p-2" onclick="hapusAkademik('<?= $a['id'] ?>', '<?= base_url('akademik/delete') ?>')" title="Hapus"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>