<?php
include "../config/koneksi.php";
if (isset($_POST['btn-tambah'])) {

	$nama_tempat = $_POST["nama_tempat"];
	$id_kategori = $_POST["id_kategori"];
	$nomor_hp = $_POST['nomor_hp'];
	$alamat_tempat = $_POST["alamat_tempat"];

	$namafile = $_FILES['foto']['name'];
	$ukuranfile = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmpname = $_FILES['foto']['tmp_name'];

	if ($error == 4) {
		echo "<script>alert('Pilih Gambar Dahulu');</script>";
		echo "<script>window.location.replace('?page=tambah-tempat-adventure');</script>";
		exit;
	}

	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namafile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>alert('Bukan Gambar');</script>";
		echo "<script>window.location.replace('?page=tambah-tempat-adventure');</script>";
		exit;
	}
	if ($ukuranfile > 1000000) {
		echo "<script>alert('Ukuran Terlalu besar');</script>";
		echo "<script>window.location.replace('?page=tambah-tempat-adventure');</script>";
		exit;
	}

	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $ekstensiGambar;

	move_uploaded_file($tmpname, 'halaman/image/tempat-adventure/' . $namafilebaru);

	$query = $con->query("INSERT INTO t_tempat_adventure (nama_tempat, id_kategori, foto, alamat_tempat, nomor_hp ) VALUES('$nama_tempat', '$id_kategori' , '$namafilebaru', '$alamat_tempat', '$nomor_hp')");

	if ($query != 0) {
		echo "<script>alert('Data Tempat Adventure Berhasil di Tambahkan');</script>";
		echo "<script>window.location.replace('?page=data-tempat-adventure');</script>";
	} else {
		echo "<script>alert('Data Tempat Adventure Gagal di Tambahkan');</script>";
	}
} else if (isset($_POST["btn-update"])) {

	$id = $_POST['id'];
	$nama_tempat = $_POST["nama_tempat"];
	$id_kategori = $_POST["id_kategori"];
	$alamat_tempat = $_POST["alamat_tempat"];
	$nomor_hp = $_POST["nomor_hp"];

	$sql = $con->query("SELECT * FROM t_tempat_adventure WHERE id = '$id' ");
	$data = $sql->fetch_array();
	$fotoKategori = $data['foto'];

	$fotoLama = $_POST["gambarLama"];

	if ($_FILES["foto"]["error"] == 4) {
		$foto = $fotoLama;
	} else {
		if ($fotoKategori != NULL) {
			if (file_exists("halaman/image/tempat-adventure/$fotoLama")) {
				unlink("halaman/image/tempat-adventure/$fotoLama");
			}
		}

		$namafile = $_FILES['foto']['name'];
		$ukuranfile = $_FILES['foto']['size'];
		$error = $_FILES['foto']['error'];
		$tmpname = $_FILES['foto']['tmp_name'];

        if ($error == 4) { // 4 adalah jumlah dari error
        	echo "<script>alert('Pilih Gambar Dahulu');</script>";
        	echo "<script>window.location.replace('?page=edit-tempat-adventure&id-tempat-adventure=$id');</script>";
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
        	echo "<script>window.location.replace('?page=edit-tempat-adventure&id-tempat-adventure=$id');</script>";
        	exit;
        }

        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $ekstensiGambar;
    }

    if (!empty($tmpname)) {
    	move_uploaded_file($tmpname, "halaman/image/tempat-adventure/" . $namafilebaru);
    	$query = $con->query("UPDATE t_tempat_adventure SET nama_tempat = '$nama_tempat', id_kategori = '$id_kategori', foto = '$namafilebaru', alamat_tempat = '$alamat_tempat', nomor_hp = '$nomor_hp' WHERE id = $id ");
    } else {
    	$query = $con->query("UPDATE t_tempat_adventure SET nama_tempat = '$nama_tempat', id_kategori = '$id_kategori', alamat_tempat = '$alamat_tempat', nomor_hp = '$nomor_hp' WHERE id = $id ");
    }

	if ($query != 0) {
		echo "<script>alert('Data Tempat Adventure Berhasil di Simpan');</script>";
		echo "<script>window.location.replace('?page=data-tempat-adventure');</script>";
	} else {
		echo "<script>alert('Data Tempat Adventure Gagal di Simpan');</script>";
	}
} else if (isset($_POST['btn-hapus'])) {
	$id = $_POST['id'];

	$sql = mysqli_query($con, "SELECT * FROM t_tempat_adventure WHERE id = '$id'");
    $data = $sql->fetch_array();
    $foto = $data['foto'];

    if (file_exists("halaman/image/tempat-adventure/$foto")) {
        unlink("halaman/image/tempat-adventure/$foto");
    }

	$query = $con->query("DELETE FROM t_tempat_adventure WHERE id = $id ");

	if ($query != 0) {
		echo "<script>alert('Data Tempat Adventure Berhasil di Hapus');</script>";
		echo "<script>window.location.replace('?page=data-tempat-adventure');</script>";
	} else {
		echo "<script>alert('Data Tempat Adventure Gagal di Hapus');</script>";
	}
}

?>