<!DOCTYPE html>
<html lang="ro">
<head>
    <link rel="stylesheet" href="../css/style-home-login.css">
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
                        <a href="home.php"><i class="fa fa-home">Home</i></a>
                        <a href="contact.html"><i class="fa fa-envelope-o">Contact</i></a>
                        <div class="dropdown">
                            <button class="dropbtn">
                                <i class="fa fa-hourglass-2">Probleme</i>
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="prim.php">Scoala prima</a>
                                <a href="gimAlgebra.php">Scoala gimnaziala</a>
                                <a href="liceuAlgebra.php">Liceu</a>
                            </div>
                        </div>
                        <div class="search">
                            <form>
                                <input type="text" id="text-id" placeholder="Search.." name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                
                            </form>
                        </div>
                        <div class="textbox" id="textbox">
                            <p class="salut" id="welcome">Test</p>
                            <p> Incepe sa rezolvi probleme<br> pentru a reusi sa obtii puncte!</p>
                            <p class="points"> Punctele tale: <i class="fa fa-star"><p id="model" class="points"></p></i></p>
                            <a href="../php/User/logout.php" class="register" id="btn-register">Logout</a>
                        </div>                              
                    </div>
                </div>
                <table id="userTable" border='1'>
                    <thread class="thread">
                        <tr class="tr">
                            <th>Username</th>
                            <th>Score</th>
                        </tr>
                    </thread>
                    <?php include '../php/User/score.php'?>
                </table> 
                        
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
    <script>
        var usr = sessionStorage.getItem("username");
        var score = sessionStorage.getItem("score");

        var elem = document.querySelector("#model");
        var newUsr = document.querySelector("#welcome");
        

        document.getElementById('model').innerHTML = score;
        document.getElementById('welcome').innerHTML = "Salut " + usr +"!";
    
    </script>
</body>
</html>
