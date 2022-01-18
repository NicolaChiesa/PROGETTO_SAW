<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My form</title>
    <link rel="stylesheet" type="text/css" href="../Stili/Stile.css"/>
    <link rel="stylesheet" type="text/css" href="../Stili/StileError.css" />

</head>
<body>
    <?php    
        if(isset($_SESSION["Registrated"]) && $_SESSION["Registrated"] == true){
            echo"
                <nav>
                    <ul>
                        <li> <a href=\"Logout.php\"> Logout</a></li>   
                        <li> <a href=\"../FirstPage.php\"> Home</a></li>   
                    </ul>
                </nav>";
        }
        else{
            echo"
            <nav>
            <ul>
                <li> <a href=\"FirstPage.php\"> Home</a></li>   
                <li> <a href=\"../Login/FormLogin.php\"> Accedi </a></li>
                <li> <a href=\"../Registration/FormRegistration.php\"> Registrati </a></li>
            </ul>
            </nav>";
        }
    ?> 
