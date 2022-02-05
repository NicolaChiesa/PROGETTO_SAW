<?php
  include('../Templates/Header.php');
  $_SESSION['prodotto']='Olifante';
  $_SESSION['IDprodotto']=4;
?>
<div class="container py-5">
  <div class="mydiv1">
    <div class="polaroid">
      <img src="../Immagini/olifante.jpg"  alt="..." height="200"/>
    </div>
    <div>
      <p class="titoloCard"> Olifante </p>
      <p class="testoBase">La parola olifante deriva dall'antico francese<br>
        olifant a sua volta dal latino elephantus, "elefante". Nel Medioevo<br> 
        cristiano il corno fu un materiale usato per realizzare oggetti di<br>
        pregio tra cui persino calici, anche se quest'ultimo uso fu presto<br>
        proibito. Durevole invece fu la consuetudine medievale di adoperare<br>
        ogni sorta di corni di ruminanti per farne vasi potori  molti di <br>
        essi finirono nei tesori delle chiese e divennero reliquiari o vasi <br>
        per l'olio santo.
      </p>
    </div>
  </div>
  <a href="carrello.php" <button type="button" class="btn btn-outline-dark me-2">Aggiungi al carrello</button></a>
</div>
<?php
  include('../Templates/Footer.php');
?>