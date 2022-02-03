<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$query = "INSERT INTO newsletters(email, news) VALUES ('".$email."',1)";
	$res=mysqli_query($con,$query);
	mysqli_close($con);
	$_SESSION['email']=$_POST['email'];
	header("Location: SendEmailConfirm.php");
?>

</body>
</html>