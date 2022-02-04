<?php
  include('../Templates/Header.php');
  $_SESSION['prodotto']='Pomo della Discordia';
  $_SESSION['IDprodotto']=5;
?>

<p>PAGINA POMO DELLA DISCORDIA</p>
 <a href="carrello.php"<button id="pulsante"><i class="icon-shopping-cart"></i> Aggiungi al carrello</button></a>
 <a href="finisci.php"<button id="pulsante"><i class="icon-shopping-cart"></i> Vai al carrello</button></a>
<?php
  include('../Templates/Footer.php');
?>