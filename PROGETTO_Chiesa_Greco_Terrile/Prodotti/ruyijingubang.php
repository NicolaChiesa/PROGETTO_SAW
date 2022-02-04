<?php
  include('../Templates/Header.php');
  $_SESSION['prodotto']='Ruyi Jingu Bang';
  $_SESSION['IDprodotto']=6;
?>

<p>PAGINA RUYIJINGUBANG</p>
 <a href="carrello.php"<button id="pulsante"><i class="icon-shopping-cart"></i> Aggiungi al carrello</button></a>
 <a href="finisci.php"<button id="pulsante"><i class="icon-shopping-cart"></i> Vai al carrello</button></a>
<?php
  include('../Templates/Footer.php');
?>