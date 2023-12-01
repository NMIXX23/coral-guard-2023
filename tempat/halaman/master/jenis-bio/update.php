<?php
    $id_jenis_bio = $_GET["id_jenis_bio"];

    $query = $con->query("SELECT * FROM t_jenis_bio WHERE id = '$id_jenis_bio' ");

    $data = $query->fetch_assoc();
?>

<h1 class="h3 mb-2 text-gray-800">Update Jenis Bio</h1>

<div class="card shadow mb-4">
    <form method="POST" action="?page=aksi-jenis-bio" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id_jenis_bio ?>">
        <input type="hidden" name="gambarLama" value="<?php echo $data["foto_jenis_bio"] ?>">
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
                        <?php foreach($query as $biodiversity) : ?>
                            <?php if ($data["id_biodiversity"] == $biodiversity["id"]) : ?>
                                <option value="<?php echo $biodiversity['id'] ?>" selected><?php echo $biodiversity["nama_biodiversity"] ?></option>
                            <?php else : ?>
                            <option value="<?php echo $biodiversity['id'] ?>"><?php echo $biodiversity["nama_biodiversity"] ?></option>
                            <?php endif ?>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <label for="nama_jenis_bio" class="col-sm-2 col-form-label text-right"> Nama Jenis Bio </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_jenis_bio" name="nama_jenis_bio" placeholder="Masukkan Nama Jenis Bio" value="<?php echo $data["nama_jenis_bio"] ?>">
                </div>
            </div>
            <div class="row form-group">
                <label for="deskripsi_jenis_bio" class="col-sm-2 col-form-label text-right"> Deskripsi </label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="deskripsi_jenis_bio" id="deskripsi_jenis_bio" placeholder="Masukkan Deskripsi" rows="5"><?php echo $data["deskripsi_jenis_bio"] ?></textarea>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-sm-2 col-form-label text-right"> Foto </label>
                <div class="col-sm-8">
                    <img style="width: 100%; height: 300px;" src="halaman/image/jenis-bio/<?php echo $data["foto_jenis_bio"] ?>">
                </div>
            </div>
            <div class="row form-group">
                <label for="foto_jenis_bio" class="col-sm-2 col-form-label text-right"> Ganti Foto Jenis Bio </label>
                <div class="col-sm-8">
                    <input type="file" class="form-control" id="foto_jenis_bio" name="foto_jenis_bio">
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