<h1 class="h3 mb-2 text-gray-800">Jenis Bio</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="?page=tambah-jenis-bio" class="btn btn-primary btn-sm">
            <i class="fa fa-plus"></i> Tambah Data
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th>Tempat</th>
                        <th>Nama Jenis Bio</th>
                        <th class="text-center">BIOdiversity</th>
                        <th>Deskripsi</th>
                        <th class="text-center">Gambar</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomer = 1;
                    $query = $con->query("SELECT t_jenis_bio.id AS id_jenis_bio, t_biodiversity.nama_biodiversity AS nama_biodiversity, t_profil_tempat.nama_tempat AS nama_tempat, t_jenis_bio.* FROM t_jenis_bio JOIN t_biodiversity ON t_biodiversity.id = t_jenis_bio.id_biodiversity JOIN t_profil_tempat ON t_profil_tempat.id = t_jenis_bio.id_profil_tempat ORDER BY t_jenis_bio.id DESC");
                        ?>
                        <?php foreach ($query as $data) : ?>
                            <tr>
                                <td class="text-center"><?php echo $nomer++ ?>.</td>
                                <td><?php echo $data["nama_tempat"]; ?></td>
                                <td><?php echo $data["nama_jenis_bio"] ?></td>
                                <td class="text-center"><?php echo $data["nama_biodiversity"] ?></td>
                                <td><?php echo $data["deskripsi_jenis_bio"] ?></td>
                                <td class="text-center">
                                    <img style="width: 100px; height: 100px;" src="halaman/image/jenis-bio/<?php echo $data["foto_jenis_bio"] ?>">
                                </td>
                                <td class="text-center">
                                    <a href="?page=edit-jenis-bio&id_jenis_bio=<?php echo $data["id_jenis_bio"] ?>" class="btn btn-warning btn-sm">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    <form method="POST" action="?page=aksi-jenis-bio" style="display: inline;">
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