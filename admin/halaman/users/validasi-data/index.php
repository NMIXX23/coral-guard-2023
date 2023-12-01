<h1 class="h3 mb-2 text-gray-800">Validasi Data</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <i class="fa fa-book"></i> Data Validasi Lokasi
        <button type="button" style="float: right;" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah-data">
            <i class="fa fa-plus"></i> Tambah
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Kategori</th>
                        <th>Region</th>
                        <th class="text-center">Latitude</th>
                        <th class="text-center">Longitude</th>
                        <th class="text-center">Gambar</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Validasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomer = 1;
                    $query = $con->query("SELECT * FROM t_maps ORDER BY validasi ASC");
                    ?>
                    <?php foreach ($query as $data) : ?>
                        <tr>
                            <td class="text-center"><?php echo $nomer++ ?>.</td>
                            <td class="text-center"><?php echo $data['kategori'] ?></td>
                            <td><?php echo $data["region"] ?></td>
                            <td class="text-center"><?php echo $data["latitude"] ?></td>
                            <td class="text-center"><?php echo $data["longitude"] ?></td>
                            <td class="text-center">
                                <?php if ($data['gambar'] == NULL) : ?>
                                    <strong>
                                        Gambar Tidak Ada
                                    </strong>
                                <?php else : ?>
                                    <img src="../images/lokasi/<?php echo $data['gambar'] ?>" style="width: 100px;" class="img-fluid">
                                <?php endif ?>
                            </td>
                            <td class="text-center">
                                <?php if ($data['validasi'] == 1) : ?>
                                    <span class="badge badge-success">
                                        Diterima
                                    </span>
                                <?php elseif($data['validasi'] == 2) : ?>
                                    <span class="badge badge-danger">
                                        Ditolak
                                    </span>
                                <?php elseif($data['validasi'] == 0) : ?>
                                    <span class="badge badge-warning">
                                        Belum Di Validasi
                                    </span>
                                <?php endif ?>
                            </td>
                            <td class="text-center">
                                <?php if ($_SESSION['id_user'] == $data["id"]) : ?>
                                    <strong>
                                        Anda Adalah Admin Utama
                                    </strong>
                                <?php else : ?>
                                    <!-- <a href="?page=edit-administrator&id=<?php echo $data["id"] ?>" class="btn btn-warning btn-sm">
                                        <i class="fa fa-edit"></i> Edit
                                    </a> -->
                                    <?php if ($data['validasi'] == 0) : ?>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#validasi-data-<?php echo $data['id'] ?>">
                                            <i class="fa fa-search"></i> Validasi
                                        </button>
                                    <?php else : ?>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit-data-<?php echo $data['id'] ?>">
                                            <i class="fa fa-edit"></i> Edit
                                        </button>
                                    <?php endif ?>
                                    <form method="POST" style="display: inline;">
                                        <input type="hidden" name="id" value="<?php echo $data["id"] ?>">
                                        <button onclick="return confirm('Yakin ? Apakah Ingin Menghapus Data Ini ?')" type="submit" class="btn btn-danger btn-sm" name="btn-hapus">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                <?php endif ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<?php foreach ($query as $data) : ?>
    <div class="modal fade" id="validasi-data-<?php echo $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <i class="fa fa-search"></i> Validasi
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST">
                    <input type="hidden" name="id_maps" value="<?php echo $data['id'] ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="validasi" class="form-label"> Validasi Data </label>
                            <select class="form-control" name="validasi" id="validasi">
                                <option value="">- Pilih -</option>
                                <option value="1">Diterima</option>
                                <option value="2">Ditolak</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-times"></i> Batal
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm" name="btn-simpan">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach ?>
<!-- END Modal -->

