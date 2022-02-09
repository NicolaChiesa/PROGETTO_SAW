<?php
  include('../Templates/Header.php');
  include('../connessione.php');
  if(isset($_GET['ID']))
  {
    $_GET['ID']=mysqli_real_escape_string($con,$_GET['ID']);
      $query="SELECT * FROM prodotti WHERE ID='".$_GET['ID']."'";
      $res=mysqli_query($con,$query);
      if($res)
      {
      $row = mysqli_fetch_assoc($res);
        echo'
        <div class="container py-5">
          <div class="container">
            <div class="row align-items-start">
              <div class="col mt-5 pt-4">
                <img src="../Immagini/'.$row['ID'].'.jpg"  alt='.$row['Nome'].' class="dimensioni"/>
              </div>
              <div class="col">
                <h1 class="titoloCard"> '.$row['Nome'].' </h1>
                <p class="testoBase">'.$row['Descrizione Lunga'].'
                </p>
              </div>
            </div>
    
            <div class="row align-items-end">
              <div class="col mt-5">
                <div id="votazione">
                  <form name="sent-rating" id="sent-rating" action="../Prodotti/recensione.php?ID='.$_GET['ID'].'" method="POST">
                    <input type="radio" value="5" name="star" id="stella1" title="eccellente" class="costellazione">
                    <input type="radio" value="4" name="star"  id="stella2" title="ottimo" class="costellazione">
                    <input type="radio" value="3" name="star"  id="stella3" title="discreto" class="costellazione">
                    <input type="radio" value="2" name="star"  id="stella4" title="basso" class="costellazione">
                    <input type="radio" value="1" name="star"  id="stella5" title="pessimo" class="costellazione">
                    <input type="submit" value="Invia recensione">
                  </form>
                </div>
              </div>';
        $select = "SELECT Voto, NumVoti, Nome FROM prodotti WHERE ID='".$_GET['ID']."'";
        $result=mysqli_query($con,$select);
        if($result)
            {
            $row = mysqli_fetch_assoc($result);
            echo'
              <div class="col mt-5">
                        <div class="bg-transparent">
                          <p class="testoBase"> su '.$row['NumVoti'].' voti la media di voto è: '.$row['Voto'].'</p>
                        </div>
              </div>';
              }
              echo'
              <div class="col mt-5">
                <div class="text-end">
                  <form style="display: inline" action="carrello.php?ID='.$_GET['ID'].'&nome='.$row['Nome'].'" method="POST">
                    <button type="submit" class="btn btn-outline-light me-2">Aggiungi al carrello</button>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>';
    }
}
  include('../Templates/Footer.php');
?>
   