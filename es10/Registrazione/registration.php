<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$quer="SELECT* FROM utenti WHERE Mail='".$_POST['email']."'";
	$re = mysqli_query($con,$quer);
	$row = mysqli_fetch_assoc($re);
	$num = mysqli_affected_rows($con);
	mysqli_free_result($re);
	$numi = mysqli_affected_rows($con);
	
	if($_POST['pass']==""||$_POST['confirm']==""||$_POST['lastname']==""||$_POST['firstname']=="")
		echo"<h1>Alcuni dati non sno stati inseriti</h1>";
	else if($_POST['pass']!=$_POST['confirm'])
		echo"<h1>Le due password non coincidono</h1>";
	else if($num==1)
		echo "<h1>email già usata</h1>";
	
	// se tutto è andato a buon fine 
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
		$_SESSION['nome']=$row['Nome'];
		$_SESSION['cognome']=$row['Cognome'];
		$_SESSION['id']=$row['ID'];
		$_SESSION['email']=$_POST['email'];
		$_SESSION['key']=$_POST['email'];
		$_SESSION['Registrated'] = "true";
		header("Location: ../Core/PaginaPrincipale.php");

		
		$iscritto = $_POST['Subscription']; 
		if ($iscritto == 'on') 
			header("refresh:4; url=../Newsletter/IscrivitiNewsletter.php");
	}

	
?>
<!--<script type="text/javascript">
        cbObj = document.getElementById('Subscription');
        if (cbObj.checked)
        	console.log('CheckBox spuntato');
        else
            alert("CheckBox non spuntato");
</script> -->

</body>
</html>
