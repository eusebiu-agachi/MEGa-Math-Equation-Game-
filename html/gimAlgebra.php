<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="utf-8">
    <title>Math Equation Game</title>
    <link rel="stylesheet" href="../css/style-algebraGimnaziu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="meniu">
            <div class="logo">
                <img src="../images/lgmath.png" alt="Logo" />
            </div>
            <div class="topnav">
                <a href="contact.php"><i class="fa fa-envelope-o">Contact</i></a>
                <a href="#" onclick="f1()" id="id-home"><i class="fa fa-home">Home</i></a>
            </div>
        </div>
        <div class="left">
            <div class="algebra">
                <a href="gimAlgebra.html">Algebra</a>
                <div class="text-algebra">
                    <img src="../images/algebra.png" alt="imgAlgebra">
                </div>
            </div>
            <div class="geometrie">
                <a href="gimGeometrie.html">Geometrie</a>
                <div class="text-geometrie">
                    <img src="../images/geometrie.png" alt="imgGeometrie">
                </div>
            </div>
            <div class="trigonometrie">
                <a href="gimTrigonometrie.html">Trigonometrie</a>
                <div class="text-algebra">
                    <img src="../images/trigonometrie.png" alt="imgTrigonometrie">
                </div>
            </div>
            <a href="../html/liceuAlgebra.php" class="prb-liceu">Probleme liceu</a>
        </div>
        <div class="right">
            <table id="userTable" class="styled-table" border='1'>
                <thread class="thread">
                    <tr class="tr">
                        <th>ID</th>
                        <th>Title</th>
                        <th>Problema</th>
                        <th>Score</th>
                        <th>Raspuns</th>
                    </tr>
                </thread>
                <tbody>
                <?php include '../php/User/showGimAlgebraProblems.php';
                        echo showAlgebraGimnaziu();    
                ?>                       
            </table>
         
        </div>
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
                alert(myObj.message);
                check.style.display = 'block';
                check.style.color='green'; 
                
            }

        }
        xmlhttp.open("POST", "../php/User/verifyAlgebraGimnaziu.php", true);
        var data = new FormData();
        data.append('custId', valueID);
        data.append('answear',value);
        xmlhttp.send(data);
       
    }
    </script>
</body>
</html>