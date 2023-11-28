<?php
// $path = $_SERVER['REQUEST_URI'];
$queryString = $_SERVER['QUERY_STRING'];
$currentURL = $queryString;

if (isset($_POST['comment'])) {
	$id_post = $_POST['id_post'];
	$komentar = $_POST['komentar'];
	$id_member = $con->query("SELECT id FROM t_member WHERE user_id={$_SESSION['id_member']} LIMIT 1")->fetch_row()[0];

	$query = $con->query("INSERT INTO t_komentar (id_post, id_member, komentar) VALUES ('$id_post', '$id_member', '$komentar')");
	if ($query) {
		echo "<script>alert('Komentar Berhasil di Tambahkan');</script>";
	} else {
		echo "<script>alert('Komentar Gagal di Tambahkan');</script>";
	}

	echo "<script>window.location.replace('?page=komunitas');</script>";
}

$filter = '';
if (isset($_GET['keyword']) || isset($_GET['actor']) || isset($_GET['category'])) {
	$filters = [];
	$keyword = $_GET['keyword'] ?? null;
	$actor = $_GET['actor'] ?? null;
	$category = $_GET['category'] ?? null;

	if ($keyword != null) $filters[] = "keywords LIKE '%{$keyword}%'";
	if ($actor != null) $filters[] = "actor = $actor";
	if ($category != null) $filters[] = "category = $category";

	$filter = count($filters) > 0 ? "WHERE " . join(' AND ', $filters) : $filter;
}

$actors = [
	'1' => 'Ahli',
	'2' => 'Warga',
	'3' => 'Nelayan',
];
$categories = [
	'1' => 'Stories',
	'2' => 'Question',
	'3' => 'Information',
];

include "pages/partials/header.php";
?>

<div class="container-fluid" style="background-color: rgba(128, 128, 128, 0.5); background-image: url('images/background.png'); background-size: cover; background-repeat: no-repeat; width: 100%; height: 400px; background-position: center;">
	<center style="padding-top: 100px;">
		<span style="font-size: 45px; font-weight: bold; color: white;">
			From asking and discussing to <br>
			understanding!
		</span>
		<br>
		<?php if (isset($_SESSION['login']) && $_SESSION['login']) : ?>
			<a href="?page=post-now" class="btn btn-warning btn-lg" style="background-color: #E3C99C; border: 1px solid #E3C99C; color: white; padding-left: 50px; padding-right: 50px;">
				Post Now!
			</a>
		<?php else : ?>
			<a href="./login.php" class="btn btn-warning btn-lg" style="background-color: #E3C99C; border: 1px solid #E3C99C; color: white; padding-left: 50px; padding-right: 50px;">Join Us!</a>
		<?php endif ?>
	</center>
</div>

<div class="container" style="padding-top: 30px; padding-bottom: 30px;">
	<form action="" method="get">
		<input type="hidden" name="page" value="komunitas">
		<div class="input-group" style="max-width: 768px;">
			<input type="text" class="form-control form-control-lg" name="keyword" placeholder="Masukkan Keyword" value="<?= $_GET['keyword'] ?? '' ?>">
			<select class="form-control form-control-lg" name="actor">
				<option value="">- Pilih Actor -</option>
				<?php foreach ($actors as $key => $val) : ?>
					<option value="<?= $key ?>" <?= $key == ($_GET['actor'] ?? '') ? 'selected' : '' ?>><?= $val ?></option>
				<?php endforeach ?>
			</select>
			<button type="submit" class="btn btn-primary">Cari</button>
		</div>
	</form>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-9 pb-5">
			<?php
			$query = $con->query("SELECT p.*, m.actor, u.photo FROM t_post p 
			LEFT JOIN t_users u ON p.id_member = u.id 
			LEFT JOIN t_member m ON u.id = m.user_id 
			{$filter} ORDER BY p.id DESC");
			?>
			<?php foreach ($query as $data) : ?>
				<div class="card mb-5">
					<div class="card-body">

						<div class="row">
							<div class="col-md-2">
								<img src="./images/<?= $data['photo'] ?>" class="rounded-circle img-fluid" style="aspect-ratio: 1/1; object-fit: cover; object-position: center;">
							</div>
							<div class="col-md-10">
								<span class="badge bg-primary rounded-pill"><?= $categories[$data['category']] ?></span>
								<h5><?= $data['keywords'] ?>, <?= $actors[$data['actor']] ?></h5>
								<?php if ($data['image'] != null && file_exists('./pages/post/image/' . $data['image'])) : ?>
									<img style="width: 100%; height: 300px; padding-bottom: 20px;" src="pages/post/image/<?php echo $data["image"] ?>">
								<?php endif ?>
								<p style="text-align: justify;">
									<?php echo $data["description"] ?>
								</p>
							</div>
						</div>

						<?php if (isset($_SESSION['login']) && $_SESSION['login']) : ?>
							<?php
							$komentar = $con->query("SELECT k.*, u.username, u.photo, m.actor FROM t_komentar k
								LEFT JOIN t_member m ON k.id_member = m.id
								LEFT JOIN t_users u ON u.id = m.user_id
								WHERE k.id_post={$data['id']}");
							?>

							<?php if (mysqli_num_rows($komentar) > 0) : ?>
								<div class="row gy-2 mt-3">
									<?php foreach ($komentar as $kom) : ?>
										<div class="col-12">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-md-2 text-end">
															<img src="images/<?= $kom['photo'] ?>" class="rounded-circle" style=" width: 60%; aspect-ratio: 1/1; object-fit: cover; object-position: center;">
														</div>
														<div class="col-md-10">
															<h6 class="text-primary"><?= $kom['username'] ?>, <?= $actors[$kom['actor']] ?></h6>
															<p><?= $kom['komentar'] ?></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php endforeach ?>
								</div>
							<?php endif ?>

							<form action="" method="post">
								<input type="hidden" name="id_post" value="<?= $data['id'] ?>">
								<div class="d-flex gap-3 mt-3">
									<input type="text" name="komentar" id="komentar" class="form-control" placeholder="Write your comment here...">
									<button type="submit" name="comment" class="btn btn-primary rounded-pill"><i class="fa-solid fa-turn-up"></i></button>
								</div>
							</form>
						<?php endif ?>

					</div>
				</div>
			<?php endforeach ?>
		</div>
		<div class="col-md-3 pb-5">
			<div class="card mb-5">
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
							<a href="./?page=komunitas">All</a>
						</li>
						<li>
							<a href="?<?= $queryString ?>&category=1">Stories</a>
						</li>
						<li>
							<a href="?<?= $queryString ?>&category=2">Question</a>
						</li>
						<li>
							<a href="?<?= $queryString ?>&category=3">Information</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="card mb-5" style="border: 1px solid blue;">
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

			<div class="card" style="border: 1px solid blue;">
				<div class="card-body text-center">
					<h5 class="text-start">CORAL AI</h5>
					<hr>
					<img src="./assets/img/chatbot.png" alt="chatbot" class="rounded py-3 px-5 mb-3 mx-auto" style="border: 1px solid blue;">
					<p>
						Taking along time to get an answer? or not satisfied with the answers from forun communities? Just ask out chatbot, come on!
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include "pages/partials/footer.php";
?>