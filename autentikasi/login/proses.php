<?php

include "../../config/koneksi.php";

if (isset($_POST['btn-login'])) {

	session_start();

	$email = $_POST['email'];
	$password = $_POST['password'];

	if ($email == "" && $password == "") {
		echo "<script>alert('Data Tidak Boleh Kosong');</script>";
		echo "<script>location='./';</script>";
	}

	$result = $con->query("SELECT * FROM t_users WHERE email = '$email' ");

	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);

		if (password_verify($password, $row["password"])) {
			$_SESSION['login'] = true;
			$_SESSION["username"] = $row["username"];

			echo "<script>alert('Selamat, Anda Berhasil Login');</script>";

			if ($row["role"] == "ADMIN") {

				$_SESSION["role"] = "ADMIN";
				$_SESSION["id_user"] = $row["id"];

				echo "<script>location='../../admin/?page=dashboard';</script>";
			}
		} else {
			echo "<script>alert('Maaf, Password Anda Salah');</script>";
			echo "<script>location='./'</script>";
		}
	} else {
		echo "<script>alert('Maaf, Akun Email Anda Tidak Ditemukan');</script>";
		echo "<script>location='./'</script>";
	}
} else {
	echo "<script>alert('Silahkan Login Terlebih Dahulu');</script>";
	echo "<script>location='./';</script>";
}
