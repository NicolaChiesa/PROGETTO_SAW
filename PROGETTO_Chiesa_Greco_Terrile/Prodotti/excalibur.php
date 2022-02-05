<?php
  include('../Templates/Header.php');
  $_SESSION['prodotto']='Excalibur';
  $_SESSION['IDprodotto']=2;
?>
<div class="container py-5">
  <div class="mydiv1">
    <div class="polaroid">
      <img src="../Immagini/excalibur.png"  alt="..." height="350"/>
    </div>
    <div>
      <p class="titoloCard"> Excalibur </p>
      <p class="testoBase">Il nome Excalibur vuol dire Colei che taglia l'acciaio,<br>
        ma il nome deriva dal gallese Caledfwlch, una frase composta da "duro" (Caled) e "breccia, <br>
        spaccatura". Caledfwlch appare per la prima volta in diverse opere gallesi, tra cui <br>
        il racconto in prosa Culhwch e Olwen (11-12 ° secolo circa), per poi essere latinizzata in Caliburn <br>
        da Goffredo di Monmouth nella Historia Regum Britanniae. Ma La spada Caledfwlch potrebbe <br>
        essere ispirata alla famosa Caladbolg ovvero la mitica spada di Fergus mac Róich nel Ciclo <br>
        dell'Ulster della Mitologia irlandese. Infatti il nome di questa spada è foneticamente <br>
        simile al nome Caledfwlch, due studiosi Rachel Bromwich e D. Simon Evans, Suggeriscono invece<br>
        che entrambi i nomi "potrebbero essere sorti in modo simile in una data molto precoce come <br>
        nomi generici per una spada". La spada Caledfwlch (e quindi Excalibur) divenne quindi proprietà <br>
        esclusiva di Artù nella tradizione britannica.<br>
      </p>
    </div>
  </div>
  <a href="carrello.php" <button type="button" class="btn btn-outline-dark me-2">Aggiungi al carrello</button></a>
  <!--<a href="finisci.php" <button type="button" class="btn btn-outline-dark me-2">Vai al carrello</button></a>
  <a href="carrello.php"<button id="pulsante"><i class="icon-shopping-cart"></i> Aggiungi al carrello</button></a>
  <a href="finisci.php"<button id="pulsante"><i class="icon-shopping-cart"></i> Vai al carrello</button></a>-->

</div>
<?php
  include('../Templates/Footer.php');
?>