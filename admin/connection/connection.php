<?php 
define('SITEURL','http://localhost:800/Donat%20Shala%20F.S.K/');

class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'fsk';
    private $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}

$database = new Database();
$conn = $database->getConnection();

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
