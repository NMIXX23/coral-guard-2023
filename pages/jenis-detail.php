<?php
$id_categori = $_GET['id-categori'];

$query = $con->query("SELECT * FROM t_kategori WHERE id = '$id_categori' ");

$data = $query->fetch_assoc();
?>


<?php include "pages/partials/header.php"; ?>

<div class="container-fluid" style="background-image: url('images/background.png'); background-size: cover; background-repeat: no-repeat; width: 100%; height: 400px;">
</div>

<div class="background-container" style="background-color:  #377ABC;">
	<div class="container" style="padding-bottom: 50px; padding-top: 50px;">
		<center>
			<h3 style="color: white;">Wisata <?php echo $data["kategori"] ?> </h3>
		</center>
		<div class="row">
			<?php
				$query = $con->query("SELECT * FROM t_tempat_adventure WHERE id_kategori = '$id_categori' ORDER BY id DESC ");
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
							
							<?php if (empty($_SESSION["id_member"])) : ?>
								<a class="btn btn-primary" style="width: 100%" href="login.php">
									Tambah
								</a>
							<?php else : ?>
								<form method="POST" action="?page=aksi-koleksi">
									<input type="hidden" name="id_tempat" value="<?php echo $data['id'] ?>">
									<button type="submit" class="btn btn-primary" style="width: 100%" name="tambah-koleksi">
										Tambah
									</button>
								</form>
							<?php endif ?>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>

<?php include "pages/partials/footer.php"; ?>