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
		echo 'Stai acquistando un: '.$_SESSION['prodotto'].' alla modica cifra di: '.$row['prezzo'].' euro';
		//header("Location: prod.php");
		}
	else
		{
		header("Location: prod.php");
		echo 'Non disponibile in magazzino';
		}
	mysqli_close($con);	
?>

</body>
</html>
