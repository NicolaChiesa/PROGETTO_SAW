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

</head>
<body>
    <?php    
        if(isset($_SESSION['Registrated']) && $_SESSION['Registrated'] == "true"){
            echo'
            <header class="p-3 bg-dark text-white sticky-top">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                            <img src="" alt="" class="">                
                        </a>
                
                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                            <li><a class="nav-link px-2 link-light" href="../Core/PaginaPrincipale.php">Home</a></li>
                            <li><a class="nav-link px-2 link-light" href="../Prodotti/prod.php">Articoli</a></li>
                            <li><a class="nav-link px-2 link-light" href="#">Novità</a></li>
                            <li><a class="nav-link px-2 link-light" href="#">Chi siamo</a></li>
                        </ul>
                
                        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                            <input type="search" class="form-control form-control-dark" placeholder="Cerca..." aria-label="Search">
                        </form>
                
                        <div class="text-end">
                            <a href="../Prodotti/finisci.php" <button type="button" class="btn btn-outline-light me-2 ms-5">Carrello</button></a>
                            <a href="../ModificaUtente/modifica.php" <button type="button" class="btn btn-outline-light me-2">Modifica Profilo</button></a>
                            <a href="../esci.php" <button type="button" class="btn btn-outline-light">Esci</button></a>
                        </div>
                    </div>
                </div>
            </header>';
        }
        else{
            echo'
            <header class="p-3 bg-dark text-white sticky-top">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                            <img src="" alt="" class="">                
                        </a>
                
                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                            <li><a class="nav-link px-2 link-light" href="../Core/PaginaPrincipale.php">Home</a></li>
                            <li><a class="nav-link px-2 link-light" href="../Prodotti/prod.php">Articoli</a></li>
                            <li><a class="nav-link px-2 link-light" href="#">Novità</a></li>
                            <li><a class="nav-link px-2 link-light" href="#">Chi siamo</a></li>
                        </ul>
                
                        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                            <input type="search" class="form-control form-control-dark" placeholder="Cerca..." aria-label="Search">
                        </form>
                
                        <div class="text-end">
                            <a href="../Prodotti/carrello.php" <button type="button" class="btn btn-outline-light">Carrello</button></a>
                            <a href="../Login/FormLogin.php" <button type="button" class="btn btn-outline-light me-2">Accedi</button> </a>
                            <a href="../Registrazione/RegistrazioneForm.php" <button type="button" class="btn btn-outline-light">Registrati</button> </a>
                        </div>
                    </div>
                </div>
            </header>';
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