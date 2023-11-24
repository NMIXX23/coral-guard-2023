<?php
$id_jenis = $_GET['id-jenis'];

$query = $con->query("SELECT * FROM t_jenis_bio JOIN t_biodiversity ON t_jenis_bio.id_biodiversity = t_biodiversity.id WHERE t_jenis_bio.id = '$id_jenis' ");

$data = $query->fetch_assoc();
?>

<?php include "pages/partials/header.php"; ?>

<div class="container-fluid" style="background-image: url('images/background.png'); background-size: cover; background-repeat: no-repeat; width: 100%; height: 400px;">
</div>

<div class="background" style="background: linear-gradient(#666AFF, #666AFF) 0% 50%, white 50%;">
	<div class="container" style="padding-bottom: 10px; padding-top: 20px;">
		<center>
			<h3 class="text-white">Detail <?php echo $data["nama_jenis_bio"] ?> </h3>
		</center>
		<div class="row" style="padding-top: 10px; padding-bottom: 20px;">
			<div class="col-md-12">
				<div class="card shadow">
					<div class="card-body">
						<img style="width: 100%; height: 300px;" src="admin/halaman/image/jenis-bio/<?php echo $data['foto_jenis_bio'] ?>">
						<div class="detail" style="padding-top: 10px;">
							<a href="?page=jenis" style="text-decoration: none;">
								<?php echo $data["nama_biodiversity"] ?>
							</a> |
							Dibuat Oleh : <strong>Administrator</strong>
						</div>
						<p style="padding-top: 10px; font-size: 20px; font-weight: bold;">
							<?php echo $data["nama_jenis_bio"] ?>
						</p>
						<p style="text-align: justify; font-size: 16px;">
							<?php echo $data["deskripsi_jenis_bio"] ?>
						</p>
						<a href="<?= $_SERVER['HTTP_REFERER'] ?>" class="btn btn-primary shadow">
							Back
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include "pages/partials/footer.php"; ?>