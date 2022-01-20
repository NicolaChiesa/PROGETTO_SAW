<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="../Stili/esercizio4.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <?php    
        if(isset($_SESSION['Registrated']) && $_SESSION['Registrated'] == "true"){
            echo"
                <nav>
                    <ul>
                        <li> <a href=\"../esci.php\"> Logout</a></li>   
                        <li> <a href=\"../Core/PaginaPrincipale.php\"> Home</a></li>
                        <li> <a href=\"../ModificaUtente/modifica.php\"> Modifica Dati Utente</a></li>
                    </ul>
                </nav>";
        }
        else{
            echo"
            <nav>
            <ul>
                <li> <a href=\"../Core/PaginaPrincipale.php\"> Home</a></li>   
                <li> <a href=\"../Login/FormLogin.php\"> Accedi </a></li>
                <li> <a href=\"../Registrazione/RegistrazioneForm.php\"> Registrati </a></li>
            </ul>
            </nav>";
        }
    ?> 