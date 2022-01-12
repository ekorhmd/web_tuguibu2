<div class="card mb-4 mx-4 shadow">
    <div class="card-body">
        <form action="<?= base_url('berita/tambah'); ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <div class="col-10 px-0">
                    <div class="col-md-12">
                        <input type="text" class="form-control <?= form_error('title') ? 'is-invalid' : "" ?>" id="title" name="title" placeholder="Judul Berita" value="<?= set_value('title') ?>">
                        <?= form_error('title', '<div class="invalid-feedback">', '</div>'); ?>
                    </div>
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane mr-2"></i>Publish</button>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-md-10">
                    <textarea id="summernote" class="form-control  <?= form_error('body') ? 'is-invalid' : "" ?>" rows="6" name="body" placeholder="Tulis isi berita disini..."><?= set_value('body'); ?></textarea>
                    <?= form_error('body', '<div class="invalid-feedback">', '</div>'); ?>
                </div>
            </div>
            <!-- <div class="row col-md-12">
                <button type="submit" class="btn btn-primary px-5">Simpan</button>
            </div> -->
        </form>
    </div>
</div>