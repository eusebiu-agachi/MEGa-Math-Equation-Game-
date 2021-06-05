<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="utf-8">
    <title>Math Equation Game</title>
    <link rel="stylesheet" href="../css/style-gimnaziuAlgebra.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="meniu">
            <div class="logo">
                <img src="../images/lgmath.png" alt="Logo"/>
            </div>
            <div class="topnav">
                <a href="home.html"><i class="fa fa-hourglass-2">Probleme</i></a>
                <a href="contact.html"><i class="fa fa-envelope-o">Contact</i></a>
                <a href="home.html"><i class="fa fa-home">Home</i></a>
            </div>
        </div>
        <div class="left">
            <div class="algebra">
                <a href="gimAlgebra.html">Algebra</a>
                <div class="text-algebra">
                    <img src="../images/algebra.png" alt="Algebra">
                </div>
            </div>
            <div class="geometrie">
                <a href="gimGeometrie.html">Geometrie</a>
                <div class="text-geometrie">
                    <img src="../images/geometrie.png" alt="Geometrie">
                </div>
            </div>
            <div class="trigonometrie">
                <a href="gimTrigonometrie.html">Trigonometrie</a>
                <div class="text-algebra">
                    <img src="../images/trigonometrie.png" alt="Trigonometrie">
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
                <?php include '../php/User/showGeometrieProblems.php';
                        echo showGeometrieGimnaziu();    
                ?>            
            </table>   
        </div>
    </div>
</body>
</html>