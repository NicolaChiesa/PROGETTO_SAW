<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$pass=trim($_POST['pass']);
	$email=htmlspecialchars($_POST['email']);
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$query = "SELECT Password, Nome, Cognome, ID FROM utenti WHERE Mail='".$email."'";
	$res=mysqli_query($con,$query);
	$row = mysqli_fetch_assoc($res);
	if(password_verify($pass,$row['Password'])){
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
		header("Location: ../Core/PaginaPrincipale.php");
		}
	else
		echo"ERRORE";
	mysqli_close($con);
?>

</body>
</html>
