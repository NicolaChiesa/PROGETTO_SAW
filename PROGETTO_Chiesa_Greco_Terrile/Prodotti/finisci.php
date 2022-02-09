<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$prezzo=0;
	if(isset($_SESSION['id']))
		$query="SELECT IDprodotto, SUM(Quantita) AS Quantita FROM acquisto WHERE IDutente='".$_SESSION['id']."' GROUP BY IDprodotto";
	else
		$query="SELECT IDprodotto, SUM(Quantita) AS Quantita FROM acquisto WHERE NumSessione='".session_id()."' AND IDutente='0' GROUP BY IDprodotto";
	$res=mysqli_query($con,$query);
	if($res)
		{
			if($rowcount=mysqli_num_rows($res)>0)
			{
				echo'  
				<div class="container py-5">
					<h1 class="titolo"> Ecco gli articoli che hai selezionato: </h1>
				<div class="row row-cols-1 row-cols-md-3 g-4">';
			while($row=mysqli_fetch_assoc($res))
				{
				$select="SELECT * FROM prodotti WHERE ID='".$row['IDprodotto']."'";
				$result=mysqli_query($con,$select);
				if($result)
					{
					$riga=mysqli_fetch_assoc($result);
					echo'
					<div class="col">
						<div class="card border-dark h-100">
						<img src="../Immagini/'.$riga['ID'].'.jpg" class="card-img-top immagini" alt='.$riga['Nome'].'>
							<div class="card-body">
								<h5 class="card-title titoloCard">'.$riga['Nome'].'</h5>
								<p class="card-text testoCard"> Stai acquistando '.$row['Quantita'].' Durlindana alla modica cifra di: '.$riga['prezzo']*$row['Quantita'].' euro</p>';
								$prezzo+=$riga['prezzo']*$row['Quantita'];
								echo'
								<a href="elimina.php?ID='.$riga['ID'].'&num='.$row['Quantita'].'" class="btn btn-outline-light">Elimina dal carrello</a>
							</div>
						</div>
					</div>';
					}
				}
						
		echo'</div>
				</div> 
				<div class="container"> 
					<div class="row align-items-start mb-3">
					<div class="col">
						<div class="col scritta">
							<span> Per una spesa totale di: '.$prezzo.' euro </span>
							<a href="concludi.php" <button type="button" class="btn btn-outline-light btn-lg me-2 ms-5">Vai al pagamento</button></a>
						</div>
					</div>
					</div>
				</div>';
		}
		
	else
	echo'
		<div class="container py-5 my-5">
			<div class="row align-items-md-stretch">
				<div class="col"></div>
					<div class="col-md-6">
						<div class="h-100 p-5 bg-light border border-3 border-danger rounded-3">
							<p class="testoBase text-center"> Il tuo carrello è vuoto!</p>
						</div>
					</div>
				<div class="col">
				</div>
				</div>
			</div>
		</div>';
	}
	mysqli_close($con);	
	include('../Templates/Footer.php');
?>
