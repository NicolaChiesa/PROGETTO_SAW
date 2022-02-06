<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$_SESSION['carrello']='true';
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
			$inserimento='Il prodotto selezionato non è disponibile!';
			}
		}
	echo "<script type='text/javascript'>alert('$inserimento');</script>";
	header("refresh:0; url=prod.php");
	mysqli_close($con);	
?>

</body>
</html>
