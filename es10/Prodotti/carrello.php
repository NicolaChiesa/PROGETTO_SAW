<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$query = "SELECT prezzo, quantita FROM prodotti WHERE Nome='".$_SESSION['prodotto']."'";
	$res=mysqli_query($con,$query);
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
			echo'1';
			}
		else
			$querys="INSERT INTO acquisto (NomeProdotto, NumSessione, Quantita, Prezzo, IDprodotto ) VALUES ('".$_SESSION['prodotto']."', '".$session_id."', 1,'".$row['prezzo']."','".$_SESSION['IDprodotto']."')";
		$ress = mysqli_query($con,$querys);
		$num = mysqli_affected_rows($con);
		echo $num;
		header("Location: prod.php");
		}
	else
		{
		header("Location: prod.php");
		}
	mysqli_close($con);	
?>

</body>
</html>
