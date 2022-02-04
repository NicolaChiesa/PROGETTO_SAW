<?php
  include('../Templates/Header.php');
  $_SESSION['prodotto']='Olifante';
  $_SESSION['IDprodotto']=4;
?>

<p>PAGINA OLIFANTE</p>
 <a href="carrello.php"<button id="pulsante"><i class="icon-shopping-cart"></i> Aggiungi al carrello</button></a>
 <a href="finisci.php"<button id="pulsante"><i class="icon-shopping-cart"></i> Vai al carrello</button></a>

<?php
  include('../Templates/Footer.php');
?>