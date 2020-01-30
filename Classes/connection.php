<?php
    class Connection {
        ///Applications/MAMP/tmp/mysql/mysql.sock
        private $server = "mysql:host=remotemysql.com;dbname=BXcacvVH4F;";
        private $user = "BXcacvVH4F";
        private $pass = "1LmlUxGW5t";
        private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
        protected $con;
    
        public function openConnection() {
        try
            {
                $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);
                return $this->con;
            }
                catch (PDOException $e)
            {
                echo "There is some problem in connection: " . $e->getMessage();
            }
        }
        public function closeConnection() {
            $this->con = null;
        }
    }

    // $dbhost = 'remotemysql.com:3306';
    // $dbuser = 'BXcacvVH4F';
    // $dbpass = '1LmlUxGW5t';
    // $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    
    // if(! $conn ) {
    //    die('Could not connect: ' . mysqli_error());
    // }
    // echo 'Connected successfully';
    // mysqli_close($conn);

// <?php


// class DataBase
// {

//     private $host;
//     private $port;
//     private $db;
//     private $user;
//     private $pass;
//     private $charset;
//     private $dsn;
//     private $unix_socket;


//     public function openConnection()
//     {
//         $this->host = '127.0.0.1';
//         $this->port = '3306';
//         $this->db = 'loginphp';
//         $this->user = 'root';
//         $this->pass = '';
//         $this->charset = 'utf8mb4';

//         try {
//             $dsn = "mysql:host=$this->host;port=$this->port;dbname=$this->db;charset=$this->charset";
//             $pdo = new PDO($dsn, $this->user, $this->pass);
//             $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//             return $pdo;
//             //Om det blir error så kan felmeddelandet visas på sidan
//         } catch (PDOException $e) {
//             echo "Unable to connect: ".$e->getMessage();
//         }
//     }
