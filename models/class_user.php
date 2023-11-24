<?php
class User {
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $username;
    private $address;
    private $contact;
    private $city;
    private $province;
    private $password;
    private $role;
    private $db;

    public function __construct() {
        $this->db = new Connection();
    }

    // Getter methods
    public function getId() {
        return $this->id;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getContact() {
        return $this->contact;
    }

    public function getCity() {
        return $this->city;
    }

    public function getProvince() {
        return $this->province;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRole() {
        return $this->role;
    }

    // Setter methods
    public function setId($id) {
        $this->id = $id;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setContact($contact) {
        $this->contact = $contact;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function setProvince($province) {
        $this->province = $province;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function register() {
        // Get a database connection
        $koneksi = $this->db->getMysqli();

        // Retrieve user properties using getters
        $email = $this->getEmail();
        $username = $this->getUsername();
        $contact = $this->getContact();
        $password = $this->getPassword();

        // Prepare the SQL statement
        $sql = "INSERT INTO users (email, username, contact, `password`) VALUES (?, ?, ?, ?)";

        // Prepare the SQL statement
        $stmt = $koneksi->prepare($sql);

        if ($stmt === false) {
            die("Error: " . $koneksi->error);
        }

        // Bind parameters and execute the query
        $stmt->bind_param("ssss", $email, $username, $contact, $password);

        if ($stmt->execute()) {
            echo "<script>alert('Pendaftaran Berhasil')</script>";
            redirectJS("?page=login");
        } else {
            echo "<script>alert('Pendaftaran Gagal')</script>";
            redirectJS("?page=register");
        }

        // Close the statement
        $stmt->close();
    }

    public function login($email_or_username, $password)
    {
        // Get a database connection
        $koneksi = $this->db->getMysqli();

        $sql = "SELECT * FROM users WHERE username='".$email_or_username."'  AND password='".$password."' OR email='".$email_or_username."'  AND password='".$password."'";
		$query = $koneksi->query($sql);
        $row = $query->num_rows;
        
		return $row;
    }

    public function getUserData($email_or_username, $field)
    {
        // Get a database connection
        $koneksi = $this->db->getMysqli();

        $sql = "SELECT * FROM users WHERE username='".$email_or_username."' OR email='".$email_or_username."' LIMIT 1";
        $query = $koneksi->query($sql);

        $data = $query->fetch_array();

        if($field == 'username'){
            return $data['username'];
        } else if($field == 'email') {
            return $data['email'];
        } else if($field == 'id'){
            return $data['id'];
        } 
    }

    public function getUserDataById($id, $field) {
        
        $koneksi = $this->db->getMysqli();

        $sql = "SELECT * FROM users WHERE id='$id' LIMIT 1";
        $query = $koneksi->query($sql);

        $data = $query->fetch_array();

        if($field == 'username'){
            return $data['username'];
        } else if($field == 'email') {
            return $data['email'];
        } else if($field == 'id'){
            return $data['id'];
        } else if($field == 'contact'){
            return $data['contact'];
        } else if($field == 'firstname'){
            return $data['firstname'];
        } else if($field == 'lastname'){
            return $data['lastname'];
        } else if($field == 'address'){
            return $data['address'];
        } else if($field == 'city'){
            return $data['city'];
        } else if($field == 'province'){
            return $data['province'];
        } else if($field == 'role'){
            return $data['role'];
        }
    }

    public function updateProfile() {
        // Get a database connection
        $koneksi = $this->db->getMysqli();
        
        // Retrieve the user's ID (if available) using a getter method
        $userId = $this->getId();
        $email = $this->getEmail();
        $firstname = $this->getFirstname();
        $lastname = $this->getLastname();
        $username = $this->getUsername();
        $contact = $this->getContact();
        $password = $this->getPassword();
        $address = $this->getAddress();
        $city = $this->getCity();
        $province = $this->getProvince();
        $role = $this->getRole();

        // Prepare the SQL statement to update the user's profile
        $sql = "UPDATE users 
                SET firstname= ?,
                    lastname= ?,
                    email = ?, 
                    username = ?, 
                    `contact` = ?, 
                    `address` = ?, 
                    city = ?, 
                    province = ?,
                    `role`=?";

        // If a new password is provided, update it
        if (!empty($password)) {
        $sql .= ", `password` = ?";
        }

        $sql .= " WHERE id = ?";

        // Prepare the SQL statement
        $stmt = $koneksi->prepare($sql);

        if ($stmt === false) {
            die("Error: " . $koneksi->error);
        }

        // Bind parameters
        if (!empty($password)) {
            $stmt->bind_param("ssssssssssi", $firstname, $lastname, $email, $username, $contact, $address, $city, $province, $password, $role, $userId);
        } else {
            $stmt->bind_param("sssssssssi", $firstname, $lastname, $email, $username, $contact, $address, $city, $province, $role, $userId);
        }

        // Execute the prepared statement
        if ($stmt->execute()) {
            // Profile update successful
            echo "<script>alert('Update Berhasil')</script>";
            redirectJS("?page=profile");
        } else {
            // Profile update failed
            return false;
        }

        // Close the statement
        $stmt->close();
    }
    
}
?>