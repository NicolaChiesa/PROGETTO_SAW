<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$cerca=htmlspecialchars($_POST['cerca']);
	$cerca=mysqli_real_escape_string($con, $cerca);
	$flag=0;
	$query = "SELECT ID FROM prodotti WHERE Nome LIKE '%".$cerca."%' OR Nome LIKE '".$cerca."%' OR Nome LIKE'".$cerca."_'";
	$res=mysqli_query($con,$query);

	if($row=mysqli_fetch_assoc($res))
		{
		if($row['ID']==1)
			{
			echo'  
			<div class="container py-5">
			<h1 class="titolo"> Ecco le i nostri articoli inerenti alla ricerca </h1>
			<div class="row row-cols-1 row-cols-md-3 g-4">
				<div class="col">
					<div class="card border-dark h-100">
					<img src="../Immagini/durlindana.jpg" class="card-img-top immagini" alt="Durlindana">
						<div class="card-body">
						<h5 class="card-title titoloCard">Durlindana</h5>
						<p class="card-text testoCard">Una delle spade più ricercate nella storia dell umanità!</p>
						<a href="../Prodotti/durlindana.php" class="btn btn-outline-dark">Scopri...</a>
						</div>
					</div>
				</div>';
		 $flag=1;
		}
		else if($row['ID']==2)
			{
			echo'
			<div class="container py-5">
			<h1 class="titolo"> Ecco le i nostri articoli inerenti alla ricerca </h1>
			<div class="row row-cols-1 row-cols-md-3 g-4">
				<div class="col">
					<div class="card border-dark h-100">
					<img src="../Immagini/excalibur.png" class="card-img-top immagini" alt="Excalibur">
						<div class="card-body">
						<h5 class="card-title titoloCard">Excalibur</h5>
						<p class="card-text testoCard">Riuscirai a estrarre la spada e a governare sull Inghilterra?</p>
						<a href="../Prodotti/excalibur.php" class="btn btn-outline-dark">Scopri...</a>
						</div>
					</div>
				</div>';
			$flag=1;
			}
		else if($row['ID']==3)
			{
			echo'
			<div class="container py-5">
			<h1 class="titolo"> Ecco le i nostri articoli inerenti alla ricerca </h1>
			<div class="row row-cols-1 row-cols-md-3 g-4">
				<div class="col">
					<div class="card border-dark h-100">
					<img src="../Immagini/mjolnir.png" class="card-img-top immagini" alt="Mjolnir">
						<div class="card-body">
						<h5 class="card-title titoloCard">Mjolnir</h5>
						<p class="card-text testoCard">Sarai degno di sollevare il martello del dio del tuono?</p>
						<a href="../Prodotti/mjolnir.php" class="btn btn-outline-dark">Scopri...</a>
						 </div>
					</div>
				</div>';
			$flag=1;
			}
		else if($row['ID']==4)
			{
			echo'
			<div class="container py-5">
			<h1 class="titolo"> Ecco le i nostri articoli inerenti alla ricerca </h1>
			<div class="row row-cols-1 row-cols-md-3 g-4">
				<div class="col">
					<div class="card border-dark h-100">
					<img src="../Immagini/olifante.jpg" class="card-img-top immagini" alt="Olifante">
						<div class="card-body">
						<h5 class="card-title titoloCard">Olifante</h5>
						<p class="card-text testoCard">Un corno da caccia leggendario</p>
						<a href="../Prodotti/olifante.php" class="btn btn-outline-dark">Scopri...</a>
					</div>
				 </div>
			</div>';
			$flag=1;
			}
		else if($row['ID']==5)
			{
			echo'
			<div class="container py-5">
			<h1 class="titolo"> Ecco le i nostri articoli inerenti alla ricerca </h1>
			<div class="row row-cols-1 row-cols-md-3 g-4">
				<div class="col">
					<div class="card border-dark h-100">
					<img src="../Immagini/pomo.jpg" class="card-img-top immagini" alt="Pomo della discordia">
						<div class="card-body">
						<h5 class="card-title titoloCard">Pomo d oro</h5>
						<p class="card-text testoCard">Non un gioco di parole, ma quello della discordia!</p>
						<a href="../Prodotti/pomo.php" class="btn btn-outline-dark">Scopri...</a>
						</div>
					</div>
				</div>';
			$flag=1;
			}
		else if($row['ID']==6)
			{
			echo'
			<div class="container py-5">
			<h1 class="titolo"> Ecco le i nostri articoli inerenti alla ricerca </h1>
			<div class="row row-cols-1 row-cols-md-3 g-4">
				<div class="col">
					<div class="card border-dark h-100">
					<img src="../Immagini/RuyiJinguBang3.jpg" class="card-img-top immagini" alt="RuyiJinguBang">
						<div class="card-body">
						<h5 class="card-title titoloCard">RuyiJinguBang</h5>
						<p class="card-text testoCard">Secondo la leggende è un bastone magico brandito dalla scimmia immortale Sun Wukong</p>
						<a href="../Prodotti/ruyijingubang.php" class="btn btn-outline-dark">Scopri...</a>
						</div>
					</div>
				</div>
			</div>';
			$flag=1;
			}
		}
	while($row=mysqli_fetch_assoc($res))
		{
		if($row['ID']==1)
		{
			echo'  
				<div class="col">
					<div class="card border-dark h-100">
					<img src="../Immagini/durlindana.jpg" class="card-img-top immagini" alt="Durlindana">
						<div class="card-body">
							<h5 class="card-title titoloCard">Durlindana</h5>
							<p class="card-text testoCard">Una delle spade più ricercate nella storia dell umanità!</p>
							<a href="./durlindana.php" class="btn btn-outline-dark">Scopri...</a>
						</div>
					</div>
				</div>';
		}
		else if($row['ID']==2)
			{
			echo'
				<div class="col">
					<div class="card border-dark h-100">
					<img src="../Immagini/excalibur.png" class="card-img-top immagini" alt="Excalibur">
						<div class="card-body">
							<h5 class="card-title titoloCard">Excalibur</h5>
							<p class="card-text testoCard">Riuscirai a estrarre la spada e a governare sull Inghilterra?</p>
							<a href="../Prodotti/excalibur.php" class="btn btn-outline-dark">Scopri...</a>
						</div>
					</div>
				</div>';
			}
		else if($row['ID']==3)
			{
			echo'
				<div class="col">
					<div class="card border-dark h-100">
					<img src="../Immagini/mjolnir.png" class="card-img-top immagini" alt="Mjolnir">
						<div class="card-body">
							<h5 class="card-title titoloCard">Mjolnir</h5>
							<p class="card-text testoCard">Sarai degno di sollevare il martello del dio del tuono?</p>
							<a href="../Prodotti/mjolnir.php" class="btn btn-outline-dark">Scopri...</a>
						</div>
					</div>
				</div>';
			}
		else if($row['ID']==4)
			{
			echo'
				<div class="col">
					<div class="card border-dark h-100">
					<img src="../Immagini/olifante.jpg" class="card-img-top immagini" alt="Olifante">
						<div class="card-body">
							<h5 class="card-title titoloCard">Olifante</h5>
							<p class="card-text testoCard">Un corno da caccia leggendario</p>
							<a href="../Prodotti/olifante.php" class="btn btn-outline-dark">Scopri...</a>
						</div>
				 	</div>
				</div>';
			}
		else if($row['ID']==5)
			{
			echo'
				<div class="col">
					<div class="card border-dark h-100">
					<img src="../Immagini/pomo.jpg" class="card-img-top immagini" alt="Pomo della discordia">
						<div class="card-body">
							<h5 class="card-title titoloCard">Pomo d oro</h5>
							<p class="card-text testoCard">Non un gioco di parole, ma quello della discordia!</p>
							<a href="../Prodotti/pomo.php" class="btn btn-outline-dark">Scopri...</a>
						</div>
					</div>
				</div>';
			}
		else if($row['ID']==6)
			{
			echo'
				<div class="col">
					<div class="card border-dark h-100">
					<img src="../Immagini/RuyiJinguBang3.jpg" class="card-img-top immagini" alt="RuyiJinguBang">
						<div class="card-body">
							<h5 class="card-title titoloCard">RuyiJinguBang</h5>
							<p class="card-text testoCard">Secondo la leggende è un bastone magico brandito dalla scimmia immortale Sun Wukong</p>
							<a href="../Prodotti/ruyijingubang.php" class="btn btn-outline-dark">Scopri...</a>
						</div>
					</div>
				</div>
			</div>';
			}
		}
	if($flag==1)
		echo'	
			</div>
			</div>';
	else {
		echo'
			<div class="container py-5 my-5">
				<div class="row align-items-md-stretch">
					<div class="col"></div>
					<div class="col-md-6">
						<div class="h-100 p-5 bg-light border border-3 border-danger rounded-3">
						<p class="testoBase"> Siamo spiacenti ma la ricerca non ha portato ad alcun risultato!</p>
						</div>
					</div>
					<div class="col"></div>
				</div>
			</div>';
}

 include('../Templates/Footer.php');
	mysqli_close($con);
?>

</body>
</html>
