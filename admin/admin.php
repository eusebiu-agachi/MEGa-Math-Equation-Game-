<?php

class Admin{


    private $conn;
    private $table_name = "algebra_gimnaziu";


    public $id;
    public $title;
    public $text_problem;
    public $score;
    public $score_prb;
    public $answear;

    public function __construct($db) {
        $this->conn = $db;
    }

    function insertProblem(){
        
        $query = "INSERT INTO " . $this->table_name . " SET title=:title, text_problem=:text_problem, score=:score, answear=:answear";
        $stmt = $this->conn->prepare($query);    
    
    
        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":text_problem", $this->text_problem);
        $stmt->bindParam(":score", $this->score);
        stmt->bindParam(":answear", $this->answear);

        if($stmt->execute()){
            return true;
        }
        return false;
    }
    function insertProblemGeometrieGimnaziu(){
        
        $query = "INSERT INTO geometrie_gimnaziu SET title=:title, text_problem=:text_problem, score=:score, answear=:answear";
        $stmt = $this->conn->prepare($query);    
    
    
        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":text_problem", $this->text_problem);
        $stmt->bindParam(":score", $this->score);
        $stmt->bindParam(":answear", $this->answear);

        if($stmt->execute()){
            return true;
        }
        return false;
    }
    function insertProblemTrigonometrieGimnaziu(){
        
        $query = "INSERT INTO trigonometrie_gimnaziu SET title=:title, text_problem=:text_problem, score=:score, answear=:answear";
        $stmt = $this->conn->prepare($query);    
    
    
        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":text_problem", $this->text_problem);
        $stmt->bindParam(":score", $this->score);
        $stmt->bindParam(":answear", $this->answear);

        if($stmt->execute()){
            return true;
        }
        return false;
    }
    function insertProblemAlgebraLiceu(){
        
        $query = "INSERT INTO algebra_liceu SET title=:title, text_problem=:text_problem, score=:score, answear=:answear";
        $stmt = $this->conn->prepare($query);    
    
    
        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":text_problem", $this->text_problem);
        $stmt->bindParam(":score", $this->score);
        $stmt->bindParam(":answear", $this->answear);

        if($stmt->execute()){
            return true;
        }
        return false;
    }
    function insertProblemAnalizaLiceu(){
        
        $query = "INSERT INTO analiza_liceu SET title=:title, text_problem=:text_problem, score=:score, answear=:answear";
        $stmt = $this->conn->prepare($query);    
    
    
        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":text_problem", $this->text_problem);
        $stmt->bindParam(":score", $this->score);
        $stmt->bindParam(":answear", $this->answear);

        if($stmt->execute()){
            return true;
        }
        return false;
    }
    function insertProblemTrigonometrieLiceu(){
        
        $query = "INSERT INTO trigonometrie_liceu SET title=:title, text_problem=:text_problem, score=:score, answear=:answear";
        $stmt = $this->conn->prepare($query);    
    
    
        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":text_problem", $this->text_problem);
        $stmt->bindParam(":score", $this->score);
        $stmt->bindParam(":answear", $this->answear);

        if($stmt->execute()){
            return true;
        }
        return false;
    }
    
    function readProblem(){
        $query = "SELECT * FROM algebra_gimnaziu";
        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        return $stmt;
    }
    function readProblemGeometrie(){
        $query = "SELECT * FROM geometrie_gimnaziu";
        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        return $stmt;
    }
    function readProblemTrigonometrie(){
        $query = "SELECT * FROM trigonometrie_gimnaziu";
        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        return $stmt;
    }
    function readProblemTrigonometrieLiceu(){
        $query = "SELECT * FROM trigonometrie_liceu";
        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        return $stmt;
    }
    function readProblemAlgebraLiceu(){
        $query = "SELECT * FROM algebra_liceu";
        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        return $stmt;
    }
    function readProblemAnalizaLiceu(){
        $query = "SELECT * FROM analiza_liceu";
        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        return $stmt;
    }
    function readContact(){
        $query = "SELECT first_name, email, subjects, messages FROM contact";
        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        return $stmt;
    }
    function deleteProblem(){

        $query = "DELETE FROM algebra_gimnaziu WHERE ID = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $this->id);

        if($stmt->execute()){
            return true;
        }
        return false;
    }
    function deleteGeometrieProblem(){

        $query = "DELETE FROM geometrie_gimnaziu WHERE ID = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $this->id);

        if($stmt->execute()){
            return true;
        }
        return false;
    }
    function deleteTrigonometrieProblem(){

        $query = "DELETE FROM trigonometrie_gimnaziu WHERE ID = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $this->id);

        if($stmt->execute()){
            return true;
        }
        return false;
    }
    function deleteAlgebraLiceuProblem(){

        $query = "DELETE FROM algebra_liceu WHERE ID = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $this->id);

        if($stmt->execute()){
            return true;
        }
        return false;
    }
    function deleteAnalizaLiceuProblem(){

        $query = "DELETE FROM analiza_liceu WHERE ID = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $this->id);

        if($stmt->execute()){
            return true;
        }
        return false;
    }
    function deleteTrigonometrieLiceuProblem(){

        $query = "DELETE FROM trigonometrie_liceu WHERE ID = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $this->id);

        if($stmt->execute()){
            return true;
        }
        return false;
    }
    function verifyResponse(){


        $var =$this->score_prb + $this->score;
        echo "<br>";
        echo $this->score_prb;
        echo "<br>";
        echo $this->score;
        echo "<br>";
        echo $var;
        echo "<br>";

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