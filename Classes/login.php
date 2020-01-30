<?php
//session_start();

//inkludera connection
include_once "connection.php";


class Login{
    private $conn;

    
    public $password;
    public $email;

    public function __construct($db){
        $this->conn = $db;
      //  $this->setPassword($password);
        //$this->setEmail($email);

}       
 //Login user


public function login(){
     // echo ($this->password);
     //echo ($this->email);
    // echo"<br>";
        // echo("kommer in i get USER");
     // session_start();
    //$this->email = $_SESSION['email'];
     //$this->password = $_SESSION['password'];
     //echo($this->password);
        //Hämtar rätt user från databasen
    $stmt = $this->conn->prepare("SELECT * FROM users WHERE email='$this->email'");
    $stmt->execute([$this->email]);
    $match = $stmt->fetch();

    if(!$match){
        echo"Email adress not registered";
    }
    else{
    $user = json_encode($match);

    //check if this->password == hashed password
    $decoded = json_decode($user);

    $decoded->password;
    echo "<br>";
   // print_r($decoded->password);
    echo "<br>";
    //print_r($this->password);
    echo "<br>";

    if(password_verify($this->password ,$decoded->password) === true){
        
        $_SESSION["email"] = $this->email;
        //redirect to profile   
        echo "<br>";
        echo "correct match of passwords";
        echo "<br>";
        header("Location: profile.php");

    }
    else{
        
        echo "wrong password";
        
    }

    
    } 
}
}

$database = new Connection();
$db = $database->openConnection();