<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$query = "SELECT * FROM acquisto WHERE NumSessione='".session_id()."'";
	$res=mysqli_query($con,$query);
	$row = mysqli_fetch_assoc($res);
	$rowcount=mysqli_num_rows($res);
	if($rowcount>0)
		{
		echo 'Stai acquistando dal nostro sito: '.$row['NomeProdotto'].' alla modica cifra di: '.$row['Prezzo'];
		$prezzo=$row['Prezzo'];
	while($row=mysqli_fetch_assoc($res))
		{
		echo' acquisti anche: '.$row['NomeProdotto'].' alla modica cifra di: '.$row['Prezzo'];
		$prezzo+=$row['Prezzo'];
		}
		echo ' per una spesa totale di: '.$prezzo;
		echo'<a href="concludi.php"<button id="pulsante"><i class="icon-shopping-cart"></i> Vai al pagamento</button></a>';
		}
	else 
		echo 'Carello vuoto';
	mysqli_close($con);	
	include('../Templates/Footer.php');
?>

</body>
</html>