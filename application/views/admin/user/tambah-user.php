<div class="card mb-4 mx-4 shadow">
    <div class="card-body">
        <form action="<?= base_url('user/tambah'); ?>" method="post">
            <div class="mb-3 row">
                <label for="nama" class="col-md-3 col-form-label text-md-right">Nama Pengguna</label>
                <div class="col-md-7">
                    <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : "" ?>" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama') ?>">
                    <?= form_error('nama', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="username" class="col-md-3 col-form-label text-md-right">Username</label>
                <div class="col-md-7">
                    <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : "" ?>" id="username" name="username" placeholder="Username" value="<?= set_value('username') ?>">
                    <?= form_error('username', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-md-3 col-form-label text-md-right">Password</label>
                <div class="col-md-7">
                    <input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : "" ?>" id="password" name="password" placeholder="Password">
                    <?= form_error('password') ? '' : '<small id="passwordHelpBlock" class="form-text text-muted">Your password must be 5-15 characters long.</small>' ?>
                    <?= form_error('password', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password2" class="col-md-3 col-form-label text-md-right">Konfirmasi Password</label>
                <div class="col-md-7">
                    <input type="password" class="form-control <?= form_error('password2') ? 'is-invalid' : "" ?>" id="password2" name="password2" placeholder="Konfirmasi Password">
                    <?= form_error('password') ? '' : '<small id="passwordHelpBlock" class="form-text text-muted">Your password must be 5-15 characters long.</small>' ?>
                    <?= form_error('password2', '<div class="invalid-feedback">', '</div>'); ?>
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