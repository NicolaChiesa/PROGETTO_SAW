<?php
  include('../Templates/Header.php');
  $_SESSION['prodotto']='Durlindana';
  $_SESSION['IDprodotto']=1;
?>
<div class="container py-5">

  <div class="mydiv1">
    <div class="polaroid">
      <img src="../Immagini/durlindana.jpg"  alt="Durlindana" height="400"/>
    </div>
    <div>
      <p class="titoloCard"> Durlindana </p>
      <p class="testoBase testoProdotto">Le origini dell'arma non sono chiare, visto che il ciclo <br> 
        carolingio propone diverse tesi contrastanti,<br>
        anche se la più conosciuta è <br> 
        che a forgiare la spada sia stato Weland il fabbro.<br> 
        La Chanson de Roland vuole invece che la spada fosse stata <br> 
        donata a Orlando proprio da Carlo Magno, <br> 
        che l'avrebbe a sua volta ricevuta in dono da un angelo; <br>
        nel famoso poema Orlando Furioso di Ludovico Ariosto, si dice invece <br> 
        che la spada sarebbe stata donata al cavaliere da Malagigi e <br> 
        che sarebbe un tempo appartenuta a Ettore di Troia <br> 
        tuttavia non c'è nessuna menzione della spada nella Iliade.
      </p>
    </div>
  </div>
 </div>

  <a href="carrello.php" <button type="button" class="btn btn-outline-dark me-2">Aggiungi al carrello</button></a>
  <a href="finisci.php" <button type="button" class="btn btn-outline-dark me-2">Vai al carrello</button></a>
  <!--<a href="carrello.php"<button id="pulsante"><i class="icon-shopping-cart"></i> Aggiungi al carrello</button></a>
  <a href="finisci.php"<button id="pulsante"><i class="icon-shopping-cart"></i> Vai al carrello</button></a>-->

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $(".costellazione").click(function(){
          alert('hhhhhhhhhhh');
          var vot=(this).val();
          $.ajax({
              type:"POST";
              url"../Prodotti/recensione.php",
              data: {voto: voto},
              dataType:"html"
          });
      });       
    });
  </script>

<?php
  include('../Templates/Footer.php');
?>
   