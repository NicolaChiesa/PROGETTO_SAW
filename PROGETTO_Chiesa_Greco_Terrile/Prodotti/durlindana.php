<?php
  include('../Templates/Header.php');
  $_SESSION['prodotto']='Durlindana';
  $_SESSION['IDprodotto']=1;
?>
<div class="container py-5">
  <div class="mydiv1">
    <div class="polaroid">
      <img src="../Immagini/durlindana.jpg"  alt="..." height="600"/>
     </div>
          
    <p class="testoBase">Le origini dell'arma non sono chiare, visto che il ciclo carolingio propone diverse tesi 
      contrastanti, anche se la più conosciuta è che a forgiare la spada sia stato Weland il fabbro.<br> 
      La Chanson de Roland vuole invece che la spada fosse stata donata a Orlando proprio da Carlo Magno, 
      che l'avrebbe a sua volta ricevuta in dono da un angelo; <br>
      nel famoso poema Orlando Furioso di Ludovico Ariosto, si dice invece che la spada sarebbe stata 
      donata al cavaliere da Malagigi e che sarebbe un tempo appartenuta a Ettore di Troia 
      (tuttavia non c'è nessuna menzione della spada nella Iliade). <br>
    </p>

  <p>PAGINA DURLINDANA</p>
  <a href="carrello.php"<button id="pulsante"><i class="icon-shopping-cart"></i> Aggiungi al carrello</button></a>
  <a href="finisci.php"<button id="pulsante"><i class="icon-shopping-cart"></i> Vai al carrello</button></a>
</div>
<?php
  include('../Templates/Footer.php');
?>