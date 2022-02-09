<?php
  include('../Templates/Header.php');
  include('../connessione.php');
  if(!isset($_POST['cerca']))
    {
    $query="SELECT * FROM prodotti";
    $mess='';
    }
  else
    {
    $cerca=htmlspecialchars($_POST['cerca']);
	$cerca=mysqli_real_escape_string($con, $cerca);
    $query = "SELECT * FROM prodotti WHERE Nome LIKE '%".$cerca."%'";
    $mess=' che hai cercato';
    }
  $res=mysqli_query($con,$query);
  if($res)
  {
    echo'
    <div class="container py-5">
      <h1 class="titolo">
          Ecco l elenco di tutti i nostri articoli'.$mess.'
      </h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">';
      if(!$rowcount=mysqli_num_rows($res))
	    echo'
	    <div class="container py-5 my-5">
		    <div class="row align-items-md-stretch">
	    	    <div class="col"></div>
				    <div class="col-md-6">
				    <div class="h-100 p-5 bg-light border border-3 border-danger rounded-3">
					    <p class="testoBase text-center"> La ricerca non ha portato a nessun risultato</p>
					    </div>
				    </div>
			    <div class="col"></div>
		    </div>
	    </div>';
      else
        {
          while($row=mysqli_fetch_assoc($res))
              {
              echo'
              <div class="col">
                  <div class="card border-dark h-100">
                    <img src="../Immagini/'.$row['ID'].'.jpg" class="card-img-top immagini" alt='.$row['Nome'].'>
                    <div class="card-body">
                      <h5 class="card-title titoloCard">'.$row['Nome'].'</h5>
                      <p class="card-text testoCard">'.$row['Descrizione Breve'].'</p>
                      <a href="./prodotto.php?ID='.$row['ID'].'" class="btn btn-outline-light">Scopri...</a>
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
        }
    }

  include('../Templates/Footer.php');
?>
