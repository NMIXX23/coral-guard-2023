<?php
if(isset($_POST['update']))
{   
    $reset->updatePassword($_POST['password']);
}
?>

<section id="forget-password">
    <div class="w-50 m-auto">
        <div class="card">
            <div class="card-body">
                <div class="card-wrapper">
                    <h2>Password Baru</h2>
                    <p>Tetapkan kata sandi baru untuk akun Anda sehingga Anda dapat masuk dan mengakses semua fitur.</p>

                    <form action="" method="POST">
                        <div class="form-group mb-3">
                            <label for="">Masukan Password Baru</label>
                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control custom-input" placeholder="Minimal 8 Karakter" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2"><i class="fa fa-eye"></i></span>
                            </div>
                            <span id="error-password"></span>
                        </div>

                        <div class="form-group mb-5">
                            <label for="">Confirm Password</label>
                            <div class="input-group mb-3">
                                <input type="password" name="confirm-password" class="form-control custom-input" placeholder="Minimal 8 Karakter" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2"><i class="fa fa-eye-slash"></i></span>
                            </div>
                            <span id="confirm-password"></span>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="update" class="button-lanjut">PERBAHARUI PASSWORD</button>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        // Disable the submit button by default
        $('button[name="update"]').prop('disabled', true);

        // Function to validate the password and enable the button
        function validatePassword() {
            var password = $('input[name="password"]').val();
            var confirmPassword = $('input[name="confirm-password"]').val();

            // Check if the password has at least 8 characters
            if (password.length >= 8) {
                // Check if the password and confirm password match
                $('#error-password').html("");
                if (password === confirmPassword) {
                    // Enable the submit button
                    $('#confirm-password').html("");
                    $('button[name="update"]').prop('disabled', false);
                } else {
                    // Passwords do not match, disable the button
                    $('button[name="update"]').prop('disabled', true);
                    $('#confirm-password').html("Password Tidak Cocok");
                    $('#confirm-password').css({"color": "red", "font-size" : "12px"})
                }
            } else {
                // Password length is less than 8 characters, disable the button
                $('button[name="update"]').prop('disabled', true);
                $('#error-password').html("Minimal 8 Karakter");
                $('#error-password').css({"color": "red", "font-size" : "12px"})
            }
        }

        // Bind the input fields to the validation function
        $('input[name="password"], input[name="confirm-password"]').on('input', validatePassword);
    });
</script>
