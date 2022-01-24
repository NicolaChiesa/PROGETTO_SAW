<?php
session_start();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="../Stili/Stile.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#menuButton").hover(function(){
        $("#menu").slideToggle();
        }); 
     });

</script>

</head>
<body>
    <?php    
        if(isset($_SESSION['Registrated']) && $_SESSION['Registrated'] == "true"){
            echo'
            <header class="logo"> LOGO/TITOLO </header>
                <nav>
                    <ul>
                        <li> <a href="../Core/PaginaPrincipale.php"><i class="fa fa-home"></i></a></li>
                        <li> <a href="../esci.php"> <i class="fa fa-sign-out"></i></a></li>   
                        <li> <a href="../ModificaUtente/modifica.php"> <i class="fa fa-pencil"></i></a></li>
                    </ul>
                </nav>';
        }
        else{
            echo'
            <header class="logo"> LOGO/TITOLO </header>  
            <nav>
                <ul>
                    <li><a href="#"> HOME </a></li>
                    <li><a href="#"> NEWS </a></li>
                    <li><a href="#"> CHI SIAMO </a></li> 
                    <li><a href="#"> CONTATTI </a></li>
                    <li> <a href="../Core/PaginaPrincipale.php"><i class="fa fa-home"></i> </a></li>   
                    <li> <a href="../Login/FormLogin.php"> <i class="fa fa-sign-in"></i> </a></li>
                    <li> <a href="../Registrazione/RegistrazioneForm.php"> <i class="fa fa-registered"></i></i> </a></li>
                </ul>
            </nav>';
        }
    ?> 

<!-- <button id="menuButton">Menu</button>
            <div id="menu" style="display:none;">
                <p>Home</p>
                <p>Dove siamo</p>
                <p>Chi siamo</p>
                <p>Contatti</p>
                <p>Social</p>
            </div> -->