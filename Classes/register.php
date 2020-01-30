<?php

include_once 'connection.php';

  

//importera connection, klart
//Kolla mot inputs klart
//Posta till DB 
//Hasha lösenord
//trycka in nu användare


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
        // $hash = password_hash($this->password, PASSWORD_DEFAULT);
        // $query = "INSERT INTO users (username) VALUES ?";
        // $query = "INSERT INTO users (username, pass, email)  VALUES (?,?,?)";
        // $params = array("Andreas","Andreas","Andreas");
        // $stmt = $this->conn->prepare($query);

            // sanitize
        // $this->username=htmlspecialchars(strip_tags($this->username));
        // $this->password=htmlspecialchars(strip_tags($this->password));
        // $this->email=htmlspecialchars(strip_tags($this->email));
        // $params = array($this->username);
        // $stmt->bindParam(':username', $this->username);
        // $stmt->bindParam(':password', $this->password);
        // $stmt->bindParam(':email', $this->email);
        $query = "SELECT * FROM users";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        print_r($data);
        return true;
        // $stmt->execute($params);
        // if($stmt->execute($params)){
        //     return true;
        // }else{ 
        //     $this->showError($stmt);
        //     return false;
        // }
        // return true;
    }
}
