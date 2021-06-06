﻿<!DOCTYPE html>
<html lang="ro">
<head>
	<title>Math Equation Game</title>
    <link rel="stylesheet" href="../css/style-trigonometrieLiceu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="meniu">
            <div class="logo">
                <img src="../images/lgmath.png" alt="Logo" />
            </div>
            <div class="topnav">
                <a href="home.html"><i class="fa fa-hourglass-2">Probleme</i></a>
                <a href="contact.html"><i class="fa fa-envelope-o">Contact</i></a>
                <a href="home.html"><i class="fa fa-home">Home</i></a>
            </div>
        </div>
        <div class="left">
            <div class="algebra">
                <a href="liceuAlgebra.html">Algebra</a>
                <div class="text-algebra">
                    <img src="../images/algebra.png" alt="imgAlgebra">
                </div>
            </div>
            <div class="analiza">
                <a href="liceuAnaliza.html">Analiza</a>
                <div class="text-analiza">
                    <img src="../images/analiza.png" alt="imgAnaliza">
                </div>
            </div>
            <div class="trigonometrie">
                <a href="Liceu-Trigonometrie.html">Trigonometrie</a>
                <div class="text-trigonometrie">
                    <img src="../images/trigonometrie.png" alt="imgTrigonometrie">
                </div>
            </div>
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
                <?php include '../php/User/showTrigonometrieLiceu.php';
                        echo showLiceuAnaliza();    
                ?>            
        </table>
        </div>  
        <a href="../html/gimAlgebra.php" class="prb-liceu">Probleme gimnaziu</a>     
    </div>
    <script>

function z(parametru){
    var table = document.getElementsByClassName("tess");
    var inputs = document.getElementsByClassName("input-raspuns");
    var s = document.getElementById(parametru).value;
    var t = document.getElementById(`custId-${parametru}`).value;
    var check = document.getElementById(`check-${parametru}`);

    console.log(parametru);

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState === XMLHttpRequest.DONE && this.status === 200){
            var myObj = JSON.parse(this.responseText);
            check.style.color='green';
            
        }

    }
    xmlhttp.open("POST", "../php/User/verifyTrigonometrieLiceu.php", true);
    var data = new FormData();
    data.append('custId', t);
    data.append('tt',s);
    xmlhttp.send(data);
   
}
</script>
</body>
</html>