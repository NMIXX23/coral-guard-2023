<?php
	if (isset($_POST["btn-tambah"])) {
		$id_kategori = $_POST['id_kategori'];
		$deskripsi = $_POST["deskripsi"];

		$namafile = $_FILES['gambar_adventure']['name'];
	    $ukuranfile = $_FILES['gambar_adventure']['size'];
	    $error = $_FILES['gambar_adventure']['error'];
	    $tmpname = $_FILES['gambar_adventure']['tmp_name'];

	    if ($error == 4) {
	    	echo "<script>alert('Pilih Gambar Dahulu');</script>";
            echo "<script>window.location.replace('?page=tambah-coral');</script>";
            exit;
	    }

	    $ekstensiGambarValid = ['jpg','jpeg','png'];
        $ekstensiGambar = explode('.', $namafile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>alert('Bukan Gambar');</script>";
            echo "<script>window.location.replace('?page=tambah-coral');</script>";
            exit;
        }

        if ($ukuranfile > 1000000) {
            echo "<script>alert('Ukuran Terlalu besar');</script>";
            echo "<script>window.location.replace('?page=tambah-coral');</script>";
            exit;
        }

        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $ekstensiGambar;

        $profilTempat = $_SESSION["id_profil"];
        $tanggalDibuat = date("Y-m-d H:i:s");

        move_uploaded_file($tmpname, 'halaman/image/coral/' . $namafilebaru);
        $id_tempat = $_SESSION['id_tempat'];

        $query = $con->query("INSERT INTO t_adventure_tempat (id_profil_tempat, id_kategori, deskripsi, tanggal_dibuat, gambar_adventure) VALUES('$profilTempat', '$id_kategori', '$deskripsi' ,'$tanggalDibuat','$namafilebaru')");

        if ($query != 0) {
        	echo "<script>alert('Data Anda Berhasil di Tambahkan');</script>";
        	echo "<script>window.location.replace('?page=data-coral');</script>";
        } else {
        	echo "<script>alert('Data Anda Gagal di Tambahkan');</script>";
        	echo "<script>window.location.replace('?page=tambah-coral');</script>";
        }
	} else if (isset($_POST["btn-update"])) {
		$id = $_POST["id"];
        $id_kategori = $_POST['id_kategori'];
        $deskripsi = $_POST["deskripsi"];
        $gambarAdventure = $_POST["adventure_gambar"];

        $sql = $con->query("SELECT * FROM t_adventure_tempat WHERE id = '$id' ");
        $data = $sql->fetch_array();
        $adventureGambar = $data["gambar_adventure"];

        if ($_FILES['gambar_adventure']['error'] == 4) {
            $gambar = $adventureGambar;
        } else {
            if ($adventureGambar != NULL) {
                if (file_exists("halaman/image/coral/$adventureGambar")) {
                    unlink("halaman/image/coral/$adventureGambar");
                }
            }

            $namafile = $_FILES['gambar_adventure']['name'];
            $ukuranfile = $_FILES['gambar_adventure']['size'];
            $error = $_FILES['gambar_adventure']['error'];
            $tmpname = $_FILES['gambar_adventure']['tmp_name'];

            if ($error == 4) {
                echo "<script>alert('Pilih Gambar Dahulu');</script>";
                echo "<script>window.location.replace('?page=edit-coral&id_adventure_tempat=$id');</script>";
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
                echo "<script>window.location.replace('?page=edit-coral&id_adventure_tempat=$id');</script>";
                exit;
            }

            $namafilebaru = uniqid();
            $namafilebaru .= '.';
            $namafilebaru .= $ekstensiGambar;
        }

        if (!empty($tmpname)) {
            move_uploaded_file($tmpname, "halaman/image/coral/" . $namafilebaru);
            $query = $con->query("UPDATE t_adventure_tempat SET id_kategori = '$id_kategori', deskripsi = '$deskripsi', gambar_adventure = '$namafilebaru' WHERE id = '$id' ");
        } else {
            $query = $con->query("UPDATE t_adventure_tempat SET id_kategori = '$id_kategori', deskripsi = '$deskripsi' WHERE id = '$id' ");
        }

        if ($query != 0) {
            echo "<script>alert('Data Adventure Tempat Berhasil di Simpan');</script>";
            echo "<script>window.location.replace('?page=data-coral');</script>";
            exit;
        } else {
            echo "<script>alert('Data Adventure Tempat Gagal di Simpan');</script>";
            echo "<script>window.location.replace('?page=edit-coral&id_adventure_tempat=$id');</script>";
            exit;
        }
	} else if (isset($_POST["btn-hapus"])) {
		$id = $_POST['id'];

        $sql = mysqli_query($con, "SELECT * FROM t_adventure_tempat WHERE id = '$id'");
        $data = $sql->fetch_array();
        $gambar = $data["gambar_adventure"];

        if (file_exists("halaman/image/coral/$gambar")) {
            unlink("halaman/image/coral/$gambar");
        }

        $query = $con->query("DELETE FROM t_adventure_tempat WHERE id = '$id' ");

        if ($query != 0) {
            echo "<script>alert('Data Adventure Tempat Berhasil di Hapus');</script>";
            echo "<script>window.location.replace('?page=data-coral');</script>";
            exit;
        } else {
            echo "<script>alert('Data Adventure Tempat Gagal di Hapus');</script>";
            echo "<script>window.location.replace('?page=data-coral');</script>";
            exit;
        }
	}
?>