<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$query = "SELECT prezzo, quantita FROM prodotti WHERE ID='".$_GET['ID']."'";
	$res=mysqli_query($con,$query);
	if($res!=false)
		{
		$row = mysqli_fetch_assoc($res);
		$row['quantita']+=$_GET['num'];
		$quer="UPDATE `prodotti` SET `quantita` = '".$row['quantita']."' WHERE `ID` = '".$_GET['ID']."'";
		$re = mysqli_query($con,$quer);
		$query="DELETE FROM `acquisto` WHERE `acquisto`.`NumSessione` = '".session_id()."' AND IDprodotto='".$_GET['ID']."'";
		$res=mysqli_query($con,$query);
		$inserimento='Prodotto eliminato con successo!';
		}
		echo'
			<div class="container py-5 my-5">
				<div class="row align-items-md-stretch">
					<div class="col"></div>
					<div class="col-md-6">
						<div class="h-100 p-5 bg-light border border-3 border-danger rounded-3">
						<p class="testoBase text-center"> '.$inserimento.'</p>
						</div>
					</div>
					<div class="col"></div>
				</div>
			</div>';
	header("refresh:3; url=finisci.php");
	mysqli_close($con);	
?>

</body>
</html>