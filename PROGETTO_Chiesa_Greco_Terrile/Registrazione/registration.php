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
		$query = "SELECT ID FROM utenti WHERE Mail='".$email."'";
		$res=mysqli_query($con,$query);
		$row = mysqli_fetch_assoc($res);
		$_SESSION['id']=$row['ID'];
		if(isset($_SESSION['carrello']))
			{
			$quer="UPDATE `acquisto` SET `IDutente` = '".$_SESSION['id']."' WHERE `NumSessione` = '".session_id()."'";
			$re = mysqli_query($con,$quer);
			$num = mysqli_affected_rows($con);
			echo $num;
			}
		mysqli_close($con);
		if(isset($_POST['Subscription'])){
			header("Location: ../Newsletter/IscrivitiNewsletter.php");
		}
		else{
			//header("Location: ../Core/PaginaPrincipale.php");
		}
	}

	
?>



