<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$pass=trim($_POST['pass']);
	$email=htmlspecialchars($_POST['email']);
	$email=mysqli_real_escape_string($con, $email);
	$query = "SELECT Password, Nome, Cognome, ID FROM utenti WHERE Mail='".$email."'";
	$res=mysqli_query($con,$query);
	if($res!=false)
	{
		$row = mysqli_fetch_assoc($res);
		if(password_verify($pass,$row['Password']))
			{
			$reg="Login effettuato con successo";
			$_SESSION['nome']=$row['Nome'];
			$_SESSION['cognome']=$row['Cognome'];
			$_SESSION['id']=$row['ID'];
			$_SESSION['Registrated'] = "true";
			$_SESSION['email']= $_POST['email'];
			if(isset($_SESSION['carrello']))
				{
				$quer="UPDATE `acquisto` SET `IDutente` = '".$_SESSION['id']."' WHERE `NumSessione` = '".session_id()."'";
				$re = mysqli_query($con,$quer);
				}
			}
		else
			$reg="ERRORE";
		}
	echo "<script type='text/javascript'>alert('$reg');</script>";
	header("refresh:0; ../Core/PaginaPrincipale.php");
	mysqli_close($con);
?>

</body>
</html>
