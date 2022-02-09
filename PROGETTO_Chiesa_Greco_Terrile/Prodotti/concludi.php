<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$flag=0;
	if(!isset($_SESSION['Registrated']))
		{
		$style='danger';
		$reg='Devi accedere prima di potere acquistare!!';
		}
	else
	{
		$query = "SELECT * FROM acquisto WHERE NumSessione='".session_id()."'";
		$res=mysqli_query($con,$query);
		if($res)
			$rowcount=mysqli_num_rows($res);
		while($row=mysqli_fetch_assoc($res))
			{
			$querys = "SELECT * FROM acquistato WHERE IDutente='".$_SESSION['id']."'";
			$result=mysqli_query($con,$querys);
			$flag=0;
			while($riga = mysqli_fetch_assoc($result))
				if($riga['IDprodotto']==$row['IDprodotto']&& $riga['IDutente']==$row['IDutente'])
					$flag=1;
				if($flag==0)
					{
						$insert="INSERT INTO acquistato (NomeProdotto, Quantita, Prezzo, IDutente, IDprodotto) VALUES ('".$row['NomeProdotto']."', '".$row['Quantita']."','".$row['Prezzo']."','".$row['IDutente']."', '".$row['IDprodotto']."')";
						$ress=mysqli_query($con,$insert);
					}
			}
		if($rowcount>0)
			{
			$query="DELETE FROM `acquisto` WHERE `acquisto`.`NumSessione` = '".session_id()."'";
			$res=mysqli_query($con,$query);
			if($res)
				$reg='Acquisto andato a buon fine!!';
			}
		else
			{
			$reg='Il carrello è vuoto!!!!';
			$style='success';
			}
	}
		echo'
		<div class="container py-5 my-5">
			<div class="row align-items-md-stretch">
				<div class="col"></div>
					<div class="col-md-6">
						<div class="h-100 p-5 bg-light border border-3 border-'.$style.' rounded-3">
						</div>
					</div>
				<div class="col"></div>
			</div>
		</div>';
	header("refresh:4; url=prodotti.php");	
	mysqli_close($con);	
	include('../Templates/Footer.php');
?>