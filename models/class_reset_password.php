<?php
class ResetPassword{
    private $id;
    private $user_email;
    private $code;
    private $expiration_timestamp;

    public function __construct() {
        $this->db = new Connection();
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUserEmail() {
        return $this->user_email;
    }

    public function setUserEmail($user_email) {
        $this->user_email = $user_email;
    }

    public function getCode() {
        return $this->code;
    }

    public function setCode($code) {
        $this->code = $code;
    }

    public function getExpirationTimestamp() {
        return $this->expiration_timestamp;
    }

    public function setExpirationTimestamp($expiration_timestamp) {
        $this->expiration_timestamp = $expiration_timestamp;
    }

    public function resetPassword()
    {
        date_default_timezone_set("Asia/Jakarta");
        // Get a database connection
        $koneksi = $this->db->getMysqli();

        $email = $this->getUserEmail();
        $code = $this->getCode();

        // Get the current timestamp and add one minute
        $expirationDateTime = new DateTime();
        $expirationDateTime->add(new DateInterval('PT1M'));
        $updatedExpirationTimestamp = $expirationDateTime->format('Y-m-d H:i:s');

        // Check if the user's email exists in the reset_password table
        $query = $koneksi->prepare("SELECT user_email FROM reset_password WHERE user_email = ?");
        $query->bind_param("s", $email);
        $query->execute();
        $query->store_result();
        $row = $query->num_rows;

        if ($row) {
            // Update the existing reset password entry
            $sql = "UPDATE reset_password SET code=?, expiration_timestamp=? WHERE user_email=?";
        } else {
            // Insert a new reset password entry
            $sql = "INSERT INTO reset_password (code, expiration_timestamp, user_email) VALUES (?, ?, ?)";
        }

        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("sss", $code, $updatedExpirationTimestamp, $email);

        if ($stmt->execute()) {
            // Reset password entry updated or created successfully
            redirectJS("?page=verifikasi");
        } else {
            // Error occurred
            redirectJS("?page=verifikasi");
        }

        $stmt->close();
    }

    public function verifikasi()
    {
        $code = $this->getCode();
        
        // Get a database connection
        $koneksi = $this->db->getMysqli();

        // Prepare a SQL query to retrieve the code and expiration_timestamp
        $sql = "SELECT code, expiration_timestamp FROM reset_password WHERE code = ?";
        
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("s", $code);
        
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                $expirationTimestamp = $row['expiration_timestamp'];

                // Get the current timestamp
                $currentTimestamp = date('Y-m-d H:i:s');

                // Convert the timestamps to DateTime objects
                $expirationDateTime = new DateTime($expirationTimestamp);
                $currentDateTime = new DateTime($currentTimestamp);

                // Compare the two timestamps
                if ($expirationDateTime > $currentDateTime) {
                    // The token is still valid.
                    session_start();
                    $_SESSION['code'] = $code;
                    redirectJS("?page=new-password");
                } else {
                    // The token has expired.
                    echo "<script>alert('Verification Code Expired')</script>";
                    redirectJS("?page=reset-password");
                }
            } else {
                // Token not found in the database
                echo "<script>alert('Verification Code Invalid')</script>";
                redirectJS("?page=verfikasi");
            }
        } else {
            // Error occurred while executing the query
            echo "<script>alert('Terjadi Kelasalah')</script>";
            redirectJS("?page=verifikasi");
        }

        $stmt->close();
    }

    public function updatePassword($password)
    {
        // Get a database connection
        $koneksi = $this->db->getMysqli();

        $code = $_SESSION['code'];

        if (!$code) {
            echo "<script>alert('Terjadi Kesalahan')</script>";
            redirectJS("?page=forget-password");
        }

        // Prepare a SQL query to retrieve the user's email from reset_password table
        $query = $koneksi->prepare("SELECT user_email FROM reset_password WHERE code = ? LIMIT 1");
        $query->bind_param("s", $code);

        if ($query->execute()) {
            $query->store_result();

            if ($query->num_rows === 1) {
                $query->bind_result($email);
                $query->fetch();

                // Prepare the SQL statement to update the user's password
                $sql = "UPDATE users SET `password` = ? WHERE email = ?";
                $stmt = $koneksi->prepare($sql);
                $stmt->bind_param("ss", $password, $email);

                if ($stmt->execute()) {
                    // Password updated successfully
                    redirectJS("?page=berhasil");
                } else {
                    // Error occurred during the password update
                    echo "<script>alert('Terjadi Kesalahan')</script>";
                    redirectJS("?page=new-password");
                }

                $stmt->close();
            } else {
                // Code not found in the reset_password table
                echo "<script>alert('Kode tidak ditemukan')</script>";
                redirectJS("?page=forget-password");
            }
        } else {
            // Error occurred while executing the query
            echo "<script>alert('Terjadi Kesalahan')</script>";
            redirectJS("?page=forget-password");
        }

        $query->close();
    }


}
?>