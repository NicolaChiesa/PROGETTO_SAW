<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$_SESSION['carrello']='true';
	$flag=0;
	$query = "SELECT prezzo, quantita FROM prodotti WHERE Nome='".$_SESSION['prodotto']."'";
	$res=mysqli_query($con,$query);
	if($res!=false)
		{
		$row = mysqli_fetch_assoc($res);
		if($row['quantita']>0)
			{
			$session_id=session_id();
			$row['quantita']-=1;
			$quer="UPDATE `prodotti` SET `quantita` = '".$row['quantita']."' WHERE `Nome` = '".$_SESSION['prodotto']."'";
			$re = mysqli_query($con,$quer);
			if(isset($_SESSION['Registrated']) && $_SESSION['Registrated'] == "true")
				{
				$querys="INSERT INTO acquisto (NomeProdotto, NumSessione, Quantita, Prezzo, IDutente, IDprodotto) VALUES ('".$_SESSION['prodotto']."', '".$session_id."', 1,'".$row['prezzo']."','".$_SESSION['id']."', '".$_SESSION['IDprodotto']."')";
				}
			else{
				$querys="INSERT INTO acquisto (NomeProdotto, NumSessione, Quantita, Prezzo, IDutente, IDprodotto ) VALUES ('".$_SESSION['prodotto']."', '".$session_id."', 1,'".$row['prezzo']."',0,'".$_SESSION['IDprodotto']."')";
				}
			$ress = mysqli_query($con,$querys);
			$inserimento='Prodotto inserito nel carrello con successo!';
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
				if($flag==1){
					echo'<div class="h-100 p-5 bg-light border border-3 border-danger rounded-3">
						<p class="testoBase text-center"> '.$inserimento.'</p>';
				}
				else{
					echo'<div class="h-100 p-5 bg-light border border-3 border-success rounded-3">
						<p class="testoBase text-center"> '.$inserimento.'</p>';
				}
				echo'
					</div>
				</div>
			<div class="col"></div>
		</div>
	</div>';
	header("refresh:3; url=prod.php");
	mysqli_close($con);	
	include('../Templates/Footer.php');
?>

</body>
</html>
