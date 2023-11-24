<?php
include "pages/partials/header.php";

$category = [
	[
		"id" => 1,
		"name" => "Stories"
	],
	[
		"id" => 2,
		"name" => "Question"
	],
	[
		"id" => 3,
		"name" => "Information"
	]
];
?>

<div class="container-fluid" style="background-color: rgba(128, 128, 128, 0.5); background-image: url('images/background.png'); background-size: cover; background-repeat: no-repeat; width: 100%; height: 400px; background-position: center;">
	<center style="padding-top: 100px;">
		<span style="font-size: 45px; font-weight: bold; color: lightskyblue;">
			From asking and discussing to <br>
			understanding!
		</span>
	</center>
</div>

<div class="container" style="padding-bottom: 50px; padding-top: 50px;">
	<div class="row">
		<div class="col-md-9">
			<div class="card" style="border: 1px solid blue;">
				<form method="POST" action="?page=aksi-post-now" enctype="multipart/form-data">
					<div class="card-body">
						<h5>POST</h5>
						<hr>
						<div class="row form-group mb-3">
							<label for="keywords" class="col-sm-2 col-form-label" style="text-align: right">
								<strong style="color: #008CEE">
									Keywords *
								</strong>
							</label>
							<div class="col-sm-8">
								<input type="text" class="form-control shadow" name="keywords" id="keywords" placeholder="Masukkan Keywords">
							</div>
						</div>
						<div class="row form-group mb-3">
							<label for="keywords" class="col-sm-2 col-form-label" style="text-align: right">
								<strong style="color: #008CEE">
									Category *
								</strong>
							</label>
							<div class="col-sm-8">
								<select class="form-control shadow" name="category" id="category">
									<option>- Pilih -</option>
									<?php foreach ($category as $data) : ?>
										<option value="<?php echo $data['id'] ?>">
											<?php echo $data["name"] ?>
										</option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="row form-group mb-3">
							<label for="image" class="col-sm-2 col-form-label" style="text-align: right">
								<strong style="color: #008CEE">
									Image *
								</strong>
							</label>
							<div class="col-sm-8">
								<input type="file" class="form-control shadow" name="image" id="image">
							</div>
						</div>
						<div class="row form-group mb-3">
							<label for="keywords" class="col-sm-2 col-form-label" style="text-align: right">
								<strong style="color: #008CEE">
									Description *
								</strong>
							</label>
							<div class="col-sm-8">
								<textarea class="form-control shadow" name="description" id="description" rows="5" placeholder="Masukkan Description"></textarea>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" name="btn-publish" class="btn btn-primary btn-lg" style="width: 100%; background-color: #E3C99C; border: 1px solid #E3C99C;">
							Publish Your Post
						</button>
					</div>
				</form>
			</div>
			<a href="?page=komunitas" class="btn btn-primary btn-lg mt-3">
				Back
			</a>
		</div>
		<div class="col-md-3">
			<div class="card mb-5" style="border: 1px solid blue;">
				<div class="card-body">
					<h5>STATS</h5>
					<hr>
					<ul class="stats">
						<li>
							<a href="#" class="bg-question">
								<span>Question (3)</span>
								<i class="fa fa-circle-question icon-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#" class="bg-answer">
								<span>Answer (5) </span>
								<i class="fa fa-comment icon-facebook"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="card mb-5" style="border: 1px solid blue;">
				<div class="card-body">
					<h5>Category</h5>
					<hr>
					<ul class="category">
						<li>
							<a href="#">All</a>
						</li>
						<?php foreach ($category as $data) : ?>
							<li>
								<a href="<?php echo $data["id"] ?>">
									<?php echo $data["name"] ?>
								</a>
							</li>
						<?php endforeach ?>
					</ul>
				</div>
			</div>

			<div class="card" style="border: 1px solid blue;">
				<div class="card-body">
					<h5>Find Us</h5>
					<hr>
					<ul class="socials">
						<li>
							<a href="#" class="bg-twitter">
								<span>Twitter</span>
								<i class="fa-brands fa-twitter icon-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#" class="bg-facebook">
								<span>Facebook</span>
								<i class="fa-brands fa-facebook icon-facebook"></i>
							</a>
						</li>
						<li>
							<a href="#" class="bg-youtube">
								<span>Youtube</span>
								<i class="fa-brands fa-youtube icon-youtube"></i>
							</a>
						</li>
						<li>
							<a href="#" class="bg-instagram">
								<span>Instagram</span>
								<i class="fa-brands fa-instagram icon-instagram"></i>
							</a>
						</li>
						<li>
							<a href="#" class="bg-tiktok">
								<span>Tiktok</span>
								<i class="fa-brands fa-tiktok icon-tiktok"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include "pages/partials/footer.php";
?>