<?php
	include('Templates/Header.php');
	include('connessione.php');
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$query = "UPDATE utenti SET news=1 WHERE Mail='".$email."'";
	$res=mysqli_query($con,$query);
	header("Location: Core/NonAutenticato.php");
	mysqli_close($con);
?>

</body>
</html>