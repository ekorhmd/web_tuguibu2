<div class="card mb-4 mx-4 shadow">
    <div class="card-body">
        <form action="<?= base_url('user/edit/') . $user['id'] ?>" method="post">
            <div class="mb-3 row">
                <label for="nama" class="col-md-3 col-form-label text-md-right">Nama Pengguna</label>
                <div class="col-md-7">
                    <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : "" ?>" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= validation_errors() ? set_value('nama') : $user['nama'] ?>">
                    <?= form_error('nama', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="username" class="col-md-3 col-form-label text-md-right">Username</label>
                <div class="col-md-7">
                    <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : "" ?>" id="username" name="username" placeholder="Username" value="<?= validation_errors() ? set_value('username') : $user['username'] ?>">
                    <?= form_error('username', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-7">
                    <button type="submit" class="btn btn-primary px-5">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>