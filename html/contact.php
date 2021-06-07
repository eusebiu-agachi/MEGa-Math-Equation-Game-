<!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="utf-8">
        <title>Math Equation Game</title>
        <link rel="stylesheet" href="../css/style-contact.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container">
            <div class="meniu">
                <div class="logo">
                  
                </div>
                <div class="topnav">
					<img src="../images/lgmath.png" alt="Logo">                   
                    <a href="contact.php"><i class="fa fa-envelope-o">Contact</i></a>
                    <a href="#" onclick="f3()" id="id-home"><i class="fa fa-home">Acasa</i></a> 				
                </div>
            </div>
            <div class="svg-up">
                <svg width="510" height="510">
                    <rect width="480" height="480" style="fill:#ADFF2F;" />
                </svg>
            </div>
            <div class="svg-down">
                <svg width="510" height="510">
                    <rect width="480" height="475" style="fill:#9ACD32;" />
                </svg>
            </div>
            <div class="center">
                <div class="contact-left">
                   <nav class="navmenu">
                       <ul>
                           <li><a href="#" class="active">Trimite-ne un mesaj</a><p>Daca doresti sa ne trimiti o urare buna, un mesaj sau daca ai o nelamurire, poti completa formularul alaturat, pentru a ne instiinta de parerea ta.</p></li>
                           <li><a href="#" class="active">Nume</a><p>Numele trebuie sa inceapa cu majuscula. Daca aveti doua prenume, treceti doar unul singur (care credeti ca este mai important).</p></li>
                           <li><a href="#" class="active">Email</a><p>Email-ul trebuie sa aiba terminatia corecta (de ex. "@yahoo.com"). De asemenea, verificati faptul ca adresa este corecta si ca va apartine, altfel nu veti primi raspunsul nostru.</p></li>
                           <li><a href="#" class="active">Submit</a><p>Este obligatorie completarea fiecarui camp. Dupa aceea, apasati butonul "Send". Va multumim pentru completarea formularului!</p></li>
                       </ul>
                   </nav>
                </div>
                <div class="contact-right">
                    <h1 class="title-contact">Contacteaza-ne</h1>
                    <div class="line">

                    </div>
                    <form class="form-contact">
                        <div class="name-contact">
                            <div class="NM1">
								<input type = "text" name = "name" placeholder = "Nume">
							</div>
                             <div class ="NM2">
								<input type = "text" name = "name" placeholder = "Prenume">
							</div>
						</div>
                        <div class="rest-contact">
                             <input type = "email" name="email" placeholder = "Email">
                             <input type="text" name = "subject" placeholder = "Subiect">
                             <input id="message" type="text" name = "message" placeholder="Mesaj..."> 
                        </div>
                        <div class="send-contact">
                            <input type="submit" value="Trimite">  
                        </div>      
                    </form>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
        <script>
            function f3(){
                console.log("a intrat");
                if(sessionStorage.length){
                    document.getElementById("id-home").href="home-login.php";
                }
                else {
                    document.getElementById("id-home").href="home.php";
                }
            }
        </script>
    </body>
</html>