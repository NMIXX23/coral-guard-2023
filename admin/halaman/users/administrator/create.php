<h1 class="h3 mb-2 text-gray-800">Administrator</h1>

<div class="card shadow mb-4">
    <form method="POST" action="?page=aksi-simpan">
        <div class="card-header py-3">
            <a href="?page=administrator" class="btn btn-danger btn-sm">
                <i class="fa fa-sign-out-alt"></i> Kembali
            </a>
        </div>
        <div class="card-body">
            <div class="row form-group">
                <label for="username" class="col-sm-2 col-form-label text-right">Username</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username">
                </div>
            </div>
            <div class="row form-group">
                <label for="email" class="col-sm-2 col-form-label text-right"> Email </label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
                </div>
            </div>
            <div class="row form-group">
                <label for="password" class="col-sm-2 col-form-label text-right"> Password </label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                </div>
            </div>
            <div class="row form-group">
                <label for="nomor_hp" class="col-sm-2 col-form-label text-right"> Nomor HP </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" placeholder="Masukkan Nomor HP">
                </div>
            </div>
            <div class="row form-group">
                <label for="role" class="col-sm-2 col-form-label text-right"> Role </label>
                <div class="col-sm-8">
                    <select class="form-control" name="role" id="role">
                        <option value="">- Pilih -</option>
                        <option value="ADMIN">Admin</option>
                        <option value="TEMPAT">Tempat</option>
                        <option value="MEMBER">Member</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-times"></i> Batal
            </button>
            <button type="submit" class="btn btn-success btn-sm" name="btn-tambah">
                <i class="fa fa-save"></i> Simpan
            </button>
        </div>
    </form>
</div>