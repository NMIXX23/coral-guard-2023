<?php

$city = [
    'Jakarta',
    'Bandung',
    'Surabaya',
    'Semarang'
];

$province = [
    'DKI Jakarta',
    'Jawa Barat',
    'Jawa Tengah',
    'Jawa Timur'
];

$actor = [
    'Ahli',
    'Warga',
    'Nelayan'
];

$id_member = $_SESSION["id_member"];

$query = $con->query("SELECT * FROM t_users WHERE id = '$id_member' ");

$data = $query->fetch_assoc();

?>
<section id="profile">
    <?php include 'pages/partials/sidebar.php'; ?>
    <div class="content">
        <div class="profile-head mb-4">
            <h1>Security Page</h1>
            <!-- <img src="./assets/img/user.png" alt="" width="80" height="80" /> -->
        </div>

        <div class="profile-form">
            <form method="POST">
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control custom-input" placeholder="Password" id="password">
                </div>
                <div class="form-group mb-3">
                    <label for="konfirmasi_password"> Konfirmasi Password </label>
                    <input type="password" class="form-control custom-input" name="konfirmasi_password" id="konfirmasi_password" placeholder="Masukkan Konfirmasi Password">
                </div>
                <hr>

                <div class="form-group">
                    <button type="reset" class="button-cancel">Cancel</button>
                    <button type="submit" class="button-save" name="save">Save</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
if (isset($_POST['save'])) {
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $konfirmasi_password = mysqli_real_escape_string($con, $_POST['konfirmasi_password']);

    // Check apakah password dan konfirm password sama
    if ($password != $konfirmasi_password) {
        echo "<script>alert('Password dan Konfirmasi Password Tidak Sama!');</script>";
        echo "<script>window.location.replace('?page=password-reset');</script>";
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = $con->query("UPDATE t_users SET password = '$password' WHERE id = '$id_member' ");
        if ($query != 0) {
            echo "<script>alert('Konfirmasi Password Berhasil di Perbaharui');</script>";
            echo "<script>window.location.replace('?page=password-reset');</script>";
        } else {
            echo "<script>alert('Konfirmasi Password Gagal di Perbaharui');</script>";
            echo "<script>window.location.replace('?page=password-reset');</script>";
        }
    }
}
?>