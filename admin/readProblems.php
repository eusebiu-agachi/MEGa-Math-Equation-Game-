<?php

include_once '../admin/admin.php';
include_once '../php/database.php';

$database = new Database();
$db = $database->connect();

$admin = new Admin($db);

$stmt = $admin->readProblem();

$post_arr = array();
if($stmt){
    
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    
        $post_arr[] = $row;
    }
}
echo json_encode($post_arr);
?>

