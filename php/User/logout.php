<?php

    session_start();
    session_unset();
    session_destroy();

    
    header("Location: http://localhost/MeGa-Math-Equation-Game-/html/home.php");