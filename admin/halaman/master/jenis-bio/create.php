<h1 class="h3 mb-2 text-gray-800">Tambah Jenis Bio</h1>

<div class="card shadow mb-4">
    <form method="POST" action="?page=aksi-jenis-bio" enctype="multipart/form-data">
        <div class="card-header py-3">
            <a href="?page=data-jenis-bio" class="btn btn-danger btn-sm">
                <i class="fa fa-sign-out-alt"></i> Kembali
            </a>
        </div>
        <div class="card-body">
            <div class="row form-group">
                <label for="id_biodiversity" class="col-sm-2 col-form-label text-right"> BIOdiversity </label>
                <div class="col-sm-8">
                    <?php
                        $query = $con->query("SELECT * FROM t_biodiversity ORDER BY id ASC ");
                    ?>
                    <select class="form-control" name="id_biodiversity" id="id_biodiversity">
                        <option value="">- Pilih -</option>
                        <?php foreach($query as $data) : ?>
                            <option value="<?php echo $data['id'] ?>"><?php echo $data["nama_biodiversity"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <label for="nama_jenis_bio" class="col-sm-2 col-form-label text-right"> Nama Jenis Bio </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_jenis_bio" name="nama_jenis_bio" placeholder="Masukkan Nama Jenis Bio">
                </div>
            </div>
            <div class="row form-group">
                <label for="deskripsi_jenis_bio" class="col-sm-2 col-form-label text-right"> Deskripsi </label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="deskripsi_jenis_bio" id="deskripsi_jenis_bio" placeholder="Masukkan Deskripsi" rows="5"></textarea>
                </div>
            </div>
            <div class="row form-group">
                <label for="foto_jenis_bio" class="col-sm-2 col-form-label text-right"> Foto Jenis Bio </label>
                <div class="col-sm-8">
                    <input type="file" class="form-control" id="foto_jenis_bio" name="foto_jenis_bio">
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