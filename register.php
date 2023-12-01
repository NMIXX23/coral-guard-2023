<?php
    session_start();
    include "config/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coral Guard</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css"/>
</head>
<body>

<section id="login">
    <header>
        <a href="./index.php">
            <img src="./assets/img/logo.png" alt="Logo">
        </a>
    </header>

    <div class="container">
        <div class="form-login">
            <div class="row">
                <div class="col-md-8">
                    <h5>Welcome to
                        <a href="../index.php">CoRalGuard</a>
                    </h5>
                </div>
                <div class="col-md-4">
                    <p>Have an Account? <br/>
                        <a href="login.php">Sign In</a>
                    </p>
                </div>
                <div class="col-md-12">
                    <h1>Sign Up</h1>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <form  method="POST">
                        <div class="form-group mb-3">
                            <label for="" class="mb-2">Enter your Email address</label>
                            <input type="text" name="email" class="form-control custom-input" placeholder="Email address">
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="my-2">Username</label>
                                    <input type="text" name="username" class="form-control custom-input" placeholder="Username">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="my-2">Contact Number</label>
                                    <input type="text" name="contact" class="form-control custom-input" placeholder="Contact Number">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mb-5">
                            <label for="" class="my-2">Enter your password</label>
                            <input type="password" name="password" class="form-control custom-input" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <button type="submit" name="register" class="button-login">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200
            });
        });
    </script>
</body>
</html>

<?php

if(isset($_POST['register'])) {
    $email = $_POST["email"];
    $username = $_POST['username'];
    $password = mysqli_real_escape_string($con, $_POST["password"]);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $contact = $_POST["contact"];

    $query = $con->query("INSERT INTO t_users (username, email, password, role, nomor_hp, active) VALUES ('$username', '$email', '$password', 'MEMBER', '$contact', 1)");

    $lastInsertId = $con->insert_id;

    $query = $con->query("INSERT INTO t_member (user_id) VALUES ('$lastInsertId') ");

    $_SESSION['id_member'] = $lastInsertId;

    if ($query != 0) {
        echo "<script>alert('Akun Anda Berhasil di Daftarkan');</script>";
        echo "<script>window.location.replace('./?page=profil-saya');</script>";
    } else {
        echo "<script>alert('Akun Anda Gagal di Daftarkan');</script>";
        echo "<script>window.location.replace('register.php');</script>";
    }
}
?>