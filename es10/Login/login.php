<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	session_start();
	$pass=trim($_POST['pass']);
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$query = "SELECT Password, Nome, Cognome, ID FROM utenti WHERE Mail='".$email."'";
	$res=mysqli_query($con,$query);
	$row = mysqli_fetch_assoc($res);
	if(password_verify($pass,$row['Password'])){
		$_SESSION['nome']=$row['Nome'];
		$_SESSION['cognome']=$row['Cognome'];
		$_SESSION['id']=$row['ID'];
		$_SESSION['email']=$_POST['email'];
		$_SESSION['key']=$_POST['email'];
		$_SESSION['Registrated'] = "true";
		header("Location: ../Core/PaginaPrincipale.php");
		}
		else
			echo"ERRORE";
			mysqli_close($con);
?>

</body>
</html>
