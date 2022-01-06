<div class="card mb-4 mx-4 shadow">
    <div class="card-body">
        <form action="<?= base_url('user/password/') . $user['id'] ?>" method="post">
            <div class="mb-3 row">
                <label for="old_password" class="col-md-3 col-form-label text-md-right">Password Lama</label>
                <div class="col-md-7">
                    <input type="password" class="form-control <?= form_error('old_password') ? 'is-invalid' : "" ?>" id="old_password" name="old_password" placeholder="Password Lama">
                    <?= form_error('old_password', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="new_password" class="col-md-3 col-form-label text-md-right">Password Baru</label>
                <div class="col-md-7">
                    <input type="password" class="form-control <?= form_error('new_password') ? 'is-invalid' : "" ?>" id="new_password" name="new_password" placeholder="Password Baru">
                    <?= form_error('new_password', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="new_password2" class="col-md-3 col-form-label text-md-right">Ulangi Password Baru</label>
                <div class="col-md-7">
                    <input type="password" class="form-control <?= form_error('new_password2') ? 'is-invalid' : "" ?>" id="new_password2" name="new_password2" placeholder="Ulangi Password Baru">
                    <?= form_error('new_password2', '<div class="invalid-feedback">', '</div>'); ?>
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