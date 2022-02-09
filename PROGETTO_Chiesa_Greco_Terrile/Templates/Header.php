<?php
session_start();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Only Mytich</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
                            
                        <img src="../Immagini/OnlyMytich.png" alt="Logo del sito Only Mytich" class="logo">                
                
                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                            <li><a class="nav-link px-2 link-light" href="../Core/PaginaPrincipale.php">Home</a></li>
                            <li><a class="nav-link px-2 link-light" href="../Prodotti/prod.php">Articoli</a></li>
                            <li><a class="nav-link px-2 link-light" href="../Core/novità.php">Novità</a></li>
                            <li><a class="nav-link px-2 link-light" href="../Core/chisiamo.php">Chi siamo</a></li>
                        </ul>
                
                        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" action="../Cerca/cerca.php" method="POST">
                            <input type="search" class="form-control form-control-dark" placeholder="Cerca..." aria-label="Search" id="cerca" name="cerca">
                            <input type="submit" value="Cerca">
                        </form>
                
                        <div class="text-end">
                        <form style="display: inline" action="../Prodotti/finisci.php">
                            <button type="submit" class="btn btn-outline-light me-2 ms-5">Carrello</button>
                        </form>
                        <form style="display: inline" action="../Utente/show_profile.php">
                            <button type="submit" class="btn btn-outline-light me-2">Modifica Profilo</button>
                        </form>
                        <form style="display: inline" action="../esci.php">
                            <button type="submit" class="btn btn-outline-light me-2">Esci</button>
                        </form>
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

                        <img src="../Immagini/OnlyMytich.png" alt="Logo del sito Only Mytich" class="logo">               
            
                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                            <li><a class="nav-link px-2 link-light" href="../Core/PaginaPrincipale.php">Home</a></li>
                            <li><a class="nav-link px-2 link-light" href="../Prodotti/prod.php">Articoli</a></li>
                            <li><a class="nav-link px-2 link-light" href="../Core/novità.php">Novità</a></li>
                            <li><a class="nav-link px-2 link-light" href="../Core/chisiamo.php">Chi siamo</a></li>
                        </ul>
                
                        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" action="../Cerca/cerca.php" method="POST">
                            <input type="search" class="form-control form-control-dark" placeholder="Cerca..." aria-label="Search" id="cerca" name="cerca">
                            <input type="submit" value="Cerca">
                        </form>
                
                        <div class="text-end">
                            <form style="display: inline" action="../Prodotti/finisci.php">
                                <button type="submit" class="btn btn-outline-light me-2 ms-5">Carrello</button>
                            </form>
                            <form style="display: inline" action="../Utente/FormLogin.php">
                                <button type="submit" class="btn btn-outline-light me-2">Accedi</button>
                            </form>
                            <form style="display: inline" action="../Utente/RegistrazioneForm.php">
                                <button type="submit" class="btn btn-outline-light">Registrati</button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>';
        }
    ?> 
