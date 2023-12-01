<?php
if (isset($_POST['btn-simpan'])) {

	$kategori = $_POST['kategori'];
	$region = $_POST['region'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];

	$namafile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpname = $_FILES['gambar']['tmp_name'];

	if ($error == 4) {
		echo "<script>alert('Pilih Gambar Dahulu');</script>";
		echo "<script>window.location.replace('?page=validasi-data');</script>";
		exit;
	}

	if ($error == 4) {
		echo "<script>alert('Pilih Gambar Dahulu');</script>";
		echo "<script>window.location.replace('?page=validasi-data');</script>";
		exit;
	}

	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namafile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>alert('Bukan Gambar');</script>";
		echo "<script>window.location.replace('?page=validasi-data');</script>";
		exit;
	}
	if ($ukuranfile > 1000000) {
		echo "<script>alert('Ukuran Terlalu besar');</script>";
		echo "<script>window.location.replace('?page=validasi-data');</script>";
		exit;
	}

	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $ekstensiGambar;

	$id_session = $_SESSION['id_user'];

	move_uploaded_file($tmpname, '../images/lokasi/' . $namafilebaru);

	$query = $con->query("INSERT INTO t_maps (kategori, region, latitude, longitude, gambar, user_create, validasi) VALUES ('$kategori', '$region', '$latitude', '$longitude', '$namafilebaru', '$id_session', 1) ");

	if ($query != 0) {
		echo "<script>alert('Data Lokasi Berhasil di Tambahkan');</script>";
		echo "<script>window.location.replace('?page=validasi-data');</script>";
	} else {
		echo "<script>alert('Data Lokasi Gagal di Tambahkan');</script>";
	}
} else if (isset($_POST['btn-update'])) {
	$id = $_POST['id'];
	$kategori = $_POST['kategori'];
	$region = $_POST['region'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];
	$gambar_old = $_POST['gambar_old'];

	$sql = $con->query("SELECT * FROM t_maps WHERE id = '$id' ");
	$data = $sql->fetch_array();
	$produkGambar = $data["gambar"];

	if ($_FILES['gambar']['error'] == 4) {
		$gambar = $produkGambar;
	} else {
		if ($produkGambar != NULL) {
			if (file_exists("../image/lokasi/$produkGambar")) {
                unlink("../image/lokasi/$produkGambar");
            }
		}

		$namafile = $_FILES['gambar']['name'];
        $ukuranfile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpname = $_FILES['gambar']['tmp_name'];

        if ($error == 4) {
			echo "<script>alert('Pilih Gambar Dahulu');</script>";
			echo "<script>window.location.replace('?page=validasi-data');</script>";
			exit;
		}

		$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
		$ekstensiGambar = explode('.', $namafile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));

		if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
			echo "<script>alert('Bukan Gambar');</script>";
			echo "<script>window.location.replace('?page=validasi-data');</script>";
			exit;
		}
		if ($ukuranfile > 1000000) {
			echo "<script>alert('Ukuran Terlalu besar');</script>";
			echo "<script>window.location.replace('?page=validasi-data');</script>";
			exit;
		}

		$namafilebaru = uniqid();
		$namafilebaru .= '.';
		$namafilebaru .= $ekstensiGambar;
	}

	if (!empty($tmpname)) {
		move_uploaded_file($tmpname, "../images/lokasi/" . $namafilebaru);

		$query = $con->query("UPDATE t_maps SET kategori = '$kategori', region = '$region', latitude = '$latitude', longitude = '$longitude', gambar = '$namafilebaru' WHERE id = '$id' ");
	} else {
		$query = $con->query("UPDATE t_maps SET kategori = '$kategori', region = '$region', latitude = '$latitude', longitude = '$longitude' WHERE id = '$id' ");
	}

	if ($query != 0) {
		echo "<script>alert('Data Lokasi Berhasil di Simpan');</script>";
		echo "<script>window.location.replace('?page=validasi-data');</script>";
	} else {
		echo "<script>alert('Data Lokasi Gagal di Simpan');</script>";
	}
}
?>