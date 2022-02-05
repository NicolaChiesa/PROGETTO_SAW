<?php
  include('../Templates/Header.php');
  $_SESSION['prodotto']='Excalibur';
  $_SESSION['IDprodotto']=2;
?>
<div class="container py-5">
  <div class="mydiv1">
  <br>
  <br>
  <br>
    <div class="polaroid">
      <img src="../Immagini/excalibur.png"  alt="..." height="350"/>
    </div>
    <div>
      <p class="titoloCard"> Excalibur </p>
      <p class="testoBase">Il nome Excalibur vuol dire Colei che taglia l'acciaio,<br>
        ma il nome deriva dal gallese Caledfwlch, una frase composta da "duro" <br>
        (Caled) e "breccia, spaccatura". Caledfwlch appare per la prima volta in <br>
        diverse opere gallesi, tra cui il racconto in prosa Culhwch e Olwen <br>
        (11-12 ° secolo circa), per poi essere latinizzata in Caliburn da Goffredo di<br>
         Monmouth nella Historia Regum Britanniae. Ma La spada Caledfwlch potrebbe <br>
        essere ispirata alla famosa Caladbolg ovvero la mitica spada di Fergus mac <br>
        Róich nel Ciclodell'Ulster della Mitologia irlandese. Infatti il nome di questa <br>
        spada è foneticamentesimile al nome Caledfwlch, due studiosi Rachel Bromwich<br>
        e D. Simon Evans, Suggeriscono inveceche entrambi i nomi "potrebbero <br>
        essere sorti in modo simile in una data molto precoce come <br>
        nomi generici per una spada". La spada Caledfwlch (e quindi Excalibur)  <br>
        divenne quindi proprietàesclusiva di Artù nella tradizione britannica.<br>
      </p>
    </div>
  </div>
  <a href="carrello.php" <button type="button" class="btn btn-outline-dark me-2">Aggiungi al carrello</button></a>
</div>
<?php
  include('../Templates/Footer.php');
?>