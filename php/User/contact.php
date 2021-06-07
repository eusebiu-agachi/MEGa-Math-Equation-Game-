<?php

include_once '../model/user.php';
include_once '../database.php';

$database = new Database();
$db = $database->connect();
$user = new User($db);

$user->first_name = $_POST["name"];
$user->last_name = $_POST["lastname"];
$user->email = $_POST["email"];
$user->subjects = $_POST["subject"];
$user->messages = $_POST["message"];

$stmt = $user->contact();

if($stmt){

    $user_arr = array(
        "status" => true,
        "mess" => "Successfully",
        "first_name" => $user->first_name,
        "email" => $user->email,
        "message" => $user->messages
    );
    header("http://localhost/MeGa-Math-Equation-Game-/html/home-login.php");
}
else{
    $user_arr = array(
        "status" => false,
        "mess" => "Failed"
    );
}
print_r(json_encode($user_arr));
?>