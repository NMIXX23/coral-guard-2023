<?php
class Connection {
    private $dbHost = "localhost";
    private $dbUser = "root";
    private $dbPass = "";
    private $dbName = "db_db_coralguard";
    private $mysqli;

    public function __construct() {
        $this->mysqli = $this->connectToDatabase();
    }

    private function connectToDatabase() {
        $mysqli = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        return $mysqli;
    }

    public function getMysqli() {
        return $this->mysqli;
    }

    public function closeConnection() {
        if ($this->mysqli) {
            $this->mysqli->close();
        }
    }
}

?>