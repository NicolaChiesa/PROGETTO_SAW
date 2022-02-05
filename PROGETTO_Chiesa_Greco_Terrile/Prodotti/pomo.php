<?php
  include('../Templates/Header.php');
  $_SESSION['prodotto']='Pomo della Discordia';
  $_SESSION['IDprodotto']=5;
?>

<div class="container py-5">
  <div class="container">
    <div class="row align-items-start ">
      <div class="col mt-5 pt-4">
        <img src="../Immagini/pomo.jpg"  alt="Pomo della Discordia" class="dimensioni"/>
      </div>
      <div class="col">
        <h1 class="titoloCard"> Pomo d'oro </h1>
        <p class="testoBase">
        Il pomo della discordia o mela della discordia è,
        secondo il mito, la mela lanciata da Eris, dea della discordia,
        sul tavolo dove si stava svolgendo il banchetto in onore del 
        matrimonio di Peleo e Teti che causò una lite tra le dee presenti
        e che condusse, per una serie di eventi, alla Guerra di Troia.
        In senso figurato, il pomo della discordia è un oggetto o un 
        fatto che è causa di disaccordo, di contrasto e di lite fra le persone.
        </p>
      </div>
    </div>
    
    <div class="row align-items-end ">
      <div id="votazione">
        <form name="sent-rating" id="sent-rating">
          <input type="radio" value="10" name="star" id="stella1" title="eccellente" class="costellazione">
          <input type="radio" value="8" name="star"  id="stella2" title="ottimo" class="costellazione">
          <input type="radio" value="6" name="star"  id="stella3" title="discreto" class="costellazione">
          <input type="radio" value="4" name="star"  id="stella4" title="basso" class="costellazione">
          <input type="radio" value="2" name="star"  id="stella5" title="pessimo" class="costellazione">
        </form>
      </div>
      

      <div class="text-end">
        <a href="carrello.php" <button type="button" class="btn btn-outline-dark me-2">Aggiungi al carrello</button></a>
      </div>
    </div>
  </div>
</div>

<?php
  include('../Templates/Footer.php');
?>