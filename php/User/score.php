<?php

include_once '../php/model/user.php';
include_once '../php/database.php';


$database = new Database();
$db = $database->connect();


$user = new User($db);

$sql = "SELECT username, score FROM users ORDER BY score DESC LIMIT 10";
$result = $db->prepare($sql);
$result->execute();

if($result->rowCount() >0){
    while($row = $result->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr class='score-tr'><td>". $row["username"] ."</td><td>" . $row['score'] ."</td></tr>";
               
    }
}

?>