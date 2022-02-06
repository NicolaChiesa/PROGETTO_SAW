<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$flag=0;
	if(!isset($_SESSION['Registrated']))
	{
		$reg='Devi accedere prima di potere fare una recensione!!';
		$flag=1;
	}
	else if(!isset($_POST['star'])){
		$reg='Devi dare una valutazione valida!';
		$flag=1;
	}
	else
		{
		$query = "SELECT IDutente, Votato FROM acquistato WHERE IDprodotto='".$_SESSION['IDprodotto']."' AND `IDutente` = '".$_SESSION['id']."'";
		$res = mysqli_query($con,$query);
		if($res!=false)
			{
			$rowcount = mysqli_num_rows($res);
			if($rowcount>0)
				{
				$row = mysqli_fetch_assoc($res);
				if($row['Votato']==1)
				{
					$reg='Hai già valutato questo prodotto, non puoi valutarlo di nuovo!';
					$flag=1;
				}
				else
					{
					$rate=$_POST['star'];
					$select = "SELECT Voto, NumVoti FROM prodotti WHERE ID='".$_SESSION['IDprodotto']."'";
					$result=mysqli_query($con,$select);
					$row = mysqli_fetch_assoc($result);
					$voto=($row['Voto']*$row['NumVoti']+$rate)/($row['NumVoti']+1);
					$reg= 'Recensione avvenuta con successo!';
					$row['NumVoti']+=1;
					$query="UPDATE `prodotti` SET `Voto` = '".$voto."', NumVoti='".$row['NumVoti']."' WHERE ID='".$_SESSION['IDprodotto']."'";
					$res = mysqli_query($con,$query);
					$query = "UPDATE acquistato SET Votato=1 WHERE IDprodotto='".$_SESSION['IDprodotto']."' AND `IDutente` = '".$_SESSION['id']."'";
					$res = mysqli_query($con,$query);
					}
				}
				else{
					$reg='Non hai acquistato questo prodotto, quindi non puoi recensirlo!';
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
	header("refresh:3; url=prod.php");
	mysqli_close($con);	
	include('../Templates/Footer.php');
?>

</body>
</html>