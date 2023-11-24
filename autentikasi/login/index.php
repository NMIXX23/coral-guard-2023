<?php
include "../../config/koneksi.php";
session_start();

if (isset($_SESSION["login"])) {
    echo "<script>alert('Maaf, Anda Harus Logout Terlebih Dahulu');</script>";
    if (!empty($_SESSION["role"] == "ADMIN")) {
        echo "<script>window.location.replace('../../admin/?page=dashboard');</script>";
    } else if (!empty($_SESSION["role"] == "TEMPAT")) {
        echo "<script>window.location.replace('../../tempat/?page=dashboard');</script>";
    } else if (!empty($_SESSION["role"] == "PEMILIK")) {
        echo "<script>window.location.replace('../../tempat/?page=dashboard');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Aplikasi - Coral Guard</title>
    <!-- <link rel="icon" type="image/png" href="images/logo-polindra.png" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/style.css" />

</head>

<body>

    <section id="login">
        <header>
            <a href="../../index.php">
                <img src="../../assets/img/logo.png" alt="Logo">
            </a>
        </header>

        <div class="container">
            <div class="form-login">
                <div class="row">
                    <div class="col-md-9">
                        <h5>Welcome to
                            <a href="../../index.php">CoRalGuard</a>
                        </h5>
                    </div>
                    <!-- <div class="col-md-3">
                        <p>
                            No Account?
                            <a href="register.php">Sign Up</a>
                        </p>
                    </div> -->
                    <div class="col-md-12">
                        <h1>Sign In</h1>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-12">
                        <form action="proses.php" method="POST">
                            <div class="form-group mb-4">
                                <label for="email" class="mb-2">Enter your username or email address</label>
                                <input type="text" name="email" class="form-control custom-input" placeholder="Email Address">
                            </div>

                            <div class="form-group">
                                <label for="password" class="my-2">Enter your password</label>
                                <input type="password" name="password" class="form-control custom-input" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <p class="float-end mt-2">
                                    <a href="?page=forget-password">Forget Password</a>
                                </p>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="btn-login" class="button-login">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- <div style="margin-top: 60px"></div>
    <div class="row p-0 m-0" style="justify-content: center; align-items: center;">
        <div class="col-md-5">

            <div class="card">
                <form action="proses.php" method="POST">
                    <div class="card-body">
                        <h4 class="text-center" style="margin-top: 20px">
                            Website Terumbu Karang
                            <br> Coral Guard
                        </h4>
                        <h6 class="text-center" style="color: gray">
                            Silahkan Login Terlebih Dahulu
                        </h6>

                        <div class="form-group">
                            <label for="email">E - MAIL</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan E - Mail">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="password">KATA SANDI</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" data-eye>
                        </div>
                        <div class="form-group pull-right mt-2 mb-2">
                            <a target="_blank" href="">
                                Lupa Password ?
                            </a>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg" name="btn-login" style="width: 100%; background-color: #00A0F0">
                            Masuk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200
            });
            // $(".my-login-validation").submit(function() {
            //     var form = $(this);
            //     if (form[0].checkValidity() === false) {
            //         event.preventDefault();
            //         event.stopPropagation();
            //     }
            //     form.addClass('was-validated');
            // });
        });
    </script>
</body>

</html>