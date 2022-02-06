<?php
  include('../Templates/Header.php');
  include('../connessione.php');
  $_SESSION['prodotto']='Durlindana';
  $_SESSION['IDprodotto']=1;
  $select = "SELECT Voto, NumVoti FROM prodotti WHERE ID='".$_SESSION['IDprodotto']."'";
  $result=mysqli_query($con,$select);
  $row = mysqli_fetch_assoc($result);
?>
<div class="container py-5">
  <div class="container">
    <div class="row align-items-start">
      <div class="col mt-5 pt-4">
        <img src="../Immagini/durlindana.jpg"  alt="Durlindana" class="dimensioni"/>
      </div>
      <div class="col">
        <h1 class="titoloCard"> Durlindana </h1>
        <p class="testoBase">Le origini dell'arma non sono chiare, visto che il ciclo  
          carolingio propone diverse tesi contrastanti,
          anche se la più conosciuta è 
          che a forgiare la spada sia stato Weland il fabbro 
          La Chanson de Roland vuole invece che la spada fosse stata 
          donata a Orlando proprio da Carlo Magno, 
          che l'avrebbe a sua volta ricevuta in dono da un angelo;
          nel famoso poema Orlando Furioso di Ludovico Ariosto, si dice invece 
          che la spada sarebbe stata donata al cavaliere da Malagigi e 
          che sarebbe un tempo appartenuta a Ettore di Troia 
          tuttavia non c'è nessuna menzione della spada nella Iliade.
        </p>
      </div>
    </div>
    
    <div class="row align-items-end ">
      <div class="col mt-5">
        <div id="votazione">
          <form name="sent-rating" id="sent-rating" action="../Prodotti/recensione.php" method="POST">
            <input type="radio" value="10" name="star" id="stella1" title="eccellente" class="costellazione">
            <input type="radio" value="8" name="star"  id="stella2" title="ottimo" class="costellazione">
            <input type="radio" value="6" name="star"  id="stella3" title="discreto" class="costellazione">
            <input type="radio" value="4" name="star"  id="stella4" title="basso" class="costellazione">
            <input type="radio" value="2" name="star"  id="stella5" title="pessimo" class="costellazione">
          </form>
        </div>
        <input type="submit" value="Invia recensione">
      </div>

      <div class="col mt-5">
          <?php
            echo'
                <div class="bg-transparent">
                  <p class="testoBase"> su '.$row['NumVoti'].' voti la media di voto è: '.$row['Voto'].'</p>
                </div>
                ';
          ?>
      </div>

      <div class="col mt-5">
        <div class="text-end">
          <a href="carrello.php" <button type="button" class="btn btn-outline-light me-2">Aggiungi al carrello</button></a>
        </div>
      </div>
    </div>

  </div>
</div>

<?php
  include('../Templates/Footer.php');
?>
   