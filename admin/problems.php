<?php

include_once '../admin/admin.php';
include_once '../php/database.php';



$database = new Database();
$db = $database->connect();

$admin = new Admin($db);

$admin->title = $_POST['title'];
$admin->text_problem = $_POST['text_problem'];
$admin->score = $_POST['score'];
$admin->answear = $_POST['answear'];


if($admin->insertProblem()){
    $admin_arr=array(
        "status" => true,
        "message" => "Successfully insert the problem",
        "id" => $admin->id,
        "problem name" => $admin->title
    );
}
else{
    $admin_arr=array(
        "status" => false,
        "message" => "error"
    );
}
print_r(json_encode($admin_arr));
?>


