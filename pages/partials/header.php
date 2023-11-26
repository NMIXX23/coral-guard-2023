<nav class="navbar navbar-expand-lg navbar-light bg-white shadow" style="padding-top: 5px; padding-bottom: 5px;">
  <div class="container">
    <!-- Add the navbar brand with your logo -->
    <a class="navbar-brand" href="#">
      <img src="./assets/img/Logogram.png" alt="Logo" style="width: 80px;"> <!-- Adjust width and height as needed -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item" style="padding-right: 20px;">
            <?php if ($_GET["page"] == "home") : ?>
              <a class="nav-link" style="color: #0089ed; font-weight: bold;" aria-current="page" href="?page=home">Home</a>
            <?php else : ?>
              <a class="nav-link" aria-current="page" href="?page=home">Home</a>
            <?php endif ?>
          </li>
          <li class="nav-item" style="padding-right: 20px;">
            <?php if ($_GET["page"] == "about") : ?>
              <a class="nav-link" style="color: #0089ed; font-weight: bold;" href="?page=about">About</a>
            <?php else : ?>
              <a class="nav-link" href="?page=about">About</a>
            <?php endif ?>
          </li>
          <li class="nav-item dropdown" style="padding-right: 20px;">
            <?php if ($_GET["page"] == "rekomendasi" || $_GET["page"] == "jenis-detail" || $_GET['page'] == "jenis" || $_GET['page'] == "detail-page" || $_GET["page"] == "komunitas" || $_GET["page"] == "koleksi-saya") : ?>
              <a class="nav-link dropdown-toggle" style="color: #0089ed; font-weight: bold;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php else : ?>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php endif ?>
                Program
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <?php if ($_GET["page"] == "detail-page" || $_GET["page"] == "jenis" || $_GET["page"] == "jenis-detail") : ?>
                      <a class="dropdown-item active" href="?page=jenis">
                        Biodiversity
                      </a>
                    <?php else : ?>
                      <a class="dropdown-item" href="?page=jenis">
                        Biodiversity
                      </a>
                    <?php endif ?>
                  </li>
                  <li>
                    <?php if ($_GET["page"] == "rekomendasi" || $_GET["page"] == "koleksi-saya") : ?>
                      <a class="dropdown-item active" href="?page=rekomendasi">Adventure</a>
                    <?php else : ?>
                      <a class="dropdown-item" href="?page=rekomendasi">Adventure</a>
                    <?php endif ?>
                  </li>
                  <li>
                    <?php if ($_GET["page"] == "komunitas") : ?>
                      <a class="dropdown-item active" href="?page=komunitas">Community</a>
                    <?php else : ?>
                      <a class="dropdown-item" href="?page=komunitas">Community</a>
                    <?php endif ?>
                  </li>
                </ul>
          </li>
          <li class="nav-item" style="padding-right: 20px;">
            <?php if ($_GET["page"] == "contact") : ?>
              <a class="nav-link" style="color: #0089ed; font-weight: bold;" href="?page=contact">Contact</a>
            <?php else : ?>
              <a class="nav-link" href="?page=contact">Contact</a>
            <?php endif ?>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              GIS
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" target="_blank" href="maps.php">GIS</a>
              </li>
              <?php if (isset($_SESSION['login'])) : ?>
                <li>
                  <a class="dropdown-item" href="?page=input-lokasi">Tambah Titik</a>
                </li>
              <?php endif ?>
            </ul>
          </li>
          <?php if (empty($_SESSION["id_member"])) : ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">
                Login
              </a>
            </li>
          <?php endif ?>
          <?php if (empty($_SESSION['id_member'])) : ?>

          <?php else : ?>
            <li class=" nav-item dropdown" style="padding-right: 20px;">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="images/<?= $_SESSION['photo'] ?>" style="border-radius: 50%; overflow: hidden; width: 30px; height: 30px;">
                <?= $_SESSION["username"] ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="?page=profil-saya">Profil Saya</a>
                </li>
                <li>
                  <a onclick="return confirm('Yakin ? Ingin Keluar Dari Website Ini ?')" class="dropdown-item" href="?page=logout">Logout</a>
                </li>
              </ul>
            </li>
          <?php endif ?>
        </ul>
      </div>
    </div>
</nav>