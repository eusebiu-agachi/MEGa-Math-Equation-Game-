<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="utf-8">
    <title>Math Equation Game</title>
    <link rel="stylesheet" href="../css/style-gimnaziu-algebra.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="meniu">
            <div class="logo">
                <img src="../images/lgmath.png" alt="Logo image/">
            </div>
            <div class="topnav">
                <a href="contact.php"><i class="fa fa-envelope-o">Contact</i></a>
                <a href="#" onclick="f1()" id="id-home"><i class="fa fa-home">Acasa</i></a>
            </div>
        </div>
        <div class="left">
            <div class="algebra">
                <a href="gimAlgebra.php">Algebra</a>
                <div class="text-algebra">
                    <img src="../images/algebra.png" alt="Algebra">
                </div>
            </div>
            <div class="geometrie">
                <a href="gimGeometrie.php">Geometrie</a>
                <div class="text-geometrie">
                    <img src="../images/geometrie.png" alt="Geometrie">
                </div>
            </div>
            <div class="trigonometrie">
                <a href="gimTrigonometrie.php">Trigonometrie</a>
                <div class="text-algebra">
                    <img src="../images/trigonometrie.png" alt="Trigonometrie">
                </div>
            </div>
        </div>
        <div class="right">
        <table id="userTable" class="styled-table">
            <tr class="tr">
               <th class="id">ID</th>
                <th class="title">Titlu</th>
                 <th>Problema</th>
                 <th class="score">Scor</th>
                 <th>Raspuns</th>
            </tr>
            <tbody>
            <?php include '../php/User/showGimTrigonometrie.php';
                echo showTrigonometrieGimnaziu();    
            ?>            
        </table>
        </div>
        <a href="../html/liceuAlgebra.php" class="prb-liceu">Probleme liceu</a>
    </div>
    <script>
    function f1(){
        console.log("a intrat");
        if(sessionStorage.length){
            document.getElementById("id-home").href="home-login.php";
        }
        else {
            document.getElementById("id-home").href="home.php";
        }
    }
    function z(parametru){
        var table = document.getElementsByClassName("tess");
        var inputs = document.getElementsByClassName("input-raspuns");
        var value = document.getElementById(parametru).value;
        var valueID = document.getElementById(`custId-${parametru}`).value;
        var check = document.getElementById(`check-${parametru}`);

        console.log(parametru);


        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(this.readyState === XMLHttpRequest.DONE && this.status === 200){
                var myObj = JSON.parse(this.responseText);
                if(myObj.message === "Felicitari raspunsul este corect!"){
                    check.style.display = 'block';
                    check.style.color='green'; 
                }
                else if(myObj.message === "Raspunsul nu este corect!"){
                    check.style.display = 'block';
                    check.style.color='red';
                }  
                
            }
        }
        xmlhttp.open("POST", "../php/User/verifyTrigonometrieGimnaziu.php", true);
        var data = new FormData();
        data.append('custId', valueID);
        data.append('answear',value);
        xmlhttp.send(data);       
    }
    </script>
</body>
</html>