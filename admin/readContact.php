<?php

include_once '../admin.php';
include_once '../database.php';

$database = new Database();
$db = $database->connect();

$admin = new Admin($db);

$stmt = $admin->readContact();

$post_arr = array();
if($stmt){
    
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    
        $post_arr[] = $row;
    }
}
echo json_encode($post_arr);
?>

