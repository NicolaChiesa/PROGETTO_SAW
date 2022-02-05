<?php
  include('../Templates/Header.php');
  $_SESSION['prodotto']='Olifante';
  $_SESSION['IDprodotto']=4;
?>

<div class="container py-5">
  <div class="container">
    <div class="row align-items-start ">
      <div class="col mt-5 pt-4">
        <img src="../Immagini/olifante.jpg"  alt="Olifante" class="dimensioni"/>
      </div>
      <div class="col">
        <h1 class="titoloCard"> Olifante </h1>
        <p class="testoBase">La parola olifante deriva dall'antico francese
          olifant a sua volta dal latino elephantus, "elefante". Nel Medioevo 
          cristiano il corno fu un materiale usato per realizzare oggetti di
          pregio tra cui persino calici, anche se quest'ultimo uso fu presto
          proibito. Durevole invece fu la consuetudine medievale di adoperare
          ogni sorta di corni di ruminanti per farne vasi potori  molti di 
          essi finirono nei tesori delle chiese e divennero reliquiari o vasi 
          per l'olio santo.
        </p>
      </div>
    </div>
    
    <div class="row align-items-end ">
      <div class="col mt-5">
        <div id="votazione">
          <form name="sent-rating" id="sent-rating">
            <input type="radio" value="10" name="star" id="stella1" title="eccellente" class="costellazione">
            <input type="radio" value="8" name="star"  id="stella2" title="ottimo" class="costellazione">
            <input type="radio" value="6" name="star"  id="stella3" title="discreto" class="costellazione">
            <input type="radio" value="4" name="star"  id="stella4" title="basso" class="costellazione">
            <input type="radio" value="2" name="star"  id="stella5" title="pessimo" class="costellazione">
          </form>
        </div>
      </div>

      <div class="col mt-5">
        <div class="text-end">
          <a href="carrello.php" <button type="button" class="btn btn-outline-dark me-2">Aggiungi al carrello</button></a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  include('../Templates/Footer.php');
?>