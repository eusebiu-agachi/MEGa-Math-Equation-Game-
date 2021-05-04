<?php

class Database{
    private $host = "localhost";
    private $db_name = "mega";
    private $username = "root";
    private $db_pass = "";

    public $conn;


    public function connect(){
       $this->conn = null;

       try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->db_pass);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
    return $this->conn;
    }
}

?>