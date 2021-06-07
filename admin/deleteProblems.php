<?php

include_once '../admin/admin.php';
include_once '../php/database.php';


$database = new Database();
$db = $database->connect();

$admin = new Admin($db);

$data = json_decode(file_get_contents("php://input"));

$admin->id = $_GET["id"];

if($admin->deleteProblem()){
    echo json_encode(
        array( "message" => "The problem with ID " . $admin->id . "was deleted")
    );

}
else echo json_encode(
    array(
        "message" => "Something gone wrong"
    )
)














?>