<!-- Modal -->
<?php foreach ($query as $edit) : ?>
    <div class="modal fade" id="edit-data-<?php echo $edit['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <i class="fa fa-edit"></i> Edit Data
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <form method="POST" enctype="multipart/form-data" action="?page=aksi-validasi">
                <input type="hidden" name="id" value="<?php echo $edit['id'] ?>">
                <input type="hidden" name="gambar_old" value="<?php echo $edit['gambar'] ?>">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label class="form-label mb-2" for="kategori"> Kategori </label>
                        <select class="form-control" name="kategori" id="kategori">
                            <option value="" selected>- Pilih -</option>
                            <option value="Baik" <?php echo $edit['kategori'] == "Baik" ? 'selected' : '' ?> >Baik</option>
                            <option value="Sedang" <?php echo $edit['kategori'] == "Sedang" ? 'selected' : '' ?> >Sedang</option>
                            <option value="Rendah" <?php echo $edit['kategori'] == "Rendah" ? 'selected' : '' ?> >Rendah</option>
                            <option value="Buruk" <?php echo $edit['kategori'] == "Buruk" ? 'selected' : '' ?> >Buruk</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="region" class="form-label mb-2"> Region </label>
                        <input type="text" class="form-control" name="region" id="region" value="<?php echo $edit['region'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="gambar" class="form-label mb-2"> Gambar </label>
                        <input type="file" class="form-control" name="gambar" id="gambar">
                    </div>
                    <div class="form-group mb-3">
                        <label for="latitude" class="form-label mb-2"> Latitude </label>
                        <input type="text" class="form-control" name="latitude" id="latitude" value="<?php echo $edit['latitude'] ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="longitude" class="form-label mb-3"> Longitude </label>
                        <input type="text" class="form-control" name="longitude" id="longitude" value="<?php echo $edit['longitude']  ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-warning btn-sm">
                        <i class="fa fa-times"></i> Batal
                    </button>
                    <button type="submit" name="btn-update" class="btn btn-primary btn-sm">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach ?>
<!-- END Modal -->

<!-- Modal -->
<div class="modal fade" id="tambah-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fa fa-plus"></i> Tambah Data
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="?page=aksi-validasi" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label class="form-label mb-2" for="kategori"> Kategori </label>
                        <select class="form-control" name="kategori" id="kategori">
                            <option value="" selected>- Pilih -</option>
                            <option value="Baik">Baik</option>
                            <option value="Sedang">Sedang</option>
                            <option value="Rendah">Rendah</option>
                            <option value="Buruk">Buruk</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="region" class="form-label mb-2"> Region </label>
                        <input type="text" class="form-control" name="region" id="region">
                    </div>
                    <div class="form-group mb-3">
                        <label for="gambar" class="form-label mb-2"> Gambar </label>
                        <input type="file" class="form-control" name="gambar" id="gambar">
                    </div>
                    <div class="form-group mb-3">
                        <label for="latitude" class="form-label mb-2"> Latitude </label>
                        <input type="text" class="form-control" name="latitude" id="latitude">
                    </div>
                    <div class="form-group mb-3">
                        <label for="longitude" class="form-label mb-3"> Longitude </label>
                        <input type="text" class="form-control" name="longitude" id="longitude">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-times"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-primary btn-sm" name="btn-simpan">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End -->

<?php
if (isset($_POST['btn-simpan'])) {

    $id_maps = $_POST['id_maps'];
    $validasi = $_POST['validasi'];

    $query = $con->query("UPDATE t_maps SET validasi = '$validasi' WHERE id = '$id_maps' ");

    if ($query != 0) {
        echo "<script>alert('Data Lokasi Maps Berhasil di Validasi');</script>";
        echo "<script>window.location.replace('?page=validasi-data');</script>";
    } else {
        echo "<script>alert('Data Lokasi Maps Gagal di Validasi');</script>";
        echo "<script>window.location.replace('?page=validasi-data');</script>";
    }
} else if (isset($_POST['btn-hapus'])) {
    $id = $_POST['id'];

    $sql = mysqli_query($con, "SELECT * FROM t_maps WHERE id = '$id'");
    $data = $sql->fetch_array();
    $foto = $data["gambar"];

    if (!empty($foto)) {
        if (file_exists("../images/lokasi/$gambar")) {
            unlink("../images/lokasi/$gambar");
        }
    }

    $query = $con->query("DELETE FROM t_maps WHERE id = '$id' ");

    if ($query != 0) {
        echo "<script>alert('Data Maps Berhasil di Hapus');</script>";
        echo "<script>window.location.replace('?page=validasi-data');</script>";
        exit;
    } else {
        echo "<script>alert('Data Maps Gagal di Hapus');</script>";
        echo "<script>window.location.replace('?page=validasi-data');</script>";
        exit;
    }

}
?>