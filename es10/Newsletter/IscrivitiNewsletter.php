<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	if(isset($_SESSION['nome'])){
		$email=$_SESSION['email'];
	} else{
		$email=mysqli_real_escape_string($con, $_POST['email']);
	}
	$query = "INSERT INTO newsletters(email, news) VALUES ('".$email."',1)";
	$_SESSION['email']=$email;
	$res=mysqli_query($con,$query);
	mysqli_close($con);
	
	header("Location: SendEmailConfirm.php");
?>

</body>
</html>

Notice: Undefined index: email in /chroot/home/S4825218/public_html/es10/Newsletter/SendEmailConfirm.php on line 35
Message could not be sent. Mailer Error: Invalid address: (cc):

Notice: Undefined index: email in /chroot/home/S4825218/public_html/es10/Newsletter/SendEmailConfirm.php on line 35
Message could not be sent. Mailer Error: Invalid address: (cc):