<?php
//inkludera connection

include_once "connection.php";

class Login{
    private $conn;

    
    public $password;
    public $email;

    public function __construct($db){
        $this->conn = $db;

}       
 //Login user
public function login(){
   // echo("kommer in i get USER");
   // session_start();
    //$this->email = $_SESSION['email'];
    //$this->password = $_SESSION['password'];

    echo($this->email) . PHP_EOL;
    echo($this->password);

    //JÄMFÖRA MED DATABAS

    $stmt = $this->conn->prepare("SELECT * FROM users WHERE email='$this->email'");
    $stmt->execute([$this->email]); 
    $match = $stmt->fetch();
    
    if ($match){
        $user = json_encode($match);
        $decoded = json_decode($user);
        var_dump($decoded->password);
        //print_r($user->password);
        
         //echo "user match";
     }
     else{
                return false;
            } 
        }
}

$database = new Connection();
$db = $database->openConnection();



