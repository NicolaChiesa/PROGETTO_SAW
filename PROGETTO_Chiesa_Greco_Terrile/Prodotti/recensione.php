<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$flag=0;
	if(!isset($_SESSION['Registrated']))
	{
		$reg='Devi accedere prima di potere fare una recensione!!';
		$style='danger';
	}
	else if(!isset($_POST['star'])){
		$reg='Devi dare una valutazione valida!';
		$style='danger';
	}
	else
		{
		$query = "SELECT IDutente, Votato FROM acquistato WHERE IDprodotto='".$_GET['ID']."' AND `IDutente` = '".$_SESSION['id']."'";
		$res = mysqli_query($con,$query);
		if($res)
			{
			$rowcount = mysqli_num_rows($res);
			if($rowcount>0)
				{
				$row = mysqli_fetch_assoc($res);
				if($row['Votato']==1)
				{
					$reg='Hai già valutato questo prodotto, non puoi valutarlo di nuovo!';
					$style='danger';
				}
				else
					{
					$rate=$_POST['star'];
					$select = "SELECT Voto, NumVoti FROM prodotti WHERE ID='".$_GET['ID']."'";
					$result=mysqli_query($con,$select);
					if($result)
						{
						$row = mysqli_fetch_assoc($result);
						$voto=($row['Voto']*$row['NumVoti']+$rate)/($row['NumVoti']+1);
						$row['NumVoti']+=1;
						$query="UPDATE `prodotti` SET `Voto` = '".$voto."', NumVoti='".$row['NumVoti']."' WHERE ID='".$_GET['ID']."'";
						$res = mysqli_query($con,$query);
						if($res)
							{
							$query = "UPDATE acquistato SET Votato=1 WHERE IDprodotto='".$_GET['ID']."' AND `IDutente` = '".$_SESSION['id']."'";
							$res = mysqli_query($con,$query);
							if($res)
								{
								$reg= 'Recensione avvenuta con successo!';
								$style='success';
								}
								else
									{
									$style='danger';
									$reg='ERRORE';
									}	
							}
						else
							{
							$style='danger';
							$reg='ERRORE';
							}	
						}
					else
						{
						$style='danger';
						$reg='ERRORE';
						}	
					}
				}
				else{
					$reg='Non hai acquistato questo prodotto, quindi non puoi recensirlo!';
					$style='danger';
				}
			}
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
	header("refresh:3; url=prodotti.php");
	mysqli_close($con);	
	include('../Templates/Footer.php');
?>

</body>
</html>