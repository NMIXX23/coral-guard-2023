<?php
if (isset($_POST['btn-update'])) {
	$id_user  = $_SESSION["id_user"];
	$username = $_POST["username"];
	$nomor_hp = $_POST["nomor_hp"];

	$query = $con->query("UPDATE t_users SET username = '$username', nomor_hp = '$nomor_hp' WHERE id = '$id_user' ");

	if ($query != 0) {
		echo "<script>alert('Profil Anda Berhasil di Perbaharui');</script>";
		echo "<script>window.location.replace('?page=profil-saya');</script>";
	} else {
		echo "<script>alert('Profil Anda Gagal di Perbaharui');</script>";
		echo "<script>window.location.replace('?page=profil-saya');</script>";
	}
}
?>