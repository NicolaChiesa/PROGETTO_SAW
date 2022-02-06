<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$pass=trim($_POST['pass']);
	$email=htmlspecialchars($_POST['email']);
	$email=mysqli_real_escape_string($con, $email);
	$query = "SELECT Password, Nome, Cognome, ID FROM utenti WHERE Mail='".$email."'";
	$res=mysqli_query($con,$query);
	if($res!=false)
	{
		$row = mysqli_fetch_assoc($res);
		if(password_verify($pass,$row['Password']))
			{
			$reg="Login effettuato con successo";
			$_SESSION['nome']=$row['Nome'];
			$_SESSION['cognome']=$row['Cognome'];
			$_SESSION['id']=$row['ID'];
			$_SESSION['Registrated'] = "true";
			$_SESSION['email']= $_POST['email'];
			if(isset($_SESSION['carrello']))
				{
				$quer="UPDATE `acquisto` SET `IDutente` = '".$_SESSION['id']."' WHERE `NumSessione` = '".session_id()."'";
				$re = mysqli_query($con,$quer);
				}
			}
		else
			$reg="ERRORE";
		}
		echo'
		<div class="container py-5 my-5">
			<div class="row align-items-md-stretch">
				<div class="col"></div>
					<div class="col-md-6">
						<div class="h-100 p-5 bg-light border border-3 border-danger rounded-3">
							<p class="testoBase text-center"> '.$reg.'</p>
						</div>
					</div>
				<div class="col"></div>
			</div>
		</div>';
	header("refresh:3; url=../Core/PaginaPrincipale.php");
	mysqli_close($con);
	include('../Templates/Footer.php');
?>

