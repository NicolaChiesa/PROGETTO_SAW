<?php
  include('../Templates/Header.php');
  include('../connessione.php');
  $_SESSION['prodotto']='Ruyi Jingu Bang';
  $_SESSION['IDprodotto']=6;
  $select = "SELECT Voto, NumVoti FROM prodotti WHERE ID='".$_SESSION['IDprodotto']."'";
  $result=mysqli_query($con,$select);
  $row = mysqli_fetch_assoc($result);
?>

<div class="container py-5">
  <div class="container">
    <div class="row align-items-start ">
      <div class="col mt-5 pt-4">
        <img src="../Immagini/RuyiJinguBang2.jpg"  alt="RuyiJinguBang" class="dimensioni"/>
      </div>
      <div class="col">
        <h1 class="titoloCard"> RuyiJinguBang </h1>
        <p class="testoBase"><br> 
        Ruyi Jingu Bang ( cinese :如意金箍棒; pinyin : Rúyì Jīngū Bàng ),
        o semplicemente Ruyi Bang o Jingu Bang , è il nome poetico di  
        un bastone magico brandito dalla scimmia immortale Sun Wukong nel  
        classico romanzo cinese del XVI secolo Journey ad occidente . 
        Anthony Yu traduce il nome semplicemente come "The Compliant  
        Golden-Hooped Rod",  mentre WJF Jenner lo traduce 
        come "As-You-Will Gold-Banded Cudgel".Il bastone appare 
        per la prima volta nel terzo capitolo quando il Re Scimmia 
        si reca nel regno sottomarino di Ao Guang, il Re  Drago 
        del Mare Orientale , alla ricerca di un'arma magica che 
        corrisponda alla sua forza e abilità.
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
            <input type="submit" value="Invia recensione">
        </div>
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
echo'su '.$row['NumVoti'].' voti la media di voto è: '.$row['Voto'];
  include('../Templates/Footer.php');
?>