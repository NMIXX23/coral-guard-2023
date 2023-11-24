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

        case "profil-tempat":
            include "halaman/profil-tempat/index.php";
            break;

        case "data-tempat":
            include "halaman/master/tempat/index.php";
            break;

        case "tambah-tempat":
            include "halaman/master/tempat/create.php";
            break;

        case "aksi-tempat":
            include "halaman/master/tempat/aksi/aksi.php";
            break;

        case "edit-tempat":
            include "halaman/master/tempat/update.php";
            break;

        case "aksi-simpan":
            include "halaman/users/administrator/aksi/simpan.php";
            break;

        case "tempat":
            include "halaman/users/tempat/index.php";
            break;

        case "aksi-tempat":
            include "halaman/users/tempat/aksi/index.php";
            break;
        
        case "data-coral":
            include "halaman/master/coral/index.php";
            break;

        case "tambah-coral":
            include "halaman/master/coral/create.php";
            break;

        case "aksi-coral":
            include "halaman/master/coral/aksi/aksi.php";
            break;

        case "edit-coral":
            include "halaman/master/coral/update.php";
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

        case "logout":
            include "halaman/logout.php";
            break;

        default:
            include "halaman/404NotFound.php";
            break;
    }

?>