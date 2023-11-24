<h1 class="h3 mb-2 text-gray-800">Coral</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="?page=tambah-coral" class="btn btn-primary btn-sm">
            <i class="fa fa-plus"></i> Tambah Data
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th>Owner</th>
                        <th>Nama Tempat</th>
                        <th class="text-center">Kategori</th>
                        <th>Deskripsi</th>
                        <th class="text-center">Gambar</th>
                        <th class="text-center">Tanggal Publish</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomer = 1;
                    $query = $con->query("
                        SELECT 
                            t_adventure_tempat.id AS id_adventure_tempat, t_profil_tempat.nama_tempat AS nama, t_users.username AS nama_users, t_kategori.kategori AS kategori, t_adventure_tempat.* 
                        FROM 
                            t_adventure_tempat 
                        JOIN
                            t_kategori ON t_adventure_tempat.id_kategori = t_kategori.id
                        JOIN 
                            t_profil_tempat ON t_adventure_tempat.id_profil_tempat = t_profil_tempat.id
                        JOIN
                            t_tempat ON t_profil_tempat.id_tempat = t_tempat.id
                        JOIN
                            t_users ON t_tempat.user_id = t_users.id
                        ");
                        ?>
                        <?php foreach ($query as $data) : ?>
                            <tr>
                                <td class="text-center"><?php echo $nomer++ ?>.</td>
                                <td><?php echo $data["nama_users"]; ?></td>
                                <td><?php echo $data["nama"] ?></td>
                                <td class="text-center"><?php echo $data["kategori"] ?></td>
                                <td><?php echo $data["deskripsi"] ?></td>
                                <td class="text-center">
                                    <img style="width: 100px; height: 100px;" src="halaman/image/coral/<?php echo $data["gambar_adventure"] ?>">
                                </td>
                                <td class="text-center"><?php echo $data["tanggal_dibuat"] ?></td>
                                <td class="text-center">
                                    <a href="?page=edit-coral&id_adventure_tempat=<?php echo $data["id_adventure_tempat"] ?>" class="btn btn-warning btn-sm">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    <form method="POST" action="?page=aksi-coral" style="display: inline;">
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