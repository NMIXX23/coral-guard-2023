<?php
include "partials/header.php";
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

<div class="background-container" style="background-color:  #6BC1FE;">
	<div class="container" style="padding-bottom: 50px; padding-top: 50px;">
		<center>
			<h3 style="color: white;">Rekomendasi Kami</h3>
		</center>
		<?php if (isset($_SESSION['login']) && $_SESSION['login']) : ?>
			<a href="./?page=koleksi-saya" class="btn btn-primary">Koleksi Saya</a>
		<?php endif ?>
		<div class="row gy-4">
			<?php
			$query = $con->query("SELECT * FROM t_tempat_adventure ORDER BY id DESC");
			if (isset($_SESSION['login']) && $_SESSION['login']) {
				$query = $con->query("SELECT p.*, k.id AS koleksi FROM t_tempat_adventure p 
				LEFT JOIN (SELECT * FROM t_koleksi WHERE t_koleksi.id_member = {$_SESSION['id_member']}) AS k
				ON p.id = k.id_tempat
				ORDER BY p.id DESC");
			}
			?>
			<?php foreach ($query as $data) : ?>
				<div class="col-md-4" style="padding-top: 15px; padding-bottom: 10px;">
					<div class="card">
						<div class="card-body">
							<?php if (file_exists($data["foto"])) : ?>
								<img src="images/default.jpeg" style="width: 100%; height: 300px;">
							<?php else : ?>
								<?php if (empty($data["foto"])) : ?>
									<img src="images/default.jpeg" style="width: 100%; height: 300px;">
								<?php else : ?>
									<img style="width: 100%; height: 300px;" src="admin/halaman/image/tempat-adventure/<?php echo $data["foto"] ?>">
								<?php endif ?>
							<?php endif ?>
							<hr>
							<div class="row">
								<div class="col-md-5">
									<span style="text-align: justify;">
										<strong>
											<?php echo $data["nama_tempat"] ?>
										</strong>
									</span>
								</div>
							</div>
							<p style="text-align: justify;">
								<?php echo $data["alamat_tempat"] ?>
							</p>
							<p>
								No. Telp :
								<?php if (empty($data["nomor_hp"])) : ?>
									085324237299
								<?php else : ?>
									<?php echo $data["nomor_hp"] ?>
								<?php endif ?>
							</p>

							<?php if (!isset($_SESSION['login']) || !$_SESSION['login']) : ?>
								<a class="btn btn-primary" style="width: 100%" href="login.php">
									Tambah
								</a>
							<?php else : ?>
								<?php if ($data['koleksi'] != null) : ?>
									<button type="button" class="btn btn-success" style="width: 100%;">Ditambahkan</button>
								<?php else : ?>
									<form method="POST" action="?page=aksi-koleksi">
										<input type="hidden" name="id_tempat" value="<?php echo $data['id'] ?>">
										<button type="submit" class="btn btn-primary" style="width: 100%" name="tambah-koleksi">
											Tambah
										</button>
									</form>
								<?php endif ?>
							<?php endif ?>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>

	</div>
</div>

<div class="container" style="padding-bottom: 50px; padding-top: 50px;">
	<center>
		<h3>Kategori</h3>
	</center>
	<div class="row">
		<?php
		$query = $con->query("SELECT * FROM t_kategori ORDER BY id ASC ");
		?>
		<?php foreach ($query as $data) : ?>
			<div class="col-md-4">
				<a href="?page=kategori-detail&id-categori=<?php echo $data["id"] ?>" style="text-decoration: none; color: black">
					<center>
						<?php if (file_exists($data["foto_kategori"])) : ?>
							<img src="images/default.jpeg" style="width: 100%; height: 300px; border-radius: 50px; padding-top: 10px; padding-bottom: 10px;">
						<?php else : ?>
							<?php if (empty($data["foto_kategori"])) : ?>
								<img src="images/default.jpeg" style="width: 100%; height: 300px; border-radius: 50px; padding-top: 10px; padding-bottom: 10px;">
							<?php else : ?>
								<img src="admin/halaman/image/kategori/<?php echo $data["foto_kategori"] ?>" style="width: 100%; height: 300px; border-radius: 50px; padding-top: 10px; padding-bottom: 10px;">
							<?php endif ?>
						<?php endif ?>
						<br>
						<h4>
							<?php echo $data["kategori"]; ?>
						</h4>
					</center>
				</a>
			</div>
		<?php endforeach ?>
	</div>
</div>

<?php include "partials/footer.php"; ?>