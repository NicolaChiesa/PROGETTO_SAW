<?php
	include('../Templates/Header.php');
	include('../connessione.php');
	$flag=0;
	$prezzo=0;
	$sommadur="SELECT SUM(Quantita) AS sommadur, Prezzo FROM acquisto WHERE NumSessione='".session_id()."' AND IDprodotto='1'";
	$res=mysqli_query($con,$sommadur);
	$row = mysqli_fetch_assoc($res);
	$rowcount=mysqli_num_rows($res);
	if($rowcount>0 && $row['sommadur']>0)
		{
		echo 'Stai acquistando dal nostro sito: '.$row['sommadur'].' Durlindana alla modica cifra di: '.$row['Prezzo'];
		echo'<a href="elimina.php?ID=1&num='.$row['sommadur'].'">Vuoi eliminare il prodotto?</a>';
		$prezzo+=$row['Prezzo'];
		$flag=1;
		}

	$sommamart="SELECT SUM(Quantita) AS sommamart, Prezzo FROM acquisto WHERE NumSessione='".session_id()."' AND IDprodotto='3'";
	$res=mysqli_query($con,$sommamart);
	$row = mysqli_fetch_assoc($res);
	$rowcount=mysqli_num_rows($res);
	if($rowcount>0 && $row['sommamart']>0)
		{
		echo 'Stai acquistando dal nostro sito: '.$row['sommamart'].' Mjolnir alla modica cifra di: '.$row['Prezzo'];
		echo'<a href="elimina.php?ID=3&num='.$row['sommamart'].'">Vuoi eliminare il prodotto?</a>';
		$prezzo+=$row['Prezzo'];
		$flag=1;
		}

	$sommaexc="SELECT SUM(Quantita) AS sommaexc, Prezzo FROM acquisto WHERE NumSessione='".session_id()."' AND IDprodotto='2'";
	$res=mysqli_query($con,$sommaexc);
	$row = mysqli_fetch_assoc($res);
	$rowcount=mysqli_num_rows($res);
	if($rowcount>0 && $row['sommaexc']>0)
		{
		echo 'Stai acquistando dal nostro sito: '.$row['sommaexc'].' Excalibur alla modica cifra di: '.$row['Prezzo'];
		echo'<a href="elimina.php?ID=2&num='.$row['sommaexc'].'">Vuoi eliminare il prodotto?</a>';
		$prezzo+=$row['Prezzo'];
		$flag=1;
		}

	$sommaol="SELECT SUM(Quantita) AS sommaol, Prezzo FROM acquisto WHERE NumSessione='".session_id()."' AND IDprodotto='4'";
	$res=mysqli_query($con,$sommaol);
	$row = mysqli_fetch_assoc($res);
	$rowcount=mysqli_num_rows($res);
	if($rowcount>0 && $row['sommaol']>0)
		{
		echo 'Stai acquistando dal nostro sito: '.$row['sommaol'].' Olifante alla modica cifra di: '.$row['Prezzo'];
		echo'<a href="elimina.php?ID=4&num='.$row['sommaol'].'">Vuoi eliminare il prodotto?</a>';
		$prezzo+=$row['Prezzo'];
		$flag=1;
		}

	$sommapom="SELECT SUM(Quantita) AS sommapom, Prezzo FROM acquisto WHERE NumSessione='".session_id()."' AND IDprodotto='5'";
	$res=mysqli_query($con,$sommapom);
	$row = mysqli_fetch_assoc($res);
	$rowcount=mysqli_num_rows($res);
	if($rowcount>0 && $row['sommapom']>0)
		{
		echo 'Stai acquistando dal nostro sito: '.$row['sommapom'].' Pomo della Discordia alla modica cifra di: '.$row['Prezzo'];
		echo'<a href="elimina.php?ID=5&num='.$row['sommapom'].'">Vuoi eliminare il prodotto?</a>';
		$prezzo+=$row['Prezzo'];
		$flag=1;
		}

	$sommaruy="SELECT SUM(Quantita) AS sommaruy, Prezzo FROM acquisto WHERE NumSessione='".session_id()."' AND IDprodotto='6'";
	$res=mysqli_query($con,$sommaruy);
	$row = mysqli_fetch_assoc($res);
	$rowcount=mysqli_num_rows($res);
	if($rowcount>0 && $row['sommaruy']>0)
		{
		echo 'Stai acquistando dal nostro sito: '.$row['sommaruy'].' Ruyi Jingu Bang alla modica cifra di: '.$row['Prezzo'];
		echo'<a href="elimina.php?ID=6&num='.$row['sommaruy'].'">Vuoi eliminare il prodotto?</a>';
		$prezzo+=$row['Prezzo'];
		$flag=1;
		}
	if($flag==0)
		echo'Carrello vuoto';
	else
		{
		echo ' per una spesa totale di: '.$prezzo;
		echo'<a href="concludi.php"<button id="pulsante"><i class="icon-shopping-cart"></i> Vai al pagamento</button></a>';
		}
	mysqli_close($con);	
	include('../Templates/Footer.php');
?>

</body>
</html>