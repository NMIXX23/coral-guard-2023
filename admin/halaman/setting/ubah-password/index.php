<?php
$id_user = $_SESSION["id_user"];

$query = $con->query("SELECT * FROM t_users WHERE id = '$id_user' ");

$data = $query->fetch_assoc();
?>

<h1 class="h3 mb-2 text-gray-800">Ubah Password</h1>

<form method="POST" action="?page=aksi-ubah-password">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fa fa-edit"></i> Ubah Password
            </h6>
        </div>
        <div class="card-body">
            <div class="row form-group">
                <label for="password_baru" class="col-form-label col-md-3 text-right"> Password Baru </label>
                <div class="col-md-8">
                    <input type="password" class="form-control" id="password_baru" name="password_baru" placeholder="Masukkan Password Baru">
                </div>
            </div>
            <div class="row form-group">
                <label for="konfirmasi_password" class="col-form-label col-md-3 text-right"> Konfirmasi Password </label>
                <div class="col-md-8">
                    <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" placeholder="Masukkan Konfirmasi Password">
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
    </div>
</form>
