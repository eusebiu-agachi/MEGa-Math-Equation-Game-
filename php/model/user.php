<?php

class User{

    private $conn;
    private $table_name = "users";

    public $id;
    public $email;
    public $username;
    public $password;

    public function __construct($db) {
        $this->conn = $db ;
    }

    function alreadyExist(){

        $query = "SELECT * FROM " . $this->table_name . " WHERE username='".$this->username."'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            return true;
        }
        else return false;
    }

    function login(){
        
        $query = "SELECT ID, username, score FROM " . $this->table_name . "  WHERE username='".$this->username."' AND password='".$this->password."'";
        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        return $stmt;
    }

    function register(){

        if($this->alreadyExist()){
            return false;
        }
        $query = "INSERT INTO
        " . $this->table_name . "
    SET
        username=:username, email=:email, password=:password";

        $stmt = $this->conn->prepare($query);
    
       
        $this->username=htmlspecialchars(strip_tags($this->username));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->password=htmlspecialchars(strip_tags($this->password));
    
    
    
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);
    
    
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }
        return false;
    }

   

}

?>