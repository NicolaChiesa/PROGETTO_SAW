<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$flag=0;
	$pass=trim($_POST['pass']);
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$query = "SELECT Password, Nome, Cognome, ID FROM utenti WHERE Mail='".$email."'";
	$res=mysqli_query($con,$query);
	$result = mysqli_query($con, $query);
	if ( mysqli_num_rows($result)>0)
    {
		if($res!=false)
		{
			$row = mysqli_fetch_assoc($res);
			if(isset($_POST['pass']) && password_verify($pass,$row['Password']))
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
			{
				$reg="E-mail e/o password sbagliate!";
				$flag=1;
			}
		}
	}
	echo'
	<div class="container py-5 my-5">
		<div class="row align-items-md-stretch">
			<div class="col"></div>
				<div class="col-md-6">';
				if($flag==1){
					echo'<div class="h-100 p-5 bg-light border border-3 border-danger rounded-3">
						<p class="testoBase text-center"> '.$reg.'</p>';
				}
				else{
					echo'<div class="h-100 p-5 bg-light border border-3 border-success rounded-3">
						<p class="testoBase text-center"> '.$reg.'</p>';
				}
				echo'
					</div>
				</div>
			<div class="col"></div>
		</div>
	</div>';
	header("refresh:3; url=../Core/PaginaPrincipale.php");
	mysqli_close($con);
	include('../Templates/Footer.php');
?>






