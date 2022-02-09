<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$_SESSION['carrello']='true';
	$flag=0;
	if(isset($_GET['nome'])){
		$query = "SELECT prezzo, quantita FROM prodotti WHERE Nome='".$_GET['nome']."'";
		$res=mysqli_query($con,$query);
		if($res)
			{
			$row = mysqli_fetch_assoc($res);
			if($row['quantita']>0)
				{
				$session_id=session_id();
				$row['quantita']-=1;
				$quer="UPDATE `prodotti` SET `quantita` = '".$row['quantita']."' WHERE `Nome` = '".$_GET['nome']."'";
				$re = mysqli_query($con,$quer);
				if(isset($_SESSION['Registrated']) && $_SESSION['Registrated'] == "true")
					{
					$querys="INSERT INTO acquisto (NomeProdotto, NumSessione, Quantita, Prezzo, IDutente, IDprodotto) VALUES ('".$_GET['nome']."', '".$session_id."', 1,'".$row['prezzo']."','".$_SESSION['id']."', '".$_GET['ID']."')";
					}
				else{
					$querys="INSERT INTO acquisto (NomeProdotto, NumSessione, Quantita, Prezzo, IDutente, IDprodotto ) VALUES ('".$_GET['nome']."', '".$session_id."', 1,'".$row['prezzo']."',0,'".$_GET['ID']."')";
					}
				$ress = mysqli_query($con,$querys);
				if($ress)
					$inserimento='Prodotto inserito nel carrello con successo!';
				else 
					$inserimento='Errore';
				}
			else
				{
				$flag=1;
				$inserimento='Il prodotto selezionato non è disponibile!';
				}
			}
		echo'
		<div class="container py-5 my-5">
			<div class="row align-items-md-stretch">
				<div class="col"></div>
					<div class="col-md-6">';
					if($flag)
						$style='danger';
					else
						$style='success';
					echo'<div class="h-100 p-5 bg-light border border-3 border-'.$style.' rounded-3">
						<p class="testoBase text-center"> '.$inserimento.'</p>
						</div>
					</div>
				<div class="col"></div>
			</div>
		</div>';
		}else{
			$inserimento= 'Errore';
			echo'
			<div class="container py-5 my-5">
				<div class="row align-items-md-stretch">
					<div class="col"></div>
						<div class="col-md-6">
							<div class="h-100 p-5 bg-light border border-3 border-danger rounded-3">
								<p class="testoBase text-center"> '.$inserimento.'</p>
							</div>
						</div>
					<div class="col"></div>
				</div>
			</div>';
		}
	header("refresh:3; url=prodotti.php");
	mysqli_close($con);	
	include('../Templates/Footer.php');

?>

</body>
</html>
