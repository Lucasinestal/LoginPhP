<?php

namespace Classes;

use PDO;

class Connection
{
    private $server = "mysql:host=remotemysql.com;dbname=BXcacvVH4F;";
    private $user = "BXcacvVH4F";
    private $pass = "1LmlUxGW5t";
    private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
    protected $con;
    
    public function openConnection()
    {
        try {
            $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);
            return $this->con;
        } catch (PDOException $e) {
        }
    }
    public function closeConnection()
    {
        $this->con = null;
    }
}
