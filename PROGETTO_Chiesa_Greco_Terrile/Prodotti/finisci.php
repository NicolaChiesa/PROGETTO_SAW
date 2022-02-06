<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$query="SELECT * FROM acquisto WHERE NumSessione='".session_id()."'";
	$res=mysqli_query($con,$query);
	$sommadur=0;
	$sommamart=0;
	$sommaol=0;
	$sommaexc=0;
	$sommaruy=0;
	$sommapom=0;
	$prezzodur=0;
	$prezzomart=0;
	$prezzool=0;
	$prezzoexc=0;
	$prezzoruy=0;
	$prezzopom=0;
	$flag=0;
	$prezzo=0;
	if($res!=false)
		{
		while($row = mysqli_fetch_assoc($res))
			{
				$prezzo+=$row['Prezzo'];
				$flag=1;
				if($row['IDprodotto']==1)
					{
					$sommadur+=1;
					$prezzodur+=$row['Prezzo'];
					}
				else if($row['IDprodotto']==2)
					{	
					$sommaexc+=1;
					$prezzoexc+=$row['Prezzo'];
					}
				else if($row['IDprodotto']==3)
					{
					$sommamart+=1;
					$prezzomart+=$row['Prezzo'];
					}
				else if($row['IDprodotto']==4)
					{
					$sommaol+=1;
					$prezzool+=$row['Prezzo'];
					}
				else if($row['IDprodotto']==5)
					{
					$sommapom+=1;
					$prezzopom+=$row['Prezzo'];
					}
				else if($row['IDprodotto']==6)
					{
					$sommaruy+=1;
					$prezzoruy+=$row['Prezzo'];
					}
			}
			if($flag==1)
			{
				echo'  
				<div class="container py-5">
					<h1 class="titolo"> Ecco gli articoli che hai selezionato: </h1>
				<div class="row row-cols-1 row-cols-md-3 g-4">';
				}
		if($sommadur>0)
			{
			echo'
			<div class="col">
				<div class="card border-dark h-100">
				<img src="../Immagini/durlindana.jpg" class="card-img-top immagini" alt="Durlindana">
					<div class="card-body">
						<h5 class="card-title titoloCard">Durlindana</h5>
						<p class="card-text testoCard"> Stai acquistando '.$sommadur.' Durlindana alla modica cifra di: '.$prezzodur.' euro</p>
						<a href="elimina.php?ID=1&num='.$sommadur.'" class="btn btn-outline-dark">Elimina dal carrello</a>
					</div>
				</div>
			</div>';
			}
		if($sommaexc>0)
			{
			echo'
			<div class="col">
				<div class="card border-dark h-100">
				<img src="../Immagini/excalibur.png" class="card-img-top immagini" alt="Excalibur">
					<div class="card-body">
						<h5 class="card-title titoloCard">Excalibur</h5>
						<p class="card-text testoCard">Stai acquistando '.$sommaexc.' Excalibur alla modica cifra di: '.$prezzoexc.' euro</p>
						<a href="elimina.php?ID=2&num='.$sommaexc.'" class="btn btn-outline-dark">elimina dal carrello</a>
					</div>
				</div>
			</div>';
			}
		if($sommamart>0)
			{
			echo'
			<div class="col">
				<div class="card border-dark h-100">
				<img src="../Immagini/mjolnir.png" class="card-img-top immagini" alt="Mjolnir">
					<div class="card-body">
						<h5 class="card-title titoloCard">Mjolnir</h5>
						<p class="card-text testoCard">Stai acquistando '.$sommamart.' Mjolnir alla modica cifra di: '.$prezzomart.' euro</p>
						<a href="elimina.php?ID=3&num='.$sommamart.'" class="btn btn-outline-dark">Elimina dal carrello</a>
					</div>
				</div>
			</div>';
			}
		if($sommaol>0)
			{
			echo'
			<div class="col">
				<div class="card border-dark h-100">
				<img src="../Immagini/olifante.jpg" class="card-img-top immagini" alt="Olifante">
					<div class="card-body">
						<h5 class="card-title titoloCard">Olifante</h5>
						<p class="card-text testoCard">Stai acquistando '.$sommaol.' Olifante alla modica cifra di: '.$prezzool.' euro</p>
						<a href="elimina.php?ID=4&num='.$sommaol.'" class="btn btn-outline-dark">Elimina dal carrello</a>
					</div>
				</div>
			</div>';
			}
		if($sommapom>0)
			{
			echo'
			<div class="col">
				<div class="card border-dark h-100">
				<img src="../Immagini/pomo.jpg" class="card-img-top immagini" alt="Pomo della discordia">
					<div class="card-body">
						<h5 class="card-title titoloCard">Pomo d oro</h5>
						<p class="card-text testoCard">Stai acquistando '.$sommapom.' Pomo della discordia alla modica cifra di: '.$prezzopom.' euro</p>
						<a href="elimina.php?ID=5&num='.$sommapom.'" class="btn btn-outline-dark">Elimina dal carrello</a>
					</div>
				</div>
			</div>';
			}
		if($sommaruy>0)
			{
			echo'
			<div class="col">
				<div class="card border-dark h-100">
				<img src="../Immagini/RuyiJinguBang3.jpg" class="card-img-top immagini" alt="RuyiJinguBang">
					<div class="card-body">
						<h5 class="card-title titoloCard">RuyiJinguBang</h5>
						<p class="card-text testoCard">Stai acquistando '.$sommaruy.' Durlindana alla modica cifra di: '.$prezzoruy.' euro</p>
						<a href="elimina.php?ID=6&num='.$sommaruy.'" class="btn btn-outline-dark">Elimina dal carrello</a>
					</div>
				</div>
			</div>';
			}
	}
	if($flag==0)
	{
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
	else
		{
		echo'</div>
		</div>';
		echo '
			<div class="row align-items-end"> 
				<div class="col">per una spesa totale di: '.$prezzo.' euro
				</div>
				<div class="col">
				<a href="concludi.php" <button type="button" class="btn btn-outline-light me-2 ms-5">Vai al pagamento</button></a>
				</div>
			</div>';
		}


	mysqli_close($con);	
	include('../Templates/Footer.php');
?>
