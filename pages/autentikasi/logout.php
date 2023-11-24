<?php
if (isset($_SESSION['id_member'])) {
	unset($_SESSION["login"]);
	unset($_SESSION["role"]);
	unset($_SESSION["member"]);
	unset($_SESSION["id_member"]);

	echo "<script>alert('Anda Berhasil Logout');</script>";
	echo "<script>window.location.href='./login.php';</script>";
}
