<?php
	if (isset($_POST["tambah-koleksi"])) {

		date_default_timezone_set("Asia/Jakarta");

		$id_tempat 		= $_POST["id_tempat"];
		$id_member 		= $_SESSION["id_member"];
		$tanggal_dibuat = date("Y-m-d H:i:s");

		$query = $con->query("INSERT INTO t_koleksi (id_tempat, id_member, tanggal_koleksi) VALUES ('$id_tempat', '$id_member', '$tanggal_dibuat') ");

		if ($query != 0) {
			echo "<script>alert('Data Tempat Berhasil Menjadi Koleksi');</script>";
			echo "<script>window.location.replace('?page=koleksi-saya');</script>";
		} else {
			echo "<script>alert('Data Tempat Gagal Menjadi Koleksi');</script>";
			echo "<script>window.location.replace('?page=rekomendasi');</script>";
		}
	} else if (isset($_POST["hapus-koleksi-saya"])) {
		$id_koleksi = $_POST['id_koleksi'];

		$query = $con->query("DELETE FROM t_koleksi WHERE id = '$id_koleksi'");

		if ($query != 0) {
			echo "<script>alert('Data Tempat Berhasil Dihapus');</script>";
			echo "<script>window.location.replace('?page=koleksi-saya');</script>";
		} else {
			echo "<script>alert('Data Tempat Gagal Dihapus');</script>";
			echo "<script>window.location.replace('?page=koleksi-saya');</script>";
		}
	} else if (isset($_POST["hapus-semua"])) {
		$id_member = $_SESSION["id_member"];

		$query = $con->query("DELETE FROM t_koleksi WHERE id_member = '$id_member'");

		if ($query != 0) {
			echo "<script>alert('Data Tempat Berhasil Dihapus');</script>";
			echo "<script>window.location.replace('?page=rekomendasi');</script>";
		} else {
			echo "<script>alert('Data Tempat Gagal Dihapus');</script>";
			echo "<script>window.location.replace('?page=rekomendasi');</script>";
		}
	}
?>