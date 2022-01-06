<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDeleteLabel">Konfirmasi Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin manghapus data ini?
            </div>
            <div class="modal-footer">
                <form action="" method="post" id="url">
                    <input type="hidden" name="id" id="id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalAkademik" tabindex="-1" aria-labelledby="modalAkademikLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAkademikLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('akademik') ?>" method="POST" id="formAkademik">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kegiatan">Kegiatan</label>
                        <input type="text" class="form-control" name="kegiatan" id="kegiatan" placeholder="Kegiatan">
                        <div class="invalid-feedback kegiatan_error"></div>
                    </div>
                    <div class="form-group">
                        <label for="kegiatan">Tanggal Awal</label>
                        <input type="date" class="form-control" name="tanggal1" id="tanggal1">
                        <div class="invalid-feedback tanggal1_error"></div>
                    </div>
                    <div class="form-group mb-0">
                        <label for="kegiatan">Tanggal Akhir</label>
                        <input type="date" class="form-control" name="tanggal2" id="tanggal2">
                        <div class="invalid-feedback tanggal2_error"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="ubahAkademik" tabindex="-1" aria-labelledby="ubahAkademikLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ubahAkademikLabel">Ubah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('akademik/ubah') ?>" method="POST">
                <input type="hidden" name="id" id="id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kegiatan">Kegiatan</label>
                        <input type="text" class="form-control" name="kegiatan" id="kegiatan" placeholder="Kegiatan">
                        <div class="invalid-feedback kegiatan_error"></div>
                    </div>
                    <div class="form-group">
                        <label for="kegiatan">Tanggal Awal</label>
                        <input type="date" class="form-control" name="tanggal1" id="tanggal1">
                        <div class="invalid-feedback tanggal1_error"></div>
                    </div>
                    <div class="form-group mb-0">
                        <label for="kegiatan">Tanggal Akhir</label>
                        <input type="date" class="form-control" name="tanggal2" id="tanggal2">
                        <div class="invalid-feedback tanggal2_error"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>