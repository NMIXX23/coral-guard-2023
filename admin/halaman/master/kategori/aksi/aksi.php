<?php
include "../config/koneksi.php";
if (isset($_POST['btn-tambah'])) {

	$kategori = $_POST['kategori'];

	$namafile = $_FILES['foto_kategori']['name'];
	$ukuranfile = $_FILES['foto_kategori']['size'];
	$error = $_FILES['foto_kategori']['error'];
	$tmpname = $_FILES['foto_kategori']['tmp_name'];

	if ($error == 4) {
		echo "<script>alert('Pilih Gambar Dahulu');</script>";
		echo "<script>window.location.replace('?page=tambah-kategori');</script>";
		exit;
	}

	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namafile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>alert('Bukan Gambar');</script>";
		echo "<script>window.location.replace('?page=tambah-kategori');</script>";
		exit;
	}
	if ($ukuranfile > 1000000) {
		echo "<script>alert('Ukuran Terlalu besar');</script>";
		echo "<script>window.location.replace('?page=tambah-kategori');</script>";
		exit;
	}

	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $ekstensiGambar;

	move_uploaded_file($tmpname, 'halaman/image/kategori/' . $namafilebaru);

	$query = $con->query("INSERT INTO t_kategori (kategori, foto_kategori)  VALUES('$kategori', '$namafilebaru')");

	if ($query != 0) {
		echo "<script>alert('Data Kategori Berhasil di Tambahkan');</script>";
		echo "<script>window.location.replace('?page=data-kategori');</script>";
	} else {
		echo "<script>alert('Data Kategori Gagal di Tambahkan');</script>";
	}
} else if (isset($_POST["btn-simpan"])) {

	$id = $_POST['id'];

	$kategori = $_POST["kategori"];

	$sql = $con->query("SELECT * FROM t_kategori WHERE id = '$id' ");
	$data = $sql->fetch_array();
	$fotoKategori = $data['foto_kategori'];

	$fotoLama = $_POST["foto_lama"];

	if ($_FILES["foto_kategori"]["error"] == 4) {
		$foto = $fotoLama;
	} else {
		if ($fotoKategori != NULL) {
			if (file_exists("halaman/image/kategori/$fotoLama")) {
				unlink("halaman/image/kategori/$fotoLama");
			}
		}

		$namafile = $_FILES['foto_kategori']['name'];
		$ukuranfile = $_FILES['foto_kategori']['size'];
		$error = $_FILES['foto_kategori']['error'];
		$tmpname = $_FILES['foto_kategori']['tmp_name'];

        if ($error == 4) { // 4 adalah jumlah dari error
        	echo "<script>alert('Pilih Gambar Dahulu');</script>";
        	echo "<script>window.location.replace('?page=edit-kategori&id_kategori=$id');</script>";
        	exit;
        }

        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namafile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        	echo "<script>alert('Bukan Gambar');</script>";
        }
        if ($ukuranfile > 1000000) {
        	echo "<script>alert('Ukuran Terlalu besar');</script>";
        	echo "<script>window.location.replace('?page=edit-kategori&id_kategori=$id');</script>";
        	exit;
        }

        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $ekstensiGambar;
    }

    if (!empty($tmpname)) {
    	move_uploaded_file($tmpname, "halaman/image/kategori/" . $namafilebaru);
    	$query = $con->query("UPDATE t_kategori SET kategori = '$kategori', foto_kategori = '$namafilebaru' WHERE id = $id ");
    } else {
    	$query = $con->query("UPDATE t_kategori SET kategori = '$kategori' WHERE id = $id ");
    }

	if ($query != 0) {
		echo "<script>alert('Data Kategori Berhasil di Simpan');</script>";
		echo "<script>window.location.replace('?page=data-kategori');</script>";
	} else {
		echo "<script>alert('Data Kategori Gagal di Simpan');</script>";
	}
} else if (isset($_POST['btn-hapus'])) {
	$id = $_POST['id'];

	$sql = mysqli_query($con, "SELECT * FROM t_kategori WHERE id = '$id'");
    $data = $sql->fetch_array();
    $foto = $data['foto_kategori'];

    if (file_exists("halaman/image/kategori/$foto")) {
        unlink("halaman/image/kategori/$foto");
    }

	$query = $con->query("DELETE FROM t_kategori WHERE id = $id ");

	if ($query != 0) {
		echo "<script>alert('Data Kategori Berhasil di Hapus');</script>";
		echo "<script>window.location.replace('?page=data-kategori');</script>";
	} else {
		echo "<script>alert('Data Kategori Gagal di Hapus');</script>";
	}
}

?>