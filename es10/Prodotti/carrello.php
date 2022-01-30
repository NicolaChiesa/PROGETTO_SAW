<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$query = "SELECT prezzo, quantita FROM prodotti WHERE Nome='".$_SESSION['prodotto']."'";
	$res=mysqli_query($con,$query);
	$row = mysqli_fetch_assoc($res);
	if($row['quantita']>0)
	{
	$quer="UPDATE `prodotti` SET `quantita` = '".$row['quantita']."' WHERE `Nome` = '".$_SESSION['prodotto']."'";
	$re = mysqli_query($con,$quer);
	$num = mysqli_affected_rows($con);
	echo $num;
	$_SESSION['prezzo']+=$row['prezzo'];
	$_SESSION['prodotto']=1;
	}
	else
		echo 'Non disponibile in magazzino';
	mysqli_close($con);
	header("Refresh:10","Location: prod.php");
	/*secondo me bisogna fare una nuova colonna in utenti con id acquisto per poi fare il join e così poi da li accedere al prodotto*/
?>

</body>
</html>
