<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$flag=0;
	if(!isset($_SESSION['Registrated']))
		{
		$reg='Devi accedere prima di potere acquistare!!';
		}
	else
		{
		$query = "SELECT * FROM acquisto WHERE NumSessione='".session_id()."'";
		$res=mysqli_query($con,$query);
		if($res!=false)
			$rowcount=mysqli_num_rows($res);
		while($row=mysqli_fetch_assoc($res))
			{
			$querys = "SELECT * FROM acquistato WHERE IDutente='".$_SESSION['id']."'";
			$result=mysqli_query($con,$querys);
			$flag=0;
			while($riga = mysqli_fetch_assoc($result))
				if($riga['IDprodotto']==$row['IDprodotto']&& $riga['IDutente']==$row['IDutente'])
					$flag=1;
				if($flag==0)
					{
					$insert="INSERT INTO acquistato (NomeProdotto, NumSessione, Quantita, Prezzo, IDutente, IDprodotto) VALUES ('".$row['NomeProdotto']."', '".$row['NumSessione']."', '".$row['Quantita']."','".$row['Prezzo']."','".$row['IDutente']."', '".$row['IDprodotto']."')";
					$ress=mysqli_query($con,$insert);
					}
			}
		if($rowcount>0)
			{
			$query="DELETE FROM `acquisto` WHERE `acquisto`.`NumSessione` = '".session_id()."'";
			$res=mysqli_query($con,$query);
			$reg='Acquisto andato a buon fine!!';
			}
		else 
			$reg='Il carrello è vuoto!!!!';
		}
	echo "<script type='text/javascript'>alert('$reg');</script>";
	header("refresh:0; url=prod.php");	
	mysqli_close($con);	
	include('../Templates/Footer.php');
?>

</body>
</html>