<?php

include_once 'connection.php';

  

//importera connection, 
//Kolla mot inputs
//Hämta från DB
//Hasha lösenord
//trycka in nu användare


class Register{
    private $conn;
    private $table_name ="users";

    public $username;
    public $password;
    public $email;

    public function __construct($db){
        $this->conn = $db;
    }
        //Register new user
       public function register(){
            $query = "INSERT INTO users (username, password, email) VALUES ('$this->username', '$this->password', '$this->email')";

            $stmt = $this->conn->prepare($query);

             // sanitize
            $this->username=htmlspecialchars(strip_tags($this->username));
            $this->password=htmlspecialchars(strip_tags($this->password));
            $this->email=htmlspecialchars(strip_tags($this->email));

            $stmt->bindParam(':username', $this->username);
            $stmt->bindParam(':password', $this->password);
            $stmt->bindParam(':email', $this->email);

            if($stmt->execute()){
                return true;
            }else{
                $this->showError($stmt);
                return false;
            }
        }
}

$database = new Connection();
$db = $database->openConnection();

$user = new Register($db);
