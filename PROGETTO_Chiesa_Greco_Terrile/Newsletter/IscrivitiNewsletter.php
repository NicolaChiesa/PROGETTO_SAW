<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	
	if(isset($_SESSION['Registrated'])){
		//$email = $_SESSION['email'];
	}
	else{
		$_SESSION['email']=mysqli_real_escape_string($con, $_POST['email']);
	}
	
	$query = "INSERT INTO newsletters(email, news) VALUES ('".$_SESSION['email']."',1)";
	$res=mysqli_query($con,$query);
	mysqli_close($con);
	
	header("Location: SendEmailConfirm.php");
?>

</body>
</html>