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
            include "halaman/dashboard.php";
            break;

        case "administrator":
            include "halaman/users/administrator/index.php";
            break;
        
        case "tambah-administrator":
            include "halaman/users/administrator/create.php";
            break;

        case "aksi-simpan":
            include "halaman/users/administrator/aksi/simpan.php";
            break;

        case "edit-administrator":
            include "halaman/users/administrator/update.php";
            break;

        case "data-tempat-adventure":
            include "halaman/master/tempat-adventure/index.php";
            break;

        case "tambah-tempat-adventure":
            include "halaman/master/tempat-adventure/create.php";
            break;

        case "aksi-tempat-adventure":
            include "halaman/master/tempat-adventure/aksi/aksi.php";
            break;

        case "data-jenis-bio":
            include "halaman/master/jenis-bio/index.php";
            break;

        case "tambah-jenis-bio":
            include "halaman/master/jenis-bio/create.php";
            break;

        case "aksi-jenis-bio":
            include "halaman/master/jenis-bio/aksi/aksi.php";
            break;

        case "edit-jenis-bio":
            include "halaman/master/jenis-bio/update.php";
            break;

        case "edit-tempat-adventure":
            include "halaman/master/tempat-adventure/update.php";
            break;

        case "tempat":
            include "halaman/users/tempat/index.php";
            break;

        case "tambah-tempat":
            include "halaman/users/tempat/create.php";
            break;

        case "aksi-tempat":
            include "halaman/users/tempat/aksi/index.php";
            break;

        case "edit-tempat":
            include "halaman/users/tempat/update.php";
            break;

        case "data-kategori":
            include "halaman/master/kategori/index.php";
            break;

        case "tambah-kategori":
            include "halaman/master/kategori/create.php";
            break;

        case "aksi-kategori":
            include "halaman/master/kategori/aksi/aksi.php";
            break;

        case "edit-kategori":
            include "halaman/master/kategori/update.php";
            break;
        
        case "logout":
            include "halaman/logout.php";
            break;

        case "profil-saya":
            include "halaman/setting/profil_saya/index.php";
            break;

        case "aksi-profil-saya":
            include "halaman/setting/profil_saya/aksi/aksi.php";
            break;

        case "ubah-password":
            include "halaman/setting/ubah-password/index.php";
            break;

        case "aksi-ubah-password":
            include "halaman/setting/ubah-password/aksi/aksi.php";
            break;

        case "data-biodiversity":
            include "halaman/master/biodiversity/index.php";
            break;

        case "tambah-biodiversity":
            include "halaman/master/biodiversity/create.php";
            break;

        case "aksi-biodiversity":
            include "halaman/master/biodiversity/aksi/aksi.php";
            break;

        case "edit-biodiversity":
            include "halaman/master/biodiversity/update.php";
            break;

        case "validasi-data":
            include "halaman/users/validasi-data/index.php";
            break;

        case "aksi-validasi":
            include "halaman/users/validasi-data/aksi/aksi.php";
            break;

        default:
            include "halaman/404NotFound.php";
            break;
    }

?>