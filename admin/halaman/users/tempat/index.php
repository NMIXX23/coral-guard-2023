<h1 class="h3 mb-2 text-gray-800">Tempat</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="?page=tambah-tempat" class="btn btn-primary btn-sm">
            <i class="fa fa-plus"></i> Tambah Data
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th class="text-center">Nomor HP</th>
                        <th>Alamat</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomer = 1;
                    $query = $con->query("SELECT t_tempat.id AS tempat_id, t_tempat.alamat_tempat AS alamat, t_users.* FROM t_tempat JOIN t_users ON t_tempat.user_id = t_users.id ORDER BY t_tempat.id DESC");
                    ?>
                    <?php foreach ($query as $data) : ?>
                        <tr>
                            <td class="text-center"><?php echo $nomer++ ?>.</td>
                            <td><?php echo $data["username"]; ?></td>
                            <td><?php echo $data["email"] ?></td>
                            <td class="text-center"><?php echo $data["nomor_hp"] ?></td>
                            <td><?php echo $data["alamat"] ?></td>
                            <td class="text-center">
                                <a href="?page=edit-tempat&id_tempat=<?php echo $data["tempat_id"] ?>" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <form method="POST" action="?page=aksi-simpan" style="display: inline;">
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