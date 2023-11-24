<?php
session_start();
include "config/koneksi.php";

if (isset($_SESSION['login']) && $_SESSION['login']) {
    echo "<script>alert('Maaf, Anda Harus Logout Terlebih Dahulu');</script>";
    // echo "<script>window.location.replace('./?page=home');</script>";
    header('location: ./?page=home', true, 301);
    exit;
}
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
    <link rel="stylesheet" href="./assets/css/style.css" />
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
                    <div class="col-md-9">
                        <h5>Welcome to
                            <a href="../index.php">CoRalGuard</a>
                        </h5>
                    </div>
                    <div class="col-md-3">
                        <p>
                            No Account?
                            <a href="register.php">Sign Up</a>
                        </p>
                    </div>
                    <div class="col-md-12">
                        <h1>Sign In</h1>
                    </div>
                </div>

                <div class="row my-5">
                    <div class="col-md-12">
                        <form method="POST">
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
                                <button type="submit" name="login" class="button-login">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
                <a href="./" class="btn">Back</a>
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
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $con->query("SELECT * FROM t_users WHERE email = '$email' OR username = '$email' LIMIt 1");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {
            $_SESSION['login'] = true;
            $_SESSION["username"] = $row["username"];
            $_SESSION["photo"] = $row["photo"];

            echo "<script>alert('Selamat, Anda Berhasil Login');</script>";

            if ($row["role"] == "MEMBER") {

                $_SESSION["id_member"] = $row["id"];
                $_SESSION['role'] = "MEMBER";
                $_SESSION['member'] = true;
                // echo "<script>window.location.replace('./?page=home');</script>";
            }
            header('location: ./?page=home', true, 301);
            exit;
        } else {
            echo "<script>alert('Maaf, Password Anda Salah');</script>";
        }
    } else {
        echo "<script>alert('Maaf, Akun Email Anda Tidak Ditemukan');</script>";
        // echo "<script>window.location.replace('?page=login')</script>";
        header('location: ./login.php');
        exit;
    }
}
?>