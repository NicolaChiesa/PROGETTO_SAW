<?php

/*if(isset($_POST['submit']))
{
	$email=$_POST['email']
	$quer="SELECT* FROM utenti WHERE Mail='".$_POST['email']."'";
	$re = mysqli_query($con,$quer);
	$row = mysqli_fetch_assoc($re);
	$num = mysqli_affected_rows($con);
	if(num==1)
		echo "<h1>email già usata</h1>";
	else
		echo "<h1>email già  non usata</h1>";
}
*/

	include('../Templates/Header.php');
	include('../connessione.php');
	$quer="SELECT* FROM utenti WHERE Mail='".$_POST['email']."'";
	$re = mysqli_query($con,$quer);
	$row = mysqli_fetch_assoc($re);
	$num = mysqli_affected_rows($con);
	mysqli_free_result($re);
	$numi = mysqli_affected_rows($con);
	if($_POST['pass']==""||$_POST['confirm']==""||$_POST['lastname']==""||$_POST['firstname']==""||$_POST['email']=="")
		echo"<h1>Alcuni dati non sno stati inseriti</h1>";
	else if($_POST['pass']!=$_POST['confirm'])
		echo"<h1>Le due password non coincidono</h1>";
	else if($num==1)
		echo "<h1>email già usata</h1>";
	else{
	$pass=trim($_POST['pass']);
	$lastname=htmlspecialchars($_POST['lastname']);
	$firstname=htmlspecialchars($_POST['firstname']);
	$email=htmlspecialchars($_POST['email']);
	$pass=mysqli_real_escape_string($con, $pass);
	$lastname=mysqli_real_escape_string($con, $lastname);
	$firstname=mysqli_real_escape_string($con, $firstname);
	$email=mysqli_real_escape_string($con, $email);
	$pass=password_hash($pass,PASSWORD_BCRYPT);
	$query ="INSERT INTO utenti (Nome, Cognome, Password, Mail) VALUES ('".$firstname."', '".$lastname."', '".$pass."', '".$email."')";
	$res = mysqli_query($con,$query);
	mysqli_close($con);
	$_SESSION['Registrated'] = "true";
	echo "Utente inserito con successo, premi su home per tornare alla pagina principale, avendo però adesso anche
			l' accesso all' area privata e la possibilità di modificare i dati utente";
	}

?>
</body>
</html>
