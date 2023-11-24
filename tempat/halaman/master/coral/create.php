<h1 class="h3 mb-2 text-gray-800">Tambah Coral</h1>

<div class="card shadow mb-4">
    <form method="POST" action="?page=aksi-coral" enctype="multipart/form-data">
        <div class="card-header py-3">
            <a href="?page=data-coral" class="btn btn-danger btn-sm">
                <i class="fa fa-sign-out-alt"></i> Kembali
            </a>
        </div>
        <div class="card-body">
            <div class="row form-group">
                <label for="id_kategori" class="col-sm-2 col-form-label text-right"> Kategori </label>
                <div class="col-sm-8">
                    <?php
                        $query = $con->query("SELECT * FROM t_kategori ORDER BY id ASC ");
                    ?>
                    <select class="form-control" name="id_kategori" id="id_kategori">
                        <option value="">- Pilih -</option>
                        <?php foreach($query as $data) : ?>
                            <option value="<?php echo $data['id'] ?>"><?php echo $data["kategori"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <label for="deskripsi" class="col-sm-2 col-form-label text-right"> Deskripsi </label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan Deskripsi" rows="5"></textarea>
                </div>
            </div>
            <div class="row form-group">
                <label for="gambar_adventure" class="col-sm-2 col-form-label text-right"> Gambar Adventure </label>
                <div class="col-sm-8">
                    <input type="file" class="form-control" id="gambar_adventure" name="gambar_adventure">
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