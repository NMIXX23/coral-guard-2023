<?php
if (isset($_GET["page"])) {
	$page = $_GET["page"];
} else {
	$page = "dashboard";
}
?>

<?php
switch ($page) {
	case "dashboard":
		include "pages/landing.php";
		break;

	case "home":
		include "pages/home.php";
		break;

	case "program":
		include "pages/program.php";
		break;

	case "program-detail":
		include "pages/program-detail.php";
		break;

	case "detail-page":
		include "pages/jenis/page.php";
		break;

	case "about":
		include "pages/about.php";
		break;

	case "kategori-detail":
		include "pages/jenis-detail.php";
		break;

	case "detail-tempat":
		include "pages/detail-tempat.php";
		break;

	case "contact":
		include "pages/contact.php";
		break;

	case "rekomendasi":
		include "pages/program.php";
		break;

	case "post-now":
		include "pages/post/index.php";
		break;

	case "aksi-post-now":
		include "pages/post/aksi/index.php";
		break;

	case "jenis":
		include "pages/jenis/index.php";
		break;

	case "jenis-detail":
		include "pages/jenis/detail.php";
		break;

	case "jenis-detail-all":
		include "pages/jenis/all.php";
		break;

	case "profil-saya":
		include "pages/profil/index.php";
		break;

	case "password-reset":
		include "pages/profil/password-reset.php";
		break;

	case "komunitas":
		include "pages/komunitas/index.php";
		break;

	case "aksi-koleksi":
		include "pages/aksi/index.php";
		break;

	case "koleksi-saya":
		include "pages/koleksi-saya/index.php";
		break;

	case "login";
		include "pages/autentikasi/login.php";
		break;

	case "register";
		include "pages/autentikasi/register.php";
		break;

	case "logout";
		include "pages/autentikasi/logout.php";
		break;

	case "profile":
		include "pages/profile.php";
		break;

	case "maps":
		include "pages/maps.php";
		break;

	case "input-lokasi":
		include "pages/input-lokasi.php";
		break;

	case "donasi":
		include "pages/donasi.php";
		break;


	default:
		echo "404 Not Found";
		break;
}
?>