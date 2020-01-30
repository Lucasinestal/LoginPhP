<?php
// declare(strict_types=1);
// include_once "../Classes/connection.php"; //denna behöver vi inte eftersom vi använder autloader

// use classes\;
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase {
    //detta är för att slippa definiera om databas och login
    private $loginUser;

    //när man kör igång testet kör setUp igång och definierar variablarna loginUser
    public function setUp() {
        $database = new Connection();
        $db = $database->openConnection();
        $this->loginUser= new Login($db);
    }

    public function testIfWrongPassword() {
        $_POST['email'] = 'admin@admin.se'; //sätter ett värde på inputfältet istället för att använda oss formuläret
        $_POST['password'] = 'wrongpassword';
        $this->loginUser->email=$_POST['email'];
        $this->loginUser->password=$_POST['password'];

        $this->assertEquals(null, $this->loginUser->login()); //eftersom vi använder echo ifall det blir ett error,alltså vi returnerar inget(null)
                                                                //så om det blir ett error dvs null så blir det OK i testet med assertEquals
    }

    public function testIfWrongUser() {
        $_POST['email'] = 'felemail@email.se';
        // $_POST['password'] = 'wrongpassword';
        $this->loginUser->email=$_POST['email'];
        // $this->loginUser->password=$_POST['password'];

        $this->assertEquals(null, $this->loginUser->login());
    }

    
}

// //KLASSEN OCH METODEN SOM SKA TESTAS
// public function login(){
//     $stmt = $this->conn->prepare("SELECT * FROM users WHERE email='$this->email'");
//     $stmt->execute([$this->email]);
//     $match = $stmt->fetch();

//     if(!$match){
//         echo"Email adress not registered";
//     }
//     else{
//     $user = json_encode($match);

//     //check if this->password == hashed password
//     $decoded = json_decode($user);

//     $decoded->password;
//     echo "<br>";
//    // print_r($decoded->password);
//     echo "<br>";
//     //print_r($this->password);
//     echo "<br>";

//     if(password_verify($this->password ,$decoded->password) === true){
        
//         $_SESSION["username"] = $decoded->username;
//         //redirect to profile   
//         echo "<br>";
//         echo "correct match of passwords";
//         echo "<br>";
//         header("Location: profile.php");

//     }
//     else{
        
//         echo "wrong password";
        
//     }

    
//   } 

// }