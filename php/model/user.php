<?php

class User{

    private $conn;
    private $table_name = "users";
    private $table_pair = "up_rel";
    private $table_pair_gg = "up_rel_geometrieg";
    private $table_pair_tg = "up_rel_trigonometrieg";
    private $table_pair_al = "up_rel_algebral";
    private $table_pair_anl = "up_rel_analizal";
    private $table_pair_tl = "up_rel_trigonometriel";

    public $id;
    public $email;
    public $username;
    public $password;
    public $score;
    public $score_prb;
    public $first_name;
    public $last_name;
    public $subjects;
    public $messages;
    public $id_problem;


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
    function insertPair(){
        if($this->alreadyResolved()){
            return false;
        }
        $query = "INSERT INTO up_rel
    SET
        id_user=:id, id_problem=:id_problem";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":id_problem", $this->id_problem);

        
        if($stmt->execute())
            return true;
        else
            return false;
    }
    function alreadyResolved(){
        $query = "SELECT * FROM " . $this->table_pair . " WHERE id_user='".$this->id."' AND id_problem='".$this->id_problem."'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            return true;
        }
        else return false;      
    }
    function verifyResponse(){

        $var = $this->score + $this->score_prb;
        $query = "UPDATE users SET score = '" . $var . "' WHERE ID =:id";
        
        $stmt = $this->conn->prepare($query);
        
        
        $stmt->bindParam(":id", $_SESSION['ID']);
    

        if($stmt->execute()){
            return true;
        }
        return false;

    }

   

}

?>