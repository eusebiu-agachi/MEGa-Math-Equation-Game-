<!DOCTYPE html>
<html lang="ro">
<head>
    <link rel="stylesheet" href="../css/stylle-home.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Math Equation Game</title>
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
                        <a href="home.php"><i class="fa fa-home">Acasa</i></a>
                        <a href="contact.php"><i class="fa fa-envelope-o">Contact</i></a>
                        <div class="dropdown">
                            <button class="dropbtn">
                                <i class="fa fa-hourglass-2">Probleme</i>
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="prim.html">Scoala prima</a>
                                <a href="gimAlgebra.php">Scoala gimnaziala</a>
                                <a href="liceuAlgebra.php">Liceu</a>
                            </div>
                        </div>
                        <div class="search">
                            <form>
                                <input type="text" id="text-id" placeholder="Cauta pe cineva..." name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="logo">
                            <img src="../images/gif.gif" alt="Gif Image">
                        </div>
                        <div class="textbox">
                            <p> Esti pregatit sa exersezi?</p>
                            <button class="login" id="btn-login">Autentifica-te</button>
                            <button class="register" id="btn-register">Inregistreaza-te</button>
                        </div>
                    </div>
                    <div class="popup animate">
                        <div class="login-left">
                            <p class="text-log">Logheaza-te pentru mai multe beneficii!</p>
                            <img src="../images/img-login.png" class="log-login" alt="Login Image">
                            <p class="welcome">Salutare!</p>
                            <p class="account-box">Nu ai un cont?</p>
                            <button class="left-register" id="left-register"><i class="fa fa-key"></i></button>
                        </div>
                        <div class="login-right">
                            <img src="../images/close.png" alt="close" class="close">
                            <div class="data">
                                <input id="user-id" name="username" type="text" placeholder="Username" class="fa fa-user">
                                <input id="psw-id" name="password" type="password" placeholder="Password">
                                <p id="messageError"></p> 
                                <button type="submit" id="log">Autentifica-te</button>
                            </div>
                        </div>
                    </div>
                    <div class="popup-register animate">
                        <div class="register-left">
                            <h1 class="profile-text"> Bine ai venit! </h1>
                            <h1 class="profile-text-second">Completeaza informatiile pentru a te inregistra!</h1>                           
                            <p class="already-account">Ai deja un cont?</p>
                            <button class="left-login" id="left-login"><i class="fa fa-key"></i></button>
                        </div>
                        <div class="register-right">
                            <h1>Register</h1>
                            <img src="../images/close.png" alt="close" class="close-register">
                            <div class="form-register">
                                <div class="input">
                                    <i class="fa fa-user icon"></i>
                                    <input type="text" name="username" class="inp" id="username-id" placeholder="Username">
                                </div>
                                <div class="input">
                                    <i class="fa fa-envelope icon"></i>
                                    <input type="text" name="email" class="inp" id="email-id" placeholder="Email">
                                </div>
                                <div class="input">
                                    <i class="fa fa-key icon"></i>
                                    <input type="password" name="password" class="inp" id="password" placeholder="Password">
                                </div>
                                <div class="input">
                                    <i class="fa fa-key icon"></i>
                                    <input type="password" name="repassword" class="inp" id="repassword" placeholder="Confirm your password!">
                                </div>
                                <p id="messageRegisterError"></p> 
                                <input type="submit" name="submit" value="Register" class="sub-btn" id="register">
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
                            document.getElementById("messageError").innerHTML = "Cont inexistent sau parola incorecta!";
                        }                                                                  
                }
                xmlhttp.open("POST", "../php/User/login.php", true);
                var data = new FormData();
                data.append('username', document.getElementById("user-id").value);
                data.append('password', btoa(document.getElementById("psw-id").value));
                xmlhttp.send(data);
        });

        var buttonRegister = document.getElementById("register");
        buttonRegister.addEventListener("click", function(){
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange = function (){
                if(this.readyState === XMLHttpRequest.DONE && this.status === 200){
                    var myObj = JSON.parse(this.responseText);
                    if(myObj.status === true){
                        document.getElementById("messageRegisterError").style.color = 'green';
                        document.getElementById("messageRegisterError").innerHTML = myObj.message;
                    }
                        
                    else if(myObj.message === "Parolele nu coincid"){
                        document.getElementById("messageRegisterError").style.color = 'red';
                        document.getElementById("messageRegisterError").innerHTML = myObj.message;
                    }
                    else {
                        document.getElementById("messageRegisterError").style.color = 'red';
                        document.getElementById("messageRegisterError").innerHTML = myObj.message;
                    }
                }
                
            }
            xmlhttp.open("POST", "../php/User/register.php", true);
            var data = new FormData();
            data.append('username', document.getElementById("username-id").value);
            data.append('email', document.getElementById("email-id").value);
            data.append('password', btoa(document.getElementById("password").value));
            data.append('repassword', btoa(document.getElementById("repassword").value));
            xmlhttp.send(data);
        })
    </script>
</body>
</html>
