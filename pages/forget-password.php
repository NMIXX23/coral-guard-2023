<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

if (isset($_POST['lanjut'])) {
    require './vendor/autoload.php'; // Assuming the PHPMailer library is in the same directory as your script

    $email = $_POST['email'];
    $code = rand(1000, 9999);

    
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.ethereal.email';
        $mail->SMTPAuth = true;
        $mail->Username = 'dorothea.hauck@ethereal.email';
        $mail->Password = 'h8RpkZN4zRK6QwQbyP';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
     
        $mail->setFrom('noreply@coralguard.com', 'CoralGuard');           
        $mail->addAddress($email);
          
        $mail->isHTML(true);                                  
        $mail->Subject = 'Verification Code';
        $mail->Body = 'This is your verification code: <b>'.$code.'</b> ';
        $mail->AltBody = 'This is your verification code:'.$code;
        $mail->send();

        $reset->setUserEmail($email);
        $reset->setCode($code);
        $reset->resetPassword();

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>


<section id="forget-password">
    <div class="w-50 m-auto">
        <div class="card">
            <div class="card-body">
                <div class="card-wrapper">
                    <h2>Lupa Password</h2>
                    <p>Masukkan email Anda untuk proses verifikasi, kami akan mengirimkan kode 4 digit ke email Anda.</p>

                    <form action="" method="POST">
                        <div class="form-group mb-5">
                            <label for="">Email</label>
                            <input type="email" name="email" placeholder="Masukkan Email Anda" required autocomplete="off" class="form-control custom-input" required />
                        </div>

                        <div class="form-group">
                            <button type="submit" name="lanjut" class="button-lanjut">LANJUTKAN</button>
                        </div>
                    </form>
                </div>   
            </div>
        </div>
    </div>
</section>