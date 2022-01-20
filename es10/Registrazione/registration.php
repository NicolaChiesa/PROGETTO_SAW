<!DOCTYPE html>
<html lang="it">
<head>
    <title>Sign-up</title>
</head>

<body>

<?php
	include('../connessione.php');
	$quer="SELECT* FROM utenti WHERE Mail='".$_POST['email']."'";
	$re = mysqli_query($con,$quer);
	$row = mysqli_fetch_assoc($re);
	$num = mysqli_affected_rows($con);
	mysqli_free_result($re);
	$numi = mysqli_affected_rows($con);
	if($_POST['pass']==""||$_POST['confirm']==""||$_POST['lastname']==""||$_POST['firstname']==""||$_POST['email']=="")
		echo"<h1>mancano dati</h1>";
	else if($_POST['pass']!=$_POST['confirm'])
		echo"<h1>PASSWORD SABGLIATA</h1>";
	else if($num==1)
		echo "<h1> email già usata</h1>";
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
	echo "Utente inserito con successo";
	}

	/****************************************************************************/
	/* TO BE DONE                                                               */
	/*                                                                          */
	/* This means: reading the data sent in POST, "cleaning" them, verifying    */
	/* that the user sent what you expect, writing data in the file             */
	/*                                                                          */
        /* If something goes wrong send back appropriate messages                   */
	/****************************************************************************/
?>
<p><a href="../esercizio4.php">Pagina principale</a></p>

</body>
</html>
