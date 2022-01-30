<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$email=mysqli_real_escape_string($con, $_SESSION['email']);
	$query = "UPDATE utenti SET news=1 WHERE Mail='".$email."'";
	$res=mysqli_query($con,$query);
	header("Location: ../Core/PaginaPrincipale.php");
	mysqli_close($con);
?>

</body>
</html>