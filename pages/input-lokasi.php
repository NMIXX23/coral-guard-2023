<?php include "pages/partials/header.php" ?>

<div class="container" style="padding-bottom: 30px; padding-top: 30px;">
	<h5>Input Lokasi Yang Disarankan</h5>
	<hr>
	<form method="POST" enctype="multipart/form-data">
		<div class="card">
			<div class="card-body">
				<div class="form-group mb-3">
					<label class="form-label mb-2" for="kategori"> Kategori </label>
					<select class="form-control" name="kategori" id="kategori">
						<option value="" selected>- Pilih -</option>
						<option value="Baik">Baik</option>
						<option value="Sedang">Sedang</option>
						<option value="Rendah">Rendah</option>
						<option value="Buruk">Buruk</option>
					</select>
				</div>
				<div class="form-group mb-3">
					<label for="region" class="form-label mb-2"> Region </label>
					<input type="text" class="form-control" name="region" id="region">
				</div>
				<div class="form-group mb-3">
					<label for="gambar" class="form-label mb-2"> Gambar </label>
					<input type="file" class="form-control" name="gambar" id="gambar">
				</div>
				<div class="form-group mb-3">
					<label for="latitude" class="form-label mb-2"> Latitude </label>
					<input type="text" class="form-control" name="latitude" id="latitude">
				</div>
				<div class="form-group mb-3">
					<label for="longitude" class="form-label mb-3"> Longitude </label>
					<input type="text" class="form-control" name="longitude" id="longitude">
				</div>
				<hr>
				<div class="form-group">
					<button type="submit" name="btn-simpan" class="btn btn-primary btn-sm">
						Simpan
					</button>
				</div>
			</div>
		</div>
	</form>
</div>

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
		echo "<script>window.location.replace('?page=input-lokasi');</script>";
		exit;
	}

	if ($error == 4) {
		echo "<script>alert('Pilih Gambar Dahulu');</script>";
		echo "<script>window.location.replace('?page=input-lokasi');</script>";
		exit;
	}

	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namafile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>alert('Bukan Gambar');</script>";
		echo "<script>window.location.replace('?page=input-lokasi');</script>";
		exit;
	}
	if ($ukuranfile > 1000000) {
		echo "<script>alert('Ukuran Terlalu besar');</script>";
		echo "<script>window.location.replace('?page=input-lokasi');</script>";
		exit;
	}

	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $ekstensiGambar;

	$id_session = $_SESSION['id_member'];

	move_uploaded_file($tmpname, 'images/lokasi/' . $namafilebaru);

	$query = $con->query("INSERT INTO t_maps (kategori, region, latitude, longitude, gambar, user_create) VALUES ('$kategori', '$region', '$latitude', '$longitude', '$namafilebaru', '$id_session') ");

	if ($query != 0) {
		echo "<script>alert('Data Lokasi Berhasil di Tambahkan');</script>";
		echo "<script>window.location.replace('?page=input-lokasi');</script>";
	} else {
		echo "<script>alert('Data Lokasi Gagal di Tambahkan');</script>";
	}
}
?>

<?php include "pages/partials/footer.php" ?>