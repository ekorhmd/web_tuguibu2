<div class="card shadow mb-4 mx-3">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="50%" cellspacing="0">
                <thead>
                    <tr class="bg-primary text-white">
                        <th style="width: 20px;">#</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($user as $u) : ?>
                        <tr>
                            <th class="align-middle text-center"><?= $i ?></th>
                            <td class="align-middle"><?= $u['nama'] ?></td>
                            <td class="align-middle"><?= $u['username'] ?></td>
                            <td class="align-middle text-center">
                                <a href="<?= base_url('user/edit/') . $u['id'] ?>" class="badge badge-pill p-2 badge-success" title="Ubah"><i class="fas fa-edit"></i></a>
                                <a href="<?= base_url('user/password/') . $u['id'] ?>" class="badge badge-pill p-2 badge-warning" title="Ubah password"><i class="fas fa-key"></i></a>
                                <button class="btn btn-danger badge rounded-pill p-2" onclick="hapusUser('<?= $u['id'] ?>', '<?= base_url('user/delete') ?>')" title="Hapus"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>