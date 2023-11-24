<?php

	if (isset($_POST["btn-tambah"])) {
		$nama_tempat = $_POST['nama_tempat'];
		$alamat_tempat = $_POST["alamat_tempat"];
        $nama_pegawai = $_POST['nama_pegawai'];
        $email_pegawai = $_POST["email_pegawai"];
        $nomor_hp_pegawai = $_POST["nomor_hp_pegawai"];

        $password = mysqli_real_escape_string($con, "PENGELOLA-" . $nomor_hp_pegawai);
        $password = password_hash($password, PASSWORD_DEFAULT);

		$namafile = $_FILES['foto_tempat']['name'];
	    $ukuranfile = $_FILES['foto_tempat']['size'];
	    $error = $_FILES['foto_tempat']['error'];
	    $tmpname = $_FILES['foto_tempat']['tmp_name'];

	    if ($error == 4) {
	    	echo "<script>alert('Pilih Gambar Dahulu');</script>";
            echo "<script>window.location.replace('?page=tambah-tempat');</script>";
            exit;
	    }

	    $ekstensiGambarValid = ['jpg','jpeg','png'];
        $ekstensiGambar = explode('.', $namafile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>alert('Bukan Gambar');</script>";
            echo "<script>window.location.replace('?page=tambah-tempat');</script>";
            exit;
        }

        if ($ukuranfile > 1000000) {
            echo "<script>alert('Ukuran Terlalu besar');</script>";
            echo "<script>window.location.replace('?page=tambah-tempat');</script>";
            exit;
        }

        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $ekstensiGambar;

        move_uploaded_file($tmpname, 'halaman/image/' . $namafilebaru);
        $id_tempat = $_SESSION['id_tempat'];

        $query = $con->query("INSERT INTO t_users (username, email, password, role, nomor_hp, active) VALUES ('$nama_pegawai', '$email_pegawai', '$password', 'PEMILIK TEMPAT', '$nomor_hp_pegawai', '1') ");

        $lastInsertId = $con->insert_id;

        $query = $con->query("INSERT INTO t_profil_tempat (id_tempat, user_id, nama_tempat, alamat_tempat, foto_tempat) VALUES('$id_tempat', '$lastInsertId', '$nama_tempat' ,'$alamat_tempat','$namafilebaru')");

        if ($query != 0) {
        	echo "<script>alert('Data Anda Berhasil di Tambahkan');</script>";
        	echo "<script>window.location.replace('?page=data-tempat');</script>";
        } else {
        	echo "<script>alert('Data Anda Gagal di Tambahkan');</script>";
        	echo "<script>window.location.replace('?page=tambah-tempat');</script>";
        }
	} else if (isset($_POST["btn-update"])) {

        $id = $_POST["id"];
        $nama_tempat = $_POST['nama_tempat'];
        $alamat_tempat = $_POST["alamat_tempat"];
        $tempatFoto = $_POST["tempat_foto"];

        $sql = $con->query("SELECT * FROM t_profil_tempat WHERE id = '$id' ");
        $data = $sql->fetch_array();
        $fotoTempat = $data["foto_tempat"];

        if ($_FILES['foto_tempat']['error'] == 4) {
            $foto = $tempatFoto;
        } else {
            if ($fotoTempat != NULL) {
                if (file_exists("halaman/image/$tempatFoto")) {
                    unlink("halaman/image/$tempatFoto");
                }
            }

            $namafile = $_FILES['foto_tempat']['name'];
            $ukuranfile = $_FILES['foto_tempat']['size'];
            $error = $_FILES['foto_tempat']['error'];
            $tmpname = $_FILES['foto_tempat']['tmp_name'];

            if ($error == 4) {
                echo "<script>alert('Pilih Gambar Dahulu');</script>";
                echo "<script>window.location.replace('?page=edit-tempat&id_profil_tempat=$id');</script>";
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
                echo "<script>window.location.replace('?page=edit-tempat&id_profil_tempat=$id');</script>";
                exit;
            }

            $namafilebaru = uniqid();
            $namafilebaru .= '.';
            $namafilebaru .= $ekstensiGambar;
        }

        if (!empty($tmpname)) {
            move_uploaded_file($tmpname, "halaman/image/" . $namafilebaru);
            $query = $con->query("UPDATE t_profil_tempat SET nama_tempat = '$nama_tempat', alamat_tempat = '$alamat_tempat', foto_tempat = '$namafilebaru' WHERE id = '$id' ");
        } else {
            $query = $con->query("UPDATE t_profil_tempat SET nama_tempat = '$nama_tempat', alamat_tempat = '$alamat_tempat' WHERE id = '$id' ");
        }

        if ($query != 0) {
            echo "<script>alert('Data Profil Tempat Berhasil di Simpan');</script>";
            echo "<script>window.location.replace('?page=data-tempat');</script>";
            exit;
        } else {
            echo "<script>alert('Data Profil Tempat Gagal di Simpan');</script>";
            echo "<script>window.location.replace('?page=edit-tempat&id_profil_tempat=$id');</script>";
            exit;
        }

    } else if (isset($_POST["btn-hapus"])) {
        $id = $_POST['id'];

        $sql = mysqli_query($con, "SELECT * FROM t_profil_tempat WHERE id = '$id'");
        $data = $sql->fetch_array();
        $foto = $data["foto_tempat"];

        if (file_exists("halaman/image/$foto")) {
            unlink("halaman/image/$foto");
        }

        $query = $con->query("DELETE FROM t_profil_tempat WHERE id = '$id' ");

        if ($query != 0) {
            echo "<script>alert('Data Profil Tempat Berhasil di Hapus');</script>";
            echo "<script>window.location.replace('?page=data-tempat');</script>";
            exit;
        } else {
            echo "<script>alert('Data Profil Tempat Gagal di Hapus');</script>";
            echo "<script>window.location.replace('?page=data-tempat');</script>";
            exit;
        }

    }

?>