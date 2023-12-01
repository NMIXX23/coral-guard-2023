<h1 class="h3 mb-2 text-gray-800">Tambah Daftar Tempat</h1>

<div class="card shadow mb-4">
    <form method="POST" action="?page=aksi-tempat" enctype="multipart/form-data">
        <div class="card-header py-3">
            <a href="?page=data-tempat" class="btn btn-danger btn-sm">
                <i class="fa fa-sign-out-alt"></i> Kembali
            </a>
        </div>
        <div class="card-body">
            <div class="row form-group">
                <label for="nama_tempat" class="col-sm-2 col-form-label text-right">Nama Tempat </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_tempat" id="nama_tempat" placeholder="Masukkan Nama Tempat">
                </div>
            </div>
            <div class="row form-group">
                <label for="alamat_tempat" class="col-sm-2 col-form-label text-right"> Alamat Tempat </label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="alamat_tempat" id="alamat_tempat" placeholder="Masukkan Alamat Tempat" rows="5"></textarea>
                </div>
            </div>
            <div class="row form-group">
                <label for="foto_tempat" class="col-sm-2 col-form-label text-right"> Foto Tempat </label>
                <div class="col-sm-8">
                    <input type="file" class="form-control" name="foto_tempat" id="foto_tempat">
                </div>
            </div>
            <hr>
            <div class="row form-group">
                <label for="penanggung_jawab" class="col-sm-2 col-form-label text-right"> Penanggung Jawab </label>
            </div>
            <div class="row form-group">
                <label for="nama_pegawai" class="col-sm-2 col-form-label text-right"> Nama Pegawai </label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" placeholder="Masukkan Nama Pegawai">
                </div>
            </div>
            <div class="row form-group">
                <label for="email_pegawai" class="col-sm-2 col-form-label text-right"> Email Pegawai </label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="email_pegawai" id="email_pegawai" placeholder="Masukkan Email Pegawai">
                </div>
            </div>
            <div class="row form-group">
                <label for="nomor_hp_pegawai" class="col-sm-2 col-form-label text-right"> Nomor HP Pegawai </label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="nomor_hp_pegawai" id="nomor_hp_pegawai" placeholder="Masukkan Nomor HP Pegawai">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-times"></i> Batal
            </button>
            <button type="submit" class="btn btn-success btn-sm" name="btn-tambah">
                <i class="fa fa-save"></i> Simpan
            </button>
        </div>
    </form>
</div>