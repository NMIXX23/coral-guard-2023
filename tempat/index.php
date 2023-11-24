<?php
    include "../config/koneksi.php";
    session_start();

    if (!isset($_SESSION["login"])) {
        echo "<script>alert('Maaf, Anda Harus Login Terlebih Dahulu');</script>";
        echo "<script>window.location.href='../autentikasi/login/'</script>";
    } else {
        if (isset($_SESSION["role"]) && ($_SESSION["role"] != "TEMPAT" && $_SESSION["role"] != "PEMILIK")) {
            echo "<script>alert('Maaf, Anda Tidak Memiliki Akses');</script>";
            echo "<script>window.location.replace('../admin/?page=dashboard');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        CORAL GUARD
    </title>

    <?php include "partials/css/style.php" ?>

</head>

<body id="page-top">
    <div id="wrapper">
        
        <?php include "partials/sidebar/sidebar.php" ?>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <?php include "partials/header/top-bar.blade.php" ?>

                <div class="container-fluid">
                    
                    <?php 
                        require "module/halaman.php";
                    ?>

                </div>
            </div>
            <?php include "partials/footer/footer.php" ?>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php include "partials/modal-logout/modal.php" ?>

    <?php include "partials/javascript/style.php" ?>

</body>

</html>