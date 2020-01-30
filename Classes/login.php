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

    // echo($this->email) . PHP_EOL;
    // echo($this->password);

    //JÄMFÖRA MED DATABAS email
    $stmt = $this->conn->prepare("SELECT * FROM users WHERE email='$this->email'");
    $stmt->execute([$this->email]);
    $match = $stmt->fetch();
    
    //Om passwordet matchar
    if ($match){
        $user = json_encode($match); //blir encodat till ett json-objekt
        $decoded = json_decode($user); //blir decodat till ett vanligt objekt

        if (password_verify($this->password, $decoded->password)) {
            session_start();
            $_SESSION['email'] = $this->email;
            echo $_SESSION['email'] . "EMAILEN";
            echo "OOOH YESSS!";
        } else {
            echo "NOT THE SAMEE!";
            // echo $decoded->password PHP_EOL;
        }

        // var_dump($decoded->password);
        // var_dump($decoded->email);
        //print_r($user->password);
        
         //echo "user match";
     }
     else {
                return false;
                echo "Ej matchat!" . PHP_EOL;
            } 
        }
}

$database = new Connection();
$db = $database->openConnection();