<script src="http://code.jquery.com/jquery-1.11.0.min.js"> </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$quer="SELECT* FROM utenti WHERE Mail='".$_POST['email']."'";
	$re = mysqli_query($con,$quer);
	$row = mysqli_fetch_assoc($re);
	$num = mysqli_affected_rows($con);
	mysqli_free_result($re);
	
	if($_POST['pass']==""||$_POST['confirm']==""||$_POST['lastname']==""||$_POST['firstname']=="")
		echo"<h1>Alcuni dati non sno stati inseriti</h1>";
	else if($_POST['pass']!=$_POST['confirm'])
		echo"<h1>Le due password non coincidono</h1>";
	else if($num==1)
		echo "<h1>email già usata</h1>";
	
	// se tutto è andato a buon fine 
	else{
		$_SESSION['Registrated'] = "true";
		$_SESSION['nome']=$_POST['firstname'];
		$_SESSION['cognome']=$_POST['lastname'];
		$_SESSION['email']=$_POST['email'];
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
<<<<<<< HEAD
		$row = mysqli_fetch_assoc($res);
		$_SESSION['id']=$row['ID'];
		mysqli_close($con);
=======
		mysqli_close($con);
		$_SESSION['Registrated'] = "true";
		//$_SESSION['nome']=$row['Nome'];
		//$_SESSION['cognome']=$row['Cognome'];
		//$_SESSION['id']=$row['ID'];
		$_SESSION['email']=$_POST['email'];
		$_SESSION['Registrated'] = "true";
>>>>>>> 53668811ec3b914223f3aed9a44b8e0517e16b15
		if(isset($_POST['Subscription'])){
			header("Location: ../Newsletter/IscrivitiNewsletter.php");
		}
		else{
			header("Location: ../Core/PaginaPrincipale.php");
		}
	}

	
?>



