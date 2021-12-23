<div class="card mx-4 shadow">
    <div class="card-body">
        <div class="mb-3 row">
            <label for="nama_guru" class="col-md-3 col-form-label text-right">Nama Guru</label>
            <div class="col-md-7">
                <input type="text" class="form-control" id="nama_guru" name="nama_guru">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tempat" class="col-md-3 col-form-label text-right">Tempat, Tanggal Lahir</label>
            <div class="col-md-7 row pr-0">
                <div class="col-md-4 pr-0">
                    <input type="text" class="form-control" id="tempat" name="tempat">
                </div>
                <div class="col-md-4 pr-0">
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="mapel" class="col-md-3 col-form-label text-right">Mata Pelajaran</label>
            <div class="col-md-7">
                <select class="custom-select" name="mapel" id="mapel">
                    <option selected>- Mata Pelajaran -</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jabatan" class="col-md-3 col-form-label text-right">Jabatan</label>
            <div class="col-md-7">
                <select class="custom-select" name="jabatan" id="jabatan">
                    <option selected>- Jabatan -</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-md-3 col-form-label text-right">Alamat</label>
            <div class="col-md-7">
                <textarea class="form-control" name="alamat" id="alamat" placeholder="Nama jalan, kelurahan, kecamatan, kota" required></textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="notelp" class="col-md-3 col-form-label text-right">No Telepon</label>
            <div class="col-md-7">
                <input type="text" class="form-control" id="notelp" name="notelp">
            </div>
        </div>
    </div>
</div>