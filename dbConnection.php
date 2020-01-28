<?php


class dataBase{

    private $host;
    private $port;
    private $db;
    private $user;
    private $pass;
    private $charset;
    private $dsn;
 

    //Connect to DB 
     public function connect()
     {
         $this->host = '127.0.0.1';
         $this->port = '10003';
         $this->db = 'loginphp';
         $this->user = 'root';
         $this->pass = 'root';
         $this->charset = 'utf8mb4';

         try {
                $dsn = "mysql:host=$this->host;port=$this->port;db=$this->db;charset=$this->charset";
                 $pdo = new PDO($dsn, $this->user, $this->pass);
                 $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                 return $pdo;
                 echo "Connected";
                 
             } catch (PDOException $e) {
                 echo "Unable to connect: ".$e->getMessage();
             }
         }
   
    }