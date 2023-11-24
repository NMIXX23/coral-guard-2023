<section id="forget-password">
    <div class="w-50 m-auto">
        <div class="card">
            <div class="card-body">
                <div class="card-wrapper">
                    <h2>Verifikasi</h2>
                    <p>Masukkan 4 digit kode yang Anda terima di email Anda.</p>

                    <form action="" method="POST" class="mb-5">
                        <div class="row mb-5 mt-5 justify-content-center">
                            <div class="col-md-2">
                                <input type="text" name="digit_1" class="form-control custom-input text-center fw-bold" required>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="digit_2" class="form-control custom-input text-center fw-bold" required>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="digit_3" class="form-control custom-input text-center fw-bold" required>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="digit_4" class="form-control custom-input text-center fw-bold" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="verifikasi" class="button-lanjut">VERIFIKASI</button>
                        </div>
                    </form>

                    <p class="kirim-ulang">Jika Anda tidak menerima kode!<br/> <a href="?page=forget-password">Kirim ulang</a></p>
                </div>
               
            </div>
        </div>
    </div>
</section>

<?php
if(isset($_POST['verifikasi']))
{
    $digit_1 = $_POST['digit_1'];
    $digit_2 = $_POST['digit_2'];
    $digit_3 = $_POST['digit_3'];
    $digit_4 = $_POST['digit_4'];

    $reset->setCode($digit_1.$digit_2.$digit_3.$digit_4);

    $reset->verifikasi();
}
?>
