<?php
	if (isset($_POST["btn-tambah"])) {

        $id_profil_tempat = $_SESSION["id_profil"];
		$id_biodiversity = $_POST['id_biodiversity'];
		$deskripsi_jenis_bio = $_POST["deskripsi_jenis_bio"];
        $nama_jenis_bio = $_POST['nama_jenis_bio'];

		$namafile = $_FILES['foto_jenis_bio']['name'];
	    $ukuranfile = $_FILES['foto_jenis_bio']['size'];
	    $error = $_FILES['foto_jenis_bio']['error'];
	    $tmpname = $_FILES['foto_jenis_bio']['tmp_name'];

	    if ($error == 4) {
	    	echo "<script>alert('Pilih Gambar Dahulu');</script>";
            echo "<script>window.location.replace('?page=tambah-jenis-bio');</script>";
            exit;
	    }

	    $ekstensiGambarValid = ['jpg','jpeg','png'];
        $ekstensiGambar = explode('.', $namafile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>alert('Bukan Gambar');</script>";
            echo "<script>window.location.replace('?page=tambah-jenis-bio');</script>";
            exit;
        }

        if ($ukuranfile > 1000000) {
            echo "<script>alert('Ukuran Terlalu besar');</script>";
            echo "<script>window.location.replace('?page=tambah-jenis-bio');</script>";
            exit;
        }

        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $ekstensiGambar;

        $profilTempat = $_SESSION["id_profil"];
        $tanggalDibuat = date("Y-m-d H:i:s");

        move_uploaded_file($tmpname, 'halaman/image/jenis-bio/' . $namafilebaru);
        $id_tempat = $_SESSION['id_tempat'];

        $query = $con->query("INSERT INTO t_jenis_bio (id_biodiversity, nama_jenis_bio, deskripsi_jenis_bio, foto_jenis_bio, id_profil_tempat) VALUES('$id_biodiversity', '$nama_jenis_bio', '$deskripsi_jenis_bio' ,'$namafilebaru','$id_profil_tempat')");

        if ($query != 0) {
        	echo "<script>alert('Data Jenis Bio Berhasil di Tambahkan');</script>";
        	echo "<script>window.location.replace('?page=data-jenis-bio');</script>";
        } else {
        	echo "<script>alert('Data Jenis Bio Gagal di Tambahkan');</script>";
        	echo "<script>window.location.replace('?page=tambah-jenis-bio');</script>";
        }
	} else if (isset($_POST["btn-update"])) {
		$id = $_POST["id"];
        $id_biodiversity = $_POST['id_biodiversity'];
        $nama_jenis_bio = $_POST["nama_jenis_bio"];
        $deskripsi_jenis_bio = $_POST["deskripsi_jenis_bio"];
        $gambarAdventure = $_POST["gambarLama"];

        $sql = $con->query("SELECT * FROM t_jenis_bio WHERE id = '$id' ");
        $data = $sql->fetch_array();
        $adventureGambar = $data["foto_jenis_bio"];

        if ($_FILES['foto_jenis_bio']['error'] == 4) {
            $gambar = $adventureGambar;
        } else {
            if ($adventureGambar != NULL) {
                if (file_exists("halaman/image/jenis-bio/$adventureGambar")) {
                    unlink("halaman/image/jenis-bio/$adventureGambar");
                }
            }

            $namafile = $_FILES['foto_jenis_bio']['name'];
            $ukuranfile = $_FILES['foto_jenis_bio']['size'];
            $error = $_FILES['foto_jenis_bio']['error'];
            $tmpname = $_FILES['foto_jenis_bio']['tmp_name'];

            if ($error == 4) {
                echo "<script>alert('Pilih Gambar Dahulu');</script>";
                echo "<script>window.location.replace('?page=edit-jenis-bio&id_jenis_bio=$id');</script>";
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
                echo "<script>window.location.replace('?page=edit-jenis-bio&id_jenis_bio=$id');</script>";
                exit;
            }

            $namafilebaru = uniqid();
            $namafilebaru .= '.';
            $namafilebaru .= $ekstensiGambar;
        }

        if (!empty($tmpname)) {
            move_uploaded_file($tmpname, "halaman/image/jenis-bio/" . $namafilebaru);
            $query = $con->query("UPDATE t_jenis_bio SET id_biodiversity = '$id_biodiversity', nama_jenis_bio = '$nama_jenis_bio', foto_jenis_bio = '$namafilebaru', deskripsi_jenis_bio = '$deskripsi_jenis_bio' WHERE id = '$id' ");
        } else {
            $query = $con->query("UPDATE t_jenis_bio SET id_biodiversity = '$id_biodiversity', nama_jenis_bio = '$nama_jenis_bio', deskripsi_jenis_bio = '$deskripsi_jenis_bio' WHERE id = '$id' ");
        }

        if ($query != 0) {
            echo "<script>alert('Data Jenis Bio Berhasil di Simpan');</script>";
            echo "<script>window.location.replace('?page=data-jenis-bio');</script>";
            exit;
        } else {
            echo "<script>alert('Data Jenis Bio Gagal di Simpan');</script>";
            echo "<script>window.location.replace('?page=edit-jenis-bio&id_jenis_bio=$id');</script>";
            exit;
        }
	} else if (isset($_POST["btn-hapus"])) {
		$id = $_POST['id'];

        $sql = mysqli_query($con, "SELECT * FROM t_jenis_bio WHERE id = '$id'");
        $data = $sql->fetch_array();
        $gambar = $data["foto_jenis_bio"];

        if (file_exists("halaman/image/jenis-bio/$gambar")) {
            unlink("halaman/image/jenis-bio/$gambar");
        }

        $query = $con->query("DELETE FROM t_jenis_bio WHERE id = '$id' ");

        if ($query != 0) {
            echo "<script>alert('Data Jenis Bio Berhasil di Hapus');</script>";
            echo "<script>window.location.replace('?page=data-jenis-bio');</script>";
            exit;
        } else {
            echo "<script>alert('Data Jenis Bio Gagal di Hapus');</script>";
            echo "<script>window.location.replace('?page=data-jenis-bio');</script>";
            exit;
        }
	}
?>