<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$query = "SELECT prezzo, quantita FROM prodotti WHERE Nome='".$_SESSION['prodotto']."'";
	$res=mysqli_query($con,$query);
	$row = mysqli_fetch_assoc($res);
	if($row['quantita']>0)
		{
		$row['quantita']-=1;
		$quer="UPDATE `prodotti` SET `quantita` = '".$row['quantita']."' WHERE `Nome` = '".$_SESSION['prodotto']."'";
		$re = mysqli_query($con,$quer);
		if(isset($_SESSION['Registrated']) && $_SESSION['Registrated'] == "true"){
			$querys="INSERT INTO `acquisto` (NomeProdotto, session_id, quantita, IDutente, IDprodotto),('".$_SESSION['prodotto']."', session_id(), 1,'".$_SESSION['id']."', '".$_SESSION['IDprodotto']."')";
			}
		else
			$querys="INSERT INTO `acquisto` (NomeProdotto, session_id, quantita, IDutente, IDprodotto),('".$_SESSION['prodotto']."', session_id(), 1,0, '".$_SESSION['IDprodotto']."')";
		$ress = mysqli_query($con,$querys);
		$num = mysqli_affected_rows($con);
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
