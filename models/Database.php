<?php 

//Not used, just for testing purpose
class Database
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db = 'blog';
    private $dbCon;

    public function __construct()
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->db);
        if ($conn) {
           $this->dbCon = $conn;
        } else {
            die("Connection failed: " . $conn->connect_error);
        }
    }

    public function select()
    {
        $sql = "SELECT id, username, firstname FROM users";
        $result = $this->dbCon->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - UserName: " . $row["username"] . " " . $row["firstname"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }
}

$obj = new Database();
$obj->select();