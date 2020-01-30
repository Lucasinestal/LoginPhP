<?php

namespace Classes;

class Register
{
    private $conn;
    private $table_name ="users";

    public $username;
    public $password;
    public $email;

    public function __construct($db)
    {
        include_once 'connection.php';
        $this->conn = $db;
    }
        //Register new user
    public function register()
    {
        //hashing password
         $hash = password_hash($this->password, PASSWORD_DEFAULT);

         //checking wether or not email already exists
         $this->email;
         $stmt = $this->conn->prepare("SELECT * FROM users WHERE email='$this->email'");
         $stmt->execute([$this->email]);
         $user = $stmt->fetch();
        if ($user) {
              echo "<p class='text-danger'>Email already in use, login failed!";
        } else {
               //saving to DB
               $query = "INSERT INTO users (username, password, email) VALUES ('$this->username', '$hash', '$this->email')";

               $stmt = $this->conn->prepare($query);

               // sanitize
               $this->username=htmlspecialchars(strip_tags($this->username));
               $this->password=htmlspecialchars(strip_tags($this->password));
               $this->email=htmlspecialchars(strip_tags($this->email));

            if ($stmt->execute()) {
                return true;
            } else {
                $this->showError($stmt);
                return false;
            }
        }
    }
    public function successMsg()
    {
        session_start();
        header("Location: login.php");
        $_SESSION["success"] = "<p class='text-success'>Account was successfully created!<p>";
        exit();
    }
    public function removeUser($user)
    {
        $query = "DELETE FROM users WHERE username = :user";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(":user", $user, PDO::PARAM_STR);
        $stmt->execute();
    }
}

$database = new Connection();
$db = $database->openConnection();
