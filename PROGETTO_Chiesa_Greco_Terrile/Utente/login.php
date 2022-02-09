<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$flag=0;
	if(isset($_POST['pass']) && isset($_POST['email'] )){
		$pass=trim($_POST['pass']);
		$email=mysqli_real_escape_string($con, $_POST['email']);
		$query = "SELECT Password, Nome, Cognome, ID FROM utenti WHERE Mail='".$email."'";
		$res=mysqli_query($con,$query);
			if($res)
			{
				if($num = mysqli_affected_rows($con))
				{
					$row = mysqli_fetch_assoc($res);
					if(password_verify($pass,$row['Password']))
						{
						if(isset($_SESSION['carrello']))
						{
							$quer="UPDATE `acquisto` SET `IDutente` = '".$_SESSION['id']."' WHERE `NumSessione` = '".session_id()."'";
							$re = mysqli_query($con,$quer);
							if($re)
							{
								$reg="Login effettuato con successo";
								$style='success';
								$_SESSION['nome']=$row['Nome'];
								$_SESSION['cognome']=$row['Cognome'];
								$_SESSION['id']=$row['ID'];
								$_SESSION['Registrated'] = "true";
								$_SESSION['email']= $_POST['email'];
							}
						else
						{
							$reg="Errore";
							$style='danger';
						}

						}
					else{
							$reg="Login effettuato con successo";
							$style='success';
							$_SESSION['nome']=$row['Nome'];
							$_SESSION['cognome']=$row['Cognome'];
							$_SESSION['id']=$row['ID'];
							$_SESSION['Registrated'] = "true";
							$_SESSION['email']= $_POST['email'];

					}
				}
				else
				{
					$reg="E-mail e/o password sbagliate!";
					$style='danger';
				}
			}
			else
			{
				$reg="E-mail e/o password sbagliate!";
				$style='danger';
			}
			}
		else{
			$style='danger';
			$reg="Errore!";
		}
	}
	else{
	$style='danger';
	$reg="Errore!";
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
	header("refresh:3; url=../Core/PaginaPrincipale.php");
	mysqli_close($con);
	include('../Templates/Footer.php');
?>






