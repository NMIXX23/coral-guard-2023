<?php
if (!isset($_SESSION['login']) || !$_SESSION['login']) return header('location: ./login.php');

$id_member = $_SESSION['id_member'];
$query = $con->query("SELECT t_tempat_adventure.nama_tempat AS nama_tempat, t_tempat_adventure.alamat_tempat AS alamat_tempat, t_tempat_adventure.foto AS foto, t_tempat_adventure.nomor_hp AS nomor_hp, t_koleksi.id AS id_koleksi, t_koleksi.* FROM t_koleksi JOIN t_tempat_adventure ON t_koleksi.id_tempat = t_tempat_adventure.id WHERE id_member = '$id_member' ORDER BY t_koleksi.tanggal_koleksi DESC");

// if (mysqli_num_rows($query) == 0) {
// 	echo "<script>alert('Data Koleksi Anda Kosong');</script>";
// 	echo "<script>window.location.replace('?page=rekomendasi');</script>";
// }

include "pages/partials/header.php";
?>

<div class="container-fluid" style="background-color: rgba(128, 128, 128, 0.5); background-image: url('images/background.png'); background-size: cover; background-repeat: no-repeat; width: 100%; height: 400px; background-position: center;">
	<center style="padding-top: 100px;">
		<span style="font-size: 45px; font-weight: bold; color: white;">
			Jelajahi Keindahan Indonesia
		</span>
		<br>
		<p style="font-size: 22px; color: white;">
			Di sini, Anda akan merasakan keindahan <br> terumbu karang yang warna-warni, <br> keanekaragaman biota laut yang menakjubkan, <br>dan panorama bawah laut yang memukau
		</p>
	</center>
</div>

<div class="background" style="background-color:  #6BC1FE;">
	<div class="container" style="padding-top: 50px; padding-bottom: 50px;">
		<center>
			<h3 style="color: white;">Koleksi Saya</h3>
		</center>
		<a href="?page=rekomendasi" class="btn btn-primary shadow">
			Kembali
		</a>
		<?php if (mysqli_num_rows($query) > 0) : ?>
			<form method="POST" action="?page=aksi-koleksi" style="display: inline; margin-left: 10px;">
				<button onclick="return confirm('Yakin ? Ingin Menghapus Semua Koleksimu')" type="submit" class="btn btn-danger shadow" name="hapus-semua">
					Hapus Semua Koleksi
				</button>
			</form>
		<?php endif ?>
		<br><br>
		<div class="row gy-4">
			<?php if (mysqli_num_rows($query) == 0) : ?>
				<div class="col alert alert-danger">
					<center>
						<strong>Data Koleksi Kosong</strong>
					</center>
				</div>
			<?php else : ?>
				<?php foreach ($query as $data) : ?>
					<div class="col-md-4">
						<div class="card">
							<div class="card-body">
								<img style="width: 100%; height: 300px" src="admin/halaman/image/tempat-adventure/<?php echo $data['foto'] ?>">
								<h5>
									<strong>
										<?php echo $data["nama_tempat"] ?>
									</strong>
								</h5>
								<p style="text-align: justify;">
									<?php echo $data["alamat_tempat"] ?>
								</p>
								<div style="margin-bottom: 10px;">
									No. Telp : <?php echo $data["nomor_hp"] ?>
								</div>
								<form method="POST" action="?page=aksi-koleksi">
									<input type="hidden" name="id_koleksi" value="<?php echo $data['id_koleksi'] ?>">
									<button onclick="return confirm('Yakin ? Ingin Menghapus Koleksi Ini ?')" type="submit" class="btn btn-danger btn-sm" style="width: 100%;" name="hapus-koleksi-saya">
										Hapus Koleksi
									</button>
								</form>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			<?php endif ?>

		</div>
	</div>
</div>

<?php
include "pages/partials/footer.php";
?>