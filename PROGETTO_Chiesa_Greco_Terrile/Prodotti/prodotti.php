<?php
  include('../Templates/Header.php');
  include('../connessione.php');
  $query="SELECT * FROM prodotti";
  $res=mysqli_query($con,$query);
  if($res)
  echo'
    <div class="container py-5">
      <h1 class="titolo">
          Ecco l elenco di tutti i nostri articoli
      </h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">';
              while($row=mysqli_fetch_assoc($res))
              {
              echo'
              <div class="col">
                  <div class="card border-dark h-100">
                    <img src="../Immagini/'.$row['ID'].'.jpg" class="card-img-top immagini" alt='.$row['Nome'].'>
                    <div class="card-body">
                      <h5 class="card-title titoloCard">'.$row['Nome'].'</h5>
                      <p class="card-text testoCard">'.$row['Descrizione Breve'].'</p>
                      <a href="./ruyijingubang.php" class="btn btn-outline-light">Scopri...</a>
                    </div>
                  </div>
                  </div>
              ';
            }
            echo' 
            </div>
            <p class="scritta">
                Presto arriveranno nuovi fantastici articoli... <br>
                Iscriviti alla nostra newsletter per non perderti nessuna novità!
             </p>
           </div>';

  include('../Templates/Footer.php');
?>
