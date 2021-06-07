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
    public $repassword;
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
    function insertPairGG(){
        if($this->alreadyResolvedGG()){
            return false;
        }
        $query = "INSERT INTO up_rel_geometrieg
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
    function insertPairTG(){
        if($this->alreadyResolvedTG()){
            return false;
        }
        $query = "INSERT INTO up_rel_trigonometrieg
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
     function alreadyResolvedTG(){
        $query = "SELECT * FROM " . $this->table_pair_tg. " WHERE id_user='".$this->id."' AND id_problem='".$this->id_problem."'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            return true;
        }
        else return false;      
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

	function alreadyResolvedTL(){
        $query = "SELECT * FROM " . $this->table_pair_tl. " WHERE id_user='".$this->id."' AND id_problem='".$this->id_problem."'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            return true;
        }
        else return false;      
    }

	 function insertPairTL(){
        if($this->alreadyResolvedTL()){
            return false;
        }
        $query = "INSERT INTO up_rel_trigonometriel
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

	function insertPairAL(){
        if($this->alreadyResolvedAL()){
            return false;
        }
        $query = "INSERT INTO up_rel_algebral
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

	function alreadyResolvedAL(){
        $query = "SELECT * FROM " . $this->table_pair_al. " WHERE id_user='".$this->id."' AND id_problem='".$this->id_problem."'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            return true;
        }
        else return false;      
    }

	function alreadyResolvedANL(){
        $query = "SELECT * FROM " . $this->table_pair_anl. " WHERE id_user='".$this->id."' AND id_problem='".$this->id_problem."'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            return true;
        }
        else return false;      
    }

	function insertPairANL(){
        if($this->alreadyResolvedANL()){
            return false;
        }
        $query = "INSERT INTO up_rel_analizal
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

    function alreadyResolvedGG(){
        $query = "SELECT * FROM " . $this->table_pair_gg. " WHERE id_user='".$this->id."' AND id_problem='".$this->id_problem."'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            return true;
        }
        else return false;      
    }
    function contact(){
        $query = "INSERT INTO contact SET first_name=:first_name, last_name=:last_name, email=:email, subjects=:subjects, messages=:messages";
        $stmt = $this->conn->prepare($query);
        
        $this->first_name=htmlspecialchars(strip_tags($this->first_name));
        $this->last_name=htmlspecialchars(strip_tags($this->last_name));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->subjects=htmlspecialchars(strip_tags($this->subjects));
        $this->messages=htmlspecialchars(strip_tags($this->messages));
        

        $stmt->bindParam(":first_name", $this->first_name);
        $stmt->bindParam(":last_name", $this->last_name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":subjects", $this->subjects);
        $stmt->bindParam(":messages", $this->messages);

        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }
        return false;
    }
   

}

?>