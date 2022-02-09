<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	if(isset($_SESSION['id']))
		$query="SELECT IDprodotto, SUM(Quantita) AS Quantita FROM acquisto WHERE IDutente='".$_SESSION['id']."' GROUP BY IDprodotto";
	else
		$query="SELECT IDprodotto, SUM(Quantita) FROM AS Quantita acquisto WHERE NumSessione='".session_id()."' AND IDutente='0' GROUP BY IDprodotto";
	$res=mysqli_query($con,$query);
	if($res)
		{
		echo$rowcount=mysqli_num_rows($res);
			if($rowcount=mysqli_num_rows($res)>0)
			{
				echo'  
				<div class="container py-5">
					<h1 class="titolo"> Ecco gli articoli che hai selezionato: </h1>
				<div class="row row-cols-1 row-cols-md-3 g-4">';
				}
		while($row=mysqli_fetch_assoc($res))
			{
			$select="SELECT * FROM prodotti WHERE ID='".$row['IDprodotto']."'";
			$result=mysqli_query($con,$select);
			if($result)
				{
				$rig=mysqli_fetch_assoc($result);
				echo'
				<div class="col">
					<div class="card border-dark h-100">
					<img src="../Immagini/'.$riga['ID'].'.jpg" class="card-img-top immagini" alt='.$riga['Nome'].'>
						<div class="card-body">
							<h5 class="card-title titoloCard">'.$riga['Nome'].'</h5>
							<p class="card-text testoCard"> Stai acquistando '.$row['Quantita'].' Durlindana alla modica cifra di: '.$riga['prezzp'].'*'.riga['prezzo'].' euro</p>
							<a href="elimina.php?ID='.$riga['ID'].'&num='.$row['Quantita'].'" class="btn btn-outline-light">Elimina dal carrello</a>
						</div>
					</div>
				</div>';
				}
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
						<a href="elimina.php?ID=2&num='.$sommaexc.'" class="btn btn-outline-light">elimina dal carrello</a>
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
						<a href="elimina.php?ID=3&num='.$sommamart.'" class="btn btn-outline-light">Elimina dal carrello</a>
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
						<a href="elimina.php?ID=4&num='.$sommaol.'" class="btn btn-outline-light">Elimina dal carrello</a>
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
						<h5 class="card-title titoloCard">Pomo d\'oro</h5>
						<p class="card-text testoCard">Stai acquistando '.$sommapom.' Pomo della discordia alla modica cifra di: '.$prezzopom.' euro</p>
						<a href="elimina.php?ID=5&num='.$sommapom.'" class="btn btn-outline-light">Elimina dal carrello</a>
					</div>
				</div>
			</div>';
			}
		if($sommaruy>0)
			{
			echo'
			<div class="col">
				<div class="card border-dark h-100">
				<img src="../Immagini/RuyiJinguBang2.jpg" class="card-img-top immagini" alt="RuyiJinguBang">
					<div class="card-body">
						<h5 class="card-title titoloCard">RuyiJinguBang</h5>
						<p class="card-text testoCard">Stai acquistando '.$sommaruy.' RuyiJinguBang alla modica cifra di: '.$prezzoruy.' euro</p>
						<a href="elimina.php?ID=6&num='.$sommaruy.'" class="btn btn-outline-light">Elimina dal carrello</a>
					</div>
				</div>
			</div>';
			}
	}
	if(!$flag)
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
	mysqli_close($con);	
	include('../Templates/Footer.php');
?>
