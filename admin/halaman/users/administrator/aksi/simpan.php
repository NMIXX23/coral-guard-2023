<?php
include "../config/koneksi.php";
if (isset($_POST['btn-tambah'])) {
	$username = strtolower(stripslashes($_POST['username']));
	$email = $_POST['email'];
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$role = $_POST['role'];
	$nomor_hp = $_POST['nomor_hp'];

	$password = password_hash($password, PASSWORD_DEFAULT);

	$query = $con->query("INSERT INTO t_users (username, email, password, role, nomor_hp, active)  VALUES('$username', '$email', '$password', '$role', '$nomor_hp', 1)");

	if ($query != 0) {
		echo "<script>alert('Data Administrator Berhasil di Tambahkan');</script>";
		echo "<script>window.location.replace('?page=administrator');</script>";
	} else {
		echo "<script>alert('Data Administrator Gagal di Tambahkan');</script>";
	}
} else if (isset($_POST["btn-simpan"])) {
	$id = $_POST['id'];
	$username = strtolower(stripslashes($_POST['username']));
	$email = $_POST['email'];
	$role = $_POST['role'];
	$nomor_hp = $_POST['nomor_hp'];

    $query = $con->query("UPDATE t_users SET username = '$username', email = '$email', role = '$role', nomor_hp = '$nomor_hp' WHERE id = $id ");

    if ($query != 0) {
    	echo "<script>alert('Data Administrator Berhasil di Simpan');</script>";
    	echo "<script>window.location.replace('?page=administrator');</script>";
    } else {
    	echo "<script>alert('Data Administrator Gagal di Simpan');</script>";
    }
} else if (isset($_POST['btn-hapus'])) {
	$id = $_POST['id'];

	$query = $con->query("DELETE FROM t_users WHERE id = $id ");

	if ($query != 0) {
		echo "<script>alert('Data Administrator Berhasil di Hapus');</script>";
		echo "<script>window.location.replace('?page=administrator');</script>";
	} else {
		echo "<script>alert('Data Administrator Gagal di Hapus');</script>";
	}
}

?>