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
            <header class="sticky-top px-5 py-2 bg-dark text-white">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none logo">
                            <img src="" alt="" class="logo">
                        </a>

                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                            <li><a href="../Core/PaginaPrincipale.php" class="nav-link px-2 text-white">Home</a></li>
                            <li><a href="../Prodotti/prod.php" class="nav-link px-2 text-white">Articoli</a></li>
                            <li><a href="#" class="nav-link px-2 text-white">Novità</a></li>
                            <li><a href="#" class="nav-link px-2 text-white">Chi siamo</a></li>
                        </ul>

                        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                            <input type="search" class="form-control form-control-dark" placeholder="Cerca..." aria-label="Search">
                        </form>

                        <div class="text-end">
                            <button href="../esci.php" type="button" class="btn btn-outline-light me-2">Esci</button>
                            <button href="../ModificaUtente/modifica.php" type="button" class="btn btn-outline-light">Profilo</button>
                        </div>
                    </div>
                </div>
            </header>';
        }
        else{
            echo'
            <header class="sticky-top px-5 py-2 bg-dark text-white">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none logo">
                            <img src="" alt="" class="logo">
                        </a>

                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                            <li><a href="../Core/PaginaPrincipale.php" class="nav-link px-2 text-white">Home</a></li>
                            <li><a href="../Prodotti/prod.php" class="nav-link px-2 text-white">Articoli</a></li>
                            <li><a href="#" class="nav-link px-2 text-white">Novità</a></li>
                            <li><a href="#" class="nav-link px-2 text-white">Chi siamo</a></li>
                        </ul>

                        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                            <input type="search" class="form-control form-control-dark" placeholder="Cerca..." aria-label="Search">
                        </form>

                        <div class="text-end">
                            <button href="../Login/FormLogin.php" type="button" class="btn btn-outline-light me-2">Accedi</button>
                            <button href="../Registrazione/RegistrazioneForm.php" type="button" class="btn btn-outline-light">Registrati</button>
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