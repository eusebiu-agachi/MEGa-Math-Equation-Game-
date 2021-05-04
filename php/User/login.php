<?php


include_once '../model/user.php';
include_once '../database.php';


$database = new Database();
$db = $database->connect();
$user = new User($db);
$user->username = $_POST['username'];
$user->password = base64_encode($_POST['password']);



if($user->login()){
     $user_arr=array(
            "status" => true,
            "message" => "Successfully Login!",
            "username" => $user->username,
            "code" => http_response_code(),
        );
    }
else{
    var_dump(http_response_code(404));
    $user_arr=array(
        "status" => false,
        "message" => "Invalid Username or Password!",
        "code" => http_response_code(),
    );
}
if($user_arr["code"] == 200){
    header("Location: http://localhost/MEGa-Math-Equation-Game-/html/home.html");
}

print_r(json_encode($user_arr));

?>