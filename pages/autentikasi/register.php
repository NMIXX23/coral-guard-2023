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
                    <p>Have an Account? <br/><a href="?page=login">Sign In</a></p>
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

<?php

if(isset($_POST['register'])) {
    $email = $_POST["email"];
    $username = $_POST['username'];
    $password = mysqli_real_escape_string($con, $_POST["password"]);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $contact = $_POST["contact"];

    $query = $con->query("INSERT INTO t_users (username, email, password, role, nomor_hp, active) VALUES ('$username', '$email', '$password', 'MEMBER', '$contact', 1)");

    if ($query != 0) {
        echo "<script>alert('Akun Anda Berhasil di Daftarkan');</script>";
        echo "<script>window.location.replace('?page=login');</script>";
    } else {
        echo "<script>alert('Akun Anda Gagal di Daftarkan');</script>";
        echo "<script>window.location.replace('?page=register');</script>";
    }
}
?>