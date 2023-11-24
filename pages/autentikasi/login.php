<?php
session_start();

?>

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

            <div class="row mt-5">
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

<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $con->query("SELECT * FROM t_users WHERE email = '$email' LIMIt 1");

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
        header('location: ./?page=login');
        exit;
    }
}
?>