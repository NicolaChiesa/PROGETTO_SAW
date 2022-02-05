<?php
  include('../Templates/Header.php');
  $_SESSION['prodotto']='Mjolnir';
  $_SESSION['IDprodotto']=3;
?>
<div class="container py-5">
  <div class="mydiv1">
    <div class="polaroid">
      <img src="../Immagini/mjolnir.png"  alt="..." height="350"/>
    </div>
    <div>
      <p class="titoloCard"> Mjolnir </p>
      <p class="testoBase">Il Mjöllnir, sovente semplificato in Mjolnir chiamato anche Martello di Thor,<br> 
         è l'arma di Thor (lett. "Fulmine"), il dio personificante il fulmine<br> 
         e il tuono nella mitologia norrena. È in genere rappresentato originariamente<br> 
         come un martello. È realizzato dai nani, o, secondo l'Edda in prosa<br>  
         di Snorri Sturluson del XIII secolo, dal nano Sindri per una disputa con <br> 
         il dio Loki su chi avesse potuto creare l'arma più meravigliosa per gli dèi.<br> 
         Il suo significato simbolico, teologico, è comparabile a quello del Vajra<br>
         (il "fulmine" o "diamante", arma di Indra), e simboli simili, tra cui la svastica,<br> 
         vedico come testimoniato dal fatto che in Scandinavia  <br>
         e Inghilterra venisse rappresentato anche come croce uncinata<br>
      </p>
    </div>
  </div>
  <a href="carrello.php" <button type="button" class="btn btn-outline-dark me-2">Aggiungi al carrello</button></a>
</div>
<?php
  include('../Templates/Footer.php');
?>