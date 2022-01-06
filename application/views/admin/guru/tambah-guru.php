<div class="card mb-4 mx-4 shadow">
    <div class="card-body">
        <form action="<?= base_url('guru/tambah'); ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="nama" class="col-md-3 col-form-label text-md-right">Nama Guru</label>
                <div class="col-md-7">
                    <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : "" ?>" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama') ?>">
                    <?= form_error('nama', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tempat_lahir" class="col-md-3 col-form-label text-md-right">Tempat, Tanggal Lahir</label>
                <div class="col-md-7 row pr-0">
                    <div class="col-md-6 mb-3 mb-md-0 pr-0">
                        <input type="text" class="form-control <?= form_error('tempat_lahir') ? 'is-invalid' : "" ?>" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="<?= set_value('tempat_lahir') ?>">
                        <?= form_error('tempat_lahir', '<div class="invalid-feedback">', '</div>'); ?>
                    </div>
                    <div class="col-md-6 pr-0">
                        <input type="date" class="form-control <?= form_error('tanggal_lahir') ? 'is-invalid' : "" ?>" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>">
                        <?= form_error('tanggal_lahir', '<div class="invalid-feedback">', '</div>'); ?>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="mapel" class="col-md-3 col-form-label text-md-right">Mata Pelajaran</label>
                <div class="col-md-7 ">
                    <select class="custom-select mb-3 <?= form_error('mapel') ? 'is-invalid' : "" ?>" name="mapel" id="mapel">
                        <option value="-" selected>- Mata Pelajaran 1 -</option>
                        <option value="Bahasa Indonesia" <?= set_value('mapel') == "Bahasa Indonesia" ? 'selected' : "" ?>>Bahasa Indonesia</option>
                        <option value="Bahasa Inggris" <?= set_value('mapel') == "Bahasa Inggris" ? 'selected' : "" ?>>Bahasa Inggris</option>
                        <option value="Bahasa Sunda" <?= set_value('mapel') == "Bahasa Sunda" ? 'selected' : "" ?>>Bahasa Sunda</option>
                        <option value="BP/BK" <?= set_value('mapel') == "BP/BK" ? 'selected' : "" ?>>BP/BK</option>
                        <option value="Ilmu Pengetahuan Alam" <?= set_value('mapel') == "Ilmu Pengetahuan Alam" ? 'selected' : "" ?>>Ilmu Pengetahuan Alam</option>
                        <option value="Ilmu Pengetahuan Sosial" <?= set_value('mapel') == "Ilmu Pengetahuan Sosial" ? 'selected' : "" ?>>Ilmu Pengetahuan Sosial</option>
                        <option value="Matematika" <?= set_value('mapel') == "Matematika" ? 'selected' : "" ?>>Matematika</option>
                        <option value="Pendidikan Agama Islam" <?= set_value('mapel') == "Pendidikan Agama Islam" ? 'selected' : "" ?>>Pendidikan Agama Islam</option>
                        <option value="Pendidikan Agama Kristen" <?= set_value('mapel') == "Pendidikan Agama Kristen" ? 'selected' : "" ?>>Pendidikan Agama Kristen</option>
                        <option value="Pendidikan Jasmani dan Olahraga" <?= set_value('mapel') == "Pendidikan Jasmani dan Olahraga" ? 'selected' : "" ?>>Pendidikan Jasmani dan Olahraga</option>
                        <option value="Pendidikan Pancasila dan Kewarganegaraan" <?= set_value('mapel') == "Pendidikan Pancasila dan Kewarganegaraan" ? 'selected' : "" ?>>Pendidikan Pancasila dan Kewarganegaraan</option>
                        <option value="Seni Budaya dan Prakarya" <?= set_value('mapel') == "Seni Budaya dan Prakarya" ? 'selected' : "" ?>>Seni Budaya dan Prakarya</option>
                    </select>
                    <?= form_error('mapel', '<div class="invalid-feedback">', '</div>'); ?>
                    <select class="custom-select <?= form_error('mapel2') ? 'is-invalid' : "" ?>" name="mapel2" id="mapel2">
                        <option value="-" selected>- Mata Pelajaran 2 (Optional) -</option>
                        <option value="Bahasa Indonesia" <?= set_value('mapel2') == "Bahasa Indonesia" ? 'selected' : "" ?>>Bahasa Indonesia</option>
                        <option value="Bahasa Inggris" <?= set_value('mapel2') == "Bahasa Inggris" ? 'selected' : "" ?>>Bahasa Inggris</option>
                        <option value="Bahasa Sunda" <?= set_value('mapel2') == "Bahasa Sunda" ? 'selected' : "" ?>>Bahasa Sunda</option>
                        <option value="BP/BK" <?= set_value('mapel2') == "BP/BK" ? 'selected' : "" ?>>BP/BK</option>
                        <option value="Ilmu Pengetahuan Alam" <?= set_value('mapel2') == "Ilmu Pengetahuan Alam" ? 'selected' : "" ?>>Ilmu Pengetahuan Alam</option>
                        <option value="Ilmu Pengetahuan Sosial" <?= set_value('mapel2') == "Ilmu Pengetahuan Sosial" ? 'selected' : "" ?>>Ilmu Pengetahuan Sosial</option>
                        <option value="Matematika" <?= set_value('mapel2') == "Matematika" ? 'selected' : "" ?>>Matematika</option>
                        <option value="Pendidikan Agama Islam" <?= set_value('mapel2') == "Pendidikan Agama Islam" ? 'selected' : "" ?>>Pendidikan Agama Islam</option>
                        <option value="Pendidikan Agama Kristen" <?= set_value('mapel2') == "Pendidikan Agama Kristen" ? 'selected' : "" ?>>Pendidikan Agama Kristen</option>
                        <option value="Pendidikan Jasmani dan Olahraga" <?= set_value('mapel2') == "Pendidikan Jasmani dan Olahraga" ? 'selected' : "" ?>>Pendidikan Jasmani dan Olahraga</option>
                        <option value="Pendidikan Pancasila dan Kewarganegaraan" <?= set_value('mapel2') == "Pendidikan Pancasila dan Kewarganegaraan" ? 'selected' : "" ?>>Pendidikan Pancasila dan Kewarganegaraan</option>
                        <option value="Seni Budaya dan Prakarya" <?= set_value('mapel2') == "Seni Budaya dan Prakarya" ? 'selected' : "" ?>>Seni Budaya dan Prakarya</option>
                    </select>
                    <?= form_error('mapel2', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jabatan" class="col-md-3 col-form-label text-md-right">Jabatan</label>
                <div class="col-md-7">
                    <select class="custom-select <?= form_error('jabatan') ? 'is-invalid' : "" ?>" name="jabatan" id="jabatan">
                        <option value="-" selected>- Jabatan -</option>
                        <option value="Kepala Sekolah" <?= set_value('jabatan') == "Kepala Sekolah" ? 'selected' : "" ?>>Kepala Sekolah</option>
                        <option value="Wakil Kepala Sekolah Bidang Kesiswaan" <?= set_value('jabatan') == "Wakil Kepala Sekolah Bidang Kesiswaan" ? 'selected' : "" ?>>Wakil Kepala Sekolah Bidang Kesiswaan</option>
                        <option value="Wakil Kepala Sekolah Bidang Kurikulum" <?= set_value('jabatan') == "Wakil Kepala Sekolah Bidang Kurikulum" ? 'selected' : "" ?>>Wakil Kepala Sekolah Bidang Kurikulum</option>
                        <option value="Guru" <?= set_value('jabatan') == "Guru" ? 'selected' : "" ?>>Guru</option>
                        <option value="Tata Usaha" <?= set_value('jabatan') == "Tata Usaha" ? 'selected' : "" ?>>Tata Usaha</option>
                    </select>
                    <?= form_error('jabatan', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-md-3 col-form-label text-md-right">Alamat</label>
                <div class="col-md-7">
                    <textarea class="form-control <?= form_error('alamat') ? 'is-invalid' : "" ?>" name="alamat" id="alamat" placeholder="Nama jalan, kelurahan, kecamatan, kota" style="resize: none;"><?= set_value('alamat') ?></textarea>
                    <?= form_error('alamat', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="notelp" class="col-md-3 col-form-label text-md-right">No Telepon</label>
                <div class="col-md-7">
                    <input type="text" class="form-control <?= form_error('notelp') ? 'is-invalid' : "" ?>" id="notelp" name="notelp" placeholder="No Telepon" value="<?= set_value('notelp') ?>">
                    <?= form_error('notelp', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="gambar" class="col-md-3 col-form-label text-md-right">Gambar</label>
                <div class="col-md-7">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input <?= form_error('image') ? 'is-invalid' : "" ?>" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose image</label>
                        <?= form_error('image') ? '' : '<small id="imageHelpBlock" class="form-text text-muted">Image size: max 3MB; Image format: JPG, PNG</small>' ?>
                        <?= form_error('image', '<div class="invalid-feedback">', '</div>'); ?>

                    </div>
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