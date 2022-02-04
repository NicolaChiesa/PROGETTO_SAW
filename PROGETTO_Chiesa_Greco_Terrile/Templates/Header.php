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
    <script src="https://kit.fontawesome.com/34d8843aa0.js" crossorigin="anonymous"></script>
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
            <div class="px-5 py-2 bg-dark">
                <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                    <a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                    </a>

                    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                        <li><a class="nav-link px-2 link-light" href="../Core/PaginaPrincipale.php">Home</a></li>
                        <li><a class="nav-link px-2 link-light" href="../Prodotti/prod.php">Articoli</a></li>
                        <li><a class="nav-link px-2 link-light" href="#">Novità</a></li>
                        <li><a class="nav-link px-2 link-light" href="#">Chi siamo</a></li>
                    </ul>

                    <div class="col-md-3 text-end">
                        <a href="../esci.php" <button type="button" class="btn btn-outline-light me-2">Esci</button></a>
                        <a href="../ModificaUtente/modifica.php" <button type="button" class="btn btn-light">Modifica Profilo</button></a>
                    </div>
                </header>
            </div>';
        }
        else{
            echo'
            <div class="px-5 py-2 bg-dark">
                <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                    <a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                    </a>

                    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                        <li><a class="nav-link px-2 link-light" href="../Core/PaginaPrincipale.php" >Home</a></li>
                        <li><a class="nav-link px-2 link-light" href="../Prodotti/prod.php" >Articoli</a></li>
                        <li><a class="nav-link px-2 link-light" href="#">Novità</a></li>
                        <li><a class="nav-link px-2 link-light" href="#">Chi siamo</a></li>
                    </ul>

                    <div class="col-md-3 text-end">
                        <a href="../Login/FormLogin.php" <button type="button" class="btn btn-outline-light me-2">Accedi</button> </a>
                        <a href="../Registrazione/RegistrazioneForm.php" <button type="button" class="btn btn-outline-light">Registrati</button> </a>
                    </div>
                </header>
            </div>';
        }
    ?> 

<!--    QUESTO E' IL CODICE PER FAR DIVENTARE IL PULSANTE ARTICOLI UN MENU' A TENDINA CON 
        I CAMPI EPICI, MITOLOGICI E FANTASY
        NON SO SE LO VOGLIAMO METTERE, DIPENDE DA COME STRUTTURIAMO LE PAGINE DEI PRODOTTI
        NEL CASO PERò LO LASCIO QUI COSI' E' GIA' PRONTO

<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle px-2 link-light" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Articoli</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Epici</a></li>
            <li><a class="dropdown-item" href="#">Mitologici</a></li>
            <li><a class="dropdown-item" href="#">Fantasy</a></li>
          </ul>
        </li>
-->