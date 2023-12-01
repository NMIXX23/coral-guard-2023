<?php
$actor = [
    'Ahli',
    'Warga',
    'Nelayan'
];

$category = [
    'Story',
    'Question',
    'Information',
];
?>

<?php include "partials/header.php"; ?>

<div style="background-color: white;">
    <!-- Carousel Start -->
    <div class="container-fluid p-0" style="background-image: url('images/home.jpeg'); background-size: cover; background-repeat: no-repeat; width: 100%; height: 885px; background-position: center;">
        <center style="padding-top: 100px;">
            <div class="row justify-content-end" style="margin-top: 100px">
                <div class="col-10 col-lg-8">
                    <h3 class="display-3 text-white animated slideInDown mb-6 text-end" style="margin-right: 150px; font-size: 100px">
                        CoralGuard
                    </h3>
                    <p class="fw-medium text-white mb-6 pb-2 text-end" style="margin-right: 150px; font-size: 30px">
                        Jelajahi Keajaiban Terumbu Karang Indonesia, salah satu
                        Ekosistem Laut yang Menyimpan Keindahan Hidup, Energi, dan
                        Potensi Tersembunyi!
                    </p>
                </div>
            </div>
        </center>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center" style="margin-left: 50px">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid width-100" src="./assets/img/content.png" style="max-width: 440px" />
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-0 text-start" style="margin-right: 50px">
                        <h1 class="mb-4" style="color: #008cee">CoralGuard</h1>
                        <p>
                            Selamat datang di CoralGuard, portal eksplorasi keajaiban
                            terumbu karang di Indonesia! Portal ini akan membuka pintu
                            menuju ekosistem laut yang penuh misteri, di mana kehidupan
                            yang beragam dan keindahan tak tergambarkan bersatu dalam
                            harmoni. Ayo, Jadilah bagian kami sebagai upaya untuk
                            melindungi ekosistem terumbu karang yang sangat berharga demi
                            masa depan laut Indonesia!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Search Start -->
    <div id="search" class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px">
        <div class="container">
            <form action="search.php#search" method="get">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-9">
                                <input name="keyword" id="keyword" type="text" class="form-control border-0" placeholder="Masukan kata kunci" style="border-radius: 10px" />
                            </div>
                            <div class="col-md-3">
                                <select name="kategori" id="kategori" class="form-select border-0" style="border-radius: 10px">
                                    <option selected>Kategori</option>
                                    <option value="Biodiversity">Biodiversity</option>
                                    <option value="Power">Power</option>
                                    <option value="Adventure">Adventure</option>
                                    <option value="Conservation">GIS</option>
                                    <option value="Community">Community</option>
                                    <option value="E-Books">E-Books</option>
                                    <option value="E-Books">News</option>
                                    <option value="E-Books">Cultivation</option>
                                    <option value="E-Books">Disease</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" value="Cari" class="btn btn-dark border-0 w-100" style="border-radius: 10px">
                            Cari
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Category Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                Jelajahi Berdasarkan Kategori
            </h1>
            <div class="row">
                <div class="col-md-4 col-sm-6 fadeInUp mb-3" data-wow-delay="0.1s">
                    <a class="cat-item rounded p-3" href="?page=jenis" style="background-color: white;">
                        <img src="./assets/img/icon/Clown-Fish.png" alt="Biodiversity" />
                        <h5 class="mb-3">Biodiversity</h5>
                        <p class="mb-0">10 Informasi Terbaru</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item rounded p-3" href="" style="background-color: white;">
                        <img src="./assets/img/icon/Lightning-Bolt.png" alt="Power" />
                        <h5 class="mb-3">Power</h5>
                        <p class="mb-0">12 Informasi Terbaru</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fadeInUp" data-wow-delay="0.3s">
                    <a class="cat-item rounded p-3" href="?page=rekomendasi" style="background-color: white;">
                        <img src="./assets/img/icon/Snorkel.png" alt="Adventure" />
                        <h5 class="mb-3">Adventure</h5>
                        <p class="mb-0">20 Informasi Terbaru</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fadeInUp mb-3" data-wow-delay="0.5s">
                    <a class="cat-item rounded p-3" a href="" style="background-color: white;">
                        <img src="./assets/img/icon/Gis.png" alt="GIS" />
                        <h5 class="mb-3">GIS</h5>
                        <p class="mb-0">5 Informasi Terbaru</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item rounded p-3" href="?page=komunitas" style="background-color: white;">
                        <img src="./assets/img/icon/User-Groups.png" alt="Community" />
                        <h5 class="mb-3">Community</h5>
                        <p class="mb-0">9 Informasi Terbaru</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item rounded p-3" href="" style="background-color: white;">
                        <img src="./assets/img/icon/Knowledge-Sharing.png" alt="E-Books" />
                        <h5 class="mb-3">E-Books</h5>
                        <p class="mb-0">2 Informasi Terbaru</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item rounded p-3" href="" style="background-color: white;">
                        <img src="./assets/img/icon/News.png" alt="News" />
                        <h5 class="mb-3">News</h5>
                        <p class="mb-0">6 Informasi Terbaru</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item rounded p-3" href="organisasi.php" style="background-color: white;">
                        <img src="./assets/img/icon/Prabu.png" alt="Cultivation" />
                        <h5 class="mb-3">Cultivation</h5>
                        <p class="mb-0">8 Informasi Terbaru</p>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 fadeInUp" data-wow-delay="0.7s">
                    <a class="cat-item rounded p-3" href="organisasi.php" style="background-color: white;">
                        <img src="./assets/img/icon/Penyakit.png" alt="Disease" />
                        <h5 class="mb-3">Disease</h5>
                        <p class="mb-0">3 Informasi Terbaru</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Category End -->

    <!-- Founder Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s" style="color: #008cee">
                Founder CoralGuard
            </h1>
            <div class="row g-4">
                <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item-ca" href="akademik.php">
                        <img src="./assets/img/nisi.jpeg" alt="Nisrina Ishmah" class="fit-image" />
                    </a>
                    <div style="
                  align-items: center;
                  margin-top: 20px;
                  margin-right: 40px;
                  text-align: center;
                ">
                        <h5 class="mb-0" style="color: #008cee">Nisrina Ishmah</h5>
                        <p class="mb-0" style="color: #008cee">J0303211111</p>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item-ca" href="nonakademik.php">
                        <img src="./assets/img/yasir.jpeg" alt="Muhammad Yasir Amri" class="fit-image" />
                        <div style="
                    align-items: center;
                    margin-top: 20px;
                    text-align: center;
                  ">
                            <h5 style="color: #008cee">Muhammad Yasir</h5>
                            <p class="mb-0">J0303211100</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item-ca" href="nonakademik.php">
                        <img src="./assets/img/kinop.jpeg" alt="Rizki Novian" class="fit-image" />
                    </a>
                    <div style="
                  align-items: center;
                  margin-top: 20px;
                  margin-right: 40px;
                  text-align: center;
                ">
                        <h5 class="mb-0" style="color: #008cee">Rizki Novian</h5>
                        <p class="mb-0" style="color: #008cee">J0303211057</p>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item-ca" href="nonakademik.php">
                        <img src="./assets/img/afi.jpeg" alt="Huriya Afifah" class="fit-image" />
                    </a>
                    <div style="
                  align-items: center;
                  margin-top: 20px;
                  margin-right: 40px;
                  text-align: center;
                ">
                        <h5 class="mb-0" style="color: #008cee">Huriya Afifah</h5>
                        <p class="mb-0" style="color: #008cee">X1004231170</p>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item-ca" href="nonakademik.php">
                        <img src="./assets/img/wadiah.jpeg" alt="Wadiaah Nurfadhlah" class="fit-image" />
                    </a>
                    <div style="
                  align-items: center;
                  margin-top: 20px;
                  margin-right: 40px;
                  text-align: center;
                ">
                        <h5 class="mb-0" style="color: #008cee">Wadiaah Nurfadhlah</h5>
                        <p class="mb-0" style="color: #008cee">X1003231011</p>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="cat-item-ca" href="nonakademik.php">
                        <img src="./assets/img/sepri.jpeg" alt="Josepri Jamal" class="fit-image" />
                    </a>
                    <div style="
                  align-items: center;
                  margin-top: 20px;
                  margin-right: 40px;
                  text-align: center;
                ">
                        <h5 class="mb-0" style="color: #008cee">Josepri Jamal</h5>
                        <p class="mb-0" style="color: #008cee">X1004231186</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Start -->
    <div>
        <div class="container">
            <p class="mb-4 text-center" style="margin-left: 325px; margin-right: 325px">
                "Sebagai pendiri CoralGuard, kami dari NMIXX TEAM merasa sangat
                bersyukur dan bahagia karena telah berhasil membuat platform yang
                siap menginspirasi masyarakat untuk lebih menghargai dan peduli
                terhadap terumbu karang di Indonesia. Ini adalah langkah penting
                dalam menjaga kekayaan alam bawah laut kita, kami berkomitmen untuk
                terus memupuk semangat pelestarian serta meningkatkan kesadaran akan
                keindahan ekosistem ini."
            </p>
            <p class="mb-4 text-center">-Nisrina Ishmah (Project Manager)</p>
            <!-- <p>Visi:</p>
          <p>
            <i class="fa fa-check text-primary p-6"></i>Mewujudkan KM Vokasi
            yang adaptif, unggul, dan harmonis dalam menciptakan Sekolah Vokasi
            IPB #SemakinJuara
          </p> -->
            <!-- <br />
              <p>Misi:</p>
              <p>
                <i class="fa fa-check text-primary p-6"></i>Merangkai
                Pengembangan
              </p>
              <p>
                <i class="fa fa-check text-primary me-3"></i>Merangkai
                Kesejahteraan
              </p>
              <p>
                <i class="fa fa-check text-primary me-3"></i>Merangkai
                Internalisasi
              </p>
              <p>
                <i class="fa fa-check text-primary me-3"></i>Merangkai
                Pergerakan
              </p>
              <a class="btn btn-primary py-3 px-5 mt-3" href="about.html#bem"
                >Lihat Selengkapnya</a
              >
              </p> -->
        </div>
    </div>
    <!-- About End -->
    <div style="background-color: white;">

        <?php include "partials/footer.php"; ?>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg card-style">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">POST</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row form-group mb-3">
                                <label for="" class="col-md-3 post-label">Judul *</label>
                                <div class="col-md-9">
                                    <input type="text" name="title" class="form-control custom-input-post" placeholder="Judul" required>
                                </div>
                            </div>

                            <div class="row form-group mb-3">
                                <label for="" class="col-md-3 post-label">Category *</label>
                                <div class="col-md-9">
                                    <select name="category" class="form-control custom-input-post" required>
                                        <option value="">--Pilih--</option>
                                        <?php
                                        foreach ($category as $categoryName) {
                                            echo '<option value="' . $categoryName . '">' . $categoryName . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group mb-3">
                                <label for="" class="col-md-3 post-label">Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control custom-input-post" placeholder="Judul">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="content" id="summernote" cols="30" rows="10" class="form-control custom-input-post" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="save" class="w-100 button-post" data-bs-dismiss="modal">Publish Your Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php
        if (isset($_POST['save'])) {
            echo $posts->setTitle($_POST['title']);
            echo $posts->setCategory($_POST['category']);
            echo $posts->setContent($_POST['content']);

            $posts->postContent();
        }
        ?>