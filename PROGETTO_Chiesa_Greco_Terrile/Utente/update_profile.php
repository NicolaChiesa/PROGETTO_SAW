<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$nome=mysqli_real_escape_string($con, $_POST['firstname']);
	$cognome=mysqli_real_escape_string($con, $_POST['lastname']);
	$query="UPDATE `utenti` SET `Cognome` = '".$cognome."', Nome='".$nome."', Mail='".$email."' WHERE `ID` = '".$_SESSION['id']."'";
	$res = mysqli_query($con,$query);
	$_SESSION['nome']=$_POST['firstname'];
	$_SESSION['cognome']=$_POST['lastname'];
	$_SESSION['email']=$_POST['email'];
	header("Location: show_profile.php");
	mysqli_close($con);
?>

</body>
</html>
