<?php

	if (isset($_POST['btn-logout'])) {
		if (isset($_SESSION['login'])) {
			unset($_SESSION["login"]);

			echo "<script>alert('Anda Berhasil Logout');</script>";
        	echo "<script>window.location.href='../autentikasi/login/';</script>";
		}
	}

?>