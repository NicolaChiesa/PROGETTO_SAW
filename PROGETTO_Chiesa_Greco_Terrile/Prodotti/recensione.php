<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	if(!isset($_SESSION['Registrated']))
		{
			echo" ciaooooooo";
			$reg='Devi accedere prima di potere acquistare!!';
		}
	else
		{
			echo" vediamo se va";
		$query = "SELECT IDutente FROM acquistato WHERE IDprodotto='".$_SESSION['IDprodotto']."'";
		$res = mysqli_query($con,$query);
		$row = mysqli_fetch_assoc($res);
		$rowcount = mysqli_num_rows($res);
		if($rowcount>0)
			{
			$rate=$_POST['voto'];
			$select = "SELECT Voto, NumVoti FROM prodotti WHERE IDprodotto='".$_SESSION['IDprodotto']."'";
			$result=mysqli_query($con,$select);
			$row = mysqli_fetch_assoc($result);
			$voto=($row['Voto']*$row['NumVoti']+$rate)/($row['NumVoti+1']);
			$reg= 'Recensione Ok!';
			$row['NumVoti']+=1;
			$query="UPDATE `prodotti` SET `Voto` = '".$rate."', NumVoti='".$row['NumVoti']."'";
			$res = mysqli_query($con,$query);
			}
		else 
			$reg= 'Non hai acquistato questo prodotto, quindi non puoi recensirlo!';
		}
	//echo "<script type='text/javascript'>alert('$reg');</script>";
	//header("refresh:0; url=prod.php");
	mysqli_close($con);	
	include('../Templates/Footer.php');
?>

</body>
</html>