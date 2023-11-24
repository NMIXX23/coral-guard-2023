<h1 class="h3 mb-2 text-gray-800">Kategori</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="?page=tambah-kategori" class="btn btn-primary btn-sm">
            <i class="fa fa-plus"></i> Tambah Data
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th>Kategori</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomer = 1;
                    $query = $con->query("SELECT * FROM t_kategori ORDER BY id DESC");
                    ?>
                    <?php foreach ($query as $data) : ?>
                        <tr>
                            <td class="text-center"><?php echo $nomer++ ?>.</td>
                            <td><?php echo $data["kategori"]; ?></td>
                            <td class="text-center">
                                <?php if (file_exists($data["foto_kategori"])) : ?>
                                    <img style="width: 100px; height: 100px;" src="../images/default.jpeg">
                                <?php else : ?>
                                    <?php if (empty($data["foto_kategori"])) : ?>
                                        <strong>
                                            Belum Ada Gambar
                                        </strong>
                                    <?php else : ?>
                                        <img style="width: 100px; height: 100px;" src="halaman/image/kategori/<?php echo $data["foto_kategori"] ?>">
                                    <?php endif ?>
                                <?php endif ?>
                            </td>
                            <td class="text-center">
                                <a href="?page=edit-kategori&id_kategori=<?php echo $data["id"] ?>" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <form method="POST" action="?page=aksi-kategori" style="display: inline;">
                                    <input type="hidden" name="id" value="<?php echo $data["id"] ?>">
                                    <button onclick="return confirm('Yakin ? Apakah Ingin Menghapus Data Ini ?')" type="submit" class="btn btn-danger btn-sm" name="btn-hapus">
                                        <i class="fa fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>