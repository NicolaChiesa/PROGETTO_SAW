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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Stili/Stile.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Questo sotto é uno stile che ho inserito io per fare il controllo sulla mail -->
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
            <div class="px-5 py-2 bg-dark">
                <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                    <a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                    </a>

                    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="#" class="nav-link px-2 link-light">Home</a></li>
                        <li><a href="#" class="nav-link px-2 link-light">Articoli</a></li>
                        <li><a href="#" class="nav-link px-2 link-light">Novità</a></li>
                        <li><a href="#" class="nav-link px-2 link-light">Chi siamo</a></li>
                    </ul>

                    <div class="col-md-3 text-end">
                        <button type="button" class="btn btn-outline-light me-2">Accedi</button>
                        <button type="button" class="btn btn-light">Registrati</button>
                    </div>
                </header>
            </div>';
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