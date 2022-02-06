<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$patternEmail = "/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{​2,6}​)$/";
	if(isset($_SESSION['Registrated'])){
		//
	}
	else{
		$_SESSION['email']=htmlspecialchars($_POST['email']);
		$_SESSION['email']=mysqli_real_escape_string($con, $_POST['email']);
	}
	if (filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL))
		{
		$query = "INSERT INTO newsletters(email, news) VALUES ('".$_SESSION['email']."',1)";
		$res=mysqli_query($con,$query);
		}
	mysqli_close($con);
	
	header("Location: SendEmailConfirm.php");
?>

</body>
</html>