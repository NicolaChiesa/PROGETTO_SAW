<?php
  include('../Templates/Header.php');
  $_SESSION['prodotto']='Pomo della Discordia';
  $_SESSION['IDprodotto']=5;
?>
<div class="container py-5">
  <div class="mydiv1">
    <div class="polaroid">
      <img src="../Immagini/pomo.jpg"  alt="..." height="400"/>
    </div>
    <div>
      <p class="titoloCard"> Pomo d'oro </p>
      <p class="testoBase">
      Il pomo della discordia o mela della discordia è,<br> 
      secondo il mito, la mela lanciata da Eris, dea della discordia,<br>
       sul tavolo dove si stava svolgendo il banchetto in onore del <br>
       matrimonio di Peleo e Teti che causò una lite tra le dee presenti<br>
      e che condusse, per una serie di eventi, alla Guerra di Troia.<br>
      In senso figurato, il pomo della discordia è un oggetto o un <br>
      fatto che è causa di disaccordo, di contrasto e di lite fra le persone.<br>
      </p>
    </div>
  </div>
  <a href="carrello.php" <button type="button" class="btn btn-outline-dark me-2">Aggiungi al carrello</button></a>
</div>
<?php
  include('../Templates/Footer.php');
?>