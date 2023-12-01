<?php
    $id_kategori = $_GET["id_kategori"];

    $query = $con->query("SELECT * FROM t_kategori WHERE id = $id_kategori ");

    $data = $query->fetch_assoc();
?>

<h1 class="h3 mb-2 text-gray-800">Tempat</h1>

<div class="card shadow mb-4">
    <form method="POST" action="?page=aksi-kategori" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id_kategori ?>">
        <input type="hidden" name="foto_lama" value="<?php echo $data["foto_kategori"] ?>">
        <div class="card-header py-3">
            <a href="?page=administrator" class="btn btn-danger btn-sm">
                <i class="fa fa-sign-out-alt"></i> Kembali
            </a>
        </div>
        <div class="card-body">
            <div class="row form-group">
                <label for="kategori" class="col-sm-2 col-form-label text-right">Kategori</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Masukkan Kategori" value="<?php echo $data["kategori"] ?>">
                </div>
            </div>
            <div class="row form-group">
                <label for="gambar_kategori" class="col-sm-2 col-form-label text-right">Foto Kategori</label>
                <div class="col-sm-8">
                    <img style="width: 100%; height: 300px;" src="halaman/image/kategori/<?php echo $data["foto_kategori"] ?>">
                </div>
            </div>
            <div class="row form-group">
                <label for="foto_kategori" class="col-sm-2 col-form-label text-right"> Ganti Foto Kategori </label>
                <div class="col-sm-8">
                    <input type="file" class="form-control" id="foto_kategori" name="foto_kategori">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-times"></i> Batal
            </button>
            <button type="submit" class="btn btn-success btn-sm" name="btn-simpan">
                <i class="fa fa-save"></i> Simpan
            </button>
        </div>
    </form>
</div>