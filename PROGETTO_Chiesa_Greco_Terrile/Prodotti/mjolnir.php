<?php
  include('../Templates/Header.php');
  include('../connessione.php');
  $_SESSION['prodotto']='Mjolnir';
  $_SESSION['IDprodotto']=3;
   $select = "SELECT Voto, NumVoti FROM prodotti WHERE ID='".$_SESSION['IDprodotto']."'";
  $result=mysqli_query($con,$select);
  $row = mysqli_fetch_assoc($result);
?>

<div class="container py-5">
  <div class="container">
    <div class="row align-items-start">
      <div class="col mt-5 pt-4">
        <img src="../Immagini/mjolnir.png"  alt="Mjolnir" class="dimensioni"/>
      </div>
      <div class="col">
        <h1 class="titoloCard"> Mjolnir </h1>
        <p class="testoBase">Il Mjöllnir, sovente semplificato in Mjolnir chiamato anche Martello di Thor,
        è l'arma di Thor (lett. "Fulmine"), il dio personificante il fulmine
          e il tuono nella mitologia norrena. È in genere rappresentato originariamente
          come un martello. È realizzato dai nani, o, secondo l'Edda in prosa
          di Snorri Sturluson del XIII secolo, dal nano Sindri per una disputa con 
          il dio Loki su chi avesse potuto creare l'arma più meravigliosa per gli dèi.
          Il suo significato simbolico, teologico, è comparabile a quello del Vajra
          (il "fulmine" o "diamante", arma di Indra), e simboli simili, tra cui la svastica,
          vedico come testimoniato dal fatto che in Scandinavia  
          e Inghilterra venisse rappresentato anche come croce uncinata
        </p>
      </div>
    </div>
    
    <div class="row align-items-end ">
      <div class="col mt-5">
        <div id="votazione">
          <form name="sent-rating" id="sent-rating" action="recensione.php" method="POST">
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