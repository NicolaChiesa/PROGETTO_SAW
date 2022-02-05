<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$query = "SELECT prezzo, quantita FROM prodotti WHERE Nome='".$_SESSION['prodotto']."'";
	$res=mysqli_query($con,$query);
	$row = mysqli_fetch_assoc($res);
	$row['quantita']+=1;
	$quer="UPDATE `prodotti` SET `quantita` = '".$row['quantita']."' WHERE `Nome` = '".$_SESSION['prodotto']."'";
	$re = mysqli_query($con,$quer);
	$query="DELETE FROM `acquisto` WHERE `acquisto`.`NumSessione` = '".session_id()."' AND IDprodotto='".$_SESSION['IDprodotto']."'";
	$res=mysqli_query($con,$query);
	$inserimento='Prodotto eliminato con successo :)';
	echo "<script type='text/javascript'>alert('$inserimento');</script>";
	header("refresh:0; url=finisci.php");
	mysqli_close($con);	
?>

</body>
</html>