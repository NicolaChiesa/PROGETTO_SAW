<!DOCTYPE html>
<html lang="it">
<head>
    <title>Sign-up</title>
</head>

<body>

<?php
	include('connessione.php');
	$quer="SELECT* FROM utenti WHERE Mail='".$_POST['email']."'";
	$re = mysqli_query($con,$quer);
	$row = mysqli_fetch_assoc($re);
	$num = mysqli_affected_rows($con);
	mysqli_free_result($re);
	$queryy="SELECT* FROM utenti WHERE Codice='".$_POST['codice']."'";
	$ress = mysqli_query($con,$queryy);
	$row = mysqli_fetch_assoc($ress);
	$numi = mysqli_affected_rows($con);
	$pattern="/^[A-Z]{6,6}+[0-9]{2,2}+[A-Z]{1,1}+[0-9]{2,2}+[A-Z]{1,1}+[0-9]{3,3}+[A-Z]{1,1}$/";
	if($_POST['pass']==""||$_POST['confirm']==""||$_POST['lastname']==""||$_POST['firstname']==""||$_POST['email']=="")
		echo"<h1>mancano dati</h1>";
	else if($_POST['pass']!=$_POST['confirm'])
		echo"<h1>PASSWORD SABGLIATA</h1>";
	else if(!preg_match($pattern,$_POST['codice']))
		echo "<h1>Codice fiscale errato</h1>";
	else if($num==1)
		echo "<h1> email gi� usata</h1>";
	else if($numi==1)
		echo "<h1> CF gi� usata</h1>";
	else{
	$pass=trim($_POST['pass']);
	$lastname=htmlspecialchars($_POST['lastname']);
	$firstname=htmlspecialchars($_POST['firstname']);
	$email=htmlspecialchars($_POST['email']);
	$codice=htmlspecialchars($_POST['codice']);
	$pass=mysqli_real_escape_string($con, $pass);
	$lastname=mysqli_real_escape_string($con, $lastname);
	$firstname=mysqli_real_escape_string($con, $firstname);
	$email=mysqli_real_escape_string($con, $email);
	$codice=mysqli_real_escape_string($con, $codice);
	$pass=password_hash($pass,PASSWORD_BCRYPT);
	$query ="INSERT INTO utenti (Nome, Cognome, Password, Mail, Codice) VALUES ('".$firstname."', '".$lastname."', '".$pass."', '".$email."', '".$codice."')";
	$res = mysqli_query($con,$query);
	mysqli_close($con);
	echo "Inserimanto utente";
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
<p><a href="esercizio4.php">Pagina principale</a></p>

</body>
</html>
