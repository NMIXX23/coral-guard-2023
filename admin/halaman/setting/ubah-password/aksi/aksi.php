<?php
	if (isset($_POST['btn-update'])) {
		$id_user = $_SESSION["id_user"];
		$password_baru = mysqli_real_escape_string($con, $_POST['password_baru']);
		$konfirmasi_password = mysqli_real_escape_string($con, $_POST["konfirmasi_password"]);

		$password_baru = password_hash($password_baru, PASSWORD_DEFAULT);
		$konfirmasi_password = password_hash($konfirmasi_password, PASSWORD_DEFAULT);

		$query = $con->query("UPDATE t_users SET password = '$password_baru' WHERE id = '$id_user' ");

		if ($query != 0) {
			echo "<script>alert('Password Anda Berhasil di Perbaharui');</script>";
			echo "<script>window.location.replace('?page=ubah-password');</script>";
		} else {
			echo "<script>alert('Password Anda Gagal di Perbaharui');</script>";
			echo "<script>window.location.replace('?page=ubah-password');</script>";
		}
	}
?>