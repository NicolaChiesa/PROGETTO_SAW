<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	if(!isset($_SESSION['Registrated']))
		{
		$reg='Devi accedere prima di potere acquistare!!';
		}
	else
		{
		$query = "SELECT * FROM acquisto WHERE NumSessione='".session_id()."'";
		$res=mysqli_query($con,$query);
		$row = mysqli_fetch_assoc($res);
		$rowcount=mysqli_num_rows($res);
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
