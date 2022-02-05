<?php
  include('../Templates/Header.php');
  $_SESSION['prodotto']='Ruyi Jingu Bang';
  $_SESSION['IDprodotto']=6;
?>
<div class="container py-5">
  <div class="mydiv1">
    <div class="polaroid">
      <img src="../Immagini/RuyiJinguBang2.jpg"  alt="..." height="350"/>
    </div>
    <div>
      <p class="titoloCard"> RuyiJinguBang </p>
      <p class="testoBase"><br> 
      Ruyi Jingu Bang ( cinese :如意金箍棒; pinyin : Rúyì Jīngū Bàng )<br> 
      , o semplicemente Ruyi Bang o Jingu Bang , è il nome poetico di <br> 
      un bastone magico brandito dalla scimmia immortale Sun Wukong nel <br> 
      classico romanzo cinese del XVI secolo Journey ad occidente . <br> 
      Anthony Yu traduce il nome semplicemente come "The Compliant <br> 
      Golden-Hooped Rod",  mentre WJF Jenner lo traduce <br> 
      come "As-You-Will Gold-Banded Cudgel".<br> 
      </p>
    </div>
  </div>
  <a href="carrello.php" <button type="button" class="btn btn-outline-dark me-2">Aggiungi al carrello</button></a>
</div>
  include('../Templates/Footer.php');
?>