<?php
if (isset($_POST["btn-publish"])) {
	$id_member 		= $_SESSION['id_member'];
	$keywords 		= $_POST["keywords"];
	$category 		= $_POST["category"];
	$description 	= $_POST["description"];

	if ($_FILES['image']['name'] != '') {
		$namafile = $_FILES['image']['name'];
		$ukuranfile = $_FILES['image']['size'];
		$error = $_FILES['image']['error'];
		$tmpname = $_FILES['image']['tmp_name'];

		if ($error == 4) {
			echo "<script>alert('Pilih Gambar Dahulu');</script>";
			echo "<script>window.location.replace('?page=post-now');</script>";
			exit;
		}

		$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
		$ekstensiGambar = explode('.', $namafile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));

		if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
			echo "<script>alert('Bukan Gambar');</script>";
			echo "<script>window.location.replace('?page=post-now');</script>";
			exit;
		}
		if ($ukuranfile > 1000000) {
			echo "<script>alert('Ukuran Terlalu besar');</script>";
			echo "<script>window.location.replace('?page=post-now');</script>";
			exit;
		}

		$namafilebaru = uniqid();
		$namafilebaru .= '.';
		$namafilebaru .= $ekstensiGambar;

		move_uploaded_file($tmpname, 'pages/post/image/' . $namafilebaru);
		$namafilebaru = "'$namafilebaru'";
	} else {
		$namafilebaru = 'NULL';
	}

	var_dump($namafilebaru);

	$query = $con->query("INSERT INTO t_post (id_member, keywords, category, image, description) VALUES ('$id_member', '$keywords', '$category', $namafilebaru, '$description') ");

	if ($query != 0) {
		echo "<script>alert('Postingan Berhasil di Tambahkan');</script>";
		echo "<script>window.location.replace('?page=komunitas');</script>";
	} else {
		echo "<script>alert('Postingan Gagal di Tambahkan');</script>";
		echo "<script>window.location.replace('?page=post-now');</script>";
	}
}
