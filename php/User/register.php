<?php
 

include_once '../model/user.php';
include_once '../database.php';


 
$database = new Database();

$db = $database->connect();
 
$user = new User($db);
 

$user->username = $_POST['username'];
$user->email = $_POST['email'];
$user->password = base64_encode($_POST['password']);


if($user->register()){
    $user_arr=array(
        "status" => true,
        "message" => "Successfully Signup!",
        "id" => $user->id,
        "username" => $user->username
    );
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Username already exists!"
    );
}
print_r(json_encode($user_arr));
?>