<?php

include_once 'connection.php';

class Register{
    private $conn;
    private $table_name ="users";

    public $username;
    public $password;
    public $email;

    public function __construct(){
        $newConnection = new Connection();
        $this->conn = $newConnection->openConnection();
    }
        //Register new user
       public function register(){
           //hashing password
            $hash = password_hash($this->password, PASSWORD_DEFAULT);

            //checking wether or not email already exists
            $this->email;
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE email='$this->email'");
            $stmt->execute([$this->email]); 
            $exists = $stmt->fetch();
            if ($exists){
                echo "user exists";
            }
            else {
                //saving to DB
                $query = "INSERT INTO users (username, password, email) VALUES ('$this->username', '$hash', '$this->email')";

                $stmt = $this->conn->prepare($query);

                // sanitize
                $this->username=htmlspecialchars(strip_tags($this->username));
                $this->password=htmlspecialchars(strip_tags($this->password));
                $this->email=htmlspecialchars(strip_tags($this->email));

                if($stmt->execute()){
                    return true;
                }else{
                    $this->showError($stmt);
                    return false;
                }
        }
    }
}

$database = new Connection();
$db = $database->openConnection();

