<?php
  include('../Templates/Header.php');
  include('../connessione.php');
    $select = "SELECT Voto, NumVoti FROM prodotti WHERE ID='2'";
  $result=mysqli_query($con,$select);
  $row = mysqli_fetch_assoc($result);
?>

<div class="container py-5">
  <div class="container">
    <div class="row align-items-start ">
      <div class="col mt-5 pt-4">
        <img src="../Immagini/excalibur.png"  alt="Excalibur" class="dimensioni"/>
      </div>
      <div class="col">
        <h1 class="titoloCard"> Excalibur </h1>
        <p class="testoBase">Il nome Excalibur vuol dire Colei che taglia l'acciaio,
          ma il nome deriva dal gallese Caledfwlch, una frase composta da "duro" 
          (Caled) e "breccia, spaccatura". Caledfwlch appare per la prima volta in 
          diverse opere gallesi, tra cui il racconto in prosa Culhwch e Olwen 
          (11-12 ° secolo circa), per poi essere latinizzata in Caliburn da Goffredo di
          Monmouth nella Historia Regum Britanniae. Ma La spada Caledfwlch potrebbe 
          essere ispirata alla famosa Caladbolg ovvero la mitica spada di Fergus mac 
          Róich nel Ciclodell'Ulster della Mitologia irlandese. Infatti il nome di questa 
          spada è foneticamentesimile al nome Caledfwlch, due studiosi Rachel Bromwich
          e D. Simon Evans, Suggeriscono inveceche entrambi i nomi "potrebbero 
          essere sorti in modo simile in una data molto precoce come
          nomi generici per una spada". La spada Caledfwlch (e quindi Excalibur)  
          divenne quindi proprietàesclusiva di Artù nella tradizione britannica.
        </p>
      </div>
    </div>
    
    <div class="row align-items-end ">
      <div class="col mt-5">
        <div id="votazione">
          <form name="sent-rating" id="sent-rating" action="recensione.php" method="POST">
            <input type="radio" value="5" name="star" id="stella1" title="eccellente" class="costellazione">
            <input type="radio" value="4" name="star"  id="stella2" title="ottimo" class="costellazione">
            <input type="radio" value="3" name="star"  id="stella3" title="discreto" class="costellazione">
            <input type="radio" value="2" name="star"  id="stella4" title="basso" class="costellazione">
            <input type="radio" value="1" name="star"  id="stella5" title="pessimo" class="costellazione">
            <input type="submit" value="Invia recensione">
          </form>
        </div>

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
          <form style="display: inline" action="carrello.php?ID=2&nome=Excalibur" method="POST">
            <button type="submit" class="btn btn-outline-light me-2">Aggiungi al carrello</button>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>

<?php
  include('../Templates/Footer.php');
?>