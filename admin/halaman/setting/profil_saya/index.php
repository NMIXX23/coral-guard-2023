<?php
$id_user = $_SESSION["id_user"];

$query = $con->query("SELECT * FROM t_users WHERE id = '$id_user' ");

$data = $query->fetch_assoc();
?>

<h1 class="h3 mb-2 text-gray-800">Profil Saya</h1>

<form method="POST" action="?page=aksi-profil-saya">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fa fa-edit"></i> Edit Profil Saya
            </h6>
        </div>
        <div class="card-body">
            <div class="row form-group">
                <label for="username" class="col-form-label col-md-3 text-right"> Username </label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" value="<?php echo $data["username"] ?>">
                </div>
            </div>
            <div class="row form-group">
                <label for="email" class="col-form-label col-md-3 text-right"> Email </label>
                <div class="col-md-8">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="<?php echo $data["email"] ?>" readonly>
                </div>
            </div>
            <div class="row form-group">
                <label for="nomor_hp" class="col-form-label col-md-3 text-right"> Nomor HP </label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" placeholder="Masukkan Nomor HP" value="<?php echo $data["nomor_hp"] ?>">
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
