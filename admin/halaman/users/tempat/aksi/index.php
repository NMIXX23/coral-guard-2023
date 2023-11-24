<?php
	include "../config/koneksi.php";
	if (isset($_POST['btn-tambah'])) {
		$username = strtolower(stripslashes($_POST['username']));
		$email = $_POST['email'];
		$password = mysqli_real_escape_string($con, "Tempat" . $_POST["email"]);
		$role = "TEMPAT";
		$nomor_hp = $_POST['nomor_hp'];
		$alamat = $_POST['alamat_tempat'];

		$password = password_hash($password, PASSWORD_DEFAULT);

		$query = $con->query("INSERT INTO t_users (username, email, password, role, nomor_hp, active)  VALUES('$username', '$email', '$password', '$role', '$nomor_hp', 1)");

		$lastInsertId = $con->insert_id;

		$query = $con->query("INSERT INTO t_tempat (user_id, alamat_tempat) VALUES('$lastInsertId', '$alamat')");


		if ($query != 0) {
			echo "<script>alert('Data Tempat Berhasil di Tambahkan');</script>";
			echo "<script>window.location.replace('?page=tempat');</script>";
		} else {
			echo "<script>alert('Data Tempat Gagal di Tambahkan');</script>";
		}
	} else if (isset($_POST["btn-simpan"])) {
		$id = $_POST['id'];
		$user_id = $_POST["id_users"];
		$username = strtolower(stripslashes($_POST['username']));
		$email = $_POST['email'];
		$nomor_hp = $_POST['nomor_hp'];
		$alamat = $_POST["alamat_tempat"];

		$query = $con->query("UPDATE t_users SET username = '$username', email = '$email', nomor_hp = '$nomor_hp' WHERE id = $user_id ");

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