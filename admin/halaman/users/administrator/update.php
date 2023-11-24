<?php
    $id = $_GET["id"];

    $query = $con->query("SELECT * FROM t_users WHERE id = $id");

    $data = $query->fetch_assoc();
?>

<h1 class="h3 mb-2 text-gray-800">Edit Administrator</h1>

<div class="card shadow mb-4">
    <form method="POST" action="?page=aksi-simpan">
        <input type="hidden" name="id" value="<?php echo $data["id"] ?>">
        <div class="card-header py-3">
            <a href="?page=administrator" class="btn btn-danger btn-sm">
                <i class="fa fa-sign-out-alt"></i> Kembali
            </a>
        </div>
        <div class="card-body">
            <div class="row form-group">
                <label for="username" class="col-sm-2 col-form-label text-right">Username</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username" value="<?php echo $data["username"] ?>">
                </div>
            </div>
            <div class="row form-group">
                <label for="email" class="col-sm-2 col-form-label text-right"> Email </label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email" value="<?php echo $data["email"] ?>">
                </div>
            </div>
            <div class="row form-group">
                <label for="nomor_hp" class="col-sm-2 col-form-label text-right"> Nomor HP </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" placeholder="Masukkan Nomor HP" value="<?php echo $data["nomor_hp"] ?>">
                </div>
            </div>
            <div class="row form-group">
                <label for="role" class="col-sm-2 col-form-label text-right"> Role </label>
                <div class="col-sm-8">
                    <select class="form-control" name="role" id="role">
                        <option value="">- Pilih -</option>
                        <option value="ADMIN" <?php echo $data["role"] == "ADMIN" ? 'selected' : '' ?> >Admin</option>
                        <option value="TEMPAT" <?php echo $data["role"] == "TEMPAT" ? 'selected' : '' ?> >Tempat</option>
                        <option value="MEMBER" <?php echo $data["role"] == "MEMBER" ? 'selected' : '' ?> >Member</option>
                    </select>
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