<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	if(!isset($_SESSION['Registrated']))
		{
		$reg='Devi accedere prima di potere acquistare!!';
		}
	else
		{
		$query = "SELECT IDutente FROM acquistato WHERE IDprodotto='".$_SESSION['IDprodotto']."'";
		$res=mysqli_query($con,$query);
		$row = mysqli_fetch_assoc($res);
		$rowcount=mysqli_num_rows($res);
		if($rowcount>0)
			{
			$_SESSION['recensione']='true';
			}
		else 
			$reg= 'Non hai acquistato questo prodotto, quindi non puoi recensirlo!';
		}
	echo "<script type='text/javascript'>alert('$reg');</script>";
	header("refresh:0; url=prod.php");
	mysqli_close($con);	
	include('../Templates/Footer.php');
?>

</body>
</html>