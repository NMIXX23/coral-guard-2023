<?php include "pages/partials/header.php"; ?>

<!-- Carousel Start -->
<div style="background-color: white;">
	<div class="container-fluid p-0" style="background-image: url('images/contact.png'); background-size: cover; background-repeat: no-repeat; width: 100%; height: 885px; background-position: center;">
		<center style="padding-top: 100px;">
			<div class="row justify-content-end" style="margin-top: 50px">
				<div class="col-10 col-lg-8">
					<h3 class="display-3 text-white animated slideInDown mb-6 text-end" style="margin-right: 150px; font-size: 100px">
						Contact
					</h3>
				</div>
			</div>
		</center>
	</div>
	<!-- Carousel End -->
	<!-- Carousel End -->

	<!-- About Start -->
	<div id="sc" class="container-xxl py-5">
		<div class="container">
			<div class="row g-5 align-items-center">
				<div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
					<h1 class="mb-4" style="color: #008cee">Contact</h1>
					<p>
						Ingin mengetahui lebih dalam tentang terumbu karang? Jangan ragu
						untuk menghubungi kami, ya! Kami siap membantu memberikan
						informasi yang Anda butuhkan.
					</p>
				</div>
				<div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
					<div class="row g-0 text-start"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- About End -->

	<!-- Contact Start -->
	<div class="container-xxl py-5">
		<div class="container">
			<div class="row g-5 align-items-center">
				<div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15853.474707673258!2d106.798738626987!3d-6.60102222362066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5d2e602b501%3A0x25a12f0f97fac4ee!2sSekolah%20Vokasi%20Institut%20Pertanian%20Bogor!5e0!3m2!1sid!2sid!4v1685961121421!5m2!1sid!2sid" width="100%" height="450" style="border: 0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
					<div class="form-group-1">
						<label for="city"></label>
						<input class="co-2" type="text" id="city" name="city" placeholder="Enter your city" />
					</div>

					<div class="form-group-1">
						<label for="email"></label>
						<input class="co-2" type="email" id="email" name="email" placeholder="Enter your email" />
					</div>

					<div class="form-group-1">
						<label for="province"></label>
						<input class="co-2" type="text" id="province" name="province" placeholder="Enter your province" />
					</div>

					<div class="form-group-1">
						<label for="fullname"></label>
						<input class="co-2" type="text" id="fullname" name="fullname" placeholder="Enter your full name" />
					</div>

					<div class="form-group-1">
						<label for="phone"></label>
						<input class="co-2" type="tel" id="phone" name="phone" placeholder="Enter your phone number" />
					</div>

					<div class="form-group-1">
						<label for="dropdown"></label>
						<select id="dropdown" name="dropdown">
							<option value="" disabled selected hidden>How did you find us?</option>
							<option value="option1">Option 1</option>
							<option value="option2">Option 2</option>
						</select>
					</div>
				</div>
				<div class="form-group-1">
					<label for="message"></label>
					<textarea id="message" name="message" rows="4" placeholder="Enter your message" style="width: 100%; height: 300px"></textarea>
				</div>
				<div class="form-group-1 mt-3">
					<button type="button" class="btn btn-primary" style="width: 100%">
						Send Your Message
					</button>
				</div>
			</div>
		</div>
	</div>

	<!-- faq start -->
	<div id="sc" class="container-xxl py-5">
		<div class="container">
			<div class="container-xxl py-5">
				<div class="container">
					<h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s" style="color: #008cee">
						FAQ
					</h1>
				</div>
				<div class="faq-item">
					<div class="question" onclick="toggleAnswer(1)">
						Bagaimana cara berdonasi di CoralGuard?
					</div>
					<i class="fas fa-chevron-down dropdown-icon"></i>
					<div class="answer" id="answer1">
						Kamu bisa berdonasi di CoralGuard dengan mendaftar akun terlebih dahulu kemudian carilah program CoralGIS atau Community untuk menelusuri halaman donasi. Setelah itu, kamu bisa mengikuti langkah-langkah pembayaran yang ada disana.
					</div>
				</div>

				<div class="faq-item">
					<div class="question" onclick="toggleAnswer(2)">
						Cara cepat mendapat jawaban selain dari Community?
					</div>
					<i class="fas fa-chevron-down dropdown-icon"></i>
					<div class="answer" id="answer2">
						Kamu bisa mendapatkan jawaban dari pertanyaanmu melalui Coral AI yang berada pada program Community. Fitur ini akan membantu kamu untuk megetahui seputar lokasi, kondisi, dan klasifikasi dari Terumbu Karang.
					</div>
				</div>
				<div class="faq-item">
					<div class="question" onclick="toggleAnswer(3)">
						Dimana menu untuk mencari wisata Terumbu Karang?
					</div>
					<i class="fas fa-chevron-down dropdown-icon"></i>
					<div class="answer" id="answer3">
						Pada CoralGuard, terdapat sub menu Adventure yang terletak pada menu Program. Disana, kami telah menyajikan beragam rekomendasi tempat wisata edukasi terumbu karang yang dapat kamu kunjungi bersama orang tersayang.
					</div>
				</div>
				<div class="faq-item">
					<div class="question" onclick="toggleAnswer(4)">
						Ada berapa banyak jenis Terumbu Karang?
					</div>
					<i class="fas fa-chevron-down dropdown-icon"></i>
					<div class="answer" id="answer4">
						Untuk mengetahui banyaknya jenis dari terumbu karang, kamu dapat mengakses menu program Biodiversity. Disana, kami telah menyajikan informasi lengkap seputar jenis, ciri-ciri, serta cara hidup terumbu karang. Selain itu, kami juga menyajikan informasi biota laut lain yang hidupnya di sekitar terumbu karang seperti ikan, krustacea, dan rumput laut.
					</div>
				</div>
			</div>

			<div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
				<div class="row g-0 text-start"></div>
			</div>
		</div>
	</div>
</div>

<script>
	function toggleAnswer(id) {
		var answer = document.getElementById("answer" + id);
		if (answer.style.display === "block") {
			answer.style.display = "none";
		} else {
			answer.style.display = "block";
		}
	}
</script>
<!-- faq end -->
</div>
<?php include "pages/partials/footer.php"; ?>