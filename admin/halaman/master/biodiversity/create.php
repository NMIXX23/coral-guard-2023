<h1 class="h3 mb-2 text-gray-800">Tambah Biodiversity</h1>

<div class="card shadow mb-4">
    <form method="POST" action="?page=aksi-biodiversity" enctype="multipart/form-data">
        <div class="card-header py-3">
            <a href="?page=data-biodiversity" class="btn btn-danger btn-sm">
                <i class="fa fa-sign-out-alt"></i> Kembali
            </a>
        </div>
        <div class="card-body">
            <div class="row form-group">
                <label for="nama_biodiversity" class="col-sm-2 col-form-label text-right"> Nama BIOdiversity </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_biodiversity" id="nama_biodiversity" placeholder="Masukkan Nama BIOdiversity">
                </div>
            </div>
            <div class="row form-group">
                <label for="foto_biodiversity" class="col-sm-2 col-form-label text-right">Foto BIOdiversity</label>
                <div class="col-md-8">
                    <input type="file" class="form-control" id="foto_biodiversity" name="foto_biodiversity">
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