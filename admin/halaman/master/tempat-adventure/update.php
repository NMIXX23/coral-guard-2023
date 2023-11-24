<?php
    $id_tempat_adventure = $_GET["id-tempat-adventure"];

    $query = $con->query("SELECT * FROM t_tempat_adventure WHERE id = '$id_tempat_adventure' ");

    $data = $query->fetch_assoc();
?>

<h1 class="h3 mb-2 text-gray-800">Update Tempat Adventure</h1>

<div class="card shadow mb-4">
    <form method="POST" action="?page=aksi-tempat-adventure" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id_tempat_adventure ?>">
        <input type="hidden" name="gambarLama" value="<?php echo $data["foto"] ?>">
        <div class="card-header py-3">
            <a href="?page=data-tempat-adventure" class="btn btn-danger btn-sm">
                <i class="fa fa-sign-out-alt"></i> Kembali
            </a>
        </div>
        <div class="card-body">
            <div class="row form-group">
                <label for="nama_tempat" class="col-sm-2 col-form-label text-right"> Nama Tempat </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_tempat" name="nama_tempat" placeholder="Masukkan Nama Tempat" value="<?php echo $data["nama_tempat"] ?>">
                </div>
            </div>
            <div class="row form-group">
                <label for="id_kategori" class="col-sm-2 col-form-label text-right"> Kategori </label>
                <div class="col-sm-8">
                    <?php
                        $query = $con->query("SELECT * FROM t_kategori ORDER BY id ASC ");
                    ?>
                    <select class="form-control" name="id_kategori" id="id_kategori">
                        <option value="">- Pilih -</option>
                        <?php foreach($query as $kategori) : ?>
                            <?php if ($kategori["id"] == $data["id_kategori"]) : ?>
                            <option value="<?php echo $kategori['id'] ?>" selected><?php echo $kategori['kategori'] ?></option>
                        <?php else : ?>
                            <option value="<?php echo $kategori['id'] ?>"><?php echo $kategori['kategori'] ?></option>
                        <?php endif ?>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <label for="nomor_hp" class="col-sm-2 col-form-label text-right"> Nomor HP </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" placeholder="Masukkan Nomor HP" value="<?php echo $data["nomor_hp"] ?>">
                </div>
            </div>
            <div class="row form-group">
                <label for="alamat_tempat" class="col-sm-2 col-form-label text-right"> Alamat Tempat </label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="alamat_tempat" name="alamat_tempat" placeholder="Masukkan Alamat Tempat" rows="5"><?php echo $data["alamat_tempat"] ?></textarea>
                </div>
            </div>
            <div class="row form-group">
                <label for="gambar" class="col-sm-2 col-form-label text-right"> Foto Tempat </label>
                <div class="col-sm-8">
                    <img style="width: 100%; height: 300px;" src="halaman/image/tempat-adventure/<?php echo $data["foto"] ?>">
                </div>
            </div>
            <div class="row form-group">
                <label for="foto" class="col-sm-2 col-form-label text-right"> Ganti Foto </label>
                <div class="col-sm-8">
                    <input type="file" class="form-control" id="foto" name="foto">
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