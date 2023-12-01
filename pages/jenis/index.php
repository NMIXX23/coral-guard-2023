<?php

$query = $con->query("SELECT * FROM t_biodiversity ORDER BY id ASC");

?>
<?php include "pages/partials/header.php" ?>

<div class="container-fluid" style="background-image: url('images/background.png'); background-size: cover; background-repeat: no-repeat; width: 100%; height: 400px;">
</div>
<div class="background" style="background: linear-gradient(#666AFF, #666AFF) 0% 50%, white 50%;">
	<div class="container" style="padding-bottom: 50px; padding-top: 50px;">
		<center>
			<h3 class="text-white">Biodiversity</h3>
		</center>
		<div class="row">
			<?php foreach ($query as $data) : ?>
				<div class="col-md-6" style="padding-bottom: 10px; padding-top: 20px;">
					<a href="?page=jenis-detail&id-biodiversity=<?php echo $data['id'] ?>" style="text-decoration: none;">
						<div class="card shadow">
							<div class="card-body">
								<?php if (file_exists($data["foto_biodiversity"])) : ?>
									<img style="width: 100%; height: 300px;" src="images/default.jpeg">
								<?php else : ?>
									<?php if (empty($data["foto_biodiversity"])) : ?>
										<img style="width: 100%; height: 300px;" src="images/default.jpeg">
									<?php else : ?>
										<img style="width: 100%; height: 300px;" src="admin/halaman/image/biodiversity/<?php echo $data["foto_biodiversity"] ?>">
									<?php endif ?>
								<?php endif ?>
								<br><br>
								<h5 style="color: black;"><?php echo $data["nama_biodiversity"] ?></h5>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>

<?php include "pages/partials/footer.php"; ?>