<div class="card shadow mb-4 mx-3">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="bg-primary text-white">
                        <th style="width: 20px;">#</th>
                        <th>Nama Lengkap</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Jabatan</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($guru as $g) : ?>
                        <tr>
                            <th class="align-middle text-center"><?= $i ?></th>
                            <td class="align-middle"><?= $g['nama'] ?></td>
                            <td class="align-middle"><?= $g['tempat_lahir'] ?>, <?= date("d-m-Y", strtotime($g['tanggal_lahir']))  ?></td>
                            <td class="align-middle"><?= $g['jabatan'] ?></td>
                            <td class="align-middle text-center">
                                <a href="<?= base_url('guru/detail/') . $g['id'] ?>" class="badge badge-pill p-2 badge-success" title="Detail"><i class="fas fa-eye"></i></a>
                                <a href="<?= base_url('guru/edit/') . $g['id'] ?>" class="badge badge-pill p-2 badge-warning" title="Ubah"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-danger badge rounded-pill p-2" onclick="hapusGuru('<?= $g['id'] ?>', '<?= base_url('guru/delete') ?>')" title="Hapus"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>