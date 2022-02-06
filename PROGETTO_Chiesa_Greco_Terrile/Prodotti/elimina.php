<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$query = "SELECT prezzo, quantita FROM prodotti WHERE ID='".$_GET['ID']."'";
	$res=mysqli_query($con,$query);
	if(res!=false)
		{
		$row = mysqli_fetch_assoc($res);
		$row['quantita']+=$_GET['num'];
		$quer="UPDATE `prodotti` SET `quantita` = '".$row['quantita']."' WHERE `ID` = '".$_GET['ID']."'";
		$re = mysqli_query($con,$quer);
		$query="DELETE FROM `acquisto` WHERE `acquisto`.`NumSessione` = '".session_id()."' AND IDprodotto='".$_GET['ID']."'";
		$res=mysqli_query($con,$query);
		$inserimento='Prodotto eliminato con successo :)';
		}
	echo "<script type='text/javascript'>alert('$inserimento');</script>";
	header("refresh:0; url=finisci.php");
	mysqli_close($con);	
?>

</body>
</html>