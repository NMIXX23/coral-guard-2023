<?php
$id_adventure_tempat = $_GET["id_adventure_tempat"];

$query = $con->query("SELECT * FROM t_adventure_tempat WHERE id = '$id_adventure_tempat' ");

$data = $query->fetch_assoc();
?>

<h1 class="h3 mb-2 text-gray-800">Update Coral</h1>

<div class="card shadow mb-4">
    <form method="POST" action="?page=aksi-coral" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id_adventure_tempat ?>">
        <input type="hidden" name="adventure_gambar" value="<?php echo $data["gambar_adventure"] ?>">
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
                        <?php foreach($query as $kategori) : ?>
                            <?php if ($data["id_kategori"] == $kategori["id"]) : ?>
                                <option value="<?php echo $kategori['id'] ?>" selected><?php echo $kategori["kategori"] ?></option>
                            <?php else : ?>
                                <option value="<?php echo $kategori['id'] ?>"><?php echo $kategori["kategori"] ?></option>
                            <?php endif ?>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <label for="deskripsi" class="col-sm-2 col-form-label text-right"> Deskripsi </label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan Deskripsi" rows="5"><?php echo $data["deskripsi"] ?></textarea>
                </div>
            </div>
            <div class="row form-group">
                <label for="image" class="col-sm-2 col-form-label text-right">Gambar</label>
                <div class="col-sm-8">
                    <img src="halaman/image/coral/<?php echo $data["gambar_adventure"] ?>" style="width: 100%; height: 300px;">
                </div>
            </div>
            <div class="row form-group">
                <label for="gambar_adventure" class="col-sm-2 col-form-label text-right"> Ganti Adventure </label>
                <div class="col-sm-8">
                    <input type="file" class="form-control" id="gambar_adventure" name="gambar_adventure">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-times"></i> Batal
            </button>
            <button type="submit" class="btn btn-success btn-sm" name="btn-update">
                <i class="fa fa-save"></i> Simpan
            </button>
        </div>
    </form>
</div>