<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$query = "SELECT prezzo, quantita FROM prodotti WHERE Nome='".$prodotto."'";
	$res=mysqli_query($con,$query);
	$row = mysqli_fetch_assoc($res);
	if($row['quantita']>0)
		{
		$row['quantita']-=1;
		$quer="UPDATE `prodotti` SET `quantita` = '".$row['quantita']."' WHERE `Nome` = '".$prodotto."'";
		$re = mysqli_query($con,$quer);
		$querys="INSERT INTO `acquisto` (NomeProdotto, session_id, quantita, IDutente, IDprodotto),('".$prodotto."', session_id(), 1,'".$_SESSION['id']."', '".$IDprodotto."')";
		$ress = mysqli_query($con,$querys);
		//header("Location: prod.php");
		}
	else
		{
		//header("Location: prod.php");
		echo 'Non disponibile in magazzino';
		}
	mysqli_close($con);	
?>

</body>
</html>
