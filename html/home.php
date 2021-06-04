<!DOCTYPE html>
<html lang="ro">
<head>
    <link rel="stylesheet" href="../css/style-home.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Math Equation Game</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <section>
            <div class="center">
                <div class="logo-img-math">
                    <img src="../images/lgmath.png" alt="Logo image">
                </div>
                <div class="meniu">
                    <div class="navbar">
                        <a href="home.html"><i class="fa fa-home">Home</i></a>
                        <a href="contact.html"><i class="fa fa-envelope-o">Contact</i></a>
                        <div class="dropdown">
                            <button class="dropbtn">
                                <i class="fa fa-hourglass-2">Probleme</i>
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="prim.html">Scoala prima</a>
                                <a href="gimAlgebra.html">Scoala gimnaziala</a>
                                <a href="liceuAlgebra.html">Liceu</a>
                            </div>
                        </div>
                        <div class="search">
                            <form>
                                <input type="text" id="text-id" placeholder="Search.." name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="logo">
                            <img src="../images/gif.gif" alt="Gif Image">
                        </div>
                        <div class="textbox">
                            <p> Esti pregatit sa exersezi?</p>
                            <button class="login" id="btn-login">Login</button>
                            <button class="register" id="btn-register">Register</button>
                        </div>
                    </div>
                    <div class="popup animate">
                        <div class="login-left">
                            <p class="text-log">Logheaza-te pentru mai multe beneficii!</p>
                            <img src="../images/img-login.png" class="log-login" alt="Login Image">
                            <p class="welcome">Welcome</p>
                            <p class="account-box">You don't have account?</p>
                            <button class="left-register" id="left-register"><i class="fa fa-key"></i></button>
                        </div>
                        <div class="login-right">
                            <img src="../images/close.png" alt="close" class="close">
                            <div class="data">
                                <input id="user-id" name="username" type="text" placeholder="Username" class="fa fa-user">
                                <input id="psw-id" name="password" type="password" placeholder="Password">
                                <button type="submit" id="log">Login</button>
                            </div>
                        </div>
                    </div>
                    <div class="popup-register animate">
                        <div class="register-left">
                            <h1 class="profile-text"> Choose you profile </h1>
                            <h1 class="profile-text-second">photo</h1>
                            <img src="../images/picture-profil.png" class="img-profil" alt="Profil image">
                            <input type="file" id="file" name="upload-file" class="input-left">
                            <p class="already-account">You have already an account?</p>
                            <button class="left-login" id="left-login"><i class="fa fa-key"></i></button>
                        </div>
                        <div class="register-right">
                            <h1>Register</h1>
                            <img src="../images/close.png" alt="close" class="close-register">
                            <form action="../php/User/register.php" method="POST" class="form-register">
                                <div class="input">
                                    <i class="fa fa-user icon"></i>
                                    <input type="text" name="username" class="inp" placeholder="Username">
                                </div>
                                <div class="input">
                                    <i class="fa fa-envelope icon"></i>
                                    <input type="text" name="email" class="inp" placeholder="Email">
                                </div>
                                <div class="input">
                                    <i class="fa fa-key icon"></i>
                                    <input type="password" name="password" class="inp" placeholder="Password">
                                </div>
                                <div class="input">
                                    <i class="fa fa-key icon"></i>
                                    <input type="password" name="repassword" class="inp" placeholder="Confirm your password!">
                                </div>
                                <p id="messageError"></p> 
                                <input type="submit" name="submit" value="Register" class="sub-btn">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="set">
                <div><img src="../images/cifra1.png" alt="Image 1"></div>
                <div><img src="../images/cifra2.png" alt="Image 2"></div>
                <div><img src="../images/cifra3.png" alt="Image 3"></div>
                <div><img src="../images/cifra4.png" alt="Image 4"></div>
                <div><img src="../images/cifra5.png" alt="Image 5"></div>
                <div><img src="../images/cifra6.png" alt="Image 6"></div>
                <div><img src="../images/cifra7.png" alt="Image 7"></div>
                <div><img src="../images/cifra8.png" alt="Image 8"></div>
                <div><img src="../images/cifra9.png" alt="Image 9"></div>
            </div>
            <div class="set set2">
                <div><img src="../images/cifra1.png" alt="Image 1"></div>
                <div><img src="../images/cifra2.png" alt="Image 2"></div>
                <div><img src="../images/cifra3.png" alt="Image 3"></div>
                <div><img src="../images/cifra4.png" alt="Image 4"></div>
                <div><img src="../images/cifra5.png" alt="Image 5"></div>
                <div><img src="../images/cifra6.png" alt="Image 6"></div>
                <div><img src="../images/cifra7.png" alt="Image 7"></div>
                <div><img src="../images/cifra8.png" alt="Image 8"></div>
                <div><img src="../images/cifra9.png" alt="Image 9"></div>
            </div>
        </section>
    </div>
    <script src="../javascript/index.js"></script>
    <script type="text/javascript">

        var button = document.getElementById("log");
            button.addEventListener("click", function() {
                var xmlhttp=new XMLHttpRequest();
                xmlhttp.onreadystatechange=function() {
                     if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                        console.log(this.responseText);
                        var myObj = JSON.parse(this.responseText);
                        console.log(myObj.username);
                        sessionStorage.setItem("username",myObj.username);
                        sessionStorage.setItem("userId", myObj.id);
                        sessionStorage.setItem("score", myObj.score);
                        if(myObj.username !== "")
                            window.location.assign("home-login.php");
                    }
                    else{
                        document.getElementById('messageError').style.color="red";
                        document.getElementById('messageError').innerHTML = "Userername sau parola gresita!"
                    }              
                       
                }
                xmlhttp.open("POST", "../php/User/login.php", true);
                var data = new FormData();
                data.append('username', document.getElementById("user-id").value);
                data.append('password', btoa(document.getElementById("psw-id").value));
                xmlhttp.send(data);
        });
    </script>
</body>
</html>
