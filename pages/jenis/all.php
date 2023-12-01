<?php
$id_biodiversity = $_GET['id-biodiversity'];

$query = $con->query("SELECT * FROM t_biodiversity WHERE id = '$id_biodiversity' ");

$data = $query->fetch_assoc();
?>

<?php include "pages/partials/header.php"; ?>

<div class="container-fluid" style="background-image: url('images/background.png'); background-size: cover; background-repeat: no-repeat; width: 100%; height: 400px;">
</div>

<div class="background" style="background: linear-gradient(#666AFF, #666AFF) 0% 50%, white 50%;">
	<div class="container" style="padding-bottom: 10px; padding-top: 20px;">
		<center>
			<h3 class="text-white">Jenis - Jenis <?php echo $data["nama_biodiversity"] ?> </h3>
		</center>
		<div class="row">
			<?php
			$query = $con->query("SELECT * FROM t_jenis_bio WHERE id_biodiversity = '$id_biodiversity' ORDER BY id ASC");
			?>
			<?php foreach ($query as $data) : ?>
				<div class="col-md-12" style="padding-top: 15px; padding-bottom: 10px;">
					<div class="card shadow">
						<div class="card-body">
							<div class="row">
								<div class="col-md-4">
									<?php if (file_exists($data["foto_jenis_bio"])) : ?>

									<?php else : ?>
										<?php if (empty($data["foto_jenis_bio"])) : ?>

										<?php else : ?>
											<img style="width: 100%; height: 300px;" src="images/default.jpeg">
										<?php endif ?>
									<?php endif ?>
								</div>
								<div class="col-md-8">
									<h5><?php echo $data["nama_jenis_bio"] ?></h5>
									<p style="text-align: justify;">
										<?php echo $data["deskripsi_jenis_bio"] ?>
									</p>
									<a href="?page=detail-page&id-jenis=<?php echo $data['id'] ?>" style="text-decoration: none;">
										Read More
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>

			<?php if (empty($_SESSION["id_member"])) : ?>
				<div class="row" style="padding-top: 10px;">
					<div class="col-md-10">
						<p>
							<strong style="color: white;">
								Wanna see more content ? Please log in first!
							</strong>
						</p>
					</div>
					<div class="col-md-2">
						<a href="login.php" class="btn btn-primary shadow" style="margin-right: 10px;">
							Login
						</a>
						<a href="?page=home" class="btn btn-primary shadow">
							Back
						</a>
					</div>
				</div>
			<?php else : ?>
				<div class="row" style="padding-top: 10px; padding-bottom: 10px;">
					<div class="col-md-10">
						<a href="<?= $_SERVER['HTTP_REFERER'] ?>" class="btn btn-primary btn-lg shadow bg-white" style="color: blue;">
							Back
						</a>
					</div>
				</div>
			<?php endif ?>
		</div>
	</div>
</div>

<?php include "pages/partials/footer.php"; ?>