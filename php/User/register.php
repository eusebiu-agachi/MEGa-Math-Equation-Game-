<?php
 

include_once '../model/user.php';
include_once '../database.php';


 
$database = new Database();

$db = $database->connect();
 
$user = new User($db);
 

$user->username = $_POST['username'];
$user->email = $_POST['email'];
$user->password = base64_encode($_POST['password']);
$user->repassword = base64_encode($_POST['repassword']);

if($user->password != $user->repassword){
    $user_arr = array(
        "status" => false,
        "message" => "Parolele nu coincid!"
    );
    
}
else if($user->register()){
    $user_arr=array(
        "status" => true,
        "message" => "Felicitari ai fost inregistrat cu succes!",
        "id" => $user->id,
        "username" => $user->username
    );
    header("http://localhost/MeGa-Math-Equation-Game-/html/home.php");

}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Cont inexistent sau parola gresita!"
    );
}
print_r(json_encode($user_arr));
?>