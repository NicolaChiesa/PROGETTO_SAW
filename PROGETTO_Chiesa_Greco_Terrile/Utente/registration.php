<script src="http://code.jquery.com/jquery-1.11.0.min.js"> </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	if( isset($_POST['pass']) && isset($_POST['confirm']) && isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['email']))
	{
		$url='../Core/PaginaPrincipale.php';
		$quer="SELECT* FROM utenti WHERE Mail='".$_POST['email']."'";
		$re = mysqli_query($con,$quer);
		if($re)
		{
			$row = mysqli_fetch_assoc($re);
			$num = mysqli_affected_rows($con);
			mysqli_free_result($re);
			if($_POST['pass']!=$_POST['confirm'])
			{
				$reg='Le due password non coincidono!';
				$style='danger';
			}
			else if($num==1)
			{
				$reg='Email già usata!';
				$style='danger';
			}
		
		// se tutto è andato a buon fine 
			else
			{
				$pass=trim($_POST['pass']);;
				$lastname=mysqli_real_escape_string($con, $_POST['lastname']);
				$firstname=mysqli_real_escape_string($con, $_POST['firstname']);
				$email=mysqli_real_escape_string($con, $_POST['email']);
				$pass=password_hash($pass,PASSWORD_BCRYPT);
				$query ="INSERT INTO utenti (Nome, Cognome, Password, Mail) VALUES ('".$firstname."', '".$lastname."', '".$pass."', '".$email."')";
				$res = mysqli_query($con,$query);
				if($res)
				{
					$query = "SELECT ID FROM utenti WHERE Mail='".$email."'";
					$res=mysqli_query($con,$query);
					if($res)
					{
						$row = mysqli_fetch_assoc($res);
						$_SESSION['id']=$row['ID'];
					}
					else
					{
						$reg='Errore';
						$style='danger';
					}
				if(isset($_SESSION['carrello']))
				{
					$quer="UPDATE `acquisto` SET `IDutente` = '".$_SESSION['id']."' WHERE `NumSessione` = '".session_id()."'";
					$re = mysqli_query($con,$quer);
					if($re)
					{
						$reg='Registrazione effettuata con successo';
						$style='success';
						$_SESSION['Registrated'] = "true";
						$_SESSION['nome']=$_POST['firstname'];
						$_SESSION['cognome']=$_POST['lastname'];
						$_SESSION['email']=$_POST['email'];
						if(isset($_POST['Subscription']))
							$url='../Newsletter/IscrivitiNewsletter.php';
						else
							$url='../Core/PaginaPrincipale.php';
					}
					else
					{
						$reg='Errore';
						$style='danger';
					}
				}
				else
				{
					$reg='Registrazione effettuata con successo';
					$style='success';
					$_SESSION['Registrated'] = "true";
					$_SESSION['nome']=$_POST['firstname'];
					$_SESSION['cognome']=$_POST['lastname'];
					$_SESSION['email']=$_POST['email'];
					if(isset($_POST['Subscription']))
						$url='../Newsletter/IscrivitiNewsletter.php';
					else
						$url='../Core/PaginaPrincipale.php';
				}
			}
			else
			{
				$reg='Errore';
				$style='danger';
			}
			}
		}
	}
	else
	{
		$reg= 'Errore';
		$style='danger';
	}
	echo'
						<div class="container py-5 my-5">
							<div class="row align-items-md-stretch">
								<div class="col"></div>
									<div class="col-md-6">
										<div class="h-100 p-5 bg-light border border-3 border-'.$style.' rounded-3">
											<p class="testoBase text-center"> '.$reg.'</p>
										</div>
									</div>
								<div class="col"></div>
							</div>
						</div>';
	header("refresh:3; url='$url'");
	mysqli_close($con);
	include('../Templates/Footer.php');

	
?>



