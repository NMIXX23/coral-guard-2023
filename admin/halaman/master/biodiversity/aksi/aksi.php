<?php
include "../config/koneksi.php";
if (isset($_POST['btn-tambah'])) {

	$nama_biodiversity = $_POST['nama_biodiversity'];

	$namafile = $_FILES['foto_biodiversity']['name'];
	$ukuranfile = $_FILES['foto_biodiversity']['size'];
	$error = $_FILES['foto_biodiversity']['error'];
	$tmpname = $_FILES['foto_biodiversity']['tmp_name'];

	if ($error == 4) {
		echo "<script>alert('Pilih Gambar Dahulu');</script>";
		echo "<script>window.location.replace('?page=tambah-biodiversity');</script>";
		exit;
	}

	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namafile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>alert('Bukan Gambar');</script>";
		echo "<script>window.location.replace('?page=tambah-biodiversity');</script>";
		exit;
	}
	if ($ukuranfile > 1000000) {
		echo "<script>alert('Ukuran Terlalu besar');</script>";
		echo "<script>window.location.replace('?page=tambah-biodiversity');</script>";
		exit;
	}

	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $ekstensiGambar;

	move_uploaded_file($tmpname, 'halaman/image/biodiversity/' . $namafilebaru);

	$query = $con->query("INSERT INTO t_biodiversity (nama_biodiversity, foto_biodiversity)  VALUES('$nama_biodiversity', '$namafilebaru')");

	if ($query != 0) {
		echo "<script>alert('Data Katalog Berhasil di Tambahkan');</script>";
		echo "<script>window.location.replace('?page=data-biodiversity');</script>";
	} else {
		echo "<script>alert('Data Katalog Gagal di Tambahkan');</script>";
	}
} else if (isset($_POST["btn-simpan"])) {

	$id = $_POST['id'];

	$nama_biodiversity = $_POST["nama_biodiversity"];

	$sql = $con->query("SELECT * FROM t_biodiversity WHERE id = '$id' ");
	$data = $sql->fetch_array();
	$fotoBiodiversity = $data['foto_biodiversity'];

	$fotoLama = $_POST["foto_lama"];

	if ($_FILES["foto_biodiversity"]["error"] == 4) {
		$foto = $fotoLama;
	} else {
		if ($fotoBiodiversity != NULL) {
			if (file_exists("halaman/image/biodiversity/$fotoLama")) {
				unlink("halaman/image/biodiversity/$fotoLama");
			}
		}

		$namafile = $_FILES['foto_biodiversity']['name'];
		$ukuranfile = $_FILES['foto_biodiversity']['size'];
		$error = $_FILES['foto_biodiversity']['error'];
		$tmpname = $_FILES['foto_biodiversity']['tmp_name'];

        if ($error == 4) { // 4 adalah jumlah dari error
        	echo "<script>alert('Pilih Gambar Dahulu');</script>";
        	echo "<script>window.location.replace('?page=edit-biodiversity&id_biodiversity=$id');</script>";
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
        	echo "<script>window.location.replace('?page=edit-biodiversity&id_biodiversity=$id');</script>";
        	exit;
        }

        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $ekstensiGambar;
    }

    if (!empty($tmpname)) {
    	move_uploaded_file($tmpname, "halaman/image/biodiversity/" . $namafilebaru);
    	$query = $con->query("UPDATE t_biodiversity SET nama_biodiversity = '$nama_biodiversity', foto_biodiversity = '$namafilebaru' WHERE id = $id ");
    } else {
    	$query = $con->query("UPDATE t_biodiversity SET nama_biodiversity = '$nama_biodiversity' WHERE id = $id ");
    }

	if ($query != 0) {
		echo "<script>alert('Data Katalog Berhasil di Simpan');</script>";
		echo "<script>window.location.replace('?page=data-biodiversity');</script>";
	} else {
		echo "<script>alert('Data Katalog Gagal di Simpan');</script>";
	}
} else if (isset($_POST['btn-hapus'])) {
	$id = $_POST['id'];

	$sql = mysqli_query($con, "SELECT * FROM t_biodiversity WHERE id = '$id'");
    $data = $sql->fetch_array();
    $foto = $data['foto_biodiversity'];

    if (file_exists("halaman/image/biodiversity/$foto")) {
        unlink("halaman/image/biodiversity/$foto");
    }

	$query = $con->query("DELETE FROM t_biodiversity WHERE id = $id ");

	if ($query != 0) {
		echo "<script>alert('Data Katalog Berhasil di Hapus');</script>";
		echo "<script>window.location.replace('?page=data-biodiversity');</script>";
	} else {
		echo "<script>alert('Data Katalog Gagal di Hapus');</script>";
	}
}

?>