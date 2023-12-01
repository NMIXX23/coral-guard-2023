<?php
    $id_biodiversity = $_GET["id_biodiversity"];

    $query = $con->query("SELECT * FROM t_biodiversity WHERE id = $id_biodiversity ");

    $data = $query->fetch_assoc();
?>

<h1 class="h3 mb-2 text-gray-800">Update Katalog</h1>

<div class="card shadow mb-4">
    <form method="POST" action="?page=aksi-biodiversity" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id_biodiversity ?>">
        <input type="hidden" name="foto_lama" value="<?php echo $data["foto_biodiversity"] ?>">
        <div class="card-header py-3">
            <a href="?page=data-biodiversity" class="btn btn-danger btn-sm">
                <i class="fa fa-sign-out-alt"></i> Kembali
            </a>
        </div>
        <div class="card-body">
            <div class="row form-group">
                <label for="nama_biodiversity" class="col-sm-2 col-form-label text-right"> Nama Katalog </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_biodiversity" id="nama_biodiversity" placeholder="Masukkan Nama Katalog" value="<?php echo $data["nama_biodiversity"] ?>">
                </div>
            </div>
            <div class="row form-group">
                <label for="gambar_biodiversity" class="col-sm-2 col-form-label text-right">Foto Katalog</label>
                <div class="col-sm-8">
                    <img style="width: 100%; height: 300px;" src="halaman/image/biodiversity/<?php echo $data["foto_biodiversity"] ?>">
                </div>
            </div>
            <div class="row form-group">
                <label for="foto_biodiversity" class="col-sm-2 col-form-label text-right"> Ganti Foto Katalog </label>
                <div class="col-sm-8">
                    <input type="file" class="form-control" id="foto_biodiversity" name="foto_biodiversity">
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